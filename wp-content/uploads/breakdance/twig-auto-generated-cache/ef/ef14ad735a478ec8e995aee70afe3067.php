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

/* 86883e04d7649d043c0821d4e7d66912e3f89711 */
class __TwigTemplate_43cd787ccaeb2edd62f126cb0b42703e extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "86883e04d7649d043c0821d4e7d66912e3f89711", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  ";
        // line 5
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 5), "wrapper", [], "any", false, false, false, 5)], 5, $context, $this->getSourceContext());
        echo "
  ";
        // line 6
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 6), "default", [], "any", false, false, false, 6), ($context["globalSettings"] ?? null)], 6, $context, $this->getSourceContext());
        echo "
  width: ";
        // line 7
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 7), "width", [], "any", false, false, false, 7), "style", [], "any", false, false, false, 7);
        echo ";
}

%%SELECTOR%% a {
  ";
        // line 11
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 11), "link", [], "any", false, false, false, 11), ($context["globalSettings"] ?? null)], 11, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% a:hover {
  ";
        // line 15
        echo twig_call_macro($macros["macros"], "macro_typographyWithHoverableEverything", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 15), "link", [], "any", false, false, false, 15)], 15, $context, $this->getSourceContext());
        echo "
}


%%SELECTOR%% h1 {
  ";
        // line 20
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 20), "h1", [], "any", false, false, false, 20), ($context["globalSettings"] ?? null)], 20, $context, $this->getSourceContext());
        echo "
  margin-block-start: ";
        // line 21
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 21), "h1", [], "any", false, false, false, 21), "margin_block_start", [], "any", false, false, false, 21), "style", [], "any", false, false, false, 21);
        echo ";
  margin-block-end: ";
        // line 22
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 22), "h1", [], "any", false, false, false, 22), "margin_block_end", [], "any", false, false, false, 22), "style", [], "any", false, false, false, 22);
        echo ";
}

%%SELECTOR%% h2 {
  ";
        // line 26
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 26), "h2", [], "any", false, false, false, 26), ($context["globalSettings"] ?? null)], 26, $context, $this->getSourceContext());
        echo "
  margin-block-start: ";
        // line 27
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 27), "h2", [], "any", false, false, false, 27), "margin_block_start", [], "any", false, false, false, 27), "style", [], "any", false, false, false, 27);
        echo ";
  margin-block-end: ";
        // line 28
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 28), "h2", [], "any", false, false, false, 28), "margin_block_end", [], "any", false, false, false, 28), "style", [], "any", false, false, false, 28);
        echo ";
}

%%SELECTOR%% h3 {
  ";
        // line 32
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 32), "h3", [], "any", false, false, false, 32), ($context["globalSettings"] ?? null)], 32, $context, $this->getSourceContext());
        echo "
  margin-block-start: ";
        // line 33
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 33), "h3", [], "any", false, false, false, 33), "margin_block_start", [], "any", false, false, false, 33), "style", [], "any", false, false, false, 33);
        echo ";
  margin-block-end: ";
        // line 34
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 34), "h3", [], "any", false, false, false, 34), "margin_block_end", [], "any", false, false, false, 34), "style", [], "any", false, false, false, 34);
        echo ";
}

%%SELECTOR%% h4 {
  ";
        // line 38
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 38), "h4", [], "any", false, false, false, 38), ($context["globalSettings"] ?? null)], 38, $context, $this->getSourceContext());
        echo "
  margin-block-start: ";
        // line 39
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 39), "h4", [], "any", false, false, false, 39), "margin_block_start", [], "any", false, false, false, 39), "style", [], "any", false, false, false, 39);
        echo ";
  margin-block-end: ";
        // line 40
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 40), "h4", [], "any", false, false, false, 40), "margin_block_end", [], "any", false, false, false, 40), "style", [], "any", false, false, false, 40);
        echo ";
}

%%SELECTOR%% p {
  ";
        // line 44
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 44), "paragraph", [], "any", false, false, false, 44), ($context["globalSettings"] ?? null)], 44, $context, $this->getSourceContext());
        echo "
  margin-block-start: ";
        // line 45
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 45), "paragraph", [], "any", false, false, false, 45), "margin_block_start", [], "any", false, false, false, 45), "style", [], "any", false, false, false, 45);
        echo ";
  margin-block-end: ";
        // line 46
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 46), "paragraph", [], "any", false, false, false, 46), "margin_block_end", [], "any", false, false, false, 46), "style", [], "any", false, false, false, 46);
        echo ";
}

%%SELECTOR%% ul, %%SELECTOR%% ol{
  margin-block-start: ";
        // line 50
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 50), "list", [], "any", false, false, false, 50), "margin_block_start", [], "any", false, false, false, 50), "style", [], "any", false, false, false, 50);
        echo ";
  margin-block-end: ";
        // line 51
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 51), "list", [], "any", false, false, false, 51), "margin_block_end", [], "any", false, false, false, 51), "style", [], "any", false, false, false, 51);
        echo ";
  padding-inline-start: ";
        // line 52
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 52), "list", [], "any", false, false, false, 52), "padding_inline_start", [], "any", false, false, false, 52), "style", [], "any", false, false, false, 52);
        echo ";
}

%%SELECTOR%% ul, %%SELECTOR%% ul *, %%SELECTOR%% ol,  %%SELECTOR%% ol * {
  ";
        // line 56
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 56), "list", [], "any", false, false, false, 56), ($context["globalSettings"] ?? null)], 56, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% ul p, %%SELECTOR%% ol p {
  margin-block-start: ";
        // line 60
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 60), "list", [], "any", false, false, false, 60), "list_item_p", [], "any", false, false, false, 60), "margin_block_start", [], "any", false, false, false, 60), "style", [], "any", false, false, false, 60);
        echo ";
  margin-block-end: ";
        // line 61
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 61), "list", [], "any", false, false, false, 61), "list_item_p", [], "any", false, false, false, 61), "margin_block_end", [], "any", false, false, false, 61), "style", [], "any", false, false, false, 61);
        echo ";
}
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
        return "86883e04d7649d043c0821d4e7d66912e3f89711";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 110,  255 => 108,  250 => 105,  246 => 103,  241 => 100,  239 => 99,  233 => 97,  230 => 96,  225 => 95,  223 => 94,  217 => 91,  210 => 87,  209 => 86,  208 => 85,  207 => 84,  206 => 83,  205 => 82,  204 => 81,  203 => 80,  202 => 79,  195 => 75,  194 => 74,  193 => 73,  192 => 72,  191 => 71,  190 => 70,  189 => 69,  188 => 68,  187 => 67,  182 => 64,  177 => 61,  173 => 60,  166 => 56,  159 => 52,  155 => 51,  151 => 50,  144 => 46,  140 => 45,  136 => 44,  129 => 40,  125 => 39,  121 => 38,  114 => 34,  110 => 33,  106 => 32,  99 => 28,  95 => 27,  91 => 26,  84 => 22,  80 => 21,  76 => 20,  68 => 15,  61 => 11,  54 => 7,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "86883e04d7649d043c0821d4e7d66912e3f89711", "");
    }
}
