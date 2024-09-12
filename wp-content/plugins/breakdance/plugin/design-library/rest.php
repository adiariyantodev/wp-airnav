<?php

namespace Breakdance\DesignLibrary;

/**
 * @return DesignSetData
 */
function endpoint()
{
    return [
        'enabled' => isDesignLibrayEnabled(),
        'reliesOnGlobalSettings' => doesDesignLibraryRelyOnGlobalSettings(),
        'name' => get_bloginfo('name'),
        'posts' => getPostsForDesignSet()
    ];
}

/**
 * @param string $url
 * @return DesignSetData|array{error: string}
 */
function externalEndpoint($url)
{
    return getDesignSetRemoteData($url);
}

add_action('breakdance_loaded', function () {
    \Breakdance\AJAX\register_handler(
        'breakdance_get_design_set',
        'Breakdance\DesignLibrary\endpoint',
        'none',
        true,
        [
            'remote' => true
        ]
    );

    \Breakdance\AJAX\register_handler(
        'breakdance_get_external_design_set',
        'Breakdance\DesignLibrary\externalEndpoint',
        'full',
        true,
        [
            'args' => [
                'url' => FILTER_VALIDATE_URL
            ],
        ]
    );

    \Breakdance\AJAX\register_handler(
        'breakdance_get_external_global_settings',
        'Breakdance\DesignLibrary\getExternalGlobalSettings',
        'full',
        true,
        [
            'args' => [
                'url' => FILTER_VALIDATE_URL
            ],
        ]
    );
});

/**
 * @param string $url
 * @return array | null
 */
function getExternalGlobalSettings($url){
    $request = wp_remote_post($url, [
        'timeout' => 20,
        'body' => [
            'breakdance_ajax_at_any_url' => true,
            'action' => 'breakdance_get_global_settings_for_design_library'
        ]
    ]);

    if (!$request || is_wp_error($request)) return null;

    $body = wp_remote_retrieve_body($request);

    /** @var mixed */
    $data = json_decode($body);

    if (!is_object($data)) return null;

    /** @var DesignSetData */
    return (array) $data;
}
