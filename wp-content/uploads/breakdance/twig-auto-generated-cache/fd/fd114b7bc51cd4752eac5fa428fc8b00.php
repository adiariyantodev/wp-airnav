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

/* 10f581f15b4e3ad74d0e294abe2ba1e71a7b5b30 */
class __TwigTemplate_dd31f2753c62d30dcb60aad47b6c09e2 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "10f581f15b4e3ad74d0e294abe2ba1e71a7b5b30", 2)->unwrap();
        // line 3
        echo "
          <div class=\"breakdance-swiper-wrapper\" data-swiper-id=\"%%ID%%\">
  <div class=\"swiper\">
    <div class=\"swiper-wrapper\">
      %%CHILDREN%%
    </div>
  </div>

  ";
        // line 11
        echo twig_call_macro($macros["macros"], "macro_AtomV1SwiperPaginationAndArrowsHtml", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "slider", [], "any", false, false, false, 11)], 11, $context, $this->getSourceContext());
        echo "
</div>

         ";
    }

    public function getTemplateName()
    {
        return "10f581f15b4e3ad74d0e294abe2ba1e71a7b5b30";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "10f581f15b4e3ad74d0e294abe2ba1e71a7b5b30", "");
    }
}
