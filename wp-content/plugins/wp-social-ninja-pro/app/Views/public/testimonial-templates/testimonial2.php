<?php
use WPSocialReviews\Framework\Support\Arr;
$enableExternalLink = Arr::get($template_meta, 'enableExternalLink');

if (!empty($reviews)) {
    foreach ($reviews as $index => $review) {
        $reviewer_url = $review->reviewer_url;

        /**
         * reviews_template_item_wrappers_before hook.
         *
         * @hooked ReviewsTemplateHandler::renderTemplateItemParentWrapper - 10 (outputs opening divs for the review item)
         * */
        do_action('wpsocialreviews/reviews_template_item_wrappers_before', $template_meta);
        ?>
            <div class="wpsr-review-template wpsr-testimonial-template-two <?php echo ($review->platform_name) ? 'wpsr-review-template-' . esc_attr($review->platform_name) : ''; ?>"
                 style="<?php echo ($template_meta['equal_height'] === 'true') && $template_meta['contentType'] === 'excerpt' ? 'height:' . $template_meta['equalHeightLen'] . 'px' : ''; ?>"
                 data-index="<?php echo esc_attr($index); ?>"
                 data-review_platform="<?php echo esc_attr($review->platform_name); ?>"
            >
                <?php
                /**
                 * reviewer_image hook.
                 *
                 * @hooked ReviewsTemplateHandler::renderReviewerImageHtml 10
                 * */
                do_action('wpsocialreviews/reviewer_image', $template_meta['reviewer_image'],
                    $reviewer_url, $review->reviewer_img, $review->reviewer_name, $enableExternalLink);

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
                <div class="wpsr-review-header">
                    <div class="wpsr-review-info">
                        <?php
                        /**
                         * reviewer_name hook.
                         *
                         * @hooked ReviewsTemplateHandler::renderReviewerNameHtml 10
                         * */
                        do_action('wpsocialreviews/reviewer_name', $template_meta['reviewer_name'],
                            $reviewer_url, $review->reviewer_name, $enableExternalLink);
                        /**
                         * author_position hook.
                         *
                         * */
                        do_action('wpsocialreviews/author_position', $template_meta, $review);

                        /**
                         * author_website_logo hook.
                         *
                         * */
                        do_action('wpsocialreviews/author_website_logo', $template_meta, $review);
                        ?>
                    </div>
                </div>
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