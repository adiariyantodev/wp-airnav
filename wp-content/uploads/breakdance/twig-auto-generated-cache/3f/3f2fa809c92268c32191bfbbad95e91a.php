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

/* 081465edeaefcb994fdb6a4ac63b3b8dbbd5d5ca */
class __TwigTemplate_7c4d6ea9b2c3e5ccd91a1fc3f56b8a43 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "081465edeaefcb994fdb6a4ac63b3b8dbbd5d5ca", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 4), "scroll_behavior", [], "any", false, false, false, 4), "reveal_on_scroll_up", [], "any", false, false, false, 4)) {
            // line 5
            echo "yes
";
        }
        // line 7
        echo "         ";
    }

    public function getTemplateName()
    {
        return "081465edeaefcb994fdb6a4ac63b3b8dbbd5d5ca";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "081465edeaefcb994fdb6a4ac63b3b8dbbd5d5ca", "");
    }
}
