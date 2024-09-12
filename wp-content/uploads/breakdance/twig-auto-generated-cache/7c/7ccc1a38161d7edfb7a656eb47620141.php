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

/* 363ea52f50dff3bd2feae26fb6d68e20f34d1266 */
class __TwigTemplate_ee939e3b72937f5ccd27fa70e33074ca extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "363ea52f50dff3bd2feae26fb6d68e20f34d1266", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  width: ";
        // line 5
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 5), "width", [], "any", false, false, false, 5), "style", [], "any", false, false, false, 5);
        echo ";
  ";
        // line 6
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 6), ($context["globalSettings"] ?? null)], 6, $context, $this->getSourceContext());
        echo "
  ";
        // line 7
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 7)], 7, $context, $this->getSourceContext());
        echo "
}
";
        // line 10
        echo "

    %%SELECTOR%% {
        ";
        // line 13
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 14), "wrapper", [], "any", false, false, false, 14), "background", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 15), "wrapper", [], "any", false, false, false, 15), "layout", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 16), "wrapper", [], "any", false, false, false, 16), "size", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 17
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 17), "wrapper", [], "any", false, false, false, 17), "typography", [], "any", false, false, false, 17),         // line 18
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 19
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 19), "wrapper", [], "any", false, false, false, 19), "spacing", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 20
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 20), "wrapper", [], "any", false, false, false, 20), "borders", [], "any", false, false, false, 20), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 21
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 21), "wrapper", [], "any", false, false, false, 21), "effects", [], "any", false, false, false, 21)], 13, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 25
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 26
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 26), "wrapper_hover", [], "any", false, false, false, 26), "background", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 27
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 27), "wrapper_hover", [], "any", false, false, false, 27), "layout", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 28
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 28), "wrapper_hover", [], "any", false, false, false, 28), "size", [], "any", false, false, false, 28), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 29
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 29), "wrapper_hover", [], "any", false, false, false, 29), "typography", [], "any", false, false, false, 29),         // line 30
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 31
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 31), "wrapper_hover", [], "any", false, false, false, 31), "spacing", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 32
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 32), "wrapper_hover", [], "any", false, false, false, 32), "borders", [], "any", false, false, false, 32), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 33
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 33), "wrapper_hover", [], "any", false, false, false, 33), "effects", [], "any", false, false, false, 33)], 25, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 37
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 37), "css", [], "any", false, false, false, 37);
        echo "


";
        // line 40
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 40), "hide", [], "any", false, false, false, 40)))) {
            // line 41
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 42
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 42), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 42), "hide", [], "any", false, false, false, 42))) {
                    // line 43
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 45
                    if (($context["isBuilder"] ?? null)) {
                        // line 46
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 49
                        echo "                        display: none;
                    ";
                    }
                    // line 51
                    echo "                }
            }
        ";
                }
                // line 54
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 56
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "363ea52f50dff3bd2feae26fb6d68e20f34d1266";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 56,  132 => 54,  127 => 51,  123 => 49,  118 => 46,  116 => 45,  110 => 43,  107 => 42,  102 => 41,  100 => 40,  94 => 37,  87 => 33,  86 => 32,  85 => 31,  84 => 30,  83 => 29,  82 => 28,  81 => 27,  80 => 26,  79 => 25,  72 => 21,  71 => 20,  70 => 19,  69 => 18,  68 => 17,  67 => 16,  66 => 15,  65 => 14,  64 => 13,  59 => 10,  54 => 7,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "363ea52f50dff3bd2feae26fb6d68e20f34d1266", "");
    }
}
