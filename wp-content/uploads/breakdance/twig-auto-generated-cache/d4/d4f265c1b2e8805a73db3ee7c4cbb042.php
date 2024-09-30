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

/* e270fa0f6cc8f7ba6753afbc63940bae2adb3023 */
class __TwigTemplate_fda1a22833875d34919873984d48ad66 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "e270fa0f6cc8f7ba6753afbc63940bae2adb3023", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  ";
        // line 5
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 5)], 5, $context, $this->getSourceContext());
        echo "
  max-width: ";
        // line 6
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 6), "max_width", [], "any", false, false, false, 6), "style", [], "any", false, false, false, 6);
        echo ";
  width: ";
        // line 7
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 7), "width", [], "any", false, false, false, 7), "style", [], "any", false, false, false, 7);
        echo ";
}

%%SELECTOR%% .breakdance-image-container {
  box-shadow: ";
        // line 11
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 11), "shadow", [], "any", false, false, false, 11), "style", [], "any", false, false, false, 11);
        echo ";
  ";
        // line 12
        echo twig_call_macro($macros["macros"], "macro_border_radius", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 12), "radius", [], "any", false, false, false, 12)], 12, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .breakdance-image-clip {
  ";
        // line 16
        echo twig_call_macro($macros["macros"], "macro_borders_without_shadows", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 16)], 16, $context, $this->getSourceContext());
        echo "
}

/* Actual Image */

%%SELECTOR%% .breakdance-image-object {
  ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 22), "width", [], "any", false, false, false, 22), "style", [], "any", false, false, false, 22)) {
            // line 23
            echo "    width: 100%;
    ";
            // line 24
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 24), "height", [], "any", false, false, false, 24), "style", [], "any", false, false, false, 24)) {
                // line 25
                echo "      height: auto;
    ";
            }
            // line 27
            echo "  ";
        }
        // line 28
        echo "
  ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 29), "height", [], "any", false, false, false, 29), "style", [], "any", false, false, false, 29)) {
            // line 30
            echo "    height: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 30), "height", [], "any", false, false, false, 30), "style", [], "any", false, false, false, 30);
            echo ";
    object-fit: ";
            // line 31
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 31), "object_fit", [], "any", false, false, false, 31);
            echo ";
    ";
            // line 32
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 32), "width", [], "any", false, false, false, 32), "style", [], "any", false, false, false, 32)) {
                // line 33
                echo "      width: auto;
    ";
            }
            // line 35
            echo "  ";
        }
        // line 36
        echo "
  ";
        // line 38
        echo "
  ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 39), "zoom", [], "any", false, false, false, 39)) {
            // line 40
            echo "    transform: scale(";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 40), "zoom", [], "any", false, false, false, 40), "number", [], "any", false, false, false, 40) / 100) + 1);
            echo ") translateZ(0);
  ";
        }
        // line 42
        echo "
  ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 43), "focus_point", [], "any", false, false, false, 43)) {
            // line 44
            echo "    transform-origin: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 44), "focus_point", [], "any", false, false, false, 44), "x", [], "any", false, false, false, 44);
            echo "% ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 44), "focus_point", [], "any", false, false, false, 44), "y", [], "any", false, false, false, 44);
            echo "%;
  ";
        }
        // line 46
        echo "
  ";
        // line 48
        echo "  opacity: ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "effects", [], "any", false, false, false, 48), "opacity", [], "any", false, false, false, 48);
        echo ";
  transition-duration: ";
        // line 49
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "effects", [], "any", false, false, false, 49), "transition_duration", [], "any", false, false, false, 49), "style", [], "any", false, false, false, 49);
        echo ";
  ";
        // line 51
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 51), "aspect_ratio", [], "any", false, false, false, 51)) {
            // line 52
            echo "    ";
            if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 52), "aspect_ratio", [], "any", false, false, false, 52) == "custom") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 52), "custom_ratio", [], "any", false, false, false, 52), "width", [], "any", false, false, false, 52)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 52), "custom_ratio", [], "any", false, false, false, 52), "height", [], "any", false, false, false, 52))) {
                // line 53
                echo "      aspect-ratio: ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 53), "custom_ratio", [], "any", false, false, false, 53), "width", [], "any", false, false, false, 53);
                echo " / ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 53), "custom_ratio", [], "any", false, false, false, 53), "height", [], "any", false, false, false, 53);
                echo ";
    ";
            } else {
                // line 55
                echo "      aspect-ratio: ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 55), "aspect_ratio", [], "any", false, false, false, 55);
                echo ";
    ";
            }
            // line 57
            echo "    object-fit: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 57), "object_fit", [], "any", false, false, false, 57);
            echo ";
  ";
        }
        // line 59
        echo "  ";
        echo twig_call_macro($macros["macros"], "macro_filters", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "effects", [], "any", false, false, false, 59), "filters", [], "any", false, false, false, 59)], 59, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%%:hover .breakdance-image-object {
  ";
        // line 64
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 64), "zoom_hover", [], "any", false, false, false, 64)) {
            // line 65
            echo "    transform: scale(";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 65), "zoom_hover", [], "any", false, false, false, 65), "number", [], "any", false, false, false, 65) / 100) + 1);
            echo ") translateZ(0);
  ";
        }
        // line 67
        echo "
  ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 68), "focus_point_hover", [], "any", false, false, false, 68)) {
            // line 69
            echo "    transform-origin: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 69), "focus_point_hover", [], "any", false, false, false, 69), "x", [], "any", false, false, false, 69);
            echo "% ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 69), "focus_point_hover", [], "any", false, false, false, 69), "y", [], "any", false, false, false, 69);
            echo "%;
  ";
        }
        // line 71
        echo "
  ";
        // line 73
        echo "  opacity: ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "effects", [], "any", false, false, false, 73), "opacity_hover", [], "any", false, false, false, 73);
        echo ";
  ";
        // line 74
        echo twig_call_macro($macros["macros"], "macro_filtersHover", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "effects", [], "any", false, false, false, 74), "filters", [], "any", false, false, false, 74)], 74, $context, $this->getSourceContext());
        echo "
}

/* Caption */

%%SELECTOR%% .breakdance-image__caption {
  ";
        // line 80
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "caption", [], "any", false, false, false, 80), "typography", [], "any", false, false, false, 80), ($context["globalSettings"] ?? null)], 80, $context, $this->getSourceContext());
        echo "
  ";
        // line 81
        echo twig_call_macro($macros["macros"], "macro_backgroundColor", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "caption", [], "any", false, false, false, 81), "background", [], "any", false, false, false, 81)], 81, $context, $this->getSourceContext());
        echo "
  ";
        // line 82
        echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "caption", [], "any", false, false, false, 82), "borders", [], "any", false, false, false, 82)], 82, $context, $this->getSourceContext());
        echo "
  ";
        // line 83
        echo twig_call_macro($macros["macros"], "macro_spacing_padding_all", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "caption", [], "any", false, false, false, 83), "spacing", [], "any", false, false, false, 83)], 83, $context, $this->getSourceContext());
        echo "
}

/* Mask */

%%SELECTOR%% .breakdance-image__mask {
  ";
        // line 89
        $context["mask"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "effects", [], "any", false, false, false, 89), "mask", [], "any", false, false, false, 89);
        // line 90
        echo "
  -webkit-mask-repeat: ";
        // line 91
        echo twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "repeat", [], "any", false, false, false, 91);
        echo ";
  mask-repeat: ";
        // line 92
        echo twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "repeat", [], "any", false, false, false, 92);
        echo ";

  ";
        // line 94
        if (twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "position", [], "any", false, false, false, 94)) {
            // line 95
            echo "    -webkit-mask-position: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "position", [], "any", false, false, false, 95), "x", [], "any", false, false, false, 95);
            echo "% ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "position", [], "any", false, false, false, 95), "y", [], "any", false, false, false, 95);
            echo "%;
    mask-position: ";
            // line 96
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "position", [], "any", false, false, false, 96), "x", [], "any", false, false, false, 96);
            echo "% ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "position", [], "any", false, false, false, 96), "y", [], "any", false, false, false, 96);
            echo "%;
  ";
        }
        // line 98
        echo "
  ";
        // line 99
        if ((twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "size", [], "any", false, false, false, 99) == "custom")) {
            // line 100
            echo "    -webkit-mask-size: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "custom_size", [], "any", false, false, false, 100), "style", [], "any", false, false, false, 100);
            echo ";
    mask-size: ";
            // line 101
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "custom_size", [], "any", false, false, false, 101), "style", [], "any", false, false, false, 101);
            echo ";
  ";
        } else {
            // line 103
            echo "    -webkit-mask-size: ";
            echo twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "size", [], "any", false, false, false, 103);
            echo ";
    mask-size: ";
            // line 104
            echo twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "size", [], "any", false, false, false, 104);
            echo ";
  ";
        }
        // line 106
        echo "
  ";
        // line 107
        if ((twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "shape", [], "any", false, false, false, 107) == "custom")) {
            // line 108
            echo "    -webkit-mask-image: url(";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "custom_shape", [], "any", false, false, false, 108), "url", [], "any", false, false, false, 108);
            echo ") !important;
    mask-image: url(";
            // line 109
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "custom_shape", [], "any", false, false, false, 109), "url", [], "any", false, false, false, 109);
            echo ") !important;
  ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 110
($context["mask"] ?? null), "shape", [], "any", false, false, false, 110)) {
            // line 111
            echo "    ";
            $context["shape"] = (((Breakdance\PluginsAPI\getBreakdanceElementsPluginUrl() . "elements/image/masks/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "effects", [], "any", false, false, false, 111), "mask", [], "any", false, false, false, 111), "shape", [], "any", false, false, false, 111)) . ".svg");
            // line 112
            echo "    -webkit-mask-image: url('";
            echo ($context["shape"] ?? null);
            echo "');
    mask-image: url('";
            // line 113
            echo ($context["shape"] ?? null);
            echo "');
  ";
        }
        // line 115
        echo "}

/* Lightbox */
";
        // line 118
        echo twig_call_macro($macros["macros"], "macro_atomV1LightboxCss", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "lightbox", [], "any", false, false, false, 118)], 118, $context, $this->getSourceContext());
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
        return "e270fa0f6cc8f7ba6753afbc63940bae2adb3023";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 167,  418 => 165,  413 => 162,  409 => 160,  404 => 157,  402 => 156,  396 => 154,  393 => 153,  388 => 152,  386 => 151,  380 => 148,  373 => 144,  372 => 143,  371 => 142,  370 => 141,  369 => 140,  368 => 139,  367 => 138,  366 => 137,  365 => 136,  358 => 132,  357 => 131,  356 => 130,  355 => 129,  354 => 128,  353 => 127,  352 => 126,  351 => 125,  350 => 124,  345 => 121,  340 => 118,  335 => 115,  330 => 113,  325 => 112,  322 => 111,  320 => 110,  316 => 109,  311 => 108,  309 => 107,  306 => 106,  301 => 104,  296 => 103,  291 => 101,  286 => 100,  284 => 99,  281 => 98,  274 => 96,  267 => 95,  265 => 94,  260 => 92,  256 => 91,  253 => 90,  251 => 89,  242 => 83,  238 => 82,  234 => 81,  230 => 80,  221 => 74,  216 => 73,  213 => 71,  205 => 69,  203 => 68,  200 => 67,  194 => 65,  191 => 64,  183 => 59,  177 => 57,  171 => 55,  163 => 53,  160 => 52,  157 => 51,  153 => 49,  148 => 48,  145 => 46,  137 => 44,  135 => 43,  132 => 42,  126 => 40,  124 => 39,  121 => 38,  118 => 36,  115 => 35,  111 => 33,  109 => 32,  105 => 31,  100 => 30,  98 => 29,  95 => 28,  92 => 27,  88 => 25,  86 => 24,  83 => 23,  81 => 22,  72 => 16,  65 => 12,  61 => 11,  54 => 7,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "e270fa0f6cc8f7ba6753afbc63940bae2adb3023", "");
    }
}
