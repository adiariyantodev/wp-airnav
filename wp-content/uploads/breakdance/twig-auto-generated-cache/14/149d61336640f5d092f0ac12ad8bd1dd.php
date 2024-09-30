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

/* 79f8c43f509628d8827ab2e2991da45270376926 */
class __TwigTemplate_f5c377b26996a2c9a15513cd2791b37d extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "79f8c43f509628d8827ab2e2991da45270376926", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        echo twig_call_macro($macros["macros"], "macro_fancyBackgroundHtml", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 4)], 4, $context, $this->getSourceContext());
        echo "
";
        // line 5
        ob_start(function () { return ''; });
        // line 6
        echo twig_call_macro($macros["macros"], "macro_linkMaybeEnqueueLightboxStyles", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 6), "link", [], "any", false, false, false, 6)], 6, $context, $this->getSourceContext());
        echo "
";
        // line 7
        echo twig_call_macro($macros["macros"], "macro_linkMaybeEnqueueLinkActions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 7), "link", [], "any", false, false, false, 7)], 7, $context, $this->getSourceContext());
        echo "
";
        $context["prevent_whitespace_output"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        echo "%%CHILDREN%%
         ";
    }

    public function getTemplateName()
    {
        return "79f8c43f509628d8827ab2e2991da45270376926";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 9,  55 => 7,  51 => 6,  49 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "79f8c43f509628d8827ab2e2991da45270376926", "");
    }
}
