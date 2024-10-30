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

/* bcb95d124a6582c6f90a9fc87675e006901ea8e4 */
class __TwigTemplate_d15badc2976fe5520cde6bd49f390617 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "bcb95d124a6582c6f90a9fc87675e006901ea8e4", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  ";
        // line 5
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 5)], 5, $context, $this->getSourceContext());
        echo "
  width: ";
        // line 6
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 6), "width", [], "any", false, false, false, 6), "style", [], "any", false, false, false, 6);
        echo ";
  ";
        // line 7
        echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 7), "borders", [], "any", false, false, false, 7)], 7, $context, $this->getSourceContext());
        echo "
}
";
        // line 9
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 9), "overlay", [], "any", false, false, false, 9)) {
            // line 10
            echo "  %%SELECTOR%% .ee-video-overlay {
  position:absolute;
  top:0;
  left:0;
  bottom:0;
  right:0;
  background-color: ";
            // line 16
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 16), "overlay", [], "any", false, false, false, 16);
            echo ";
  pointer-events:none;
}
";
        }
        // line 20
        echo "%%SELECTOR%% .ee-video-container {
  ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video", [], "any", false, false, false, 21), "ratio", [], "any", false, false, false, 21) == "custom")) {
            // line 22
            echo "    ";
            $context["ratiow"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video", [], "any", false, false, false, 22), "custom_width", [], "any", false, false, false, 22);
            // line 23
            echo "    ";
            $context["ratioh"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video", [], "any", false, false, false, 23), "custom_height", [], "any", false, false, false, 23);
            // line 24
            echo "
    ";
            // line 26
            echo "    ";
            if ((($context["ratiow"] ?? null) && ($context["ratioh"] ?? null))) {
                // line 27
                echo "      ";
                $context["customratio"] = ((($context["ratioh"] ?? null) / ($context["ratiow"] ?? null)) * 100);
                // line 28
                echo "      padding-top: ";
                echo ($context["customratio"] ?? null);
                echo "%;
    ";
            }
            // line 30
            echo "  ";
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video", [], "any", false, false, false, 30), "ratio", [], "any", false, false, false, 30)) {
            // line 31
            echo "    padding-top: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video", [], "any", false, false, false, 31), "ratio", [], "any", false, false, false, 31);
            echo ";
  ";
        }
        // line 33
        echo "}

";
        // line 35
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "lazy_load", [], "any", false, false, false, 35), "lazy_load", [], "any", false, false, false, 35)) {
            // line 36
            echo "  /* lazy-load */

  %%SELECTOR%% .ee-video img {
  width:100%;
  height:100%;
  object-fit:cover;
  }

  %%SELECTOR%% .ee-video-container iframe {
  object-fit:cover;
  display:flex;
  justify-content:center;
  align-items:center;
  cursor: pointer;
  }

  /* button */

  %%SELECTOR%% .ee-video .ee-play-button {
  display: flex;
  color: ";
            // line 56
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "lazy_load", [], "any", false, true, false, 56), "icon_color", [], "any", true, true, false, 56)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "lazy_load", [], "any", false, true, false, 56), "icon_color", [], "any", false, false, false, 56), "#222")) : ("#222"));
            echo ";
  font-size: ";
            // line 57
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "lazy_load", [], "any", false, true, false, 57), "icon_size", [], "any", false, true, false, 57), "style", [], "any", true, true, false, 57)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "lazy_load", [], "any", false, true, false, 57), "icon_size", [], "any", false, true, false, 57), "style", [], "any", false, false, false, 57), "80px")) : ("80px"));
            echo ";
  position: absolute;
  left: 50%;
  top: 50%;
  width: 68px;
  height: 48px;
  margin-left: -34px;
  margin-top: -24px;
  transition:0.3s ease color;
  }
  %%SELECTOR%% .ee-video .ee-play-button:hover {
  color: ";
            // line 68
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "lazy_load", [], "any", false, false, false, 68), "icon_color_hover", [], "any", false, false, false, 68);
            echo "
  }

  %%SELECTOR%% .ee-play-button > svg {
  font-size: inherit;
  width: 1em;
  height: 1em;
  stroke-width: 0;
  stroke: currentColor;
  fill: currentColor;
  }
";
        }
        // line 80
        echo "
";
        // line 82
        echo "

    %%SELECTOR%% {
        ";
        // line 85
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 86
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 86), "wrapper", [], "any", false, false, false, 86), "background", [], "any", false, false, false, 86), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 87
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 87), "wrapper", [], "any", false, false, false, 87), "layout", [], "any", false, false, false, 87), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 88
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 88), "wrapper", [], "any", false, false, false, 88), "size", [], "any", false, false, false, 88), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 89
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 89), "wrapper", [], "any", false, false, false, 89), "typography", [], "any", false, false, false, 89),         // line 90
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 91
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 91), "wrapper", [], "any", false, false, false, 91), "spacing", [], "any", false, false, false, 91), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 92
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 92), "wrapper", [], "any", false, false, false, 92), "borders", [], "any", false, false, false, 92), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 93
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 93), "wrapper", [], "any", false, false, false, 93), "effects", [], "any", false, false, false, 93)], 85, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 97
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 98
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 98), "wrapper_hover", [], "any", false, false, false, 98), "background", [], "any", false, false, false, 98), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 99
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 99), "wrapper_hover", [], "any", false, false, false, 99), "layout", [], "any", false, false, false, 99), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 100
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 100), "wrapper_hover", [], "any", false, false, false, 100), "size", [], "any", false, false, false, 100), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 101
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 101), "wrapper_hover", [], "any", false, false, false, 101), "typography", [], "any", false, false, false, 101),         // line 102
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 103
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 103), "wrapper_hover", [], "any", false, false, false, 103), "spacing", [], "any", false, false, false, 103), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 104
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 104), "wrapper_hover", [], "any", false, false, false, 104), "borders", [], "any", false, false, false, 104), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 105
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 105), "wrapper_hover", [], "any", false, false, false, 105), "effects", [], "any", false, false, false, 105)], 97, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 109
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 109), "css", [], "any", false, false, false, 109);
        echo "


";
        // line 112
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 112), "hide", [], "any", false, false, false, 112)))) {
            // line 113
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 114
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 114), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 114), "hide", [], "any", false, false, false, 114))) {
                    // line 115
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 117
                    if (($context["isBuilder"] ?? null)) {
                        // line 118
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 121
                        echo "                        display: none;
                    ";
                    }
                    // line 123
                    echo "                }
            }
        ";
                }
                // line 126
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 128
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "bcb95d124a6582c6f90a9fc87675e006901ea8e4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 128,  248 => 126,  243 => 123,  239 => 121,  234 => 118,  232 => 117,  226 => 115,  223 => 114,  218 => 113,  216 => 112,  210 => 109,  203 => 105,  202 => 104,  201 => 103,  200 => 102,  199 => 101,  198 => 100,  197 => 99,  196 => 98,  195 => 97,  188 => 93,  187 => 92,  186 => 91,  185 => 90,  184 => 89,  183 => 88,  182 => 87,  181 => 86,  180 => 85,  175 => 82,  172 => 80,  157 => 68,  143 => 57,  139 => 56,  117 => 36,  115 => 35,  111 => 33,  105 => 31,  102 => 30,  96 => 28,  93 => 27,  90 => 26,  87 => 24,  84 => 23,  81 => 22,  79 => 21,  76 => 20,  69 => 16,  61 => 10,  59 => 9,  54 => 7,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bcb95d124a6582c6f90a9fc87675e006901ea8e4", "");
    }
}
