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

/* 9298ed278d249e5dfe536119057913e299534f3c */
class __TwigTemplate_0d98dec52955aa099286e67c967e29cc extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "9298ed278d249e5dfe536119057913e299534f3c", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  width: ";
        // line 5
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 5), "width", [], "any", false, false, false, 5), "style", [], "any", false, false, false, 5);
        echo ";
  min-height: ";
        // line 6
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 6), "min_height", [], "any", false, false, false, 6), "style", [], "any", false, false, false, 6);
        echo ";
  ";
        // line 7
        echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 7), "borders", [], "any", false, false, false, 7)], 7, $context, $this->getSourceContext());
        echo "
  ";
        // line 8
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 8)], 8, $context, $this->getSourceContext());
        echo "
  ";
        // line 9
        echo twig_call_macro($macros["macros"], "macro_spacing_padding_all", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 9), "padding", [], "any", false, false, false, 9)], 9, $context, $this->getSourceContext());
        echo "

  ";
        // line 11
        echo twig_call_macro($macros["macros"], "macro_simpleLayout", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 11), ($context["breakpoint"] ?? null)], 11, $context, $this->getSourceContext());
        echo "

  transition-duration: ";
        // line 13
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 13), "hover", [], "any", false, false, false, 13), "transition_duration", [], "any", false, false, false, 13), "style", [], "any", false, false, false, 13);
        echo ";

  ";
        // line 16
        echo "  height: ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 16), "height", [], "any", false, false, false, 16), "style", [], "any", false, false, false, 16);
        echo ";
  ";
        // line 18
        echo "
}

";
        // line 21
        echo twig_call_macro($macros["macros"], "macro_fancyBackgroundCss", ["%%SELECTOR%%", twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 21), ($context["breakpoint"] ?? null), false, true], 21, $context, $this->getSourceContext());
        echo "

%%SELECTOR%%:hover {
  border-color: ";
        // line 24
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 24), "hover", [], "any", false, false, false, 24), "border_color", [], "any", false, false, false, 24);
        echo ";
  box-shadow: ";
        // line 25
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 25), "hover", [], "any", false, false, false, 25), "shadow", [], "any", false, false, false, 25), "style", [], "any", false, false, false, 25);
        echo ";
}


%%SELECTOR%% {
  ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 30), "text", [], "any", false, false, false, 30)) {
            // line 31
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 31), "text", [], "any", false, false, false, 31);
            echo ";
  ";
        }
        // line 33
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 33), "brand", [], "any", false, false, false, 33)) {
            // line 34
            echo "    --bde-brand-primary-color: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 34), "brand", [], "any", false, false, false, 34);
            echo ";
  ";
        }
        // line 36
        echo "}

%%SELECTOR%%:hover {
  ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 39), "text_hover", [], "any", false, false, false, 39)) {
            // line 40
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 40), "text_hover", [], "any", false, false, false, 40);
            echo ";
  ";
        }
        // line 42
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 42), "brand_hover", [], "any", false, false, false, 42)) {
            // line 43
            echo "    --bde-brand-primary-color: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 43), "brand_hover", [], "any", false, false, false, 43);
            echo ";
  ";
        }
        // line 45
        echo "}

";
        // line 47
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 47), "headings", [], "any", false, false, false, 47)) {
            // line 48
            echo "  %%SELECTOR%% h1, %%SELECTOR%% h2, %%SELECTOR%% h3, %%SELECTOR%% h4, %%SELECTOR%% h5, %%SELECTOR%% h6 {
    color: ";
            // line 49
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 49), "headings", [], "any", false, false, false, 49);
            echo ";
    transition-duration: ";
            // line 50
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 50), "transition_duration", [], "any", false, false, false, 50), "style", [], "any", false, false, false, 50);
            echo ";
  }
";
        }
        // line 53
        echo "
";
        // line 54
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 54), "headings", [], "any", false, false, false, 54)) {
            // line 55
            echo "  %%SELECTOR%%:hover h1, %%SELECTOR%%:hover h2, %%SELECTOR%%:hover h3, %%SELECTOR%%:hover h4, %%SELECTOR%%:hover h5, %%SELECTOR%%:hover h6 {
    color: ";
            // line 56
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 56), "headings_hover", [], "any", false, false, false, 56);
            echo ";
  }
";
        }
        // line 59
        echo "



";
        // line 64
        echo "

    %%SELECTOR%% {
        ";
        // line 67
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 68
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 68), "wrapper", [], "any", false, false, false, 68), "background", [], "any", false, false, false, 68), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 69
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 69), "wrapper", [], "any", false, false, false, 69), "layout", [], "any", false, false, false, 69), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 70
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 70), "wrapper", [], "any", false, false, false, 70), "size", [], "any", false, false, false, 70), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 71
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 71), "wrapper", [], "any", false, false, false, 71), "typography", [], "any", false, false, false, 71),         // line 72
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 73
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 73), "wrapper", [], "any", false, false, false, 73), "spacing", [], "any", false, false, false, 73), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 74
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 74), "wrapper", [], "any", false, false, false, 74), "borders", [], "any", false, false, false, 74), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 75
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 75), "wrapper", [], "any", false, false, false, 75), "effects", [], "any", false, false, false, 75)], 67, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 79
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 80
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 80), "wrapper_hover", [], "any", false, false, false, 80), "background", [], "any", false, false, false, 80), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 81
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 81), "wrapper_hover", [], "any", false, false, false, 81), "layout", [], "any", false, false, false, 81), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 82
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 82), "wrapper_hover", [], "any", false, false, false, 82), "size", [], "any", false, false, false, 82), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 83
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 83), "wrapper_hover", [], "any", false, false, false, 83), "typography", [], "any", false, false, false, 83),         // line 84
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 85
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 85), "wrapper_hover", [], "any", false, false, false, 85), "spacing", [], "any", false, false, false, 85), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 86
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 86), "wrapper_hover", [], "any", false, false, false, 86), "borders", [], "any", false, false, false, 86), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 87
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 87), "wrapper_hover", [], "any", false, false, false, 87), "effects", [], "any", false, false, false, 87)], 79, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 91
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 91), "css", [], "any", false, false, false, 91);
        echo "


";
        // line 94
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 94), "hide", [], "any", false, false, false, 94)))) {
            // line 95
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 96
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 96), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 96), "hide", [], "any", false, false, false, 96))) {
                    // line 97
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 99
                    if (($context["isBuilder"] ?? null)) {
                        // line 100
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 103
                        echo "                        display: none;
                    ";
                    }
                    // line 105
                    echo "                }
            }
        ";
                }
                // line 108
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 110
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "9298ed278d249e5dfe536119057913e299534f3c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 110,  256 => 108,  251 => 105,  247 => 103,  242 => 100,  240 => 99,  234 => 97,  231 => 96,  226 => 95,  224 => 94,  218 => 91,  211 => 87,  210 => 86,  209 => 85,  208 => 84,  207 => 83,  206 => 82,  205 => 81,  204 => 80,  203 => 79,  196 => 75,  195 => 74,  194 => 73,  193 => 72,  192 => 71,  191 => 70,  190 => 69,  189 => 68,  188 => 67,  183 => 64,  177 => 59,  171 => 56,  168 => 55,  166 => 54,  163 => 53,  157 => 50,  153 => 49,  150 => 48,  148 => 47,  144 => 45,  138 => 43,  135 => 42,  129 => 40,  127 => 39,  122 => 36,  116 => 34,  113 => 33,  107 => 31,  105 => 30,  97 => 25,  93 => 24,  87 => 21,  82 => 18,  77 => 16,  72 => 13,  67 => 11,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "9298ed278d249e5dfe536119057913e299534f3c", "");
    }
}
