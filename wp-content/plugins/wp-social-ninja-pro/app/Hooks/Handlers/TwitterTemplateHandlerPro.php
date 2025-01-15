<?php

namespace WPSocialReviewsPro\App\Hooks\Handlers;
use WPSocialReviews\App\Services\Helper as GlobalHelper;
use WPSocialReviews\App\Services\Platforms\Feeds\Twitter\Helper as TwitterHelper;
use WPSocialReviews\Framework\Support\Arr;
use WPSocialReviewsPro\App\Services\Platforms\Feeds\Twitter\ManageCard;
use WPSocialReviewsPro\App\Traits\LoadView;

class TwitterTemplateHandlerPro
{
    use LoadView;

    public function validateHashtags($hashtag)
    {
        $hashtags       = preg_replace("/#{2,}/", '', trim($hashtag));
        $hashtags       = str_replace("OR", ',', $hashtags);
        $hashtags       = str_replace(' ', '', $hashtags);
        $hashtags       = explode(',', $hashtags);
        $valid_hashtags = array();

        if (!empty($hashtags)) {
            foreach ($hashtags as $hashtag) {
                if (substr($hashtag, 0, 1) !== '#' && $hashtag !== '') {
                    $valid_hashtags[] .= '#' . $hashtag;
                } else {
                    $valid_hashtags[] .= $hashtag;
                }
            }
        }

        return $valid_hashtags;
    }

    public function setTwitterTransientName($transient_name, $feed_type, $count, $hashtag)
    {
        if ($feed_type === 'hashtag') {
            $hashtags       = $this->validateHashtags($hashtag);
            $hashtags       = implode(',', $hashtags);
            $hashtags       = str_replace(',', '', $hashtags);
            $hashtags       = preg_replace('/\s+/', '', $hashtags);
            $transient_name = $feed_type . '_' . $hashtags . '_num' . $count;
        } else {
            if ($feed_type === 'user_mentions') {
                $transient_name = $feed_type . '_num' . $count . '';
            }
        }

        return $transient_name;
    }

    public function setTwitterApiBaseUrl($feed_type, $base_feed_url)
    {
        $api_base_url = '';
        if ($feed_type === 'hashtag') {
            $api_base_url = $base_feed_url . 'search/tweets.json';
        } else {
            if ($feed_type === 'user_mentions') {
                $api_base_url = $base_feed_url . 'statuses/mentions_timeline.json';
            }
        }

        return $api_base_url;
    }

    public function twitterSetGetFieldEndPoint($feed_type, $count, $hashtag)
    {
        $get_field = '';
        if ($feed_type === 'hashtag') {
            //support multiple hashtags
            $hashtags        = $this->validateHashtags($hashtag);
            $endpoint_string = implode(' OR ', $hashtags);
            $get_field       = '?q=' . $endpoint_string . '&result_type=recent&include_entities=true&count=' . intval($count) . "&tweet_mode=extended";
        } else {
            if ($feed_type === 'user_mentions') {
                $get_field = '?count=' . intval($count) . "&tweet_mode=extended";
            }
        }

        return $get_field;
    }

    public function twitterFeedResponse($response)
    {
        return $response['statuses'];
    }

    public function twitterFeedHeaderApiResponse($twitterObj = null, $username = '', $base_feed_url = '', $headers = [])
    {
        $userFields = "created_at,description,entities,id,location,name,pinned_tweet_id,profile_image_url,protected,public_metrics,url,username,verified,verified_type,withheld";
        $apiUrl = $base_feed_url . 'users/by/username/' . $username . "?user.fields=" . $userFields;
        $userData = $twitterObj->makeRequest($apiUrl, false, 'GET', $headers);
        return isset($userData['data']) ? $userData['data'] : [];
    }

    public function getTwitterLikesCount($feed)
    {
        $feed = isset($feed['retweeted_status']) ? $feed['retweeted_status'] : $feed;

        return isset($feed['favorite_count']) ? $feed['favorite_count'] : 0;
    }

    public function getTwitterCommentsCount($feed)
    {
        $feed = isset($feed['retweeted_status']) ? $feed['retweeted_status'] : $feed;

        return isset($feed['retweet_count']) ? $feed['retweet_count'] : 0;
    }

    public function twitterFeedsByPopularity($feeds, $popularity_type)
    {
        $multiply = ($popularity_type === 'most_popular') ? -1 : 1;
        usort($feeds, function ($m1, $m2) use ($multiply) {
            $sum1 = $this->getTwitterLikesCount($m1) + $this->getTwitterCommentsCount($m1);
            $sum2 = $this->getTwitterLikesCount($m2) + $this->getTwitterCommentsCount($m2);

            if($sum1 == $sum2) {
                return 0;
            }

            if($sum1 < $sum2) {
                return -1 * $multiply;
            }
            return 1 * $multiply;
        });

        return $feeds;
    }

    public function addTwitterTemplate($data = [])
    {
        return $this->loadView('feeds-templates/twitter/template2', $data);
    }

    public function renderTwitterTemplateHeader($header = [], $feed_settings = [], $translations = [])
    {
        return $this->loadView('feeds-templates/twitter/header', array(
            'header'        => $header,
            'template_meta' => $feed_settings,
            'translations'  => $translations
        ));
    }

    /**
     *
     * Render User Profile Banner HTML
     *
     * @param $header
     * @param $template_meta
     *
     * @since 1.2.4
     *
     **/
    public function renderTweeterProfileBannerHtml($header = [], $template_meta = [])
    {
        if (isset($template_meta['header_settings']) && $template_meta['header_settings']['show_banner_image'] === 'false') {
            return;
        }
        if (isset($header['profile_banner_url'])) {
            ?>
            <div class="wpsr-twitter-user-profile-banner">
                <img src="<?php echo esc_url($header['profile_banner_url']); ?>" alt="">
            </div>
            <?php
        }
    }

    /**
     *
     * Render User Profile Picture HTML
     *
     * @param $header
     * @param $template_meta
     *
     * @since 1.2.4
     *
     **/
    public function renderTweeterUserProfilePictureHtml($header = [], $template_meta = [])
    {
        if (isset($template_meta['header_settings']) && $template_meta['header_settings']['show_avatar'] === 'false') {
            return;
        }
        ?>
        <a class="wpsr-twitter-user-profile-pic"
           href="<?php echo esc_url('https://twitter.com/' . Arr::get($header, 'username', '')); ?>"
           rel="noopener noreferrer"
           target="_blank">
            <img src="<?php echo esc_url(Arr::get($header, 'profile_image_url', '')); ?>" alt="">
        </a>
        <?php
    }

    /**
     *
     * Render User Profile Follow Button HTML
     *
     * @param $header
     * @param $settings
     *
     * @since 1.2.4
     *
     **/
    public function renderTweeterUserProfileFollowBtnHtml($header = [], $settings = [])
    {
        if ($settings['display_follow_button'] === 'false') {
            return;
        }
        $follow_button_text = Arr::get($settings, 'follow_button_text', '');
        ?>
        <a class="wpsr-twitter-user-follow-btn"
           href="<?php echo esc_url('https://twitter.com/intent/follow?screen_name=' . Arr::get($header, 'username', '')); ?>"
           rel="noopener" target="_blank"
           aria-label="<?php echo esc_attr($follow_button_text); ?>"
        >
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M16.07 5.388c.219 4.83-3.395 10.216-9.79 10.216A9.765 9.765 0 0 1 1 14.06a6.94 6.94 0 0 0 5.1-1.421 3.446 3.446 0 0 1-3.218-2.385c.54.103 1.07.073 1.555-.06-1.656-.33-2.8-1.82-2.763-3.41.465.258.996.412 1.56.43A3.432 3.432 0 0 1 2.17 2.628a9.788 9.788 0 0 0 7.1 3.589C8.766 4.068 10.4 2 12.624 2c.99 0 1.885.417 2.513 1.084a6.925 6.925 0 0 0 2.188-.833 3.452 3.452 0 0 1-1.515 1.9 6.9 6.9 0 0 0 1.978-.54 6.96 6.96 0 0 1-1.718 1.777z"></path>
            </svg>
            <span><?php echo esc_html($follow_button_text); ?></span>
        </a>
        <?php
    }

    /**
     *
     * Render User Profile Name HTML
     *
     * @param $header
     * @param $template_meta
     *
     * @since 1.2.4
     *
     **/
    public function renderTweeterUserProfileInfoNameHtml($header = [], $template_meta = [])
    {
        if (isset($template_meta['header_settings']) && $template_meta['header_settings']['show_name'] === 'false') {
            return;
        }
        ?>
        <a href="<?php echo esc_url('https://twitter.com/' . Arr::get($header, 'username', '')); ?>" rel="noopener noreferrer" target="_blank"
           class="wpsr-twitter-user-info-name">
            <?php echo Arr::get($header, 'name', ''); ?>
            <?php if (Arr::get($header, 'verified', '')) { ?>
                <span class="wpsr-tweeter-user-verified">
                 <?php echo TwitterHelper::getSvgIcons('verified') ?>
            </span>
            <?php } ?>
        </a>
        <?php
    }


    /**
     *
     * Render User Profile Username HTML
     *
     * @param $header
     * @param $template_meta
     *
     * @since 1.2.4
     *
     **/
    public function renderTweeterUserProfileInfoUsernameHtml($header = [], $template_meta = [])
    {
        if (isset($template_meta['header_settings']) && $template_meta['header_settings']['show_user_name'] === 'false') {
            return;
        }
        ?>
        <a href="<?php echo esc_url('https://twitter.com/' . Arr::get($header, 'username', '')); ?>" rel="noopener noreferrer" target="_blank"
           class="wpsr-twitter-user-info-username">@<?php echo Arr::get($header, 'username', ''); ?></a>
        <?php
    }

    /**
     *
     * Render User Profile Description HTML
     *
     * @param $header
     * @param $template_meta
     *
     * @since 1.2.4
     *
     **/
    public function renderTweeterUserProfileDescriptionHtml($header = [], $template_meta = [])
    {
        if (isset($template_meta['header_settings']) && $template_meta['header_settings']['show_description'] === 'false') {
            return;
        }
        if (Arr::get($header, 'description')) {
            ?>
            <div class="wpsr-twitter-user-bio">
                <p><?php echo TwitterHelper::formatTweet($header['description']); ?></p>
            </div>
            <?php
        }
    }

    /**
     *
     * Render User Profile Address HTML
     *
     * @param $header
     * @param $template_meta
     *
     * @since 1.2.4
     *
     **/
    public function renderTweeterUserAddressHtml($header = [], $template_meta = [])
    {
        if (empty(Arr::get($header, 'location')) || (isset($template_meta['header_settings']) && $template_meta['header_settings']['show_location'] === 'false')) {
            return;
        }
        ?>
        <div class="wpsr-twitter-user-contact">
            <i class="wpsr-icon icon-map-marker"></i><span><?php echo Arr::get($header, 'location', ''); ?></span>
        </div>
        <?php
    }

    /**
     *
     * Render User Profile Statistics HTML
     *
     * @param $header
     * @param $template_meta
     *
     * @since 1.2.4
     *
     **/
    public function renderTweeterUserProfileStatisticsHtml($header = [], $template_meta = [], $translations = [])
    {
        ?>
        <div class="wpsr-twitter-user-statistics">
            <?php if (Arr::get($template_meta, 'header_settings.show_total_tweets') === 'true') { ?>
                <div class="wpsr-twitter-user-statistics-item">
                    <span class="wpsr-twitter-user-statistics-item-name"><?php echo Arr::get($translations, 'tweets') ?: __('Tweets', 'wp-social-ninja-pro'); ?></span>
                    <span class="wpsr-twitter-user-statistics-item-data"><?php echo GlobalHelper::shortNumberFormat(Arr::get($header, 'public_metrics.tweet_count')); ?></span>
                </div>
            <?php } ?>

            <?php if (Arr::get($template_meta, 'header_settings.show_following') === 'true') { ?>
                <div class="wpsr-twitter-user-statistics-item">
                    <span class="wpsr-twitter-user-statistics-item-name"><?php echo  Arr::get($translations, 'following') ?: __('Following', 'wp-social-ninja-pro'); ?></span>
                    <span class="wpsr-twitter-user-statistics-item-data"><?php echo GlobalHelper::shortNumberFormat(Arr::get($header, 'public_metrics.following_count')); ?></span>
                </div>
            <?php } ?>

            <?php if (Arr::get($template_meta, 'header_settings.show_followers') === 'true') { ?>
                <div class="wpsr-twitter-user-statistics-item">
                    <span class="wpsr-twitter-user-statistics-item-name"><?php echo Arr::get($translations, 'followers') ?: __('Followers', 'wp-social-ninja-pro'); ?></span>
                    <span class="wpsr-twitter-user-statistics-item-data"><?php echo GlobalHelper::shortNumberFormat(Arr::get($header, 'public_metrics.followers_count')); ?></span>
                </div>
            <?php } ?>
        </div>
        <?php
    }

    public function generateTwitterCards()
    {
        check_ajax_referer('wpsr-ajax-nonce', 'security');
        $card_items = array();
        foreach ($_POST['wpsr_urls'] as $url) {
            $card_items[] = array(
                'id'  => sanitize_text_field($url['id']),
                'url' => esc_url_raw($url['url'])
            );
        }

        $cards        = (new ManageCard())->processUrl($card_items);
        $twitter_card = array();
        foreach ($cards as $card) {
            $url = $card['url'];
            // $twitter_card = $card['twitter_card'];

            $twitter_card[$card['id']] = array(
                'url'          => $url,
                'twitter_card' => $card['twitter_card'],
                'is_new'       => $card['is_new']
            );
        }
        echo wp_json_encode($twitter_card);
        die();
    }


}