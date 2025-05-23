<?php

namespace EssentialElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

\Breakdance\ElementStudio\registerElementForEditing(
    "EssentialElements\\Postslist",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class Postslist extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return 'WordPressIcon';
    }

    static function tag()
    {
        return 'div';
    }

    static function tagOptions()
    {
        return [];
    }

    static function tagControlPath()
    {
        return false;
    }

    static function name()
    {
        return 'Post List';
    }

    static function className()
    {
        return 'bde-post-list';
    }

    static function category()
    {
        return 'dynamic';
    }

    static function badge()
    {
        return false;
    }

    static function slug()
    {
        return get_class();
    }

    static function template()
    {
        return file_get_contents(__DIR__ . '/html.twig');
    }

    static function defaultCss()
    {
        return file_get_contents(__DIR__ . '/default.css');
    }

    static function defaultProperties()
    {
        return ['design' => ['list' => ['layout' => 'grid', 'items_per_row' => ['breakpoint_base' => 3, 'breakpoint_tablet_landscape' => 2], 'one_item_at' => 'breakpoint_tablet_portrait', 'space_between_items' => ['number' => 20, 'unit' => 'px', 'style' => '20px']], 'post' => ['container' => ['background' => null, 'borders' => ['border' => null, 'radius' => ['breakpoint_base' => ['all' => ['number' => 4, 'unit' => 'px', 'style' => '4px'], 'topLeft' => ['number' => 4, 'unit' => 'px', 'style' => '4px'], 'topRight' => ['number' => 4, 'unit' => 'px', 'style' => '4px'], 'bottomLeft' => ['number' => 4, 'unit' => 'px', 'style' => '4px'], 'bottomRight' => ['number' => 4, 'unit' => 'px', 'style' => '4px'], 'editMode' => 'all']], 'shadow' => ['breakpoint_base' => ['shadows' => ['0' => ['color' => '#0000000F', 'x' => '2', 'y' => '4', 'blur' => '20', 'spread' => '0', 'position' => 'outset']], 'style' => '2px 4px 20px 0px #0000000F']]], 'padding' => ['padding' => ['breakpoint_base' => ['left' => ['number' => 20, 'unit' => 'px', 'style' => '20px'], 'right' => ['number' => 20, 'unit' => 'px', 'style' => '20px'], 'top' => ['number' => 20, 'unit' => 'px', 'style' => '20px'], 'bottom' => ['number' => 20, 'unit' => 'px', 'style' => '20px']]]], 'alignment' => 'flex-start'], 'image' => null, 'title' => null, 'meta' => null, 'content' => null, 'button' => ['style' => null]]], 'content' => ['post' => ['title' => ['disable' => false], 'meta' => ['disable' => false, 'meta' => ['0' => 'author', '1' => 'date', '2' => 'comment'], 'separator' => '/', 'link' => false], 'taxonomy' => ['disable' => true], 'content' => ['type' => 'excerpt', 'excerpt_length' => 30], 'button' => ['disable' => false]], 'query' => null]];
    }

    static function defaultChildren()
    {
        return false;
    }

    static function cssTemplate()
    {
        $template = file_get_contents(__DIR__ . '/css.twig');
        return $template;
    }

    static function designControls()
    {
        return [c(
            "post",
            "Post",
            [c(
                "container",
                "Container",
                [c(
                    "background",
                    "Background",
                    [],
                    ['type' => 'color', 'layout' => 'inline'],
                    false,
                    false,
                    [],
                ), getPresetSection(
                    "EssentialElements\\borders",
                    "Borders",
                    "borders",
                    ['type' => 'popout']
                ), getPresetSection(
                    "EssentialElements\\spacing_padding_all",
                    "Padding",
                    "padding",
                    ['type' => 'popout']
                ), c(
                    "alignment",
                    "Alignment",
                    [],
                    ['type' => 'button_bar', 'layout' => 'inline', 'items' => ['0' => ['value' => 'flex-start', 'text' => 'Left', 'icon' => 'AlignLeftIcon'], '1' => ['text' => 'Center', 'value' => 'center', 'icon' => 'AlignCenterIcon'], '2' => ['text' => 'Right', 'value' => 'flex-end', 'icon' => 'AlignRightIcon'], '3' => ['text' => 'Justify', 'value' => 'stretch', 'icon' => 'AlignJustifyIcon']]],
                    false,
                    false,
                    [],
                )],
                ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
                false,
                false,
                [],
            ), c(
                "image",
                "Image",
                [c(
                    "position",
                    "Position",
                    [],
                    ['type' => 'dropdown', 'layout' => 'inline', 'items' => ['0' => ['value' => 'top', 'text' => 'Top'], '1' => ['text' => 'Left', 'value' => 'left'], '2' => ['text' => 'Right', 'value' => 'right'], '3' => ['text' => 'Bottom', 'value' => 'bottom']]],
                    false,
                    false,
                    [],
                ), c(
                    "stack_vertically_at",
                    "Stack Vertically At",
                    [],
                    ['type' => 'breakpoint_dropdown', 'layout' => 'inline', 'condition' => ['path' => 'design.post.image.position', 'operand' => 'is one of', 'value' => ['0' => 'left', '1' => 'right']]],
                    false,
                    false,
                    [],
                ), c(
                    "space",
                    "Space",
                    [],
                    ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 100, 'step' => 1]],
                    true,
                    false,
                    [],
                ), getPresetSection(
                    "EssentialElements\\borders",
                    "Borders",
                    "borders",
                    ['type' => 'popout']
                ), c(
                    "width",
                    "Width",
                    [],
                    ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['0' => '%', '1' => 'px'], 'defaultType' => '%'], 'rangeOptions' => ['min' => 0, 'max' => 100, 'step' => 1]],
                    true,
                    false,
                    [],
                ), c(
                    "aspect_ratio",
                    "Aspect Ratio",
                    [],
                    ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 4, 'step' => 0.1]],
                    true,
                    false,
                    [],
                )],
                ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
                false,
                false,
                [],
            ), c(
                "title",
                "Title",
                [getPresetSection(
                    "EssentialElements\\typography_with_effects_with_hoverable_color_and_effects",
                    "Typography",
                    "typography",
                    ['type' => 'popout']
                ), c(
                    "space_below",
                    "Space Below",
                    [],
                    ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 100, 'step' => 1]],
                    true,
                    false,
                    [],
                ), c(
                    "order",
                    "Order",
                    [],
                    ['type' => 'number', 'layout' => 'inline'],
                    false,
                    false,
                    [],
                )],
                ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
                false,
                false,
                [],
            ), c(
                "meta",
                "Meta",
                [getPresetSection(
                    "EssentialElements\\typography",
                    "Text",
                    "text",
                    ['type' => 'popout']
                ), c(
                    "separator",
                    "Separator",
                    [],
                    ['type' => 'color', 'layout' => 'inline'],
                    false,
                    false,
                    [],
                ), c(
                    "space_between",
                    "Space Between",
                    [],
                    ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 100, 'step' => 1]],
                    true,
                    false,
                    [],
                ), c(
                    "space_below",
                    "Space Below",
                    [],
                    ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 100, 'step' => 1]],
                    true,
                    false,
                    [],
                ), c(
                    "order",
                    "Order",
                    [],
                    ['type' => 'number', 'layout' => 'inline'],
                    false,
                    false,
                    [],
                )],
                ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
                false,
                false,
                [],
            ), c(
                "taxonomy",
                "Taxonomy",
                [getPresetSection(
                    "EssentialElements\\typography",
                    "Text",
                    "text",
                    ['type' => 'popout']
                ), c(
                    "separator",
                    "Separator",
                    [],
                    ['type' => 'color', 'layout' => 'inline'],
                    false,
                    false,
                    [],
                ), c(
                    "space_between",
                    "Space Between",
                    [],
                    ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 100, 'step' => 1]],
                    true,
                    false,
                    [],
                ), c(
                    "space_below",
                    "Space Below",
                    [],
                    ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 1, 'max' => 100, 'step' => 0]],
                    true,
                    false,
                    [],
                ), c(
                    "order",
                    "Order",
                    [],
                    ['type' => 'number', 'layout' => 'inline'],
                    false,
                    false,
                    [],
                )],
                ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
                false,
                false,
                [],
            ), c(
                "content",
                "Content",
                [getPresetSection(
                    "EssentialElements\\typography",
                    "Typography",
                    "typography",
                    ['type' => 'popout']
                ), c(
                    "space_below",
                    "Space Below",
                    [],
                    ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 100, 'step' => 1]],
                    true,
                    false,
                    [],
                ), c(
                    "order",
                    "Order",
                    [],
                    ['type' => 'number', 'layout' => 'inline'],
                    false,
                    false,
                    [],
                )],
                ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
                false,
                false,
                [],
            ), getPresetSection(
                "EssentialElements\\AtomV1ButtonDesign",
                "Button",
                "button",
                ['type' => 'popout']
            )],
            ['type' => 'section'],
            false,
            false,
            [],
        ), getPresetSection(
            "EssentialElements\\posts-list-design",
            "List",
            "list",
            ['type' => 'popout']
        ), getPresetSection(
            "EssentialElements\\posts-pagination-design",
            "Pagination",
            "pagination",
            ['type' => 'popout']
        ), getPresetSection(
            "EssentialElements\\spacing_margin_y",
            "Spacing",
            "spacing",
            ['type' => 'popout']
        )];
    }

    static function contentControls()
    {
        return [c(
            "post",
            "Post",
            [c(
                "image",
                "Image",
                [c(
                    "disable",
                    "Disable",
                    [],
                    ['type' => 'toggle', 'layout' => 'inline'],
                    false,
                    false,
                    [],
                ), c(
                    "fallback_image",
                    "Fallback Image",
                    [],
                    ['type' => 'wpmedia', 'layout' => 'vertical', 'mediaOptions' => ['acceptedFileTypes' => ['0' => 'image'], 'multiple' => false]],
                    false,
                    false,
                    [],
                ), c(
                    "size",
                    "Size",
                    [],
                    ['type' => 'media_size_dropdown', 'layout' => 'inline', 'condition' => ['path' => 'content.post.image.fallback_image', 'operand' => 'is set', 'value' => '']],
                    false,
                    false,
                    [],
                )],
                ['type' => 'section', 'layout' => 'vertical', 'sectionOptions' => ['type' => 'popout']],
                false,
                false,
                [],
            ), c(
                "title",
                "Title",
                [c(
                    "disable",
                    "Disable",
                    [],
                    ['type' => 'toggle', 'layout' => 'inline'],
                    false,
                    false,
                    [],
                ), c(
                    "tag",
                    "Tag",
                    [],
                    ['type' => 'dropdown', 'layout' => 'inline', 'items' => ['0' => ['value' => 'h1', 'text' => 'H1'], '1' => ['text' => 'H2', 'value' => 'h2'], '2' => ['text' => 'H3', 'value' => 'h3'], '3' => ['text' => 'H4', 'value' => 'h4'], '4' => ['text' => 'H5', 'value' => 'h5'], '5' => ['text' => 'H6', 'value' => 'h6'], '6' => ['text' => 'span', 'value' => 'span'], '7' => ['text' => 'div', 'value' => 'div']]],
                    false,
                    false,
                    [],
                )],
                ['type' => 'section', 'layout' => 'vertical', 'sectionOptions' => ['type' => 'popout']],
                false,
                false,
                [],
            ), c(
                "meta",
                "Meta",
                [c(
                    "disable",
                    "Disable",
                    [],
                    ['type' => 'toggle', 'layout' => 'inline'],
                    false,
                    false,
                    [],
                ), c(
                    "meta",
                    "Meta",
                    [],
                    ['type' => 'multiselect', 'layout' => 'inline', 'items' => ['0' => ['value' => 'author', 'text' => 'Author'], '1' => ['text' => 'Date', 'value' => 'date'], '2' => ['text' => 'Comment', 'value' => 'comment']]],
                    false,
                    false,
                    [],
                ), c(
                    "separator",
                    "Separator",
                    [],
                    ['type' => 'text', 'layout' => 'inline', 'placeholder' => '.'],
                    false,
                    false,
                    [],
                ), c(
                    "link",
                    "Link",
                    [],
                    ['type' => 'toggle', 'layout' => 'inline'],
                    false,
                    false,
                    [],
                )],
                ['type' => 'section', 'layout' => 'vertical', 'sectionOptions' => ['type' => 'popout']],
                false,
                false,
                [],
            ), c(
                "taxonomy",
                "Taxonomy",
                [c(
                    "disable",
                    "Disable",
                    [],
                    ['type' => 'toggle', 'layout' => 'inline'],
                    false,
                    false,
                    [],
                ), c(
                    "type",
                    "Type",
                    [],
                    ['type' => 'dropdown', 'layout' => 'inline', 'items' => ['0' => ['value' => 'categories', 'text' => 'Categories'], '1' => ['text' => 'Tags', 'value' => 'tags']], 'dropdownOptions' => ['populate' => ['path' => '', 'text' => '', 'value' => '', 'fetchDataAction' => 'breakdance_get_taxonomies', 'fetchContextPath' => '', 'refetchPaths' => []]]],
                    false,
                    false,
                    [],
                ), c(
                    "count",
                    "Count",
                    [],
                    ['type' => 'number', 'layout' => 'inline'],
                    false,
                    false,
                    [],
                ), c(
                    "separator",
                    "Separator",
                    [],
                    ['type' => 'text', 'layout' => 'inline'],
                    false,
                    false,
                    [],
                ), c(
                    "link",
                    "Link",
                    [],
                    ['type' => 'toggle', 'layout' => 'inline'],
                    false,
                    false,
                    [],
                )],
                ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
                false,
                false,
                [],
            ), c(
                "content",
                "Content",
                [c(
                    "disable",
                    "Disable",
                    [],
                    ['type' => 'toggle', 'layout' => 'inline'],
                    false,
                    false,
                    [],
                ), c(
                    "type",
                    "Type",
                    [],
                    ['type' => 'button_bar', 'layout' => 'inline', 'items' => ['0' => ['value' => 'excerpt', 'text' => 'Excerpt'], '1' => ['text' => 'Content', 'value' => 'content']]],
                    false,
                    false,
                    [],
                ), c(
                    "excerpt_length",
                    "Excerpt Length",
                    [],
                    ['type' => 'number', 'layout' => 'inline', 'condition' => ['path' => '%%CURRENTPATH%%.type', 'operand' => 'equals', 'value' => 'excerpt']],
                    false,
                    false,
                    [],
                )],
                ['type' => 'section', 'layout' => 'vertical', 'sectionOptions' => ['type' => 'popout']],
                false,
                false,
                [],
            ), c(
                "button",
                "Button",
                [c(
                    "disable",
                    "Disable",
                    [],
                    ['type' => 'toggle', 'layout' => 'inline'],
                    false,
                    false,
                    [],
                ), c(
                    "button_text",
                    "Button Text",
                    [],
                    ['type' => 'text', 'layout' => 'vertical'],
                    false,
                    false,
                    [],
                )],
                ['type' => 'section', 'layout' => 'vertical', 'sectionOptions' => ['type' => 'popout']],
                false,
                false,
                [],
            ), c(
                "open_in_new_tab",
                "Open In New Tab",
                [],
                ['type' => 'toggle', 'layout' => 'inline'],
                false,
                false,
                [],
            )],
            ['type' => 'section', 'layout' => 'vertical', 'condition' => ['path' => 'content.post_block.use_global_block', 'operand' => 'is not set', 'value' => '']],
            false,
            false,
            [],
        ), c(
            "query",
            "Query",
            [c(
                "query",
                "Query",
                [],
                ['type' => 'wp_query', 'layout' => 'vertical'],
                false,
                false,
                [],
            )],
            ['type' => 'section', 'layout' => 'vertical', 'sectionOptions' => ['type' => 'accordion']],
            false,
            false,
            [],
        ), getPresetSection(
            "EssentialElements\\posts-pagination-content",
            "Pagination",
            "pagination",
            ['type' => 'popout']
        )];
    }

    static function settingsControls()
    {
        return [];
    }

    static function dependencies()
    {
        return ['0' => ['scripts' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/swiper@8/swiper-bundle.min.js', '%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/breakdance-swiper/breakdance-swiper.js'], 'styles' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/swiper@8/swiper-bundle.min.css', '%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/swiper@8/breakdance-swiper-preset-defaults.css'], 'inlineScripts' => ['window.BreakdanceSwiper().update({
  id: \'%%ID%%\', selector:\'%%SELECTOR%%\',
  settings:{{ design.list.slider.settings|json_encode }},
  paginationSettings:{{ design.list.slider.pagination|json_encode }},
});', ], 'builderCondition' => 'return {{ design.list.layout == \'slider\' }};', 'frontendCondition' => 'return {{ design.list.layout == \'slider\' }};', 'title' => 'Slider'], '1' => ['inlineScripts' => ['window.BreakdancePostsList?.loadMorePostsInit(
  {
    selector: "%%SELECTOR%%",
    postId: "%%POSTID%%",
    id: "%%ID%%"
  }
)', ], 'frontendCondition' => '{% if content.pagination.pagination == "load_more"%}
return true;
{% else%}
 return false;
{% endif %}', 'builderCondition' => 'return false;', 'scripts' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/breakdance-pagination@1/pagination.js'], 'title' => 'Pagination - Load more'], '2' => ['inlineScripts' => ['window.BreakdancePostsList?.infiniteScrollInit(
  {
    selector: "%%SELECTOR%%",
    postId: "%%POSTID%%",
    id: "%%ID%%"
  }
)', ], 'frontendCondition' => '{% if content.pagination.pagination == "infinite"%}
return true;
{% else%}
 return false;
{% endif %}', 'builderCondition' => 'return false;', 'scripts' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/breakdance-pagination@1/pagination.js'], 'title' => 'Pagination - Infinite scroll']];
    }

    static function settings()
    {
        return false;
    }

    static function addPanelRules()
    {
        return false;
    }

    static public function actions()
    {
        return [

            'onPropertyChange' => [['script' => '{% if design.list.layout == \'slider\' %}
window.BreakdanceSwiper().update({
  id: \'%%ID%%\', selector:\'%%SELECTOR%%\',
  settings:{{ design.list.slider.settings|json_encode }},
  paginationSettings:{{ design.list.slider.pagination|json_encode }},
});
{% else %}
window.swiperInstances && window.swiperInstances[\'%%ID%%\'] && window.BreakdanceSwiper().destroy(
  \'%%ID%%\'
);
{% endif %}', 'dependencies' => ['design.list.layout'],
            ]],

            'onMovedElement' => [['script' => '{% if design.list.layout == \'slider\' %}
window.BreakdanceSwiper().update({
  id: \'%%ID%%\', selector:\'%%SELECTOR%%\',
  settings:{{ design.list.slider.settings|json_encode }},
  paginationSettings:{{ design.list.slider.pagination|json_encode }},
});
{% endif %}',
            ]],

            'onBeforeDeletingElement' => [['script' => '{% if design.list.layout == \'slider\' %}
window.swiperInstances && window.swiperInstances[\'%%ID%%\'] && window.BreakdanceSwiper().destroy(
  \'%%ID%%\'
);
{% endif %}',
            ]],

            'onMountedElement' => [['script' => '{% if design.list.layout == \'slider\' %}
window.BreakdanceSwiper().update({
  id: \'%%ID%%\', selector:\'%%SELECTOR%%\',
  settings:{{ design.list.slider.settings|json_encode }},
  paginationSettings:{{ design.list.slider.pagination|json_encode }},
});
{% endif %}',
            ]]];
    }

    static function nestingRule()
    {
        return ["type" => "final"];
    }

    static function spacingBars()
    {
        return ['0' => ['location' => 'outside-top', 'cssProperty' => 'margin-top', 'affectedPropertyPath' => 'design.spacing.margin_top.%%BREAKPOINT%%'], '1' => ['location' => 'outside-bottom', 'cssProperty' => 'margin-bottom', 'affectedPropertyPath' => 'design.spacing.margin_bottom.%%BREAKPOINT%%']];
    }

    static function attributes()
    {
        return false;
    }

    static function experimental()
    {
        return false;
    }

    static function order()
    {
        return 2100;
    }

    static function dynamicPropertyPaths()
    {
        return ['0' => ['accepts' => 'string', 'path' => 'content.post.button.button_text']];
    }

    static function additionalClasses()
    {
        return false;
    }

    static function projectManagement()
    {
        return false;
    }

    static function propertyPathsToWhitelistInFlatProps()
    {
        return ['design.list.one_item_at', 'design.post.image.stack_vertically_at', 'design.list.layout', 'design.post.button.custom.size.full_width_at', 'design.post.button.style', 'design.pagination.load_more_button.custom.size.full_width_at', 'design.pagination.load_more_button.style', 'design.pagination.load_more_button.styles.size.full_width_at', 'design.pagination.load_more_button.styles'];
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return ['content', 'design.list.layout', 'design.post.button'];
    }
}
