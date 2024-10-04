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

/* e794bc162e71b5e4548ef661d8767c97931cade5 */
class __TwigTemplate_eaf0205ec496de7a02a2801d477e894c extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "e794bc162e71b5e4548ef661d8767c97931cade5", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        echo twig_call_macro($macros["macros"], "macro_EssentialElements_PostsSharedCss", ["%%SELECTOR%%", ($context["design"] ?? null), ($context["globalSettings"] ?? null), ($context["isBaseBreakpoint"] ?? null), ($context["breakpoint"] ?? null), ($context["isBuilder"] ?? null)], 4, $context, $this->getSourceContext());
        echo "

%%SELECTOR%% .ee-post {
background-color: ";
        // line 7
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 7), "background", [], "any", false, false, false, 7);
        echo ";
";
        // line 8
        echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 8), "borders", [], "any", false, false, false, 8)], 8, $context, $this->getSourceContext());
        echo "
    ";
        // line 9
        echo twig_call_macro($macros["macros"], "macro_spacing_padding_all", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 9), "padding", [], "any", false, false, false, 9)], 9, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% {
background-color: ";
        // line 13
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 13), "background", [], "any", false, false, false, 13);
        echo ";
";
        // line 14
        echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 14), "borders", [], "any", false, false, false, 14)], 14, $context, $this->getSourceContext());
        echo "
    ";
        // line 15
        echo twig_call_macro($macros["macros"], "macro_spacing_padding_all", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 15), "padding", [], "any", false, false, false, 15)], 15, $context, $this->getSourceContext());
        echo "
}

";
        // line 19
        echo "

    %%SELECTOR%% {
        ";
        // line 22
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 23
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 23), "wrapper", [], "any", false, false, false, 23), "background", [], "any", false, false, false, 23), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 24
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 24), "wrapper", [], "any", false, false, false, 24), "layout", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 25
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 25), "wrapper", [], "any", false, false, false, 25), "size", [], "any", false, false, false, 25), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 26
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 26), "wrapper", [], "any", false, false, false, 26), "typography", [], "any", false, false, false, 26),         // line 27
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 28
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 28), "wrapper", [], "any", false, false, false, 28), "spacing", [], "any", false, false, false, 28), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 29
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 29), "wrapper", [], "any", false, false, false, 29), "borders", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 30
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 30), "wrapper", [], "any", false, false, false, 30), "effects", [], "any", false, false, false, 30)], 22, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 34
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 35
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 35), "wrapper_hover", [], "any", false, false, false, 35), "background", [], "any", false, false, false, 35), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 36
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 36), "wrapper_hover", [], "any", false, false, false, 36), "layout", [], "any", false, false, false, 36), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 37
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 37), "wrapper_hover", [], "any", false, false, false, 37), "size", [], "any", false, false, false, 37), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 38
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 38), "wrapper_hover", [], "any", false, false, false, 38), "typography", [], "any", false, false, false, 38),         // line 39
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 40
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 40), "wrapper_hover", [], "any", false, false, false, 40), "spacing", [], "any", false, false, false, 40), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 41
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 41), "wrapper_hover", [], "any", false, false, false, 41), "borders", [], "any", false, false, false, 41), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 42
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 42), "wrapper_hover", [], "any", false, false, false, 42), "effects", [], "any", false, false, false, 42)], 34, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 46
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 46), "css", [], "any", false, false, false, 46);
        echo "


";
        // line 49
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 49), "hide", [], "any", false, false, false, 49)))) {
            // line 50
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 51
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 51), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 51), "hide", [], "any", false, false, false, 51))) {
                    // line 52
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 54
                    if (($context["isBuilder"] ?? null)) {
                        // line 55
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 58
                        echo "                        display: none;
                    ";
                    }
                    // line 60
                    echo "                }
            }
        ";
                }
                // line 63
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 65
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "e794bc162e71b5e4548ef661d8767c97931cade5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 65,  153 => 63,  148 => 60,  144 => 58,  139 => 55,  137 => 54,  131 => 52,  128 => 51,  123 => 50,  121 => 49,  115 => 46,  108 => 42,  107 => 41,  106 => 40,  105 => 39,  104 => 38,  103 => 37,  102 => 36,  101 => 35,  100 => 34,  93 => 30,  92 => 29,  91 => 28,  90 => 27,  89 => 26,  88 => 25,  87 => 24,  86 => 23,  85 => 22,  80 => 19,  74 => 15,  70 => 14,  66 => 13,  59 => 9,  55 => 8,  51 => 7,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "e794bc162e71b5e4548ef661d8767c97931cade5", "");
    }
}
