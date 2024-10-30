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

/* 8eaeff5c8b7e6a7597ca0f4e943e8101919e144f */
class __TwigTemplate_c3b285521be93796cd45a96cbf5e8c16 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "8eaeff5c8b7e6a7597ca0f4e943e8101919e144f", 2)->unwrap();
        // line 3
        echo "
          window.BreakdanceSwiper().update({
            id: '%%ID%%',
            selector:'%%SELECTOR%%',
            settings:";
        // line 7
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "slider", [], "any", false, false, false, 7), "settings", [], "any", false, false, false, 7));
        echo ",
            paginationSettings:";
        // line 8
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "slider", [], "any", false, false, false, 8), "pagination", [], "any", false, false, false, 8));
        echo ",
          });
         ";
    }

    public function getTemplateName()
    {
        return "8eaeff5c8b7e6a7597ca0f4e943e8101919e144f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  48 => 7,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "8eaeff5c8b7e6a7597ca0f4e943e8101919e144f", "");
    }
}
