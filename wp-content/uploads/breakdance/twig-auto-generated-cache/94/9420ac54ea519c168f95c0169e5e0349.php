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

/* fd8a0277e88ab71872906536173148b27fa93ba5 */
class __TwigTemplate_0b1f45f71a647846322da5795b9cdf02 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "fd8a0277e88ab71872906536173148b27fa93ba5", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        $context["options"] = ["removeColumnTitles" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 5
($context["design"] ?? null), "mobile_menu", [], "any", false, false, false, 5), "links", [], "any", false, false, false, 5), "remove_column_titles", [], "any", false, false, false, 5), "toggle" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 6
($context["design"] ?? null), "mobile_menu", [], "any", false, false, false, 6), "toggle", [], "any", false, false, false, 6)];
        // line 8
        echo "
";
        // line 9
        $context["topbarOptions"] = ["mode" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 10
($context["design"] ?? null), "mobile_menu", [], "any", false, false, false, 10), "mode", [], "any", false, false, false, 10), "layout" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
($context["design"] ?? null), "mobile_menu", [], "any", false, false, false, 11), "top_bar", [], "any", false, false, false, 11)];
        // line 13
        echo "
";
        // line 14
        echo twig_call_macro($macros["macros"], "macro_menuStart", [($context["options"] ?? null)], 14, $context, $this->getSourceContext());
        echo "
  <div class=\"breakdance-menu-list\">
    ";
        // line 16
        echo twig_call_macro($macros["macros"], "macro_menuTopbar", [($context["topbarOptions"] ?? null)], 16, $context, $this->getSourceContext());
        echo "
    %%CHILDREN%%
  </div>
";
        // line 19
        echo twig_call_macro($macros["macros"], "macro_menuEnd", [], 19, $context, $this->getSourceContext());
        echo "

         ";
    }

    public function getTemplateName()
    {
        return "fd8a0277e88ab71872906536173148b27fa93ba5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  64 => 16,  59 => 14,  56 => 13,  54 => 11,  53 => 10,  52 => 9,  49 => 8,  47 => 6,  46 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fd8a0277e88ab71872906536173148b27fa93ba5", "");
    }
}
