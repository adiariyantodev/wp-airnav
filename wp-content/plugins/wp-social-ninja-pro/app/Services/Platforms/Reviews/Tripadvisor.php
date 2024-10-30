<?php

namespace WPSocialReviewsPro\App\Services\Platforms\Reviews;

use WPSocialReviews\App\Services\Platforms\Reviews\BaseReview;
use WPSocialReviews\App\Services\Libs\SimpleDom\Helper;
use WPSocialReviews\App\Services\Platforms\Reviews\Helper as ReviewsHelper;
use WPSocialReviews\Framework\Support\Arr;
use WPSocialReviewsPro\App\Services\Helper as ProHelper;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Handle Tripadvisor Reviews
 * @since 1.0.0
 */
class Tripadvisor extends BaseReview
{
    private $remoteBaseUrl = 'https://tripadvisor.com';
    private $placeId = null;

    public function __construct()
    {
        parent::__construct(
            'tripadvisor',
            'wpsr_reviews_tripadvisor_settings',
            'wpsr_tripadvisor_reviews_update'
        );
    }

    public function handleCredentialSave($settings = array())
    {
        $downloadUrl = $settings['url_value'];
        try {
            $businessInfo = $this->verifyCredential($downloadUrl);
            $message = ReviewsHelper::getNotificationMessage($businessInfo, $this->placeId);

            if (Arr::get($businessInfo, 'total_fetched_reviews') && Arr::get($businessInfo, 'total_fetched_reviews') > 0) {
                // save caches when auto sync is on
                $apiSettings = get_option('wpsr_tripadvisor_global_settings');
                if(Arr::get($apiSettings, 'global_settings.auto_syncing') === 'true') {
                    $this->saveCache();
                }
            }

            wp_send_json_success([
                'message'       => $message,
                'business_info' => $businessInfo
            ], 200);
        } catch (\Exception $exception) {
            wp_send_json_error([
                'message' => $exception->getMessage()
            ], 423);
        }
    }

    public function unescape_unicode($string) {
        return preg_replace_callback(
            '/\\\\u([0-9a-fA-F]{4})/',
            function ($match) {
                return mb_convert_encoding(
                    pack('H*', $match[1]),
                    'UTF-8',
                    'UTF-16BE'
                );
            },
            $string
        );

    }

    public function getValidHotelsJson($text)
    {
        if(empty($text)){
            return;
        }

        $text = stripslashes($text);

        $reviewAggregations = explode('reviewAggregations', $text);
        $reviewAggregations = Arr::get($reviewAggregations, '1');

        if($reviewAggregations && empty($this->placeId)){
            $reviewAggregationsStart   = strpos($reviewAggregations, '"name":"') + strlen('"name":"');
            $reviewAggregationsEnd   = strpos($reviewAggregations, '","url"');
            $name = substr($reviewAggregations, $reviewAggregationsStart, $reviewAggregationsEnd - $reviewAggregationsStart);
            $name = strtolower(str_replace(' ', '-', $name));
            $this->placeId = preg_replace("/&#?[a-z0-9]+;/i","", $name);
        }

        $text = explode('"reviews":[{', $text);
        $text = Arr::get($text, '1');

        $separator = '"reviews":[{';
        $start   = strpos($text, $separator);
        $position = strpos($text, ']}"}');
        $text = '{"reviews":[{' . substr($text, $start, $position - $start);
        $text = substr($text, 0, -1);

        $reviewsData = json_decode($text, true);
        $reviews = Arr::get($reviewsData, 'reviews');

        return $reviews;
    }

    public function getValidRentalsJson($text)
    {
        if(empty($text)){
            return;
        }

        $text = stripslashes($text);
        $text = explode('"locationReviews":[[{', $text);
        $text = Arr::get($text, '1');

        $separator = '"locationReviews":[[{';
        $start   = strpos($text, $separator);
        $position = strpos($text, ']}"}');
        $text = '{"locationReviews":[[{' . substr($text, $start, $position - $start);
        $text = $text.']}';
        $reviewsData = json_decode($text, true);
        $reviews = Arr::get($reviewsData, 'locationReviews.0');
        return $reviews;
    }

    public function getReviewsFromScripts($scripts, $isHotel)
    {
        $reviewsData = NULL;
        foreach ($scripts as $script) {
            $text = $script->innertext;
            if (strpos($text, 'dow.__WEB_CONTEXT__')) {
                $reviewsData = $text;
            }
        }

        $reviewsData = $this->unescape_unicode($reviewsData);
        $reviews = (($isHotel) ? $this->getValidHotelsJson($reviewsData) : $this->getValidRentalsJson($reviewsData));

        return $reviews;
    }

    public function verifyCredential($downloadUrl)
    {
        ini_set('memory_limit', '512M');
        if (empty($downloadUrl)) {
	        throw new \Exception(
		        __('URL field should not be empty!', 'wp-social-ninja-pro')
	        );
        }

        if(!filter_var($downloadUrl, FILTER_VALIDATE_URL)) {
            throw new \Exception(
                __('Please enter a valid url!', 'wp-social-ninja-pro')
            );
        }

        if (strpos($downloadUrl, '#')) {
            $downloadUrl = explode('#', $downloadUrl);
            $downloadUrl = $downloadUrl[0];
        }
        $stripVariableUrl = strtok($downloadUrl, '?');

        $businessDetails = $this->downloadBusinessInfo($stripVariableUrl);

        if (Arr::get($businessDetails, 'place_id', false)) {
            $this->placeId = Arr::get($businessDetails, 'place_id').'-'.$this->platform;
        }

        //find urls for pagination
        $tripadvisorUrl = array();
        if (strpos($downloadUrl, 'Restaurant_Review') !== false || strpos($downloadUrl,
                'VacationRentalReview') !== false || strpos($downloadUrl, 'Restaurant_Review') !== false
            || strpos($downloadUrl, 'AttractionProductReview') !== false ||
            strpos($downloadUrl,'Hotel_Review') !== false || strpos($downloadUrl, 'Attraction_Review') !== false
        ) {
            $counter = 10;
            if(strpos($downloadUrl, 'Restaurant_Review') !== false) {
                $counter = 15;
            } else if (strpos($downloadUrl, 'AttractionProductReview') !== false  || strpos($downloadUrl, 'Attraction_Review') !== false || strpos($downloadUrl, 'VacationRentalReview') !== false) {
                $counter = 10;
            } else if (strpos($downloadUrl, 'Hotel_Review') !== false) {
                $counter = 10;
            }

//            $totalReviews = Arr::get($businessDetails, 'total_reviews', 100);
//            $pages = $totalReviews/$counter;

             $url = str_replace('-or5', '', $downloadUrl);
             $url = str_replace('-or10', '', $url);
             $url = str_replace('-or15', '', $url);
             $tripadvisorUrl[0] = $url;

             for ($i = 1; $i < 5; $i++) {
                 $paginateHtml     = "-or" . ($i * $counter) . ".html";
                 $tripadvisorUrl[] = str_replace(".html", $paginateHtml, $url);
             }
        }

         sleep(rand(0, 2));

         $tripadvisorUrl = array_filter($tripadvisorUrl);

         $reviews        = [];
         $foundAll = false;

         foreach ($tripadvisorUrl as $index => $urlValue) {
            $fileUrlContents = wp_remote_retrieve_body(wp_remote_get($urlValue));

            if (empty($fileUrlContents) && $index >= 1) {
                break;
            }

//            if(strpos($fileUrlContents, 'Please enable JS and disable any ad blocker') !== false){
//                throw new \Exception(
//                    __('Request limit exceeded! Please try again after 1 hour.', 'wp-social-ninja-pro')
//                );
//            }
            if (empty($fileUrlContents)) {
                throw new \Exception(
                    __('Can\'t fetch reviews due to slow network, please try again', 'wp-social-ninja-pro')
                );
            }

        //fix for lazy load base64 ""
        $fileUrlContents = str_replace('==', '', $fileUrlContents);
        $html            = Helper::str_get_html($fileUrlContents);


        $isHotel = strpos($urlValue, "Hotel_Review");
        if(!empty($urlValue) && $isHotel !== false || strpos($urlValue, "VacationRentalReview") !== false) {

            if ($divElement = $html->find('div.jVDab', 0)) {
                if ($spanBiGQs = $divElement->find('span.biGQs', 0)) {
                    if ($spanYyzcQ = $spanBiGQs->find('span.yyzcQ', 0)) {
                        $reviewCount = $spanYyzcQ->innertext;
                        $totalReviews = Arr::get($businessDetails, 'total_reviews',0);
                        $totalRating = Arr::get($businessDetails, 'average_rating',0);
                        if($totalReviews < 1 && $totalRating > 1){
                            $businessDetails['total_reviews'] = $reviewCount;
                        }
                    }
                }
            }

            $scripts = $html->find('script');
            $reviewsCollections = $this->getReviewsFromScripts($scripts, $isHotel);

            if(!empty($reviewsCollections)) {
                foreach ($reviewsCollections as $review) {
                    $reviewerUrl = !empty(Arr::get($review, 'userProfile.route.url')) ? $this->remoteBaseUrl . Arr::get($review, 'userProfile.route.url') : $urlValue;

                    $reviews[] = [
                        'source_id'     => $this->placeId,
                        'review_id'     => Arr::get($review, 'id'),
                        'review_title'  => Arr::get($review, 'title'),
                        'reviewer_name' => Arr::get($review, 'username'),
                        'review_rating' => Arr::get($review, 'rating'),
                        'publishedDate' => Arr::get($review, 'publishedDate'),
                        'reviewer_text' => Arr::get($review, 'text'),
                        'reviewerImage' => Arr::get($review, 'userProfile.avatar.photoSizes.1.url'),
                        'reviewer_url'  => $reviewerUrl
                    ];
                }
            }
        }

         if(strpos($urlValue, "Restaurant_Review") !== false || strpos($urlValue, "Attraction_Review") !== false || strpos($urlValue, "AttractionProductReview") !== false) {
            // if(empty($reviews)) {
            $reviewsContainer = '';

             if($html->find('section[id=REVIEWS]')) {
                 if($html->find('div[id=tab-data-qa-reviews-0]')) {
                     if($html->find('div[id=tab-data-qa-reviews-0]', 0)->find('div.eSDnY')) {
                         if($html->find('div[id=tab-data-qa-reviews-0]', 0)->find('div.eSDnY', 0)->find('div.LbPSX')) {
                             if($html->find('div[id=tab-data-qa-reviews-0]', 0)->find('div.eSDnY', 0)->find('div.LbPSX', 0)->find('div[data-ft=true]')) {
                                 $reviewsContainer = $html->find('div[id=tab-data-qa-reviews-0]', 0)->find('div.eSDnY', 0)->find('div.LbPSX', 0)->find('div[data-ft=true]');
                             }
                         }
                     }
                 }
             }

            //restaurants
            if(empty($reviewsContainer) && $html->find('div[id=taplc_location_reviews_list_resp_rr_resp_0]')) {
                if($html->find('div[id=taplc_location_reviews_list_resp_rr_resp_0]', 0)->find('div.listContainer')) {
                    if($html->find('div[id=taplc_location_reviews_list_resp_rr_resp_0]', 0)->find('div.listContainer', 0)->find('div.review-container')) {
                        $reviewsContainer = $html->find('div[id=taplc_location_reviews_list_resp_rr_resp_0]', 0)->find('div.listContainer', 0)->find('div.review-container');
                    }
                }
            }

            if(empty($reviewsContainer)) {
                break;
            }

            //if vacation rental then, collect review text from script
            if(strpos($downloadUrl, 'VacationRentalReview')) {
                $scripts = $html->find('script[type=application/ld+json]');

                $reviewTexts = [];
                foreach ($scripts as $script) {
                    $script = $script->innertext;
                    $data = json_decode($script, true);
                    if(Arr::get($data, 'review', false)) {
                        $scriptReviews = Arr::get($data, 'review');
                        if(count($scriptReviews)) {
                            foreach ($scriptReviews as $review) {
                                $reviewTexts[] = Arr::get($review, 'reviewBody');
                            }
                            break;
                        }
                    }
                }
            }


            if(!empty($reviewsContainer)){
                foreach ($reviewsContainer as $key => $review) {
                    $reviewText = '';
                    if(strpos($downloadUrl, 'VacationRentalReview')) {
                        $reviewText = isset($reviewTexts[$key]) ? $reviewTexts[$key] : '';
                    } else {
                        $reviewText = $this->getReviewerText($review);
                    }

                    if(count($reviews) >= (int)Arr::get($businessDetails, 'total_reviews')) {
                        $foundAll = 1;
                        break;
                    }

                    $reviews[] = [
                        'source_id'     => $this->placeId,
                        'reviewer_name' => $this->getReviewerName($review),
                        'review_title'  => $this->getReviewTitle($review),
                        'review_rating' => $this->getReviewRating($review),
                        'publishedDate' => $this->getReviewDate($review),
                        'reviewer_text' => $reviewText,
                        'reviewerImage' => $this->getReviewerImage($review),
                        'reviewer_url'  => $downloadUrl
                    ];
                }

                if($foundAll) {
                    break;
                }
            }
        }

            //sleep for random 2 seconds
            sleep(rand(0, 2));
            // clean up memory
            if (!empty($html)) {
                $html->clear();
                unset($html);
            }
         }

        $businessInfo = $this->saveBusinessInfo($businessDetails);
        $totalFetchedReviews = count($reviews);

        if ($totalFetchedReviews > 0 && !empty($this->placeId) && !empty(Arr::get($businessDetails, 'name'))) {
            $this->syncRemoteReviews($reviews);
            $this->saveApiSettings([
                'api_key' => '479711fa-64ba-47ce-b63b-9c2ba8d663f9',
                'place_id' => $this->placeId,
                'url_value' => $downloadUrl
            ]);
            update_option('wpsr_reviews_tripadvisor_business_info', $businessInfo, 'no');
        }

        $businessInfo['total_fetched_reviews'] = $totalFetchedReviews;
        return $businessInfo;
    }

    public function getReviewDate($review)
    {
        $reviewDate = '';

        //attractions
        if($review->find('div.TreSq')) {
            $reviewDate = $review->find('div.TreSq', 0)->find('div.ncFvv', 0);
            if($reviewDate){
                $reviewDate = strip_tags($reviewDate);
            }
        }
        // Restaurant Reviews
        else if($review->find('div.ratingDate')) {
            if($review->find('div.ratingDate', 0)) {
                $reviewDate = strip_tags($review->find('div.ratingDate', 0));
            }
        }

        if($reviewDate) {
            $reviewDate = substr(strstr($reviewDate," "), 1);
            $reviewDate = str_replace('am', "",$reviewDate); //for german language
            $reviewDate = str_replace('.', "",$reviewDate);
            $reviewDate = trim($reviewDate, ' ');
            $dateSubmitted = ProHelper::unixTimeStamp($reviewDate);
            $reviewDate = date("Y-m-d H:i:s", $dateSubmitted);
        }

        return $reviewDate;
    }

    public function getReviewerImage($review)
    {
        $reviewerImage = '';
        //restaurants
        if(empty($reviewerImage) && $review->find('div.ui_avatar')) {
            if($review->find('div.ui_avatar', 0)->find('img.basicImg')) {
                $reviewerImage = $review->find('div.ui_avatar', 0)->find('img.basicImg', 0)->{"data-lazyurl"};
            }
        }

        //attraction / attraction product reviews
        else if($review->find('picture.NhWcC')) {
            if($review->find('picture.NhWcC', 0)->find('img')) {
                $reviewerImage = $review->find('picture.NhWcC', 0)->find('img', 0)->src;
            }
        }

        //attraction
        else if(empty($reviewerImage) && $review->find('a.ui_social_avatar')) {
            if($review->find('a.ui_social_avatar', 0)->find('img')) {
                $reviewerImage = $review->find('a.ui_social_avatar', 0)->find('img', 0)->src;
            }
        }

        //vacation rental reviews
        else if(empty($reviewerImage) && $review->find('div.ui_avatar')) {
            if($review->find('div.ui_avatar', 0)->find('img')) {
                $reviewerImage = $review->find('div.ui_avatar', 0)->find('img', 0)->src;
            }
        }

        return $reviewerImage;
    }

    public function getReviewerText($review)
    {
        $reviewText = '';
        //attraction / attraction product reviews
        if($review->find('div.FKffI')) {
            if($review->find('div.FKffI', 0)->find('span.yCeTE')) {
                $reviewText = $review->find('div.FKffI', 0)->find('span.yCeTE', 0)->innertext;
            }
        }

        //attraction review
        else if(empty($reviewText) && $review->find('q.QewHA')) {
            $reviewText = $review->find('q.QewHA', 0)->plaintext;
        }

        //restaurants reviews
        else if(empty($reviewText) && $review->find('div.prw_reviews_text_summary_hsx')) {
            if($review->find('div.prw_reviews_text_summary_hsx', 0)->find('p.partial_entry')) {
                $reviewText = $review->find('div.prw_reviews_text_summary_hsx', 0)->find('p.partial_entry', 0)->plaintext;

                //remove read more text
                if(strpos($reviewText, '...')) {
                    $reviewText = str_replace('...', ' ', $reviewText);

                    $words = explode(" ", $reviewText);
                    if(count($words) >= 2) {
                        array_pop($words);
                        array_pop($words);
                    }
                    $reviewText = implode( " ", $words );
                }
            }
        }

        return $reviewText;
    }

    public function getReviewRating($review)
    {
        $reviewRating = '';
        //attractions
        if($review->find('svg.UctUV')) {
            $reviewRatingTxt = $review->find('svg.UctUV', 0)->{'aria-label'};
            $reviewRating = str_replace('of 5 bubbles', '', $reviewRatingTxt);
            $reviewRating = trim($reviewRating, " ");
        }

        //restaurants / vacation rental review
        else if(empty($reviewRating) && $review->find('span.ui_bubble_rating')) {
            $reviewRatingTxt = $review->find('span.ui_bubble_rating', 0)->class;
            $ratingValue = filter_var($reviewRatingTxt, FILTER_SANITIZE_NUMBER_INT);
            if($ratingValue && $ratingValue > 0) $ratingValue /= 10;
            $reviewRating = $ratingValue;
        }

        return $reviewRating;
    }

    public function getReviewerName($review)
    {
        //attraction / attraction product review
        $reviewerName = '';
        if($review->find('div.zpDvc')) {
            if($review->find('div.zpDvc', 0)->find('a.BMQDV')) {
                $reviewerName = $review->find('div.zpDvc', 0)->find('a.BMQDV', 0)->plaintext;
            }
        }

        //attraction
        else if(empty($reviewerName) && $review->find('a.ui_header_link')) {
            $reviewerName = $review->find('a.ui_header_link', 0)->innertext;
        }

        //restaurants
        else if(empty($reviewerName) && $review->find('div.member_info')) {
            if($review->find('div.member_info', 0)->find('div.info_text')) {
                if($review->find('div.member_info', 0)->find('div.info_text', 0)->find('div')) {
                    $reviewerName = $review->find('div.member_info', 0)->find('div.info_text', 0)->find('div', 0)->innertext;
                }
            }
        }

        //vacation rental
        else if(empty($reviewerName) && $review->find('div.username')) {
            if($review->find('div.username', 0)->find('span.scrname')) {
                $reviewerName = $review->find('div.username', 0)->find('span.scrname', 0)->innertext;
            }
        }

        return $reviewerName;
    }

    public function getReviewTitle($review)
    {
        $title = "";
        //attractions
        if($review->find('span.yCeTE')) {
            $title = $review->find('span.yCeTE', 0)->innertext;
        }

        //restaurants
        else if(empty($title) && $review->find('span.noQuotes')) {
            $title = $review->find('span.noQuotes', 0)->innertext;
        }

        return $title;
    }

    public function pushValidPlatform($platforms)
    {
        $settings    = $this->getApiSettings();
        if (!isset($settings['data']) && sizeof($settings) > 0) {
            $platforms['tripadvisor'] = __('Tripadvisor', 'wp-social-ninja-pro');
        }
        return $platforms;
    }

    public function formatData($review, $index)
    {
        return [
            'platform_name' => $this->platform,
            'source_id'     => Arr::get($review, 'source_id'),
            'review_id'     => Arr::get($review, 'review_id', ''),
            'reviewer_name' => Arr::get($review, 'reviewer_name'),
            'review_title'  => Arr::get($review, 'review_title', ''),
            'reviewer_url'  => Arr::get($review, 'reviewer_url'),
            'reviewer_img'  => Arr::get($review, 'reviewerImage'),
            'reviewer_text' => Arr::get($review, 'reviewer_text', ''),
            'rating'        => Arr::get($review, 'review_rating'),
            'review_time'   => Arr::get($review, 'publishedDate'),
            'review_approved' => 1,
            'updated_at'    => date('Y-m-d H:i:s'),
            'created_at'    => date('Y-m-d H:i:s')
        ];
    }

    public function saveBusinessInfo($data = array())
    {
        $businessInfo  = [];
        $infos         = $this->getBusinessInfo();
        $infos = empty($infos) ? [] : $infos;
        if ($data && is_array($data) && !empty($this->placeId) && !empty(Arr::get($data, 'name', ''))) {
            $placeId                          = $this->placeId;
            $businessInfo['place_id']         = $placeId;
            $businessInfo['name']             = Arr::get($data, 'name', '');
            $businessInfo['url']              = Arr::get($data, 'url', '');
            $businessInfo['address']          = '';
            $businessInfo['average_rating']   = Arr::get($data, 'average_rating');
            $businessInfo['total_rating']     = Arr::get($data, 'total_reviews');
            $businessInfo['phone']            = '';
            $businessInfo['platform_name']    = $this->platform;
            $businessInfo['status']           = true;
            $infos[$placeId]                  =  $businessInfo;
        }
        return $infos;
    }

    public function getBusinessInfo()
    {
        return get_option('wpsr_reviews_tripadvisor_business_info');
    }

    public function saveApiSettings($settings)
    {
        $apiKey       = $settings['api_key'];
        $placeId      = $settings['place_id'];
        $businessUrl  = $settings['url_value'];
        $apiSettings  = $this->getApiSettings();

        if(isset($apiSettings['data']) && !$apiSettings['data']) {
            $apiSettings = [];
        }

        if($apiKey && $placeId && $businessUrl){
            $apiSettings[$placeId]['api_key'] = $apiKey;
            $apiSettings[$placeId]['place_id'] = $placeId;
            $apiSettings[$placeId]['url_value'] = $businessUrl;
        }
        return update_option($this->optionKey, $apiSettings, 'no');
    }

    public function getApiSettings()
    {
        $settings = get_option($this->optionKey);
        if (!$settings) {
            $settings = [
                'api_key'   => '',
                'place_id'  => '',
                'url_value' => '',
                'data'      => false
            ];
        }
        return $settings;
    }

    public function getAdditionalInfo()
    {
        return [];
    }

    public function downloadBusinessInfo($currentUrl)
    {
        $fileUrlContents = wp_remote_retrieve_body(wp_remote_get($currentUrl));
        if(empty($fileUrlContents)) {
	        throw new \Exception(
		        __('Can\'t fetch reviews due to slow network, please try again', 'wp-social-ninja-pro')
	        );
        }

        $html            = Helper::str_get_html($fileUrlContents);
        $scripts = $html->find('script[type=application/ld+json]');
        $businessInfo = [];

        foreach ($scripts as $script) {
            $script = $script->innertext;
            $data = json_decode($script, true);
            if(Arr::get($data, 'aggregateRating', false)) {
                $businessName =  Arr::get($data, 'name');
                $placeId = strtolower(str_replace(' ', '-', $businessName));
                $businessInfo['average_rating'] = Arr::get($data, 'aggregateRating.ratingValue');
                $businessInfo['total_reviews']  = Arr::get($data, 'aggregateRating.reviewCount');
                $businessInfo['name']           = $businessName;
                $businessInfo['url']            = Arr::get($data, 'url', false) ? $this->remoteBaseUrl.Arr::get($data, 'url') : $currentUrl;
                $placeId = $this->getPlaceId($businessInfo).$placeId;
                $businessInfo['place_id']       = preg_replace("/&#?[a-z0-9]+;/i","", $placeId);
            }
        }
        return $businessInfo;
    }

    public function getPlaceId($businessInfo)
    {
        preg_match("/-g(\d+)-/", $businessInfo['url'], $matches);
        $this->placeId = 'g' . $matches[1];
        return $this->placeId;
    }
}