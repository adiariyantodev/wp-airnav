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

/* 657928b98514265dfcb284f8042f199362207b86 */
class __TwigTemplate_83491e4369835198ad8fcc843e2a27bf extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "657928b98514265dfcb284f8042f199362207b86", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  
  ";
        // line 6
        echo twig_call_macro($macros["macros"], "macro_simpleLayout", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 6), ($context["breakpoint"] ?? null)], 6, $context, $this->getSourceContext());
        echo "
  
  width: ";
        // line 8
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "wrapper", [], "any", false, false, false, 8), "width", [], "any", false, false, false, 8), "style", [], "any", false, false, false, 8);
        echo ";
  
  ";
        // line 10
        echo twig_call_macro($macros["macros"], "macro_backgroundColor", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "wrapper", [], "any", false, false, false, 10), "background", [], "any", false, false, false, 10)], 10, $context, $this->getSourceContext());
        echo "
  ";
        // line 11
        echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "wrapper", [], "any", false, false, false, 11), "borders", [], "any", false, false, false, 11)], 11, $context, $this->getSourceContext());
        echo "
  ";
        // line 12
        echo twig_call_macro($macros["macros"], "macro_spacing_padding_all", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "wrapper", [], "any", false, false, false, 12), "padding", [], "any", false, false, false, 12)], 12, $context, $this->getSourceContext());
        echo "
  ";
        // line 13
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 13), ($context["globalSettings"] ?? null)], 13, $context, $this->getSourceContext());
        echo "
  ";
        // line 14
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 14)], 14, $context, $this->getSourceContext());
        echo "
  
}

";
        // line 18
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 18), "css_code", [], "any", false, false, false, 18);
        echo "
";
        // line 20
        echo "

    %%SELECTOR%% {
        ";
        // line 23
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 24
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 24), "wrapper", [], "any", false, false, false, 24), "background", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 25
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 25), "wrapper", [], "any", false, false, false, 25), "layout", [], "any", false, false, false, 25), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 26
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 26), "wrapper", [], "any", false, false, false, 26), "size", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 27
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 27), "wrapper", [], "any", false, false, false, 27), "typography", [], "any", false, false, false, 27),         // line 28
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 29
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 29), "wrapper", [], "any", false, false, false, 29), "spacing", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 30
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 30), "wrapper", [], "any", false, false, false, 30), "borders", [], "any", false, false, false, 30), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 31
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 31), "wrapper", [], "any", false, false, false, 31), "effects", [], "any", false, false, false, 31)], 23, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 35
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 36
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 36), "wrapper_hover", [], "any", false, false, false, 36), "background", [], "any", false, false, false, 36), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 37
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 37), "wrapper_hover", [], "any", false, false, false, 37), "layout", [], "any", false, false, false, 37), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 38
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 38), "wrapper_hover", [], "any", false, false, false, 38), "size", [], "any", false, false, false, 38), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 39
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 39), "wrapper_hover", [], "any", false, false, false, 39), "typography", [], "any", false, false, false, 39),         // line 40
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 41
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 41), "wrapper_hover", [], "any", false, false, false, 41), "spacing", [], "any", false, false, false, 41), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 42
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 42), "wrapper_hover", [], "any", false, false, false, 42), "borders", [], "any", false, false, false, 42), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 43
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 43), "wrapper_hover", [], "any", false, false, false, 43), "effects", [], "any", false, false, false, 43)], 35, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 47
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 47), "css", [], "any", false, false, false, 47);
        echo "


";
        // line 50
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 50), "hide", [], "any", false, false, false, 50)))) {
            // line 51
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 52
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 52), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 52), "hide", [], "any", false, false, false, 52))) {
                    // line 53
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 55
                    if (($context["isBuilder"] ?? null)) {
                        // line 56
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 59
                        echo "                        display: none;
                    ";
                    }
                    // line 61
                    echo "                }
            }
        ";
                }
                // line 64
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 66
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "657928b98514265dfcb284f8042f199362207b86";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 66,  157 => 64,  152 => 61,  148 => 59,  143 => 56,  141 => 55,  135 => 53,  132 => 52,  127 => 51,  125 => 50,  119 => 47,  112 => 43,  111 => 42,  110 => 41,  109 => 40,  108 => 39,  107 => 38,  106 => 37,  105 => 36,  104 => 35,  97 => 31,  96 => 30,  95 => 29,  94 => 28,  93 => 27,  92 => 26,  91 => 25,  90 => 24,  89 => 23,  84 => 20,  80 => 18,  73 => 14,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  52 => 8,  47 => 6,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "657928b98514265dfcb284f8042f199362207b86", "");
    }
}
