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

/* ee7c833743034ffd69bd6c6e7e2c2fdbdf93435a */
class __TwigTemplate_495e580166f385265d8472ebda6fdf7c extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "ee7c833743034ffd69bd6c6e7e2c2fdbdf93435a", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 4), "layout", [], "any", false, false, false, 4) == "slider")) {
            // line 5
            echo "<div class=\"breakdance-swiper-wrapper\">
  <div class=\"swiper\">
     %%SSR%%
  </div> 
  ";
            // line 9
            echo twig_call_macro($macros["macros"], "macro_AtomV1SwiperPaginationAndArrowsHtml", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 9), "slider", [], "any", false, false, false, 9)], 9, $context, $this->getSourceContext());
            echo "
</div>
";
        } else {
            // line 12
            echo "  %%SSR%%
";
        }
        // line 14
        echo "         ";
    }

    public function getTemplateName()
    {
        return "ee7c833743034ffd69bd6c6e7e2c2fdbdf93435a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  59 => 12,  53 => 9,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ee7c833743034ffd69bd6c6e7e2c2fdbdf93435a", "");
    }
}
