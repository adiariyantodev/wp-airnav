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

/* 761e98949aa64e93aa8239b8f7b1a1a4a6f886db */
class __TwigTemplate_19acd094598e2492a6ce1cca4c9ea9c8 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "761e98949aa64e93aa8239b8f7b1a1a4a6f886db", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        if ((($context["isBuilder"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 4), "disable_builder_label", [], "any", false, false, false, 4))) {
            // line 5
            echo "  <div style=\"padding: 20px; background: repeating-linear-gradient(145deg, #eff6ff, #eff6ff 10px, #d8e3f9 10px, #d8e3f9 20px); width: 100%; color: black; font-weight: bold;\">
    ";
            // line 6
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 6), "builder_label", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 6), "builder_label", [], "any", false, false, false, 6), "Code Block")) : ("Code Block"));
            echo "
  </div>
";
        }
        // line 9
        echo "
";
        // line 10
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 10), "php_code", [], "any", false, false, false, 10)) {
            // line 11
            echo "  %%SSR%%
";
        }
        // line 13
        echo "

         ";
    }

    public function getTemplateName()
    {
        return "761e98949aa64e93aa8239b8f7b1a1a4a6f886db";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  61 => 11,  59 => 10,  56 => 9,  50 => 6,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "761e98949aa64e93aa8239b8f7b1a1a4a6f886db", "");
    }
}
