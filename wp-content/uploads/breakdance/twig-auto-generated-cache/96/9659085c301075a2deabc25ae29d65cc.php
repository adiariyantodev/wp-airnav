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

/* 009f71a3e720a4ff78070b667e009059029e67a4 */
class __TwigTemplate_89c38fb5be95b40e27f2953796543628 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "009f71a3e720a4ff78070b667e009059029e67a4", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  ";
        // line 5
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 5), "container", [], "any", false, false, false, 5)], 5, $context, $this->getSourceContext());
        echo "
  width: ";
        // line 6
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 6), "width", [], "any", false, false, false, 6), "style", [], "any", false, false, false, 6);
        echo ";
}

%%SELECTOR%% .comments-list {
 gap: ";
        // line 10
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 10), "comment", [], "any", false, false, false, 10), "space_between", [], "any", false, false, false, 10), "style", [], "any", false, false, false, 10);
        echo ";
}


%%SELECTOR%% .comments-list__avatar .avatar {
  width: ";
        // line 15
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "comment", [], "any", false, false, false, 15), "avatar", [], "any", false, false, false, 15), "size", [], "any", false, false, false, 15), "style", [], "any", false, false, false, 15);
        echo ";
  height: ";
        // line 16
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "comment", [], "any", false, false, false, 16), "avatar", [], "any", false, false, false, 16), "size", [], "any", false, false, false, 16), "style", [], "any", false, false, false, 16);
        echo ";
  border-radius: 50%;
  ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "comment", [], "any", false, false, false, 18), "avatar", [], "any", false, false, false, 18), "corners", [], "any", false, false, false, 18) == "custom")) {
            // line 19
            echo "     border-radius: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "comment", [], "any", false, false, false, 19), "avatar", [], "any", false, false, false, 19), "radius", [], "any", false, false, false, 19), "style", [], "any", false, false, false, 19);
            echo ";
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 20
($context["design"] ?? null), "comment", [], "any", false, false, false, 20), "avatar", [], "any", false, false, false, 20), "corners", [], "any", false, false, false, 20) == "square")) {
            // line 21
            echo "    border-radius: 0;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 22
($context["design"] ?? null), "comment", [], "any", false, false, false, 22), "avatar", [], "any", false, false, false, 22), "corners", [], "any", false, false, false, 22) == "round")) {
            // line 23
            echo "    border-radius: 8px;
  ";
        }
        // line 25
        echo "}

%%SELECTOR%% .comments-list__avatar {
  flex-basis: ";
        // line 28
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "comment", [], "any", false, false, false, 28), "avatar", [], "any", false, false, false, 28), "size", [], "any", false, false, false, 28), "style", [], "any", false, false, false, 28);
        echo ";
  ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "comment", [], "any", false, false, false, 29), "avatar", [], "any", false, false, false, 29), "hide", [], "any", false, false, false, 29)) {
            // line 30
            echo "\tdisplay: none;
  ";
        }
        // line 32
        echo "}

   

%%SELECTOR%% .comments-list__item {
 ";
        // line 37
        echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "comment", [], "any", false, false, false, 37), "borders", [], "any", false, false, false, 37)], 37, $context, $this->getSourceContext());
        echo "
 ";
        // line 38
        echo twig_call_macro($macros["macros"], "macro_spacing_padding_all", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "comment", [], "any", false, false, false, 38), "padding", [], "any", false, false, false, 38)], 38, $context, $this->getSourceContext());
        echo "
 background-color: ";
        // line 39
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "comment", [], "any", false, false, false, 39), "background", [], "any", false, false, false, 39);
        echo ";
}

%%SELECTOR%% .comments-list__author-name {
  ";
        // line 43
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), ($context["globalSettings"] ?? null)], 43, $context, $this->getSourceContext());
        echo "
  margin-bottom: ";
        // line 44
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 44), "comment", [], "any", false, false, false, 44), "after_name", [], "any", false, false, false, 44), "style", [], "any", false, false, false, 44);
        echo ";
}

%%SELECTOR%% .comments-list__header {
  margin-bottom: ";
        // line 48
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 48), "comment", [], "any", false, false, false, 48), "after_date", [], "any", false, false, false, 48), "style", [], "any", false, false, false, 48);
        echo ";
}

%%SELECTOR%% .comments-list__entry {
  margin-bottom: ";
        // line 52
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 52), "comment", [], "any", false, false, false, 52), "after_comment", [], "any", false, false, false, 52), "style", [], "any", false, false, false, 52);
        echo ";
}

%%SELECTOR%% .comments-list__body,
%%SELECTOR%% .comments-list__header {
  gap: ";
        // line 57
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 57), "comment", [], "any", false, false, false, 57), "after_avatar", [], "any", false, false, false, 57), "style", [], "any", false, false, false, 57);
        echo ";
}

%%SELECTOR%% .comments-list__metadata {
  ";
        // line 61
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 61), "date", [], "any", false, false, false, 61), ($context["globalSettings"] ?? null)], 61, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .comments-list__metadata a {
  ";
        // line 65
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 65), "links", [], "any", false, false, false, 65), ($context["globalSettings"] ?? null)], 65, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .comments-list__text p {
  ";
        // line 69
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 69), "comment", [], "any", false, false, false, 69), ($context["globalSettings"] ?? null)], 69, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .comments-list .children {
  margin-left: ";
        // line 73
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 73), "comment", [], "any", false, false, false, 73), "space_between", [], "any", false, false, false, 73), "style", [], "any", false, false, false, 73);
        echo ";
}

%%SELECTOR%% .comments-list__arrow {
  width: ";
        // line 77
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "comment", [], "any", false, false, false, 77), "arrow", [], "any", false, false, false, 77), "size", [], "any", false, false, false, 77), "style", [], "any", false, false, false, 77);
        echo ";
  height: ";
        // line 78
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "comment", [], "any", false, false, false, 78), "arrow", [], "any", false, false, false, 78), "size", [], "any", false, false, false, 78), "style", [], "any", false, false, false, 78);
        echo ";
  color: ";
        // line 79
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "comment", [], "any", false, false, false, 79), "arrow", [], "any", false, false, false, 79), "color", [], "any", false, false, false, 79);
        echo ";
  
  ";
        // line 81
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "comment", [], "any", false, false, false, 81), "arrow", [], "any", false, false, false, 81), "disable", [], "any", false, false, false, 81)) {
            // line 82
            echo "  \tdisplay: none !important;
  ";
        }
        // line 84
        echo "}

%%SELECTOR%% .comments-list__avatar {
  gap: ";
        // line 87
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "comment", [], "any", false, false, false, 87), "arrow", [], "any", false, false, false, 87), "space_after", [], "any", false, false, false, 87), "style", [], "any", false, false, false, 87);
        echo ";
}









   
    

";
        // line 102
        echo "

    %%SELECTOR%% {
        ";
        // line 105
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 106
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 106), "wrapper", [], "any", false, false, false, 106), "background", [], "any", false, false, false, 106), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 107
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 107), "wrapper", [], "any", false, false, false, 107), "layout", [], "any", false, false, false, 107), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 108
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 108), "wrapper", [], "any", false, false, false, 108), "size", [], "any", false, false, false, 108), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 109
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 109), "wrapper", [], "any", false, false, false, 109), "typography", [], "any", false, false, false, 109),         // line 110
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 111
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 111), "wrapper", [], "any", false, false, false, 111), "spacing", [], "any", false, false, false, 111), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 112
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 112), "wrapper", [], "any", false, false, false, 112), "borders", [], "any", false, false, false, 112), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 113
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 113), "wrapper", [], "any", false, false, false, 113), "effects", [], "any", false, false, false, 113)], 105, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 117
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 118
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 118), "wrapper_hover", [], "any", false, false, false, 118), "background", [], "any", false, false, false, 118), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 119
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 119), "wrapper_hover", [], "any", false, false, false, 119), "layout", [], "any", false, false, false, 119), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 120
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 120), "wrapper_hover", [], "any", false, false, false, 120), "size", [], "any", false, false, false, 120), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 121
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 121), "wrapper_hover", [], "any", false, false, false, 121), "typography", [], "any", false, false, false, 121),         // line 122
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 123
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 123), "wrapper_hover", [], "any", false, false, false, 123), "spacing", [], "any", false, false, false, 123), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 124
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 124), "wrapper_hover", [], "any", false, false, false, 124), "borders", [], "any", false, false, false, 124), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 125
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 125), "wrapper_hover", [], "any", false, false, false, 125), "effects", [], "any", false, false, false, 125)], 117, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 129
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 129), "css", [], "any", false, false, false, 129);
        echo "


";
        // line 132
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 132), "hide", [], "any", false, false, false, 132)))) {
            // line 133
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 134
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 134), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 134), "hide", [], "any", false, false, false, 134))) {
                    // line 135
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 137
                    if (($context["isBuilder"] ?? null)) {
                        // line 138
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 141
                        echo "                        display: none;
                    ";
                    }
                    // line 143
                    echo "                }
            }
        ";
                }
                // line 146
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 148
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "009f71a3e720a4ff78070b667e009059029e67a4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 148,  304 => 146,  299 => 143,  295 => 141,  290 => 138,  288 => 137,  282 => 135,  279 => 134,  274 => 133,  272 => 132,  266 => 129,  259 => 125,  258 => 124,  257 => 123,  256 => 122,  255 => 121,  254 => 120,  253 => 119,  252 => 118,  251 => 117,  244 => 113,  243 => 112,  242 => 111,  241 => 110,  240 => 109,  239 => 108,  238 => 107,  237 => 106,  236 => 105,  231 => 102,  214 => 87,  209 => 84,  205 => 82,  203 => 81,  198 => 79,  194 => 78,  190 => 77,  183 => 73,  176 => 69,  169 => 65,  162 => 61,  155 => 57,  147 => 52,  140 => 48,  133 => 44,  129 => 43,  122 => 39,  118 => 38,  114 => 37,  107 => 32,  103 => 30,  101 => 29,  97 => 28,  92 => 25,  88 => 23,  86 => 22,  83 => 21,  81 => 20,  76 => 19,  74 => 18,  69 => 16,  65 => 15,  57 => 10,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "009f71a3e720a4ff78070b667e009059029e67a4", "");
    }
}
