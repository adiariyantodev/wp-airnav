<?php

namespace EssentialElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "EssentialElements\\Basicslider",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class Basicslider extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return '<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" fill="currentColor" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" clip-rule="evenodd" viewBox="0 0 500 500">   <path d="M96.5 53c-8.279 0-15 6.721-15 15s6.721 15 15 15h307c8.28 0 15-6.721 15-15s-6.72-15-15-15h-307ZM96.5 359c-8.279 0-15 6.721-15 15s6.721 15 15 15h307c8.28 0 15-6.721 15-15s-6.72-15-15-15h-307ZM250 417c-8.278 0-15 6.721-15 15s6.722 15 15 15c8.28 0 15-6.721 15-15s-6.72-15-15-15ZM206 417c-8.278 0-15 6.721-15 15s6.722 15 15 15c8.28 0 15-6.721 15-15s-6.72-15-15-15ZM294 417c-8.278 0-15 6.721-15 15s6.722 15 15 15c8.28 0 15-6.721 15-15s-6.72-15-15-15Z"/>   <path d="M81.5 374c0 8.278 6.721 15 15 15s15-6.722 15-15V68c0-8.28-6.721-15-15-15s-15 6.72-15 15v306ZM388.5 374c0 8.278 6.721 15 15 15s15-6.722 15-15V68c0-8.28-6.721-15-15-15s-15 6.72-15 15v306ZM466.11 221l-16.324-22.143c-4.912-6.663-3.49-16.062 3.173-20.974 6.664-4.913 16.063-3.49 20.975 3.173l20.73 28.121c3.584 3.013 5.43 7.407 5.332 11.823a14.99 14.99 0 0 1-5.332 11.822l-20.73 28.122c-4.912 6.663-14.31 8.085-20.975 3.173-6.663-4.912-8.085-14.31-3.173-20.975L466.11 221ZM33.891 221l16.323-22.143c4.912-6.663 3.49-16.062-3.173-20.974-6.664-4.913-16.063-3.49-20.975 3.173l-20.73 28.121C1.752 212.19-.094 216.584.004 221a14.99 14.99 0 0 0 5.332 11.822l20.73 28.122c4.912 6.663 14.311 8.085 20.975 3.173 6.663-4.912 8.085-14.31 3.173-20.975L33.891 221Z"/> </svg>';
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
        return 'BasicSlider';
    }

    static function className()
    {
        return 'bde-basicslider';
    }

    static function category()
    {
        return 'blocks';
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
        return ['content' => ['content' => ['title_html_tag' => 'h3', 'slides' => ['0' => ['title' => 'Slide 1', 'text' => '<p>The quick, brown, classic rose, and bossanova fox jumped over the lazy dog.</p>', 'background' => ['color' => '#fcbc8f'], 'button' => null], '1' => ['title' => 'Slide 2', 'text' => '<p>The quick, brown, bizarre, and thunderbird fox jumped over the lazy dog.</p>', 'background' => ['color' => '#f0d9db']], '2' => ['text' => '<p>The quick, brown, charlotte, and red fox jumped over the lazy dog.</p>', 'title' => 'Slide 3', 'background' => ['color' => '#c0faf9']]]]], 'design' => ['container' => ['height' => 'custom', 'custom_height' => ['number' => 600, 'unit' => 'px', 'style' => '600px']], 'slide' => ['align_children' => null, 'vertical_align_children' => null], 'slider' => ['arrows' => ['overlay' => true, 'color' => '#000000FF'], 'settings' => null, 'pagination' => ['type' => 'bullets', 'progress_bar' => null, 'margin' => null, 'bullets' => ['color' => '#000000'], 'overlay' => true]], 'spacing' => ['after_text' => null, 'container' => null], 'button' => ['display_as' => null], 'size' => ['height' => 'custom', 'custom_height' => ['breakpoint_base' => ['number' => 500, 'unit' => 'px', 'style' => '500px']]]]];
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
        "size",
        "Size",
        [c(
        "width",
        "Width",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
      ), c(
        "height",
        "Height",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => ['0' => ['value' => 'fit-content', 'text' => 'Fit Content'], '1' => ['text' => 'Viewport', 'value' => 'viewport'], '2' => ['text' => 'Custom', 'value' => 'custom']]],
        false,
        false,
        [],
      ), c(
        "custom_height",
        "Custom Height",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'condition' => ['path' => 'design.container.height', 'operand' => 'equals', 'value' => 'custom']],
        true,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\AtomV1SwiperSettings",
      "Slider",
      "slider",
       ['type' => 'popout']
     ), c(
        "slide",
        "Slide",
        [c(
        "align_children",
        "Align Children",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => ['0' => ['value' => 'left', 'text' => 'Left'], '1' => ['text' => 'Center', 'value' => 'center'], '2' => ['text' => 'Right', 'value' => 'right']], 'buttonBarOptions' => ['size' => 'small'], 'condition' => ['path' => 'design.layout.advanced.flex_direction', 'operand' => 'is not set', 'value' => '']],
        true,
        false,
        [],
      ), c(
        "vertical_align_children",
        "Vertical Align Children",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => ['0' => ['value' => 'top', 'text' => 'Top'], '1' => ['text' => 'Middle', 'value' => 'middle'], '2' => ['text' => 'Bottom', 'value' => 'bottom']], 'buttonBarOptions' => ['size' => 'small'], 'condition' => ['path' => 'design.layout.advanced.flex_direction', 'operand' => 'is not set', 'value' => '']],
        true,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\spacing_padding_all",
      "Padding",
      "padding",
       ['type' => 'popout']
     ), c(
        "content_width",
        "Content Width",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "typography",
        "Typography",
        [getPresetSection(
      "EssentialElements\\typography_with_effects_and_align",
      "Title",
      "title",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography_with_effects_and_align",
      "Text",
      "text",
       ['type' => 'popout']
     )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\AtomV1ButtonDesign",
      "Button",
      "button",
       ['type' => 'popout']
     ), c(
        "spacing",
        "Spacing",
        [c(
        "after_title",
        "After Title",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
      ), c(
        "after_text",
        "After Text",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\spacing_margin_y",
      "Container",
      "container",
       ['type' => 'popout']
     )],
        ['type' => 'section'],
        false,
        false,
        [],
      )];
    }

    static function contentControls()
    {
        return [c(
        "content",
        "Content",
        [c(
        "slides",
        "Slides",
        [c(
        "background",
        "Background",
        [c(
        "image",
        "Image",
        [],
        ['type' => 'wpmedia', 'layout' => 'vertical', 'mediaOptions' => ['acceptedFileTypes' => ['0' => 'image'], 'multiple' => false]],
        false,
        false,
        [],
      ), c(
        "lazy_load",
        "Lazy Load",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "size",
        "Size",
        [],
        ['type' => 'media_size_dropdown', 'layout' => 'vertical', 'mediaSizeOptions' => ['imagePropertyPath' => 'content.content.slides[].background.image'], 'condition' => ['path' => '%%CURRENTPATH%%.image', 'operand' => 'is set', 'value' => 'image']],
        false,
        false,
        [],
      ), c(
        "alt",
        "Alt",
        [],
        ['type' => 'text', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "overlay",
        "Overlay",
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        false,
        [],
      ), c(
        "color",
        "Color",
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
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
        [],
        ['type' => 'text', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "text",
        "Text",
        [],
        ['type' => 'richtext', 'layout' => 'vertical', 'textOptions' => ['multiline' => true]],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\AtomV1ButtonContent",
      "Button",
      "button",
       ['type' => 'popout']
     )],
        ['type' => 'repeater', 'layout' => 'vertical', 'repeaterOptions' => ['titleTemplate' => '{title}', 'defaultTitle' => 'Slide', 'buttonName' => 'Add Slide']],
        false,
        false,
        [],
      ), c(
        "title_html_tag",
        "Title HTML Tag",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => ['0' => ['value' => 'h2', 'text' => 'H2'], '1' => ['text' => 'H3', 'value' => 'h3'], '2' => ['text' => 'H4', 'value' => 'h4'], '3' => ['text' => 'H5', 'value' => 'h5'], '4' => ['text' => 'H6', 'value' => 'h6']]],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      )];
    }

    static function settingsControls()
    {
        return [];
    }

    static function dependencies()
    {
        return ['0' =>  ['scripts' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/swiper@8/swiper-bundle.min.js','%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/breakdance-swiper/breakdance-swiper.js'],'styles' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/swiper@8/swiper-bundle.min.css','%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/swiper@8/breakdance-swiper-preset-defaults.css'],'inlineScripts' => ['window.BreakdanceSwiper().update({
  id: \'%%ID%%\',
  selector:\'%%SELECTOR%%\',
  settings:{{ design.slider.settings|json_encode }},
  paginationSettings:{{ design.slider.pagination|json_encode }},
});'],],];
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

'onPropertyChange' => [['script' => 'window.BreakdanceSwiper().update({
  id: \'%%ID%%\',
  selector:\'%%SELECTOR%%\',
  settings:{{ design.slider.settings|json_encode }},
  paginationSettings:{{ design.slider.pagination|json_encode }},
});',
],],

'onMountedElement' => [['script' => 'window.BreakdanceSwiper().update({
  id: \'%%ID%%\',
  selector:\'%%SELECTOR%%\',
  settings:{{ design.slider.settings|json_encode }},
  paginationSettings:{{ design.slider.pagination|json_encode }},
});',
],],

'onBeforeDeletingElement' => [['script' => 'window.BreakdanceSwiper().destroy(
  \'%%ID%%\'
);',
],],];
    }

    static function nestingRule()
    {
        return ["type" => "final",   ];
    }

    static function spacingBars()
    {
        return ['0' => ['location' => 'outside-top', 'cssProperty' => 'margin-top', 'affectedPropertyPath' => 'design.spacing.container.margin_top.%%BREAKPOINT%%'], '1' => ['location' => 'outside-bottom', 'cssProperty' => 'margin-bottom', 'affectedPropertyPath' => 'design.spacing.container.margin_bottom.%%BREAKPOINT%%']];
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
        return 900;
    }

    static function dynamicPropertyPaths()
    {
        return ['0' => ['accepts' => 'image_url', 'path' => 'content.content.slides[].background.image'], '1' => ['accepts' => 'string', 'path' => 'content.content.slides[].title'], '2' => ['accepts' => 'string', 'path' => 'content.content.slides[].text']];
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
        return ['design.button.custom.size.full_width_at', 'design.button.style'];
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return false;
    }
}
