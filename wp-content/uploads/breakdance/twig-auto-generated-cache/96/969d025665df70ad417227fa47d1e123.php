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

/* 5180416339d1db78331aca75543d5f16c76787ba */
class __TwigTemplate_bc2bde62091be85ff5e8ddb871a1bb80 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "5180416339d1db78331aca75543d5f16c76787ba", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        $macros["dualHeading"] = $this->macros["dualHeading"] = $this;
        // line 5
        echo "
";
        // line 13
        echo "
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 14), "words", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "  ";
            echo twig_call_macro($macros["dualHeading"], "macro_dualHeadingItem", [$context["item"], ($context["design"] ?? null)], 15, $context, $this->getSourceContext());
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "

         ";
    }

    // line 6
    public function macro_dualHeadingItem($__item__ = null, $__design__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "design" => $__design__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 7
            echo "  ";
            $context["style"] = ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "secondary_style", [], "any", false, false, false, 7)) ? ("secondary") : ("primary"));
            // line 8
            echo "  ";
            $context["annotatePrimary"] = ((( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "secondary_style", [], "any", false, false, false, 8) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "primary", [], "any", false, false, false, 8), "annotate", [], "any", false, false, false, 8))) ? ("js-annotate") : (""));
            // line 9
            echo "  ";
            $context["annotateSecondary"] = (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "secondary_style", [], "any", false, false, false, 9) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "secondary", [], "any", false, false, false, 9), "annotate", [], "any", false, false, false, 9))) ? ("js-annotate") : (""));
            // line 10
            echo "  ";
            $context["cssClasses"] = twig_join_filter([0 => ("dual-heading--" . ($context["style"] ?? null)), 1 => ($context["annotatePrimary"] ?? null), 2 => ($context["annotateSecondary"] ?? null)], " ");
            // line 11
            echo "  <span data-style=\"";
            echo ($context["style"] ?? null);
            echo "\" class=\"";
            echo ($context["cssClasses"] ?? null);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "text", [], "any", false, false, false, 11);
            echo "</span>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "5180416339d1db78331aca75543d5f16c76787ba";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 11,  95 => 10,  92 => 9,  89 => 8,  86 => 7,  72 => 6,  66 => 17,  57 => 15,  53 => 14,  50 => 13,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "5180416339d1db78331aca75543d5f16c76787ba", "");
    }
}
