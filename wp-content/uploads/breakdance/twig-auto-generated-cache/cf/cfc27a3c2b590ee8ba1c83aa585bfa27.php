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

/* 306d1d31a04125bc2c70073d5a1a7d5023e1f47f */
class __TwigTemplate_0bb09d2b4f7ba0eac0c8287a3b290460 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "306d1d31a04125bc2c70073d5a1a7d5023e1f47f", 2)->unwrap();
        // line 3
        echo "
          
        %%SELECTOR%% {
            ";
        // line 6
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [($context["background"] ?? null), ($context["layout"] ?? null), ($context["size"] ?? null), ($context["typography"] ?? null), ($context["globalSettings"] ?? null), ($context["spacing"] ?? null), ($context["borders"] ?? null), ($context["effects"] ?? null)], 6, $context, $this->getSourceContext());
        echo "
        }

    ";
        // line 9
        echo twig_call_macro($macros["macros"], "macro_css", [($context["custom_css"] ?? null)], 9, $context, $this->getSourceContext());
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "306d1d31a04125bc2c70073d5a1a7d5023e1f47f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  47 => 6,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "306d1d31a04125bc2c70073d5a1a7d5023e1f47f", "");
    }
}
