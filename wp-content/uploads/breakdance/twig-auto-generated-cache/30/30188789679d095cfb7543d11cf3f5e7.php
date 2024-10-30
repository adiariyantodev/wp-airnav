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

/* 7a3bccf63af6819b171d2a06088ea10298464eb1 */
class __TwigTemplate_3e98cce532cb565c451d8654de6ab060 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "7a3bccf63af6819b171d2a06088ea10298464eb1", 2)->unwrap();
        // line 3
        echo "
          if (window.breakdancePopupInstances) {
  const popupInstance = window.breakdancePopupInstances[%%POSTID%%] ?? null;
  if (popupInstance) {
    popupInstance.init({
      closeOnClickOutside: ";
        // line 8
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, false, false, 8), "popup_can_t_be_closed", [], "any", false, false, false, 8) == 1)) ? ("false") : ("true"));
        echo ",
      closeOnEscapeKey: ";
        // line 9
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, false, false, 9), "popup_can_t_be_closed", [], "any", false, false, false, 9) == 1)) ? ("false") : ("true"));
        echo ",
      closeAfterMilliseconds: ";
        // line 10
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, true, false, 10), "automatically_close_after", [], "any", false, true, false, 10), "number", [], "any", true, true, false, 10) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, true, false, 10), "automatically_close_after", [], "any", false, true, false, 10), "number", [], "any", false, false, false, 10)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, true, false, 10), "automatically_close_after", [], "any", false, true, false, 10), "number", [], "any", false, false, false, 10)) : ("null"));
        echo ",
      showCloseButtonAfterMilliseconds: ";
        // line 11
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, true, false, 11), "show_close_button_after", [], "any", false, true, false, 11), "number", [], "any", true, true, false, 11) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, true, false, 11), "show_close_button_after", [], "any", false, true, false, 11), "number", [], "any", false, false, false, 11)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, true, false, 11), "show_close_button_after", [], "any", false, true, false, 11), "number", [], "any", false, false, false, 11)) : ("null"));
        echo ",
      disableScrollWhenOpen: ";
        // line 12
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, false, false, 12), "allow_scroll", [], "any", false, false, false, 12) == 1)) ? ("false") : ("true"));
        echo ",
      ";
        // line 13
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 13), "animation", [], "any", false, false, false, 13), "entrance", [], "any", false, false, false, 13), "animation_type", [], "any", false, false, false, 13))) {
            // line 14
            echo "        entranceAnimation: ";
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 14), "animation", [], "any", false, false, false, 14), "entrance", [], "any", false, false, false, 14));
            echo ",
      ";
        }
        // line 16
        echo "      ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 16), "animation", [], "any", false, false, false, 16), "exit", [], "any", false, false, false, 16), "animation_type", [], "any", false, false, false, 16))) {
            // line 17
            echo "        exitAnimation: ";
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 17), "animation", [], "any", false, false, false, 17), "exit", [], "any", false, false, false, 17));
            echo ",
      ";
        }
        // line 19
        echo "    });
  }
}

         ";
    }

    public function getTemplateName()
    {
        return "7a3bccf63af6819b171d2a06088ea10298464eb1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 19,  80 => 17,  77 => 16,  71 => 14,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "7a3bccf63af6819b171d2a06088ea10298464eb1", "");
    }
}
