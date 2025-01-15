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

/* 28574b6a2a0499a2b234f76699b06ec579f287b4 */
class __TwigTemplate_9fd7734993b3d93b39fd75287cbcee61 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "28574b6a2a0499a2b234f76699b06ec579f287b4", 2)->unwrap();
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
    <textarea
    class=\"breakdance-form-field__input\"
    id=\"";
        // line 14
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14);
        echo "\"
    aria-describedby=\"";
        // line 15
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15);
        echo "\"
    type=\"";
        // line 16
        echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 16);
        echo "\"
    name=\"";
        // line 17
        echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 17);
        echo "\"
    ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "rows_textarea", [], "any", false, false, false, 18)) {
            // line 19
            echo "    rows=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "rows_textarea", [], "any", false, false, false, 19);
            echo "\"
    ";
        }
        // line 21
        echo "    placeholder=\"";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 21), "placeholder", [], "any", false, false, false, 21);
        echo "\"
    ";
        // line 22
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 22), "required", [], "any", false, false, false, 22)) ? ("required") : (""));
        echo "
    ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 23), "conditional", [], "any", false, false, false, 23)) {
            // line 24
            echo "      data-conditional-field-id=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 24), "condition", [], "any", false, false, false, 24), "field", [], "any", false, false, false, 24), "advanced", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24);
            echo "\"
      ";
            // line 25
            if (twig_test_iterable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 25), "condition", [], "any", false, false, false, 25), "value", [], "any", false, false, false, 25))) {
                // line 26
                echo "        data-conditional-value=\"";
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 26), "condition", [], "any", false, false, false, 26), "value", [], "any", false, false, false, 26), ",");
                echo "\"
      ";
            } else {
                // line 28
                echo "        data-conditional-value=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 28), "condition", [], "any", false, false, false, 28), "value", [], "any", false, false, false, 28);
                echo "\"
      ";
            }
            // line 30
            echo "      data-conditional-operand=\"";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, true, false, 30), "condition", [], "any", false, true, false, 30), "operand", [], "any", true, true, false, 30) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, true, false, 30), "condition", [], "any", false, true, false, 30), "operand", [], "any", false, false, false, 30)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, true, false, 30), "condition", [], "any", false, true, false, 30), "operand", [], "any", false, false, false, 30)) : ("equals"));
            echo "\"
    ";
        }
        // line 32
        echo ">";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 32), "value", [], "any", false, false, false, 32);
        echo "
</textarea>


    ";
        // line 36
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 36), "append", [], "any", false, false, false, 36);
        echo "
    ";
        // line 37
        echo do_action("breakdance_form_after_field", ($context["field"] ?? null), ($context["form"] ?? null));
        echo "
</div>

         ";
    }

    public function getTemplateName()
    {
        return "28574b6a2a0499a2b234f76699b06ec579f287b4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 37,  149 => 36,  141 => 32,  135 => 30,  129 => 28,  123 => 26,  121 => 25,  116 => 24,  114 => 23,  110 => 22,  105 => 21,  99 => 19,  97 => 18,  93 => 17,  89 => 16,  85 => 15,  81 => 14,  76 => 11,  69 => 8,  64 => 7,  62 => 6,  58 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "28574b6a2a0499a2b234f76699b06ec579f287b4", "");
    }
}
