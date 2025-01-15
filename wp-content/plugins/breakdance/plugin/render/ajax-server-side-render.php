<?php

namespace Breakdance\Render;

use Exception;
use function Breakdance\ClassesSelectors\template;

add_action('breakdance_loaded', function () {
    \Breakdance\AJAX\register_handler(
        'breakdance_server_side_render',
        '\Breakdance\Render\serverSideRender',
        'edit',
        true,
        [
            'args' => [
                'properties' => FILTER_UNSAFE_RAW,
                'parentProperties' => FILTER_UNSAFE_RAW,
                'elementSlug' => FILTER_UNSAFE_RAW,
            ]
        ]
    );
});

/**
 * @param string $propertiesJsonString
 * @param string $parentPropertiesJsonString
 * @param string $elementSlug
 * @return SsrNode
 * @throws Exception (if element doesn't exist)
 */
function serverSideRender($propertiesJsonString, $parentPropertiesJsonString, $elementSlug)
{
    /**
     * Silence operator will be removed after https://github.com/soflyy/breakdance/issues/722 completion
     * @var PropertiesData
     */
    $properties = @json_decode($propertiesJsonString, true);
    /**
     * @var PropertiesData
     */
    $parentProperties = @json_decode($parentPropertiesJsonString, true);

    if ($elementSlug && class_exists($elementSlug)) {
        /**
         * @psalm-suppress MixedMethodCall
         * @var \Breakdance\Elements\Element
         */
        $element = new $elementSlug();
        $ssrResult = $element::ssr($properties ?: [], $parentProperties ?: [], true);

        return [
            'html' => $ssrResult,
            'postsGeneratedCssFilePaths' => (object) ScriptAndStyleHolder::getInstance()->getPostsGeneratedCssFilePaths()
        ];

    } else {
        throw new \Exception("Cant render element that doesnt exist -  {$elementSlug}");
    }
}


add_action('breakdance_loaded', function () {
    \Breakdance\AJAX\register_handler(
        'breakdance_server_side_render_with_dependencies',
        '\Breakdance\Render\serverSideRenderWithDependencies',
        'edit',
        true,
        [
            'args' => [
                'properties' => FILTER_UNSAFE_RAW,
                'parentProperties' => FILTER_UNSAFE_RAW,
                'elementSlug' => FILTER_SANITIZE_SPECIAL_CHARS,
            ]
        ]
    );
});

/**
 * @param string $propertiesJsonString
 * @param string $parentPropertiesJsonString
 * @param string $elementSlug
 * @return SsrNodeWithDependencies
 * @throws Exception (if element doesn't exist)
 */
function serverSideRenderWithDependencies($propertiesJsonString, $parentPropertiesJsonString, $elementSlug)
{
    return array_merge(
        serverSideRender($propertiesJsonString, $parentPropertiesJsonString, $elementSlug),
        ['dependencies' => ScriptAndStyleHolder::getInstance()->dependencies]
    );
}
