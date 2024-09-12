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

/* 80eba0be724128cd1747652c2fb911c359d75071 */
class __TwigTemplate_197d825ebc5815586ca93bc6d713cd0c extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "80eba0be724128cd1747652c2fb911c359d75071", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        echo twig_call_macro($macros["macros"], "macro_atomV1IconHtml", ["bde-icon-icon", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 4), "icon", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 4), "rotate", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 4), "link", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 4)], 4, $context, $this->getSourceContext());
        echo "

         ";
    }

    public function getTemplateName()
    {
        return "80eba0be724128cd1747652c2fb911c359d75071";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "80eba0be724128cd1747652c2fb911c359d75071", "");
    }
}
