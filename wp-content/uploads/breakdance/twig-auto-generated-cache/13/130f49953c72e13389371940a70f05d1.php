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

/* 440c08d9c68f4856241d9e9fb0f27ae5d5b454f4 */
class __TwigTemplate_facf81efa2ccd2cbbb0206289c0d4035 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "440c08d9c68f4856241d9e9fb0f27ae5d5b454f4", 2)->unwrap();
        // line 3
        echo "
          \$hasEntranceAnimation = !!'";
        // line 4
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 4), "animation", [], "any", false, false, false, 4), "entrance", [], "any", false, false, false, 4), "animation_type", [], "any", false, false, false, 4);
        echo "';
\$hasExitAnimation = !!'";
        // line 5
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 5), "animation", [], "any", false, false, false, 5), "exit", [], "any", false, false, false, 5), "animation_type", [], "any", false, false, false, 5);
        echo "';
return \$hasEntranceAnimation || \$hasExitAnimation;
         ";
    }

    public function getTemplateName()
    {
        return "440c08d9c68f4856241d9e9fb0f27ae5d5b454f4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "440c08d9c68f4856241d9e9fb0f27ae5d5b454f4", "");
    }
}
