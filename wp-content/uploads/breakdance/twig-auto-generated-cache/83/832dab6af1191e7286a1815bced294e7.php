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

/* 84ee9fc48a0a56f5ea6b4922e0478af616c72cc9 */
class __TwigTemplate_9611745493f88d498b4cf962e2a72475 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "84ee9fc48a0a56f5ea6b4922e0478af616c72cc9", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        echo twig_call_macro($macros["macros"], "macro_fancyBackgroundHtml", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 4)], 4, $context, $this->getSourceContext());
        echo "
";
        // line 5
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "dividers", [], "any", false, false, false, 5), "shape_dividers_section", [], "any", false, false, false, 5), "dividers", [], "any", false, false, false, 5)) {
            // line 6
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "dividers", [], "any", false, false, false, 6), "shape_dividers_section", [], "any", false, false, false, 6), "dividers", [], "any", false, false, false, 6));
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
            foreach ($context['_seq'] as $context["_key"] => $context["divider"]) {
                // line 7
                echo "      <div class=\"section-shape-divider-wrapper section-shape-divider-wrapper--";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 7);
                echo "\">
          <span class=\"section-shape-divider\">
          ";
                // line 9
                if (((twig_get_attribute($this->env, $this->source, $context["divider"], "custom_shape", [], "any", false, false, false, 9) != "") && (twig_get_attribute($this->env, $this->source, $context["divider"], "shape", [], "any", false, false, false, 9) == "custom"))) {
                    // line 10
                    echo "            ";
                    echo twig_get_attribute($this->env, $this->source, $context["divider"], "custom_shape", [], "any", false, false, false, 10);
                    echo "
          ";
                } else {
                    // line 12
                    echo "            <svg
                xmlns=\"http://www.w3.org/2000/svg\"
                viewBox=\"0 0 1440 320\"
                preserveAspectRatio=\"none\"
            >
              ";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, $context["divider"], "shape", [], "any", false, false, false, 17);
                    echo "
            </svg>
          ";
                }
                // line 20
                echo "          </span>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['divider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 24
        echo "<div class=\"section-container\">%%CHILDREN%%</div>
         ";
    }

    public function getTemplateName()
    {
        return "84ee9fc48a0a56f5ea6b4922e0478af616c72cc9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 24,  96 => 20,  90 => 17,  83 => 12,  77 => 10,  75 => 9,  69 => 7,  51 => 6,  49 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "84ee9fc48a0a56f5ea6b4922e0478af616c72cc9", "");
    }
}
