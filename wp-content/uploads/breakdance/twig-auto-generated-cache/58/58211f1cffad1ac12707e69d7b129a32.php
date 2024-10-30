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

/* 85228e269982d3246ace0ca2e48648b2438b3db3 */
class __TwigTemplate_6ba3fe68bc6ed5ab5c03a48c1a83bb6f extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "85228e269982d3246ace0ca2e48648b2438b3db3", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  ";
        // line 5
        echo twig_call_macro($macros["macros"], "macro_formContainer", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 5)], 5, $context, $this->getSourceContext());
        echo "
  ";
        // line 6
        echo twig_call_macro($macros["macros"], "macro_spacing_padding_all", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 6), "padding", [], "any", false, false, false, 6)], 6, $context, $this->getSourceContext());
        echo "
  ";
        // line 7
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 7)], 7, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .comment-reply-title {
  ";
        // line 11
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 11), "title", [], "any", false, false, false, 11), ($context["globalSettings"] ?? null)], 11, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .required-field-message, %%SELECTOR%% .comment-notes {
  ";
        // line 15
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 15), "text", [], "any", false, false, false, 15), ($context["globalSettings"] ?? null)], 15, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .comment-respond a  {
  ";
        // line 19
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 19), "links", [], "any", false, false, false, 19), ($context["globalSettings"] ?? null)], 19, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .comment-respond a:hover  {
  ";
        // line 23
        echo twig_call_macro($macros["macros"], "macro_typographyWithHoverableEverything", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 23), "links", [], "any", false, false, false, 23)], 23, $context, $this->getSourceContext());
        echo "
}

";
        // line 26
        echo twig_call_macro($macros["macros"], "macro_atomV1ButtonButton", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 26), "submit_button", [], "any", false, false, false, 26), "styles", [], "any", false, false, false, 26), "%%SELECTOR%% .comment-form__submit", "primary", ($context["breakpoint"] ?? null), ($context["globalSettings"] ?? null)], 26, $context, $this->getSourceContext());
        echo "

";
        // line 28
        echo twig_call_macro($macros["macros"], "macro_atomV1FormCss", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 28), "%%SELECTOR%%", ($context["breakpoint"] ?? null), ($context["globalSettings"] ?? null)], 28, $context, $this->getSourceContext());
        echo "

";
        // line 31
        echo "

    %%SELECTOR%% {
        ";
        // line 34
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 35
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 35), "wrapper", [], "any", false, false, false, 35), "background", [], "any", false, false, false, 35), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 36
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 36), "wrapper", [], "any", false, false, false, 36), "layout", [], "any", false, false, false, 36), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 37
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 37), "wrapper", [], "any", false, false, false, 37), "size", [], "any", false, false, false, 37), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 38
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 38), "wrapper", [], "any", false, false, false, 38), "typography", [], "any", false, false, false, 38),         // line 39
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 40
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 40), "wrapper", [], "any", false, false, false, 40), "spacing", [], "any", false, false, false, 40), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 41
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 41), "wrapper", [], "any", false, false, false, 41), "borders", [], "any", false, false, false, 41), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 42
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 42), "wrapper", [], "any", false, false, false, 42), "effects", [], "any", false, false, false, 42)], 34, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 46
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 47
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 47), "wrapper_hover", [], "any", false, false, false, 47), "background", [], "any", false, false, false, 47), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 48
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 48), "wrapper_hover", [], "any", false, false, false, 48), "layout", [], "any", false, false, false, 48), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 49
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 49), "wrapper_hover", [], "any", false, false, false, 49), "size", [], "any", false, false, false, 49), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 50
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 50), "wrapper_hover", [], "any", false, false, false, 50), "typography", [], "any", false, false, false, 50),         // line 51
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 52
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 52), "wrapper_hover", [], "any", false, false, false, 52), "spacing", [], "any", false, false, false, 52), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 53
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 53), "wrapper_hover", [], "any", false, false, false, 53), "borders", [], "any", false, false, false, 53), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 54
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 54), "wrapper_hover", [], "any", false, false, false, 54), "effects", [], "any", false, false, false, 54)], 46, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 58
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 58), "css", [], "any", false, false, false, 58);
        echo "


";
        // line 61
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 61), "hide", [], "any", false, false, false, 61)))) {
            // line 62
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 63
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 63), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 63), "hide", [], "any", false, false, false, 63))) {
                    // line 64
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 66
                    if (($context["isBuilder"] ?? null)) {
                        // line 67
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 70
                        echo "                        display: none;
                    ";
                    }
                    // line 72
                    echo "                }
            }
        ";
                }
                // line 75
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 77
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "85228e269982d3246ace0ca2e48648b2438b3db3";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 77,  171 => 75,  166 => 72,  162 => 70,  157 => 67,  155 => 66,  149 => 64,  146 => 63,  141 => 62,  139 => 61,  133 => 58,  126 => 54,  125 => 53,  124 => 52,  123 => 51,  122 => 50,  121 => 49,  120 => 48,  119 => 47,  118 => 46,  111 => 42,  110 => 41,  109 => 40,  108 => 39,  107 => 38,  106 => 37,  105 => 36,  104 => 35,  103 => 34,  98 => 31,  93 => 28,  88 => 26,  82 => 23,  75 => 19,  68 => 15,  61 => 11,  54 => 7,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "85228e269982d3246ace0ca2e48648b2438b3db3", "");
    }
}
