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

/* 76d878f1fdd2b0b5a2eef4a7da5801faf03eb547 */
class __TwigTemplate_0ef20655b669f0b00de09149b404f00b extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "76d878f1fdd2b0b5a2eef4a7da5801faf03eb547", 2)->unwrap();
        // line 3
        echo "
          new AwesomeMenu(\"%%SELECTOR%% .breakdance-menu\", {
  dropdown: {
    openOnClick: ";
        // line 6
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "desktop_menu", [], "any", false, false, false, 6), "dropdowns", [], "any", false, false, false, 6), "open_dropdowns_on_click", [], "any", false, false, false, 6)) ? ("true") : ("false"));
        echo ",
    placement: '";
        // line 7
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "desktop_menu", [], "any", false, true, false, 7), "dropdowns", [], "any", false, true, false, 7), "wrapper", [], "any", false, true, false, 7), "placement", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "desktop_menu", [], "any", false, true, false, 7), "dropdowns", [], "any", false, true, false, 7), "wrapper", [], "any", false, true, false, 7), "placement", [], "any", false, false, false, 7), "default")) : ("default"));
        echo "',
    width: '";
        // line 8
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "desktop_menu", [], "any", false, true, false, 8), "dropdowns", [], "any", false, true, false, 8), "wrapper", [], "any", false, true, false, 8), "width", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "desktop_menu", [], "any", false, true, false, 8), "dropdowns", [], "any", false, true, false, 8), "wrapper", [], "any", false, true, false, 8), "width", [], "any", false, false, false, 8), "default")) : ("default"));
        echo "',
    animation: '";
        // line 9
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "desktop_menu", [], "any", false, true, false, 9), "dropdowns", [], "any", false, true, false, 9), "wrapper", [], "any", false, true, false, 9), "animation", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "desktop_menu", [], "any", false, true, false, 9), "dropdowns", [], "any", false, true, false, 9), "wrapper", [], "any", false, true, false, 9), "animation", [], "any", false, false, false, 9), "fade")) : ("fade"));
        echo "'
  },
  link: {
    effect: '";
        // line 12
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "desktop_menu", [], "any", false, false, false, 12), "links", [], "any", false, false, false, 12), "effect", [], "any", false, false, false, 12), "effect_type", [], "any", false, false, false, 12);
        echo "',
  \teffectDirection: '";
        // line 13
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "desktop_menu", [], "any", false, false, false, 13), "links", [], "any", false, false, false, 13), "effect", [], "any", false, false, false, 13), "effect_direction", [], "any", false, false, false, 13);
        echo "',
  },
  mobile: {
    breakpoint: '";
        // line 16
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "mobile_menu", [], "any", false, false, false, 16), "show_at", [], "any", false, false, false, 16);
        echo "',
    fullscreen: ";
        // line 17
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "mobile_menu", [], "any", false, false, false, 17), "mode", [], "any", false, false, false, 17) == "fullscreen")) ? ("true") : ("false"));
        echo ",
    offcanvas: ";
        // line 18
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "mobile_menu", [], "any", false, false, false, 18), "mode", [], "any", false, false, false, 18) == "offcanvas")) ? ("true") : ("false"));
        echo ",
    offcanvasPosition: '";
        // line 19
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "mobile_menu", [], "any", false, false, false, 19), "offcanvas_position", [], "any", false, false, false, 19);
        echo "',
    offset: ";
        // line 20
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "mobile_menu", [], "any", false, true, false, 20), "offset", [], "any", false, true, false, 20), "number", [], "any", true, true, false, 20) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "mobile_menu", [], "any", false, true, false, 20), "offset", [], "any", false, true, false, 20), "number", [], "any", false, false, false, 20)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "mobile_menu", [], "any", false, true, false, 20), "offset", [], "any", false, true, false, 20), "number", [], "any", false, false, false, 20)) : ("null"));
        echo "
  }
});
         ";
    }

    public function getTemplateName()
    {
        return "76d878f1fdd2b0b5a2eef4a7da5801faf03eb547";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 20,  87 => 19,  83 => 18,  79 => 17,  75 => 16,  69 => 13,  65 => 12,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "76d878f1fdd2b0b5a2eef4a7da5801faf03eb547", "");
    }
}
