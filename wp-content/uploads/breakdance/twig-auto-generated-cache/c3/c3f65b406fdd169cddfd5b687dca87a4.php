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

/* c6b219bf8e12fc1dccd11e58598754c301af49ac */
class __TwigTemplate_ffeec0425fc8f1c5dbb5a02c967b0413 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "c6b219bf8e12fc1dccd11e58598754c301af49ac", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  width: ";
        // line 5
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 5), "width", [], "any", false, false, false, 5), "style", [], "any", false, false, false, 5);
        echo ";
  ";
        // line 6
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 6), "container", [], "any", false, false, false, 6)], 6, $context, $this->getSourceContext());
        echo "
  justify-content: ";
        // line 7
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 7), "alignment", [], "any", false, false, false, 7);
        echo ";
  gap:";
        // line 8
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 8), "between_items", [], "any", false, false, false, 8), "style", [], "any", false, false, false, 8);
        echo ";
  ";
        // line 9
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 9), "text", [], "any", false, false, false, 9), ($context["globalSettings"] ?? null)], 9, $context, $this->getSourceContext());
        echo "
  align-items: ";
        // line 10
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 10), "alignment_when_vertical", [], "any", false, false, false, 10);
        echo ";
}

";
        // line 13
        if ((($context["breakpoint"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 13), "stack_vertically_at", [], "any", false, false, false, 13))) {
            // line 14
            echo "%%SELECTOR%% {
  flex-direction:column;
}
";
        }
        // line 18
        echo "    

%%SELECTOR%% li {
  ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 21), "alignment", [], "any", false, false, false, 21)) {
            // line 22
            echo "  justify-content: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 22), "alignment", [], "any", false, false, false, 22);
            echo ";
  ";
        }
        // line 24
        echo "}
%%SELECTOR%% li a {
  ";
        // line 26
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 26), "links", [], "any", false, false, false, 26), ($context["globalSettings"] ?? null)], 26, $context, $this->getSourceContext());
        echo "
}
%%SELECTOR%% li a:hover {
  ";
        // line 29
        echo twig_call_macro($macros["macros"], "macro_typographyWithHoverableEverything", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 29), "links", [], "any", false, false, false, 29)], 29, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .ee-postmeta-before {
  ";
        // line 33
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 33), "before_text", [], "any", false, false, false, 33), ($context["globalSettings"] ?? null)], 33, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .ee-postmeta-icon {
  margin-right: ";
        // line 37
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 37), "after_graphics", [], "any", false, false, false, 37), "style", [], "any", false, false, false, 37);
        echo ";
}

%%SELECTOR%% .ee-postmeta-avatar {
  ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "graphics", [], "any", false, false, false, 41), "author_avatar", [], "any", false, false, false, 41), "size", [], "any", false, false, false, 41), "style", [], "any", false, false, false, 41)) {
            // line 42
            echo "  width: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "graphics", [], "any", false, false, false, 42), "author_avatar", [], "any", false, false, false, 42), "size", [], "any", false, false, false, 42), "style", [], "any", false, false, false, 42);
            echo ";
  ";
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 43
($context["design"] ?? null), "graphics", [], "any", false, false, false, 43), "icons", [], "any", false, false, false, 43), "size", [], "any", false, false, false, 43), "style", [], "any", false, false, false, 43)) {
            // line 44
            echo "  width: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "graphics", [], "any", false, false, false, 44), "icons", [], "any", false, false, false, 44), "size", [], "any", false, false, false, 44), "style", [], "any", false, false, false, 44);
            echo ";
  ";
        }
        // line 46
        echo "  margin-right: ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 46), "after_graphics", [], "any", false, false, false, 46), "style", [], "any", false, false, false, 46);
        echo ";
}

%%SELECTOR%% .ee-postmeta-avatar img {
  border-radius: ";
        // line 50
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "graphics", [], "any", false, false, false, 50), "author_avatar", [], "any", false, false, false, 50), "border_radius", [], "any", false, false, false, 50), "style", [], "any", false, false, false, 50);
        echo ";
}

";
        // line 53
        echo twig_call_macro($macros["macros"], "macro_atomV1IconCss", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "graphics", [], "any", false, false, false, 53), "icons", [], "any", false, false, false, 53), "ee-postmeta-icon", "%%SELECTOR%%"], 53, $context, $this->getSourceContext());
        echo "
";
        // line 55
        echo "

    %%SELECTOR%% {
        ";
        // line 58
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 59
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 59), "wrapper", [], "any", false, false, false, 59), "background", [], "any", false, false, false, 59), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 60
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 60), "wrapper", [], "any", false, false, false, 60), "layout", [], "any", false, false, false, 60), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 61
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 61), "wrapper", [], "any", false, false, false, 61), "size", [], "any", false, false, false, 61), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 62
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 62), "wrapper", [], "any", false, false, false, 62), "typography", [], "any", false, false, false, 62),         // line 63
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 64
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 64), "wrapper", [], "any", false, false, false, 64), "spacing", [], "any", false, false, false, 64), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 65
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 65), "wrapper", [], "any", false, false, false, 65), "borders", [], "any", false, false, false, 65), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 66
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 66), "wrapper", [], "any", false, false, false, 66), "effects", [], "any", false, false, false, 66)], 58, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 70
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 71
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 71), "wrapper_hover", [], "any", false, false, false, 71), "background", [], "any", false, false, false, 71), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 72
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 72), "wrapper_hover", [], "any", false, false, false, 72), "layout", [], "any", false, false, false, 72), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 73
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 73), "wrapper_hover", [], "any", false, false, false, 73), "size", [], "any", false, false, false, 73), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 74
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 74), "wrapper_hover", [], "any", false, false, false, 74), "typography", [], "any", false, false, false, 74),         // line 75
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 76
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 76), "wrapper_hover", [], "any", false, false, false, 76), "spacing", [], "any", false, false, false, 76), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 77
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 77), "wrapper_hover", [], "any", false, false, false, 77), "borders", [], "any", false, false, false, 77), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 78
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 78), "wrapper_hover", [], "any", false, false, false, 78), "effects", [], "any", false, false, false, 78)], 70, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 82
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 82), "css", [], "any", false, false, false, 82);
        echo "


";
        // line 85
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 85), "hide", [], "any", false, false, false, 85)))) {
            // line 86
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 87
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 87), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 87), "hide", [], "any", false, false, false, 87))) {
                    // line 88
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 90
                    if (($context["isBuilder"] ?? null)) {
                        // line 91
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 94
                        echo "                        display: none;
                    ";
                    }
                    // line 96
                    echo "                }
            }
        ";
                }
                // line 99
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 101
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "c6b219bf8e12fc1dccd11e58598754c301af49ac";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 101,  230 => 99,  225 => 96,  221 => 94,  216 => 91,  214 => 90,  208 => 88,  205 => 87,  200 => 86,  198 => 85,  192 => 82,  185 => 78,  184 => 77,  183 => 76,  182 => 75,  181 => 74,  180 => 73,  179 => 72,  178 => 71,  177 => 70,  170 => 66,  169 => 65,  168 => 64,  167 => 63,  166 => 62,  165 => 61,  164 => 60,  163 => 59,  162 => 58,  157 => 55,  153 => 53,  147 => 50,  139 => 46,  133 => 44,  131 => 43,  126 => 42,  124 => 41,  117 => 37,  110 => 33,  103 => 29,  97 => 26,  93 => 24,  87 => 22,  85 => 21,  80 => 18,  74 => 14,  72 => 13,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "c6b219bf8e12fc1dccd11e58598754c301af49ac", "");
    }
}
