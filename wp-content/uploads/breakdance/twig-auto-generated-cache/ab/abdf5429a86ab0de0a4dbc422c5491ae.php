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

/* 1d70a205c70c75a28b8f9ba9cc5956896ea6569c */
class __TwigTemplate_3bbdf9d46abdf06202c699925f959790 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "1d70a205c70c75a28b8f9ba9cc5956896ea6569c", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        echo twig_call_macro($macros["macros"], "macro_atomV1MenuCss", ["%%SELECTOR%%", ($context["design"] ?? null), ($context["breakpoint"] ?? null), ($context["isBaseBreakpoint"] ?? null), ($context["globalSettings"] ?? null)], 4, $context, $this->getSourceContext());
        echo "

%%SELECTOR%% {
  ";
        // line 7
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 7)], 7, $context, $this->getSourceContext());
        echo "
}

";
        // line 11
        echo "

    %%SELECTOR%% {
        ";
        // line 14
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 15), "wrapper", [], "any", false, false, false, 15), "background", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 16), "wrapper", [], "any", false, false, false, 16), "layout", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 17
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 17), "wrapper", [], "any", false, false, false, 17), "size", [], "any", false, false, false, 17), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 18
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 18), "wrapper", [], "any", false, false, false, 18), "typography", [], "any", false, false, false, 18),         // line 19
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 20
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 20), "wrapper", [], "any", false, false, false, 20), "spacing", [], "any", false, false, false, 20), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 21
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 21), "wrapper", [], "any", false, false, false, 21), "borders", [], "any", false, false, false, 21), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 22
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 22), "wrapper", [], "any", false, false, false, 22), "effects", [], "any", false, false, false, 22)], 14, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 26
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 27
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 27), "wrapper_hover", [], "any", false, false, false, 27), "background", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 28
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 28), "wrapper_hover", [], "any", false, false, false, 28), "layout", [], "any", false, false, false, 28), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 29
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 29), "wrapper_hover", [], "any", false, false, false, 29), "size", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 30
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 30), "wrapper_hover", [], "any", false, false, false, 30), "typography", [], "any", false, false, false, 30),         // line 31
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 32
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 32), "wrapper_hover", [], "any", false, false, false, 32), "spacing", [], "any", false, false, false, 32), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 33
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 33), "wrapper_hover", [], "any", false, false, false, 33), "borders", [], "any", false, false, false, 33), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 34
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 34), "wrapper_hover", [], "any", false, false, false, 34), "effects", [], "any", false, false, false, 34)], 26, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 38
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 38), "css", [], "any", false, false, false, 38);
        echo "


";
        // line 41
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 41), "hide", [], "any", false, false, false, 41)))) {
            // line 42
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 43
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 43), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 43), "hide", [], "any", false, false, false, 43))) {
                    // line 44
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 46
                    if (($context["isBuilder"] ?? null)) {
                        // line 47
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 50
                        echo "                        display: none;
                    ";
                    }
                    // line 52
                    echo "                }
            }
        ";
                }
                // line 55
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 57
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "1d70a205c70c75a28b8f9ba9cc5956896ea6569c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 57,  130 => 55,  125 => 52,  121 => 50,  116 => 47,  114 => 46,  108 => 44,  105 => 43,  100 => 42,  98 => 41,  92 => 38,  85 => 34,  84 => 33,  83 => 32,  82 => 31,  81 => 30,  80 => 29,  79 => 28,  78 => 27,  77 => 26,  70 => 22,  69 => 21,  68 => 20,  67 => 19,  66 => 18,  65 => 17,  64 => 16,  63 => 15,  62 => 14,  57 => 11,  51 => 7,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "1d70a205c70c75a28b8f9ba9cc5956896ea6569c", "");
    }
}
