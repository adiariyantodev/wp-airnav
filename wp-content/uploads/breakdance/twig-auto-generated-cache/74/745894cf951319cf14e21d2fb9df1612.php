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

/* 1136d1f4006eb95049778bf05a90112df94bf770 */
class __TwigTemplate_e3daf45d43a7fe2d236a664a1ae7cc50 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "1136d1f4006eb95049778bf05a90112df94bf770", 2)->unwrap();
        // line 3
        echo "
          
        ";
        // line 5
        $context["position"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "animations", [], "any", false, false, false, 5), "sticky", [], "any", false, false, false, 5), "position", [], "any", false, false, false, 5);
        // line 6
        echo "        return ";
        echo (((($context["position"] ?? null) && (($context["position"] ?? null) != "none"))) ? ("true") : ("false"));
        echo ";
    
         ";
    }

    public function getTemplateName()
    {
        return "1136d1f4006eb95049778bf05a90112df94bf770";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "1136d1f4006eb95049778bf05a90112df94bf770", "");
    }
}
