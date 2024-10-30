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

/* ef060d4b13f4802c2ee0e7670f8ca72fb8d2c29c */
class __TwigTemplate_50cc7179c24a0a5c98afb9d74b7ad630 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "ef060d4b13f4802c2ee0e7670f8ca72fb8d2c29c", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  ";
        // line 5
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, false, false, 5), "disable_overlay", [], "any", false, false, false, 5)) {
            // line 6
            echo "    ";
            echo twig_call_macro($macros["macros"], "macro_background", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "overlay", [], "any", false, false, false, 6)], 6, $context, $this->getSourceContext());
            echo "
  ";
        }
        // line 8
        echo "
  ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 9), "position", [], "any", false, false, false, 9), "align", [], "any", false, false, false, 9) == "left")) {
            // line 10
            echo "    align-items: flex-start;
    text-align: left;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
($context["design"] ?? null), "popup", [], "any", false, false, false, 12), "position", [], "any", false, false, false, 12), "align", [], "any", false, false, false, 12) == "center")) {
            // line 13
            echo "    align-items: center;
    text-align: center;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
($context["design"] ?? null), "popup", [], "any", false, false, false, 15), "position", [], "any", false, false, false, 15), "align", [], "any", false, false, false, 15) == "right")) {
            // line 16
            echo "    align-items: flex-end;
    text-align: right;
  ";
        }
        // line 19
        echo "
  justify-content: ";
        // line 20
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 20), "position", [], "any", false, false, false, 20), "vertical_align", [], "any", false, false, false, 20);
        echo ";
}

%%SELECTOR%% .breakdance-popup {
  ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 24), "position", [], "any", false, false, false, 24), "translate", [], "any", false, false, false, 24), "x", [], "any", false, false, false, 24)) {
            // line 25
            echo "    left: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 25), "position", [], "any", false, false, false, 25), "translate", [], "any", false, false, false, 25), "x", [], "any", false, false, false, 25), "style", [], "any", false, false, false, 25);
            echo ";
  ";
        }
        // line 27
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 27), "position", [], "any", false, false, false, 27), "translate", [], "any", false, false, false, 27), "y", [], "any", false, false, false, 27)) {
            // line 28
            echo "    top: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 28), "position", [], "any", false, false, false, 28), "translate", [], "any", false, false, false, 28), "y", [], "any", false, false, false, 28), "style", [], "any", false, false, false, 28);
            echo ";
  ";
        }
        // line 30
        echo "   width: ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 30), "size", [], "any", false, false, false, 30), "width", [], "any", false, false, false, 30), "style", [], "any", false, false, false, 30);
        echo ";
   height: ";
        // line 31
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 31), "size", [], "any", false, false, false, 31), "height", [], "any", false, false, false, 31), "style", [], "any", false, false, false, 31);
        echo ";
   max-height: ";
        // line 32
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 32), "size", [], "any", false, false, false, 32), "max_height", [], "any", false, false, false, 32), "style", [], "any", false, false, false, 32);
        echo ";
}

%%SELECTOR%% .breakdance-popup-content {

  ";
        // line 37
        echo twig_call_macro($macros["macros"], "macro_simpleLayout", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 37), "layout", [], "any", false, false, false, 37), ($context["breakpoint"] ?? null)], 37, $context, $this->getSourceContext());
        echo "
  ";
        // line 38
        echo twig_call_macro($macros["macros"], "macro_backgroundColor", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 38), "background", [], "any", false, false, false, 38)], 38, $context, $this->getSourceContext());
        echo "
  ";
        // line 39
        echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 39), "borders", [], "any", false, false, false, 39)], 39, $context, $this->getSourceContext());
        echo "
  ";
        // line 40
        echo twig_call_macro($macros["macros"], "macro_spacing_complex", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 40), "padding", [], "any", false, false, false, 40), "padding", [], "any", false, false, false, 40), "padding"], 40, $context, $this->getSourceContext());
        echo "

}



";
        // line 46
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, false, false, 46), "disable_close_button", [], "any", false, false, false, 46)) {
            // line 47
            echo "
  %%SELECTOR%% .breakdance-popup .breakdance-popup-close-button {
    color: ";
            // line 49
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 49), "color", [], "any", false, false, false, 49);
            echo ";

    --closeButtonSize: ";
            // line 51
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 51), "size", [], "any", false, false, false, 51), "style", [], "any", false, false, false, 51);
            echo ";

    ";
            // line 53
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 53), "outside", [], "any", false, false, false, 53)) {
                // line 54
                echo "      --closeButtonOutsideOffset: calc(var(--closeButtonSize) + var(--closeButtonOutsidePadding, 0px) + var(--closeButtonOutsidePadding, 0px));
    ";
            }
            // line 56
            echo "
    ";
            // line 57
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 57), "wrapped", [], "any", false, false, false, 57)) {
                // line 58
                echo "      --closeButtonOutsidePadding: ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 58), "padding", [], "any", false, false, false, 58), "style", [], "any", false, false, false, 58);
                echo ";
      border-radius: ";
                // line 59
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 59), "radius", [], "any", false, false, false, 59), "style", [], "any", false, false, false, 59);
                echo ";
      padding-left: ";
                // line 60
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 60), "padding", [], "any", false, false, false, 60), "style", [], "any", false, false, false, 60);
                echo ";
      padding-right: ";
                // line 61
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 61), "padding", [], "any", false, false, false, 61), "style", [], "any", false, false, false, 61);
                echo ";
      padding-bottom: ";
                // line 62
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 62), "padding", [], "any", false, false, false, 62), "style", [], "any", false, false, false, 62);
                echo ";
      padding-top: ";
                // line 63
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 63), "padding", [], "any", false, false, false, 63), "style", [], "any", false, false, false, 63);
                echo ";
      background-color: ";
                // line 64
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 64), "background", [], "any", false, false, false, 64);
                echo ";
    ";
            }
            // line 66
            echo "
    ";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 67), "translate", [], "any", false, false, false, 67), "x", [], "any", false, false, false, 67), "style", [], "any", false, false, false, 67) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 67), "translate", [], "any", false, false, false, 67), "y", [], "any", false, false, false, 67), "style", [], "any", false, false, false, 67))) {
                // line 68
                echo "      transform: translate(";
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, true, false, 68), "translate", [], "any", false, true, false, 68), "x", [], "any", false, true, false, 68), "style", [], "any", true, true, false, 68) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, true, false, 68), "translate", [], "any", false, true, false, 68), "x", [], "any", false, true, false, 68), "style", [], "any", false, false, false, 68)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, true, false, 68), "translate", [], "any", false, true, false, 68), "x", [], "any", false, true, false, 68), "style", [], "any", false, false, false, 68)) : (0));
                echo ",";
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, true, false, 68), "translate", [], "any", false, true, false, 68), "y", [], "any", false, true, false, 68), "style", [], "any", true, true, false, 68) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, true, false, 68), "translate", [], "any", false, true, false, 68), "y", [], "any", false, true, false, 68), "style", [], "any", false, false, false, 68)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, true, false, 68), "translate", [], "any", false, true, false, 68), "y", [], "any", false, true, false, 68), "style", [], "any", false, false, false, 68)) : (0));
                echo ");
    ";
            }
            // line 70
            echo "
  }
";
        }
        // line 73
        echo "
";
        // line 75
        echo "

    %%SELECTOR%% {
        ";
        // line 78
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 79
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 79), "wrapper", [], "any", false, false, false, 79), "background", [], "any", false, false, false, 79), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 80
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 80), "wrapper", [], "any", false, false, false, 80), "layout", [], "any", false, false, false, 80), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 81
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 81), "wrapper", [], "any", false, false, false, 81), "size", [], "any", false, false, false, 81), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 82
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 82), "wrapper", [], "any", false, false, false, 82), "typography", [], "any", false, false, false, 82),         // line 83
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 84
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 84), "wrapper", [], "any", false, false, false, 84), "spacing", [], "any", false, false, false, 84), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 85
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 85), "wrapper", [], "any", false, false, false, 85), "borders", [], "any", false, false, false, 85), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 86
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 86), "wrapper", [], "any", false, false, false, 86), "effects", [], "any", false, false, false, 86)], 78, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 90
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 91
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 91), "wrapper_hover", [], "any", false, false, false, 91), "background", [], "any", false, false, false, 91), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 92
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 92), "wrapper_hover", [], "any", false, false, false, 92), "layout", [], "any", false, false, false, 92), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 93
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 93), "wrapper_hover", [], "any", false, false, false, 93), "size", [], "any", false, false, false, 93), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 94
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 94), "wrapper_hover", [], "any", false, false, false, 94), "typography", [], "any", false, false, false, 94),         // line 95
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 96
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 96), "wrapper_hover", [], "any", false, false, false, 96), "spacing", [], "any", false, false, false, 96), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 97
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 97), "wrapper_hover", [], "any", false, false, false, 97), "borders", [], "any", false, false, false, 97), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 98
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 98), "wrapper_hover", [], "any", false, false, false, 98), "effects", [], "any", false, false, false, 98)], 90, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 102
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 102), "css", [], "any", false, false, false, 102);
        echo "


";
        // line 105
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 105), "hide", [], "any", false, false, false, 105)))) {
            // line 106
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 107
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 107), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 107), "hide", [], "any", false, false, false, 107))) {
                    // line 108
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 110
                    if (($context["isBuilder"] ?? null)) {
                        // line 111
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 114
                        echo "                        display: none;
                    ";
                    }
                    // line 116
                    echo "                }
            }
        ";
                }
                // line 119
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 121
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "ef060d4b13f4802c2ee0e7670f8ca72fb8d2c29c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 121,  292 => 119,  287 => 116,  283 => 114,  278 => 111,  276 => 110,  270 => 108,  267 => 107,  262 => 106,  260 => 105,  254 => 102,  247 => 98,  246 => 97,  245 => 96,  244 => 95,  243 => 94,  242 => 93,  241 => 92,  240 => 91,  239 => 90,  232 => 86,  231 => 85,  230 => 84,  229 => 83,  228 => 82,  227 => 81,  226 => 80,  225 => 79,  224 => 78,  219 => 75,  216 => 73,  211 => 70,  203 => 68,  201 => 67,  198 => 66,  193 => 64,  189 => 63,  185 => 62,  181 => 61,  177 => 60,  173 => 59,  168 => 58,  166 => 57,  163 => 56,  159 => 54,  157 => 53,  152 => 51,  147 => 49,  143 => 47,  141 => 46,  132 => 40,  128 => 39,  124 => 38,  120 => 37,  112 => 32,  108 => 31,  103 => 30,  97 => 28,  94 => 27,  88 => 25,  86 => 24,  79 => 20,  76 => 19,  71 => 16,  69 => 15,  65 => 13,  63 => 12,  59 => 10,  57 => 9,  54 => 8,  48 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ef060d4b13f4802c2ee0e7670f8ca72fb8d2c29c", "");
    }
}
