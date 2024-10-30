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

/* 9780b542ed792ec1be779a9b885219c6d3c6588b */
class __TwigTemplate_f5fbe753c41e6ef254da1977dd4bd556 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "9780b542ed792ec1be779a9b885219c6d3c6588b", 2)->unwrap();
        // line 3
        echo "
          <div class=\"breakdance-popup ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, false, false, 4), "advanced", [], "any", false, false, false, 4), "popup_css_class", [], "any", false, false, false, 4)) {
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, false, false, 4), "advanced", [], "any", false, false, false, 4), "popup_css_class", [], "any", false, false, false, 4);
        }
        echo "\" data-breakdance-popup-id=\"%%POSTID%%\" ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, false, false, 4), "advanced", [], "any", false, false, false, 4), "popup_html_id", [], "any", false, false, false, 4)) {
            echo " id=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, false, false, 4), "advanced", [], "any", false, false, false, 4), "popup_html_id", [], "any", false, false, false, 4);
            echo "\" ";
        }
        echo ">
  <div class='breakdance-popup-content'>
    %%CHILDREN%%
  </div>
  ";
        // line 8
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, false, false, 8), "disable_close_button", [], "any", false, false, false, 8)) {
            // line 9
            echo "  \t<div class=\"breakdance-popup-close-button";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 9), "show_after", [], "any", false, false, false, 9)) {
                echo " hidden";
            }
            echo " breakdance-popup-position-";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, true, false, 9), "position", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, true, false, 9), "position", [], "any", false, false, false, 9), "top-right")) : ("top-right"));
            echo "\" data-breakdance-popup-reference=\"%%POSTID%%\" data-breakdance-popup-action=\"close\">
      <div class=\"breakdance-popup-close-icon\">
        ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 11), "custom_icon", [], "any", false, false, false, 11)) {
                // line 12
                echo "          ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 12), "custom_icon", [], "any", false, false, false, 12), "svgCode", [], "any", false, false, false, 12);
                echo "
        ";
            } else {
                // line 14
                echo "          <svg viewBox=\"0 0 24 24\">
            <path d=\"M20 6.91L17.09 4L12 9.09L6.91 4L4 6.91L9.09 12L4 17.09L6.91 20L12 14.91L17.09 20L20 17.09L14.91 12L20 6.91Z\" />
          </svg>
        ";
            }
            // line 18
            echo "      </div>
    </div>
  ";
        }
        // line 21
        echo "</div>

         ";
    }

    public function getTemplateName()
    {
        return "9780b542ed792ec1be779a9b885219c6d3c6588b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 21,  86 => 18,  80 => 14,  74 => 12,  72 => 11,  62 => 9,  60 => 8,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "9780b542ed792ec1be779a9b885219c6d3c6588b", "");
    }
}
