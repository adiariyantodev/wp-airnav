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

/* 49471b0e30dcd3d19364e13eb55bb0fd2d78fcbb */
class __TwigTemplate_47989c9e042c860e6795b8c12184d771 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "49471b0e30dcd3d19364e13eb55bb0fd2d78fcbb", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        echo twig_call_macro($macros["macros"], "macro_EssentialElements_PostsSharedCss", ["%%SELECTOR%%", ($context["design"] ?? null), ($context["globalSettings"] ?? null), ($context["isBaseBreakpoint"] ?? null), ($context["breakpoint"] ?? null), ($context["isBuilder"] ?? null)], 4, $context, $this->getSourceContext());
        echo "

%%SELECTOR%% .ee-post {
background-color: ";
        // line 7
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 7), "container", [], "any", false, false, false, 7), "background", [], "any", false, false, false, 7);
        echo ";
";
        // line 8
        echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 8), "container", [], "any", false, false, false, 8), "borders", [], "any", false, false, false, 8)], 8, $context, $this->getSourceContext());
        echo "
  ";
        // line 9
        echo twig_call_macro($macros["macros"], "macro_spacing_padding_all", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 9), "container", [], "any", false, false, false, 9), "padding", [], "any", false, false, false, 9)], 9, $context, $this->getSourceContext());
        echo "

";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 11), "image", [], "any", false, false, false, 11), "position", [], "any", false, false, false, 11) == "top")) {
            // line 12
            echo "  flex-direction:column;
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
($context["design"] ?? null), "post", [], "any", false, false, false, 13), "image", [], "any", false, false, false, 13), "position", [], "any", false, false, false, 13) == "left")) {
            // line 14
            echo "  flex-direction:row;
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
($context["design"] ?? null), "post", [], "any", false, false, false, 15), "image", [], "any", false, false, false, 15), "position", [], "any", false, false, false, 15) == "right")) {
            // line 16
            echo "  flex-direction:row-reverse;
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 17
($context["design"] ?? null), "post", [], "any", false, false, false, 17), "image", [], "any", false, false, false, 17), "position", [], "any", false, false, false, 17) == "bottom")) {
            // line 18
            echo "  flex-direction:column-reverse;
";
        }
        // line 20
        echo "  gap: ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 20), "image", [], "any", false, false, false, 20), "space", [], "any", false, false, false, 20), "style", [], "any", false, false, false, 20);
        echo ";
  ";
        // line 21
        if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 21), "image", [], "any", false, false, false, 21), "position", [], "any", false, false, false, 21) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 21), "image", [], "any", false, false, false, 21), "position", [], "any", false, false, false, 21) == "top")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 21), "image", [], "any", false, false, false, 21), "position", [], "any", false, false, false, 21) == "bottom"))) {
            // line 22
            echo "  align-items: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 22), "container", [], "any", false, false, false, 22), "alignment", [], "any", false, false, false, 22);
            echo ";
  ";
        }
        // line 24
        echo "}

";
        // line 26
        if ((($context["breakpoint"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 26), "image", [], "any", false, false, false, 26), "stack_vertically_at", [], "any", false, false, false, 26))) {
            // line 27
            echo "%%SELECTOR%% .ee-post {
  flex-direction:column;
}
%%SELECTOR%% .ee-posts .ee-post-image-link {
  width:100%
}
";
        }
        // line 34
        echo "
%%SELECTOR%% .ee-post-wrap {
  align-items: ";
        // line 36
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 36), "container", [], "any", false, false, false, 36), "alignment", [], "any", false, false, false, 36);
        echo ";
}
%%SELECTOR%% .ee-post-meta-item:not(:last-child):after {
  ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "post", [], "any", false, false, false, 39), "meta", [], "any", false, false, false, 39), "separator", [], "any", false, false, false, 39)) {
            // line 40
            echo "  content:\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "post", [], "any", false, false, false, 40), "meta", [], "any", false, false, false, 40), "separator", [], "any", false, false, false, 40);
            echo "\";
  ";
        }
        // line 42
        echo "  color: ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 42), "meta", [], "any", false, false, false, 42), "separator", [], "any", false, false, false, 42);
        echo ";
  ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 43), "meta", [], "any", false, false, false, 43), "space_between", [], "any", false, false, false, 43)) {
            // line 44
            echo "  margin:0 ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 44), "meta", [], "any", false, false, false, 44), "space_between", [], "any", false, false, false, 44), "style", [], "any", false, false, false, 44);
            echo ";
  ";
        }
        // line 46
        echo "}

%%SELECTOR%% .ee-post-taxonomy-item:not(:last-child):after {
  ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "post", [], "any", false, false, false, 49), "taxonomy", [], "any", false, false, false, 49), "separator", [], "any", false, false, false, 49)) {
            // line 50
            echo "  content:\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "post", [], "any", false, false, false, 50), "taxonomy", [], "any", false, false, false, 50), "separator", [], "any", false, false, false, 50);
            echo "\";
  ";
        }
        // line 52
        echo "  color: ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 52), "taxonomy", [], "any", false, false, false, 52), "separator", [], "any", false, false, false, 52);
        echo ";
  ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 53), "taxonomy", [], "any", false, false, false, 53), "space_between", [], "any", false, false, false, 53), "style", [], "any", false, false, false, 53)) {
            // line 54
            echo "  margin:0 ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 54), "taxonomy", [], "any", false, false, false, 54), "space_between", [], "any", false, false, false, 54), "style", [], "any", false, false, false, 54);
            echo ";
  ";
        }
        // line 56
        echo "}

%%SELECTOR%% .ee-post-title {
  margin-bottom: ";
        // line 59
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 59), "title", [], "any", false, false, false, 59), "space_below", [], "any", false, false, false, 59), "style", [], "any", false, false, false, 59);
        echo ";
  order:";
        // line 60
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 60), "title", [], "any", false, false, false, 60), "order", [], "any", false, false, false, 60);
        echo ";
  ";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 61), "container", [], "any", false, false, false, 61), "alignment", [], "any", false, false, false, 61) == "flex-start")) {
            // line 62
            echo "  text-align:left;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 63
($context["design"] ?? null), "post", [], "any", false, false, false, 63), "container", [], "any", false, false, false, 63), "alignment", [], "any", false, false, false, 63) == "center")) {
            // line 64
            echo "  text-align:center;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 65
($context["design"] ?? null), "post", [], "any", false, false, false, 65), "container", [], "any", false, false, false, 65), "alignment", [], "any", false, false, false, 65) == "flex-end")) {
            // line 66
            echo "  text-align:right;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 67
($context["design"] ?? null), "post", [], "any", false, false, false, 67), "container", [], "any", false, false, false, 67), "alignment", [], "any", false, false, false, 67) == "stretch")) {
            // line 68
            echo "  text-align:justify;
  ";
        }
        // line 70
        echo "}
%%SELECTOR%% .ee-post-title a {
  ";
        // line 72
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 72), "title", [], "any", false, false, false, 72), "typography", [], "any", false, false, false, 72), ($context["globalSettings"] ?? null)], 72, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .ee-post-title a:hover {
  ";
        // line 76
        echo twig_call_macro($macros["macros"], "macro_typographyWithHoverableColorAndEffects", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 76), "title", [], "any", false, false, false, 76), "typography", [], "any", false, false, false, 76)], 76, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .ee-posts .ee-post-image-link {
width: ";
        // line 80
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 80), "image", [], "any", false, false, false, 80), "width", [], "any", false, false, false, 80), "style", [], "any", false, false, false, 80);
        echo ";
}

";
        // line 83
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 83), "image", [], "any", false, false, false, 83), "aspect_ratio", [], "any", false, false, false, 83)) {
            // line 84
            echo "%%SELECTOR%% .ee-post-image {
  padding-bottom:calc( ";
            // line 85
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 85), "image", [], "any", false, false, false, 85), "aspect_ratio", [], "any", false, false, false, 85);
            echo " * 100% );
}
";
        }
        // line 88
        echo "
%%SELECTOR%% .ee-post-image img {
  ";
        // line 90
        echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 90), "image", [], "any", false, false, false, 90), "borders", [], "any", false, false, false, 90)], 90, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .ee-post-meta {
margin-bottom: ";
        // line 94
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 94), "meta", [], "any", false, false, false, 94), "space_below", [], "any", false, false, false, 94), "style", [], "any", false, false, false, 94);
        echo ";
  order:";
        // line 95
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 95), "meta", [], "any", false, false, false, 95), "order", [], "any", false, false, false, 95);
        echo ";
  ";
        // line 96
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 96), "container", [], "any", false, false, false, 96), "alignment", [], "any", false, false, false, 96) == "flex-start")) {
            // line 97
            echo "  justify-content:flex-start;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 98
($context["design"] ?? null), "post", [], "any", false, false, false, 98), "container", [], "any", false, false, false, 98), "alignment", [], "any", false, false, false, 98) == "center")) {
            // line 99
            echo "  justify-content:center;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 100
($context["design"] ?? null), "post", [], "any", false, false, false, 100), "container", [], "any", false, false, false, 100), "alignment", [], "any", false, false, false, 100) == "flex-end")) {
            // line 101
            echo "  justify-content:flex-end;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 102
($context["design"] ?? null), "post", [], "any", false, false, false, 102), "container", [], "any", false, false, false, 102), "alignment", [], "any", false, false, false, 102) == "stretch")) {
            // line 103
            echo "  justify-content:stretch;
  ";
        }
        // line 105
        echo "}
%%SELECTOR%% .ee-post-meta-item {
  ";
        // line 107
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 107), "meta", [], "any", false, false, false, 107), "text", [], "any", false, false, false, 107), ($context["globalSettings"] ?? null)], 107, $context, $this->getSourceContext());
        echo "
}
%%SELECTOR%% .ee-post-taxonomy {
  margin-bottom:";
        // line 110
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 110), "taxonomy", [], "any", false, false, false, 110), "space_below", [], "any", false, false, false, 110), "style", [], "any", false, false, false, 110);
        echo ";
  order:";
        // line 111
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 111), "taxonomy", [], "any", false, false, false, 111), "order", [], "any", false, false, false, 111);
        echo ";
  ";
        // line 112
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 112), "container", [], "any", false, false, false, 112), "alignment", [], "any", false, false, false, 112) == "flex-start")) {
            // line 113
            echo "  justify-content:flex-start;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 114
($context["design"] ?? null), "post", [], "any", false, false, false, 114), "container", [], "any", false, false, false, 114), "alignment", [], "any", false, false, false, 114) == "center")) {
            // line 115
            echo "  justify-content:center;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 116
($context["design"] ?? null), "post", [], "any", false, false, false, 116), "container", [], "any", false, false, false, 116), "alignment", [], "any", false, false, false, 116) == "flex-end")) {
            // line 117
            echo "  justify-content:flex-end;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 118
($context["design"] ?? null), "post", [], "any", false, false, false, 118), "container", [], "any", false, false, false, 118), "alignment", [], "any", false, false, false, 118) == "stretch")) {
            // line 119
            echo "  justify-content:stretch;
  ";
        }
        // line 121
        echo "}
%%SELECTOR%% .ee-post-taxonomy-item {
  ";
        // line 123
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 123), "taxonomy", [], "any", false, false, false, 123), "text", [], "any", false, false, false, 123), ($context["globalSettings"] ?? null)], 123, $context, $this->getSourceContext());
        echo "
}
%%SELECTOR%% .ee-post-content {
  ";
        // line 126
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 126), "content", [], "any", false, false, false, 126), "typography", [], "any", false, false, false, 126), ($context["globalSettings"] ?? null)], 126, $context, $this->getSourceContext());
        echo "
  margin-bottom:";
        // line 127
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 127), "content", [], "any", false, false, false, 127), "space_below", [], "any", false, false, false, 127), "style", [], "any", false, false, false, 127);
        echo ";
  order:";
        // line 128
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 128), "content", [], "any", false, false, false, 128), "order", [], "any", false, false, false, 128);
        echo ";
  ";
        // line 129
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 129), "container", [], "any", false, false, false, 129), "alignment", [], "any", false, false, false, 129) == "flex-start")) {
            // line 130
            echo "  text-align:left;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 131
($context["design"] ?? null), "post", [], "any", false, false, false, 131), "container", [], "any", false, false, false, 131), "alignment", [], "any", false, false, false, 131) == "center")) {
            // line 132
            echo "  text-align:center;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 133
($context["design"] ?? null), "post", [], "any", false, false, false, 133), "container", [], "any", false, false, false, 133), "alignment", [], "any", false, false, false, 133) == "flex-end")) {
            // line 134
            echo "  text-align:right;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 135
($context["design"] ?? null), "post", [], "any", false, false, false, 135), "container", [], "any", false, false, false, 135), "alignment", [], "any", false, false, false, 135) == "stretch")) {
            // line 136
            echo "  text-align:justify;
  ";
        }
        // line 138
        echo "}

";
        // line 140
        echo twig_call_macro($macros["macros"], "macro_atomV1ButtonCss", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "post", [], "any", false, false, false, 140), "button", [], "any", false, false, false, 140), "ee-post-button", "%%SELECTOR%%", ($context["breakpoint"] ?? null), ($context["globalSettings"] ?? null)], 140, $context, $this->getSourceContext());
        echo "

";
        // line 143
        echo "

    %%SELECTOR%% {
        ";
        // line 146
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 147
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 147), "wrapper", [], "any", false, false, false, 147), "background", [], "any", false, false, false, 147), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 148
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 148), "wrapper", [], "any", false, false, false, 148), "layout", [], "any", false, false, false, 148), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 149
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 149), "wrapper", [], "any", false, false, false, 149), "size", [], "any", false, false, false, 149), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 150
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 150), "wrapper", [], "any", false, false, false, 150), "typography", [], "any", false, false, false, 150),         // line 151
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 152
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 152), "wrapper", [], "any", false, false, false, 152), "spacing", [], "any", false, false, false, 152), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 153
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 153), "wrapper", [], "any", false, false, false, 153), "borders", [], "any", false, false, false, 153), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 154
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 154), "wrapper", [], "any", false, false, false, 154), "effects", [], "any", false, false, false, 154)], 146, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 158
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 159
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 159), "wrapper_hover", [], "any", false, false, false, 159), "background", [], "any", false, false, false, 159), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 160
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 160), "wrapper_hover", [], "any", false, false, false, 160), "layout", [], "any", false, false, false, 160), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 161
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 161), "wrapper_hover", [], "any", false, false, false, 161), "size", [], "any", false, false, false, 161), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 162
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 162), "wrapper_hover", [], "any", false, false, false, 162), "typography", [], "any", false, false, false, 162),         // line 163
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 164
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 164), "wrapper_hover", [], "any", false, false, false, 164), "spacing", [], "any", false, false, false, 164), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 165
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 165), "wrapper_hover", [], "any", false, false, false, 165), "borders", [], "any", false, false, false, 165), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 166
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 166), "wrapper_hover", [], "any", false, false, false, 166), "effects", [], "any", false, false, false, 166)], 158, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 170
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 170), "css", [], "any", false, false, false, 170);
        echo "


";
        // line 173
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 173), "hide", [], "any", false, false, false, 173)))) {
            // line 174
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 175
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 175), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 175), "hide", [], "any", false, false, false, 175))) {
                    // line 176
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 178
                    if (($context["isBuilder"] ?? null)) {
                        // line 179
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 182
                        echo "                        display: none;
                    ";
                    }
                    // line 184
                    echo "                }
            }
        ";
                }
                // line 187
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 189
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "49471b0e30dcd3d19364e13eb55bb0fd2d78fcbb";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  450 => 189,  443 => 187,  438 => 184,  434 => 182,  429 => 179,  427 => 178,  421 => 176,  418 => 175,  413 => 174,  411 => 173,  405 => 170,  398 => 166,  397 => 165,  396 => 164,  395 => 163,  394 => 162,  393 => 161,  392 => 160,  391 => 159,  390 => 158,  383 => 154,  382 => 153,  381 => 152,  380 => 151,  379 => 150,  378 => 149,  377 => 148,  376 => 147,  375 => 146,  370 => 143,  365 => 140,  361 => 138,  357 => 136,  355 => 135,  352 => 134,  350 => 133,  347 => 132,  345 => 131,  342 => 130,  340 => 129,  336 => 128,  332 => 127,  328 => 126,  322 => 123,  318 => 121,  314 => 119,  312 => 118,  309 => 117,  307 => 116,  304 => 115,  302 => 114,  299 => 113,  297 => 112,  293 => 111,  289 => 110,  283 => 107,  279 => 105,  275 => 103,  273 => 102,  270 => 101,  268 => 100,  265 => 99,  263 => 98,  260 => 97,  258 => 96,  254 => 95,  250 => 94,  243 => 90,  239 => 88,  233 => 85,  230 => 84,  228 => 83,  222 => 80,  215 => 76,  208 => 72,  204 => 70,  200 => 68,  198 => 67,  195 => 66,  193 => 65,  190 => 64,  188 => 63,  185 => 62,  183 => 61,  179 => 60,  175 => 59,  170 => 56,  164 => 54,  162 => 53,  157 => 52,  151 => 50,  149 => 49,  144 => 46,  138 => 44,  136 => 43,  131 => 42,  125 => 40,  123 => 39,  117 => 36,  113 => 34,  104 => 27,  102 => 26,  98 => 24,  92 => 22,  90 => 21,  85 => 20,  81 => 18,  79 => 17,  76 => 16,  74 => 15,  71 => 14,  69 => 13,  66 => 12,  64 => 11,  59 => 9,  55 => 8,  51 => 7,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "49471b0e30dcd3d19364e13eb55bb0fd2d78fcbb", "");
    }
}
