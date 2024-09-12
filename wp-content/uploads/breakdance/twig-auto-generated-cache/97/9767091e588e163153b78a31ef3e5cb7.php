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

/* ce0c0c149fddc257e1e3409d86b25a32a9b68fa6 */
class __TwigTemplate_c100dafc5594c892a69a2cd7f335fe74 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "ce0c0c149fddc257e1e3409d86b25a32a9b68fa6", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 4), "type", [], "any", false, false, false, 4) == "video") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 5
($context["design"] ?? null), "background", [], "any", false, false, false, 5), "video", [], "any", false, false, false, 5), "type", [], "any", false, false, false, 5) == "video")) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 6
($context["design"] ?? null), "background", [], "any", false, false, false, 6), "video_settings", [], "any", false, false, false, 6), "play_on_mobile", [], "any", false, false, false, 6) == 0))) {
            // line 7
            echo "return true;
";
        } else {
            // line 9
            echo " return false;
";
        }
        // line 11
        echo "         ";
    }

    public function getTemplateName()
    {
        return "ce0c0c149fddc257e1e3409d86b25a32a9b68fa6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  53 => 9,  49 => 7,  47 => 6,  46 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ce0c0c149fddc257e1e3409d86b25a32a9b68fa6", "");
    }
}
