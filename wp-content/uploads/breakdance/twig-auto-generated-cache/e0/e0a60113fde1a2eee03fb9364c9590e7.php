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

/* b9939adcc45e8b1553b5ff6c28ff43e80d2fa080 */
class __TwigTemplate_e7d59ee49d86c8fe0df7674b9e95f736 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "b9939adcc45e8b1553b5ff6c28ff43e80d2fa080", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        $context["mobileBreakpoint"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "advanced", [], "any", false, true, false, 4), "disable_desktop_styles_at", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "advanced", [], "any", false, true, false, 4), "disable_desktop_styles_at", [], "any", false, false, false, 4), "breakpoint_tablet_landscape")) : ("breakpoint_tablet_landscape"));
        // line 5
        $context["desktopBreakpoint"] = "breakpoint_base";
        // line 6
        $context["breakpointWidth"] = Breakdance\PluginsAPI\getBreakpointMaxWidth(($context["mobileBreakpoint"] ?? null));
        // line 7
        echo "
";
        // line 8
        if ((($context["isBaseBreakpoint"] ?? null) && (($context["mobileBreakpoint"] ?? null) != ($context["desktopBreakpoint"] ?? null)))) {
            // line 9
            echo "  ";
            if ((($context["mobileBreakpoint"] ?? null) != "never")) {
                // line 10
                echo "    @media (min-width: ";
                echo (($context["breakpointWidth"] ?? null) + 1);
                echo "px) {
  ";
            }
            // line 12
            echo "    ";
            echo twig_call_macro($macros["macros"], "macro_atomV1MenuDropdownCss", ["%%SELECTOR%%", ($context["design"] ?? null)], 12, $context, $this->getSourceContext());
            echo "

    ";
            // line 15
            echo "    ";
            $context["sections"] = [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 15), "columns", [], "any", false, false, false, 15), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 15), "columns_2", [], "any", false, false, false, 15)];
            // line 16
            echo "
    ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sections"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 18
                echo "      ";
                $context["sectionIndex"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 18);
                // line 19
                echo "
      ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["section"]);
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
                foreach ($context['_seq'] as $context["_key"] => $context["columns"]) {
                    // line 21
                    echo "        ";
                    $context["columnIndex"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 21);
                    // line 22
                    echo "
        ";
                    // line 23
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["columns"], "links", [], "any", false, false, false, 23));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                        // line 24
                        echo "          %%SELECTOR%% .breakdance-dropdown-section:nth-child(";
                        echo ($context["sectionIndex"] ?? null);
                        echo ") .breakdance-dropdown-column:nth-child(";
                        echo ($context["columnIndex"] ?? null);
                        echo ") .breakdance-dropdown-link:nth-child(";
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 24);
                        echo ") {
            ";
                        // line 25
                        echo twig_call_macro($macros["macros"], "macro_atomV1MenuDropdownLinkGraphicCss", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["link"], "advanced", [], "any", false, false, false, 25), "graphic", [], "any", false, false, false, 25)], 25, $context, $this->getSourceContext());
                        echo "
          }
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 28
                    echo "      ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['columns'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    ";
            // line 31
            echo "
    ";
            // line 32
            echo twig_call_macro($macros["macros"], "macro_atomV1MenuColumnCss", ["%%SELECTOR%% .breakdance-dropdown", twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "columns", [], "any", false, false, false, 32), ($context["globalSettings"] ?? null)], 32, $context, $this->getSourceContext());
            echo "
    ";
            // line 33
            echo twig_call_macro($macros["macros"], "macro_atomV1MenuDropdownLinkCss", ["%%SELECTOR%% .breakdance-dropdown", twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "links", [], "any", false, false, false, 33), ($context["globalSettings"] ?? null)], 33, $context, $this->getSourceContext());
            echo "
    ";
            // line 34
            echo twig_call_macro($macros["macros"], "macro_atomV1MenuAdditionalSectionCss", ["%%SELECTOR%% .breakdance-dropdown", twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "additional_section", [], "any", false, false, false, 34), ($context["globalSettings"] ?? null)], 34, $context, $this->getSourceContext());
            echo "
  ";
            // line 35
            if ((($context["mobileBreakpoint"] ?? null) != "never")) {
                // line 36
                echo "    }
  ";
            }
        }
        // line 39
        echo "
";
        // line 41
        echo "

    %%SELECTOR%% {
        ";
        // line 44
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 45
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 45), "wrapper", [], "any", false, false, false, 45), "background", [], "any", false, false, false, 45), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 46
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 46), "wrapper", [], "any", false, false, false, 46), "layout", [], "any", false, false, false, 46), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 47
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 47), "wrapper", [], "any", false, false, false, 47), "size", [], "any", false, false, false, 47), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 48
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 48), "wrapper", [], "any", false, false, false, 48), "typography", [], "any", false, false, false, 48),         // line 49
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 50
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 50), "wrapper", [], "any", false, false, false, 50), "spacing", [], "any", false, false, false, 50), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 51
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 51), "wrapper", [], "any", false, false, false, 51), "borders", [], "any", false, false, false, 51), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 52
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 52), "wrapper", [], "any", false, false, false, 52), "effects", [], "any", false, false, false, 52)], 44, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 56
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 57
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 57), "wrapper_hover", [], "any", false, false, false, 57), "background", [], "any", false, false, false, 57), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 58
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 58), "wrapper_hover", [], "any", false, false, false, 58), "layout", [], "any", false, false, false, 58), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 59
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 59), "wrapper_hover", [], "any", false, false, false, 59), "size", [], "any", false, false, false, 59), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 60
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 60), "wrapper_hover", [], "any", false, false, false, 60), "typography", [], "any", false, false, false, 60),         // line 61
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 62
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 62), "wrapper_hover", [], "any", false, false, false, 62), "spacing", [], "any", false, false, false, 62), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 63
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 63), "wrapper_hover", [], "any", false, false, false, 63), "borders", [], "any", false, false, false, 63), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 64
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 64), "wrapper_hover", [], "any", false, false, false, 64), "effects", [], "any", false, false, false, 64)], 56, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 68
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 68), "css", [], "any", false, false, false, 68);
        echo "


";
        // line 71
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 71), "hide", [], "any", false, false, false, 71)))) {
            // line 72
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 73
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 73), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 73), "hide", [], "any", false, false, false, 73))) {
                    // line 74
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 76
                    if (($context["isBuilder"] ?? null)) {
                        // line 77
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 80
                        echo "                        display: none;
                    ";
                    }
                    // line 82
                    echo "                }
            }
        ";
                }
                // line 85
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 87
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "b9939adcc45e8b1553b5ff6c28ff43e80d2fa080";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 87,  294 => 85,  289 => 82,  285 => 80,  280 => 77,  278 => 76,  272 => 74,  269 => 73,  264 => 72,  262 => 71,  256 => 68,  249 => 64,  248 => 63,  247 => 62,  246 => 61,  245 => 60,  244 => 59,  243 => 58,  242 => 57,  241 => 56,  234 => 52,  233 => 51,  232 => 50,  231 => 49,  230 => 48,  229 => 47,  228 => 46,  227 => 45,  226 => 44,  221 => 41,  218 => 39,  213 => 36,  211 => 35,  207 => 34,  203 => 33,  199 => 32,  196 => 31,  194 => 30,  180 => 29,  166 => 28,  149 => 25,  140 => 24,  123 => 23,  120 => 22,  117 => 21,  100 => 20,  97 => 19,  94 => 18,  77 => 17,  74 => 16,  71 => 15,  65 => 12,  59 => 10,  56 => 9,  54 => 8,  51 => 7,  49 => 6,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "b9939adcc45e8b1553b5ff6c28ff43e80d2fa080", "");
    }
}
