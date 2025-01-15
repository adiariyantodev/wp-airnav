<?php

use WPSocialReviews\App\Services\Platforms\Reviews\Helper;
use WPSocialReviews\Framework\Support\Arr;

extract($business_info);
extract($template_meta);
$meta_platform = Arr::get($template_meta, 'platform');

$total_platforms = count($meta_platform);
$total_business = isset($total_business) ? $total_business : null;

$platform_name_class = Helper::platformDynamicClassName($business_info);

$wrapperClass = ($template_meta['templateType'] === 'badge' || $template_meta['templateType'] === 'notification') ? 'wpsr-display-block' : '';
$html          = '';

$html .= '<div class="wpsr-business-info-right">';
$html .= (isset($url) && $total_business === 1) ? '<a target="_blank" class="wpsr-write-review" href="' . esc_url($url) . '">'.$custom_write_review_text. '</a>' : '';

if (!empty($platforms) && $total_business > 1) {
    $html .= '<div class="wpsr-write-review-modal-wrapper">';
    $html .= '<a href="#" class="wpsr-write-review wpsr-write-review-modal-btn" aria-label="'.esc_attr($custom_write_review_text).'">' . $custom_write_review_text . '</a>';
    $html .= '<div class="wpsr-write-review-modal">';
    $html .= '<p>' . Arr::get($translations, 'leave_a_review') ?: __( 'Where would you like to leave a review?', 'wp-social-ninja-pro' ) . '</p>';

    if ((!empty($platforms) && is_array($platforms))) {
        $html .= '<div class="wpsr-business-info-paltforms-url">';
        foreach ($platforms as $index => $platform) {
            if(!empty(Arr::get($platform, 'url'))) {

                $html .= '<a href="' . esc_url($platform['url']) . '" target="_blank" aria-label="'.esc_attr($platform['name']).'">';
                if (!Helper::is_tp($platform['platform_name']) || (Helper::is_tp($platform['platform_name']) && $template_meta['display_tp_brand'] === 'true')) {
                    $icon_small = Helper::platformIcon($platform['platform_name'], 'small');
                    if(Arr::get($platform, 'product_url')){
                        $icon_small = Arr::get($platform, 'product_url');
                    }

                    if(!empty($icon_small)){
                        $html .= '<img src="' . esc_url($icon_small) . '" alt="' . esc_attr($platform['platform_name']) . '">';
                    }
                }

                $html .= '<div class="wpsr-paltforms-url">';
                $html .= '<span class="wpsr-platform">' . $platform['name'] . '</span>';
                $html .= '<span class="wpsr-url">' . $platform['url'] . '</span>';
                $html .= '</div>';
                $html .= '</a>';
            }
        }
        $html .= '</div>';
    }
    $html .= '</div>';
    $html .= '</div>';
}
$html .= '</div>';
echo $html;