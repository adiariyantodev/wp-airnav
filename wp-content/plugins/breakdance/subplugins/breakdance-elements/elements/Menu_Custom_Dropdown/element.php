<?php

namespace EssentialElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "EssentialElements\\MenuCustomDropdown",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class MenuCustomDropdown extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return '<svg aria-hidden="true" focusable="false"   class="svg-inline--fa fa-square-caret-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M342.6 246.6C362.6 226.5 348.5 192 320 192H128C99.64 192 85.28 226.5 105.4 246.6l95.95 96c12.49 12.5 32.86 12.5 45.35 0L342.6 246.6zM128 224h192l-96 96L128 224zM448 416V96c0-35.35-28.65-64-64-64H64C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h320C419.3 480 448 451.3 448 416zM64 448c-17.64 0-32-14.36-32-32V96c0-17.64 14.36-32 32-32h320c17.64 0 32 14.36 32 32v320c0 17.64-14.36 32-32 32H64z"></path></svg>';
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
        return 'Menu Custom Dropdown';
    }

    static function className()
    {
        return 'bde-menu-custom-dropdown';
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
        return ['content' => ['content' => ['text' => 'Custom Dropdown', 'custom_width' => 500]]];
    }

    static function defaultChildren()
    {
        return [['slug' => 'EssentialElements\Heading', 'defaultProperties' => ['content' => ['content' => ['text' => 'This is a heading.']]]], ['slug' => 'EssentialElements\Image', 'defaultProperties' => ['content' => ['content' => ['size' => 'full', 'caption_type' => 'none', 'caption_position' => 'below-image', 'link_type' => 'none', 'loading' => 'lazy']]]]];
    }

    static function cssTemplate()
    {
        $template = file_get_contents(__DIR__ . '/css.twig');
        return $template;
    }

    static function designControls()
    {
        return [c(
        "wrapper",
            "Wrapper",
            [c(
                "background",
                "Background",
                [],
                ['type' => 'color', 'layout' => 'inline'],
                false,
                false,
                [],
            ), getPresetSection(
                "EssentialElements\\spacing_padding_all",
                "Padding",
                "padding",
                ['type' => 'popout']
            ), getPresetSection(
                "EssentialElements\\borders",
                "Borders",
                "borders",
                ['type' => 'popout']
            ), c(
                "width",
                "Width",
                [],
                ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['step' => 50, 'min' => 100, 'max' => 1140], 'condition' => ['path' => 'design.desktop_menu.dropdowns.wrapper.placement', 'operand' => 'not equals', 'value' => 'full-width']],
                false,
                false,
                [],
            )],
            ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
            false,
            false,
            [],
      ), getPresetSection(
      "EssentialElements\\simpleLayout",
      "Layout",
      "layout",
       ['type' => 'popout']
     )];
    }

    static function contentControls()
    {
        return [c(
        "content",
        "Content",
        [c(
        "text",
        "Text",
        [],
        ['type' => 'text', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "link",
        "Link",
        [],
        ['type' => 'url', 'layout' => 'vertical'],
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
        return false;
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

'onMountedElement' => [['script' => 'const element = document.querySelector(\'[data-node-id="%%ID%%"]\');
const menuElement = element.closest(\'.bde-menu\');
const menuId = menuElement ? menuElement.dataset.nodeId : null;

if (
  menuId &&
  window.breakdanceMenus &&
  window.breakdanceMenus[menuId]
) {
  window.breakdanceMenus[menuId].refresh();
}',
],],

'onPropertyChange' => [['script' => 'const element = document.querySelector(\'[data-node-id="%%ID%%"]\');
const menuElement = element.closest(\'.bde-menu\');
const menuId = menuElement ? menuElement.dataset.nodeId : null;

if (
  menuId &&
  window.breakdanceMenus &&
  window.breakdanceMenus[menuId]
) {
  window.breakdanceMenus[menuId].refresh();
}',
],],];
    }

    static function nestingRule()
    {
        return ["type" => "container", "restrictedToBeADirectChildOf" => ['EssentialElements\MenuBuilder'],  ];
    }

    static function spacingBars()
    {
        return [];
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
        return 0;
    }

    static function dynamicPropertyPaths()
    {
        return ['0' => ['accepts' => 'string', 'path' => 'content.content.text']];
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
        return ['design.layout.horizontal.vertical_at'];
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return false;
    }
}
