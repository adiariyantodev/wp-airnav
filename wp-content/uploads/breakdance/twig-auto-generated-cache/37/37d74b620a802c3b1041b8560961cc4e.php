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

/* 96eeb16cc30eb74f22321de27a3aa4b0fa83b905 */
class __TwigTemplate_0ac698b86aa96ac27ff7506b44071648 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "96eeb16cc30eb74f22321de27a3aa4b0fa83b905", 2)->unwrap();
        // line 3
        echo "
          window.BreakdanceSwiper().update({
  id: '%%ID%%', selector:'%%SELECTOR%%',
  settings:";
        // line 6
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 6), "slider", [], "any", false, false, false, 6), "settings", [], "any", false, false, false, 6));
        echo ",
  paginationSettings:";
        // line 7
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 7), "slider", [], "any", false, false, false, 7), "pagination", [], "any", false, false, false, 7));
        echo ",
});
         ";
    }

    public function getTemplateName()
    {
        return "96eeb16cc30eb74f22321de27a3aa4b0fa83b905";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "96eeb16cc30eb74f22321de27a3aa4b0fa83b905", "");
    }
}
