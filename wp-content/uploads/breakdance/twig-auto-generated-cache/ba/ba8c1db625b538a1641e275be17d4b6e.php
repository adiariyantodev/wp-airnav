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

/* 3f51617edb42b296d5105c567b3902c6f13efce6 */
class __TwigTemplate_13b4d65875926a84d3f504c985485a54 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "3f51617edb42b296d5105c567b3902c6f13efce6", 2)->unwrap();
        // line 3
        echo "
          <div class=\"ee-video-container\">
    ";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video", [], "any", false, false, false, 5), "video", [], "any", false, false, false, 5), "type", [], "any", false, false, false, 5) == "video")) {
            // line 6
            echo "        <video class=\"ee-video\" src=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video", [], "any", false, false, false, 6), "video", [], "any", false, false, false, 6), "embedUrl", [], "any", false, false, false, 6);
            echo "\"
               ";
            // line 7
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video_options", [], "any", false, false, false, 7), "autoplay", [], "any", false, false, false, 7)) {
                echo "autoplay='true'";
            }
            // line 8
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video_options", [], "any", false, false, false, 8), "controls", [], "any", false, false, false, 8)) {
                echo "controls='true'";
            }
            // line 9
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video_options", [], "any", false, false, false, 9), "poster", [], "any", false, false, false, 9), "url", [], "any", false, false, false, 9)) {
                echo "poster='";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video_options", [], "any", false, false, false, 9), "poster", [], "any", false, false, false, 9), "url", [], "any", false, false, false, 9);
                echo "'";
            }
            // line 10
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video_options", [], "any", false, false, false, 10), "loop", [], "any", false, false, false, 10)) {
                echo "loop='true'";
            }
            // line 11
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video_options", [], "any", false, false, false, 11), "muted", [], "any", false, false, false, 11)) {
                echo "muted='true'";
            }
            // line 12
            echo "                ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video_options", [], "any", false, false, false, 12), "download_button", [], "any", false, false, false, 12)) {
                echo "controlsList=\"nodownload\"";
            }
            // line 13
            echo "        >
        </video>
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
($context["content"] ?? null), "video", [], "any", false, false, false, 15), "video", [], "any", false, false, false, 15), "type", [], "any", false, false, false, 15) == "oembed")) {
            // line 16
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video", [], "any", false, false, false, 16), "video", [], "any", false, false, false, 16), "provider", [], "any", false, false, false, 16) == "youtube")) {
                // line 17
                echo "            ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 17), "loading_method", [], "any", false, false, false, 17) != "lightweight") ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video", [], "any", false, false, false, 17), "video", [], "any", false, false, false, 17), "videoId", [], "any", false, false, false, 17))) {
                    // line 18
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 18), "privacy_mode", [], "any", false, false, false, 18)) {
                        // line 19
                        echo "                    ";
                        $context["videoUrl"] = twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video", [], "any", false, false, false, 19), "video", [], "any", false, false, false, 19), "embedUrl", [], "any", false, false, false, 19), ["https://www.youtube.com/" => "https://www.youtube-nocookie.com/"]);
                        // line 20
                        echo "                ";
                    } else {
                        // line 21
                        echo "                    ";
                        $context["videoUrl"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video", [], "any", false, false, false, 21), "video", [], "any", false, false, false, 21), "embedUrl", [], "any", false, false, false, 21);
                        // line 22
                        echo "                ";
                    }
                    // line 23
                    echo "
                ";
                    // line 24
                    $context["isLazyLoad"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 24), "loading_method", [], "any", false, false, false, 24) != "embed") &&  !($context["isBuilder"] ?? null));
                    // line 25
                    echo "                ";
                    $context["srcAttribute"] = ((($context["isLazyLoad"] ?? null)) ? ("data-src") : ("src"));
                    // line 26
                    echo "
                <iframe
                        class=\"ee-video ";
                    // line 28
                    echo ((($context["isLazyLoad"] ?? null)) ? ("lozad") : (""));
                    echo "\"
                ";
                    // line 30
                    echo "                ";
                    echo ($context["srcAttribute"] ?? null);
                    echo "=\"";
                    echo ($context["videoUrl"] ?? null);
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 30), "hide_player_controls", [], "any", false, false, false, 30)) ? ("&controls=0") : (""));
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 30), "autoplay", [], "any", false, false, false, 30)) ? ("&autoplay=1") : (""));
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 30), "mute", [], "any", false, false, false, 30)) ? ("&mute=1") : (""));
                    echo (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 30), "play_inline", [], "any", false, false, false, 30)) ? ("&playsinline=0") : (""));
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 30), "modest_branding", [], "any", false, false, false, 30)) ? ("&modestbranding=1") : (""));
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 30), "start_time", [], "any", false, false, false, 30)) ? (("&start=" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 30), "start_time", [], "any", false, false, false, 30), "number", [], "any", false, false, false, 30))) : (""));
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 30), "end_time", [], "any", false, false, false, 30)) ? (("&end=" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 30), "end_time", [], "any", false, false, false, 30), "number", [], "any", false, false, false, 30))) : (""));
                    echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 30), "suggested_videos", [], "any", false, false, false, 30) == "recommendations")) ? ("") : ("&rel=0"));
                    echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 30), "loop", [], "any", false, false, false, 30) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video", [], "any", false, false, false, 30), "video", [], "any", false, false, false, 30), "videoId", [], "any", false, false, false, 30))) ? ((("&playlist=" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video", [], "any", false, false, false, 30), "video", [], "any", false, false, false, 30), "videoId", [], "any", false, false, false, 30)) . "&loop=1")) : (""));
                    echo "\"
                frameborder=\"0\"
                allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\"
                allowfullscreen>
                </iframe>
            ";
                } else {
                    // line 36
                    echo "                ";
                    $context["defaultMaxRes"] = (("https://i.ytimg.com/vi/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video", [], "any", false, false, false, 36), "video", [], "any", false, false, false, 36), "videoId", [], "any", false, false, false, 36)) . "/maxresdefault.jpg");
                    // line 37
                    echo "                ";
                    $context["customBackground"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 37), "background_image", [], "any", false, false, false, 37), "sizes", [], "any", false, false, false, 37)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["full"] ?? null) : null), "url", [], "any", false, false, false, 37);
                    // line 38
                    echo "                ";
                    $context["logo"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 38), "logo", [], "any", false, false, false, 38), "sizes", [], "any", false, false, false, 38)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["full"] ?? null) : null), "url", [], "any", false, false, false, 38);
                    // line 39
                    echo "
                <lite-youtube
                        videoid=\"";
                    // line 41
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video", [], "any", false, false, false, 41), "video", [], "any", false, false, false, 41), "videoId", [], "any", false, false, false, 41);
                    echo "\"
                        ";
                    // line 43
                    echo "                        style=\"background-image: url(";
                    echo ((array_key_exists("customBackground", $context)) ? (_twig_default_filter(($context["customBackground"] ?? null), ($context["defaultMaxRes"] ?? null))) : (($context["defaultMaxRes"] ?? null)));
                    echo "); ";
                    echo ((($context["logo"] ?? null)) ? ((("--logoUrl: url(" . ($context["logo"] ?? null)) . ")")) : (""));
                    echo "\"
                        class=\"ee-video\"
                        title=\"";
                    // line 45
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 45), "title", [], "any", false, false, false, 45);
                    echo "\"
                        params=\"";
                    // line 46
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 46), "hide_player_controls", [], "any", false, false, false, 46)) ? ("controls=0") : (""));
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 46), "mute", [], "any", false, false, false, 46)) ? ("&mute=1") : (""));
                    echo (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 46), "play_inline", [], "any", false, false, false, 46)) ? ("&playsinline=0") : (""));
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 46), "modest_branding", [], "any", false, false, false, 46)) ? ("&modestbranding=1") : (""));
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 46), "start_time", [], "any", false, false, false, 46)) ? (("&start=" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 46), "start_time", [], "any", false, false, false, 46), "number", [], "any", false, false, false, 46))) : (""));
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 46), "end_time", [], "any", false, false, false, 46)) ? (("&end=" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 46), "end_time", [], "any", false, false, false, 46), "number", [], "any", false, false, false, 46))) : (""));
                    echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 46), "suggested_videos", [], "any", false, false, false, 46) == "recommendations")) ? ("") : ("&rel=0"));
                    echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 46), "loop", [], "any", false, false, false, 46) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video", [], "any", false, false, false, 46), "video", [], "any", false, false, false, 46), "videoId", [], "any", false, false, false, 46))) ? ((("&playlist=" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video", [], "any", false, false, false, 46), "video", [], "any", false, false, false, 46), "videoId", [], "any", false, false, false, 46)) . "&loop=1")) : (""));
                    echo "\"
                >
                </lite-youtube>
            ";
                }
                // line 50
                echo "        ";
            }
            // line 51
            echo "
        ";
            // line 52
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video", [], "any", false, false, false, 52), "video", [], "any", false, false, false, 52), "provider", [], "any", false, false, false, 52) == "vimeo")) {
                // line 53
                echo "            ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "vimeo", [], "any", false, false, false, 53), "loading_method", [], "any", false, false, false, 53) != "lightweight") ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video", [], "any", false, false, false, 53), "video", [], "any", false, false, false, 53), "videoId", [], "any", false, false, false, 53))) {
                    // line 54
                    echo "                ";
                    $context["isLazyLoad"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "vimeo", [], "any", false, false, false, 54), "loading_method", [], "any", false, false, false, 54) != "embed") &&  !($context["isBuilder"] ?? null));
                    // line 55
                    echo "                ";
                    $context["srcAttribute"] = ((($context["isLazyLoad"] ?? null)) ? ("data-src") : ("src"));
                    // line 56
                    echo "
                ";
                    // line 58
                    echo "                <div class=\"ee-video ee-vimeo\">
                    <iframe
                            class=\"ee-video ";
                    // line 60
                    echo ((($context["isLazyLoad"] ?? null)) ? ("lozad") : (""));
                    echo "\"
                    ";
                    // line 61
                    echo ($context["srcAttribute"] ?? null);
                    echo "=
                    \"";
                    // line 62
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video", [], "any", false, false, false, 62), "video", [], "any", false, false, false, 62), "embedUrl", [], "any", false, false, false, 62);
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "vimeo", [], "any", false, false, false, 62), "autoplay", [], "any", false, false, false, 62)) ? ("&autoplay=1") : (""));
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "vimeo", [], "any", false, false, false, 62), "hide_player_controls", [], "any", false, false, false, 62)) ? ("&controls=0") : ("&controls=1"));
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "vimeo", [], "any", false, false, false, 62), "controls", [], "any", false, false, false, 62), "color", [], "any", false, false, false, 62)) ? (("&color=" . twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "vimeo", [], "any", false, false, false, 62), "controls", [], "any", false, false, false, 62), "color", [], "any", false, false, false, 62), 1, 6))) : (""));
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "vimeo", [], "any", false, false, false, 62), "loop", [], "any", false, false, false, 62)) ? ("&loop=1") : (""));
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "vimeo", [], "any", false, false, false, 62), "mute", [], "any", false, false, false, 62)) ? ("&muted=1") : (""));
                    echo (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "vimeo", [], "any", false, false, false, 62), "play_inline", [], "any", false, false, false, 62)) ? ("&playsinline=0") : (""));
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "vimeo", [], "any", false, false, false, 62), "start_time", [], "any", false, false, false, 62)) ? (("#t=" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "vimeo", [], "any", false, false, false, 62), "start_time", [], "any", false, false, false, 62), "number", [], "any", false, false, false, 62))) : (""));
                    echo "
                    \"
                    width=\"100%\" height=\"100%\" frameborder=\"0\"
                    allow=\"autoplay; fullscreen; picture-in-picture\" allowfullscreen>
                    </iframe>
                </div>
            ";
                } else {
                    // line 69
                    echo "                <lite-vimeo
                        videoid=\"";
                    // line 70
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video", [], "any", false, false, false, 70), "video", [], "any", false, false, false, 70), "videoId", [], "any", false, false, false, 70);
                    echo "\"
                        class=\"ee-video\">
                </lite-vimeo>
            ";
                }
                // line 74
                echo "        ";
            }
            // line 75
            echo "
        ";
            // line 76
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video", [], "any", false, false, false, 76), "video", [], "any", false, false, false, 76), "provider", [], "any", false, false, false, 76) == "dailymotion")) {
                // line 77
                echo "            ";
                $context["isLazyLoad"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "dailymotion", [], "any", false, false, false, 77), "loading_method", [], "any", false, false, false, 77) != "embed") &&  !($context["isBuilder"] ?? null));
                // line 78
                echo "            ";
                $context["srcAttribute"] = ((($context["isLazyLoad"] ?? null)) ? ("data-src") : ("src"));
                // line 79
                echo "
            <div class=\"ee-video ee-dailymotion\">
                <iframe frameborder=\"0\" width=\"100%\" height=\"100%\"
                        class=\"ee-video ";
                // line 82
                echo ((($context["isLazyLoad"] ?? null)) ? ("lozad") : (""));
                echo "\"
                ";
                // line 83
                echo ($context["srcAttribute"] ?? null);
                echo "=
                \"";
                // line 84
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "video", [], "any", false, false, false, 84), "video", [], "any", false, false, false, 84), "embedUrl", [], "any", false, false, false, 84);
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "dailymotion", [], "any", false, false, false, 84), "autoplay", [], "any", false, false, false, 84)) ? ("&autoplay=1") : (""));
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "dailymotion", [], "any", false, false, false, 84), "controls", [], "any", false, false, false, 84), "hide_player_controls", [], "any", false, false, false, 84)) ? ("&controls=0") : ("&controls=1"));
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "dailymotion", [], "any", false, false, false, 84), "controls", [], "any", false, false, false, 84), "color", [], "any", false, false, false, 84)) ? (("&ui-highlight=" . twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "dailymotion", [], "any", false, false, false, 84), "controls", [], "any", false, false, false, 84), "color", [], "any", false, false, false, 84), 1, 6))) : (""));
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "dailymotion", [], "any", false, false, false, 84), "controls", [], "any", false, false, false, 84), "hide_logo", [], "any", false, false, false, 84)) ? ("&ui-logo=0") : (""));
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "dailymotion", [], "any", false, false, false, 84), "controls", [], "any", false, false, false, 84), "hide_video_info", [], "any", false, false, false, 84)) ? ("&ui-start-screen-info=0") : (""));
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "dailymotion", [], "any", false, false, false, 84), "controls", [], "any", false, false, false, 84), "disable_sharing", [], "any", false, false, false, 84)) ? ("&sharing-enable=0") : (""));
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "dailymotion", [], "any", false, false, false, 84), "mute", [], "any", false, false, false, 84)) ? ("&mute=1") : (""));
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "dailymotion", [], "any", false, false, false, 84), "start_time", [], "any", false, false, false, 84)) ? (("&start=" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "dailymotion", [], "any", false, false, false, 84), "start_time", [], "any", false, false, false, 84), "number", [], "any", false, false, false, 84))) : (""));
                echo "
                &queue-autoplay-next=0\"
                allowfullscreen
                allow=\"autoplay; fullscreen; picture-in-picture\">
                </iframe>
            </div>
        ";
            }
            // line 91
            echo "    ";
        }
        // line 92
        echo "
    ";
        // line 93
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 93), "overlay", [], "any", false, false, false, 93)) {
            // line 94
            echo "        <div class=\"ee-video-overlay\"></div>
    ";
        }
        // line 96
        echo "</div>

         ";
    }

    public function getTemplateName()
    {
        return "3f51617edb42b296d5105c567b3902c6f13efce6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 96,  303 => 94,  301 => 93,  298 => 92,  295 => 91,  277 => 84,  273 => 83,  269 => 82,  264 => 79,  261 => 78,  258 => 77,  256 => 76,  253 => 75,  250 => 74,  243 => 70,  240 => 69,  223 => 62,  219 => 61,  215 => 60,  211 => 58,  208 => 56,  205 => 55,  202 => 54,  199 => 53,  197 => 52,  194 => 51,  191 => 50,  177 => 46,  173 => 45,  165 => 43,  161 => 41,  157 => 39,  154 => 38,  151 => 37,  148 => 36,  127 => 30,  123 => 28,  119 => 26,  116 => 25,  114 => 24,  111 => 23,  108 => 22,  105 => 21,  102 => 20,  99 => 19,  96 => 18,  93 => 17,  90 => 16,  88 => 15,  84 => 13,  79 => 12,  74 => 11,  69 => 10,  62 => 9,  57 => 8,  53 => 7,  48 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "3f51617edb42b296d5105c567b3902c6f13efce6", "");
    }
}
