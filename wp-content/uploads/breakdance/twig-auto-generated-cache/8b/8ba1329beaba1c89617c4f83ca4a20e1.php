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

/* 2236bfcb3fde610be963da3054de1c46ab862f4c */
class __TwigTemplate_a7ee1d5712a6a5096ce35ebbc893d76f extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "2236bfcb3fde610be963da3054de1c46ab862f4c", 2)->unwrap();
        // line 3
        echo "
          <div class=\"breakdance-form-field breakdance-form-field--";
        // line 4
        echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 4);
        if ((($context["step"] ?? null) >= 1)) {
            echo " hidden-step";
        }
        echo "\" ";
        if ((($context["step"] ?? null) >= 1)) {
            echo " data-form-step=\"";
            echo ($context["step"] ?? null);
            echo "\" ";
        }
        echo ">
    ";
        // line 5
        echo do_action("breakdance_form_before_field", ($context["field"] ?? null), ($context["form"] ?? null));
        echo "
    ";
        // line 6
        if ((!twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 6), [0 => "hidden", 1 => "html", 2 => "step"]) && twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 6))) {
            // line 7
            echo "        <label class=\"breakdance-form-field__label\" for=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7);
            echo "\">
            ";
            // line 8
            echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 8);
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 8), "required", [], "any", false, false, false, 8)) ? ("<span class=\"breakdance-form-field__required\">*</span>") : (""));
            echo "</span>
        </label>
    ";
        }
        // line 11
        echo "
    <input
    class=\"breakdance-form-field__input\"
    ";
        // line 14
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14)) ? ((("id=\"" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14)) . "\"")) : (""));
        echo "
    ";
        // line 15
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15)) ? ((("aria-describedby=\"" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15)) . "\"")) : (""));
        echo "
    type=\"";
        // line 16
        echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 16);
        echo "\"
    name=\"";
        // line 17
        echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 17);
        echo "\"
    placeholder=\"";
        // line 18
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 18), "placeholder", [], "any", false, false, false, 18);
        echo "\"
    value=\"";
        // line 19
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 19), "value", [], "any", false, false, false, 19);
        echo "\"
    ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 20), "conditional", [], "any", false, false, false, 20)) {
            // line 21
            echo "      data-conditional-field-id=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 21), "condition", [], "any", false, false, false, 21), "field", [], "any", false, false, false, 21), "advanced", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21);
            echo "\"
      ";
            // line 22
            if (twig_test_iterable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 22), "condition", [], "any", false, false, false, 22), "value", [], "any", false, false, false, 22))) {
                // line 23
                echo "        data-conditional-value=\"";
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 23), "condition", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23), ",");
                echo "\"
      ";
            } else {
                // line 25
                echo "        data-conditional-value=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 25), "condition", [], "any", false, false, false, 25), "value", [], "any", false, false, false, 25);
                echo "\"
      ";
            }
            // line 27
            echo "      data-conditional-operand=\"";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, true, false, 27), "condition", [], "any", false, true, false, 27), "operand", [], "any", true, true, false, 27) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, true, false, 27), "condition", [], "any", false, true, false, 27), "operand", [], "any", false, false, false, 27)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, true, false, 27), "condition", [], "any", false, true, false, 27), "operand", [], "any", false, false, false, 27)) : ("equals"));
            echo "\"
    ";
        }
        // line 29
        echo "    ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "max", [], "any", false, false, false, 29)) ? ((("max=\"" . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "max", [], "any", false, false, false, 29)) . "\"")) : (""));
        echo "
    ";
        // line 30
        echo ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "min", [], "any", false, false, false, 30)) ? ((("min=\"" . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "min", [], "any", false, false, false, 30)) . "\"")) : (""));
        echo "
    ";
        // line 31
        echo ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "step", [], "any", false, false, false, 31)) ? ((("step=\"" . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "step", [], "any", false, false, false, 31)) . "\"")) : (""));
        echo "
    ";
        // line 32
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 32), "required", [], "any", false, false, false, 32)) ? ("required") : (""));
        echo "
    ";
        // line 33
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 33), "autocomplete_disabled", [], "any", false, false, false, 33)) ? ("autocomplete=\"off\"") : (""));
        echo "
    ";
        // line 34
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 34), "tabindex", [], "any", false, false, false, 34)) ? (("tabindex=" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 34), "tabindex", [], "any", false, false, false, 34))) : (""));
        echo "
>


    ";
        // line 38
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 38), "append", [], "any", false, false, false, 38);
        echo "
    ";
        // line 39
        echo do_action("breakdance_form_after_field", ($context["field"] ?? null), ($context["form"] ?? null));
        echo "
</div>

         ";
    }

    public function getTemplateName()
    {
        return "2236bfcb3fde610be963da3054de1c46ab862f4c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 39,  160 => 38,  153 => 34,  149 => 33,  145 => 32,  141 => 31,  137 => 30,  132 => 29,  126 => 27,  120 => 25,  114 => 23,  112 => 22,  107 => 21,  105 => 20,  101 => 19,  97 => 18,  93 => 17,  89 => 16,  85 => 15,  81 => 14,  76 => 11,  69 => 8,  64 => 7,  62 => 6,  58 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "2236bfcb3fde610be963da3054de1c46ab862f4c", "");
    }
}
