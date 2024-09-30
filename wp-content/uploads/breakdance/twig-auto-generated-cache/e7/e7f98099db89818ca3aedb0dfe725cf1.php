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

/* 9498fe71433258e3e220ed66c4e1096820a6e0e1 */
class __TwigTemplate_403d6c75df265c05b4ef5712cdcd1e1b extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "9498fe71433258e3e220ed66c4e1096820a6e0e1", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
--columnCount: ";
        // line 5
        echo ($context["childElementCount"] ?? null);
        echo ";
";
        // line 6
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 6), "container", [], "any", false, false, false, 6)], 6, $context, $this->getSourceContext());
        echo "
  width: ";
        // line 7
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 7), "width", [], "any", false, false, false, 7), "style", [], "any", false, false, false, 7);
        echo ";
  ";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 8), "height", [], "any", false, false, false, 8) == "full")) {
            // line 9
            echo "    height: 100%;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 10
($context["design"] ?? null), "size", [], "any", false, false, false, 10), "height", [], "any", false, false, false, 10) == "custom")) {
            // line 11
            echo "    min-height: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 11), "min_height", [], "any", false, false, false, 11), "style", [], "any", false, false, false, 11);
            echo ";
  ";
        }
        // line 13
        echo "
  --bde-column-gap: ";
        // line 14
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 14), "column_gap", [], "any", false, false, false, 14), "style", [], "any", false, false, false, 14);
        echo ";

}

";
        // line 18
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, true, false, 18), "column_padding", [], "any", false, true, false, 18), "style", [], "any", true, true, false, 18)) {
            // line 19
            echo "  %%SELECTOR%% > div {
      padding: ";
            // line 20
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 20), "column_padding", [], "any", false, false, false, 20), "style", [], "any", false, false, false, 20);
            echo ";
  }
";
        }
        // line 23
        echo "
";
        // line 24
        if ((($context["breakpoint"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 24), "slug_cant_start_with_number_50_width", [], "any", false, false, false, 24))) {
            // line 25
            echo "  %%SELECTOR%%.bde-columns {
      flex-direction: row;
      flex-wrap: wrap;
  }

  %%SELECTOR%%.bde-columns > .bde-column {
      --column-width: 50%;
  }
";
        }
        // line 34
        echo "
";
        // line 35
        if ((($context["breakpoint"] ?? null) == ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, true, false, 35), "stack_vertically", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, true, false, 35), "stack_vertically", [], "any", false, false, false, 35), ($context["firstResponsiveBreakpointId"] ?? null))) : (($context["firstResponsiveBreakpointId"] ?? null))))) {
            // line 36
            echo "%%SELECTOR%%.bde-columns {
  flex-direction: column;
  flex-wrap: nowrap;
}

%%SELECTOR%%.bde-columns > .bde-column {
  width: 100%;
}
";
        }
        // line 45
        echo "

";
        // line 51
        if ((($context["breakpoint"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 51), "reverse_order", [], "any", false, false, false, 51))) {
            // line 52
            echo "%%SELECTOR%% > div:nth-child(1) {
    order: 10;
}
%%SELECTOR%% > div:nth-child(2) {
    order: 9;
}
%%SELECTOR%% > div:nth-child(3) {
    order: 8;
}
%%SELECTOR%% > div:nth-child(4) {
    order: 7;
}
%%SELECTOR%% > div:nth-child(5) {
    order: 6;
}
%%SELECTOR%% > div:nth-child(6) {
    order: 5;
}
%%SELECTOR%% > div:nth-child(7) {
    order: 4;
}
%%SELECTOR%% > div:nth-child(8) {
    order: 3;
}
%%SELECTOR%% > div:nth-child(9) {
    order: 2;
}
%%SELECTOR%% > div:nth-child(10) {
    order: 1;
}
";
        }
        // line 83
        echo "
";
        // line 85
        echo "

    %%SELECTOR%% {
        ";
        // line 88
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 89
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 89), "wrapper", [], "any", false, false, false, 89), "background", [], "any", false, false, false, 89), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 90
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 90), "wrapper", [], "any", false, false, false, 90), "layout", [], "any", false, false, false, 90), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 91
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 91), "wrapper", [], "any", false, false, false, 91), "size", [], "any", false, false, false, 91), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 92
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 92), "wrapper", [], "any", false, false, false, 92), "typography", [], "any", false, false, false, 92),         // line 93
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 94
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 94), "wrapper", [], "any", false, false, false, 94), "spacing", [], "any", false, false, false, 94), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 95
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 95), "wrapper", [], "any", false, false, false, 95), "borders", [], "any", false, false, false, 95), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 96
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 96), "wrapper", [], "any", false, false, false, 96), "effects", [], "any", false, false, false, 96)], 88, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 100
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 101
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 101), "wrapper_hover", [], "any", false, false, false, 101), "background", [], "any", false, false, false, 101), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 102
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 102), "wrapper_hover", [], "any", false, false, false, 102), "layout", [], "any", false, false, false, 102), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 103
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 103), "wrapper_hover", [], "any", false, false, false, 103), "size", [], "any", false, false, false, 103), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 104
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 104), "wrapper_hover", [], "any", false, false, false, 104), "typography", [], "any", false, false, false, 104),         // line 105
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 106
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 106), "wrapper_hover", [], "any", false, false, false, 106), "spacing", [], "any", false, false, false, 106), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 107
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 107), "wrapper_hover", [], "any", false, false, false, 107), "borders", [], "any", false, false, false, 107), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 108
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 108), "wrapper_hover", [], "any", false, false, false, 108), "effects", [], "any", false, false, false, 108)], 100, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 112
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 112), "css", [], "any", false, false, false, 112);
        echo "


";
        // line 115
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 115), "hide", [], "any", false, false, false, 115)))) {
            // line 116
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 117
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 117), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 117), "hide", [], "any", false, false, false, 117))) {
                    // line 118
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 120
                    if (($context["isBuilder"] ?? null)) {
                        // line 121
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 124
                        echo "                        display: none;
                    ";
                    }
                    // line 126
                    echo "                }
            }
        ";
                }
                // line 129
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 131
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "9498fe71433258e3e220ed66c4e1096820a6e0e1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 131,  239 => 129,  234 => 126,  230 => 124,  225 => 121,  223 => 120,  217 => 118,  214 => 117,  209 => 116,  207 => 115,  201 => 112,  194 => 108,  193 => 107,  192 => 106,  191 => 105,  190 => 104,  189 => 103,  188 => 102,  187 => 101,  186 => 100,  179 => 96,  178 => 95,  177 => 94,  176 => 93,  175 => 92,  174 => 91,  173 => 90,  172 => 89,  171 => 88,  166 => 85,  163 => 83,  130 => 52,  128 => 51,  124 => 45,  113 => 36,  111 => 35,  108 => 34,  97 => 25,  95 => 24,  92 => 23,  86 => 20,  83 => 19,  81 => 18,  74 => 14,  71 => 13,  65 => 11,  63 => 10,  60 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "9498fe71433258e3e220ed66c4e1096820a6e0e1", "");
    }
}
