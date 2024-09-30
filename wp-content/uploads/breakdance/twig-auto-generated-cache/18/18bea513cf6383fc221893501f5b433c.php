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

/* 19cb0e03e929bce02754957e5864c5da6ff58ff4 */
class __TwigTemplate_a99b845fda222962552eeb535fd4c2e5 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "19cb0e03e929bce02754957e5864c5da6ff58ff4", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        ob_start(function () { return ''; });
        // line 5
        echo twig_call_macro($macros["macros"], "macro_linkMaybeEnqueueLightboxStyles", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 5), "link", [], "any", false, false, false, 5)], 5, $context, $this->getSourceContext());
        echo "
";
        // line 6
        echo twig_call_macro($macros["macros"], "macro_linkMaybeEnqueueLinkActions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 6), "link", [], "any", false, false, false, 6)], 6, $context, $this->getSourceContext());
        echo "
";
        $context["prevent_whitespace_output"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 8), "tag", [], "any", false, false, false, 8)) {
            // line 9
            echo "  <";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 9), "tag", [], "any", false, false, false, 9);
            echo " ";
            echo Breakdance\PluginsAPI\content_editable_php("content.content.text");
            echo ">
";
        }
        // line 11
        echo "  ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 11), "text", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 11), "text", [], "any", false, false, false, 11), "Text Link")) : ("Text Link"));
        echo "
";
        // line 12
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 12), "tag", [], "any", false, false, false, 12)) {
            // line 13
            echo "  </";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 13), "tag", [], "any", false, false, false, 13);
            echo ">
";
        }
        // line 15
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "19cb0e03e929bce02754957e5864c5da6ff58ff4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 15,  73 => 13,  71 => 12,  66 => 11,  58 => 9,  56 => 8,  51 => 6,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "19cb0e03e929bce02754957e5864c5da6ff58ff4", "");
    }
}
