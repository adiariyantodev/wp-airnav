<?php

namespace WPSocialReviews\App\Services\Platforms\Reviews;

use WPSocialReviews\App\Models\Review;
use WPSocialReviews\Framework\Support\Arr;
use WPSocialReviews\App\Services\Helper as GlobalHelper;
use WPSocialReviews\App\Services\GlobalSettings;

if (!defined('ABSPATH')) {
    exit;
}

class Helper
{
    public static function getConnectedAccountsBusinessInfo($platforms)
    {
        $business_info = [];
        foreach ($platforms as $index => $platform) {
            $infos = get_option('wpsr_reviews_'.$platform.'_business_info');
            if(!empty($infos)) {
                $business_info += get_option('wpsr_reviews_'.$platform.'_business_info');
            } else {
                //for custom or fluent forms
                if($platform === 'custom'){
                    $data = Review::getInternalBusinessInfo($platform);
                    if(!empty($data) && is_array($data)){
                        $business_info += $data;
                    }
                }    
            }
        }
        return $business_info;
    }

    public static function getNotificationMessage($businessInfo = [], $key = '')
    {
        $downloadedReviews = Arr::get($businessInfo, 'total_fetched_reviews');
        $businessName = Arr::get($businessInfo, $key.'.name');

        $message = __('Reviews fetched successfully!!', 'wp-social-reviews');
        if ($downloadedReviews && $businessName && $downloadedReviews > 0) {
            $message = __($downloadedReviews. ' reviews fetched successfully from '. $businessName .'!!', 'wp-social-reviews');
        } else if($downloadedReviews && $downloadedReviews > 0) {
            $message = __($downloadedReviews. ' reviews fetched successfully!!', 'wp-social-reviews');
        } else if (empty($downloadedReviews) || $downloadedReviews < 1) {
            throw new \Exception(
                __('Reviews fetched failed, Please try again!!', 'wp-social-reviews')
            );
        }

        return $message;
    }

    public static function formattedTemplateMeta($settings = array())
    {
        $platform = Arr::get($settings, 'platform', []);

        $template = in_array('testimonial', $platform) ? 'testimonial1' : 'grid1';
        $timestamp = in_array('testimonial', $platform) ? 'false' : 'true';
	    $selectedIncList = Arr::get($settings, 'selectedIncList', []);
	    $selectedExcList = Arr::get($settings, 'selectedExcList', []);
	    $filterByTitle   = Arr::get($settings, 'filterByTitle', 'all');

		if (empty($selectedExcList) && empty($selectedIncList)) {
			$filterByTitle = 'all';
		}

        // support old minimum rating values 11/6
        if((Arr::get($settings, 'starFilterVal') === 11) || (!in_array('booking.com', $platform) && Arr::get($settings, 'starFilterVal') >= 6)) {
            $settings['starFilterVal']  = -1;
        }

        extract(static::getCarouselSettings($settings));

        //notification and badge old settings compatible for new version
        $notification_settings = Arr::get($settings, 'notification_settings');
        if(!Arr::get($notification_settings, 'display_mode', 'false')) {
            $settings['notification_settings']['display_mode'] = (Arr::get($notification_settings, 'display_reviews_on_click') === 'true') ? 'popup' : 'none';
        }

        $badge_settings = Arr::get($settings, 'badge_settings');
        if(!Arr::get($badge_settings, 'display_mode', 'false')) {
            $settings['badge_settings']['display_mode'] = (Arr::get($badge_settings, 'display_reviews_on_click') === 'true') ? 'popup' : 'none';
        }

        return array (
            //source
            'platform'       => $platform,

            //template
            'platformType'   => Arr::get($settings, 'platformType', 'single'),
            'template'       => Arr::get($settings, 'template', $template),
            'templateType'   => Arr::get($settings, 'templateType',  'grid'),
            'column'         => Arr::get($settings, 'column', '4'),
            'responsive_column_number'  => array(
                'desktop'  => Arr::get($settings, 'responsive_column_number.desktop', Arr::get($settings,'column', '4')),
                'tablet'   => Arr::get($settings, 'responsive_column_number.tablet','4'),
                'mobile'   => Arr::get($settings, 'responsive_column_number.mobile', '12')
            ),
            //settings
            'reviewer_name'  => Arr::get($settings, 'reviewer_name', 'true'),
            'author_position'    => Arr::get($settings, 'author_position', 'true'),
            'author_company_name'   => Arr::get($settings, 'author_company_name', 'false'),
            'website_logo'   => Arr::get($settings, 'website_logo', 'true'),
            'rating_style'   => Arr::get($settings, 'rating_style', 'default'),
            'reviewer_image' => Arr::get($settings, 'reviewer_image', 'true'),
            'timestamp'      => Arr::get($settings, 'timestamp', $timestamp),
            'reviewerrating' => Arr::get($settings, 'reviewerrating', 'true'),
            'resolution' => Arr::get($settings, 'resolution', 'full'),

            'platform_label' => sanitize_text_field(Arr::get($settings, 'platform_label', __('On Site', 'wp-social-reviews'))),

            'equal_height'      => Arr::get($settings, 'equal_height', 'false'),
            'equalHeightLen'    => (int)Arr::get($settings, 'equalHeightLen', '250'),
            'content_length'    => (int)Arr::get($settings, 'content_length', 10),
            'contentLanguage'   => Arr::get($settings, 'contentLanguage', 'original'),
            'contentType'       => Arr::get($settings, 'contentType', 'excerpt'),
            'enableExternalLink'           => Arr::get($settings, 'enableExternalLink', 'true'),

            'display_review_title'         => Arr::get($settings, 'display_review_title', 'true'),
            'isReviewerText'               => Arr::get($settings, 'isReviewerText', 'true'),
            'isPlatformIcon'               => Arr::get($settings, 'isPlatformIcon', 'true'),
            'current_template_type'        => Arr::get($settings, 'current_template_type', 'grid'),

            //carousel
            'carousel_settings' => array(
                'autoplay'                     => Arr::get($settings, 'carousel_settings.autoplay', $autoplay),
                'autoplay_speed'               => (int)Arr::get($settings,'carousel_settings.autoplay_speed', $autoplay_speed),
                'slides_to_show'               => (int)Arr::get($settings,'carousel_settings.slides_to_show', $slides_to_show),
                'spaceBetween'                 => (int) Arr::get($settings,'carousel_settings.spaceBetween', 20),
                'responsive_slides_to_show'  => array(
	                'desktop'  => (int)Arr::get($settings, 'carousel_settings.responsive_slides_to_show.desktop', Arr::get($settings, 'carousel_settings.slides_to_show', $slides_to_show)),
	                'tablet'   => (int)Arr::get($settings, 'carousel_settings.responsive_slides_to_show.tablet',2),
	                'mobile'   => (int)Arr::get($settings, 'carousel_settings.responsive_slides_to_show.mobile', 1)
                ),
                'slides_to_scroll'             => (int)Arr::get($settings, 'carousel_settings.slides_to_scroll', $slides_to_scroll),
                'responsive_slides_to_scroll'             => array(
	                'desktop'  => (int)Arr::get($settings, 'carousel_settings.responsive_slides_to_scroll.desktop', Arr::get($settings, 'carousel_settings.slides_to_scroll', $slides_to_scroll)),
	                'tablet'   => (int)Arr::get($settings, 'carousel_settings.responsive_slides_to_scroll.tablet',2),
	                'mobile'   => (int)Arr::get($settings, 'carousel_settings.responsive_slides_to_scroll.mobile', 1)
                ),
                'navigation'                   => Arr::get($settings,'carousel_settings.navigation', $navigation),
            ),

            //filters
            'totalReviewsVal'              => (int)Arr::get($settings, 'totalReviewsVal', '50'),
            'totalReviewsNumber'           => array(
                'desktop'   => (int)Arr::get($settings, 'totalReviewsNumber.desktop', Arr::get($settings, 'totalReviewsVal', '50')),
                'mobile'    => (int)Arr::get($settings, 'totalReviewsNumber.mobile', Arr::get($settings, 'totalReviewsVal', '50'))
            ),
            'starFilterVal'                => (int)Arr::get($settings, 'starFilterVal', -1),
            'filterByTitle'                => $filterByTitle,
            'selectedIncList'              => $selectedIncList,
            'selectedExcList'              => $selectedExcList,
            'includes_inputs'              => sanitize_text_field(Arr::get($settings, 'includes_inputs', '')),
            'excludes_inputs'              => sanitize_text_field(Arr::get($settings, 'excludes_inputs', '')),
            'order'                        => Arr::get($settings, 'order', 'desc'),
            'hide_empty_reviews'           => Arr::get($settings, 'hide_empty_reviews', false),
            'selectedBusinesses'           => Arr::get($settings, 'selectedBusinesses', []),
            'selectedCategories'           => Arr::get($settings, 'selectedCategories', []),

            //header
            'show_header'                  => Arr::get($settings,'show_header', 'false'),
            'display_header_business_logo' => Arr::get($settings, 'display_header_business_logo', true),
            'display_header_business_name' => Arr::get($settings,'display_header_business_name', true),
            'display_header_rating'        => Arr::get($settings,'display_header_rating', true),
            'display_header_reviews'       => Arr::get($settings,'display_header_reviews', true),
            'display_header_write_review'  => Arr::get($settings,'display_header_write_review', true),
            'custom_write_review_text'     => sanitize_text_field(Arr::get($settings,'custom_write_review_text', __('Write a Review','wp-social-reviews'))),
            'custom_title_text'                 => sanitize_text_field(Arr::get($settings,'custom_title_text', '')),
            'custom_number_of_reviews_text'     => sanitize_text_field(Arr::get($settings,'custom_number_of_reviews_text', __('Based on {total_reviews} Reviews', 'wp-social-reviews'))),
            'display_tp_brand'             => Arr::get($settings, 'display_tp_brand', 'false'),

            //pagination
            'pagination_type'         => Arr::get($settings, 'pagination_type', 'none'),
            'load_more_button_text'   => sanitize_text_field(Arr::get($settings, 'load_more_button_text', __('Load More', 'wp-social-reviews'))),
            'paginate'                => (int)Arr::get($settings,'paginate', '6'),

            //Badge Settings
	        'badge_settings' => array (
		        'template'                  => Arr::get($settings,'badge_settings.template', 'badge1'),
		        'badge_position'            => Arr::get($settings,'badge_settings.badge_position', 'default'),
		        'display_platform_icon'     => Arr::get($settings,'badge_settings.display_platform_icon', 'true'),
		        'custom_title'              => sanitize_text_field(Arr::get($settings,'badge_settings.custom_title', __('Rating', 'wp-social-reviews'))),
                'custom_num_of_reviews_text'=> sanitize_text_field(Arr::get($settings, 'badge_settings.custom_num_of_reviews_text', __('Read our {reviews_count} Reviews', 'wp-social-reviews'))),
                'display_mode'  => Arr::get($settings,'badge_settings.display_mode', 'popup'),
                'url'        => sanitize_url(Arr::get($settings,'badge_settings.url', '')),
                'custom_url' => sanitize_url(Arr::get($settings,'badge_settings.custom_url', '')),
                'id'         => Arr::get($settings,'badge_settings.id', ''),
                'open_in_new_window' => Arr::get($settings,'badge_settings.open_in_new_window', 'true'),
	        ),

	        //Notification Settings
            'notification_settings' => array(
                'template'                  => Arr::get($settings,'notification_settings.template', 'notification1'),
                'notification_position'     => Arr::get($settings,'notification_settings.notification_position', 'float_left_bottom'),
                'display_mode'              => Arr::get($settings,'notification_settings.display_mode', 'popup'),
                'custom_url'                => sanitize_url(Arr::get($settings,'notification_settings.custom_url', '')),
                'id'                        => Arr::get($settings,'notification_settings.id', null),
                'url'                       => sanitize_url(Arr::get($settings,'notification_settings.url', '')),
                'page_list'                 => Arr::get($settings,'notification_settings.page_list', array('-1')),
                'exclude_page_list'         => Arr::get($settings,'notification_settings.exclude_page_list', array()),
                'post_types'                => Arr::get($settings,'notification_settings.post_types', array()),
                'hide_on_desktop'           => Arr::get($settings,'notification_settings.hide_on_desktop', 'false'),
                'hide_on_mobile'            => Arr::get($settings,'notification_settings.hide_on_mobile', 'false'),
                'notification_priority'     => Arr::get($settings,'notification_settings.notification_priority', 0),
                'display_close_button'      => Arr::get($settings,'notification_settings.display_close_button', 'true'),
                'display_date'              => Arr::get($settings,'notification_settings.display_date', 'true'),
                'custom_notification_text'  => sanitize_text_field(Arr::get($settings,'notification_settings.custom_notification_text', __('Just left us a {review_rating} star review', 'wp-social-reviews'))),
                'initial_delay'             => (int) Arr::get($settings,'notification_settings.initial_delay', 6000),
                'notification_delay'        => (int) Arr::get($settings,'notification_settings.notification_delay', 5000),
                'delay_for'                 => (int) Arr::get($settings,'notification_settings.delay_for', 5000),
                'display_read_all_reviews_btn'  => Arr::get($settings,'notification_settings.display_read_all_reviews_btn', 'false'),
                'read_all_reviews_btn_url'  => sanitize_url(Arr::get($settings,'notification_settings.read_all_reviews_btn_url', '#')),
            ),
            'enable_schema'         => Arr::get($settings,'enable_schema', 'false'),
            'schema_settings' => array (
                'business_logo'                => Arr::get($settings,'schema_settings.business_logo', ''),
                'business_name'                => sanitize_text_field(Arr::get($settings,'schema_settings.business_name', '')),
                'business_type'                => sanitize_text_field(Arr::get($settings,'schema_settings.business_type', '')),
                'business_telephone'           => sanitize_text_field(Arr::get($settings,'schema_settings.business_telephone', '')),
                'include_business_address'     => Arr::get($settings,'schema_settings.include_business_address', 'false'),
                'business_street_address'      => sanitize_text_field(Arr::get($settings,'schema_settings.business_street_address', '')),
                'business_address_city'        => sanitize_text_field(Arr::get($settings,'schema_settings.business_address_city', '')),
                'business_address_state'       => sanitize_text_field(Arr::get($settings,'schema_settings.business_address_state', '')),
                'business_address_postal_code' => sanitize_text_field(Arr::get($settings,'schema_settings.business_address_postal_code', '')),
                'business_address_country'     => sanitize_text_field(Arr::get($settings,'schema_settings.business_address_country', '')),
                'business_average_rating'      => Arr::get($settings,'schema_settings.business_average_rating', null),
                'business_total_rating'        => Arr::get($settings,'schema_settings.business_total_rating', null),
            ),

	        //styles
            'feed_settings'=> array(
                'enable_style'         => Arr::get($settings,'feed_settings.enable_style', 'false'),
            ),
            'template_width'               => Arr::get($settings,'template_width', ''),
            'template_height'              => Arr::get($settings,'template_height', ''),
        );
    }

    public static function getCarouselSettings($settings)
    {
        $carousel_settings = array(
            'autoplay'                     => Arr::get($settings, 'autoplay', 'false'),
            'autoplay_speed'               => (int)Arr::get($settings,'autoplay_speed', '3000'),
            'slides_to_show'               => (int)Arr::get($settings,'slides_to_show', '3'),
            'slides_to_scroll'             => (int)Arr::get($settings, 'slides_to_scroll', '3'),
            'navigation'                   => Arr::get($settings,'navigation', 'dot'),
        );

        return $carousel_settings;
    }

    public static function validPlatforms($platforms = array())
    {
        $activePlatforms = apply_filters('wpsocialreviews/available_valid_reviews_platforms', []);
        //$activePlatforms = apply_filters('wpsocialreviews/push_testimonial_platform', $activePlatforms);
        //add custom with platforms if custom reviews exists
        $isCustomReviewsExists = Review::where('platform_name', 'custom')
                                       ->count();

        if ($isCustomReviewsExists) {
            $activePlatforms['custom'] = __('Custom', 'wp-social-reviews');
        }

        if (!empty($platforms)) {
            $activePlatforms = array_intersect($platforms, array_keys($activePlatforms));
        }

        return $activePlatforms;
    }

    public static function getBusinessInfoByPlatforms($platforms)
    {
        $multi_business_info = [];
        $platform_urls       = [];
        $avg_rating          = 0;
        $total_rating        = 0;
        $connected_business_info = Helper::getConnectedAccountsBusinessInfo($platforms);

        $value = array_values($connected_business_info);
        $platformNames = array_column($value, 'platform_name');

        $isBooking = false;
        if(in_array('booking.com', $platformNames)) {
            if(count(array_unique($platformNames)) === 1 && end($platformNames) === 'booking.com') {
                $isBooking = true;
            }
        }

        $platforms = 0; $cnt = 0; $url = ""; $platform_name = ""; $total_platforms = count(array_unique($platformNames));
        foreach ($connected_business_info as $index => $business_info) {
            $place_id = Arr::get($business_info, 'place_id');
            $platform_urls[$place_id] = [
                'platform_name' => Arr::get($business_info, 'platform_name'),
                'name'          => Arr::get($business_info, 'name'),
                'url'           => Arr::get($business_info, 'url'),
                'average_rating'=> Arr::get($business_info, 'average_rating'),
                'total_rating'  => Arr::get($business_info, 'total_rating'),
                'product_url'   => Arr::get($business_info, 'platform_name') === 'woocommerce' ? get_the_post_thumbnail_url($place_id) : ''
            ];

            if(!empty(Arr::get($business_info, 'url'))) {
                $cnt++;
                $url = Arr::get($business_info, 'url');
                $platform_name = Arr::get($business_info, 'platform_name');
            } else {
                $total_platforms--;
            }

            $multi_business_info['platforms']  = $platform_urls;

            if(Arr::get($business_info, 'total_rating')) {
                $total_rating += $business_info['total_rating'];
                $multi_business_info['total_rating'] = $total_rating;
            }

            $average_rating = Arr::get($business_info, 'average_rating');
            if ($average_rating) {
                $platforms++;

                if(Arr::get($business_info, 'platform_name') === 'booking.com' && !$isBooking) {
                    $avg_rating += ((float)$average_rating/2);
                } else {
                    $avg_rating += $average_rating;
                }
                $multi_business_info['average_rating'] = $platform_urls && $avg_rating ? $avg_rating / $platforms : $avg_rating;
            }
        }

        $multi_business_info['url'] = $url;
        $multi_business_info['platform_name'] = $platform_name;
        $multi_business_info['total_business'] = $cnt;
        $multi_business_info['total_platforms'] = $total_platforms;
        return apply_filters('wpsocialreviews/reviews_business_info', $multi_business_info);
    }

    public static function getSelectedBusinessInfoByPlatforms($platforms, $selectedBusinesses)
    {
        $cnt = 0; // Reset the count
        $multi_business_info = self::getBusinessInfoByPlatforms($platforms);
        $cnt = Arr::get($multi_business_info, 'total_business', 0);
        $url = Arr::get($multi_business_info, 'url', '');
        $platform_name = Arr::get($multi_business_info, 'platform_name', '');
        $total_platforms = Arr::get($multi_business_info, 'total_platforms', 0);

        if(!empty($selectedBusinesses) && !empty($multi_business_info['platforms'])) {
            $multi_business_info['average_rating'] = 0;
            $multi_business_info['total_rating'] = 0;
            $avg_rating          = 0;
            $total_rating        = 0;
            $platforms = 0;

            $allPlatforms = [];
            foreach($selectedBusinesses as $key => $selected) {
                $platformName = isset($multi_business_info['platforms'][$selected]['platform_name']) ? $multi_business_info['platforms'][$selected]['platform_name'] : '';
                $allPlatforms[] = $platformName;
            }

            $isBooking = false;
            if(in_array('booking.com', $allPlatforms)) {
                if(count(array_unique($allPlatforms)) === 1 && end($allPlatforms) === 'booking.com') {
                    $isBooking = true;
                }
            }

            $total_platforms = count(array_unique($allPlatforms));
            foreach ($multi_business_info['platforms'] as $businessId => $business) {
                if(in_array($businessId, $selectedBusinesses)) {
                    $cnt++; // Increment count for selected businesses
                    $average_rating = Arr::get($business, 'average_rating');
                    if($average_rating) {
                        $platforms++;
                        if (Arr::get($business, 'platform_name') === 'booking.com' && !$isBooking) {
                            $avg_rating += ((float)$average_rating / 2);
                        } else {
                            $avg_rating += $average_rating;
                        }
                        $multi_business_info['average_rating'] = $avg_rating ? $avg_rating / $platforms : $avg_rating;
                    }
                    $total_rating                          += $business['total_rating'];
                    $multi_business_info['total_rating']   = $total_rating;

                    if(!empty(Arr::get($business, 'url'))) {
                        $url = Arr::get($business, 'url');
                        $platform_name = Arr::get($multi_business_info, 'platform_name', '');
                    }
                    else {
                        $total_platforms--;
                    }
                } else {
                    unset($multi_business_info['platforms'][$businessId]);
                }
            }
        }

        if($cnt === 1 && !empty($url)) {
            $multi_business_info['url'] = $url;
            $multi_business_info['platform_name'] = $platform_name;
        }

        $multi_business_info['total_business'] = $cnt;
        $multi_business_info['total_platforms'] = $total_platforms;

        return !empty($multi_business_info) ? $multi_business_info : [];
    }

    public static function platformDynamicClassName($business_info)
    {
        $count = [];
        $platforms = Arr::get($business_info, 'platforms');
        if(empty($platforms)){
            return;
        }

        foreach ($platforms as $index => $platform) {
            $platformName = Arr::get($platform, 'platform_name');
            if(isset($count[$platformName]) && $count[$platformName]){
                continue;
            }
            $count[$platformName] = 1;
        }
        $total_platforms = count($count);

        if($total_platforms === 1){
            $class = array_keys($count)[0];
        } else {
            $class = 'wpsr-has-multiple-reviews-platform';
        }
        return $class;
    }

    public static function convertToPercentage($value) {
        // Extract the decimal part of the value
        $decimalPart = $value - floor($value);

        // Convert the decimal part to a percentage
        $percentage = round($decimalPart * 100);

        return $percentage . '%';
    }

    /**
     * Generate rating SVG icon based on rating value
     *
     * @param $rating
     *
     * @return string
     * @since 1.0.0
     */
    public static function generateRatingIcon($rating, $templateId = null)
    {
        $icons = '';
        $ratingPercentage = static::convertToPercentage($rating);
        $sharedGradient = $templateId ? 'shared-gradient-'.$templateId : 'shared-gradient';
        foreach (array(1, 2, 3, 4, 5) as $val) {
            $score = $rating - $val;
            if ($score >= 0) {
                $icons .= '<svg class="wpsr-star" width="20" height="20" viewBox="0 0 24 24" fill="#ffb542" xmlns="https://www.w3.org/2000/svg">
<path d="M11.7926 19.0032C11.9201 18.9258 12.0799 18.9259 12.2074 19.0032L17.9862 22.5077C18.289 22.6913 18.6634 22.4201 18.5833 22.0752L17.0484 15.4643C17.0149 15.3201 17.0638 15.1693 17.1754 15.0721L22.2877 10.6222C22.5542 10.3902 22.411 9.9519 22.059 9.92189L15.3317 9.34841C15.1837 9.3358 15.0548 9.24219 14.9971 9.10532L12.3686 2.87374C12.231 2.54768 11.769 2.54769 11.6314 2.87374L9.00288 9.10532C8.94515 9.24219 8.81632 9.3358 8.66831 9.34841L1.94098 9.92189C1.58896 9.9519 1.44585 10.3902 1.71234 10.6222L6.82459 15.0721C6.93622 15.1693 6.98508 15.3201 6.95161 15.4643L5.41671 22.0752C5.33664 22.4201 5.71105 22.6913 6.01376 22.5077L11.7926 19.0032Z"></path></svg>';
            } elseif ($score > -1 && $score < 0) {
                $icons .= '<svg class="wpsr-star wpsr-star-rand" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="https://www.w3.org/2000/svg">
  <path d="M11.7926 19.0032C11.9201 18.9258 12.0799 18.9259 12.2074 19.0032L17.9862 22.5077C18.289 22.6913 18.6634 22.4201 18.5833 22.0752L17.0484 15.4643C17.0149 15.3201 17.0638 15.1693 17.1754 15.0721L22.2877 10.6222C22.5542 10.3902 22.411 9.9519 22.059 9.92189L15.3317 9.34841C15.1837 9.3358 15.0548 9.24219 14.9971 9.10532L12.3686 2.87374C12.231 2.54768 11.769 2.54769 11.6314 2.87374L9.00288 9.10532C8.94515 9.24219 8.81632 9.3358 8.66831 9.34841L1.94098 9.92189C1.58896 9.9519 1.44585 10.3902 1.71234 10.6222L6.82459 15.0721C6.93622 15.1693 6.98508 15.3201 6.95161 15.4643L5.41671 22.0752C5.33664 22.4201 5.71105 22.6913 6.01376 22.5077L11.7926 19.0032Z" fill="url(#'.esc_attr($sharedGradient).')"></path>
  <defs><linearGradient id="'.esc_attr($sharedGradient).'"><stop offset="'.esc_attr($ratingPercentage).'" stop-opacity="1"></stop><stop offset="'.esc_attr($ratingPercentage).'" stop-opacity="1"></stop></linearGradient></defs></svg>';
            } else {
                $icons .= '<svg width="20" height="20" viewBox="0 0 24 25" fill="none" xmlns="https://www.w3.org/2000/svg" class="wpsr-star-filled"><defs><linearGradient id="'.esc_attr($sharedGradient).'"><stop offset="0%" style="stop-color: rgb(255, 181, 66); stop-opacity: 1;"></stop><stop offset="0%" style="stop-color: rgb(214, 218, 228); stop-opacity: 1;"></stop></linearGradient></defs><path d="M11.7926 19.0032C11.9201 18.9258 12.0799 18.9259 12.2074 19.0032L17.9862 22.5077C18.289 22.6913 18.6634 22.4201 18.5833 22.0752L17.0484 15.4643C17.0149 15.3201 17.0638 15.1693 17.1754 15.0721L22.2877 10.6222C22.5542 10.3902 22.411 9.9519 22.059 9.92189L15.3317 9.34841C15.1837 9.3358 15.0548 9.24219 14.9971 9.10532L12.3686 2.87374C12.231 2.54768 11.769 2.54769 11.6314 2.87374L9.00288 9.10532C8.94515 9.24219 8.81632 9.3358 8.66831 9.34841L1.94098 9.92189C1.58896 9.9519 1.44585 10.3902 1.71234 10.6222L6.82459 15.0721C6.93622 15.1693 6.98508 15.3201 6.95161 15.4643L5.41671 22.0752C5.33664 22.4201 5.71105 22.6913 6.01376 22.5077L11.7926 19.0032Z" fill="url(#'.esc_attr($sharedGradient).')"></path></svg>';
            }
        }

        return $icons;
    }

    public static function platformIcon($platform_name = '', $size = '')
    {
        $img_size = $size === 'small' ? '-'.$size : '';

        $hidePlatformsIcon = static::getPlatformsWithCategories();
        if(in_array($platform_name, $hidePlatformsIcon)){
            return '';
        }

        return apply_filters('wpsocialreviews/' . $platform_name . '_reviews_platform_icon',
            WPSOCIALREVIEWS_URL . 'assets/images/icon/icon-' . $platform_name . $img_size.'.png');
    }

    public static function removeSpecialChars($text)
    {
        $text = str_replace("&#x27;", "'", $text);
        $text = html_entity_decode($text, ENT_NOQUOTES, 'UTF-8');
        $text = htmlspecialchars_decode($text, ENT_QUOTES);
        $text = wp_specialchars_decode($text);
        return $text;
    }

	public static function getPlatformsWithCategories()
	{
		return apply_filters('wpsocialreviews/platforms_with_categories', ['fluent_forms', 'custom', 'testimonial']);
	}

    public static function hasReviewApproved()
    {
        global $wpdb;
        $table_name = $wpdb->prefix .'wpsr_reviews';
        $has_column = GlobalHelper::hasColumn($table_name, 'review_approved');

        return $has_column;
    }

    public static function is_tp($platform_name)
    {
        $trust = substr($platform_name, 0, 5);
        return ($trust === 'trust');
    }

    public static function hideLogo($templateMeta, $platform)
    {
        return Arr::get($templateMeta, 'isPlatformIcon') === 'false' || $platform === 'custom' || $platform === 'fluent_forms' || (static::is_tp($platform) && $templateMeta['display_tp_brand'] === 'false');
    }

    public static function trimProductTitle($reviews)
    {
        if (!empty($reviews)) {
            foreach ($reviews as $index => $review){
                $product_name = Arr::get($review, 'fields.product_name', '');
                $product_data = [];
                $product_data['product_name'] = wp_trim_words($product_name, 4, '...');
                $product_data['product_thumbnail'] = Arr::get($review, 'fields.product_thumbnail', '');
                if($product_name && Arr::get($review, 'fields')){
                    $reviews[$index]['fields'] = $product_data;
                }
            }
        }

        return $reviews;
    }

    public static function getIdsExistReviews($existReviews, $uniqueIdentifierKey)
    {
        $idsExistReviews = $existReviews->pluck($uniqueIdentifierKey)->map(function ($item) {
            return $item;
        })->toArray();

        return $idsExistReviews;
    }

    public static function getIdsCurrentReviews($currentReviews, $reviewIdentifyValue, $platform)
    {
        $idsCurrentReviews = array_map(function ($item) use ($reviewIdentifyValue, $platform) {
                if($platform == 'facebook'){
                    return $reviewIdentifyValue . $item['reviewer']['id'];
                }else if($platform == 'google'){
                    return $item['reviewId'];
                }
                return '';
            }, $currentReviews);

        return $idsCurrentReviews;
    }

    public static function getImageSettings($platform)
    {
        $global_settings = get_option('wpsr_'.$platform.'_global_settings');
        $advanceSettings = (new GlobalSettings())->getGlobalSettings('advance_settings');
        $has_gdpr = Arr::get($advanceSettings, 'has_gdpr', "false");
        $optimized_images = $platform === 'reviews' 
            ? Arr::get($advanceSettings, 'review_optimized_images', "false") 
            : Arr::get($global_settings, 'global_settings.optimized_images', 'false');

        return [
            'optimized_images' => $optimized_images,
            'has_gdpr' => $has_gdpr,
        ];
    }
}
