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

/* a5783c717211b645a4cf4d4e8439521eccc6a7cf */
class __TwigTemplate_665c8ec8aba919181f4e17f09cc2ba0d extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "a5783c717211b645a4cf4d4e8439521eccc6a7cf", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  ";
        // line 5
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 5), "container", [], "any", false, false, false, 5)], 5, $context, $this->getSourceContext());
        echo "
  justify-content: ";
        // line 6
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "position", [], "any", false, false, false, 6), "alignment", [], "any", false, false, false, 6)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "position", [], "any", false, false, false, 6), "alignment", [], "any", false, false, false, 6)) : ("flex-start"));
        echo ";
  gap: ";
        // line 7
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 7), "between_buttons", [], "any", false, false, false, 7), "style", [], "any", false, false, false, 7);
        echo ";
  --shbtn-icon-size: ";
        // line 8
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 8), "icon_size", [], "any", false, false, false, 8), "style", [], "any", false, false, false, 8);
        echo ";
  --shbtn-padding: ";
        // line 9
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 9), "padding", [], "any", false, false, false, 9), "style", [], "any", false, false, false, 9);
        echo ";
}

";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "position", [], "any", false, false, false, 12), "placement", [], "any", false, false, false, 12) == "floating")) {
            // line 13
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "position", [], "any", false, false, false, 13), "floating_position", [], "any", false, false, false, 13) == "left")) {
                // line 14
                echo "  %%SELECTOR%% {
    position: fixed;
    top: 0;
    left: 0;
    transform: translate(0, calc(50vh - 50%));
    width: auto;
    height: 100%;
    flex-direction: column;
  }
  ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 23
($context["design"] ?? null), "position", [], "any", false, false, false, 23), "floating_position", [], "any", false, false, false, 23) == "right")) {
                // line 24
                echo "  %%SELECTOR%% {
    position: fixed;
    top: 0; 
    right: 0;
    transform: translate(0, calc(50vh - 50%));
    width: auto;
    height: 100%;
    flex-direction: column;
  }
  ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 33
($context["design"] ?? null), "position", [], "any", false, false, false, 33), "floating_position", [], "any", false, false, false, 33) == "top")) {
                // line 34
                echo "  %%SELECTOR%% { 
    position: fixed;
    top: 0; 
    left: 0;
    transform: translate(calc(50vw - 50%));
  }
  ";
            } else {
                // line 41
                echo "  %%SELECTOR%% { 
    position: fixed;
    bottom: 0; 
    left: 0;
    transform: translate(calc(50vw - 50%));
  }
  ";
            }
        }
        // line 49
        echo "

";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "style", [], "any", false, false, false, 51), "style", [], "any", false, false, false, 51) == "outline")) {
            // line 52
            echo "%%SELECTOR%% .bde-social-share-button-text {
  border-width: 2px;
  border-left: ";
            // line 54
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "style", [], "any", false, false, false, 54), "display", [], "any", false, false, false, 54) == "icon-text")) ? ("0") : (""));
            echo ";;
  background: #fff;
  color: #222;
  padding-inline-start: var(--shbtn-padding);
}
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 59
($context["design"] ?? null), "style", [], "any", false, false, false, 59), "style", [], "any", false, false, false, 59) == "minimal")) {
            // line 60
            echo "%%SELECTOR%% .bde-social-share-button-text {
  background: #fff;
  color: #222;
  padding-inline-start: var(--shbtn-padding);
}
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 65
($context["design"] ?? null), "style", [], "any", false, false, false, 65), "style", [], "any", false, false, false, 65) == "box")) {
            // line 66
            echo "%%SELECTOR%% .bde-social-share-button-text {
  background-color: rgba(0, 0, 0, 0.15);
  padding-inline-start: var(--shbtn-padding);
}
";
        } elseif ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 70
($context["design"] ?? null), "style", [], "any", false, false, false, 70), "style", [], "any", false, false, false, 70)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "style", [], "any", false, false, false, 70), "display", [], "any", false, false, false, 70) == "text"))) {
            // line 71
            echo "%%SELECTOR%% .bde-social-share-button-text {
  padding-inline-start: var(--shbtn-padding);
}
";
        } elseif (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 74
($context["design"] ?? null), "style", [], "any", false, false, false, 74), "style", [], "any", false, false, false, 74) == "flat") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "style", [], "any", false, false, false, 74), "display", [], "any", false, false, false, 74) == "text"))) {
            // line 75
            echo "%%SELECTOR%% .bde-social-share-button-text {
  padding-inline-start: var(--shbtn-padding);
}
";
        }
        // line 79
        echo "
";
        // line 80
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "style", [], "any", false, false, false, 80), "display", [], "any", false, false, false, 80) == "icon") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "style", [], "any", false, false, false, 80), "style", [], "any", false, false, false, 80) == "minimal")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "style", [], "any", false, false, false, 80), "style", [], "any", false, false, false, 80) == "box"))) {
            // line 81
            echo "%%SELECTOR%% .bde-social-share-button-icon {
  padding-inline-end: var(--shbtn-padding);
}
";
        }
        // line 85
        echo "
";
        // line 86
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 86), "border", [], "any", false, false, false, 86), "style", [], "any", false, false, false, 86) == "circle")) {
            // line 87
            echo "  %%SELECTOR%% .bde-social-share-button {
    border-radius: 300px;
  }
  ";
            // line 90
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "style", [], "any", false, false, false, 90), "display", [], "any", false, false, false, 90) == "icon-text") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "style", [], "any", false, false, false, 90), "style", [], "any", false, false, false, 90) != "minimal"))) {
                // line 91
                echo "  %%SELECTOR%% .bde-social-share-button-icon {
    border-radius: 21px 0 0 21px;
  }
  %%SELECTOR%% .bde-social-share-button-text {
    border-radius: 0 21px 21px 0;
  }
  ";
            } else {
                // line 98
                echo "  %%SELECTOR%% .bde-social-share-button-icon,
  %%SELECTOR%% .bde-social-share-button-text {
    border-radius: 21px;
  }
  ";
            }
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 103
($context["design"] ?? null), "button", [], "any", false, false, false, 103), "border", [], "any", false, false, false, 103), "style", [], "any", false, false, false, 103) == "custom")) {
            // line 104
            echo "\t%%SELECTOR%% .bde-social-share-button {
     ";
            // line 105
            echo twig_call_macro($macros["macros"], "macro_border_radius", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 105), "border", [], "any", false, false, false, 105), "radius", [], "any", false, false, false, 105)], 105, $context, $this->getSourceContext());
            echo "
  \t}
  ";
            // line 107
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "style", [], "any", false, false, false, 107), "display", [], "any", false, false, false, 107) == "icon-text") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "style", [], "any", false, false, false, 107), "style", [], "any", false, false, false, 107) != "minimal"))) {
                // line 108
                echo "  %%SELECTOR%% .bde-social-share-button-icon {
 
    ";
                // line 110
                echo twig_call_macro($macros["macros"], "macro_border_radius", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 110), "border", [], "any", false, false, false, 110), "radius", [], "any", false, false, false, 110)], 110, $context, $this->getSourceContext());
                echo "
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  %%SELECTOR%% .bde-social-share-button-text {
    ";
                // line 115
                echo twig_call_macro($macros["macros"], "macro_border_radius", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 115), "border", [], "any", false, false, false, 115), "radius", [], "any", false, false, false, 115)], 115, $context, $this->getSourceContext());
                echo "
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  ";
            } else {
                // line 120
                echo "  %%SELECTOR%% .bde-social-share-button-icon,
  %%SELECTOR%% .bde-social-share-button-text {
    border-radius: 21px;
  }
  ";
            }
        }
        // line 126
        echo "
/* Colors & Typography */
%%SELECTOR%% .bde-social-share-button {
  background-color: ";
        // line 129
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 129), "colors", [], "any", false, false, false, 129), "background", [], "any", false, false, false, 129);
        echo ";
  border-color: ";
        // line 130
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 130), "colors", [], "any", false, false, false, 130), "border", [], "any", false, false, false, 130);
        echo ";
}

%%SELECTOR%% .bde-social-share-button-icon {
  color: ";
        // line 134
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 134), "colors", [], "any", false, false, false, 134), "icon", [], "any", false, false, false, 134);
        echo ";
}

%%SELECTOR%% .bde-social-share-button-text {
  ";
        // line 138
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 138), "text", [], "any", false, false, false, 138), ($context["globalSettings"] ?? null)], 138, $context, $this->getSourceContext());
        echo "
}

/* Hover Colors */
%%SELECTOR%% .bde-social-share-button:hover {
  background-color: ";
        // line 143
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 143), "colors", [], "any", false, false, false, 143), "background_hover", [], "any", false, false, false, 143);
        echo ";
  border-color: ";
        // line 144
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 144), "colors", [], "any", false, false, false, 144), "border_hover", [], "any", false, false, false, 144);
        echo ";
}

%%SELECTOR%% .bde-social-share-button:hover .bde-social-share-button-icon {
  color: ";
        // line 148
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 148), "colors", [], "any", false, false, false, 148), "icon_hover", [], "any", false, false, false, 148);
        echo ";
}

";
        // line 152
        echo "

    %%SELECTOR%% {
        ";
        // line 155
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 156
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 156), "wrapper", [], "any", false, false, false, 156), "background", [], "any", false, false, false, 156), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 157
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 157), "wrapper", [], "any", false, false, false, 157), "layout", [], "any", false, false, false, 157), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 158
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 158), "wrapper", [], "any", false, false, false, 158), "size", [], "any", false, false, false, 158), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 159
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 159), "wrapper", [], "any", false, false, false, 159), "typography", [], "any", false, false, false, 159),         // line 160
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 161
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 161), "wrapper", [], "any", false, false, false, 161), "spacing", [], "any", false, false, false, 161), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 162
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 162), "wrapper", [], "any", false, false, false, 162), "borders", [], "any", false, false, false, 162), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 163
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 163), "wrapper", [], "any", false, false, false, 163), "effects", [], "any", false, false, false, 163)], 155, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 167
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 168
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 168), "wrapper_hover", [], "any", false, false, false, 168), "background", [], "any", false, false, false, 168), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 169
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 169), "wrapper_hover", [], "any", false, false, false, 169), "layout", [], "any", false, false, false, 169), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 170
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 170), "wrapper_hover", [], "any", false, false, false, 170), "size", [], "any", false, false, false, 170), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 171
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 171), "wrapper_hover", [], "any", false, false, false, 171), "typography", [], "any", false, false, false, 171),         // line 172
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 173
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 173), "wrapper_hover", [], "any", false, false, false, 173), "spacing", [], "any", false, false, false, 173), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 174
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 174), "wrapper_hover", [], "any", false, false, false, 174), "borders", [], "any", false, false, false, 174), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 175
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 175), "wrapper_hover", [], "any", false, false, false, 175), "effects", [], "any", false, false, false, 175)], 167, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 179
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 179), "css", [], "any", false, false, false, 179);
        echo "


";
        // line 182
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 182), "hide", [], "any", false, false, false, 182)))) {
            // line 183
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 184
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 184), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 184), "hide", [], "any", false, false, false, 184))) {
                    // line 185
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 187
                    if (($context["isBuilder"] ?? null)) {
                        // line 188
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 191
                        echo "                        display: none;
                    ";
                    }
                    // line 193
                    echo "                }
            }
        ";
                }
                // line 196
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 198
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "a5783c717211b645a4cf4d4e8439521eccc6a7cf";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 198,  368 => 196,  363 => 193,  359 => 191,  354 => 188,  352 => 187,  346 => 185,  343 => 184,  338 => 183,  336 => 182,  330 => 179,  323 => 175,  322 => 174,  321 => 173,  320 => 172,  319 => 171,  318 => 170,  317 => 169,  316 => 168,  315 => 167,  308 => 163,  307 => 162,  306 => 161,  305 => 160,  304 => 159,  303 => 158,  302 => 157,  301 => 156,  300 => 155,  295 => 152,  289 => 148,  282 => 144,  278 => 143,  270 => 138,  263 => 134,  256 => 130,  252 => 129,  247 => 126,  239 => 120,  231 => 115,  223 => 110,  219 => 108,  217 => 107,  212 => 105,  209 => 104,  207 => 103,  200 => 98,  191 => 91,  189 => 90,  184 => 87,  182 => 86,  179 => 85,  173 => 81,  171 => 80,  168 => 79,  162 => 75,  160 => 74,  155 => 71,  153 => 70,  147 => 66,  145 => 65,  138 => 60,  136 => 59,  128 => 54,  124 => 52,  122 => 51,  118 => 49,  108 => 41,  99 => 34,  97 => 33,  86 => 24,  84 => 23,  73 => 14,  70 => 13,  68 => 12,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "a5783c717211b645a4cf4d4e8439521eccc6a7cf", "");
    }
}
