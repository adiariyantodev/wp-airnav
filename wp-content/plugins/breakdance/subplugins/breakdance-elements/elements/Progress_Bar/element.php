<?php

namespace EssentialElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "EssentialElements\\ProgressBar",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class ProgressBar extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return '<svg aria-hidden="true" focusable="false"   class="svg-inline--fa fa-signal-bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M576 0h-32c-17.67 0-32 14.33-32 32v448c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V32C608 14.33 593.7 0 576 0zM576 480h-32V32h32V480zM416 128h-32c-17.67 0-32 14.33-32 32v320c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V160C448 142.3 433.7 128 416 128zM416 480h-32V160h32V480zM256 256H224C206.3 256 192 270.3 192 288v192c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V288C288 270.3 273.7 256 256 256zM256 480H224V288h32V480zM96 384H64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-64C128 398.3 113.7 384 96 384zM96 480H64v-64h32V480z"></path></svg>';
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
        return 'Progress Bar';
    }

    static function className()
    {
        return 'bde-progress-bar';
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
        return ['content' => ['progress_bar' => ['title_text' => 'Construction Progress', 'progress' => 77, 'hide_percentage' => false]], 'design' => ['background_container' => null, 'container' => ['disable_stripes' => true, 'width' => ['breakpoint_base' => ['number' => 480, 'unit' => 'px', 'style' => '480px']], 'border_radius' => ['breakpoint_base' => ['number' => 100, 'unit' => 'px', 'style' => '100px']], 'background_color' => '#D4CDFD'], 'progress_bar' => ['horizontal_padding' => ['breakpoint_base' => ['number' => 20, 'unit' => 'px', 'style' => '20px']], 'vertical_padding' => ['breakpoint_base' => ['number' => 12, 'unit' => 'px', 'style' => '12px']], 'border_radius' => ['number' => 100, 'unit' => 'px', 'style' => '100px'], 'background_color' => ['points' => ['0' => ['left' => 0, 'red' => 139, 'green' => 38, 'blue' => 255, 'alpha' => 1], '1' => ['left' => 98.97435897435898, 'red' => 70, 'green' => 38, 'blue' => 255, 'alpha' => 1]], 'type' => 'linear', 'degree' => 264, 'svgValue' => '<linearGradient gradientTransform="matrix(-0.10452846326765336,-0.9945218953682734,0.9945218953682734,-0.10452846326765336,0,0)" id="%%GRADIENTID%%"><stop stop-opacity="1" stop-color="#8b26ff" offset="0"></stop><stop stop-opacity="1" stop-color="#4626ff" offset="0.9897435897435898"></stop></linearGradient>', 'value' => 'linear-gradient(264deg,rgba(139, 38, 255, 1) 0%,rgba(70, 38, 255, 1) 98.97435897435898%)'], 'disable_stripes' => true], 'typography' => ['title' => null, 'percent_counter' => null], 'animation' => ['animation_stripes' => false, 'animate_progress_on_scroll' => false], 'spacing' => ['after_title' => null]]];
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
        "progress_bar",
        "Progress Bar",
        [c(
        "background_color",
        "Background Color",
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        false,
        [],
      ), c(
        "disable_stripes",
        "Disable Stripes",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "border_radius",
        "Border Radius",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['0' => 'px', '1' => 'em', '2' => 'rem'], 'defaultType' => 'px'], 'rangeOptions' => ['step' => 1, 'min' => 0, 'max' => 50]],
        false,
        false,
        [],
      ), c(
        "horizontal_padding",
        "Horizontal Padding",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['0' => 'px'], 'defaultType' => 'px'], 'rangeOptions' => ['step' => 1, 'min' => 5, 'max' => 50]],
        true,
        false,
        [],
      ), c(
        "vertical_padding",
        "Vertical Padding",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['0' => 'px'], 'defaultType' => 'px'], 'rangeOptions' => ['step' => 1, 'min' => 5, 'max' => 50]],
        true,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "container",
        "Container",
        [c(
        "background_color",
        "Background Color",
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        false,
        [],
      ), c(
        "disable_stripes",
        "Disable Stripes",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "border_radius",
        "Border Radius",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['0' => 'px', '1' => 'em', '2' => 'rem', '3' => 'custom'], 'defaultType' => 'px'], 'rangeOptions' => ['step' => 1, 'min' => 0, 'max' => 50]],
        true,
        false,
        [],
      ), c(
        "width",
        "Width",
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
      "EssentialElements\\typography_with_effects",
      "Title",
      "title",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography_with_effects",
      "Percent Counter",
      "percent_counter",
       ['type' => 'popout']
     )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "animation",
        "Animation",
        [c(
        "animation_stripes",
        "Animation Stripes",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "animation_duration",
        "Animation Duration",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['0' => 'ms'], 'defaultType' => 'ms'], 'rangeOptions' => ['step' => 50, 'min' => 100, 'max' => 2000], 'condition' => ['path' => 'design.animation.animation_stripes', 'operand' => 'is set', 'value' => '']],
        false,
        false,
        [],
      ), c(
        "animate_progress_on_scroll",
        "Animate Progress On Scroll",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "animate_once",
        "Animate Once",
        [],
        ['type' => 'toggle', 'layout' => 'inline', 'condition' => ['path' => 'design.animation.animate_progress_on_scroll', 'operand' => 'is set', 'value' => '']],
        false,
        false,
        [],
      ), c(
        "transition_duration",
        "Transition Duration",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['0' => 'ms'], 'defaultType' => 'ms'], 'rangeOptions' => ['step' => 50, 'min' => 100, 'max' => 2000], 'condition' => ['path' => 'design.animation.animate_progress_on_scroll', 'operand' => 'is set', 'value' => '']],
        false,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "spacing",
        "Spacing",
        [getPresetSection(
      "EssentialElements\\spacing_margin_y",
      "Wrapper",
      "wrapper",
       ['type' => 'popout']
     ), c(
        "after_title",
        "After Title",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 120, 'step' => 1], 'unitOptions' => ['types' => ['0' => 'px'], 'defaultType' => 'px']],
        true,
        false,
        [],
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
        "progress_bar",
        "Progress Bar",
        [c(
        "progress",
        "Progress",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['step' => 1, 'min' => 1, 'max' => 100]],
        false,
        false,
        [],
      ), c(
        "title_text",
        "Title Text",
        [],
        ['type' => 'text', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "hide_percentage",
        "Hide Percentage",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
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
        return ['0' =>  ['inlineScripts' => ['ScrollOut({
  targets: \'%%SELECTOR%% .bde-progress-bar__progress-wrap\',
  once: {% if design.animation.animate_once %}true{% else %}false{% endif %}
});'],'scripts' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/scroll-out@2/scroll-out.min.js'],],];
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

'onPropertyChange' => [['script' => '

ScrollOut({
  targets: \'%%SELECTOR%% .bde-progress-bar__progress-wrap\',
  once: {% if design.animation.animate_once %}true{% else %}false{% endif %}
});',
],],

'onMountedElement' => [['script' => '

ScrollOut({
  targets: \'%%SELECTOR%% .bde-progress-bar__progress-wrap\',
  once: {% if design.animation.animate_once %}true{% else %}false{% endif %}
});',
],],];
    }

    static function nestingRule()
    {
        return ["type" => "final",   ];
    }

    static function spacingBars()
    {
        return ['0' => ['location' => 'outside-top', 'cssProperty' => 'margin-top', 'affectedPropertyPath' => 'design.spacing.wrapper.margin_top.%%BREAKPOINT%%'], '1' => ['location' => 'outside-bottom', 'cssProperty' => 'margin-bottom', 'affectedPropertyPath' => 'design.spacing.wrapper.margin_bottom.%%BREAKPOINT%%']];
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
        return 850;
    }

    static function dynamicPropertyPaths()
    {
        return ['0' => ['accepts' => 'string', 'path' => 'content.progress_bar.title_text']];
    }

    static function additionalClasses()
    {
        return false;
    }

    static function projectManagement()
    {
        return ['looksGood' => 'yes', 'optionsGood' => 'yes', 'optionsWork' => 'yes', 'dynamicBehaviorWorks' => 'sort of', 'notes' => 'animate once doesnt work'];
    }

    static function propertyPathsToWhitelistInFlatProps()
    {
        return false;
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return false;
    }
}
