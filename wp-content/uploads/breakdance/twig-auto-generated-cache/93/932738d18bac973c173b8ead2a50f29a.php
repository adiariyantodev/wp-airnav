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

/* 51e8db1d39c7c39d77f9c150236ebdee990dac43 */
class __TwigTemplate_fc5d8cc7a15edb0177f1f3396f2d5938 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "51e8db1d39c7c39d77f9c150236ebdee990dac43", 2)->unwrap();
        // line 3
        echo "
          new BreakdanceCounter('%%SELECTOR%%', ";
        // line 4
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "counter", [], "any", false, false, false, 4));
        echo ");
         ";
    }

    public function getTemplateName()
    {
        return "51e8db1d39c7c39d77f9c150236ebdee990dac43";
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
        return new Source("", "51e8db1d39c7c39d77f9c150236ebdee990dac43", "");
    }
}
