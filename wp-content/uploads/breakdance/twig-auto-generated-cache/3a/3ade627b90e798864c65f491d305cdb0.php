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

/* 12b422917d3b1993595b49fbf4540482dbacdaf0 */
class __TwigTemplate_0859a831ea893546261a07c938aaaffe extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "12b422917d3b1993595b49fbf4540482dbacdaf0", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        $context["c"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 4);
        // line 5
        $context["size"] = twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "size", [], "any", false, false, false, 5);
        // line 6
        $context["img"] = twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "image", [], "any", false, false, false, 6);
        // line 7
        $context["lazyLoad"] = twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "lazy_load", [], "any", false, false, false, 7);
        // line 8
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "alt", [], "any", false, false, false, 8), "alt", [], "any", false, false, false, 8) == "disable")) {
            // line 9
            echo " ";
            $context["alt"] = false;
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 10
($context["c"] ?? null), "alt", [], "any", false, false, false, 10), "alt", [], "any", false, false, false, 10) == "custom")) {
            // line 11
            echo " ";
            $context["alt"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "alt", [], "any", false, false, false, 11), "custom_alt", [], "any", false, false, false, 11);
        } else {
            // line 13
            echo "  ";
            $context["alt"] = twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "alt", [], "any", false, false, false, 13);
        }
        // line 15
        echo "
";
        // line 17
        $context["linkType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "link", [], "any", false, false, false, 17), "link_type", [], "any", false, false, false, 17);
        // line 18
        $context["hasLink"] = (($context["linkType"] ?? null) != null);
        // line 19
        $context["lightboxImage"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "sizes", [], "any", false, true, false, 19), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "lightbox", [], "any", false, false, false, 19), "image_size", [], "any", false, false, false, 19), [], "array", true, true, false, 19)) ? (_twig_default_filter((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "sizes", [], "any", false, true, false, 19)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "lightbox", [], "any", false, false, false, 19), "image_size", [], "any", false, false, false, 19)] ?? null) : null), ($context["img"] ?? null))) : (($context["img"] ?? null)));
        // line 20
        echo "
";
        // line 21
        $context["links"] = ["url" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 22
($context["c"] ?? null), "link", [], "any", false, false, false, 22), "url", [], "any", false, false, false, 22), "media" => twig_get_attribute($this->env, $this->source,         // line 23
($context["img"] ?? null), "url", [], "any", false, false, false, 23), "lightbox" => twig_get_attribute($this->env, $this->source,         // line 24
($context["lightboxImage"] ?? null), "url", [], "any", false, false, false, 24)];
        // line 26
        $context["link"] = (($__internal_compile_1 = ($context["links"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["linkType"] ?? null)] ?? null) : null);
        // line 27
        $context["target"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "link", [], "any", false, false, false, 27), "new_tab", [], "any", false, false, false, 27)) ? ("_blank") : ("_self"));
        // line 28
        echo "
";
        // line 30
        $context["fromLibrary"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "caption", [], "any", false, true, false, 30), "from_library", [], "any", true, true, false, 30)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "caption", [], "any", false, true, false, 30), "from_library", [], "any", false, false, false, 30), false)) : (false));
        // line 31
        $context["caption"] = ((($context["fromLibrary"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "caption", [], "any", false, false, false, 31)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "caption", [], "any", false, false, false, 31), "caption", [], "any", false, false, false, 31)));
        // line 32
        $context["captionPosition"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "caption", [], "any", false, false, false, 32), "position", [], "any", false, false, false, 32);
        // line 33
        $context["hasCaption"] = ((((($context["fromLibrary"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "caption", [], "any", false, false, false, 33)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "caption", [], "any", false, false, false, 33), "caption", [], "any", false, false, false, 33))) ? (true) : (false));
        // line 34
        echo "
";
        // line 36
        $context["hasMask"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "effects", [], "any", false, false, false, 36), "mask", [], "any", false, false, false, 36), "shape", [], "any", false, false, false, 36) != null);
        // line 37
        echo "
";
        // line 39
        $context["captionClass"] = ((($context["captionPosition"] ?? null)) ? (("breakdance-image--caption-" . ($context["captionPosition"] ?? null))) : (""));
        // line 40
        $context["cssClasses"] = twig_join_filter([0 => ("breakdance-image--" . twig_get_attribute($this->env, $this->source,         // line 41
($context["img"] ?? null), "id", [], "any", false, false, false, 41)), 1 =>         // line 42
($context["captionClass"] ?? null)], " ");
        // line 44
        echo "
<figure class=\"breakdance-image ";
        // line 45
        echo twig_trim_filter(($context["cssClasses"] ?? null));
        echo "\">
\t<div class=\"breakdance-image-container\">
\t\t<div class=\"breakdance-image-clip\">
\t\t\t";
        // line 48
        if (($context["hasLink"] ?? null)) {
            // line 49
            echo "\t\t\t<a class=\"breakdance-image-link breakdance-image-link--";
            echo ($context["linkType"] ?? null);
            echo "\" href=\"";
            echo ($context["link"] ?? null);
            echo "\" target=\"";
            echo ($context["target"] ?? null);
            echo "\" rel=\"noopener\" data-sub-html=\"";
            echo ($context["caption"] ?? null);
            echo "\" data-lg-size=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["lightboxImage"] ?? null), "width", [], "any", false, false, false, 49);
            echo "-";
            echo twig_get_attribute($this->env, $this->source, ($context["lightboxImage"] ?? null), "height", [], "any", false, false, false, 49);
            echo "\">
\t\t\t\t";
        }
        // line 51
        echo "
\t\t\t\t";
        // line 52
        if (($context["hasMask"] ?? null)) {
            // line 53
            echo "\t\t\t\t<div class=\"breakdance-image__mask\">
\t\t\t\t\t";
        }
        // line 55
        echo "
\t\t\t\t\t";
        // line 56
        echo twig_call_macro($macros["macros"], "macro_image", [($context["img"] ?? null), ($context["size"] ?? null), ($context["alt"] ?? null), ($context["lazyLoad"] ?? null)], 56, $context, $this->getSourceContext());
        echo "

\t\t\t\t\t";
        // line 58
        if (($context["hasMask"] ?? null)) {
            // line 59
            echo "\t\t\t\t</div>
\t\t\t\t";
        }
        // line 61
        echo "
\t\t\t\t";
        // line 62
        if (($context["hasLink"] ?? null)) {
            // line 63
            echo "\t\t\t</a>
\t\t\t";
        }
        // line 65
        echo "\t\t</div>
\t</div>

\t";
        // line 68
        if (($context["hasCaption"] ?? null)) {
            // line 69
            echo "\t\t<figcaption class=\"breakdance-image__caption\">
\t\t\t";
            // line 70
            echo ($context["caption"] ?? null);
            echo "
\t\t</figcaption>
\t";
        }
        // line 73
        echo "</figure>

         ";
    }

    public function getTemplateName()
    {
        return "12b422917d3b1993595b49fbf4540482dbacdaf0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 73,  183 => 70,  180 => 69,  178 => 68,  173 => 65,  169 => 63,  167 => 62,  164 => 61,  160 => 59,  158 => 58,  153 => 56,  150 => 55,  146 => 53,  144 => 52,  141 => 51,  125 => 49,  123 => 48,  117 => 45,  114 => 44,  112 => 42,  111 => 41,  110 => 40,  108 => 39,  105 => 37,  103 => 36,  100 => 34,  98 => 33,  96 => 32,  94 => 31,  92 => 30,  89 => 28,  87 => 27,  85 => 26,  83 => 24,  82 => 23,  81 => 22,  80 => 21,  77 => 20,  75 => 19,  73 => 18,  71 => 17,  68 => 15,  64 => 13,  60 => 11,  58 => 10,  55 => 9,  53 => 8,  51 => 7,  49 => 6,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "12b422917d3b1993595b49fbf4540482dbacdaf0", "");
    }
}
