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

/* 8311c12f78ea4cbadceb92ab3840b3b058ee5a1a */
class __TwigTemplate_9cb5eeb018e925d3e83ef2c3680839a6 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "8311c12f78ea4cbadceb92ab3840b3b058ee5a1a", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  ";
        // line 5
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 5)], 5, $context, $this->getSourceContext());
        echo "
}

";
        // line 8
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 8), "style", [], "any", false, false, false, 8) == "custom") && (($context["breakpoint"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 8), "custom", [], "any", false, false, false, 8), "size", [], "any", false, false, false, 8), "full_width_at", [], "any", false, false, false, 8)))) {
            // line 9
            echo "%%SELECTOR%% {
  width: 100%;
}
";
        }
        // line 13
        echo "
";
        // line 14
        echo twig_call_macro($macros["macros"], "macro_atomV1ButtonCss", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 14), "bde-button__button", "%%SELECTOR%%", ($context["breakpoint"] ?? null), ($context["globalSettings"] ?? null)], 14, $context, $this->getSourceContext());
        echo "
";
        // line 15
        echo twig_call_macro($macros["macros"], "macro_atomV1LightboxCss", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "lightbox", [], "any", false, false, false, 15)], 15, $context, $this->getSourceContext());
        echo "

";
        // line 18
        echo "

    %%SELECTOR%% {
        ";
        // line 21
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 22
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 22), "wrapper", [], "any", false, false, false, 22), "background", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 23
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 23), "wrapper", [], "any", false, false, false, 23), "layout", [], "any", false, false, false, 23), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 24
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 24), "wrapper", [], "any", false, false, false, 24), "size", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 25
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 25), "wrapper", [], "any", false, false, false, 25), "typography", [], "any", false, false, false, 25),         // line 26
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 27
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 27), "wrapper", [], "any", false, false, false, 27), "spacing", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 28
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 28), "wrapper", [], "any", false, false, false, 28), "borders", [], "any", false, false, false, 28), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 29
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 29), "wrapper", [], "any", false, false, false, 29), "effects", [], "any", false, false, false, 29)], 21, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 33
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 34
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 34), "wrapper_hover", [], "any", false, false, false, 34), "background", [], "any", false, false, false, 34), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 35
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 35), "wrapper_hover", [], "any", false, false, false, 35), "layout", [], "any", false, false, false, 35), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 36
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 36), "wrapper_hover", [], "any", false, false, false, 36), "size", [], "any", false, false, false, 36), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 37
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 37), "wrapper_hover", [], "any", false, false, false, 37), "typography", [], "any", false, false, false, 37),         // line 38
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 39
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 39), "wrapper_hover", [], "any", false, false, false, 39), "spacing", [], "any", false, false, false, 39), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 40
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 40), "wrapper_hover", [], "any", false, false, false, 40), "borders", [], "any", false, false, false, 40), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 41
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 41), "wrapper_hover", [], "any", false, false, false, 41), "effects", [], "any", false, false, false, 41)], 33, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 45
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 45), "css", [], "any", false, false, false, 45);
        echo "


";
        // line 48
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 48), "hide", [], "any", false, false, false, 48)))) {
            // line 49
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 50
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 50), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 50), "hide", [], "any", false, false, false, 50))) {
                    // line 51
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 53
                    if (($context["isBuilder"] ?? null)) {
                        // line 54
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 57
                        echo "                        display: none;
                    ";
                    }
                    // line 59
                    echo "                }
            }
        ";
                }
                // line 62
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 64
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "8311c12f78ea4cbadceb92ab3840b3b058ee5a1a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 64,  145 => 62,  140 => 59,  136 => 57,  131 => 54,  129 => 53,  123 => 51,  120 => 50,  115 => 49,  113 => 48,  107 => 45,  100 => 41,  99 => 40,  98 => 39,  97 => 38,  96 => 37,  95 => 36,  94 => 35,  93 => 34,  92 => 33,  85 => 29,  84 => 28,  83 => 27,  82 => 26,  81 => 25,  80 => 24,  79 => 23,  78 => 22,  77 => 21,  72 => 18,  67 => 15,  63 => 14,  60 => 13,  54 => 9,  52 => 8,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "8311c12f78ea4cbadceb92ab3840b3b058ee5a1a", "");
    }
}
