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

/* 2ffa071ba440bd9619db33b054179fcc66111390 */
class __TwigTemplate_048ee05036a9c3f9a5617f70dcdddcb9 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "2ffa071ba440bd9619db33b054179fcc66111390", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  ";
        // line 5
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 5)], 5, $context, $this->getSourceContext());
        echo "
  list-style-position: ";
        // line 6
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 6), "marker_position", [], "any", false, false, false, 6);
        echo ";
  
  ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, true, false, 8), "marker_type", [], "any", true, true, false, 8)) {
            // line 9
            echo "
  ";
            // line 10
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 10), "marker_type", [], "any", false, false, false, 10) == "square")) {
                // line 11
                echo "    list-style-type: square;  
  ";
            }
            // line 13
            echo "
  ";
            // line 14
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 14), "marker_type", [], "any", false, false, false, 14) == "none")) {
                // line 15
                echo "    list-style-type: none;  
  ";
            }
            // line 17
            echo "  
  ";
            // line 18
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 18), "marker_type", [], "any", false, false, false, 18) == "emoji") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 18), "emoji", [], "any", false, false, false, 18))) {
                // line 19
                echo "    list-style-type: '";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 19), "emoji", [], "any", false, false, false, 19);
                echo "';  
  ";
            }
            // line 21
            echo "
  ";
            // line 22
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 22), "marker_type", [], "any", false, false, false, 22) == "custom") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 22), "custom", [], "any", false, false, false, 22))) {
                // line 23
                echo "    list-style-type: ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 23), "custom", [], "any", false, false, false, 23);
                echo ";
  ";
            }
            // line 25
            echo "  
  ";
        }
        // line 27
        echo "
  width: ";
        // line 28
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 28), "width", [], "any", false, false, false, 28), "style", [], "any", false, false, false, 28);
        echo ";
  padding-inline-start: ";
        // line 29
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 29), "padding_inline_start", [], "any", false, false, false, 29), "list", [], "any", false, false, false, 29), "style", [], "any", false, false, false, 29);
        echo ";
}

%%SELECTOR%% li::marker {
  color: ";
        // line 33
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 33), "marker_color", [], "any", false, false, false, 33);
        echo ";
}

%%SELECTOR%% li.bde-basic-list-item-with-link:hover::marker {
  color: ";
        // line 37
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 37), "marker_color_hover", [], "any", false, false, false, 37);
        echo ";
}

%%SELECTOR%% li {
  padding-inline-start: ";
        // line 41
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 41), "padding_inline_start", [], "any", false, false, false, 41), "item", [], "any", false, false, false, 41), "style", [], "any", false, false, false, 41);
        echo ";
  ";
        // line 42
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 42), ($context["globalSettings"] ?? null)], 42, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% li.bde-basic-list-item-with-link, %%SELECTOR%% li > a {
  ";
        // line 46
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 46), ($context["globalSettings"] ?? null)], 46, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% li.bde-basic-list-item-with-link:hover, %%SELECTOR%% li > a:hover {
   ";
        // line 50
        echo twig_call_macro($macros["macros"], "macro_typographyWithHoverableColorAndEffects", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 50)], 50, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% li:not(:last-child) {
  margin-bottom: ";
        // line 54
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 54), "below_item", [], "any", false, false, false, 54), "style", [], "any", false, false, false, 54);
        echo ";
}


";
        // line 59
        echo "

    %%SELECTOR%% {
        ";
        // line 62
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 63
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 63), "wrapper", [], "any", false, false, false, 63), "background", [], "any", false, false, false, 63), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 64
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 64), "wrapper", [], "any", false, false, false, 64), "layout", [], "any", false, false, false, 64), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 65
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 65), "wrapper", [], "any", false, false, false, 65), "size", [], "any", false, false, false, 65), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 66
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 66), "wrapper", [], "any", false, false, false, 66), "typography", [], "any", false, false, false, 66),         // line 67
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 68
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 68), "wrapper", [], "any", false, false, false, 68), "spacing", [], "any", false, false, false, 68), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 69
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 69), "wrapper", [], "any", false, false, false, 69), "borders", [], "any", false, false, false, 69), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 70
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 70), "wrapper", [], "any", false, false, false, 70), "effects", [], "any", false, false, false, 70)], 62, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 74
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 75
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 75), "wrapper_hover", [], "any", false, false, false, 75), "background", [], "any", false, false, false, 75), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 76
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 76), "wrapper_hover", [], "any", false, false, false, 76), "layout", [], "any", false, false, false, 76), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 77
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 77), "wrapper_hover", [], "any", false, false, false, 77), "size", [], "any", false, false, false, 77), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 78
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 78), "wrapper_hover", [], "any", false, false, false, 78), "typography", [], "any", false, false, false, 78),         // line 79
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 80
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 80), "wrapper_hover", [], "any", false, false, false, 80), "spacing", [], "any", false, false, false, 80), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 81
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 81), "wrapper_hover", [], "any", false, false, false, 81), "borders", [], "any", false, false, false, 81), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 82
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 82), "wrapper_hover", [], "any", false, false, false, 82), "effects", [], "any", false, false, false, 82)], 74, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 86
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 86), "css", [], "any", false, false, false, 86);
        echo "


";
        // line 89
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 89), "hide", [], "any", false, false, false, 89)))) {
            // line 90
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 91
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 91), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 91), "hide", [], "any", false, false, false, 91))) {
                    // line 92
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 94
                    if (($context["isBuilder"] ?? null)) {
                        // line 95
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 98
                        echo "                        display: none;
                    ";
                    }
                    // line 100
                    echo "                }
            }
        ";
                }
                // line 103
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 105
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "2ffa071ba440bd9619db33b054179fcc66111390";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 105,  234 => 103,  229 => 100,  225 => 98,  220 => 95,  218 => 94,  212 => 92,  209 => 91,  204 => 90,  202 => 89,  196 => 86,  189 => 82,  188 => 81,  187 => 80,  186 => 79,  185 => 78,  184 => 77,  183 => 76,  182 => 75,  181 => 74,  174 => 70,  173 => 69,  172 => 68,  171 => 67,  170 => 66,  169 => 65,  168 => 64,  167 => 63,  166 => 62,  161 => 59,  154 => 54,  147 => 50,  140 => 46,  133 => 42,  129 => 41,  122 => 37,  115 => 33,  108 => 29,  104 => 28,  101 => 27,  97 => 25,  91 => 23,  89 => 22,  86 => 21,  80 => 19,  78 => 18,  75 => 17,  71 => 15,  69 => 14,  66 => 13,  62 => 11,  60 => 10,  57 => 9,  55 => 8,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "2ffa071ba440bd9619db33b054179fcc66111390", "");
    }
}
