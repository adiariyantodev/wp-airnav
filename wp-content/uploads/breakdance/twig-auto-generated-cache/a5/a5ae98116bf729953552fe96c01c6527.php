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

/* eda4d72ec6f23840eea899a23ea9cb8a090e3511 */
class __TwigTemplate_4b2d3631b6e7b4b9ef47668dff379b03 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "eda4d72ec6f23840eea899a23ea9cb8a090e3511", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  ";
        // line 5
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 5)], 5, $context, $this->getSourceContext());
        echo "
  --bde-fancy-divider-border-style: ";
        // line 6
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "divider", [], "any", false, false, false, 6), "style", [], "any", false, false, false, 6);
        echo ";
  --bde-fancy-divider-border-size: ";
        // line 7
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "divider", [], "any", false, false, false, 7), "pattern", [], "any", false, false, false, 7), "size", [], "any", false, false, false, 7), "style", [], "any", false, false, false, 7);
        echo ";
  --bde-fancy-divider-border-color: ";
        // line 8
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "divider", [], "any", false, false, false, 8), "pattern", [], "any", false, false, false, 8), "color", [], "any", false, false, false, 8);
        echo ";
  ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "divider", [], "any", false, false, false, 9), "style", [], "any", false, false, false, 9) && !twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "divider", [], "any", false, false, false, 9), "style", [], "any", false, false, false, 9), [0 => "dotted", 1 => "dashed", 2 => "solid", 3 => "double"]))) {
            // line 10
            echo "    ";
            $context["patternUrl"] = (((Breakdance\PluginsAPI\getBreakdanceElementsPluginUrl() . "dependencies-files/svg-line-patterns@1/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "divider", [], "any", false, false, false, 10), "style", [], "any", false, false, false, 10)) . ".svg");
            // line 11
            echo "  \t--bde-fancy-divider-pattern-url: url('";
            echo ($context["patternUrl"] ?? null);
            echo "');
    --bde-fancy-divider-pattern-height: ";
            // line 12
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "divider", [], "any", false, false, false, 12), "pattern", [], "any", false, false, false, 12), "size", [], "any", false, false, false, 12), "style", [], "any", false, false, false, 12);
            echo ";
    --bde-fancy-divider-pattern-size: ";
            // line 13
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "divider", [], "any", false, false, false, 13), "pattern", [], "any", false, false, false, 13), "amount", [], "any", false, false, false, 13), "style", [], "any", false, false, false, 13);
            echo ";

  ";
        }
        // line 16
        echo "  width: ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "divider", [], "any", false, false, false, 16), "width", [], "any", false, false, false, 16), "style", [], "any", false, false, false, 16);
        echo ";
}

/* Image */
%%SELECTOR%% .bde-fancy-divider__content {
  margin-right: ";
        // line 21
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "content", [], "any", false, false, false, 21), "space_around", [], "any", false, false, false, 21), "style", [], "any", false, false, false, 21);
        echo ";
  margin-left: ";
        // line 22
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "content", [], "any", false, false, false, 22), "space_around", [], "any", false, false, false, 22), "style", [], "any", false, false, false, 22);
        echo ";
}

%%SELECTOR%% .bde-fancy-divider__separator.has-content {
  justify-content: ";
        // line 26
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "content", [], "any", false, false, false, 26), "position", [], "any", false, false, false, 26);
        echo ";
}

%%SELECTOR%% .bde-fancy-divider__content--text {
  ";
        // line 30
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "content", [], "any", false, false, false, 30), "typography", [], "any", false, false, false, 30), ($context["globalSettings"] ?? null)], 30, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .bde-fancy-divider__content--icon {
  font-size: ";
        // line 34
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "content", [], "any", false, false, false, 34), "size", [], "any", false, false, false, 34), "style", [], "any", false, false, false, 34);
        echo ";
  color: ";
        // line 35
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "content", [], "any", false, false, false, 35), "color", [], "any", false, false, false, 35);
        echo ";
  width: ";
        // line 36
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "content", [], "any", false, false, false, 36), "size", [], "any", false, false, false, 36), "style", [], "any", false, false, false, 36);
        echo ";
}

%%SELECTOR%% .bde-fancy-divider__content--image img {
  ";
        // line 40
        echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "content", [], "any", false, false, false, 40), "borders", [], "any", false, false, false, 40)], 40, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .bde-fancy-divider__content--image {
  width: ";
        // line 44
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "content", [], "any", false, false, false, 44), "width", [], "any", false, false, false, 44), "style", [], "any", false, false, false, 44);
        echo ";
}


";
        // line 49
        echo "

    %%SELECTOR%% {
        ";
        // line 52
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 53
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 53), "wrapper", [], "any", false, false, false, 53), "background", [], "any", false, false, false, 53), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 54
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 54), "wrapper", [], "any", false, false, false, 54), "layout", [], "any", false, false, false, 54), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 55
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 55), "wrapper", [], "any", false, false, false, 55), "size", [], "any", false, false, false, 55), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 56
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 56), "wrapper", [], "any", false, false, false, 56), "typography", [], "any", false, false, false, 56),         // line 57
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 58
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 58), "wrapper", [], "any", false, false, false, 58), "spacing", [], "any", false, false, false, 58), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 59
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 59), "wrapper", [], "any", false, false, false, 59), "borders", [], "any", false, false, false, 59), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 60
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 60), "wrapper", [], "any", false, false, false, 60), "effects", [], "any", false, false, false, 60)], 52, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 64
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 65
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 65), "wrapper_hover", [], "any", false, false, false, 65), "background", [], "any", false, false, false, 65), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 66
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 66), "wrapper_hover", [], "any", false, false, false, 66), "layout", [], "any", false, false, false, 66), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 67
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 67), "wrapper_hover", [], "any", false, false, false, 67), "size", [], "any", false, false, false, 67), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 68
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 68), "wrapper_hover", [], "any", false, false, false, 68), "typography", [], "any", false, false, false, 68),         // line 69
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 70
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 70), "wrapper_hover", [], "any", false, false, false, 70), "spacing", [], "any", false, false, false, 70), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 71
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 71), "wrapper_hover", [], "any", false, false, false, 71), "borders", [], "any", false, false, false, 71), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 72
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 72), "wrapper_hover", [], "any", false, false, false, 72), "effects", [], "any", false, false, false, 72)], 64, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 76
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 76), "css", [], "any", false, false, false, 76);
        echo "


";
        // line 79
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 79), "hide", [], "any", false, false, false, 79)))) {
            // line 80
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 81
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 81), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 81), "hide", [], "any", false, false, false, 81))) {
                    // line 82
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 84
                    if (($context["isBuilder"] ?? null)) {
                        // line 85
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 88
                        echo "                        display: none;
                    ";
                    }
                    // line 90
                    echo "                }
            }
        ";
                }
                // line 93
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 95
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "eda4d72ec6f23840eea899a23ea9cb8a090e3511";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 95,  218 => 93,  213 => 90,  209 => 88,  204 => 85,  202 => 84,  196 => 82,  193 => 81,  188 => 80,  186 => 79,  180 => 76,  173 => 72,  172 => 71,  171 => 70,  170 => 69,  169 => 68,  168 => 67,  167 => 66,  166 => 65,  165 => 64,  158 => 60,  157 => 59,  156 => 58,  155 => 57,  154 => 56,  153 => 55,  152 => 54,  151 => 53,  150 => 52,  145 => 49,  138 => 44,  131 => 40,  124 => 36,  120 => 35,  116 => 34,  109 => 30,  102 => 26,  95 => 22,  91 => 21,  82 => 16,  76 => 13,  72 => 12,  67 => 11,  64 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "eda4d72ec6f23840eea899a23ea9cb8a090e3511", "");
    }
}
