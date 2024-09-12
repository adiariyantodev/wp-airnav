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

/* f3e1d128fb287d165968f0e4f96aca3ebfe8947e */
class __TwigTemplate_7a05243eb13b6a0e63e5785a7004d4c2 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "f3e1d128fb287d165968f0e4f96aca3ebfe8947e", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 5
        echo "%%SELECTOR%% .section-container {
  ";
        // line 6
        echo twig_call_macro($macros["macros"], "macro_simpleLayout", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 6), ($context["breakpoint"] ?? null)], 6, $context, $this->getSourceContext());
        echo "
}

";
        // line 9
        echo twig_call_macro($macros["macros"], "macro_fancyBackgroundCss", ["%%SELECTOR%%", twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 9), ($context["breakpoint"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 9), "viewport", [], "any", false, false, false, 9), false, false], 9, $context, $this->getSourceContext());
        echo "

";
        // line 12
        echo "%%SELECTOR%% * {
  ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 13), "text", [], "any", false, false, false, 13)) {
            // line 14
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 14), "text", [], "any", false, false, false, 14);
            echo ";
  ";
        }
        // line 16
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 16), "brand", [], "any", false, false, false, 16)) {
            // line 17
            echo "    --bde-brand-primary-color: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 17), "brand", [], "any", false, false, false, 17);
            echo ";
  ";
        }
        // line 19
        echo "}

";
        // line 21
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 21), "headings", [], "any", false, false, false, 21)) {
            // line 22
            echo "  %%SELECTOR%% h1, %%SELECTOR%% h2, %%SELECTOR%% h3, %%SELECTOR%% h4, %%SELECTOR%% h5, %%SELECTOR%% h6 {
    color: ";
            // line 23
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 23), "headings", [], "any", false, false, false, 23);
            echo ";
  }
";
        }
        // line 26
        echo "
";
        // line 27
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 27), "link", [], "any", false, false, false, 27)) {
            // line 28
            echo "  %%SELECTOR%% a {
    color: ";
            // line 29
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 29), "link", [], "any", false, false, false, 29);
            echo ";
  }
";
        }
        // line 32
        echo "
";
        // line 33
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 33), "link_hover", [], "any", false, false, false, 33)) {
            // line 34
            echo "  %%SELECTOR%% a:hover {
    color: ";
            // line 35
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 35), "link_hover", [], "any", false, false, false, 35);
            echo ";
  }
";
        }
        // line 38
        echo "
";
        // line 40
        echo "%%SELECTOR%% .section-container {
  ";
        // line 41
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 41), "height", [], "any", false, false, false, 41) == "viewport")) {
            // line 42
            echo "    height: 100vh;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 43
($context["design"] ?? null), "size", [], "any", false, false, false, 43), "height", [], "any", false, false, false, 43) == "custom")) {
            // line 44
            echo "    height: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 44), "custom_height", [], "any", false, false, false, 44), "style", [], "any", false, false, false, 44);
            echo ";
    min-height: ";
            // line 45
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 45), "min_height", [], "any", false, false, false, 45), "style", [], "any", false, false, false, 45);
            echo ";
  ";
        }
        // line 47
        echo "}

%%SELECTOR%% .section-container {
  ";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 50), "width", [], "any", false, false, false, 50) == "full")) {
            // line 51
            echo "    max-width: 100%;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 52
($context["design"] ?? null), "size", [], "any", false, false, false, 52), "width", [], "any", false, false, false, 52) == "custom")) {
            // line 53
            echo "    max-width: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 53), "container_width", [], "any", false, false, false, 53), "style", [], "any", false, false, false, 53);
            echo ";
  ";
        }
        // line 55
        echo "}

";
        // line 58
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 58), "padding", [], "any", false, false, false, 58)) {
            // line 59
            echo "  %%SELECTOR%% .section-container {
    ";
            // line 60
            echo twig_call_macro($macros["macros"], "macro_spacing_complex", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 60), "padding", [], "any", false, false, false, 60), "padding"], 60, $context, $this->getSourceContext());
            echo "
  }
";
        }
        // line 63
        echo "
%%SELECTOR%% {
  margin-top: ";
        // line 65
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 65), "margin_top", [], "any", false, false, false, 65), "style", [], "any", false, false, false, 65);
        echo ";
  margin-bottom: ";
        // line 66
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 66), "margin_bottom", [], "any", false, false, false, 66), "style", [], "any", false, false, false, 66);
        echo ";
}

";
        // line 70
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 70))) {
            // line 71
            echo "  %%SELECTOR%% {
    ";
            // line 72
            echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 72)], 72, $context, $this->getSourceContext());
            echo "
  }
";
        }
        // line 75
        echo "
";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "dividers", [], "any", false, false, false, 77), "shape_dividers_section", [], "any", false, false, false, 77), "dividers", [], "any", false, false, false, 77));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["divider"]) {
            // line 78
            echo "  ";
            $context["transforms"] = "";
            // line 79
            echo "  %%SELECTOR%% .section-shape-divider-wrapper--";
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 79);
            echo " .section-shape-divider svg {
    color: ";
            // line 80
            echo twig_get_attribute($this->env, $this->source, $context["divider"], "color", [], "any", false, false, false, 80);
            echo ";
    width:  ";
            // line 81
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["divider"], "width", [], "any", false, false, false, 81), "style", [], "any", false, false, false, 81);
            echo ";
    height: ";
            // line 82
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["divider"], "height", [], "any", false, false, false, 82), "style", [], "any", false, false, false, 82);
            echo ";
    ";
            // line 83
            if ((twig_get_attribute($this->env, $this->source, $context["divider"], "position", [], "any", false, false, false, 83) == "bottom")) {
                // line 84
                echo "      bottom: 0;
      top: auto;
    ";
            }
            // line 87
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["divider"], "position", [], "any", false, false, false, 87) == "bottom")) {
                // line 88
                echo "      ";
                $context["transforms"] = "scaleY(1)";
                // line 89
                echo "    ";
            }
            // line 90
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["divider"], "flip_horizontally", [], "any", false, false, false, 90) == "yes")) {
                // line 91
                echo "      ";
                $context["transforms"] = (($context["transforms"] ?? null) . " scaleX(-1)");
                // line 92
                echo "    ";
            }
            // line 93
            echo "    ";
            if (($context["transforms"] ?? null)) {
                // line 94
                echo "      transform: ";
                echo ($context["transforms"] ?? null);
                echo ";
    ";
            }
            // line 96
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, $context["divider"], "bring_to_front", [], "any", false, false, false, 96)) {
                // line 97
                echo "      z-index: 1;
    ";
            }
            // line 99
            echo "  }

  ";
            // line 102
            echo "  %%SELECTOR%% .section-shape-divider-wrapper--";
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 102);
            echo " .section-shape-divider path,
  %%SELECTOR%% .section-shape-divider-wrapper--";
            // line 103
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 103);
            echo " .section-shape-divider rect, 
  %%SELECTOR%% .section-shape-divider-wrapper--";
            // line 104
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 104);
            echo " .section-shape-divider ellipse, 
  %%SELECTOR%% .section-shape-divider-wrapper--";
            // line 105
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 105);
            echo " .section-shape-divider polyline, 
  %%SELECTOR%% .section-shape-divider-wrapper--";
            // line 106
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 106);
            echo " .section-shape-divider polygon {
    color: ";
            // line 107
            echo twig_get_attribute($this->env, $this->source, $context["divider"], "color", [], "any", false, false, false, 107);
            echo ";
  }
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['divider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "
";
        // line 111
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 111), "slideshow_settings", [], "any", false, false, false, 111), "ken_burns", [], "any", false, false, false, 111))) {
            // line 112
            echo "  %%SELECTOR%% .swiper-slide .swiper-slide-item {
    ";
            // line 113
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 113), "slideshow_settings", [], "any", false, false, false, 113), "ken_burns", [], "any", false, false, false, 113) == "out")) {
                // line 114
                echo "      transform: scale(";
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 114), "slideshow_settings", [], "any", false, true, false, 114), "zoom", [], "any", true, true, false, 114) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 114), "slideshow_settings", [], "any", false, true, false, 114), "zoom", [], "any", false, false, false, 114)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 114), "slideshow_settings", [], "any", false, true, false, 114), "zoom", [], "any", false, false, false, 114)) : (1.5));
                echo ");
    ";
            } else {
                // line 116
                echo "      transform: scale(1);
    ";
            }
            // line 118
            echo "    transition: 5s ease-in;
    transform-origin: 0% ";
            // line 119
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 119), "slideshow_settings", [], "any", false, true, false, 119), "origin", [], "any", true, true, false, 119) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 119), "slideshow_settings", [], "any", false, true, false, 119), "origin", [], "any", false, false, false, 119)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 119), "slideshow_settings", [], "any", false, true, false, 119), "origin", [], "any", false, false, false, 119)) : ("100%"));
            echo ";
  }

  %%SELECTOR%% .swiper-slide.swiper-slide-active .swiper-slide-item {
    ";
            // line 123
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 123), "slideshow_settings", [], "any", false, false, false, 123), "ken_burns", [], "any", false, false, false, 123) == "out")) {
                // line 124
                echo "      transform: scale(1);
    ";
            } else {
                // line 126
                echo "      transform: scale(";
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 126), "slideshow_settings", [], "any", false, true, false, 126), "zoom", [], "any", true, true, false, 126) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 126), "slideshow_settings", [], "any", false, true, false, 126), "zoom", [], "any", false, false, false, 126)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 126), "slideshow_settings", [], "any", false, true, false, 126), "zoom", [], "any", false, false, false, 126)) : (1.5));
                echo ");
    ";
            }
            // line 128
            echo "  }
";
        }
        // line 131
        echo "

    %%SELECTOR%% {
        ";
        // line 134
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 135
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 135), "wrapper", [], "any", false, false, false, 135), "background", [], "any", false, false, false, 135), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 136
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 136), "wrapper", [], "any", false, false, false, 136), "layout", [], "any", false, false, false, 136), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 137
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 137), "wrapper", [], "any", false, false, false, 137), "size", [], "any", false, false, false, 137), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 138
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 138), "wrapper", [], "any", false, false, false, 138), "typography", [], "any", false, false, false, 138),         // line 139
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 140
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 140), "wrapper", [], "any", false, false, false, 140), "spacing", [], "any", false, false, false, 140), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 141
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 141), "wrapper", [], "any", false, false, false, 141), "borders", [], "any", false, false, false, 141), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 142
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 142), "wrapper", [], "any", false, false, false, 142), "effects", [], "any", false, false, false, 142)], 134, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 146
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 147
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 147), "wrapper_hover", [], "any", false, false, false, 147), "background", [], "any", false, false, false, 147), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 148
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 148), "wrapper_hover", [], "any", false, false, false, 148), "layout", [], "any", false, false, false, 148), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 149
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 149), "wrapper_hover", [], "any", false, false, false, 149), "size", [], "any", false, false, false, 149), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 150
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 150), "wrapper_hover", [], "any", false, false, false, 150), "typography", [], "any", false, false, false, 150),         // line 151
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 152
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 152), "wrapper_hover", [], "any", false, false, false, 152), "spacing", [], "any", false, false, false, 152), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 153
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 153), "wrapper_hover", [], "any", false, false, false, 153), "borders", [], "any", false, false, false, 153), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 154
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 154), "wrapper_hover", [], "any", false, false, false, 154), "effects", [], "any", false, false, false, 154)], 146, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 158
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 158), "css", [], "any", false, false, false, 158);
        echo "


";
        // line 161
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 161), "hide", [], "any", false, false, false, 161)))) {
            // line 162
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 163
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 163), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 163), "hide", [], "any", false, false, false, 163))) {
                    // line 164
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 166
                    if (($context["isBuilder"] ?? null)) {
                        // line 167
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 170
                        echo "                        display: none;
                    ";
                    }
                    // line 172
                    echo "                }
            }
        ";
                }
                // line 175
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 177
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "f3e1d128fb287d165968f0e4f96aca3ebfe8947e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  452 => 177,  445 => 175,  440 => 172,  436 => 170,  431 => 167,  429 => 166,  423 => 164,  420 => 163,  415 => 162,  413 => 161,  407 => 158,  400 => 154,  399 => 153,  398 => 152,  397 => 151,  396 => 150,  395 => 149,  394 => 148,  393 => 147,  392 => 146,  385 => 142,  384 => 141,  383 => 140,  382 => 139,  381 => 138,  380 => 137,  379 => 136,  378 => 135,  377 => 134,  372 => 131,  368 => 128,  362 => 126,  358 => 124,  356 => 123,  349 => 119,  346 => 118,  342 => 116,  336 => 114,  334 => 113,  331 => 112,  329 => 111,  326 => 110,  309 => 107,  305 => 106,  301 => 105,  297 => 104,  293 => 103,  288 => 102,  284 => 99,  280 => 97,  277 => 96,  271 => 94,  268 => 93,  265 => 92,  262 => 91,  259 => 90,  256 => 89,  253 => 88,  250 => 87,  245 => 84,  243 => 83,  239 => 82,  235 => 81,  231 => 80,  226 => 79,  223 => 78,  206 => 77,  203 => 75,  197 => 72,  194 => 71,  192 => 70,  186 => 66,  182 => 65,  178 => 63,  172 => 60,  169 => 59,  167 => 58,  163 => 55,  157 => 53,  155 => 52,  152 => 51,  150 => 50,  145 => 47,  140 => 45,  135 => 44,  133 => 43,  130 => 42,  128 => 41,  125 => 40,  122 => 38,  116 => 35,  113 => 34,  111 => 33,  108 => 32,  102 => 29,  99 => 28,  97 => 27,  94 => 26,  88 => 23,  85 => 22,  83 => 21,  79 => 19,  73 => 17,  70 => 16,  64 => 14,  62 => 13,  59 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "f3e1d128fb287d165968f0e4f96aca3ebfe8947e", "");
    }
}
