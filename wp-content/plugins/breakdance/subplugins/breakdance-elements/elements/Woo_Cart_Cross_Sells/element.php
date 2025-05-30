<?php

namespace EssentialElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "EssentialElements\\WooCartCrossSells",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class WooCartCrossSells extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return 'Grid2Icon';
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
        return 'Cart Cross Sells';
    }

    static function className()
    {
        return 'bde-cart-cross-sells';
    }

    static function category()
    {
        return 'woocommerce';
    }

    static function badge()
    {
        return ['backgroundColor' => 'var(--brandWooCommerceBackground)', 'textColor' => 'var(--brandWooCommerce)', 'label' => 'Woo'];
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
        return ['design' => ['cross_sells' => ['layout' => ['layout' => 'slider', 'slider' => ['settings' => ['advanced' => ['between_slides' => ['number' => 30, 'unit' => 'px', 'style' => '30px'], 'slides_per_view' => 3]]]]], 'spacing' => null]];
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
        return [getPresetSection(
      "EssentialElements\\woo-cart-cross-sells-design",
      "Cross Sells",
      "cross_sells",
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
        return [];
    }

    static function settingsControls()
    {
        return [];
    }

    static function dependencies()
    {
        return ['0' =>  ['scripts' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/swiper@8/swiper-bundle.min.js','%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/breakdance-swiper/breakdance-swiper.js'],'styles' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/swiper@8/swiper-bundle.min.css','%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/swiper@8/breakdance-swiper-preset-defaults.css'],'builderCondition' => 'return true;','frontendCondition' => 'return \'{{ design.cross_sells.layout.layout }}\' == \'slider\';','title' => 'Slider',],'1' =>  ['inlineScripts' => ['window.BreakdanceSwiper().update({
  id: \'%%ID%%\',
  selector:\'%%SELECTOR%%\',
  isBuilder: false,
  extras: {
    wrapperClass: \'products\',
    slideClass: \'product\',
    el: \'%%SELECTOR%% .cross-sells\'
  },
  settings: {{ design.cross_sells.layout.slider.settings|json_encode }},
  paginationSettings:{{ design.cross_sells.layout.slider.pagination|json_encode }}
});'],'builderCondition' => 'return false;','frontendCondition' => 'return \'{{ design.cross_sells.layout.layout }}\' == \'slider\';','title' => 'Frontend Slider Init',],];
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

'onMountedElement' => [['script' => 'if (\'{{ design.cross_sells.layout.layout }}\' === \'slider\') {
  window.BreakdanceSwiper().update({
    id: \'%%ID%%\',
    selector:\'%%SELECTOR%%\',
    isBuilder: true,
    extras: {
      wrapperClass: \'products\',
      slideClass: \'product\',
      el: \'%%SELECTOR%% .cross-sells\'
    },
    settings: {{ design.cross_sells.layout.slider.settings|json_encode }},
    paginationSettings:{{ design.cross_sells.layout.slider.pagination|json_encode }}
  });
}',
],],

'onPropertyChange' => [['script' => 'if (\'{{ design.cross_sells.layout.layout }}\' === \'slider\') {
  window.BreakdanceSwiper().update({
    id: \'%%ID%%\',
    selector:\'%%SELECTOR%%\',
    isBuilder: true,
    extras: {
      wrapperClass: \'products\',
      slideClass: \'product\',
      el: \'%%SELECTOR%% .cross-sells\'
    },
    settings: {{ design.cross_sells.layout.slider.settings|json_encode }},
    paginationSettings:{{ design.cross_sells.layout.slider.pagination|json_encode }}
  });
} else {
  window.BreakdanceSwiper().destroy(\'%%ID%%\');
}',
],],

'onBeforeDeletingElement' => [['script' => 'if (\'{{ design.cross_sells.layout.layout }}\' === \'slider\') {
  window.BreakdanceSwiper().destroy(\'%%ID%%\');
}',
],],];
    }

    static function nestingRule()
    {
        return ["type" => "final",   ];
    }

    static function spacingBars()
    {
        return ['0' => ['cssProperty' => 'margin-top', 'location' => 'outside-top', 'affectedPropertyPath' => 'design.spacing.margin_top.%%BREAKPOINT%%'], '1' => ['affectedPropertyPath' => 'design.spacing.margin_bottom.%%BREAKPOINT%%', 'cssProperty' => 'margin-bottom', 'location' => 'outside-bottom']];
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
        return 93;
    }

    static function dynamicPropertyPaths()
    {
        return false;
    }

    static function additionalClasses()
    {
        return [['name' => 'breakdance-woocommerce', 'template' => 'yes']];
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
        return ['content'];
    }
}
