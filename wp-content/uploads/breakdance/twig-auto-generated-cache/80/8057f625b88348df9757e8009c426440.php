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

/* 0a98b9898091bae9f2c91f6331ee56b97120e7a1 */
class __TwigTemplate_9d7523e557b2f315a0df4d6a87124dc6 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "0a98b9898091bae9f2c91f6331ee56b97120e7a1", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video", [], "any", false, false, false, 4), "video", [], "any", false, false, false, 4), "provider", [], "any", false, false, false, 4) == "youtube") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 4), "loading_method", [], "any", false, false, false, 4) == "lightweight"))) {
            // line 5
            echo "return true;
";
        }
        // line 7
        echo "         ";
    }

    public function getTemplateName()
    {
        return "0a98b9898091bae9f2c91f6331ee56b97120e7a1";
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
        return new Source("", "0a98b9898091bae9f2c91f6331ee56b97120e7a1", "");
    }
}
