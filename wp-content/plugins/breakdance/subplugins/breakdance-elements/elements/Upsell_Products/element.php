<?php

namespace EssentialElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "EssentialElements\\UpsellProducts",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class UpsellProducts extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return 'TagsIcon';
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
        return 'Upsell Products';
    }

    static function className()
    {
        return 'bde-upsell-products';
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
        return ['design' => ['elements' => ['image' => ['include' => 'enable']]], 'content' => ['content' => ['product_count' => 4, 'order_by' => 'rand', 'order' => 'DESC']]];
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
        "container",
        "Container",
        [c(
        "size",
        "Size",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
      ), c(
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
     )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\wooProductsListElements",
      "Elements",
      "elements",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\wooProductsListLayout",
      "Layout",
      "layout",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\wooProductWrapperDesign",
      "Product Wrapper",
      "product_wrapper",
       ['type' => 'popout']
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
      ), getPresetSection(
      "EssentialElements\\typography_with_effects",
      "Typography",
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "spacing",
        "Spacing",
        [c(
        "below_title",
        "Below Title",
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
      ), c(
        "advanced",
        "Advanced",
        [getPresetSection(
      "EssentialElements\\WooGlobalStylerOverride",
      "Override Global Styles",
      "override_global_styles",
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
        "product",
        "Product",
        [],
        ['type' => 'post_chooser', 'layout' => 'vertical', 'postChooserOptions' => ['multiple' => false, 'showThumbnails' => false, 'postType' => 'product']],
        false,
        false,
        [],
      ), c(
        "product_count",
        "Product Count",
        [],
        ['type' => 'number', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "order_by",
        "Order By",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => ['0' => ['value' => 'date', 'text' => 'Date'], '1' => ['text' => 'Price', 'value' => 'price'], '2' => ['text' => 'Random', 'value' => 'rand']]],
        false,
        false,
        [],
      ), c(
        "order",
        "Order",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => ['0' => ['value' => 'DESC', 'text' => 'Descending'], '1' => ['text' => 'Ascending', 'value' => 'ASC']]],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical', 'sectionOptions' => ['type' => 'accordion']],
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
        return ['0' =>  ['scripts' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/swiper@8/swiper-bundle.min.js','%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/breakdance-swiper/breakdance-swiper.js'],'styles' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/swiper@8/swiper-bundle.min.css','%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/swiper@8/breakdance-swiper-preset-defaults.css'],'builderCondition' => 'return true;','frontendCondition' => 'return \'{{ design.layout.layout }}\' == \'slider\';','title' => 'Slider',],'1' =>  ['inlineScripts' => ['window.BreakdanceSwiper().update({
  id: \'%%ID%%\',
  selector:\'%%SELECTOR%%\',
  isBuilder: false,
  extras: {
    wrapperClass: \'products\',
    slideClass: \'product\',
    el: \'%%SELECTOR%% .up-sells\'
  },
  settings: {{ design.layout.slider.settings|json_encode }},
  paginationSettings:{{ design.layout.slider.pagination|json_encode }}
});'],'builderCondition' => 'return false;','frontendCondition' => 'return \'{{ design.layout.layout }}\' == \'slider\';','title' => 'Frontend Slider Init',],];
    }

    static function settings()
    {
        return ['requiredPlugins' => ['0' => 'WooCommerce']];
    }

    static function addPanelRules()
    {
        return false;
    }

    static public function actions()
    {
        return [

            'onMountedElement' => [['script' => 'if (\'{{ design.layout.layout }}\' === \'slider\') {
  window.BreakdanceSwiper().update({
    id: \'%%ID%%\',
    selector:\'%%SELECTOR%%\',
    isBuilder: true,
    extras: {
      wrapperClass: \'products\',
      slideClass: \'product\',
      el: \'%%SELECTOR%% .up-sells\'
    },
    settings: {{ design.layout.slider.settings|json_encode }},
    paginationSettings:{{ design.layout.slider.pagination|json_encode }}
  });
}',
            ],],

            'onPropertyChange' => [['script' => 'if (\'{{ design.layout.layout }}\' === \'slider\') {
  window.BreakdanceSwiper().update({
    id: \'%%ID%%\',
    selector:\'%%SELECTOR%%\',
    isBuilder: true,
    extras: {
      wrapperClass: \'products\',
      slideClass: \'product\',
      el: \'%%SELECTOR%% .up-sells\'
    },
    settings: {{ design.layout.slider.settings|json_encode }},
    paginationSettings:{{ design.layout.slider.pagination|json_encode }}
  });
} else {
  window.BreakdanceSwiper().destroy(\'%%ID%%\');
}',
            ],],

            'onBeforeDeletingElement' => [['script' => 'if (\'{{ design.layout.layout }}\' === \'slider\') {
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
        return 60;
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
        return ['content.content', 'design.elements.image.include', 'design.elements.title.include', 'design.elements.price.include', 'design.elements.rating.include', 'design.elements.sale_badge.include', 'design.elements.excerpt.include', 'design.elements.categories.include', 'design.elements.button.include'];
    }
}
