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

/* 5534103e4363aba4e95d13bdf70c1fe565d5c880 */
class __TwigTemplate_3cb25878f4575cf1340d3b544636bc1b extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "5534103e4363aba4e95d13bdf70c1fe565d5c880", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        echo twig_call_macro($macros["macros"], "macro_atomV1ButtonHtml", [($context["content"] ?? null), ($context["className"] ?? null), ($context["design"] ?? null), ($context["buttonStyle"] ?? null)], 4, $context, $this->getSourceContext());
        echo "


         ";
    }

    public function getTemplateName()
    {
        return "5534103e4363aba4e95d13bdf70c1fe565d5c880";
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
        return new Source("", "5534103e4363aba4e95d13bdf70c1fe565d5c880", "");
    }
}
