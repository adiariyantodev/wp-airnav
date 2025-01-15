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

/* 5b8b8666b1f3e40133895abd218858d1d5805fab */
class __TwigTemplate_cdb9e1ad96f11eba19039429c23950ad extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "5b8b8666b1f3e40133895abd218858d1d5805fab", 2)->unwrap();
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
    <select
    class=\"breakdance-form-field__input\"
    id=\"";
        // line 14
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14);
        echo "\"
    name=\"";
        // line 15
        echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 15);
        echo ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "multiple", [], "any", false, false, false, 15)) ? ("[]") : (""));
        echo "\"
    ";
        // line 16
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 16), "required", [], "any", false, false, false, 16)) ? ("required") : (""));
        echo "
    ";
        // line 17
        echo ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "multiple", [], "any", false, false, false, 17)) ? ("multiple") : (""));
        echo "
    ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "multiple", [], "any", false, false, false, 18) && twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "rows", [], "any", false, false, false, 18))) {
            // line 19
            echo "      size=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "rows", [], "any", false, false, false, 19);
            echo "\"
    ";
        }
        // line 21
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 21), "conditional", [], "any", false, false, false, 21)) {
            // line 22
            echo "      data-conditional-field-id=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 22), "condition", [], "any", false, false, false, 22), "field", [], "any", false, false, false, 22), "advanced", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22);
            echo "\"
      ";
            // line 23
            if (twig_test_iterable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 23), "condition", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23))) {
                // line 24
                echo "        data-conditional-value=\"";
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 24), "condition", [], "any", false, false, false, 24), "value", [], "any", false, false, false, 24), ",");
                echo "\"
      ";
            } else {
                // line 26
                echo "        data-conditional-value=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 26), "condition", [], "any", false, false, false, 26), "value", [], "any", false, false, false, 26);
                echo "\"
      ";
            }
            // line 28
            echo "      data-conditional-operand=\"";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, true, false, 28), "condition", [], "any", false, true, false, 28), "operand", [], "any", true, true, false, 28) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, true, false, 28), "condition", [], "any", false, true, false, 28), "operand", [], "any", false, false, false, 28)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, true, false, 28), "condition", [], "any", false, true, false, 28), "operand", [], "any", false, false, false, 28)) : ("equals"));
            echo "\"
    ";
        }
        // line 30
        echo ">
  ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "multiple", [], "any", false, false, false, 31) != true)) {
            // line 32
            echo "    <option value=\"\">";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, true, false, 32), "placeholder", [], "any", true, true, false, 32)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, true, false, 32), "placeholder", [], "any", false, false, false, 32), "Select...")) : ("Select..."));
            echo "</option>
  ";
        }
        // line 34
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 35
            echo "      <option value=\"";
            echo (((twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", true, true, false, 35) &&  !(null === twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 35)))) ? (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 35)) : (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, false, 35))));
            echo "\" ";
            echo ((twig_get_attribute($this->env, $this->source, $context["option"], "selected", [], "any", false, false, false, 35)) ? ("selected") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, false, 35);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</select>


    ";
        // line 40
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 40), "append", [], "any", false, false, false, 40);
        echo "
    ";
        // line 41
        echo do_action("breakdance_form_after_field", ($context["field"] ?? null), ($context["form"] ?? null));
        echo "
</div>

         ";
    }

    public function getTemplateName()
    {
        return "5b8b8666b1f3e40133895abd218858d1d5805fab";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 41,  168 => 40,  163 => 37,  150 => 35,  145 => 34,  139 => 32,  137 => 31,  134 => 30,  128 => 28,  122 => 26,  116 => 24,  114 => 23,  109 => 22,  106 => 21,  100 => 19,  98 => 18,  94 => 17,  90 => 16,  85 => 15,  81 => 14,  76 => 11,  69 => 8,  64 => 7,  62 => 6,  58 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "5b8b8666b1f3e40133895abd218858d1d5805fab", "");
    }
}
