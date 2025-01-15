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

/* 4663d16d0f27bf5c8d3f770ab0e782cf1d1e5265 */
class __TwigTemplate_d46e75c72eef66ed70c62ce35c1cdf68 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "4663d16d0f27bf5c8d3f770ab0e782cf1d1e5265", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% .advanced-slider__slide {
  ";
        // line 5
        echo twig_call_macro($macros["macros"], "macro_spacing_padding_all", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 5)], 5, $context, $this->getSourceContext());
        echo "
  ";
        // line 6
        echo twig_call_macro($macros["macros"], "macro_background", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 6)], 6, $context, $this->getSourceContext());
        echo "
  ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 7), "advanced", [], "any", false, false, false, 7), "flex_direction", [], "any", false, false, false, 7)) {
            // line 8
            echo "  \tflex-direction: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 8), "advanced", [], "any", false, false, false, 8), "flex_direction", [], "any", false, false, false, 8);
            echo ";
  ";
        } else {
            // line 10
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 10), "align_children", [], "any", false, false, false, 10) == "left")) {
                // line 11
                echo "      align-items: flex-start;
      text-align:left;
    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 13
($context["design"] ?? null), "layout", [], "any", false, false, false, 13), "align_children", [], "any", false, false, false, 13) == "center")) {
                // line 14
                echo "      align-items: center;
      text-align: center;
    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 16
($context["design"] ?? null), "layout", [], "any", false, false, false, 16), "align_children", [], "any", false, false, false, 16) == "right")) {
                // line 17
                echo "      align-items: flex-end;
      text-align: right;
    ";
            }
            // line 20
            echo "
    ";
            // line 21
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 21), "vertical_align_children", [], "any", false, false, false, 21) == "top")) {
                // line 22
                echo "   \t  justify-content: flex-start;
    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 23
($context["design"] ?? null), "layout", [], "any", false, false, false, 23), "vertical_align_children", [], "any", false, false, false, 23) == "middle")) {
                // line 24
                echo "      justify-content: center;
    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 25
($context["design"] ?? null), "layout", [], "any", false, false, false, 25), "vertical_align_children", [], "any", false, false, false, 25) == "bottom")) {
                // line 26
                echo "      justify-content: flex-end;
    ";
            }
            // line 28
            echo "  ";
        }
        // line 29
        echo "
  ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 30), "advanced", [], "any", false, false, false, 30), "align_items", [], "any", false, false, false, 30)) {
            // line 31
            echo "    align-items: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 31), "advanced", [], "any", false, false, false, 31), "align_items", [], "any", false, false, false, 31);
            echo ";
  ";
        }
        // line 33
        echo "
  ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 34), "advanced", [], "any", false, false, false, 34), "justify_content", [], "any", false, false, false, 34)) {
            // line 35
            echo "    justify-content: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 35), "advanced", [], "any", false, false, false, 35), "justify_content", [], "any", false, false, false, 35);
            echo ";
  ";
        }
        // line 37
        echo "
  ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 38), "advanced", [], "any", false, false, false, 38), "flex_wrap", [], "any", false, false, false, 38)) {
            // line 39
            echo "    flex-wrap: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 39), "advanced", [], "any", false, false, false, 39), "flex_wrap", [], "any", false, false, false, 39);
            echo ";
  ";
        }
        // line 41
        echo "
  ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 42), "advanced", [], "any", false, false, false, 42), "align_content", [], "any", false, false, false, 42)) {
            // line 43
            echo "    align-content: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 43), "advanced", [], "any", false, false, false, 43), "align_content", [], "any", false, false, false, 43);
            echo ";
  ";
        }
        // line 45
        echo "
  ";
        // line 46
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 46), "advanced", [], "any", false, false, false, 46), "gap", [], "any", false, false, false, 46)) {
            // line 47
            echo "    gap: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 47), "advanced", [], "any", false, false, false, 47), "gap", [], "any", false, false, false, 47), "style", [], "any", false, false, false, 47);
            echo ";
  ";
        }
        // line 49
        echo "  
}
";
        // line 52
        echo "

    %%SELECTOR%% {
        ";
        // line 55
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 56
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 56), "wrapper", [], "any", false, false, false, 56), "background", [], "any", false, false, false, 56), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 57
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 57), "wrapper", [], "any", false, false, false, 57), "layout", [], "any", false, false, false, 57), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 58
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 58), "wrapper", [], "any", false, false, false, 58), "size", [], "any", false, false, false, 58), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 59
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 59), "wrapper", [], "any", false, false, false, 59), "typography", [], "any", false, false, false, 59),         // line 60
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 61
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 61), "wrapper", [], "any", false, false, false, 61), "spacing", [], "any", false, false, false, 61), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 62
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 62), "wrapper", [], "any", false, false, false, 62), "borders", [], "any", false, false, false, 62), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 63
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 63), "wrapper", [], "any", false, false, false, 63), "effects", [], "any", false, false, false, 63)], 55, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 67
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 68
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 68), "wrapper_hover", [], "any", false, false, false, 68), "background", [], "any", false, false, false, 68), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 69
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 69), "wrapper_hover", [], "any", false, false, false, 69), "layout", [], "any", false, false, false, 69), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 70
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 70), "wrapper_hover", [], "any", false, false, false, 70), "size", [], "any", false, false, false, 70), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 71
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 71), "wrapper_hover", [], "any", false, false, false, 71), "typography", [], "any", false, false, false, 71),         // line 72
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 73
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 73), "wrapper_hover", [], "any", false, false, false, 73), "spacing", [], "any", false, false, false, 73), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 74
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 74), "wrapper_hover", [], "any", false, false, false, 74), "borders", [], "any", false, false, false, 74), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 75
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 75), "wrapper_hover", [], "any", false, false, false, 75), "effects", [], "any", false, false, false, 75)], 67, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 79
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 79), "css", [], "any", false, false, false, 79);
        echo "


";
        // line 82
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 82), "hide", [], "any", false, false, false, 82)))) {
            // line 83
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 84
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 84), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 84), "hide", [], "any", false, false, false, 84))) {
                    // line 85
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 87
                    if (($context["isBuilder"] ?? null)) {
                        // line 88
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 91
                        echo "                        display: none;
                    ";
                    }
                    // line 93
                    echo "                }
            }
        ";
                }
                // line 96
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 98
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "4663d16d0f27bf5c8d3f770ab0e782cf1d1e5265";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 98,  236 => 96,  231 => 93,  227 => 91,  222 => 88,  220 => 87,  214 => 85,  211 => 84,  206 => 83,  204 => 82,  198 => 79,  191 => 75,  190 => 74,  189 => 73,  188 => 72,  187 => 71,  186 => 70,  185 => 69,  184 => 68,  183 => 67,  176 => 63,  175 => 62,  174 => 61,  173 => 60,  172 => 59,  171 => 58,  170 => 57,  169 => 56,  168 => 55,  163 => 52,  159 => 49,  153 => 47,  151 => 46,  148 => 45,  142 => 43,  140 => 42,  137 => 41,  131 => 39,  129 => 38,  126 => 37,  120 => 35,  118 => 34,  115 => 33,  109 => 31,  107 => 30,  104 => 29,  101 => 28,  97 => 26,  95 => 25,  92 => 24,  90 => 23,  87 => 22,  85 => 21,  82 => 20,  77 => 17,  75 => 16,  71 => 14,  69 => 13,  65 => 11,  62 => 10,  56 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "4663d16d0f27bf5c8d3f770ab0e782cf1d1e5265", "");
    }
}
