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

/* 82fb65893a0710a34d6c678f0bebf043ac147331 */
class __TwigTemplate_bf63f0717984dec4348643014135dee8 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "82fb65893a0710a34d6c678f0bebf043ac147331", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  ";
        // line 5
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 5)], 5, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%%, %%SELECTOR%% > * {
  ";
        // line 9
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 9), ($context["globalSettings"] ?? null)], 9, $context, $this->getSourceContext());
        echo "  
}

%%SELECTOR%%:hover, %%SELECTOR%%:hover > * {
  ";
        // line 13
        echo twig_call_macro($macros["macros"], "macro_typographyWithHoverableEverything", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 13)], 13, $context, $this->getSourceContext());
        echo "
}

%SELECTOR%%

";
        // line 18
        echo twig_call_macro($macros["macros"], "macro_atomV1LightboxCss", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "lightbox", [], "any", false, false, false, 18)], 18, $context, $this->getSourceContext());
        echo "

";
        // line 21
        echo "

    %%SELECTOR%% {
        ";
        // line 24
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 25
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 25), "wrapper", [], "any", false, false, false, 25), "background", [], "any", false, false, false, 25), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 26
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 26), "wrapper", [], "any", false, false, false, 26), "layout", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 27
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 27), "wrapper", [], "any", false, false, false, 27), "size", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 28
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 28), "wrapper", [], "any", false, false, false, 28), "typography", [], "any", false, false, false, 28),         // line 29
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 30
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 30), "wrapper", [], "any", false, false, false, 30), "spacing", [], "any", false, false, false, 30), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 31
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 31), "wrapper", [], "any", false, false, false, 31), "borders", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 32
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 32), "wrapper", [], "any", false, false, false, 32), "effects", [], "any", false, false, false, 32)], 24, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 36
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 37
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 37), "wrapper_hover", [], "any", false, false, false, 37), "background", [], "any", false, false, false, 37), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 38
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 38), "wrapper_hover", [], "any", false, false, false, 38), "layout", [], "any", false, false, false, 38), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 39
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 39), "wrapper_hover", [], "any", false, false, false, 39), "size", [], "any", false, false, false, 39), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 40
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 40), "wrapper_hover", [], "any", false, false, false, 40), "typography", [], "any", false, false, false, 40),         // line 41
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 42
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 42), "wrapper_hover", [], "any", false, false, false, 42), "spacing", [], "any", false, false, false, 42), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 43
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 43), "wrapper_hover", [], "any", false, false, false, 43), "borders", [], "any", false, false, false, 43), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 44
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 44), "wrapper_hover", [], "any", false, false, false, 44), "effects", [], "any", false, false, false, 44)], 36, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 48
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 48), "css", [], "any", false, false, false, 48);
        echo "


";
        // line 51
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 51), "hide", [], "any", false, false, false, 51)))) {
            // line 52
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 53
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 53), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 53), "hide", [], "any", false, false, false, 53))) {
                    // line 54
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 56
                    if (($context["isBuilder"] ?? null)) {
                        // line 57
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 60
                        echo "                        display: none;
                    ";
                    }
                    // line 62
                    echo "                }
            }
        ";
                }
                // line 65
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 67
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "82fb65893a0710a34d6c678f0bebf043ac147331";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 67,  146 => 65,  141 => 62,  137 => 60,  132 => 57,  130 => 56,  124 => 54,  121 => 53,  116 => 52,  114 => 51,  108 => 48,  101 => 44,  100 => 43,  99 => 42,  98 => 41,  97 => 40,  96 => 39,  95 => 38,  94 => 37,  93 => 36,  86 => 32,  85 => 31,  84 => 30,  83 => 29,  82 => 28,  81 => 27,  80 => 26,  79 => 25,  78 => 24,  73 => 21,  68 => 18,  60 => 13,  53 => 9,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "82fb65893a0710a34d6c678f0bebf043ac147331", "");
    }
}
