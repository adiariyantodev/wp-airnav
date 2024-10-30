<?php
use WPSocialReviews\Framework\Support\Arr;
use WPSocialReviews\App\Services\Helper;

if (!empty($feeds) && is_array($feeds)) {
    $feed_type = Arr::get($template_meta, 'source_settings.feed_type');
    $column = isset($template_meta['column_number']) ? $template_meta['column_number'] : 4;
    $columnClass = 'wpsr-col-' . $column;
    $layout_type = isset($template_meta['layout_type']) && defined('WPSOCIALREVIEWS_PRO') ? $template_meta['layout_type'] : 'grid';

    // Check if the feed type is user_feed and the pro version is not defined
    if ($feed_type !== 'user_feed' && !defined('WPSOCIALREVIEWS_PRO')) {
        echo '<p>' . __('You need to upgrade to pro to use this feature.', 'custom-tiktok-feed') . '</p>';
        return;
    }

    // Check if post_settings exist in template_meta, if not, return
    if (!Arr::get($template_meta, 'post_settings')) {
        return;
    }

    $displayPlatformIcon = Arr::get($template_meta, 'post_settings.display_platform_icon');
    $display_mode = Arr::get($template_meta, 'post_settings.display_mode');

    foreach ($feeds as $index => $feed) {
        if ($index >= $sinceId && $index <= $maxId) {
            if ($layout_type !== 'carousel') {
                do_action('custom_feed_for_tiktok/tiktok_feed_template_item_wrapper_before', $template_meta);
            }
            $userID = Arr::get($feed, 'user.name');
            $videoID = Arr::get($feed, 'id');
            $videoLink = 'https://www.tiktok.com/@' . $userID . '/video/' . $videoID;

            $previewImage = Arr::get($feed, 'media.preview_image_url', '');
            $description = Arr::get($feed, 'text', '');

            $attrs = [
                'class'  => 'class="wpsr-tiktok-feed-video-preview wpsr-tiktok-feed-video-playmode wpsr-feed-link"',
                'target' => $display_mode !== 'none' ? 'target="_blank"' : '',
                'rel'    => 'rel="nofollow"',
                'href'   =>  $display_mode !== 'none' ? 'href="'.esc_url($videoLink).'"' : '',
            ];
            ?>
        <div role="group" class="wpsr-tiktok-feed-item <?php echo ($layout_type === 'carousel' && defined('WPSOCIALREVIEWS_PRO')) ? 'swiper-slide' : ''; ?>">

            <?php if ($feed_type === 'user_feed') { ?>
                <div class="wpsr-tiktok-feed-inner">
                    <div class="wpsr-tiktok-feed-content-preview">
                        <div class="wpsr-tiktok-feed-image">
                            <?php if ($display_mode === 'tiktok'): ?>
                            <a <?php Helper::printInternalString(implode(' ', $attrs)); ?>>
                                <?php else: ?>
                                <div class="wpsr-tiktok-feed-video-preview wpsr-tiktok-feed-video-playmode wpsr-feed-link" data-feed_type="<?php echo esc_attr($feed_type); ?>" data-index="<?php echo esc_attr($index); ?>" data-playmode="<?php echo esc_attr($template_meta['post_settings']['display_mode']); ?>" data-template-id="<?php echo esc_attr($templateId); ?>">
                                    <?php endif; ?>
                                    <img src="<?php echo esc_url($previewImage); ?>" alt="<?php echo esc_attr($description); ?>"/>
                                    <?php if ($template_meta['post_settings']['display_play_icon'] === 'true'): ?>
                                        <div class="wpsr-tiktok-feed-content-box">
                                            <div class="wpsr-tiktok-feed-video-play">
                                                <div class="wpsr-tiktok-feed-video-play-icon"></div>
                                            </div>
                                        </div>

                                    <?php endif; ?>
                                    <?php if ($display_mode === 'tiktok'): ?>
                            </a>
                            <?php else: ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="wpsr-tiktok-feed-content-wrapper">
                    <?php
                    /**
                     * tiktok_feed_description hook.
                     *
                     * @hooked TiktokTemplateHandler::renderFeedDescription 10
                     * */
                    do_action('custom_feed_for_tiktok/tiktok_feed_description', $feed, $template_meta);
                    ?>
                    <div class="wpsr-tiktok-feed-content-top-wrapper">
                        <?php
                        /**
                         * tiktok_feed_author hook.
                         *
                         * @hooked TiktokTemplateHandler::renderFeedAuthor 10
                         * */
                        do_action('custom_feed_for_tiktok/tiktok_feed_author', $feed, $template_meta);

                        if ($displayPlatformIcon === 'true') { ?>
                            <a href="<?php echo esc_url($videoLink); ?>" target="_blank" rel="noopener noreferrer nofollow" class="wpsr-tiktok-icon-temp-2"></a>
                        <?php } ?>
                    </div>

                    <?php
                    /**
                     * tiktok_feed_statistics hook.
                     *
                     * @hooked render_tiktok_feed_statistics 10
                     * */
                    do_action('custom_feed_for_tiktok/tiktok_feed_statistics', $template_meta, $feed);
                    ?>
                </div>

                </div>
            <?php } ?>
        </div>

        <?php if ($layout_type !== 'carousel') { ?>
            </div>
        <?php }
        }
    }
}
?>