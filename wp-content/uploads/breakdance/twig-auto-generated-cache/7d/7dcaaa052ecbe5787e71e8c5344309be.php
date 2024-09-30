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

/* d7a38e1563d50969a3aca872e58f1c095a59b0ca */
class __TwigTemplate_bdecce1867124e73711d56de5bd96e5f extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "d7a38e1563d50969a3aca872e58f1c095a59b0ca", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 4), "top", [], "any", false, false, false, 4) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 4), "style", [], "any", false, false, false, 4), "borders", [], "any", false, false, false, 4), "top", [], "any", false, false, false, 4))) {
            // line 5
            echo "<div class=\"bde-header-builder__header-builder-border-top\"></div>
";
        }
        // line 7
        echo "
<div class=\"bde-header-builder__container\">%%CHILDREN%%</div>

";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 10), "bottom", [], "any", false, false, false, 10) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 10), "style", [], "any", false, false, false, 10), "borders", [], "any", false, false, false, 10), "bottom", [], "any", false, false, false, 10))) {
            // line 11
            echo "<div class=\"bde-header-builder__header-builder-border-bottom\"></div>
";
        }
        // line 13
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "d7a38e1563d50969a3aca872e58f1c095a59b0ca";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  58 => 11,  56 => 10,  51 => 7,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "d7a38e1563d50969a3aca872e58f1c095a59b0ca", "");
    }
}
