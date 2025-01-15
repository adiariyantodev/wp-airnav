<?php
use WPSocialReviews\App\Services\Platforms\Reviews\Helper;
use WPSocialReviews\Framework\Support\Arr;

$platform_name  = Arr::get($business_info, 'platform_name', '');
$total_platforms = Arr::get($business_info, 'total_platforms', 0);
$display_mode = Arr::get($badge_settings, 'display_mode', '');
$open_in_new_window = Arr::get($badge_settings, 'open_in_new_window', 'true');

$classes = [
    $display_mode !== 'none' ? 'wpsr-reviews-badge-btn' : 'wpsr-reviews-badge-html',
    'wpsr-'.$badge_settings['badge_position']
];

$attrs = [
    'data-badge_id' =>  $display_mode === 'popup' ? $templateId : '',
    'data-display_mode' =>  $display_mode,
    'id'            =>  $display_mode === 'popup' ? 'wpsr-reviews-badge-'.$templateId : '',
    'class'         =>  implode( ' ', $classes),
];

if($display_mode !== 'none') {
    $attrs['href']      = $display_mode === 'popup' ? '#' : Arr::get($badge_settings, 'url');
    $target = $open_in_new_window === 'true' ? '_blank' : '_self';
    $attrs['target']    = $display_mode === 'popup' ? '' : $target;
};

$attr = '';
foreach ($attrs as $key => $value) {
    if($value) {
        $attr .= $key .'="'.$value.'" ';
    }
}

$platform_name_class = Helper::platformDynamicClassName($business_info);

$custom_num_of_reviews_text     = Arr::get($badge_settings, 'custom_num_of_reviews_text');
if (!empty($custom_num_of_reviews_text)) {
    if (Arr::get($business_info, 'total_rating') && strpos($custom_num_of_reviews_text, '{reviews_count}') !== false) {
        $custom_num_of_reviews_text = str_replace('{reviews_count}', number_format($business_info['total_rating'], 0), $custom_num_of_reviews_text);
    }
}

$image_size = $badge_settings['template'] === 'badge2' ? 'small' : '';
$icon = Helper::platformIcon($platform_name, $image_size);

$tagName =  $display_mode !== 'none' ? 'a' : 'div';
$startTag = "<".$tagName . " ". $attr.">";
$endTag = "</".$tagName.">";

$wrapperClasses = [
    'wpsr-reviews-badge-'.$templateId,
    $platform_name_class,
    'wpsr-reviews-'.$badge_settings['template'],
    $display_mode !== 'none' ? 'wpsr-enable-cursor' : ''
];

$wrapperClasses = implode( ' ', $wrapperClasses);
?>

<div class="wpsr-reviews-badge-wrapper <?php echo $wrapperClasses; ?>">
<!--conditional tag(div/a)-->
<?php echo $startTag; ?>
    <div class="wpsr-reviews-badge-wrapper-inner">
        <!--logos-->
        <div class="wpsr-business-info-logo">
            <!--single platform-->
            <?php if($badge_settings['display_platform_icon'] === 'true' && $total_platforms === 1) { ?>
                <img src="<?php echo esc_url($icon); ?>" alt="<?php echo $platform_name; ?>"/>
            <?php } ?>

            <!--multiple platforms-->
            <?php if($badge_settings['display_platform_icon'] === 'true' && $total_platforms > 1 && !empty(Arr::get($business_info, 'platforms', []))) { ?>
                    <div class="wpsr-business-info-paltforms">
                    <?php
                    $count = [];
                    foreach ($business_info['platforms'] as $index => $platform) {
                        $platformName = Arr::get($platform, 'platform_name');
                        if(empty(Arr::get($platform, 'url')) || (isset($count[$platformName]) && $count[$platformName])) continue;
                        $count[$platformName] = 1;
                        $icon_small = Helper::platformIcon($platform['platform_name'], 'small');
                    ?>
                        <img src="<?php echo esc_url($icon_small); ?>" alt="<?php echo esc_attr($platform['platform_name']); ?>">
                    <?php } ?>
                    </div>
            <?php } ?>

            <?php if(!empty($badge_settings['custom_title']) && $badge_settings['template'] === 'badge1') { ?>
                <span class="wpsr-reviews-badge-title"> <?php echo $badge_settings['custom_title']; ?> </span>
            <?php } ?>
        </div>

        <div class="wpsr-rating-and-count">
            <?php if(!empty($badge_settings['custom_title']) && $badge_settings['template'] === 'badge2') { ?>
                <span class="wpsr-reviews-badge-title"> <?php echo $badge_settings['custom_title']; ?> </span>
            <?php } ?>

            <?php if (Arr::get($business_info, 'average_rating')) { ?>
                <div class="wpsr-total-rating">
                    <?php echo number_format($business_info['average_rating'], 1) ; ?>
                    <span class="wpsr-rating">
                        <?php echo Helper::generateRatingIcon(number_format($business_info['average_rating'], 1)); ?>
                    </span>
                </div>
            <?php } ?>

            <div class="wpsr-total-reviews">
                <?php echo $custom_num_of_reviews_text; ?>
            </div>
        </div>
    </div>
<!--conditional tag(div/a)-->
<?php echo $endTag ?>
</div>