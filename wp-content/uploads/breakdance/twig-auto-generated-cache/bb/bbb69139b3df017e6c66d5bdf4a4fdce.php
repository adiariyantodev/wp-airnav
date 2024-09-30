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

/* c6ec4220f2edc29fbd61fcc19a9aaf8db45b2989 */
class __TwigTemplate_32c8d3b5acc556f828540f6a85f74680 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "c6ec4220f2edc29fbd61fcc19a9aaf8db45b2989", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  --column-width: ";
        // line 5
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 5), "width", [], "any", false, false, false, 5), "style", [], "any", false, false, false, 5);
        echo ";

  order: ";
        // line 7
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "order", [], "any", false, false, false, 7), "order", [], "any", false, false, false, 7);
        echo ";

  ";
        // line 9
        echo twig_call_macro($macros["macros"], "macro_simpleLayout", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 9), ($context["breakpoint"] ?? null)], 9, $context, $this->getSourceContext());
        echo "

  ";
        // line 11
        echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 11)], 11, $context, $this->getSourceContext());
        echo "

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
        echo "  
   min-height: ";
        // line 20
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 20), "min_height", [], "any", false, false, false, 20), "style", [], "any", false, false, false, 20);
        echo ";
}

";
        // line 23
        echo twig_call_macro($macros["macros"], "macro_fancyBackgroundCss", ["%%SELECTOR%%", twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 23), ($context["breakpoint"] ?? null), false, true], 23, $context, $this->getSourceContext());
        echo "

%%SELECTOR%%.bde-column {
  ";
        // line 26
        echo twig_call_macro($macros["macros"], "macro_spacing_padding_all", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 26)], 26, $context, $this->getSourceContext());
        echo "
}

";
        // line 29
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 29), "headings", [], "any", false, false, false, 29)) {
            // line 30
            echo "  %%SELECTOR%% h1, %%SELECTOR%% h2, %%SELECTOR%% h3, %%SELECTOR%% h4, %%SELECTOR%% h5, %%SELECTOR%% h6 {
    color: ";
            // line 31
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 31), "headings", [], "any", false, false, false, 31);
            echo ";
  }
";
        }
        // line 34
        echo "
";
        // line 35
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 35), "link", [], "any", false, false, false, 35)) {
            // line 36
            echo "  %%SELECTOR%% a {
    color: ";
            // line 37
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 37), "link", [], "any", false, false, false, 37);
            echo ";
  }
";
        }
        // line 40
        echo "
";
        // line 41
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 41), "link_hover", [], "any", false, false, false, 41)) {
            // line 42
            echo "  %%SELECTOR%% a:hover {
    color: ";
            // line 43
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 43), "link_hover", [], "any", false, false, false, 43);
            echo ";
  }
";
        }
        // line 46
        echo "
";
        // line 48
        echo "

    %%SELECTOR%% {
        ";
        // line 51
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 52
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 52), "wrapper", [], "any", false, false, false, 52), "background", [], "any", false, false, false, 52), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 53
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 53), "wrapper", [], "any", false, false, false, 53), "layout", [], "any", false, false, false, 53), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 54
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 54), "wrapper", [], "any", false, false, false, 54), "size", [], "any", false, false, false, 54), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 55
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 55), "wrapper", [], "any", false, false, false, 55), "typography", [], "any", false, false, false, 55),         // line 56
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 57
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 57), "wrapper", [], "any", false, false, false, 57), "spacing", [], "any", false, false, false, 57), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 58
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 58), "wrapper", [], "any", false, false, false, 58), "borders", [], "any", false, false, false, 58), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 59
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 59), "wrapper", [], "any", false, false, false, 59), "effects", [], "any", false, false, false, 59)], 51, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 63
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 64
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 64), "wrapper_hover", [], "any", false, false, false, 64), "background", [], "any", false, false, false, 64), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 65
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 65), "wrapper_hover", [], "any", false, false, false, 65), "layout", [], "any", false, false, false, 65), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 66
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 66), "wrapper_hover", [], "any", false, false, false, 66), "size", [], "any", false, false, false, 66), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 67
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 67), "wrapper_hover", [], "any", false, false, false, 67), "typography", [], "any", false, false, false, 67),         // line 68
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 69
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 69), "wrapper_hover", [], "any", false, false, false, 69), "spacing", [], "any", false, false, false, 69), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 70
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 70), "wrapper_hover", [], "any", false, false, false, 70), "borders", [], "any", false, false, false, 70), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 71
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 71), "wrapper_hover", [], "any", false, false, false, 71), "effects", [], "any", false, false, false, 71)], 63, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 75
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 75), "css", [], "any", false, false, false, 75);
        echo "


";
        // line 78
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 78), "hide", [], "any", false, false, false, 78)))) {
            // line 79
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 80
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 80), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 80), "hide", [], "any", false, false, false, 80))) {
                    // line 81
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 83
                    if (($context["isBuilder"] ?? null)) {
                        // line 84
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 87
                        echo "                        display: none;
                    ";
                    }
                    // line 89
                    echo "                }
            }
        ";
                }
                // line 92
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 94
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "c6ec4220f2edc29fbd61fcc19a9aaf8db45b2989";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 94,  219 => 92,  214 => 89,  210 => 87,  205 => 84,  203 => 83,  197 => 81,  194 => 80,  189 => 79,  187 => 78,  181 => 75,  174 => 71,  173 => 70,  172 => 69,  171 => 68,  170 => 67,  169 => 66,  168 => 65,  167 => 64,  166 => 63,  159 => 59,  158 => 58,  157 => 57,  156 => 56,  155 => 55,  154 => 54,  153 => 53,  152 => 52,  151 => 51,  146 => 48,  143 => 46,  137 => 43,  134 => 42,  132 => 41,  129 => 40,  123 => 37,  120 => 36,  118 => 35,  115 => 34,  109 => 31,  106 => 30,  104 => 29,  98 => 26,  92 => 23,  86 => 20,  83 => 19,  77 => 17,  74 => 16,  68 => 14,  66 => 13,  61 => 11,  56 => 9,  51 => 7,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "c6ec4220f2edc29fbd61fcc19a9aaf8db45b2989", "");
    }
}
