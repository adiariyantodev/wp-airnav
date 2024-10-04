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

/* 65ace40ff7f179ced61a221b82de1fb89b6b6b5f */
class __TwigTemplate_0851cfbd4ff7518c01653be330eb8fda extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "65ace40ff7f179ced61a221b82de1fb89b6b6b5f", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        $context["layout"] = twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 4);
        // line 5
        $context["type"] = ((twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "type", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "type", [], "any", false, false, false, 5), "grid")) : ("grid"));
        // line 6
        $context["mode"] = (((($context["type"] ?? null) == "slider")) ? ("gallery-slider") : ("isotope"));
        // line 7
        $context["isSlider"] = (($context["type"] ?? null) == "slider");
        // line 8
        $context["customSliderRatio"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "slider_images", [], "any", false, false, false, 8), "aspect_ratio", [], "any", false, false, false, 8) == "0")) ? ("custom") : ("ratio"));
        // line 9
        echo "
";
        // line 10
        $context["multiple"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 10), "type", [], "any", false, false, false, 10) == "multiple");
        // line 11
        $context["images"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 11), "images", [], "any", false, false, false, 11);
        // line 12
        $context["galleries"] = ((($context["multiple"] ?? null)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 12), "galleries", [], "any", false, false, false, 12)) : ([0 => ["images" => ($context["images"] ?? null)]]));
        // line 13
        echo "
";
        // line 14
        $context["linkType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 14), "link", [], "any", false, false, false, 14);
        // line 15
        $context["linkEnabled"] = twig_in_filter(($context["linkType"] ?? null), [0 => "lightbox", 1 => "custom_url", 2 => "media_file"]);
        // line 16
        $context["tag"] = ((($context["linkEnabled"] ?? null)) ? ("a") : ("div"));
        // line 17
        echo "
";
        // line 18
        $context["size"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 18), "image_size", [], "any", false, false, false, 18);
        // line 19
        $context["lazyLoad"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 19), "lazy_load", [], "any", false, false, false, 19)) ? ("lazy") : ("eager"));
        // line 20
        $context["showCaptions"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "captions", [], "any", false, true, false, 20), "show_captions", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "captions", [], "any", false, true, false, 20), "show_captions", [], "any", false, false, false, 20), "never")) : ("never"));
        // line 21
        echo "
";
        // line 22
        $context["animation"] = "none";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "captions", [], "any", false, false, false, 23), "show_captions", [], "any", false, false, false, 23) == "on_hover")) {
            // line 24
            echo "  ";
            $context["animation"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "captions", [], "any", false, true, false, 24), "animation", [], "any", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "captions", [], "any", false, true, false, 24), "animation", [], "any", false, false, false, 24), "fade")) : ("fade"));
        }
        // line 26
        echo "
";
        // line 28
        $context["cssClasses"] = twig_join_filter([0 => ("ee-gallery--" .         // line 29
($context["mode"] ?? null)), 1 => ("ee-gallery--" .         // line 30
($context["type"] ?? null)), 2 => ("ee-gallery--" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 31
($context["content"] ?? null), "content", [], "any", false, false, false, 31), "type", [], "any", false, false, false, 31)), 3 => ("ee-gallery--" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 32
($context["content"] ?? null), "content", [], "any", false, false, false, 32), "link", [], "any", false, false, false, 32)), 4 => ("ee-gallery--" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 33
($context["design"] ?? null), "images", [], "any", false, false, false, 33), "hover_animation", [], "any", false, false, false, 33)), 5 => ("ee-gallery--caption-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 34
($context["design"] ?? null), "captions", [], "any", false, false, false, 34), "position", [], "any", false, false, false, 34)), 6 => ("ee-gallery--caption-" .         // line 35
($context["animation"] ?? null)), 7 => ("ee-gallery--" .         // line 36
($context["customSliderRatio"] ?? null))], " ");
        // line 38
        echo "
";
        // line 39
        $context["isEmpty"] = (( !twig_length_filter($this->env, ($context["images"] ?? null)) &&  !($context["multiple"] ?? null)) || (($context["multiple"] ?? null) &&  !twig_length_filter($this->env, ($context["galleries"] ?? null))));
        // line 40
        echo "
";
        // line 41
        if (($context["isEmpty"] ?? null)) {
            // line 42
            echo "  ";
            $context["cssClasses"] = ((($context["cssClasses"] ?? null) . " ") . "ee-gallery--empty");
        }
        // line 44
        echo "
";
        // line 45
        if ((($context["multiple"] ?? null) &&  !($context["isEmpty"] ?? null))) {
            // line 46
            echo "  ";
            $context["allEnabled"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 46), "filter_bar", [], "any", false, false, false, 46), "all_filter", [], "any", false, false, false, 46);
            // line 47
            echo "  ";
            $context["allLabel"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 47), "filter_bar", [], "any", false, false, false, 47), "all_label", [], "any", false, false, false, 47);
            // line 48
            echo "  ";
            $context["filters"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 48), "galleries", [], "any", false, false, false, 48);
            // line 49
            echo "
  <span class=\"ee-gallery-filter\">
    <div class=\"bde-tabs\">
      ";
            // line 52
            echo twig_call_macro($macros["macros"], "macro_atomV1TabsHtml", ["%%ID%%", ($context["galleries"] ?? null), twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "filter_bar", [], "any", false, false, false, 52), ["enabled" => ($context["allEnabled"] ?? null), "label" => ($context["allLabel"] ?? null)]], 52, $context, $this->getSourceContext());
            echo "
    </div>
  </span>
";
        }
        // line 56
        echo "
<div class=\"ee-gallery ";
        // line 57
        echo ($context["cssClasses"] ?? null);
        echo "\">
  ";
        // line 59
        echo "  ";
        if ((($context["allEnabled"] ?? null) && ($context["isSlider"] ?? null))) {
            // line 60
            echo "    <div data-gallery-swiper-category=\"all\" id=\"ee-gallery-swiper-%%ID%%-all\" class=\"ee-gallery-swiper breakdance-swiper-wrapper\">
      <div class=\"swiper\">
        <div class=\"swiper-wrapper\">
         ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["galleries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
                // line 64
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["gallery"], "images", [], "any", false, false, false, 64));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 65
                    echo "            ";
                    $context["url"] = (((($context["linkType"] ?? null) == "custom_url")) ? (twig_get_attribute($this->env, $this->source, $context["item"], "custom_url", [], "any", false, false, false, 65)) : ((((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 65) == "video")) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "video", [], "any", false, false, false, 65), "url", [], "any", false, false, false, 65)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 65), "url", [], "any", false, false, false, 65)))));
                    // line 66
                    echo "            ";
                    $context["type"] = ((((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 66) == "video") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 66), "type", [], "any", false, false, false, 66) == "video"))) ? ("video") : ("image"));
                    // line 67
                    echo "
            <div class=\"swiper-slide\">
              <";
                    // line 69
                    echo ($context["tag"] ?? null);
                    echo " class=\"ee-gallery-item ee-gallery-item--";
                    echo ($context["type"] ?? null);
                    echo " ee-gallery-item--multiple\" href=\"";
                    echo ((array_key_exists("url", $context)) ? (_twig_default_filter(($context["url"] ?? null), "#")) : ("#"));
                    echo "\" data-sub-html=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "caption", [], "any", false, false, false, 69);
                    echo "\" data-category=\"all\" ";
                    echo twig_call_macro($macros["macros"], "macro_lightboxAttrs", [$context["item"]], 69, $context, $this->getSourceContext());
                    echo ">
                <figure class=\"ee-gallery-item-figure\">
                  ";
                    // line 71
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 71) == "video")) {
                        // line 72
                        echo "                    ";
                        echo twig_call_macro($macros["macros"], "macro_video", [twig_get_attribute($this->env, $this->source, $context["item"], "video", [], "any", false, false, false, 72)], 72, $context, $this->getSourceContext());
                        echo "
                  ";
                    } else {
                        // line 74
                        echo "                    ";
                        echo twig_call_macro($macros["macros"], "macro_getMedia", [twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 74), ($context["size"] ?? null), ($context["lazyLoad"] ?? null)], 74, $context, $this->getSourceContext());
                        echo "
                  ";
                    }
                    // line 76
                    echo "                 
                  ";
                    // line 77
                    if (((($context["showCaptions"] ?? null) != "never") && (twig_get_attribute($this->env, $this->source, $context["item"], "caption", [], "any", false, false, false, 77) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 77), "caption", [], "any", false, false, false, 77)))) {
                        // line 78
                        echo "                    <figcaption class=\"ee-gallery-item-caption\">
                      ";
                        // line 79
                        echo ((twig_get_attribute($this->env, $this->source, $context["item"], "caption", [], "any", true, true, false, 79)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["item"], "caption", [], "any", false, false, false, 79), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 79), "caption", [], "any", false, false, false, 79))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 79), "caption", [], "any", false, false, false, 79)));
                        echo "
                    </figcaption>
                  ";
                    }
                    // line 82
                    echo "                </figure>
              </";
                    // line 83
                    echo ($context["tag"] ?? null);
                    echo ">
            </div>

          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "        </div>
      </div>
      ";
            // line 90
            echo twig_call_macro($macros["macros"], "macro_AtomV1SwiperPaginationAndArrowsHtml", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 90), "slider", [], "any", false, false, false, 90)], 90, $context, $this->getSourceContext());
            echo "
    </div>
  ";
        }
        // line 93
        echo "
 ";
        // line 95
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["galleries"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
            // line 96
            echo "    ";
            if (($context["isSlider"] ?? null)) {
                // line 97
                echo "      <div data-gallery-swiper-category=\"";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 97);
                echo "\" id=\"ee-gallery-swiper-%%ID%%-";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 97);
                echo "\" class=\"ee-gallery-swiper breakdance-swiper-wrapper\">
      <div class=\"swiper\">
      <div class=\"swiper-wrapper\">
    ";
            }
            // line 101
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["gallery"], "images", [], "any", false, false, false, 101));
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
                // line 102
                echo "      ";
                $context["url"] = (((($context["linkType"] ?? null) == "custom_url")) ? (twig_get_attribute($this->env, $this->source, $context["item"], "custom_url", [], "any", false, false, false, 102)) : ((((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 102) == "video")) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "video", [], "any", false, false, false, 102), "url", [], "any", false, false, false, 102)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 102), "url", [], "any", false, false, false, 102)))));
                // line 103
                echo "      ";
                $context["type"] = ((((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 103) == "video") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 103), "type", [], "any", false, false, false, 103) == "video"))) ? ("video") : ("image"));
                // line 104
                echo "
      ";
                // line 105
                if (($context["isSlider"] ?? null)) {
                    // line 106
                    echo "        <div class=\"swiper-slide\">
      ";
                }
                // line 108
                echo "
        <";
                // line 109
                echo ($context["tag"] ?? null);
                echo " class=\"ee-gallery-item ee-gallery-item--";
                echo ($context["type"] ?? null);
                echo " ee-gallery-item--single\" href=\"";
                echo ((array_key_exists("url", $context)) ? (_twig_default_filter(($context["url"] ?? null), "#")) : ("#"));
                echo "\" data-sub-html=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "caption", [], "any", false, false, false, 109);
                echo "\" data-category=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 109), "loop", [], "any", false, false, false, 109), "index", [], "any", false, false, false, 109);
                echo "\" ";
                echo twig_call_macro($macros["macros"], "macro_lightboxAttrs", [$context["item"]], 109, $context, $this->getSourceContext());
                echo ">
          <figure class=\"ee-gallery-item-figure\">
            ";
                // line 111
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 111) == "video")) {
                    // line 112
                    echo "              ";
                    echo twig_call_macro($macros["macros"], "macro_video", [twig_get_attribute($this->env, $this->source, $context["item"], "video", [], "any", false, false, false, 112)], 112, $context, $this->getSourceContext());
                    echo "
            ";
                } else {
                    // line 114
                    echo "              ";
                    echo twig_call_macro($macros["macros"], "macro_getMedia", [twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 114), ($context["size"] ?? null), ($context["lazyLoad"] ?? null)], 114, $context, $this->getSourceContext());
                    echo "
            ";
                }
                // line 116
                echo "
            ";
                // line 117
                if (((($context["showCaptions"] ?? null) != "never") && (twig_get_attribute($this->env, $this->source, $context["item"], "caption", [], "any", false, false, false, 117) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 117), "caption", [], "any", false, false, false, 117)))) {
                    // line 118
                    echo "              <figcaption class=\"ee-gallery-item-caption\">
                ";
                    // line 119
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "caption", [], "any", true, true, false, 119)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["item"], "caption", [], "any", false, false, false, 119), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 119), "caption", [], "any", false, false, false, 119))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 119), "caption", [], "any", false, false, false, 119)));
                    echo "
              </figcaption>
            ";
                }
                // line 122
                echo "          </figure>
        </";
                // line 123
                echo ($context["tag"] ?? null);
                echo ">

       ";
                // line 125
                if (($context["isSlider"] ?? null)) {
                    // line 126
                    echo "         </div>
      ";
                }
                // line 128
                echo "
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
            // line 130
            echo "    ";
            if (($context["isSlider"] ?? null)) {
                // line 131
                echo "      </div>
      </div>
        ";
                // line 133
                echo twig_call_macro($macros["macros"], "macro_AtomV1SwiperPaginationAndArrowsHtml", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 133), "slider", [], "any", false, false, false, 133)], 133, $context, $this->getSourceContext());
                echo "
      </div>
    ";
            }
            // line 136
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "  
  <div class=\"ee-gallery-gutter\"></div>
</div>


";
        // line 142
        if ((($context["isEmpty"] ?? null) && ($context["isBuilder"] ?? null))) {
            // line 143
            echo "  <div class=\"breakdance-canvas-empty-element\">
    <svg class=\"breakdance-canvas-empty-element__icon\" width=\"40\" viewBox=\"0 0 640 512\">
      <path fill=\"currentColor\" d=\"M608 0H160a32 32 0 0 0-32 32v96h160V64h192v320h128a32 32 0 0 0 32-32V32a32 32 0 0 0-32-32zM232 103a9 9 0 0 1-9 9h-30a9 9 0 0 1-9-9V73a9 9 0 0 1 9-9h30a9 9 0 0 1 9 9zm352 208a9 9 0 0 1-9 9h-30a9 9 0 0 1-9-9v-30a9 9 0 0 1 9-9h30a9 9 0 0 1 9 9zm0-104a9 9 0 0 1-9 9h-30a9 9 0 0 1-9-9v-30a9 9 0 0 1 9-9h30a9 9 0 0 1 9 9zm0-104a9 9 0 0 1-9 9h-30a9 9 0 0 1-9-9V73a9 9 0 0 1 9-9h30a9 9 0 0 1 9 9zm-168 57H32a32 32 0 0 0-32 32v288a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32V192a32 32 0 0 0-32-32zM96 224a32 32 0 1 1-32 32 32 32 0 0 1 32-32zm288 224H64v-32l64-64 32 32 128-128 96 96z\"></path>
    </svg>
    <h3 class=\"breakdance-canvas-empty-element__title\">No media selected.</h3>
  </div>
";
        }
        // line 150
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "65ace40ff7f179ced61a221b82de1fb89b6b6b5f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 150,  428 => 143,  426 => 142,  419 => 137,  405 => 136,  399 => 133,  395 => 131,  392 => 130,  377 => 128,  373 => 126,  371 => 125,  366 => 123,  363 => 122,  357 => 119,  354 => 118,  352 => 117,  349 => 116,  343 => 114,  337 => 112,  335 => 111,  320 => 109,  317 => 108,  313 => 106,  311 => 105,  308 => 104,  305 => 103,  302 => 102,  284 => 101,  274 => 97,  271 => 96,  253 => 95,  250 => 93,  244 => 90,  240 => 88,  234 => 87,  224 => 83,  221 => 82,  215 => 79,  212 => 78,  210 => 77,  207 => 76,  201 => 74,  195 => 72,  193 => 71,  180 => 69,  176 => 67,  173 => 66,  170 => 65,  165 => 64,  161 => 63,  156 => 60,  153 => 59,  149 => 57,  146 => 56,  139 => 52,  134 => 49,  131 => 48,  128 => 47,  125 => 46,  123 => 45,  120 => 44,  116 => 42,  114 => 41,  111 => 40,  109 => 39,  106 => 38,  104 => 36,  103 => 35,  102 => 34,  101 => 33,  100 => 32,  99 => 31,  98 => 30,  97 => 29,  96 => 28,  93 => 26,  89 => 24,  87 => 23,  85 => 22,  82 => 21,  80 => 20,  78 => 19,  76 => 18,  73 => 17,  71 => 16,  69 => 15,  67 => 14,  64 => 13,  62 => 12,  60 => 11,  58 => 10,  55 => 9,  53 => 8,  51 => 7,  49 => 6,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "65ace40ff7f179ced61a221b82de1fb89b6b6b5f", "");
    }
}
