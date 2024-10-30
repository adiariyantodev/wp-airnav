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

/* 2f1b6056b73217cdc9f923ff16b777aa57bc443f */
class __TwigTemplate_b55273d0ef45c71e2e791b44b5cb7c4b extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "2f1b6056b73217cdc9f923ff16b777aa57bc443f", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "primary", [], "any", false, false, false, 4), "annotate", [], "any", false, false, false, 4) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "secondary", [], "any", false, false, false, 4), "annotate", [], "any", false, false, false, 4))) {
            // line 5
            echo "  return true;
";
        } else {
            // line 7
            echo "  return false;
";
        }
        // line 9
        echo "         ";
    }

    public function getTemplateName()
    {
        return "2f1b6056b73217cdc9f923ff16b777aa57bc443f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  51 => 7,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "2f1b6056b73217cdc9f923ff16b777aa57bc443f", "");
    }
}
