<?php

namespace EssentialElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "EssentialElements\\SearchForm",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class SearchForm extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return 'SearchIcon';
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
        return 'Search Form';
    }

    static function className()
    {
        return 'bde-search-form';
    }

    static function category()
    {
        return 'site';
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
        return ['design' => ['form' => ['size' => null, 'classic_styles' => null, 'style' => 'full-screen', 'expand_styles' => null, 'full_screen_styles' => ['open_button' => ['background' => '#e7e5e4', 'background_hover' => '#d6d3d1']]]], 'content' => ['form' => ['placeholder' => 'Search']]];
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
        "form",
        "Form",
        [c(
        "style",
        "Style",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => ['0' => ['value' => 'classic', 'text' => 'Classic'], '1' => ['text' => 'Full Screen', 'value' => 'full-screen']]],
        false,
        false,
        [],
      ), c(
        "classic_styles",
        "Classic Styles",
        [c(
        "padding",
        "Padding",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 36, 'step' => 1]],
        true,
        false,
        [],
      ), c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        false,
        [],
      ), c(
        "placeholder",
        "Placeholder",
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
      "EssentialElements\\typography",
      "Typography",
      "typography",
       ['type' => 'popout']
     ), c(
        "focused",
        "Focused",
        [c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "border",
        "Border",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "shadow",
        "Shadow",
        [],
        ['type' => 'shadow', 'layout' => 'vertical'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "icon_button",
        "Icon Button",
        [c(
        "type",
        "Type",
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => ['0' => ['text' => 'Custom', 'value' => 'custom'], '1' => ['text' => 'Text', 'value' => 'text']], 'buttonBarOptions' => ['layout' => 'default', 'size' => 'small']],
        false,
        false,
        [],
      ), c(
        "icon",
        "Icon",
        [],
        ['type' => 'icon', 'layout' => 'vertical', 'condition' => ['path' => 'design.form.classic_styles.icon_button.type', 'operand' => 'equals', 'value' => 'custom']],
        false,
        false,
        [],
      ), c(
        "padding",
        "Padding",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 4, 'max' => 24, 'step' => 1], 'condition' => ['path' => 'design.form.classic_styles.icon_button.type', 'operand' => 'equals', 'value' => 'text']],
        false,
        false,
        [],
      ), c(
        "text",
        "Text",
        [],
        ['type' => 'text', 'layout' => 'vertical', 'condition' => ['path' => 'design.form.classic_styles.icon_button.type', 'operand' => 'equals', 'value' => 'text']],
        false,
        false,
        [],
      ), c(
        "position",
        "Position",
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => ['0' => ['text' => 'Left', 'value' => 'after'], '1' => ['text' => 'Right', 'value' => 'right']]],
        false,
        false,
        [],
      ), c(
        "size",
        "Size",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'condition' => ['path' => 'design.form.classic_styles.icon_button.type', 'operand' => 'not equals', 'value' => 'text']],
        true,
        false,
        [],
      ), c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        true,
        [],
      ), c(
        "color",
        "Color",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'sectionOptions' => ['type' => 'popout'], 'condition' => ['path' => 'design.form.style', 'operand' => 'equals', 'value' => 'classic']],
        false,
        false,
        [],
      ), c(
        "full_screen_styles",
        "Full Screen Styles",
        [c(
        "open_button",
        "Open Button",
        [c(
        "size",
        "Size",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\borders",
      "Borders",
      "borders",
       ['type' => 'popout']
     ), c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        true,
        [],
      ), c(
        "color",
        "Color",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "search_box",
        "Search Box",
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
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
      ), c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        false,
        [],
      ), c(
        "placeholder",
        "Placeholder",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography",
      "Typography",
      "typography",
       ['type' => 'popout']
     ), c(
        "icon",
        "Icon",
        [c(
        "hide",
        "Hide",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "position",
        "Position",
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => ['0' => ['text' => 'Left', 'value' => 'left'], '1' => ['text' => 'Right', 'value' => 'right']]],
        false,
        false,
        [],
      ), c(
        "color",
        "Color",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "size",
        "Size",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\borders",
      "Borders",
      "borders",
       ['type' => 'popout']
     ), c(
        "focused",
        "Focused",
        [c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "border",
        "Border",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "shadow",
        "Shadow",
        [],
        ['type' => 'shadow', 'layout' => 'vertical'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "padding",
        "Padding",
        [],
        ['type' => 'spacing_complex', 'layout' => 'vertical'],
        true,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "close_icon",
        "Close Icon",
        [c(
        "color",
        "Color",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "size",
        "Size",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'sectionOptions' => ['type' => 'popout'], 'condition' => ['path' => 'design.form.style', 'operand' => 'equals', 'value' => 'full-screen']],
        false,
        false,
        [],
      ), c(
        "width",
        "Width",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'condition' => ['path' => 'design.form.style', 'operand' => 'is none of', 'value' => ['0' => 'full-screen']]],
        true,
        false,
        [],
      ), c(
        "height",
        "Height",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 20, 'max' => 100, 'step' => 1]],
        true,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
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
        "form",
        "Form",
        [c(
        "placeholder",
        "Placeholder",
        [],
        ['type' => 'text', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "icon",
        "Icon",
        [],
        ['type' => 'icon', 'layout' => 'vertical'],
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
        return ['0' =>  ['scripts' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%elements/Search_Form/assets/search-form.js'],'title' => 'Breakdance Search Form',],'1' =>  ['inlineScripts' => ['new BreakdanceSearchForm(\'%%SELECTOR%%\', {});
'],'builderCondition' => 'return false;','title' => 'Frontend init',],];
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

'onMountedElement' => [['script' => '(function() {
if (!window.breakdanceSearchFormInstances) window.breakdanceSearchFormInstances = {};

if (window.breakdanceSearchFormInstances && window.breakdanceSearchFormInstances[%%ID%%]) {
  window.breakdanceSearchFormInstances[%%ID%%].destroy();
}

window.breakdanceSearchFormInstances[%%ID%%] = new BreakdanceSearchForm(\'%%SELECTOR%%\', {});
}());',
],],

'onPropertyChange' => [['script' => '(function() {
if (window.breakdanceSearchFormInstances && window.breakdanceSearchFormInstances[%%ID%%]) {
window.breakdanceSearchFormInstances[%%ID%%].destroy();
}

window.breakdanceSearchFormInstances[%%ID%%] = new BreakdanceSearchForm(\'%%SELECTOR%%\', {});
}());',
],],

'onBeforeDeletingElement' => [['script' => ' (function() {
if (window.breakdanceSearchFormInstances && window.breakdanceSearchFormInstances[%%ID%%]) {
  window.breakdanceSearchFormInstances[%%ID%%].destroy();
  delete window.breakdanceSearchFormInstances[%%ID%%];
}
}());',
],],

'onMovedElement' => [['script' => '(function() {
  if (!window.breakdanceSearchFormInstances) window.breakdanceSearchFormInstances = {};

  if (window.breakdanceSearchFormInstances && window.breakdanceSearchFormInstances[%%ID%%]) {
    window.breakdanceSearchFormInstances[%%ID%%].destroy();
  }

  window.breakdanceSearchFormInstances[%%ID%%] = new BreakdanceSearchForm(\'%%SELECTOR%%\', {});
}());',
],],];
    }

    static function nestingRule()
    {
        return ["type" => "final",   ];
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
        return 100;
    }

    static function dynamicPropertyPaths()
    {
        return ['0' => ['accepts' => 'string', 'path' => 'content.form.placeholder'], '1' => ['accepts' => 'image_url', 'path' => 'design.form.full_screen_styles.background.layers[].image']];
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
        return false;
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return false;
    }
}
