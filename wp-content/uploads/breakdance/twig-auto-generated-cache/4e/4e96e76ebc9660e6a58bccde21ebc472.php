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

/* 3a494b438df0a02ebaf67bef3f6032bc3c026a0b */
class __TwigTemplate_a493813e2827502ddd6a83394a86d4e9 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "3a494b438df0a02ebaf67bef3f6032bc3c026a0b", 2)->unwrap();
        // line 3
        echo "
          new BreakdanceLightbox('%%SELECTOR%%', {
  itemSelector: '.breakdance-image-link',
  ...";
        // line 6
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "lightbox", [], "any", false, false, false, 6));
        echo "
});
         ";
    }

    public function getTemplateName()
    {
        return "3a494b438df0a02ebaf67bef3f6032bc3c026a0b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "3a494b438df0a02ebaf67bef3f6032bc3c026a0b", "");
    }
}
