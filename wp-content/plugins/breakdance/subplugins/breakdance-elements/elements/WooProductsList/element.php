<?php

namespace EssentialElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "EssentialElements\\Wooproductslist",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class Wooproductslist extends \Breakdance\Elements\Element
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
        return 'Products List';
    }

    static function className()
    {
        return 'bde-wooproductslist';
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
        return ['content' => ['content' => ['product_count_to_show' => 9, 'order_by' => 'date', 'order' => 'DESC']], 'design' => ['layout' => ['layout' => 'grid', 'slider' => ['settings' => ['advanced' => ['slides_per_view' => 4, 'between_slides' => ['number' => 30, 'unit' => 'px', 'style' => '30px'], 'one_per_view_at' => 'breakpoint_phone_landscape']]]]]];
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
        "elements",
        "Elements",
        [c(
        "image",
        "Image",
        [c(
        "include",
        "Include",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => ['0' => ['value' => 'enable', 'text' => 'Enable'], '1' => ['text' => 'Disable', 'value' => 'disable']], 'buttonBarOptions' => ['layout' => 'default', 'size' => 'small']],
        false,
        false,
        [],
      ), c(
        "space_after",
        "Space After",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
      ), c(
        "order",
        "Order",
        [],
        ['type' => 'number', 'layout' => 'inline'],
        true,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\borders",
      "Borders",
      "borders",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "title",
        "Title",
        [c(
        "include",
        "Include",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => ['0' => ['value' => 'enable', 'text' => 'Enable'], '1' => ['text' => 'Disable', 'value' => 'disable']], 'buttonBarOptions' => ['layout' => 'default', 'size' => 'small']],
        false,
        false,
        [],
      ), c(
        "space_after",
        "Space After",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
      ), c(
        "order",
        "Order",
        [],
        ['type' => 'number', 'layout' => 'inline'],
        true,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography_with_effects",
      "Typography",
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "price",
        "Price",
        [c(
        "include",
        "Include",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => ['0' => ['value' => 'enable', 'text' => 'Enable'], '1' => ['text' => 'Disable', 'value' => 'disable']], 'buttonBarOptions' => ['layout' => 'default', 'size' => 'small']],
        false,
        false,
        [],
      ), c(
        "space_after",
        "Space After",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
      ), c(
        "order",
        "Order",
        [],
        ['type' => 'number', 'layout' => 'inline'],
        true,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography_with_effects",
      "Old Price Typography",
      "old_price_typography",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography_with_effects",
      "Current Price Typography",
      "current_price_typography",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "rating",
        "Rating",
        [c(
        "include",
        "Include",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => ['0' => ['value' => 'enable', 'text' => 'Enable'], '1' => ['text' => 'Disable', 'value' => 'disable']], 'buttonBarOptions' => ['layout' => 'default', 'size' => 'small']],
        false,
        false,
        [],
      ), c(
        "space_after",
        "Space After",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
      ), c(
        "order",
        "Order",
        [],
        ['type' => 'number', 'layout' => 'inline'],
        true,
        false,
        [],
      ), c(
        "review_count",
        "Review Count",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography",
      "Count Typography",
      "count_typography",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "sale_badge",
        "Sale Badge",
        [c(
        "include",
        "Include",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => ['0' => ['value' => 'enable', 'text' => 'Enable'], '1' => ['text' => 'Disable', 'value' => 'disable']], 'buttonBarOptions' => ['layout' => 'default', 'size' => 'small']],
        false,
        false,
        [],
      ), c(
        "position",
        "Position",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => ['0' => ['value' => 'top-left', 'text' => 'Top Left'], '1' => ['text' => 'Top Right', 'value' => 'top-right']]],
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
      ), getPresetSection(
      "EssentialElements\\typography",
      "Typography",
      "typography",
       ['type' => 'popout']
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
        "nudge",
        "Nudge",
        [c(
        "x",
        "X",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => -48, 'max' => 48, 'step' => 1]],
        true,
        false,
        [],
      ), c(
        "y",
        "Y",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => -48, 'max' => 48, 'step' => 1]],
        true,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "excerpt",
        "Excerpt",
        [c(
        "include",
        "Include",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => ['0' => ['value' => 'enable', 'text' => 'Enable'], '1' => ['text' => 'Disable', 'value' => 'disable']], 'buttonBarOptions' => ['layout' => 'default', 'size' => 'small']],
        false,
        false,
        [],
      ), c(
        "space_after",
        "Space After",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
      ), c(
        "order",
        "Order",
        [],
        ['type' => 'number', 'layout' => 'inline'],
        true,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography_with_effects",
      "Typography",
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "categories",
        "Categories",
        [c(
        "include",
        "Include",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => ['0' => ['value' => 'enable', 'text' => 'Enable'], '1' => ['text' => 'Disable', 'value' => 'disable']], 'buttonBarOptions' => ['layout' => 'default', 'size' => 'small']],
        false,
        false,
        [],
      ), c(
        "space_after",
        "Space After",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
      ), c(
        "order",
        "Order",
        [],
        ['type' => 'number', 'layout' => 'inline'],
        true,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography_with_effects",
      "Typography",
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "quantity_input",
        "Quantity Input",
        [c(
        "include",
        "Include",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => ['0' => ['value' => 'enable', 'text' => 'Enable'], '1' => ['text' => 'Disable', 'value' => 'disable']], 'buttonBarOptions' => ['layout' => 'default', 'size' => 'small']],
        false,
        false,
        [],
      ), c(
        "space_after",
        "Space After",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "button",
        "Button",
        [c(
        "include",
        "Include",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => ['0' => ['value' => 'enable', 'text' => 'Enable'], '1' => ['text' => 'Disable', 'value' => 'disable']], 'buttonBarOptions' => ['layout' => 'default', 'size' => 'small']],
        false,
        false,
        [],
      ), c(
        "space_after",
        "Space After",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'condition' => ['path' => '%%CURRENTPATH%%.include', 'operand' => 'equals', 'value' => 'enable']],
        true,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\AtomV1CustomButtonDesign",
      "Styles",
      "styles",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "layout",
        "Layout",
        [c(
        "layout",
        "Layout",
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => ['0' => ['value' => 'grid', 'text' => 'Grid'], '1' => ['text' => 'Slider', 'value' => 'slider']], 'hideForElements' => ['0' => 'EssentialElements\Wooshoppage']],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\AtomV1SwiperSettings",
      "Slider",
      "slider",
       ['condition' => ['0' => ['0' => ['path' => '%%CURRENTPATH%%.layout', 'operand' => 'equals', 'value' => 'slider']]], 'type' => 'popout']
     ), c(
        "products_per_row",
        "Products Per Row",
        [],
        ['type' => 'number', 'layout' => 'inline', 'condition' => ['0' => ['0' => ['path' => '%%CURRENTPATH%%.layout', 'operand' => 'not equals', 'value' => 'slider']]]],
        true,
        false,
        [],
      ), c(
        "between_products",
        "Between Products",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'condition' => ['0' => ['0' => ['path' => '%%CURRENTPATH%%.layout', 'operand' => 'not equals', 'value' => 'slider']]]],
        true,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "product_wrapper",
        "Product Wrapper",
        [c(
        "align_content",
        "Align Content",
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => ['0' => ['value' => 'start', 'text' => 'Left', 'icon' => 'AlignLeftIcon'], '1' => ['value' => 'center', 'text' => 'Center', 'icon' => 'AlignCenterIcon'], '2' => ['icon' => 'AlignRightIcon', 'text' => 'Right', 'value' => 'end']]],
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
      "EssentialElements\\spacing_margin_y",
      "Spacing",
      "spacing",
       ['type' => 'popout']
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
        "show_products",
        "Show Products",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => ['0' => ['value' => 'all', 'text' => 'All'], '1' => ['text' => 'Featured', 'value' => 'featured'], '2' => ['text' => 'On sale', 'value' => 'sale'], '3' => ['text' => 'Manually', 'value' => 'manually'], '4' => ['text' => 'Query', 'value' => 'query']], 'buttonBarOptions' => ['size' => 'small', 'layout' => 'multiline']],
        false,
        false,
        [],
      ), c(
        "products",
        "Products",
        [],
        ['type' => 'post_chooser', 'layout' => 'vertical', 'condition' => ['path' => 'content.content.show_products', 'operand' => 'equals', 'value' => 'manually'], 'postChooserOptions' => ['multiple' => true, 'showThumbnails' => true, 'postType' => 'product']],
        false,
        false,
        [],
      ), c(
        "query",
        "Query",
        [],
        ['type' => 'wp_query', 'layout' => 'vertical', 'queryOptions' => ['postTypes' => ['0' => 'product']], 'condition' => ['path' => 'content.content.show_products', 'operand' => 'equals', 'value' => 'query']],
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
  isBuilder: true,
  extras: {
    wrapperClass: \'products\',
    slideClass: \'product\',
    el: \'%%SELECTOR%% .woocommerce\'
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
      el: \'%%SELECTOR%% .woocommerce\'
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
      el: \'%%SELECTOR%% .woocommerce\'
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
        return 0;
    }

    static function dynamicPropertyPaths()
    {
        return [];
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
        return ['content', 'design.elements.image.include', 'design.elements.title.include', 'design.elements.price.include', 'design.elements.rating.include', 'design.elements.sale_badge.include', 'design.elements.excerpt.include', 'design.elements.categories.include', 'design.elements.quantity_input.include', 'design.elements.button.include'];
    }
}
