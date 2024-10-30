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

/* f9992bb0c9fb3dd9fd338367069f80fb75b8e059 */
class __TwigTemplate_fb92b28bea55e3122fb971e1747d0c4a extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "f9992bb0c9fb3dd9fd338367069f80fb75b8e059", 2)->unwrap();
        // line 3
        echo "
          <div class=\"bde-simple-counter__wrapper\">
  <h6 class=\"bde-simple-counter__number\">
    <span class=\"bde-simple-counter__prefix\">";
        // line 6
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "counter", [], "any", false, false, false, 6), "prefix", [], "any", false, false, false, 6);
        echo "</span>
    <span class=\"bde-simple-counter__digit js-digit\"></span>
    <span class=\"bde-simple-counter__suffix\">";
        // line 8
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "counter", [], "any", false, false, false, 8), "suffix", [], "any", false, false, false, 8);
        echo "</span>
  </h6>
  ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "counter", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10)) {
            // line 11
            echo "  \t<div class=\"bde-simple-counter__title\" ";
            echo Breakdance\PluginsAPI\content_editable_php("content.counter.title");
            echo ">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "counter", [], "any", false, false, false, 11), "title", [], "any", false, false, false, 11);
            echo "</div>
  ";
        }
        // line 13
        echo "</div>

         ";
    }

    public function getTemplateName()
    {
        return "f9992bb0c9fb3dd9fd338367069f80fb75b8e059";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  59 => 11,  57 => 10,  52 => 8,  47 => 6,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "f9992bb0c9fb3dd9fd338367069f80fb75b8e059", "");
    }
}
