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

/* 532eb24360ce3bb3a413ebf5a7e4510d795074e7 */
class __TwigTemplate_d5b90b9baa5301903c47f1683a0569fc extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "532eb24360ce3bb3a413ebf5a7e4510d795074e7", 2)->unwrap();
        // line 3
        echo "
          /* Element Wrapper */
%%SELECTOR%% {
  ";
        // line 6
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 6)], 6, $context, $this->getSourceContext());
        echo "
  flex-direction:";
        // line 7
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 7), "direction", [], "any", false, false, false, 7);
        echo ";
  gap: ";
        // line 8
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 8), "space_between", [], "any", false, false, false, 8), "style", [], "any", false, false, false, 8);
        echo ";
}

/* Icon Wrapper */
%%SELECTOR%% .bde-social-icons__icon-wrapper {
  ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icons", [], "any", false, false, false, 13), "shape", [], "any", false, false, false, 13) == "100%")) {
            // line 14
            echo "    border-radius: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icons", [], "any", false, false, false, 14), "shape", [], "any", false, false, false, 14);
            echo ";
    background-color: ";
            // line 15
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icons", [], "any", false, false, false, 15), "background", [], "any", false, false, false, 15);
            echo ";
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
($context["design"] ?? null), "icons", [], "any", false, false, false, 16), "shape", [], "any", false, false, false, 16) == "0")) {
            // line 17
            echo "    border-radius: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icons", [], "any", false, false, false, 17), "shape", [], "any", false, false, false, 17);
            echo ";
    background-color: ";
            // line 18
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icons", [], "any", false, false, false, 18), "background", [], "any", false, false, false, 18);
            echo ";
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 19
($context["design"] ?? null), "icons", [], "any", false, false, false, 19), "shape", [], "any", false, false, false, 19) == "custom")) {
            // line 20
            echo "    border-radius: ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icons", [], "any", false, true, false, 20), "radius", [], "any", false, true, false, 20), "style", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icons", [], "any", false, true, false, 20), "radius", [], "any", false, true, false, 20), "style", [], "any", false, false, false, 20), "8px")) : ("8px"));
            echo ";
    background-color: ";
            // line 21
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icons", [], "any", false, false, false, 21), "background", [], "any", false, false, false, 21);
            echo ";
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 22
($context["design"] ?? null), "icons", [], "any", false, false, false, 22), "shape", [], "any", false, false, false, 22) == "icon")) {
            // line 23
            echo "    background-color: transparent;
    border-radius: 0;
  ";
        }
        // line 26
        echo "  padding: ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icons", [], "any", false, false, false, 26), "padding", [], "any", false, false, false, 26), "style", [], "any", false, false, false, 26);
        echo ";
  transition-duration: ";
        // line 27
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "effect", [], "any", false, false, false, 27), "transition_duration", [], "any", false, false, false, 27), "style", [], "any", false, false, false, 27);
        echo ";
  opacity: ";
        // line 28
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "effect", [], "any", false, false, false, 28), "opacity", [], "any", false, false, false, 28);
        echo ";
}

/* Icon Wrapper Hover*/
%%SELECTOR%% .bde-social-icons__icon-wrapper:hover {
  background-color:  ";
        // line 33
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icons", [], "any", false, false, false, 33), "background_hover", [], "any", false, false, false, 33);
        echo ";
  ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "effect", [], "any", false, false, false, 34), "scale_on_hover", [], "any", false, false, false, 34)) {
            // line 35
            echo "    transform: scale(";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "effect", [], "any", false, false, false, 35), "scale_on_hover", [], "any", false, false, false, 35);
            echo ");
  ";
        }
        // line 37
        echo "  opacity: ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "effect", [], "any", false, false, false, 37), "opacity_hover", [], "any", false, false, false, 37);
        echo ";
}

/* Icon Image */
%%SELECTOR%% .bde-social-icons__icon-wrapper svg {
  width: ";
        // line 42
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icons", [], "any", false, false, false, 42), "size", [], "any", false, false, false, 42), "style", [], "any", false, false, false, 42);
        echo ";
  height: ";
        // line 43
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icons", [], "any", false, false, false, 43), "size", [], "any", false, false, false, 43), "style", [], "any", false, false, false, 43);
        echo ";
  fill: ";
        // line 44
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icons", [], "any", false, false, false, 44), "icon_color", [], "any", false, false, false, 44);
        echo ";
  transition-duration: ";
        // line 45
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "effect", [], "any", false, false, false, 45), "transition_duration", [], "any", false, false, false, 45), "style", [], "any", false, false, false, 45);
        echo ";
}

/* Icon Image Hover */
%%SELECTOR%% .bde-social-icons__icon-wrapper:hover svg {
  fill: ";
        // line 50
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icons", [], "any", false, false, false, 50), "icon_color_hover", [], "any", false, false, false, 50);
        echo ";
}

";
        // line 53
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 53), "social_networks", [], "any", false, false, false, 53)) {
            // line 54
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 54), "social_networks", [], "any", false, false, false, 54));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 55
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "background", [], "any", false, false, false, 55)) {
                    // line 56
                    echo "      %%SELECTOR%% .bde-social-icons__icon-wrapper:nth-child(";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 56);
                    echo ") {
          background-color: ";
                    // line 57
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "background", [], "any", false, false, false, 57);
                    echo ";
      }
    ";
                }
                // line 60
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "icon_color", [], "any", false, false, false, 60)) {
                    // line 61
                    echo "      %%SELECTOR%% .bde-social-icons__icon-wrapper:nth-child(";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 61);
                    echo ") svg {
          fill: ";
                    // line 62
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "icon_color", [], "any", false, false, false, 62);
                    echo ";
      }
    ";
                }
                // line 65
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "background_hover", [], "any", false, false, false, 65)) {
                    // line 66
                    echo "      %%SELECTOR%% .bde-social-icons__icon-wrapper:nth-child(";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 66);
                    echo "):hover {
          background-color: ";
                    // line 67
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "background_hover", [], "any", false, false, false, 67);
                    echo ";
      }
    ";
                }
                // line 70
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "icon_color_hover", [], "any", false, false, false, 70)) {
                    // line 71
                    echo "      %%SELECTOR%% .bde-social-icons__icon-wrapper:nth-child(";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 71);
                    echo "):hover svg {
          fill: ";
                    // line 72
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "icon_color_hover", [], "any", false, false, false, 72);
                    echo ";
      }
    ";
                }
                // line 75
                echo "  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 77
        echo "

";
        // line 80
        echo "

    %%SELECTOR%% {
        ";
        // line 83
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 84
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 84), "wrapper", [], "any", false, false, false, 84), "background", [], "any", false, false, false, 84), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 85
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 85), "wrapper", [], "any", false, false, false, 85), "layout", [], "any", false, false, false, 85), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 86
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 86), "wrapper", [], "any", false, false, false, 86), "size", [], "any", false, false, false, 86), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 87
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 87), "wrapper", [], "any", false, false, false, 87), "typography", [], "any", false, false, false, 87),         // line 88
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 89
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 89), "wrapper", [], "any", false, false, false, 89), "spacing", [], "any", false, false, false, 89), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 90
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 90), "wrapper", [], "any", false, false, false, 90), "borders", [], "any", false, false, false, 90), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 91
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 91), "wrapper", [], "any", false, false, false, 91), "effects", [], "any", false, false, false, 91)], 83, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 95
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 96
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 96), "wrapper_hover", [], "any", false, false, false, 96), "background", [], "any", false, false, false, 96), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 97
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 97), "wrapper_hover", [], "any", false, false, false, 97), "layout", [], "any", false, false, false, 97), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 98
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 98), "wrapper_hover", [], "any", false, false, false, 98), "size", [], "any", false, false, false, 98), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 99
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 99), "wrapper_hover", [], "any", false, false, false, 99), "typography", [], "any", false, false, false, 99),         // line 100
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 101
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 101), "wrapper_hover", [], "any", false, false, false, 101), "spacing", [], "any", false, false, false, 101), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 102
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 102), "wrapper_hover", [], "any", false, false, false, 102), "borders", [], "any", false, false, false, 102), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 103
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 103), "wrapper_hover", [], "any", false, false, false, 103), "effects", [], "any", false, false, false, 103)], 95, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 107
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 107), "css", [], "any", false, false, false, 107);
        echo "


";
        // line 110
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 110), "hide", [], "any", false, false, false, 110)))) {
            // line 111
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 112
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 112), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 112), "hide", [], "any", false, false, false, 112))) {
                    // line 113
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 115
                    if (($context["isBuilder"] ?? null)) {
                        // line 116
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 119
                        echo "                        display: none;
                    ";
                    }
                    // line 121
                    echo "                }
            }
        ";
                }
                // line 124
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 126
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "532eb24360ce3bb3a413ebf5a7e4510d795074e7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 126,  335 => 124,  330 => 121,  326 => 119,  321 => 116,  319 => 115,  313 => 113,  310 => 112,  305 => 111,  303 => 110,  297 => 107,  290 => 103,  289 => 102,  288 => 101,  287 => 100,  286 => 99,  285 => 98,  284 => 97,  283 => 96,  282 => 95,  275 => 91,  274 => 90,  273 => 89,  272 => 88,  271 => 87,  270 => 86,  269 => 85,  268 => 84,  267 => 83,  262 => 80,  258 => 77,  243 => 75,  237 => 72,  232 => 71,  229 => 70,  223 => 67,  218 => 66,  215 => 65,  209 => 62,  204 => 61,  201 => 60,  195 => 57,  190 => 56,  187 => 55,  169 => 54,  167 => 53,  161 => 50,  153 => 45,  149 => 44,  145 => 43,  141 => 42,  132 => 37,  126 => 35,  124 => 34,  120 => 33,  112 => 28,  108 => 27,  103 => 26,  98 => 23,  96 => 22,  92 => 21,  87 => 20,  85 => 19,  81 => 18,  76 => 17,  74 => 16,  70 => 15,  65 => 14,  63 => 13,  55 => 8,  51 => 7,  47 => 6,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "532eb24360ce3bb3a413ebf5a7e4510d795074e7", "");
    }
}
