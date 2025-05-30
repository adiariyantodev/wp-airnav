<?php

namespace WPSocialReviews\App\Services\Platforms\Feeds\Common;

use WPSocialReviews\App\Services\GlobalSettings;
use WPSocialReviews\App\Services\Helper as GlobalHelper;
use WPSocialReviews\App\Services\Platforms\MediaManager;
use WPSocialReviews\Framework\Support\Arr;
use WPSocialReviews\App\Services\Platforms\PlatformManager;
use WPSocialReviews\App\Services\Platforms\ImageOptimizationHandler;

if (!defined('ABSPATH')) {
    exit;
}

class FeedFilters
{
    private $platform;

    /**
     * getTimestamp feed time handler
     *
     * @param array $feed
     *
     * @return date
     * @since 1.3.0
     */
    public function getTimestamp(array $feed)
    {
        $date = null;
        if ($this->platform === 'youtube') {
            $date = Arr::get($feed, 'snippet.publishedAt', null);
        } elseif ($this->platform === 'twitter') {
            $date = Arr::get($feed, 'created_at', null);
        } elseif ($this->platform === 'instagram') {
            $date = Arr::get($feed, 'timestamp', null);
        } elseif ($this->platform === 'facebook_feed') {
            $date = Arr::get($feed, 'created_time', null);
        } elseif ($this->platform === 'tiktok') {
            $unix_date = Arr::get($feed, 'created_at', null);
            $date = date('Y-m-d H:i:s', $unix_date);
        }

        if (!empty($date)) {
            $date = strtotime($date);
        }

        return $date;
    }

    /**
     * filterFeedResponse filter the feed response
     *
     * @param array $filterSettings filter settings
     * @param array $response response
     *
     * @return array
     * @since 1.3.0
     *
     */
    public function filterFeedResponse($platform, $feed_settings, $response)
    {
        $filterSettings = Arr::get($feed_settings, 'filters', []);
        if (!empty($filterSettings) && !empty($response)) {
            $this->platform = $platform;
            $filterResponse = array();

            $header = Arr::get($response, 'header', []);
            $feeds  = Arr::get($response, 'items', []);

            $resizedImages = [];
            if($this->platform === 'instagram' || $this->platform === 'facebook_feed' || $this->platform === 'tiktok' || $this->platform === 'youtube') {
                $imageHandlerObj = new ImageOptimizationHandler($this->platform);
                $globalSettings = $imageHandlerObj->getGlobalSettings();
                if(Arr::get($globalSettings, 'optimized_images') === 'true') {
                    $resizedImages = $imageHandlerObj->getResizeNeededImageLists($feeds,  $feed_settings);
                    $account_to_show = Arr::get($feed_settings, 'header_settings.account_to_show');
                    $header['account_id'] = $account_to_show;
                    $header['avatar'] = $imageHandlerObj->formattedData($header,'avatars');
                    $header['covers']  = $imageHandlerObj->formattedData($header,'covers');
                }
            }

            //filter by date
            if (($filterSettings['post_order'] === 'ascending' || $filterSettings['post_order'] === 'descending')) {
                $multiply = ($filterSettings['post_order'] === 'ascending') ? -1 : 1;
                usort($feeds, function ($m1, $m2) use ($multiply) {
                    $timestamp1 = $this->getTimestamp($m1);
                    $timestamp2 = $this->getTimestamp($m2);

                    // If both have dates
                    if ($timestamp1 !== null && $timestamp2 !== null) {
                        if($timestamp1 === $timestamp2) {
                            return 0;
                        }

                        if($timestamp1 < $timestamp2) {
                            return -1 * $multiply;
                        }

                        return 1 * $multiply;
                    }

                    // If m2 has no date, consider it as more recent
                    if ($timestamp1 !== null) {
                        return $multiply;
                    }

                    // If m1 has no date, consider it as more recent
                    if ($timestamp2 !== null) {
                        return -$multiply;
                    }

                    // Neither have dates
                    return 0;
                });
            }

            $map = [];
            if ($this->platform === 'instagram') {
                //filter by popularity
                if (($filterSettings['post_order'] === 'most_popular' || $filterSettings['post_order'] === 'least_popular')) {
                    $feeds = apply_filters('wpsocialreviews/instagram_feeds_by_popularity', $feeds,
                        $filterSettings['post_order']);
                }
            }

            if ($this->platform === 'youtube') {
                //filter by popularity
                if (($filterSettings['post_order'] === 'most_popular' || $filterSettings['post_order'] === 'least_popular')) {
                    $feeds = apply_filters('wpsocialreviews/youtube_feeds_by_popularity', $feeds,
                        $filterSettings['post_order']);
                }
            }

            if ($this->platform === 'twitter') {
                //filter by popularity
                if (($filterSettings['post_order'] === 'most_popular' || $filterSettings['post_order'] === 'least_popular')) {
                    $feeds = apply_filters('wpsocialreviews/twitter_feeds_by_popularity', $feeds,
                        $filterSettings['post_order']);
                }
            }

            if ($this->platform === 'facebook_feed') {
                //filter by popularity
                if (($filterSettings['post_order'] === 'most_popular' || $filterSettings['post_order'] === 'least_popular')) {
                    $feeds = apply_filters('wpsocialreviews/facebook_feeds_by_popularity', $feeds,
                        $filterSettings['post_order']);
                }
                // hide shared posts
                if(Arr::get($filterSettings, 'hide_shared_posts') === true){
                    $feeds = array_map(function ($value) {
                        $type = Arr::get($value, 'attachments.data.0.type');
                        if($type !== 'native_templates'){
                            return $value;
                        }
                    }, $feeds);
                    $feeds = array_filter($feeds);
                }

                // display posts by feed type
                $display_posts = Arr::get($filterSettings, 'display_posts', []);
                if(!empty($display_posts) && is_array($display_posts) && !in_array('all', $display_posts)){
                    $feeds = array_map(function ($value) use ($display_posts) {
                        $type = Arr::get($value, 'attachments.data.0.type');
                        $type = $type === 'animated_image_video' ? 'video_inline' : $type;
                        $has_attachments = Arr::get($value, 'attachments');
                        if(in_array($type, $display_posts) || (!$has_attachments && in_array('text', $display_posts))){
                            return $value;
                        }
                    }, $feeds);
                    $feeds = array_filter($feeds);
                }
            }

            if ($this->platform === 'tiktok') {
                //filter by popularity
                if (($filterSettings['post_order'] === 'most_viewed' || $filterSettings['post_order'] === 'most_liked')) {
                    $feeds = apply_filters('wpsocialreviews/tiktok_feeds_by_popularity', $feeds,
                        $filterSettings['post_order']);
                }
            }

            //filter by randomly
            if ($filterSettings['post_order'] === 'random') {
                $feeds = apply_filters('wpsocialreviews/feeds_by_random', $feeds);
            }

            $totalPosts = Arr::get($filterSettings, 'total_posts_number');
            $numOfPosts = wp_is_mobile() ? Arr::get($totalPosts, 'mobile') : Arr::get($totalPosts, 'desktop');

            //we have to get include or exclude feeds from here
            $includesWords = [];
            $excludesWords = [];
            $hidePostIds   = [];
            $hasHidePost   = false;

            if (!empty($filterSettings['includes_inputs'])) {
                $includesWords = array_map('trim', explode(",", $filterSettings['includes_inputs']));
            }
            if (!empty($filterSettings['excludes_inputs'])) {
                $excludesWords = array_map('trim', explode(",", $filterSettings['excludes_inputs']));
            }
            if (!empty($filterSettings['hide_posts_by_id'])) {
                $hidePostIds = array_map('trim', explode(",", $filterSettings['hide_posts_by_id']));
            }

            $totalPostsIterator = 0;
            $global_settings = get_option('wpsr_'.$this->platform.'_global_settings');
            $advanceSettings = (new GlobalSettings())->getGlobalSettings('advance_settings');

            $mediaManager = null;
            $imageSettings = [];
            if($this->platform === 'instagram' || $this->platform === 'facebook_feed' || $this->platform === 'tiktok' || $this->platform === 'youtube') {
                $imageSettings = [
                    'optimized_images' => Arr::get($global_settings, 'global_settings.optimized_images', 'false'),
                    'has_gdpr' => Arr::get($advanceSettings, 'has_gdpr', "false")
                ];

                $imageSize = Arr::get($feed_settings, 'post_settings.resolution', 'full');
                if ($this->platform === 'youtube') {
                    $imageSize = Arr::get($feed_settings, 'video_settings.resolution', 'full');
                }
                $mediaManager = new MediaManager($resizedImages, $imageSettings, $imageSize, $this->platform);
            }

            $hasLatestPost = false;
            $postIds = [];
            foreach ($feeds as $index => $feed) {
                if ($this->platform === 'facebook_feed') {
                    $display_wp_date_format = Arr::get($feed_settings, 'post_settings.display_wp_date_format', 'false');
                    $created_time = Arr::get($feed, 'created_time');
                    $created_at = strtotime($created_time);

                    if($display_wp_date_format === 'true'){
                        $feed['created_time'] = GlobalHelper::getSiteDefaultDateFormat($created_at);
                    } else {
                        /* translators: %s: Human-readable time difference. */
                        $feed['created_time'] = sprintf(__('%s ago'), human_time_diff($created_at));
                    }
                }

                if(defined('CUSTOM_FEED_FOR_TIKTOK_VERSION') && version_compare(CUSTOM_FEED_FOR_TIKTOK_VERSION, '1.1.2', '<=')) {
                    if ($this->platform === 'tiktok' && $numOfPosts == 0) {
                        $numOfPosts = 50;
                    }
                }

                //start of 1st filter: Numbers Of Posts To Display
                if ($totalPostsIterator >= ($numOfPosts)) {
                    break;
                }
                $id = Arr::get($feed, 'id');
                $postIds[] = $id;

                $text_description = '';
                $feed_id          = '';
                $text_title       = '';

                if ($this->platform === 'instagram') {
                    $text_description = Arr::get($feed, 'caption', '');
                    $feed_id          = Arr::get($feed, 'permalink', '');

                }

                if ($this->platform === 'youtube') {
                    $text_description = Arr::get($feed, 'snippet.description', '');
                    $feed_id          = Arr::get($feed, 'id', '');
                    $text_title       = Arr::get($feed, 'snippet.title', '');
                }

                if ($this->platform === 'twitter') {
                    $feed_id = Arr::get($feed, 'id');
                    $text_description = Arr::get($feed, 'text', '');
                }

                if ($this->platform === 'facebook_feed') {
                    $feed_id = Arr::get($feed, 'id', '');
                    $text_description = Arr::get($feed, 'message', '');
                    if(empty($text_description) && Arr::get($feed, 'description', '')) {
                        $text_description = Arr::get($feed, 'description', '');
                    }
                }

                if ($this->platform === 'tiktok') {
                    $text_description = Arr::get($feed, 'description', '');
                    $feed_id          = Arr::get($feed, 'id', '');
                    $text_title       = Arr::get($feed, 'title', '');
                }

                if(!in_array($id, $resizedImages)) {
                    $hasLatestPost = true;
                }

                if(gettype($mediaManager) !== "NULL") {
                    $feed_type = Arr::get($feed_settings, 'source_settings.feed_type');
                    $media_type = $mediaManager->getMediaType($feed);
                    if($feed_type == 'album_feed') {
                        $child_feeds = Arr::get($feed, 'photos.data');
                        $child_feeds[0]['page_id'] = Arr::get($feed, 'page_id', '');
                        $media_url = $mediaManager->getMediaUri($child_feeds[0]);
                        foreach($child_feeds as $index=> $item)
                        {
                            $item['default_media'] = $item['source'];
                            $item['page_id'] = Arr::get($feed, 'page_id', '');
                            $item['media_url']  = $mediaManager->getMediaUri($item);
                            $feed['photos']['data'][$index] = $item;
                        }
                        
                    } else {
                        $media_url = $mediaManager->getMediaUri($feed);
                    }
                    
                    $default_media = $mediaManager->getPlatformRemoteUri($feed);
                    $thumbnail_url = $mediaManager->getThumbnailUrl($feed);

                    if(empty($thumbnail_url) && Arr::get($imageSettings, 'optimized_images') === 'true' && (Arr::get($feed, 'media_type') === 'VIDEO' || Arr::get($feed, 'children.data.0.media_type') === 'VIDEO')) {
                        continue;
                    }

                    $optimized_image = Arr::get($imageSettings, 'optimized_images');
                    $account_id = null;
                    $feed['has_carousel']  = (Arr::get($imageSettings, 'optimized_images') === 'false' && Arr::get($feed, 'media_type') === 'CAROUSEL_ALBUM');
                    $feed['media_name'] = Arr::get($feed, 'media_type');
                    $feed['media_type'] = $media_type;
                    $feed['media_url']  = $media_url;
                    $feed['thumbnail_url'] = $thumbnail_url;
                    $feed['default_media'] = $default_media;
                    if ($optimized_image == "true") {
                        $imageOptimizationObj =  new ImageOptimizationHandler($this->platform);
                        if ($this->platform == 'instagram') {
                            $account_id = Arr::get($feed, 'accountId', '');
                        } elseif ($this->platform == 'facebook_feed') {
                            $account_id = Arr::get($feed, 'page_id', '');
                        } elseif ($this->platform == 'tiktok') {
                            $account_id = Arr::get($feed, 'user.name', '');
                        } elseif ($this->platform == 'youtube') {
                            $account_id = Arr::get($feed, 'snippet.channelId', '');
                        }
                        $feed['user_avatar'] = $imageOptimizationObj->getLocalHeaderUrl( $account_id ,'avatars' );
                    }
                }

                $post_caption = ' ' . str_replace(array('+', '%0A'), ' ',
                        urlencode(str_replace(array('#', '@'), array(' HASHTAG', ' MENTION'),
                            strtolower($text_description)))) . ' ';

                //end of 1st filter: Numbers Of Posts To Display
                $hasIncludeWord = false;
                $hasExcludeWord = false;
                if (!empty($includesWords)) {
                    $hasIncludeWord = apply_filters('wpsocialreviews/include_or_exclude_feed', true, $includesWords,
                        $post_caption);

                    if(!empty($text_title)) {
                        $hasIncludeWord2 = apply_filters('wpsocialreviews/include_or_exclude_feed', true, $includesWords,
                            $text_title);
                        $hasIncludeWord = $hasIncludeWord || $hasIncludeWord2;
                    }
                }

                if (!empty($excludesWords)) {
                    $hasExcludeWord = apply_filters('wpsocialreviews/include_or_exclude_feed', false, $excludesWords,
                        $post_caption);
                    if(!empty($text_title)) {
                        $hasExcludeWord2 = apply_filters('wpsocialreviews/include_or_exclude_feed', false, $excludesWords,
                            $text_title);
                        $hasExcludeWord = $hasExcludeWord || $hasExcludeWord2;
                    }
                }

                if (!empty($hidePostIds)) {
                    $hasHidePost = apply_filters('wpsocialreviews/hide_feed', $hidePostIds, $feed_id);
                }

                if (!defined('WPSOCIALREVIEWS_PRO')) {
                    $hasHidePost = false;
                }

                $isOk = false;
                if (!empty($excludesWords) && !empty($includesWords)) {
                    $isOk = $hasIncludeWord && !$hasExcludeWord;
                } elseif (!empty($includesWords)) {
                    $isOk = $hasIncludeWord;
                } else {
                    $isOk = !$hasExcludeWord;
                }

                if ($isOk) {
                    if ($this->platform === 'instagram' && !$hasHidePost) {
                        $post_type = Arr::get($filterSettings, 'post_type');
                        // 3rd filter: start of filters for Types Of Posts
                        if ($post_type === 'all') {
                            $filterResponse[] = $feed;
                        } elseif (isset($feed['media_type']) && ($feed['media_type'] === "IMAGE" || $feed['media_type'] === 'CAROUSEL_ALBUM') && $feed['media_name'] !== "VIDEO" && $post_type === 'images') {
                            $filterResponse[] = $feed;
                        } elseif (isset($feed['media_type']) && ($feed['media_type'] === "VIDEO" || $feed['media_name'] === "VIDEO") && $post_type === 'videos' && $media_url) {
                            $filterResponse[] = $feed;
                        }
                        $totalPostsIterator++;
                    }

                    if ($this->platform !== 'instagram' && !$hasHidePost) {
                        $filterResponse[] = $feed;
                        $totalPostsIterator++;
                    }
                }
            }
             
            if(Arr::get($imageSettings, 'optimized_images') === 'true') {
                (new ImageOptimizationHandler($this->platform))->updateLastRequestedTime($postIds);
            }

            return [
                'header'        => $header,
                'items'         => $filterResponse,
                'resize_data'   => $resizedImages,
                'has_latest_post'  => $hasLatestPost,
            ];
        }
         
        return $response;
    }
}
