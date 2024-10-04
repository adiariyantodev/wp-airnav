<?php

use Breakdance\Lib\Vendor\Twig\Environment;
use Breakdance\Lib\Vendor\Twig\Error\LoaderError;
use Breakdance\Lib\Vendor\Twig\Error\RuntimeError;
use Breakdance\Lib\Vendor\Twig\Extension\SandboxExtension;
use Breakdance\Lib\Vendor\Twig\Markup;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedTagError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use Breakdance\Lib\Vendor\Twig\Source;
use Breakdance\Lib\Vendor\Twig\Template;

/* e7a7fd09420d3e6debfae263434d27db9f428d75 */
class __TwigTemplate_50497f15c9db2238e8dff7a585b5d729 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
          ";
        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "e7a7fd09420d3e6debfae263434d27db9f428d75", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        $context["layout"] = twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 4);
        // line 5
        $context["type"] = ((twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "type", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "type", [], "any", false, false, false, 5), "grid")) : ("grid"));
        // line 6
        echo "
";
        // line 7
        $context["columns"] = twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "columns", [], "any", false, false, false, 7);
        // line 8
        $context["gap"] = twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "gap", [], "any", false, false, false, 8);
        // line 9
        echo "
";
        // line 10
        $context["ratio"] = twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "aspect_ratio", [], "any", false, false, false, 10);
        // line 11
        $context["ratioSlider"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "slider_images", [], "any", false, false, false, 11), "aspect_ratio", [], "any", false, false, false, 11);
        // line 12
        $context["rowHeight"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "row_height", [], "any", false, false, false, 12), "style", [], "any", false, false, false, 12);
        // line 13
        $context["customHeight"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "custom_height", [], "any", false, false, false, 13), "style", [], "any", false, false, false, 13);
        // line 14
        $context["showCaptions"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "captions", [], "any", false, false, false, 14), "show_captions", [], "any", false, false, false, 14) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "captions", [], "any", false, false, false, 14), "show_captions", [], "any", false, false, false, 14) != "never"));
        // line 15
        echo "
%%SELECTOR%% {
  --width: ";
        // line 17
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 17), "width", [], "any", false, false, false, 17), "style", [], "any", false, false, false, 17);
        echo ";

  /* Columns */
  --columns: ";
        // line 20
        echo (((($context["columns"] ?? null) > 0)) ? (($context["columns"] ?? null)) : (""));
        echo ";
  --column-gap: ";
        // line 21
        echo twig_get_attribute($this->env, $this->source, ($context["gap"] ?? null), "style", [], "any", false, false, false, 21);
        echo ";

  --ratio: ";
        // line 23
        echo ($context["ratio"] ?? null);
        echo ";
  --ratioSlider: ";
        // line 24
        echo ($context["ratioSlider"] ?? null);
        echo ";
  --ratio-custom-height: ";
        // line 25
        echo ($context["customHeight"] ?? null);
        echo ";
  --justified-row-height: ";
        // line 26
        echo ($context["rowHeight"] ?? null);
        echo ";

  /* Hover & Caption Effect */
  --hover-duration: ";
        // line 29
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "images", [], "any", false, false, false, 29), "duration", [], "any", false, false, false, 29), "style", [], "any", false, false, false, 29);
        echo ";
  --caption-duration: ";
        // line 30
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "captions", [], "any", false, false, false, 30), "duration", [], "any", false, false, false, 30), "style", [], "any", false, false, false, 30);
        echo ";
  --opacity: ";
        // line 31
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "images", [], "any", false, false, false, 31), "opacity", [], "any", false, false, false, 31);
        echo ";
  
  ";
        // line 33
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 33), "container", [], "any", false, false, false, 33)], 33, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .ee-gallery-item {
  box-shadow: ";
        // line 37
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "images", [], "any", false, false, false, 37), "shadow", [], "any", false, false, false, 37), "style", [], "any", false, false, false, 37);
        echo ";
  
  ";
        // line 39
        if ((($context["breakpoint"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "vertical_at", [], "any", false, false, false, 39))) {
            // line 40
            echo "    width: 100%!important;
  ";
        }
        // line 42
        echo "
  ";
        // line 43
        if (((($context["type"] ?? null) == "grid") && (($context["ratio"] ?? null) == "custom"))) {
            // line 44
            echo "    height: var(--ratio-custom-height);
  ";
        }
        // line 46
        echo "
  ";
        // line 47
        echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "images", [], "any", false, false, false, 47), "borders", [], "any", false, false, false, 47)], 47, $context, $this->getSourceContext());
        echo "
  ";
        // line 48
        echo twig_call_macro($macros["macros"], "macro_backgroundColor", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "images", [], "any", false, false, false, 48), "background", [], "any", false, false, false, 48)], 48, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .ee-gallery-item:hover {
  --opacity: ";
        // line 52
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "images", [], "any", false, false, false, 52), "opacity_hover", [], "any", false, false, false, 52);
        echo ";
  box-shadow: ";
        // line 53
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "images", [], "any", false, false, false, 53), "shadow_hover", [], "any", false, false, false, 53), "style", [], "any", false, false, false, 53);
        echo ";
  ";
        // line 54
        echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "images", [], "any", false, false, false, 54), "borders_hover", [], "any", false, false, false, 54)], 54, $context, $this->getSourceContext());
        echo "
  ";
        // line 55
        echo twig_call_macro($macros["macros"], "macro_backgroundColor", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "images", [], "any", false, false, false, 55), "background_hover", [], "any", false, false, false, 55)], 55, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .ee-gallery-item-figure img,
%%SELECTOR%% .ee-gallery-item-figure video,
%%SELECTOR%% .ee-gallery-item-figure iframe {
  ";
        // line 61
        echo twig_call_macro($macros["macros"], "macro_filters", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "images", [], "any", false, false, false, 61), "filters", [], "any", false, false, false, 61)], 61, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .ee-gallery-item:hover .ee-gallery-item-figure img,
%%SELECTOR%% .ee-gallery-item:hover .ee-gallery-item-figure video,
%%SELECTOR%% .ee-gallery-item:hover .ee-gallery-item-figure iframe {
  ";
        // line 67
        echo twig_call_macro($macros["macros"], "macro_filtersHover", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "images", [], "any", false, false, false, 67), "filters", [], "any", false, false, false, 67)], 67, $context, $this->getSourceContext());
        echo "
}

/* Gallery Caption */
%%SELECTOR%% .ee-gallery-item-caption {
  ";
        // line 72
        echo twig_call_macro($macros["macros"], "macro_backgroundColor", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "captions", [], "any", false, false, false, 72), "background", [], "any", false, false, false, 72)], 72, $context, $this->getSourceContext());
        echo "
  ";
        // line 73
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "captions", [], "any", false, false, false, 73), "typography", [], "any", false, false, false, 73), ($context["globalSettings"] ?? null)], 73, $context, $this->getSourceContext());
        echo "
  ";
        // line 74
        echo twig_call_macro($macros["macros"], "macro_spacing_padding_all", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "captions", [], "any", false, false, false, 74), "padding", [], "any", false, false, false, 74)], 74, $context, $this->getSourceContext());
        echo "

  ";
        // line 76
        if ((($context["breakpoint"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "captions", [], "any", false, false, false, 76), "hide_below", [], "any", false, false, false, 76))) {
            // line 77
            echo "  opacity: 0!important;
  pointer-events: none;
  ";
        }
        // line 80
        echo "}

/* Slider Images */

%%SELECTOR%% .ee-gallery--slider .swiper-wrapper {
  align-items: ";
        // line 85
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 85), "slider_images", [], "any", false, false, false, 85), "vertical_align", [], "any", false, false, false, 85);
        echo ";
}

%%SELECTOR%% .ee-gallery--slider.ee-gallery--custom .ee-gallery-item-figure img,
%%SELECTOR%% .ee-gallery--slider.ee-gallery--custom .ee-gallery-item-figure video,
%%SELECTOR%% .ee-gallery--slider.ee-gallery--custom .ee-gallery-item-figure iframe {
    height: ";
        // line 91
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 91), "slider_images", [], "any", false, false, false, 91), "height", [], "any", false, false, false, 91), "style", [], "any", false, false, false, 91);
        echo ";
}

%%SELECTOR%% .ee-gallery--slider.ee-gallery--custom .swiper-slide,
%%SELECTOR%% .ee-gallery--slider.ee-gallery--custom .ee-gallery-swiper {
  \theight: ";
        // line 96
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 96), "slider_images", [], "any", false, false, false, 96), "height", [], "any", false, false, false, 96), "style", [], "any", false, false, false, 96);
        echo ";
}

%%SELECTOR%% .ee-gallery--slider .ee-gallery-swiper {
  ";
        // line 100
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 100), "slider_images", [], "any", false, false, false, 100), "width", [], "any", false, false, false, 100)) {
            // line 101
            echo "    width: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 101), "slider_images", [], "any", false, false, false, 101), "width", [], "any", false, false, false, 101), "style", [], "any", false, false, false, 101);
            echo ";
  \tmargin-left: auto;
  \tmargin-right: auto;
  \tposition: initial;
    ";
            // line 105
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 105), "slider", [], "any", false, false, false, 105), "arrows", [], "any", false, false, false, 105), "overlay", [], "any", false, false, false, 105)) {
                // line 106
                echo "      position: relative;
    ";
            }
            // line 108
            echo "  ";
        }
        // line 109
        echo "}

";
        // line 112
        echo "%%SELECTOR%% .bde-tabs__tabslist-container {
  margin-bottom: ";
        // line 113
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 113), "after_filter_bar", [], "any", false, false, false, 113), "style", [], "any", false, false, false, 113);
        echo ";
}

";
        // line 116
        echo twig_call_macro($macros["macros"], "macro_atomV1TabsCss", ["%%SELECTOR%%", twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "filter_bar", [], "any", false, false, false, 116), ($context["breakpoint"] ?? null), ($context["globalSettings"] ?? null)], 116, $context, $this->getSourceContext());
        echo "
";
        // line 117
        echo twig_call_macro($macros["macros"], "macro_atomV1LightboxCss", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "lightbox", [], "any", false, false, false, 117)], 117, $context, $this->getSourceContext());
        echo "
";
        // line 118
        echo twig_call_macro($macros["macros"], "macro_AtomV1SwiperCss", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 118), "slider", [], "any", false, false, false, 118), "%%SELECTOR%%", ($context["globalSettings"] ?? null)], 118, $context, $this->getSourceContext());
        echo "

";
        // line 121
        echo "

    %%SELECTOR%% {
        ";
        // line 124
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 125
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 125), "wrapper", [], "any", false, false, false, 125), "background", [], "any", false, false, false, 125), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 126
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 126), "wrapper", [], "any", false, false, false, 126), "layout", [], "any", false, false, false, 126), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 127
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 127), "wrapper", [], "any", false, false, false, 127), "size", [], "any", false, false, false, 127), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 128
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 128), "wrapper", [], "any", false, false, false, 128), "typography", [], "any", false, false, false, 128),         // line 129
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 130
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 130), "wrapper", [], "any", false, false, false, 130), "spacing", [], "any", false, false, false, 130), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 131
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 131), "wrapper", [], "any", false, false, false, 131), "borders", [], "any", false, false, false, 131), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 132
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 132), "wrapper", [], "any", false, false, false, 132), "effects", [], "any", false, false, false, 132)], 124, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 136
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 137
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 137), "wrapper_hover", [], "any", false, false, false, 137), "background", [], "any", false, false, false, 137), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 138
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 138), "wrapper_hover", [], "any", false, false, false, 138), "layout", [], "any", false, false, false, 138), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 139
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 139), "wrapper_hover", [], "any", false, false, false, 139), "size", [], "any", false, false, false, 139), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 140
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 140), "wrapper_hover", [], "any", false, false, false, 140), "typography", [], "any", false, false, false, 140),         // line 141
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 142
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 142), "wrapper_hover", [], "any", false, false, false, 142), "spacing", [], "any", false, false, false, 142), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 143
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 143), "wrapper_hover", [], "any", false, false, false, 143), "borders", [], "any", false, false, false, 143), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 144
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 144), "wrapper_hover", [], "any", false, false, false, 144), "effects", [], "any", false, false, false, 144)], 136, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 148
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 148), "css", [], "any", false, false, false, 148);
        echo "


";
        // line 151
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 151), "hide", [], "any", false, false, false, 151)))) {
            // line 152
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 153
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 153), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 153), "hide", [], "any", false, false, false, 153))) {
                    // line 154
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 156
                    if (($context["isBuilder"] ?? null)) {
                        // line 157
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 160
                        echo "                        display: none;
                    ";
                    }
                    // line 162
                    echo "                }
            }
        ";
                }
                // line 165
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 167
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "e7a7fd09420d3e6debfae263434d27db9f428d75";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 167,  367 => 165,  362 => 162,  358 => 160,  353 => 157,  351 => 156,  345 => 154,  342 => 153,  337 => 152,  335 => 151,  329 => 148,  322 => 144,  321 => 143,  320 => 142,  319 => 141,  318 => 140,  317 => 139,  316 => 138,  315 => 137,  314 => 136,  307 => 132,  306 => 131,  305 => 130,  304 => 129,  303 => 128,  302 => 127,  301 => 126,  300 => 125,  299 => 124,  294 => 121,  289 => 118,  285 => 117,  281 => 116,  275 => 113,  272 => 112,  268 => 109,  265 => 108,  261 => 106,  259 => 105,  251 => 101,  249 => 100,  242 => 96,  234 => 91,  225 => 85,  218 => 80,  213 => 77,  211 => 76,  206 => 74,  202 => 73,  198 => 72,  190 => 67,  181 => 61,  172 => 55,  168 => 54,  164 => 53,  160 => 52,  153 => 48,  149 => 47,  146 => 46,  142 => 44,  140 => 43,  137 => 42,  133 => 40,  131 => 39,  126 => 37,  119 => 33,  114 => 31,  110 => 30,  106 => 29,  100 => 26,  96 => 25,  92 => 24,  88 => 23,  83 => 21,  79 => 20,  73 => 17,  69 => 15,  67 => 14,  65 => 13,  63 => 12,  61 => 11,  59 => 10,  56 => 9,  54 => 8,  52 => 7,  49 => 6,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "e7a7fd09420d3e6debfae263434d27db9f428d75", "");
    }
}
