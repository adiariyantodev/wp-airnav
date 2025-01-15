<?php

namespace Breakdance\Themeless;

/**
 * @return Template[]
 */
function getTemplatesFromDb()
{
    return array_map(
        '\Breakdance\Themeless\postToTemplate',
        getTemplatesAsWPPosts()
    );
}

/**
 * @return Template[]
 */
function getHeadersFromDb()
{
    return array_map(
        '\Breakdance\Themeless\postToTemplate',
        getHeadersAsWPPosts()
    );
}



/**
 * @return Template[]
 */
function getFootersFromDb()
{
    return array_map(
        '\Breakdance\Themeless\postToTemplate',
        getFootersAsWPPosts()
    );
}

/**
 * @return Template[]
 */
function getPopupsFromDb()
{
    return array_map(
        '\Breakdance\Themeless\postToTemplate',
        getPopupsAsWPPosts()
    );
}

/**
 * @param int $id
 * @param bool $decodeAsObject
 * @return TemplateSettings
 */
function getTemplateSettingsFromDatabase($id, $decodeAsObject = false)
{
    /** @var TemplateSettings $templateSettings */
    $templateSettings = json_decode((string) \Breakdance\Data\get_meta(
        $id,
        'breakdance_template_settings'
    ), !$decodeAsObject);

    return $templateSettings;
}


/**
 * @param bool $trashed
 * @return \WP_Post[]
 */
function getTemplatesAsWPPosts(bool $trashed = false)
{
    /** @var \WP_Post[] */
    return get_posts([
        'post_type' => BREAKDANCE_TEMPLATE_POST_TYPE,
        'posts_per_page' => -1,
        'post_status' => $trashed ? 'trash' : 'publish',
    ]);
}

/**
 * @param bool $trashed
 * @return \WP_Post[]
 */
function getHeadersAsWPPosts(bool $trashed = false)
{
    /** @var \WP_Post[] */
    return get_posts([
        'post_type' => BREAKDANCE_HEADER_POST_TYPE,
        'posts_per_page' => -1,
        'post_status' => $trashed ? 'trash' : 'publish',
    ]);
}


/**
 * @param bool $trashed
 * @return \WP_Post[]
 */
function getFootersAsWPPosts(bool $trashed = false)
{
    /** @var \WP_Post[] */
    return get_posts([
        'post_type' => BREAKDANCE_FOOTER_POST_TYPE,
        'posts_per_page' => -1,
        'post_status' => $trashed ? 'trash' : 'publish',
    ]);
}

/**
 * @param bool $trashed
 * @return \WP_Post[]
 */
function getGlobalBlocksAsWpPosts(bool $trashed = false)
{
    /** @var \WP_Post[] */
    return get_posts([
        'post_type' => BREAKDANCE_BLOCK_POST_TYPE,
        'posts_per_page' => -1,
        'post_status' => $trashed ? 'trash' : 'publish',
    ]);
}


/**
 * @param bool $trashed
 * @return \WP_Post[]
 */
function getPopupsAsWPPosts($trashed = false)
{
    /** @var \WP_Post[] */
    return get_posts([
        'post_type' => BREAKDANCE_POPUP_POST_TYPE,
        'posts_per_page' => -1,
        'post_status' => $trashed ? 'trash' : 'publish',
    ]);
}

/**
 * @param \WP_Post $post
 * @return Template
 */
function postToTemplate($post) {
    return
        [
            'id' => $post->ID,
            'settings' => getTemplateSettingsFromDatabase($post->ID),
        ];
}
