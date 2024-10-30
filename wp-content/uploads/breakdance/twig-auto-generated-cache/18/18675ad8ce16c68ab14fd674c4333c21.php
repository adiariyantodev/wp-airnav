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

/* 62ff144c40e49584b2964520e8c2bb5fc7e115e2 */
class __TwigTemplate_619b9ff93d291879e8f6e7dc651f09b3 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "62ff144c40e49584b2964520e8c2bb5fc7e115e2", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  width: ";
        // line 5
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 5), "width", [], "any", false, false, false, 5), "style", [], "any", false, false, false, 5);
        echo ";
  ";
        // line 6
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 6)], 6, $context, $this->getSourceContext());
        echo "
}
";
        // line 9
        echo "

    %%SELECTOR%% {
        ";
        // line 12
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 13), "wrapper", [], "any", false, false, false, 13), "background", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 14), "wrapper", [], "any", false, false, false, 14), "layout", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 15), "wrapper", [], "any", false, false, false, 15), "size", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 16), "wrapper", [], "any", false, false, false, 16), "typography", [], "any", false, false, false, 16),         // line 17
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 18
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 18), "wrapper", [], "any", false, false, false, 18), "spacing", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 19
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 19), "wrapper", [], "any", false, false, false, 19), "borders", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 20
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 20), "wrapper", [], "any", false, false, false, 20), "effects", [], "any", false, false, false, 20)], 12, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 24
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 25
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 25), "wrapper_hover", [], "any", false, false, false, 25), "background", [], "any", false, false, false, 25), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 26
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 26), "wrapper_hover", [], "any", false, false, false, 26), "layout", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 27
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 27), "wrapper_hover", [], "any", false, false, false, 27), "size", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 28
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 28), "wrapper_hover", [], "any", false, false, false, 28), "typography", [], "any", false, false, false, 28),         // line 29
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 30
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 30), "wrapper_hover", [], "any", false, false, false, 30), "spacing", [], "any", false, false, false, 30), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 31
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 31), "wrapper_hover", [], "any", false, false, false, 31), "borders", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 32
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 32), "wrapper_hover", [], "any", false, false, false, 32), "effects", [], "any", false, false, false, 32)], 24, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 36
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 36), "css", [], "any", false, false, false, 36);
        echo "


";
        // line 39
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 39), "hide", [], "any", false, false, false, 39)))) {
            // line 40
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 41
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 41), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 41), "hide", [], "any", false, false, false, 41))) {
                    // line 42
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 44
                    if (($context["isBuilder"] ?? null)) {
                        // line 45
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 48
                        echo "                        display: none;
                    ";
                    }
                    // line 50
                    echo "                }
            }
        ";
                }
                // line 53
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 55
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "62ff144c40e49584b2964520e8c2bb5fc7e115e2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 55,  128 => 53,  123 => 50,  119 => 48,  114 => 45,  112 => 44,  106 => 42,  103 => 41,  98 => 40,  96 => 39,  90 => 36,  83 => 32,  82 => 31,  81 => 30,  80 => 29,  79 => 28,  78 => 27,  77 => 26,  76 => 25,  75 => 24,  68 => 20,  67 => 19,  66 => 18,  65 => 17,  64 => 16,  63 => 15,  62 => 14,  61 => 13,  60 => 12,  55 => 9,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "62ff144c40e49584b2964520e8c2bb5fc7e115e2", "");
    }
}
