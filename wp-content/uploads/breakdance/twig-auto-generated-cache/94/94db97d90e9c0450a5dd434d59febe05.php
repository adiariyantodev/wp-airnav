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

/* 169f7c4ceea3ba6a43aa30f3be28760eff5a30bc */
class __TwigTemplate_7da43acd666fff5626fa73d2bdd5e939 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "169f7c4ceea3ba6a43aa30f3be28760eff5a30bc", 2)->unwrap();
        // line 3
        echo "
          let video = document.querySelector(\"%%SELECTOR%% video\");

const { matchMedia } = window.BreakdanceFrontend.utils;
if (matchMedia('breakpoint_phone_landscape') || matchMedia('breakpoint_phone_portrait')) {
  video.removeAttribute('autoplay');
}

         ";
    }

    public function getTemplateName()
    {
        return "169f7c4ceea3ba6a43aa30f3be28760eff5a30bc";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "169f7c4ceea3ba6a43aa30f3be28760eff5a30bc", "");
    }
}
