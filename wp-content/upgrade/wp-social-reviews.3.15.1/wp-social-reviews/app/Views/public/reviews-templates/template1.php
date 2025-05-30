<?php
use WPSocialReviews\Framework\Support\Arr;

if (!empty($reviews)) {
    foreach ($reviews as $index => $review) {
        $source_id = Arr::get($review, 'source_id', '');
        $media_id = Arr::get($review, 'review_id', '');
        $product_name  = Arr::get($review, 'fields.product_name', '');
        $product_thumbnail  = Arr::get($review, 'fields.product_thumbnail');
        $product_thumbnail_url  = Arr::get($product_thumbnail, '0', '');
        $image_size = Arr::get($template_meta, 'resolution', 'full');
        $reviewer_url = $review->platform_name === 'facebook' ? 'https://www.facebook.com/'.$review->source_id.'/reviews' : $review->reviewer_url;

        /**
         * reviews_template_item_wrappers_before hook.
         *
         * @hooked ReviewsTemplateHandler::renderTemplateItemParentWrapper - 10 (outputs opening divs for the review item)
         * */
        do_action('wpsocialreviews/reviews_template_item_wrappers_before', $template_meta);
        ?>
            <div class="wpsr-review-template wpsr-review-template-one <?php echo ($review->platform_name) ? 'wpsr-review-template-' . esc_attr($review->platform_name) : ''; ?>"
                 style="<?php echo ($template_meta['equal_height'] === 'true') && $template_meta['contentType'] === 'excerpt' ? 'height:'. $template_meta['equalHeightLen'] . 'px' : ''; ?>"
                 data-index="<?php echo esc_attr($index); ?>"
                 data-source_id="<?php echo esc_attr($source_id); ?>"
                 data-media_id="<?php echo esc_attr($media_id); ?>"
                 data-review_platform="<?php echo esc_attr($review->platform_name); ?>"
                 data-product_thumbnail="<?php echo esc_attr($product_thumbnail_url); ?>"
                 data-product_name="<?php echo esc_attr($product_name); ?>"
                 data-image_resize="<?php echo esc_attr($image_size)?>"
            >
                <?php
                /**
                 * reviewer_image hook.
                 *
                 * @hooked ReviewsTemplateHandler::renderReviewerImageHtml 10
                 * */
                do_action('wpsocialreviews/reviewer_image', $template_meta['reviewer_image'],
                    $reviewer_url, $review->reviewer_img, $review->reviewer_name, $template_meta['enableExternalLink'], $review->media_url, $review->platform_name);
                ?>
                    <?php
                    /**
                     * review_platform hook.
                     *
                     * @hooked ReviewsTemplateHandler::renderReviewPlatformHtml 10
                     * */
                    do_action('wpsocialreviews/review_platform', $template_meta['isPlatformIcon'],
                        $template_meta['display_tp_brand'], $review->platform_name);
                    ?>
                    <div class="wpsr-review-info">
                        <?php
                        /**
                         * reviewer_name hook.
                         *
                         * @hooked ReviewsTemplateHandler::renderReviewerNameHtml 10
                         * */
                        do_action('wpsocialreviews/reviewer_name', $template_meta['reviewer_name'],
                            $reviewer_url, $review->reviewer_name, $template_meta['enableExternalLink']);

                        /**
                         * reviewer_rating hook.
                         *
                         * @hooked ReviewsTemplateHandler::renderReviewerRatingHtml 10
                         * */
                        do_action('wpsocialreviews/reviewer_rating', $template_meta['reviewerrating'],
                            $template_meta['rating_style'], $review->rating, $review->platform_name,
                            $review->recommendation_type);

                        /**
                         * review_date hook.
                         *
                         * @hooked ReviewsTemplateHandler::renderReviewDateHtml 10
                         * */
                        do_action('wpsocialreviews/review_date', $template_meta['timestamp'],
                            $review->review_time);
                        ?>
                    </div>
                <?php

                /**
                 * review_title hook.
                 *
                 * @hooked ReviewsTemplateHandler::renderReviewTitleHtml 10
                 * */
                do_action('wpsocialreviews/review_title', $template_meta['display_review_title'], $review->review_title, $review->platform_name);

                /**
                 * review_content hook.
                 *
                 * @hooked ReviewsTemplateHandler::renderReviewContentHtml 10
                 * */
                do_action('wpsocialreviews/review_content',
                    $template_meta['isReviewerText'],
                    $template_meta['content_length'],
                    $template_meta['contentType'],
                    $review->reviewer_text,
                    $template_meta['contentLanguage']
                );
                ?>
            </div>

        <?php
        /**
         * reviews_template_item_wrappers_after hook.
         *
         * @hooked ReviewsTemplateHandler::renderTemplateItemParentWrapperEnd - 10 (outputs closing divs for the review item)
         * */
        do_action('wpsocialreviews/reviews_template_item_wrappers_after');
    }
}