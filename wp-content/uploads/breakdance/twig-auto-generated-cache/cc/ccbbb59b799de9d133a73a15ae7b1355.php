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

/* 2108bac9d5383b1c56e36f216f6ff61c9648bf6c */
class __TwigTemplate_9949a3e84f6d21f8515e3958cafdf55f extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "2108bac9d5383b1c56e36f216f6ff61c9648bf6c", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 4), "items", [], "any", false, false, false, 4));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "  <li ";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 5)) {
                echo "class='bde-basic-list-item-with-link'";
            }
            echo " ";
            echo Breakdance\PluginsAPI\content_editable_php((("content.content.items[" . twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 5)) . "].text"));
            echo ">    
    ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 6)) {
                // line 7
                echo "      ";
                echo twig_call_macro($macros["macros"], "macro_linkStart", [twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 7)], 7, $context, $this->getSourceContext());
                echo "
    ";
            }
            // line 9
            echo "      ";
            echo twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 9);
            echo "
    ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 10)) {
                // line 11
                echo "      ";
                echo twig_call_macro($macros["macros"], "macro_linkEnd", [], 11, $context, $this->getSourceContext());
                echo "
    ";
            }
            // line 13
            echo "  </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "         ";
    }

    public function getTemplateName()
    {
        return "2108bac9d5383b1c56e36f216f6ff61c9648bf6c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 15,  92 => 13,  86 => 11,  84 => 10,  79 => 9,  73 => 7,  71 => 6,  62 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "2108bac9d5383b1c56e36f216f6ff61c9648bf6c", "");
    }
}
