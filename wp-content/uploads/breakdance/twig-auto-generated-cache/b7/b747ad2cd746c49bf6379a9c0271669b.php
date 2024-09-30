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

/* 04e2f73a724769eb6ba48d34c45c16f2ce8f1f3e */
class __TwigTemplate_7c830ae4ad84265b1d114fd38e2803d6 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "04e2f73a724769eb6ba48d34c45c16f2ce8f1f3e", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        if ((($context["isBuilder"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "advanced", [], "any", false, false, false, 4), "disable_builder_preview_mode", [], "any", false, false, false, 4))) {
            // line 5
            echo "body.single-breakdance_header,
body.single-breakdance_footer,
body.single-breakdance_template,
body.single-breakdance_block {
    background-image: linear-gradient(135deg, #d2d2d2 25%, transparent 25%), linear-gradient(225deg, #d2d2d2 25%, transparent 25%), linear-gradient(45deg, #d2d2d2 25%, transparent 25%), linear-gradient(315deg, #d2d2d2 25%, #e5e5e5 25%);
    background-position: 50px 0, 50px 0, 0 0, 0 0;
    background-size: 100px 100px;
    background-repeat: repeat;
    min-height: 5000px;
}

.bde-header-builder-marker {
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  display: inline-block;
  color: #fff;
  font-weight: bold;
  padding: 10px;
  border-radius: 6px;
  background-color: #f44336;
}

.bde-header-builder-marker:before {
  content: '';
  position: absolute;
  top: calc(50% + 1px);
  left: 50%;
  z-index: -1;
  width: 100vw;
  height: 2px;
  transform: translateX(-50%) translateY(-50%);
  border-top: 2px dashed #f44336;
}
";
        }
        // line 40
        echo "
";
        // line 41
        if ((($context["isBuilder"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "advanced", [], "any", false, false, false, 41), "disable_builder_preview_mode", [], "any", false, false, false, 41))) {
            // line 42
            echo ".bde-header-builder-marker {
  display: none;
}
";
        }
        // line 46
        echo "
%%SELECTOR%% {
  ";
        // line 48
        echo twig_call_macro($macros["macros"], "macro_backgroundColor", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 48), "color", [], "any", false, false, false, 48)], 48, $context, $this->getSourceContext());
        echo "
  --sticky-header-animation-duration: ";
        // line 49
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 49), "scroll_behavior", [], "any", false, false, false, 49), "duration", [], "any", false, false, false, 49), "style", [], "any", false, false, false, 49);
        echo ";
  box-shadow: ";
        // line 50
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 50), "shadow", [], "any", false, false, false, 50), "style", [], "any", false, false, false, 50);
        echo ";
}

%%SELECTOR%% .bde-header-builder__header-builder-border-top {
  height: ";
        // line 54
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 54), "top", [], "any", false, false, false, 54), "width", [], "any", false, false, false, 54), "style", [], "any", false, false, false, 54);
        echo ";
  ";
        // line 55
        echo twig_call_macro($macros["macros"], "macro_backgroundColor", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 55), "top", [], "any", false, false, false, 55), "fill", [], "any", false, false, false, 55)], 55, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .bde-header-builder__header-builder-border-bottom {
  height: ";
        // line 59
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 59), "bottom", [], "any", false, false, false, 59), "width", [], "any", false, false, false, 59), "style", [], "any", false, false, false, 59);
        echo ";
  ";
        // line 60
        echo twig_call_macro($macros["macros"], "macro_backgroundColor", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 60), "bottom", [], "any", false, false, false, 60), "fill", [], "any", false, false, false, 60)], 60, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .bde-header-builder__container {
  gap: ";
        // line 64
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 64), "gap", [], "any", false, false, false, 64), "style", [], "any", false, false, false, 64);
        echo ";
  ";
        // line 65
        if ((($context["breakpoint"] ?? null) == ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, true, false, 65), "stack_vertically_at", [], "any", true, true, false, 65)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, true, false, 65), "stack_vertically_at", [], "any", false, false, false, 65), ($context["firstResponsiveBreakpointId"] ?? null))) : (($context["firstResponsiveBreakpointId"] ?? null))))) {
            // line 66
            echo "    flex-direction: column;
  ";
        }
        // line 68
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 68), "width", [], "any", false, false, false, 68) == "full")) {
            // line 69
            echo "    max-width: 100%;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 70
($context["design"] ?? null), "size", [], "any", false, false, false, 70), "width", [], "any", false, false, false, 70) == "custom")) {
            // line 71
            echo "    max-width: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 71), "custom_width", [], "any", false, false, false, 71), "style", [], "any", false, false, false, 71);
            echo ";
  ";
        }
        // line 73
        echo "  min-height: ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 73), "min_height", [], "any", false, false, false, 73), "style", [], "any", false, false, false, 73);
        echo ";
  ";
        // line 74
        echo twig_call_macro($macros["macros"], "macro_spacing_complex", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 74), "padding", [], "any", false, false, false, 74), "padding"], 74, $context, $this->getSourceContext());
        echo "
}


";
        // line 78
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "overlay", [], "any", false, false, false, 78), "enable", [], "any", false, false, false, 78) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "overlay", [], "any", false, false, false, 78), "keep_style", [], "any", false, false, false, 78))) {
            // line 79
            echo "  %%SELECTOR%%.bde-header-builder--overlay {
    background-color: transparent;
    box-shadow: none;
  }

  %%SELECTOR%%.bde-header-builder--overlay .bde-header-builder__header-builder-border-top {
    background-color: transparent;
  }

  %%SELECTOR%%.bde-header-builder--overlay .bde-header-builder__header-builder-border-bottom {
    background-color: transparent;
  }

";
        }
        // line 93
        echo "


/* for css priority, sticky styles should come after overlay */

%%SELECTOR%%.bde-header-builder--sticky-styles {
  ";
        // line 99
        echo twig_call_macro($macros["macros"], "macro_backgroundColor", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 99), "style", [], "any", false, false, false, 99), "background", [], "any", false, false, false, 99)], 99, $context, $this->getSourceContext());
        echo "
  ";
        // line 100
        if ((($context["breakpoint"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 100), "disable_at", [], "any", false, false, false, 100))) {
            // line 101
            echo "    display: none;
  ";
        }
        // line 103
        echo "  box-shadow: ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 103), "style", [], "any", false, false, false, 103), "borders", [], "any", false, false, false, 103), "shadow", [], "any", false, false, false, 103), "style", [], "any", false, false, false, 103);
        echo ";
}

%%SELECTOR%%.bde-header-builder--sticky-styles .bde-header-builder__container {
  min-height: ";
        // line 107
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 107), "style", [], "any", false, false, false, 107), "min_height", [], "any", false, false, false, 107), "style", [], "any", false, false, false, 107);
        echo ";
}

%%SELECTOR%%.bde-header-builder--sticky-styles .bde-header-builder__header-builder-border-top {
  height: ";
        // line 111
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 111), "style", [], "any", false, false, false, 111), "borders", [], "any", false, false, false, 111), "top", [], "any", false, false, false, 111), "width", [], "any", false, false, false, 111), "style", [], "any", false, false, false, 111);
        echo ";
  ";
        // line 112
        echo twig_call_macro($macros["macros"], "macro_backgroundColor", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 112), "style", [], "any", false, false, false, 112), "borders", [], "any", false, false, false, 112), "top", [], "any", false, false, false, 112), "fill", [], "any", false, false, false, 112)], 112, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%%.bde-header-builder--sticky-styles .bde-header-builder__header-builder-border-bottom {
  height: ";
        // line 116
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 116), "style", [], "any", false, false, false, 116), "borders", [], "any", false, false, false, 116), "bottom", [], "any", false, false, false, 116), "width", [], "any", false, false, false, 116), "style", [], "any", false, false, false, 116);
        echo ";
  ";
        // line 117
        echo twig_call_macro($macros["macros"], "macro_backgroundColor", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 117), "style", [], "any", false, false, false, 117), "borders", [], "any", false, false, false, 117), "bottom", [], "any", false, false, false, 117), "fill", [], "any", false, false, false, 117)], 117, $context, $this->getSourceContext());
        echo "
}



";
        // line 123
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 123), "enable", [], "any", false, false, false, 123)) {
            // line 124
            echo "  ";
            // line 135
            echo "  @media screen and (max-width: 600px) {
    #wpadminbar {
      display: none;
    }
    .breakdance .bde-header-builder {
      --wp-admin--admin-bar--height: 0px;
    }
  }
";
        }
        // line 144
        echo "
";
        // line 146
        echo "

    %%SELECTOR%% {
        ";
        // line 149
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 150
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 150), "wrapper", [], "any", false, false, false, 150), "background", [], "any", false, false, false, 150), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 151
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 151), "wrapper", [], "any", false, false, false, 151), "layout", [], "any", false, false, false, 151), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 152
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 152), "wrapper", [], "any", false, false, false, 152), "size", [], "any", false, false, false, 152), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 153
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 153), "wrapper", [], "any", false, false, false, 153), "typography", [], "any", false, false, false, 153),         // line 154
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 155
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 155), "wrapper", [], "any", false, false, false, 155), "spacing", [], "any", false, false, false, 155), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 156
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 156), "wrapper", [], "any", false, false, false, 156), "borders", [], "any", false, false, false, 156), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 157
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 157), "wrapper", [], "any", false, false, false, 157), "effects", [], "any", false, false, false, 157)], 149, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 161
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 162
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 162), "wrapper_hover", [], "any", false, false, false, 162), "background", [], "any", false, false, false, 162), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 163
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 163), "wrapper_hover", [], "any", false, false, false, 163), "layout", [], "any", false, false, false, 163), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 164
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 164), "wrapper_hover", [], "any", false, false, false, 164), "size", [], "any", false, false, false, 164), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 165
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 165), "wrapper_hover", [], "any", false, false, false, 165), "typography", [], "any", false, false, false, 165),         // line 166
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 167
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 167), "wrapper_hover", [], "any", false, false, false, 167), "spacing", [], "any", false, false, false, 167), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 168
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 168), "wrapper_hover", [], "any", false, false, false, 168), "borders", [], "any", false, false, false, 168), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 169
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 169), "wrapper_hover", [], "any", false, false, false, 169), "effects", [], "any", false, false, false, 169)], 161, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 173
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 173), "css", [], "any", false, false, false, 173);
        echo "


";
        // line 176
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 176), "hide", [], "any", false, false, false, 176)))) {
            // line 177
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 178
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 178), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 178), "hide", [], "any", false, false, false, 178))) {
                    // line 179
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 181
                    if (($context["isBuilder"] ?? null)) {
                        // line 182
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 185
                        echo "                        display: none;
                    ";
                    }
                    // line 187
                    echo "                }
            }
        ";
                }
                // line 190
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 192
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "04e2f73a724769eb6ba48d34c45c16f2ce8f1f3e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 192,  337 => 190,  332 => 187,  328 => 185,  323 => 182,  321 => 181,  315 => 179,  312 => 178,  307 => 177,  305 => 176,  299 => 173,  292 => 169,  291 => 168,  290 => 167,  289 => 166,  288 => 165,  287 => 164,  286 => 163,  285 => 162,  284 => 161,  277 => 157,  276 => 156,  275 => 155,  274 => 154,  273 => 153,  272 => 152,  271 => 151,  270 => 150,  269 => 149,  264 => 146,  261 => 144,  250 => 135,  248 => 124,  246 => 123,  238 => 117,  234 => 116,  227 => 112,  223 => 111,  216 => 107,  208 => 103,  204 => 101,  202 => 100,  198 => 99,  190 => 93,  174 => 79,  172 => 78,  165 => 74,  160 => 73,  154 => 71,  152 => 70,  149 => 69,  146 => 68,  142 => 66,  140 => 65,  136 => 64,  129 => 60,  125 => 59,  118 => 55,  114 => 54,  107 => 50,  103 => 49,  99 => 48,  95 => 46,  89 => 42,  87 => 41,  84 => 40,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "04e2f73a724769eb6ba48d34c45c16f2ce8f1f3e", "");
    }
}
