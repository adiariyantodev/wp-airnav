<?php

namespace Breakdance\DesignLibrary;

use function Breakdance\BrowseMode\isRequestFromBrowserIframe;
use function Breakdance\isRequestFromBuilderIframe;
use function Breakdance\Util\validateUrl;

class CacheWhetherDesignLibraryIsEnabled
{

    use \Breakdance\Singleton;

    /**
     * @var boolean
     */
    public $enabled = false;


    function __construct() {
        $isAdmin = \Breakdance\Permissions\hasPermission('full');
        $isDesignLibraryModal = isRequestFromDesignLibraryModal();
        $isRequestFromBuilderOrBrowseMode = isRequestFromBuilderIframe() || isRequestFromBrowserIframe();
        $enabledInDatabase = isDesignLibrayEnabled();

        $allowedForCurrentRequest = $isAdmin && $isDesignLibraryModal;

        $this->enabled = $enabledInDatabase && !$isRequestFromBuilderOrBrowseMode || $allowedForCurrentRequest;
    }

}

/**
 * @return bool
 */
function isDesignLibrayEnabled()
{
    return \Breakdance\Data\get_global_option('is_copy_from_frontend_enabled') == 'yes';
}

/**
 * @return bool
 */
function doesDesignLibraryRelyOnGlobalSettings()
{
    return \Breakdance\Data\get_global_option('design_library_relies_on_global_settings') == 'yes';
}

/**
 * @return bool
 */
function isDesignLibraryEnabledForCurrentRequest()
{
    return CacheWhetherDesignLibraryIsEnabled::getInstance()->enabled;
}

/**
 * @return bool
 */
function isRequestFromDesignLibraryModal()
{
    if (!isset($_GET['breakdance'])) return false;
    return $_GET['breakdance'] === 'design-library';
}

/**
 * @return string[]
 */
function getCopyableElements()
{
    $elements = [
        'EssentialElements\Section',
        'EssentialElements\HeaderBuilder'
    ];

    /** @var string[] */
    return apply_filters('breakdance_design_library_copyable_elements', $elements);
}

/**
 * Save providers to the database and turn commas into line breaks
 * @param array|string $providers
 * @return void
 */
function setDesignSets($providers)
{
    $providers = array_unique(array_map('esc_url', wp_parse_list($providers)));
    \Breakdance\Data\set_global_option('design_sets', $providers);
}

/**
 * @return string[]
 */
function getDesignSets()
{
    /** @var string[]|false */
    $designSets = \Breakdance\Data\get_global_option('design_sets');
    return is_array($designSets) ? $designSets : [];
}

/**
 * @return string[]
 */
function getInvalidDesignSets()
{
    $providers = getDesignSets();

    return array_filter(
        $providers,
        fn($provider) => !isValidDesignSet($provider)
    );
}

/**
 * @param string $url
 * @return DesignSetData|array{error: string}
 */
function getDesignSetRemoteData($url)
{
    $request = wp_remote_post($url, [
        'timeout' => 20,
        'body' => [
            'breakdance_ajax_at_any_url' => true,
            'action' => 'breakdance_get_design_set'
        ]
    ]);

    if (is_wp_error($request)) {
        /** @var \WP_Error $request */
        return ['error' => $request->get_error_message()];
    }

    if (is_array($request) && (!isset($request['response']['code']) || $request['response']['code'] !== 200)) {
        return ['error' => 'Unable to retrieve website'];
    }

    $body = wp_remote_retrieve_body($request);

    /** @var mixed */
    $data = json_decode($body);

    if (!is_object($data)) {
        return ['error' => 'Unable to decode data from website'];
    }

    /** @var DesignSetData */
    return (array) $data;
}

/**
 * @return DesignSetPost[]
 */
function getPostsForDesignSet()
{
    $isAdmin = \Breakdance\Permissions\hasPermission('full');

    $args = [
        'post_type' => 'any',
        'showposts' => -1,
        'post_status' => $isAdmin ? ['draft', 'publish'] : 'publish',
        'meta_query' => [
            'relation' => 'AND',
            [
                'relation' => 'OR',
                [
                    'key' => '_breakdance_hide_in_design_set',
                    'compare' => 'NOT EXISTS',
                ],
                [
                    'key' => '_breakdance_hide_in_design_set',
                    'compare' => '!=',
                    'value' => '1'
                ],
            ],
            [
                'key' => 'breakdance_data',
                'compare' => 'EXISTS',
            ]
        ]
    ];

    /** @var \WP_Post[] */
    $posts = get_posts($args);

    return array_map(function ($post) {
        /** @var string */
        $rawTags = get_post_meta($post->ID, '_breakdance_tags', true);
        /** @var string[] */
        $tags = wp_parse_list($rawTags);
        /** @var string */
        $url = get_permalink($post->ID);

        return [
            'id' => $post->ID,
            'name' => $post->post_title ?: '(no title)',
            'url' => $url,
            'tags' => $tags
        ];
    }, $posts);
}

/**
 * @param string $url
 * @return bool
 */
function isValidDesignSet($url)
{
    if ($url === '') return false;
    if (!validateUrl($url)) return false;

    $response = getDesignSetRemoteData($url);

    if (array_key_exists('error', $response)) return false;

    if (!$response) return false;
    if (empty($response['enabled'])) return false;

    return true;
}
