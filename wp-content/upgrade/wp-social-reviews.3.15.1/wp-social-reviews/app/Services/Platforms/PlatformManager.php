<?php
namespace WPSocialReviews\App\Services\Platforms;

use WPSocialReviews\Framework\Support\Arr;

class PlatformManager
{
    private $feed_platforms = ['instagram', 'twitter', 'youtube', 'facebook_feed' , 'tiktok'];
    private $reviews_platforms = [
        'google',
        'airbnb',
        'yelp',
        'tripadvisor',
        'amazon',
        'aliexpress',
        'booking.com',
        'facebook',
        'woocommerce'
    ];
    /**
     * Set all feed platform name.
     *
     * @return array
     */
    public function feedPlatforms()
    {
        return $this->feed_platforms;
    }

    /**
     *  Set all review platform name.
     *
     * @return array
     */
    public function reviewsPlatforms()
    {
        return $this->reviews_platforms;
    }

    public function getPlatformOfficialName($platform = '', $returnWithType = false)
    {
        if(empty($platform)){
            return;
        }

        $formattedPlatformName = str_replace( '_feed', '', ucfirst($platform) );
        $platformName = $platform === 'facebook' ? __('Facebook', 'wp-social-reviews') : $formattedPlatformName;
        $platformType = $platform === 'facebook' ? __(' Reviews', 'wp-social-reviews') : __(' Feed', 'wp-social-reviews');

        if($returnWithType){
            $platform = $platformName.$platformType;
        }

        return $platform;
    }

    public function isActivePlatform($platform)
    {
        if(in_array($platform, $this->feed_platforms)) {
            if ( $platform === 'tiktok' ) {
                return get_option('wpsr_' . $platform . '_connected_sources_config');
            }
            return get_option('wpsr_' . $platform . '_verification_configs');
        } else {
            return get_option('wpsr_reviews_' . $platform . '_settings');
        }
    }

    public function getUserName($feed, $platform_name)
    {
        switch ($platform_name) {
            case 'instagram':
                return Arr::get($feed, 'username', '');
            case 'facebook_feed':
                return Arr::get($feed, 'page_id', '');
            case 'tiktok':
                return Arr::get($feed, 'user.name', '');
            case 'youtube':
                return Arr::get($feed, 'snippet.channelId', '');
            default:
                return Arr::get($feed, 'source_id', '');
        }
    }
}



