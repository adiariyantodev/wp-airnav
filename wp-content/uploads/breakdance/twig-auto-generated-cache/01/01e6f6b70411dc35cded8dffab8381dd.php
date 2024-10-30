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

/* df202a88d9a942fafcf253363bbe3bc14e2e1ec4 */
class __TwigTemplate_c6777383d4b5f50537c2d2385aa22152 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "df202a88d9a942fafcf253363bbe3bc14e2e1ec4", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%%  {
  text-align: ";
        // line 5
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "wrapper", [], "any", false, false, false, 5), "content_alignment", [], "any", false, false, false, 5);
        echo ";
  width: ";
        // line 6
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "wrapper", [], "any", false, false, false, 6), "width", [], "any", false, false, false, 6), "style", [], "any", false, false, false, 6);
        echo ";
  ";
        // line 7
        echo twig_call_macro($macros["macros"], "macro_spacing_padding_all", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "wrapper", [], "any", false, false, false, 7), "padding", [], "any", false, false, false, 7)], 7, $context, $this->getSourceContext());
        echo "
  ";
        // line 8
        echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "wrapper", [], "any", false, false, false, 8), "borders", [], "any", false, false, false, 8)], 8, $context, $this->getSourceContext());
        echo "
  ";
        // line 9
        echo twig_call_macro($macros["macros"], "macro_backgroundColor", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "wrapper", [], "any", false, false, false, 9), "background", [], "any", false, false, false, 9)], 9, $context, $this->getSourceContext());
        echo "
  ";
        // line 10
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 10), "wrapper", [], "any", false, false, false, 10)], 10, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .bde-simple-counter__number {
  ";
        // line 14
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 14), "number", [], "any", false, false, false, 14), ($context["globalSettings"] ?? null)], 14, $context, $this->getSourceContext());
        echo "
  margin-bottom: ";
        // line 15
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 15), "below_number", [], "any", false, false, false, 15), "style", [], "any", false, false, false, 15);
        echo ";
  gap: ";
        // line 16
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 16), "around_number", [], "any", false, false, false, 16), "style", [], "any", false, false, false, 16);
        echo ";
}

%%SELECTOR%% .bde-simple-counter__prefix {
  ";
        // line 20
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 20), "prefix", [], "any", false, false, false, 20), ($context["globalSettings"] ?? null)], 20, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .bde-simple-counter__suffix {
  ";
        // line 24
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 24), "suffix", [], "any", false, false, false, 24), ($context["globalSettings"] ?? null)], 24, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .bde-simple-counter__title {
  ";
        // line 28
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 28), "title", [], "any", false, false, false, 28), ($context["globalSettings"] ?? null)], 28, $context, $this->getSourceContext());
        echo "
}

";
        // line 32
        echo "

    %%SELECTOR%% {
        ";
        // line 35
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 36
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 36), "wrapper", [], "any", false, false, false, 36), "background", [], "any", false, false, false, 36), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 37
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 37), "wrapper", [], "any", false, false, false, 37), "layout", [], "any", false, false, false, 37), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 38
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 38), "wrapper", [], "any", false, false, false, 38), "size", [], "any", false, false, false, 38), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 39
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 39), "wrapper", [], "any", false, false, false, 39), "typography", [], "any", false, false, false, 39),         // line 40
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 41
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 41), "wrapper", [], "any", false, false, false, 41), "spacing", [], "any", false, false, false, 41), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 42
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 42), "wrapper", [], "any", false, false, false, 42), "borders", [], "any", false, false, false, 42), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 43
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 43), "wrapper", [], "any", false, false, false, 43), "effects", [], "any", false, false, false, 43)], 35, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 47
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 48
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 48), "wrapper_hover", [], "any", false, false, false, 48), "background", [], "any", false, false, false, 48), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 49
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 49), "wrapper_hover", [], "any", false, false, false, 49), "layout", [], "any", false, false, false, 49), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 50
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 50), "wrapper_hover", [], "any", false, false, false, 50), "size", [], "any", false, false, false, 50), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 51
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 51), "wrapper_hover", [], "any", false, false, false, 51), "typography", [], "any", false, false, false, 51),         // line 52
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 53
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 53), "wrapper_hover", [], "any", false, false, false, 53), "spacing", [], "any", false, false, false, 53), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 54
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 54), "wrapper_hover", [], "any", false, false, false, 54), "borders", [], "any", false, false, false, 54), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 55
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 55), "wrapper_hover", [], "any", false, false, false, 55), "effects", [], "any", false, false, false, 55)], 47, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 59
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 59), "css", [], "any", false, false, false, 59);
        echo "


";
        // line 62
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 62), "hide", [], "any", false, false, false, 62)))) {
            // line 63
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 64
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 64), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 64), "hide", [], "any", false, false, false, 64))) {
                    // line 65
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 67
                    if (($context["isBuilder"] ?? null)) {
                        // line 68
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 71
                        echo "                        display: none;
                    ";
                    }
                    // line 73
                    echo "                }
            }
        ";
                }
                // line 76
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 78
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "df202a88d9a942fafcf253363bbe3bc14e2e1ec4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 78,  181 => 76,  176 => 73,  172 => 71,  167 => 68,  165 => 67,  159 => 65,  156 => 64,  151 => 63,  149 => 62,  143 => 59,  136 => 55,  135 => 54,  134 => 53,  133 => 52,  132 => 51,  131 => 50,  130 => 49,  129 => 48,  128 => 47,  121 => 43,  120 => 42,  119 => 41,  118 => 40,  117 => 39,  116 => 38,  115 => 37,  114 => 36,  113 => 35,  108 => 32,  102 => 28,  95 => 24,  88 => 20,  81 => 16,  77 => 15,  73 => 14,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "df202a88d9a942fafcf253363bbe3bc14e2e1ec4", "");
    }
}
