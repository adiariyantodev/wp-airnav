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

/* 930b501bef17a28ed33155edd48a183b3941e806 */
class __TwigTemplate_9d952d91fa0cd480ea10ee5339be22f2 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "930b501bef17a28ed33155edd48a183b3941e806", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        $context["separatorType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "divider", [], "any", false, false, false, 4), "content", [], "any", false, false, false, 4);
        // line 5
        $context["hasContent"] = ((($context["separatorType"] ?? null)) ? ("has-content") : (""));
        // line 6
        $context["contentPosition"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "content", [], "any", false, false, false, 6), "position", [], "any", false, false, false, 6)) ? (("has-content-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "content", [], "any", false, false, false, 6), "position", [], "any", false, false, false, 6))) : (""));
        // line 7
        $context["hasPattern"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "divider", [], "any", false, false, false, 7), "style", [], "any", false, false, false, 7) && !twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "divider", [], "any", false, false, false, 7), "style", [], "any", false, false, false, 7), [0 => "dotted", 1 => "dashed", 2 => "solid", 3 => "double"]))) ? ("has-pattern") : (""));
        // line 8
        echo "
";
        // line 9
        $context["cssClasses"] = twig_join_filter([0 => "bde-fancy-divider__separator", 1 =>         // line 11
($context["hasContent"] ?? null), 2 =>         // line 12
($context["contentPosition"] ?? null), 3 =>         // line 13
($context["hasPattern"] ?? null)], " ");
        // line 15
        echo "
<div class=\"bde-fancy-divider__wrapper\">
  <div class=\"";
        // line 17
        echo ($context["cssClasses"] ?? null);
        echo "\">
  \t";
        // line 18
        if (($context["separatorType"] ?? null)) {
            // line 19
            echo "    \t";
            if ((($context["separatorType"] ?? null) == "image")) {
                // line 20
                echo "    \t\t <div class=\"bde-fancy-divider__content bde-fancy-divider__content--image\">";
                echo twig_call_macro($macros["macros"], "macro_image", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "divider", [], "any", false, false, false, 20), "image", [], "any", false, false, false, 20), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 20), "size", [], "any", false, false, false, 20), ($context["alt"] ?? null), ($context["lazyLoad"] ?? null)], 20, $context, $this->getSourceContext());
                echo "</div>
    \t";
            }
            // line 22
            echo "    \t";
            if ((($context["separatorType"] ?? null) == "icon")) {
                // line 23
                echo "    \t\t";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "divider", [], "any", false, false, false, 23), "icon", [], "any", false, false, false, 23), "svgCode", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "\t    \t\t<div class=\"bde-fancy-divider__content bde-fancy-divider__content--icon\">";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "divider", [], "any", false, false, false, 24), "icon", [], "any", false, false, false, 24), "svgCode", [], "any", false, false, false, 24);
                    echo "</div>
    \t    ";
                } else {
                    // line 26
                    echo "              <div class=\"bde-fancy-divider__content bde-fancy-divider__content--icon\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\"><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d=\"M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z\"/></svg>
              </div>
            ";
                }
                // line 30
                echo "        ";
            } elseif ((($context["separatorType"] ?? null) == "text")) {
                // line 31
                echo "    \t\t<div class=\"bde-fancy-divider__content bde-fancy-divider__content--text\">";
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "divider", [], "any", false, true, false, 31), "text", [], "any", true, true, false, 31) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "divider", [], "any", false, true, false, 31), "text", [], "any", false, false, false, 31)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "divider", [], "any", false, true, false, 31), "text", [], "any", false, false, false, 31)) : ("Divider Text"));
                echo "</div>
    \t";
            }
            // line 33
            echo "    ";
        }
        // line 34
        echo "  </div>
</div>

         ";
    }

    public function getTemplateName()
    {
        return "930b501bef17a28ed33155edd48a183b3941e806";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 34,  107 => 33,  101 => 31,  98 => 30,  92 => 26,  86 => 24,  83 => 23,  80 => 22,  74 => 20,  71 => 19,  69 => 18,  65 => 17,  61 => 15,  59 => 13,  58 => 12,  57 => 11,  56 => 9,  53 => 8,  51 => 7,  49 => 6,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "930b501bef17a28ed33155edd48a183b3941e806", "");
    }
}
