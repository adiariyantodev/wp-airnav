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

/* a3c70c44fdc939d2aac11012962b86b94ab1aaf5 */
class __TwigTemplate_1d64be8b1c9d50c065832b11a9df01a4 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "a3c70c44fdc939d2aac11012962b86b94ab1aaf5", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  width: ";
        // line 5
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 5), "width", [], "any", false, false, false, 5), "style", [], "any", false, false, false, 5);
        echo ";
  min-height: ";
        // line 6
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 6), "min_height", [], "any", false, false, false, 6), "style", [], "any", false, false, false, 6);
        echo ";
  ";
        // line 7
        echo twig_call_macro($macros["macros"], "macro_backgroundColor", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 7), "background", [], "any", false, false, false, 7)], 7, $context, $this->getSourceContext());
        echo "
  ";
        // line 8
        echo twig_call_macro($macros["macros"], "macro_spacing_padding_all", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 8), "padding", [], "any", false, false, false, 8)], 8, $context, $this->getSourceContext());
        echo "
  ";
        // line 9
        echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 9), "borders", [], "any", false, false, false, 9)], 9, $context, $this->getSourceContext());
        echo "
  ";
        // line 10
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 10)], 10, $context, $this->getSourceContext());
        echo "
  ";
        // line 11
        echo twig_call_macro($macros["macros"], "macro_simpleLayout", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 11), ($context["breakpoint"] ?? null)], 11, $context, $this->getSourceContext());
        echo "

  ";
        // line 14
        echo "  height: ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 14), "height", [], "any", false, false, false, 14), "style", [], "any", false, false, false, 14);
        echo ";
  ";
        // line 16
        echo "
}

";
        // line 19
        echo twig_call_macro($macros["macros"], "macro_fancyBackgroundCss", ["%%SELECTOR%%", twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 19), ($context["breakpoint"] ?? null), false, true], 19, $context, $this->getSourceContext());
        echo "

";
        // line 22
        echo "%%SELECTOR%% {
  ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 23), "text", [], "any", false, false, false, 23)) {
            // line 24
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 24), "text", [], "any", false, false, false, 24);
            echo ";
  ";
        }
        // line 26
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 26), "brand", [], "any", false, false, false, 26)) {
            // line 27
            echo "    --bde-brand-primary-color: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 27), "brand", [], "any", false, false, false, 27);
            echo ";
  ";
        }
        // line 29
        echo "}

";
        // line 31
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 31), "headings", [], "any", false, false, false, 31)) {
            // line 32
            echo "  %%SELECTOR%% h1, %%SELECTOR%% h2, %%SELECTOR%% h3, %%SELECTOR%% h4, %%SELECTOR%% h5, %%SELECTOR%% h6 {
    color: ";
            // line 33
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 33), "headings", [], "any", false, false, false, 33);
            echo ";
  }
";
        }
        // line 36
        echo "
";
        // line 37
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 37), "link", [], "any", false, false, false, 37)) {
            // line 38
            echo "  %%SELECTOR%% a {
    color: ";
            // line 39
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 39), "link", [], "any", false, false, false, 39);
            echo ";
  }
";
        }
        // line 42
        echo "
";
        // line 43
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 43), "link_hover", [], "any", false, false, false, 43)) {
            // line 44
            echo "  %%SELECTOR%% a:hover {
    color: ";
            // line 45
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 45), "link_hover", [], "any", false, false, false, 45);
            echo ";
  }
";
        }
        // line 48
        echo "
";
        // line 50
        echo "

    %%SELECTOR%% {
        ";
        // line 53
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 54
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 54), "wrapper", [], "any", false, false, false, 54), "background", [], "any", false, false, false, 54), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 55
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 55), "wrapper", [], "any", false, false, false, 55), "layout", [], "any", false, false, false, 55), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 56
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 56), "wrapper", [], "any", false, false, false, 56), "size", [], "any", false, false, false, 56), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 57
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 57), "wrapper", [], "any", false, false, false, 57), "typography", [], "any", false, false, false, 57),         // line 58
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 59
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 59), "wrapper", [], "any", false, false, false, 59), "spacing", [], "any", false, false, false, 59), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 60
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 60), "wrapper", [], "any", false, false, false, 60), "borders", [], "any", false, false, false, 60), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 61
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 61), "wrapper", [], "any", false, false, false, 61), "effects", [], "any", false, false, false, 61)], 53, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 65
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 66
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 66), "wrapper_hover", [], "any", false, false, false, 66), "background", [], "any", false, false, false, 66), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 67
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 67), "wrapper_hover", [], "any", false, false, false, 67), "layout", [], "any", false, false, false, 67), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 68
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 68), "wrapper_hover", [], "any", false, false, false, 68), "size", [], "any", false, false, false, 68), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 69
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 69), "wrapper_hover", [], "any", false, false, false, 69), "typography", [], "any", false, false, false, 69),         // line 70
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 71
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 71), "wrapper_hover", [], "any", false, false, false, 71), "spacing", [], "any", false, false, false, 71), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 72
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 72), "wrapper_hover", [], "any", false, false, false, 72), "borders", [], "any", false, false, false, 72), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 73
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 73), "wrapper_hover", [], "any", false, false, false, 73), "effects", [], "any", false, false, false, 73)], 65, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 77
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 77), "css", [], "any", false, false, false, 77);
        echo "


";
        // line 80
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 80), "hide", [], "any", false, false, false, 80)))) {
            // line 81
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 82
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 82), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 82), "hide", [], "any", false, false, false, 82))) {
                    // line 83
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 85
                    if (($context["isBuilder"] ?? null)) {
                        // line 86
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 89
                        echo "                        display: none;
                    ";
                    }
                    // line 91
                    echo "                }
            }
        ";
                }
                // line 94
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 96
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "a3c70c44fdc939d2aac11012962b86b94ab1aaf5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 96,  229 => 94,  224 => 91,  220 => 89,  215 => 86,  213 => 85,  207 => 83,  204 => 82,  199 => 81,  197 => 80,  191 => 77,  184 => 73,  183 => 72,  182 => 71,  181 => 70,  180 => 69,  179 => 68,  178 => 67,  177 => 66,  176 => 65,  169 => 61,  168 => 60,  167 => 59,  166 => 58,  165 => 57,  164 => 56,  163 => 55,  162 => 54,  161 => 53,  156 => 50,  153 => 48,  147 => 45,  144 => 44,  142 => 43,  139 => 42,  133 => 39,  130 => 38,  128 => 37,  125 => 36,  119 => 33,  116 => 32,  114 => 31,  110 => 29,  104 => 27,  101 => 26,  95 => 24,  93 => 23,  90 => 22,  85 => 19,  80 => 16,  75 => 14,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "a3c70c44fdc939d2aac11012962b86b94ab1aaf5", "");
    }
}
