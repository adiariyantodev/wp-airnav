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

/* 8871ac98d94c02b2b1f73a3288ed8d9b07e16b96 */
class __TwigTemplate_1a16ad0fea26d183dee2c00385addc40 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "8871ac98d94c02b2b1f73a3288ed8d9b07e16b96", 2)->unwrap();
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
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, false, false, 12));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 13
            echo "    <div class=\"breakdance-form-checkbox\">
        <input
            type=\"checkbox\"
            name=\"";
            // line 16
            echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 16);
            echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 16) > 1)) ? ("[]") : (""));
            echo "\"
            value=\"";
            // line 17
            echo (((twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", true, true, false, 17) &&  !(null === twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 17)))) ? (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 17)) : (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, false, 17))));
            echo "\"
            id=\"";
            // line 18
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18);
            echo "-";
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 18);
            echo "\"
            ";
            // line 19
            echo ((twig_get_attribute($this->env, $this->source, $context["option"], "selected", [], "any", false, false, false, 19)) ? ("checked") : (""));
            echo "
            ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 20), "conditional", [], "any", false, false, false, 20)) {
                // line 21
                echo "              data-conditional-field-id=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 21), "condition", [], "any", false, false, false, 21), "field", [], "any", false, false, false, 21), "advanced", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21);
                echo "\"
              ";
                // line 22
                if (twig_test_iterable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 22), "condition", [], "any", false, false, false, 22), "value", [], "any", false, false, false, 22))) {
                    // line 23
                    echo "                data-conditional-value=\"";
                    echo twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 23), "condition", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23), ",");
                    echo "\"
              ";
                } else {
                    // line 25
                    echo "                data-conditional-value=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 25), "condition", [], "any", false, false, false, 25), "value", [], "any", false, false, false, 25);
                    echo "\"
              ";
                }
                // line 27
                echo "              data-conditional-operand=\"";
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, true, false, 27), "condition", [], "any", false, true, false, 27), "operand", [], "any", true, true, false, 27) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, true, false, 27), "condition", [], "any", false, true, false, 27), "operand", [], "any", false, false, false, 27)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, true, false, 27), "condition", [], "any", false, true, false, 27), "operand", [], "any", false, false, false, 27)) : ("equals"));
                echo "\"
            ";
            }
            // line 29
            echo "        >
        <label class=\"breakdance-form-checkbox__text\" for=\"";
            // line 30
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30);
            echo "-";
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, false, 30);
            echo "</label>
    </div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "

    ";
        // line 35
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 35), "append", [], "any", false, false, false, 35);
        echo "
    ";
        // line 36
        echo do_action("breakdance_form_after_field", ($context["field"] ?? null), ($context["form"] ?? null));
        echo "
</div>

         ";
    }

    public function getTemplateName()
    {
        return "8871ac98d94c02b2b1f73a3288ed8d9b07e16b96";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 36,  175 => 35,  171 => 33,  150 => 30,  147 => 29,  141 => 27,  135 => 25,  129 => 23,  127 => 22,  122 => 21,  120 => 20,  116 => 19,  110 => 18,  106 => 17,  101 => 16,  96 => 13,  79 => 12,  76 => 11,  69 => 8,  64 => 7,  62 => 6,  58 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "8871ac98d94c02b2b1f73a3288ed8d9b07e16b96", "");
    }
}
