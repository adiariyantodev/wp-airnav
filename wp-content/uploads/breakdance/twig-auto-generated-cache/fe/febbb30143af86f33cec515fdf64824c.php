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

/* 12995bf10fc7b9cdf9d883fdeabfd3bb29798003 */
class __TwigTemplate_ffb798687176bb69aceddded53faaa18 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "12995bf10fc7b9cdf9d883fdeabfd3bb29798003", 2)->unwrap();
        // line 3
        echo "
          <div class=\"breakdance-dropdown ";
        // line 4
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "wrapper", [], "any", false, false, false, 4), "width", [], "any", false, false, false, 4)) ? ("breakdance-dropdown--custom") : (""));
        echo " ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 4), "link", [], "any", false, false, false, 4)) ? ("breakdance-dropdown--with-link") : (""));
        echo "\">
    ";
        // line 5
        $context["tag"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 5), "link", [], "any", false, false, false, 5)) ? ("a") : ("button"));
        // line 6
        echo "    <";
        echo ($context["tag"] ?? null);
        echo " class=\"breakdance-menu-link\" aria-haspopup=\"true\"
    aria-expanded=\"false\" ";
        // line 7
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 7), "link", [], "any", false, false, false, 7)) ? ((("href=\"" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 7), "link", [], "any", false, false, false, 7)) . "\"")) : (""));
        echo Breakdance\PluginsAPI\content_editable_php("content.content.text");
        echo "
    >
    ";
        // line 9
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 9), "text", [], "any", false, false, false, 9);
        echo "
</";
        // line 10
        echo ($context["tag"] ?? null);
        echo ">

<div class=\"breakdance-dropdown-floater\" aria-hidden=\"true\">
    <div class=\"breakdance-dropdown-body\">
        ";
        // line 14
        echo twig_call_macro($macros["macros"], "macro_menuSection", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 14), "columns", [], "any", false, false, false, 14)], 14, $context, $this->getSourceContext());
        echo "

        ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 16), "show_another_section", [], "any", false, false, false, 16)) {
            // line 17
            echo "        ";
            echo twig_call_macro($macros["macros"], "macro_menuSection", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 17), "columns_2", [], "any", false, false, false, 17), "additional"], 17, $context, $this->getSourceContext());
            echo "
      ";
        }
        // line 19
        echo "    </div>
  </div>
</div>

         ";
    }

    public function getTemplateName()
    {
        return "12995bf10fc7b9cdf9d883fdeabfd3bb29798003";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 19,  82 => 17,  80 => 16,  75 => 14,  68 => 10,  64 => 9,  58 => 7,  53 => 6,  51 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "12995bf10fc7b9cdf9d883fdeabfd3bb29798003", "");
    }
}
