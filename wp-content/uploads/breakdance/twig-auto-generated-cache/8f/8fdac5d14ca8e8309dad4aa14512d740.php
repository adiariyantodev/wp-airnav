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

/* e9f10aada4e055303b58ffab3d78d571ccf3ee4c */
class __TwigTemplate_228a6034b244fd640515f44f8e1db9e4 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "e9f10aada4e055303b58ffab3d78d571ccf3ee4c", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 4), "type", [], "any", false, false, false, 4) == "video") && twig_in_filter("vimeo", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 5
($context["design"] ?? null), "background", [], "any", false, false, false, 5), "video", [], "any", false, false, false, 5), "embedUrl", [], "any", false, false, false, 5)))) {
            // line 7
            echo "return true;
";
        } else {
            // line 9
            echo " return false;
";
        }
        // line 11
        echo "         ";
    }

    public function getTemplateName()
    {
        return "e9f10aada4e055303b58ffab3d78d571ccf3ee4c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  52 => 9,  48 => 7,  46 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "e9f10aada4e055303b58ffab3d78d571ccf3ee4c", "");
    }
}
