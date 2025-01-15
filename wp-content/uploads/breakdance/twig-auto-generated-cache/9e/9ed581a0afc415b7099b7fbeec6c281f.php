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

/* 93a2ae8c6e41a35bc79eacd128ee9a133a151164 */
class __TwigTemplate_6fa65f1d1ccdcc67fdfb55143261ac16 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "93a2ae8c6e41a35bc79eacd128ee9a133a151164", 2)->unwrap();
        // line 3
        echo "
          window.YT.ready(() => {
  const element = document.querySelector('%%SELECTOR%% .section-background-iframe');
  window.breakdanceYoutube.createInstance(element, %%ID%%, {
                                       loop: ";
        // line 7
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 7), "video_settings", [], "any", false, false, false, 7), "no_loop", [], "any", false, false, false, 7) == 1)) ? ("false") : ("true"));
        echo ",
                start_time: ";
        // line 8
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 8), "video_settings", [], "any", false, true, false, 8), "start_time", [], "any", true, true, false, 8) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 8), "video_settings", [], "any", false, true, false, 8), "start_time", [], "any", false, false, false, 8)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 8), "video_settings", [], "any", false, true, false, 8), "start_time", [], "any", false, false, false, 8)) : (0));
        echo ",
  end_time: ";
        // line 9
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 9), "video_settings", [], "any", false, true, false, 9), "end_time", [], "any", true, true, false, 9) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 9), "video_settings", [], "any", false, true, false, 9), "end_time", [], "any", false, false, false, 9)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 9), "video_settings", [], "any", false, true, false, 9), "end_time", [], "any", false, false, false, 9)) : ("null"));
        echo ",
    pause_when_out_of_view: ";
        // line 10
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 10), "video_settings", [], "any", false, false, false, 10), "pause_when_out_of_view", [], "any", false, false, false, 10) == 1)) ? ("true") : ("false"));
        echo ",
});
});
         ";
    }

    public function getTemplateName()
    {
        return "93a2ae8c6e41a35bc79eacd128ee9a133a151164";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  56 => 9,  52 => 8,  48 => 7,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "93a2ae8c6e41a35bc79eacd128ee9a133a151164", "");
    }
}
