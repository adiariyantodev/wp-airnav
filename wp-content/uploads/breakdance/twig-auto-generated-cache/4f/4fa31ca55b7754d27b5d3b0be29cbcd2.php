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

/* cb11c3442870e7d65283e85f7eb4510d601d70b3 */
class __TwigTemplate_cd00468542e17dc92e9ddf0bc8568f4e extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "cb11c3442870e7d65283e85f7eb4510d601d70b3", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        if (($context["isBaseBreakpoint"] ?? null)) {
            // line 5
            echo "
:root {

    ";
            // line 9
            echo "    ";
            // line 10
            echo "    ";
            // line 11
            echo "
    --white: #ffffff;

    --grey-50: #f9fafb;
    --grey-100: #f3f4f6;
    --grey-200: #e5e7eb;
    --grey-300: #d1d5db;
    --grey-400: #9ca3af;
    --grey-450: #787e8b;
    --grey-500: #6b7280;
    --grey-600: #4b5563;
    --grey-700: #374151;
    --grey-800: #1f2937;
    --grey-900: #111827;

    --blue-500: #3b82f6;
    --blue-600: #2563eb;

    --pink-600: #db2777;

    --emerald-100: #d1fae5;
    --emerald-700: #047857;

    --sky-100: #e0f2fe;
    --sky-500: #0ea5e9;

    --red-50: #fef2f2;
    --red-500: #ef4444;

    --indigo-50: #eef2ff;
    --indigo-600: #4f46e5;
    --indigo-700: #4338ca;

    ";
            // line 45
            echo "    --bde-brand-primary-color: ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 45), "brand", [], "any", true, true, false, 45)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 45), "brand", [], "any", false, false, false, 45), "var(--blue-500)")) : ("var(--blue-500)"));
            echo ";
    --bde-brand-primary-color-hover: ";
            // line 46
            echo _twig_default_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 46), "brand_hover", [], "any", true, true, false, 46)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 46), "brand_hover", [], "any", false, false, false, 46), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, false, false, 46), "brand", [], "any", false, false, false, 46))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, false, false, 46), "brand", [], "any", false, false, false, 46))), "var(--blue-600)");
            echo ";

    ";
            // line 49
            echo "    ";
            // line 50
            echo "    ";
            // line 51
            echo "
    ";
            // line 53
            echo "    ";
            $context["defaultFont"] = "system-ui, -apple-system, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\"";
            // line 54
            echo "
    ";
            // line 55
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 55), "body_font", [], "any", false, false, false, 55))) {
                // line 56
                echo "    --bde-body-font-family: ";
                echo ($context["defaultFont"] ?? null);
                echo ";
    ";
            } else {
                // line 58
                echo "    --bde-body-font-family: ";
                echo Breakdance\Fonts\process_font(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 58), "body_font", [], "any", false, false, false, 58));
                echo ";
    ";
            }
            // line 60
            echo "
    ";
            // line 61
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 61), "heading_font", [], "any", false, false, false, 61))) {
                // line 62
                echo "    --bde-heading-font-family: ";
                echo ($context["defaultFont"] ?? null);
                echo ";
    ";
            } else {
                // line 64
                echo "    --bde-heading-font-family: ";
                echo Breakdance\Fonts\process_font(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 64), "heading_font", [], "any", false, false, false, 64));
                echo ";
    ";
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    --bde-base-font-size: 16px;
    --bde-body-font-size: ";
            // line 69
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 69), "advanced", [], "any", false, true, false, 69), "body", [], "any", false, true, false, 69), "typography", [], "any", false, true, false, 69), "custom", [], "any", false, true, false, 69), "customTypography", [], "any", false, true, false, 69), "fontSize", [], "any", false, true, false, 69), "style", [], "any", true, true, false, 69)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 69), "advanced", [], "any", false, true, false, 69), "body", [], "any", false, true, false, 69), "typography", [], "any", false, true, false, 69), "custom", [], "any", false, true, false, 69), "customTypography", [], "any", false, true, false, 69), "fontSize", [], "any", false, true, false, 69), "style", [], "any", false, false, false, 69), "var(--bde-base-font-size)")) : ("var(--bde-base-font-size)"));
            echo ";

    ";
            // line 72
            echo "    --bde-font-size-ratio: 1.250;
    --bde-h6-font-size: ";
            // line 73
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 73), "advanced", [], "any", false, true, false, 73), "headings", [], "any", false, true, false, 73), "h6", [], "any", false, true, false, 73), "typography", [], "any", false, true, false, 73), "custom", [], "any", false, true, false, 73), "customTypography", [], "any", false, true, false, 73), "fontSize", [], "any", false, true, false, 73), "style", [], "any", true, true, false, 73)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 73), "advanced", [], "any", false, true, false, 73), "headings", [], "any", false, true, false, 73), "h6", [], "any", false, true, false, 73), "typography", [], "any", false, true, false, 73), "custom", [], "any", false, true, false, 73), "customTypography", [], "any", false, true, false, 73), "fontSize", [], "any", false, true, false, 73), "style", [], "any", false, false, false, 73), "var(--bde-base-font-size)")) : ("var(--bde-base-font-size)"));
            echo ";
    --bde-h5-font-size: ";
            // line 74
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 74), "advanced", [], "any", false, true, false, 74), "headings", [], "any", false, true, false, 74), "h5", [], "any", false, true, false, 74), "typography", [], "any", false, true, false, 74), "custom", [], "any", false, true, false, 74), "customTypography", [], "any", false, true, false, 74), "fontSize", [], "any", false, true, false, 74), "style", [], "any", true, true, false, 74)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 74), "advanced", [], "any", false, true, false, 74), "headings", [], "any", false, true, false, 74), "h5", [], "any", false, true, false, 74), "typography", [], "any", false, true, false, 74), "custom", [], "any", false, true, false, 74), "customTypography", [], "any", false, true, false, 74), "fontSize", [], "any", false, true, false, 74), "style", [], "any", false, false, false, 74), "calc(var(--bde-h6-font-size) * var(--bde-font-size-ratio))")) : ("calc(var(--bde-h6-font-size) * var(--bde-font-size-ratio))"));
            echo ";
    --bde-h4-font-size: ";
            // line 75
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 75), "advanced", [], "any", false, true, false, 75), "headings", [], "any", false, true, false, 75), "h4", [], "any", false, true, false, 75), "typography", [], "any", false, true, false, 75), "custom", [], "any", false, true, false, 75), "customTypography", [], "any", false, true, false, 75), "fontSize", [], "any", false, true, false, 75), "style", [], "any", true, true, false, 75)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 75), "advanced", [], "any", false, true, false, 75), "headings", [], "any", false, true, false, 75), "h4", [], "any", false, true, false, 75), "typography", [], "any", false, true, false, 75), "custom", [], "any", false, true, false, 75), "customTypography", [], "any", false, true, false, 75), "fontSize", [], "any", false, true, false, 75), "style", [], "any", false, false, false, 75), "calc(var(--bde-h5-font-size) * var(--bde-font-size-ratio))")) : ("calc(var(--bde-h5-font-size) * var(--bde-font-size-ratio))"));
            echo ";
    --bde-h3-font-size: ";
            // line 76
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 76), "advanced", [], "any", false, true, false, 76), "headings", [], "any", false, true, false, 76), "h3", [], "any", false, true, false, 76), "typography", [], "any", false, true, false, 76), "custom", [], "any", false, true, false, 76), "customTypography", [], "any", false, true, false, 76), "fontSize", [], "any", false, true, false, 76), "style", [], "any", true, true, false, 76)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 76), "advanced", [], "any", false, true, false, 76), "headings", [], "any", false, true, false, 76), "h3", [], "any", false, true, false, 76), "typography", [], "any", false, true, false, 76), "custom", [], "any", false, true, false, 76), "customTypography", [], "any", false, true, false, 76), "fontSize", [], "any", false, true, false, 76), "style", [], "any", false, false, false, 76), "calc(var(--bde-h4-font-size) * var(--bde-font-size-ratio))")) : ("calc(var(--bde-h4-font-size) * var(--bde-font-size-ratio))"));
            echo ";
    --bde-h2-font-size: ";
            // line 77
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 77), "advanced", [], "any", false, true, false, 77), "headings", [], "any", false, true, false, 77), "h2", [], "any", false, true, false, 77), "typography", [], "any", false, true, false, 77), "custom", [], "any", false, true, false, 77), "customTypography", [], "any", false, true, false, 77), "fontSize", [], "any", false, true, false, 77), "style", [], "any", true, true, false, 77)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 77), "advanced", [], "any", false, true, false, 77), "headings", [], "any", false, true, false, 77), "h2", [], "any", false, true, false, 77), "typography", [], "any", false, true, false, 77), "custom", [], "any", false, true, false, 77), "customTypography", [], "any", false, true, false, 77), "fontSize", [], "any", false, true, false, 77), "style", [], "any", false, false, false, 77), "calc(var(--bde-h3-font-size) * var(--bde-font-size-ratio))")) : ("calc(var(--bde-h3-font-size) * var(--bde-font-size-ratio))"));
            echo ";
    --bde-h1-font-size: ";
            // line 78
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 78), "advanced", [], "any", false, true, false, 78), "headings", [], "any", false, true, false, 78), "h1", [], "any", false, true, false, 78), "typography", [], "any", false, true, false, 78), "custom", [], "any", false, true, false, 78), "customTypography", [], "any", false, true, false, 78), "fontSize", [], "any", false, true, false, 78), "style", [], "any", true, true, false, 78)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 78), "advanced", [], "any", false, true, false, 78), "headings", [], "any", false, true, false, 78), "h1", [], "any", false, true, false, 78), "typography", [], "any", false, true, false, 78), "custom", [], "any", false, true, false, 78), "customTypography", [], "any", false, true, false, 78), "fontSize", [], "any", false, true, false, 78), "style", [], "any", false, false, false, 78), "calc(var(--bde-h2-font-size) * var(--bde-font-size-ratio))")) : ("calc(var(--bde-h2-font-size) * var(--bde-font-size-ratio))"));
            echo ";

    ";
            // line 81
            echo "    --bde-body-text-color: ";
            echo _twig_default_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 81), "text", [], "any", true, true, false, 81)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 81), "text", [], "any", false, false, false, 81), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 81), "advanced", [], "any", false, false, false, 81), "body", [], "any", false, false, false, 81), "color", [], "any", false, false, false, 81))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 81), "advanced", [], "any", false, false, false, 81), "body", [], "any", false, false, false, 81), "color", [], "any", false, false, false, 81))), "var(--grey-700)");
            echo ";
    --bde-headings-color: ";
            // line 82
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 82), "headings", [], "any", true, true, false, 82)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 82), "headings", [], "any", false, false, false, 82), "var(--grey-900)")) : ("var(--grey-900)"));
            echo ";

    --bde-background-color:";
            // line 84
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 84), "background", [], "any", true, true, false, 84)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 84), "background", [], "any", false, false, false, 84), "var(--grey-50)")) : ("var(--grey-50)"));
            echo ";

    ";
            // line 87
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, false, false, 87), "palette", [], "any", false, false, false, 87), "colors", [], "any", false, false, false, 87));
            foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
                // line 88
                echo "        ";
                if ($context["color"]) {
                    // line 89
                    echo "            ";
                    $context["value"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["color"], "value", [], "any", false, true, false, 89), "value", [], "any", true, true, false, 89)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["color"], "value", [], "any", false, true, false, 89), "value", [], "any", false, false, false, 89), twig_get_attribute($this->env, $this->source, $context["color"], "value", [], "any", false, false, false, 89))) : (twig_get_attribute($this->env, $this->source, $context["color"], "value", [], "any", false, false, false, 89)));
                    // line 90
                    echo "            --";
                    echo twig_get_attribute($this->env, $this->source, $context["color"], "cssVariableName", [], "any", false, false, false, 90);
                    echo ": ";
                    echo ($context["value"] ?? null);
                    echo ";
        ";
                }
                // line 92
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "
    ";
            // line 95
            echo "    --bde-transition-duration: ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "other", [], "any", false, true, false, 95), "transition_duration", [], "any", false, true, false, 95), "style", [], "any", true, true, false, 95)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "other", [], "any", false, true, false, 95), "transition_duration", [], "any", false, true, false, 95), "style", [], "any", false, false, false, 95), "300ms")) : ("300ms"));
            echo ";

    ";
            // line 98
            echo "    ";
            // line 99
            echo "    ";
            // line 100
            echo "
    --bde-column-gap: 32px;
    --bde-section-width: 1120px;
    --bde-section-vertical-padding: 100px;
    --bde-section-horizontal-padding: 20px;

    ";
            // line 107
            echo "    ";
            // line 108
            echo "    ";
            // line 109
            echo "
    ";
            // line 111
            echo "    --bde-button-primary-border-color: transparent;
    --bde-button-primary-border-color-hover: transparent;
    --bde-button-primary-text-color: white;
    --bde-button-primary-text-color-hover: white;

    ";
            // line 117
            echo "    --bde-button-secondary-text-color-hover: white;
    --bde-button-secondary-background-color: transparent;

    ";
            // line 121
            echo "    --bde-button-custom-border-color: var(--grey-900);
    --bde-button-custom-border-color-hover: var(--grey-700);
    --bde-button-custom-text-color: var(--white);
    --bde-button-custom-text-color-hover: var(--white);
    --bde-button-custom-background-color: var(--grey-900);
    --bde-button-custom-background-color-hover: var(--grey-700);

    ";
            // line 129
            echo "    --bde-button-font-weight: 500;
    --bde-button-border-radius: 3px;
    --bde-button-border-width: 1px;

    ";
            // line 134
            echo "    --bde-button-padding-base: 14px 24px;
    --bde-button-padding-sm: 8px 16px;
    --bde-button-padding-lg: 28px 54px;

    --bde-button-line-height: 1;

    ";
            // line 141
            echo "    ";
            // line 142
            echo "    ";
            // line 143
            echo "
    --bde-form-gap: 16px;
    --bde-form-after-label: 8px;
    --bde-form-after-sublabel: 8px;
    --bde-form-input-border-radius: 3px;
    --bde-form-input-background-color: var(--white);
    --bde-form-input-padding-top: 12px;
    --bde-form-input-padding-right: 16px;
    --bde-form-input-padding-bottom: 12px;
    --bde-form-input-padding-left: 16px;
    --bde-form-input-placeholder-color: var(--grey-450);
    --bde-form-input-border-width: 1px;
    --bde-form-input-border-color: var(--grey-300);
    --bde-form-label-font-weight: 500;
    --bde-form-label-required-color: var(--red-500);
    --bde-form-label-required-nudge-x: 0;
    --bde-form-label-required-nudge-y: 0;
    --bde-form-label-required-size: inherit;
    --bde-form-text-color: var(--grey-700);
    --bde-form-input-focused-background-color: var(--white);
    --bde-form-input-input-shadow: none;
    --bde-form-checkbox-size: 1em;

    ";
            // line 167
            echo "    ";
            // line 168
            echo "    ";
            // line 169
            echo "
    --bde-woo-base-paragraph-line-height: 1.4;
    --bde-woo-base-heading-line-height: 1.2;

    --bde-woo-base-border-color: var(--grey-300);
    --bde-woo-base-text-on-primary-color: var(--white);

    ";
            // line 177
            echo "    --bde-woo-base-space: 8px;
    --bde-woo-base-ratio: 1.618;

    ";
            // line 181
            echo "    --bde-woo-typography-font-weight-normal: ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 181), "advanced", [], "any", false, true, false, 181), "body", [], "any", false, true, false, 181), "typography", [], "any", false, true, false, 181), "custom", [], "any", false, true, false, 181), "customTypography", [], "any", false, true, false, 181), "fontWeight", [], "any", true, true, false, 181)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 181), "advanced", [], "any", false, true, false, 181), "body", [], "any", false, true, false, 181), "typography", [], "any", false, true, false, 181), "custom", [], "any", false, true, false, 181), "customTypography", [], "any", false, true, false, 181), "fontWeight", [], "any", false, false, false, 181), "400")) : ("400"));
            echo ";
    --bde-woo-typography-font-weight-medium: 500;
    --bde-woo-typography-font-weight-heavy: 600;

    ";
            // line 186
            echo "    --bde-woo-buttons-and-links-line-height: 1;

    ";
            // line 189
            echo "    --bde-woo-buttons-and-links__disabled-button-color: var(--grey-300);
    --bde-woo-buttons-and-links__disabled-button-text-color: var(--white);

    ";
            // line 193
            echo "    --bde-woo-buttons-and-links__nav-link-background-active: var(--grey-50);
    --bde-woo-buttons-and-links__nav-border-radius: 4px;


    --bde-woo-forms__inputs-select2-selected-item: var(--grey-300);

    ";
            // line 200
            echo "    --bde-woo-forms__wrappers-small: 360px;

    ";
            // line 203
            echo "    --error-svg-icon: url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"%23ef4444\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm5.5 16.084l-1.403 1.416-4.09-4.096-4.102 4.096-1.405-1.405 4.093-4.092-4.093-4.098 1.405-1.405 4.088 4.089 4.091-4.089 1.416 1.403-4.092 4.087 4.092 4.094z\"/></svg>');
    --success-svg-icon: url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"%23047857\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1 17l-5-5.299 1.399-1.43 3.574 3.736 6.572-7.007 1.455 1.403-8 8.597z\"/></svg>');
    --info-svg-icon: url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"%230ea5e9\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm1 18h-2v-6h-2v-2h4v8zm-1-9.75c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25 1.25.56 1.25 1.25-.56 1.25-1.25 1.25z\"/></svg>');
    --chevron-svg-icon: url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"%23111827\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z\"/></svg>');
    --checkbox-svg-icon: url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"%23111827\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M9 21.035l-9-8.638 2.791-2.87 6.156 5.874 12.21-12.436 2.843 2.817z\"/></svg>');
    --radiobutton-svg-icon: url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"%23111827\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><circle cx=\"12\" cy=\"12\" r=\"12\"/></svg>');
    --show-password-svg-icon: url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"%23111827\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 5c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zm0-2c-2.209 0-4 1.792-4 4 0 2.209 1.791 4 4 4s4-1.791 4-4c0-2.208-1.791-4-4-4z\"/></svg>');
    --hide-password-svg-icon: url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"%23111827\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M19.604 2.562l-3.346 3.137c-1.27-.428-2.686-.699-4.243-.699-7.569 0-12.015 6.551-12.015 6.551s1.928 2.951 5.146 5.138l-2.911 2.909 1.414 1.414 17.37-17.035-1.415-1.415zm-6.016 5.779c-3.288-1.453-6.681 1.908-5.265 5.206l-1.726 1.707c-1.814-1.16-3.225-2.65-4.06-3.66 1.493-1.648 4.817-4.594 9.478-4.594.927 0 1.796.119 2.61.315l-1.037 1.026zm-2.883 7.431l5.09-4.993c1.017 3.111-2.003 6.067-5.09 4.993zm13.295-4.221s-4.252 7.449-11.985 7.449c-1.379 0-2.662-.291-3.851-.737l1.614-1.583c.715.193 1.458.32 2.237.32 4.791 0 8.104-3.527 9.504-5.364-.729-.822-1.956-1.99-3.587-2.952l1.489-1.46c2.982 1.9 4.579 4.327 4.579 4.327z\"/></svg>');

    ";
            // line 213
            echo "    --bde-woo-notices__icon-size: 16px;
    --bde-woo-notices__padding: 24px;

    --bde-woo-notices__border-radius: 4px;
    --bde-woo-notices__error-background: var(--red-50);
    --bde-woo-notices__error-text: var(--red-500);
    --bde-woo-notices__error-link-text: var(--red-500);
    --bde-woo-notices__error-link-text-hover: var(--red-500);
    --bde-woo-notices__info-background: var(--sky-100);
    --bde-woo-notices__info-text: var(--sky-500);
    --bde-woo-notices__info-link-text: var(--sky-500);
    --bde-woo-notices__info-link-text-hover: var(--sky-500);
    --bde-woo-notices__success-background: var(--emerald-100);
    --bde-woo-notices__success-text: var(--emerald-700);
    --bde-woo-notices__success-link-text: var(--emerald-700);
    --bde-woo-notices__success-link-text-hover: var(--emerald-700);

    ";
            // line 231
            echo "    --bde-woo-sale-badge__border-radius: 2px;
    --bde-woo-sale-badge__padding: 4px 8px;

    ";
            // line 235
            echo "    --bde-woo-ratings__filled-star-svg: url('data:image/svg+xml;utf8,<svg width=\"24px\" height=\"24px\" fill=\"%23FBBF24\" viewBox=\"0 0 24 24\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><polygon id=\"Path\" points=\"12 0.587 15.668 8.155 24 9.306 17.936 15.134 19.416 23.413 12 19.446 4.583 23.413 6.064 15.134 0 9.306 8.332 8.155\"></polygon></svg>');
    --bde-woo-ratings__empty-star-svg: url('data:image/svg+xml;utf8,<svg width=\"24px\" height=\"24px\" fill=\"%23FBBF24\" viewBox=\"0 0 24 24\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path d=\"M12,5.173 L14.335,9.99 L19.64,10.722 L15.779,14.432 L16.721,19.702 L12,17.178 L7.279,19.703 L8.221,14.433 L4.36,10.723 L9.665,9.99 L12,5.173 L12,5.173 Z M12,0.587 L8.332,8.155 L0,9.306 L6.064,15.134 L4.584,23.413 L12,19.446 L19.416,23.412 L17.936,15.133 L24,9.306 L15.668,8.156 L12,0.587 Z\" id=\"Shape\"></path></svg>');
    --bde-woo-ratings__star_size: 18px;

    ";
            // line 240
            echo "    --bde-woo-product-images__border-radius: 4px;
    --bde-woo-product-images__border-width: 0px;
    --bde-woo-product-images__border-color: var(--grey-300);

    ";
            // line 245
            echo "    --bde-woo-wrappers__background-color: var(--white);
    --bde-woo-wrappers__border-radius: 4px;
    --bde-woo-wrappers__border-color: var(--grey-300);
    --bde-woo-wrappers__border-width: 1px;
    --bde-woo-wrappers__shadow: rgba(0, 0, 0, 0.05) 0 1px 3px, rgba(0, 0, 0, 0.05) 0 1px 2px;

    ";
            // line 252
            echo "    --bde-woo-tables__header-color: var(--grey-100);
    --bde-woo-tables__background-color: var(--white);
    --bde-woo-tables__border-radius: 4px;
    --bde-woo-tables__border-width: 1px;

    ";
            // line 258
            echo "    --bde-woo-widgets__chip-background-color: transparent;
    --bde-woo-widgets__chip-background-color-hover: var(--indigo-50);
    --bde-woo-widgets__chip-text-color: inherit;

    --bde-woo-widgets__handle-border-color: var(--grey-300);
    --bde-woo-widgets__handle-background-color: var(--white);
    --bde-woo-widgets__handle-background-color-hover: var(--white);
    --bde-woo-widgets__handle-shadow: rgba(0, 0, 0, 0.05) 0 1px 3px, rgba(0, 0, 0, 0.05) 0 1px 2px;
    --bde-woo-widgets__handle-shadow-hover: var(--grey-300) 0 0 4px;

    ";
            // line 269
            echo "    --bde-woo-widgets__remove-item-from-cart-color: var(--grey-450);
    --bde-woo-select2__active-item-background-color: var(--indigo-50);
    --bde-woo-gallery__zoom-icon-shadow: rgba(0, 0, 0, 0.05) 0 1px 3px, rgba(0, 0, 0, 0.05) 0 1px 2px;

    ";
            // line 274
            echo "    --bde-woo-payment-box-background-color: var(--grey-100);
    --bde-woo-payment-box-border-color: var(--grey-200);
    --bde-woo-payment-box-border-width: 1px;

    ";
            // line 279
            echo "    --bde-woo-quicklook-button-icon: url(icons/eye.svg);
    --bde-woo-quicklook-button-background-color: none;
    --bde-woo-quicklook-button-icon-size: 20px;
    --bde-woo-quicklook-button-backdrop-color: rgba(0, 0, 0, 0.15);
    --bde-woo-quicklook-button-backdrop-opacity: 0.7;
    --bde-woo-quicklook-modal-background-color: var(--white);
    --bde-woo-quicklook-overlay-color: rgba(0, 0, 0, 0.7);
    --bde-woo-quicklook-close-button-size: 2em;
    --bde-woo-quicklook-arrow-size: 1em;
    --bde-woo-quicklook-arrow-color: var(--white);

    ";
            // line 291
            echo "    --bde-woo-responsive__stack: row;
}

:root,
.bde-global-css-vars {
    ";
            // line 297
            echo "    --bde-links-color: ";
            echo _twig_default_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 297), "links", [], "any", true, true, false, 297)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 297), "links", [], "any", false, false, false, 297), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 297), "advanced", [], "any", false, false, false, 297), "links", [], "any", false, false, false, 297), "color", [], "any", false, false, false, 297))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 297), "advanced", [], "any", false, false, false, 297), "links", [], "any", false, false, false, 297), "color", [], "any", false, false, false, 297))), "var(--bde-brand-primary-color)");
            echo ";
    --bde-links-color-hover: ";
            // line 298
            echo _twig_default_filter(_twig_default_filter(_twig_default_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 298), "links_hover", [], "any", true, true, false, 298)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 298), "links_hover", [], "any", false, false, false, 298), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, false, false, 298), "links", [], "any", false, false, false, 298))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, false, false, 298), "links", [], "any", false, false, false, 298))), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 298), "advanced", [], "any", false, false, false, 298), "links", [], "any", false, false, false, 298), "color", [], "any", false, false, false, 298)), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 298), "advanced", [], "any", false, false, false, 298), "links", [], "any", false, false, false, 298), "color_hover", [], "any", false, false, false, 298)), "var(--bde-brand-primary-color-hover)");
            echo ";

    ";
            // line 301
            echo "    ";
            // line 302
            echo "    ";
            // line 303
            echo "
    ";
            // line 305
            echo "    --bde-button-primary-background-color: var(--bde-brand-primary-color);
    --bde-button-primary-background-color-hover: var(--bde-brand-primary-color-hover);

    ";
            // line 309
            echo "    --bde-button-secondary-border-color: var(--bde-brand-primary-color);
    --bde-button-secondary-border-color-hover: var(--bde-brand-primary-color);
    --bde-button-secondary-text-color: var(--bde-brand-primary-color);
    --bde-button-secondary-background-color-hover: var(--bde-brand-primary-color);

    ";
            // line 315
            echo "    --bde-button-text-text-color: var(--bde-links-color);
    --bde-button-text-text-color-hover: var(--bde-links-color-hover);

    ";
            // line 319
            echo "    --bde-button-font-size: var(--bde-body-font-size);

    ";
            // line 322
            echo "    ";
            // line 323
            echo "    ";
            // line 324
            echo "
    --bde-form-font-size: var(--bde-body-font-size);
    --bde-form-input-border-top-left-radius: var(--bde-form-input-border-radius);
    --bde-form-input-border-top-right-radius: var(--bde-form-input-border-radius);
    --bde-form-input-border-bottom-left-radius: var(--bde-form-input-border-radius);
    --bde-form-input-border-bottom-right-radius: var(--bde-form-input-border-radius);
    --bde-form-input-border-top: var(--bde-form-input-border-width) solid var(--bde-form-input-border-color);
    --bde-form-input-border-right: var(--bde-form-input-border-width) solid var(--bde-form-input-border-color);
    --bde-form-input-border-bottom: var(--bde-form-input-border-width) solid var(--bde-form-input-border-color);
    --bde-form-input-border-left: var(--bde-form-input-border-width) solid var(--bde-form-input-border-color);
    --bde-form-label-color: var(--bde-headings-color);
    --bde-form-input-focused-border-color: var(--bde-brand-primary-color);
    --bde-form-input-focused-shadow: var(--bde-brand-primary-color) 0 0 2px;
    --bde-form-checkbox-selected-color: var(--bde-brand-primary-color);

    ";
            // line 340
            echo "    ";
            // line 341
            echo "    ";
            // line 342
            echo "
    --bde-woo-base-transition: all ease var(--bde-transition-duration);

    --bde-woo-base-text-color: var(--bde-body-text-color);
    --bde-woo-base-headings-color: var(--bde-headings-color);

    --bde-woo-base-primary-color: var(--bde-brand-primary-color);
    --bde-woo-base-primary-color-hover: var(--bde-brand-primary-color-hover);

    ";
            // line 352
            echo "
    --bde-woo-base-extra-small-gaps: calc(var(--bde-woo-base-small-gaps) / var(--bde-woo-base-ratio));
    --bde-woo-base-small-gaps: calc(var(--bde-woo-base-space) / var(--bde-woo-base-ratio));
    --bde-woo-base-standard-gaps: var(--bde-woo-base-space); ";
            // line 356
            echo "    --bde-woo-base-medium-gaps: calc(var(--bde-woo-base-space) * var(--bde-woo-base-ratio));
    --bde-woo-base-big-gaps: calc(var(--bde-woo-base-medium-gaps) *  var(--bde-woo-base-ratio));
    --bde-woo-base-large-gaps: calc(var(--bde-woo-base-big-gaps) *  var(--bde-woo-base-ratio));
    --bde-woo-base-extra-large-gaps: calc(var(--bde-woo-base-large-gaps) * var(--bde-woo-base-ratio));

    ";
            // line 362
            echo "    --bde-woo-typography-ratio: var(--bde-font-size-ratio);

    ";
            // line 365
            echo "    --bde-woo-typography__size-small: calc(var(--bde-woo-typography__size-standard) / var(--bde-woo-typography-ratio));
    --bde-woo-typography__size-small-font-family: var(--bde-body-font-family);

    --bde-woo-typography__size-standard: var(--bde-body-font-size);
    --bde-woo-typography__size-standard-font-family: var(--bde-body-font-family);

    --bde-woo-typography__size-medium: calc(var(--bde-woo-typography__size-standard) * var(--bde-woo-typography-ratio));
    --bde-woo-typography__size-medium-font-family: var(--bde-heading-font-family);

    --bde-woo-typography__size-large: calc(var(--bde-woo-typography__size-medium) * var(--bde-woo-typography-ratio));
    --bde-woo-typography__size-large-font-family: var(--bde-heading-font-family);

    --bde-woo-typography__size-extra-large: calc(var(--bde-woo-typography__size-large) * var(--bde-woo-typography-ratio));
    --bde-woo-typography__size-extra-large-font-family: var(--bde-heading-font-family);

    ";
            // line 381
            echo "    --bde-woo-buttons-and-links__text-link-color: ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 381), "links", [], "any", true, true, false, 381)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 381), "links", [], "any", false, false, false, 381), "var(--bde-woo-base-primary-color)")) : ("var(--bde-woo-base-primary-color)"));
            echo ";
    --bde-woo-buttons-and-links__text-link-color-hover: ";
            // line 382
            echo _twig_default_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 382), "links_hover", [], "any", true, true, false, 382)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 382), "links_hover", [], "any", false, false, false, 382), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, false, false, 382), "links", [], "any", false, false, false, 382))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, false, false, 382), "links", [], "any", false, false, false, 382))), "var(--bde-woo-base-primary-color-hover)");
            echo ";

    ";
            // line 385
            echo "    --bde-woo-buttons-and-links__nav-link-color: var(--bde-woo-base-text-color);
    --bde-woo-buttons-and-links__nav-link-color-hover: var(--bde-woo-base-text-on-primary-color);
    --bde-woo-buttons-and-links__nav-link-color-active: var(--bde-woo-base-primary-color);

    ";
            // line 390
            echo "    --bde-woo-forms__spacing-after-label: var(--bde-form-after-label);
    --bde-woo-forms__spacing-between-fields: var(--bde-form-gap);
    --bde-woo-forms__spacing-between-columns: var(--bde-woo-base-extra-large-gaps);

    --bde-woo-forms__labels-color: var(--bde-form-label-color);

    --bde-woo-forms__inputs-background-color: var(--bde-form-input-background-color);
    --bde-woo-forms__inputs-text-color: var(--bde-form-text-color);
    --bde-woo-forms__inputs-placeholder-color: var(--bde-form-input-placeholder-color);
    --bde-woo-forms__inputs-border-color: var(--bde-form-input-border-color);
    --bde-woo-forms__inputs-border-width: var(--bde-form-input-border-width);
    --bde-woo-forms__inputs-border-radius: var(--bde-form-input-border-top-left-radius) var(--bde-form-input-border-top-right-radius) var(--bde-form-input-border-bottom-right-radius) var(--bde-form-input-border-bottom-left-radius);
    --bde-woo-forms__inputs-background-color-focused: var(--bde-form-input-focused-background-color);
    --bde-woo-forms__inputs-border-color-focused: var(--bde-form-input-focused-border-color);
    --bde-woo-forms__inputs-shadow-focused: var(--bde-form-input-focused-shadow);
    --bde-woo-forms__inputs-shadow: var(--bde-form-input-input-shadow);

    --bde-woo-forms__inputs-select2-hover-item: var(--bde-woo-base-primary-color);

    ";
            // line 410
            echo "    --bde-woo-forms__labels-required-color: var(--bde-form-label-required-color);
    --bde-woo-forms__labels-required-size:  var(--bde-form-label-required-size);

    --bde-woo-forms__labels-required-nudge-x: var(--bde-form-label-required-nudge-x);
    --bde-woo-forms__labels-required-nudge-y: var(--bde-form-label-required-nudge-y);

    ";
            // line 417
            echo "    --bde-woo-tables__border-color: var(--bde-woo-base-border-color);

    ";
            // line 420
            echo "    --bde-woo-sale-badge__background-color: var(--bde-woo-base-primary-color);
    --bde-woo-sale-badge__text-color: var(--bde-woo-base-text-on-primary-color);
    --bde-woo-sale-badge__font-weight: var(--bde-woo-typography-font-weight-heavy);
    --bde-woo-sale-badge__font-size: var(--bde-woo-typography__size-standard);

    ";
            // line 426
            echo "    --bde-woo-widgets__chip-text-color-hover: var(--bde-woo-buttons-and-links__text-link-color);
    --bde-woo-widgets__handle-border-color-hover: var(--bde-woo-base-primary-color);

    ";
            // line 430
            echo "    --bde-woo-notices__padding-left: calc(var(--bde-woo-notices__padding) + var(--bde-woo-notices__icon-size) + (var(--bde-woo-notices__icon-size) / 2));

    ";
            // line 433
            echo "    --bde-woo-quicklook-button-text-color: var(--bde-button-primary-text-color);
    --bde-woo-quicklook-button-background-color-hover: var(--bde-woo-quicklook-button-background-color);
    --bde-woo-quicklook-button-icon-spacing: var(--bde-woo-base-standard-gaps);

    --bde-woo-quicklook-close-button-color: var(--bde-woo-base-headings-color);
    --bde-woo-quicklook-arrow-color-hover: var(--bde-woo-quicklook-arrow-color);
    --bde-woo-quicklook-arrow-background-color: var(--bde-brand-primary-color);
    --bde-woo-quicklook-arrow-background-color-hover: var(--bde-woo-quicklook-arrow-background-color);
}

";
        }
        // line 444
        echo "
";
        // line 448
        echo "
:root {
    ";
        // line 450
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 450), "ratio", [], "any", false, false, false, 450)) {
            // line 451
            echo "        --bde-font-size-ratio: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 451), "ratio", [], "any", false, false, false, 451);
            echo ";
    ";
        }
        // line 453
        echo "
    ";
        // line 454
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 454), "base_size", [], "any", false, false, false, 454), "style", [], "any", false, false, false, 454)) {
            // line 455
            echo "        --bde-base-font-size: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 455), "base_size", [], "any", false, false, false, 455), "style", [], "any", false, false, false, 455);
            echo ";
    ";
        }
        // line 457
        echo "}

";
        // line 459
        if (($context["isBaseBreakpoint"] ?? null)) {
            // line 460
            echo "
";
            // line 462
            echo ".breakdance .button-atom {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  vertical-align: middle;
  user-select: none;
  appearance: none;
  box-sizing: border-box;
  margin: 0;
  border: 0;
  padding: 0;
  background-color: transparent;
  font-size: var(--bde-button-font-size);
  line-height: var(--bde-button-line-height);
  transform: translate(0, 0);
  max-width: 100%;
}
";
            // line 480
            echo ".breakdance .button-atom--primary,
.breakdance .button-atom--secondary,
.breakdance .button-atom--custom {
  text-align: center;
  font-weight: var(--bde-button-font-weight);
  text-decoration: none;
  padding: var(--bde-button-padding-base);
  border-radius: var(--bde-button-border-radius);
  cursor: pointer;
  border-width: var(--bde-button-border-width);
  border-style: solid;
  border-color: transparent;
  transition-timing-function: ease-in-out;
  transition-property: all;
  transition-duration: var(--bde-transition-duration);
  overflow: hidden;
}

.breakdance .button-atom--text {
  color: var(--bde-button-text-text-color);
}

.breakdance .button-atom--text:hover {
  color: var(--bde-button-text-text-color-hover);
}

";
            // line 507
            echo twig_call_macro($macros["macros"], "macro_atomV1ButtonVariant", ["primary"], 507, $context, $this->getSourceContext());
            echo "
";
            // line 508
            echo twig_call_macro($macros["macros"], "macro_atomV1ButtonVariant", ["secondary"], 508, $context, $this->getSourceContext());
            echo "
";
            // line 509
            echo twig_call_macro($macros["macros"], "macro_atomV1ButtonVariant", ["custom"], 509, $context, $this->getSourceContext());
            echo "

";
            // line 512
            echo ".button-atom__icon-wrapper > svg:not(.breakdance-icon-atom-svg-gradient) {
  font-size: inherit;
  width: 1em;
  height: 1em;
  stroke-width: 0;
  stroke: var(--bde-brand-primary-color);
  fill: var(--bde-brand-primary-color);
}

";
            // line 522
            echo ".breakdance-icon-atom {
    display: flex;
    font-size: 40px;
}

.breakdance-icon-atom > svg:not(.breakdance-icon-atom-svg-gradient) {
    font-size: inherit;
    width: 1em;
    height: 1em;
    stroke-width: 0;
    stroke: var(--bde-brand-primary-color);
    fill: var(--bde-brand-primary-color);
    transform: var(--eeiTransform);
}

";
        }
        // line 538
        echo "
";
        // line 539
        if (($context["isBaseBreakpoint"] ?? null)) {
            // line 540
            echo "
.breakdance *,
.breakdance *::before,
.breakdance *::after {
  box-sizing: border-box;
}

.breakdance img {
  max-width: 100%;
  height: auto;
}

.breakdance-full-width {
  width: 100%;
  max-width: 100%;
}

.breakdance-rich-text-styles > *:first-child {
  margin-top: 0;
}

.breakdance-rich-text-styles > *:last-child {
  margin-bottom: 0;
}


";
            // line 567
            echo "
/*
 * 1. Safari support
 * 2. Support position: sticky on compatible browsers
 */
.breakdance-animation-enabled,
.breakdance-animation-enabled body { /* 1 */
  overflow-x: hidden;
}

@supports (overflow-x: clip) { /* 2 */
  .breakdance-animation-enabled,
  .breakdance-animation-enabled body { /* 1 */
    overflow-x: clip;
  }
}

";
            // line 585
            echo "
.admin-bar .lg-toolbar {
  top: var(--wp-admin--admin-bar--height);
}

";
            // line 591
            echo ".screen-reader-text {
border: 0;
clip: rect(1px,1px,1px,1px);
-webkit-clip-path: inset(50%);
clip-path: inset(50%);
height: 1px;
margin: -1px;
overflow: hidden;
overflow-wrap: normal!important;
word-wrap: normal!important;
padding: 0;
position: absolute!important;
width: 1px;
}

";
        }
        // line 607
        echo "
";
        // line 608
        if (($context["isBaseBreakpoint"] ?? null)) {
            // line 609
            echo "
";
            // line 611
            echo ".breakdance {
    background-color: var(--bde-background-color);
    color: var(--bde-body-text-color);
}

.breakdance h1,
.breakdance h2,
.breakdance h3,
.breakdance h4,
.breakdance h5,
.breakdance h6 {
    color: var(--bde-headings-color);
}

.breakdance a,
.button-atom--text {
    color: var(--bde-links-color);
}

.breakdance a:hover,
.button-atom--text:hover {
    color: var(--bde-links-color-hover);
}

";
        }
        // line 636
        echo "


";
        // line 644
        echo "
";
        // line 646
        $context["primaryButtons"] = [0 => ".breakdance .button-atom--primary", 1 => ".bde-mini-cart-offcanvas .button", 2 => ".bde-woo-product-quicklook-button", 3 => ".woocommerce-page.woocommerce-lost-password .breakdance-woocommerce button[type=\"submit\"]", 4 => ".breakdance-woocommerce .woocommerce-form-track-order button[type=\"submit\"]", 5 => ".breakdance-woocommerce #place_order", 6 => ".breakdance-woocommerce .woocommerce-button.pay", 7 => ".breakdance-woocommerce button.single_add_to_cart_button", 8 => ".breakdance-woocommerce a.single_add_to_cart_button", 9 => ".breakdance-woocommerce a.button.wc-backward", 10 => ".breakdance-woocommerce a.checkout-button", 11 => ".breakdance-woocommerce p.order-again a.button", 12 => ".breakdance-woocommerce button[name=\"add-to-cart\"]", 13 => ".breakdance-woocommerce button[name=\"login\"]", 14 => ".breakdance-woocommerce button[name=\"save_address\"]", 15 => ".breakdance-woocommerce button[name=\"save_account_details\"]", 16 => ".breakdance-woocommerce button[name=\"woocommerce_checkout_place_order\"]", 17 => ".breakdance-woocommerce .woocommerce-MyAccount-content a.button[href*=\"add-payment-method\"]"];
        // line 667
        echo "

";
        // line 670
        $context["secondaryButtons"] = [0 => ".breakdance .button-atom--secondary", 1 => ".breakdance-woocommerce .woocommerce-MyAccount-downloads-file", 2 => ".breakdance-woocommerce .woocommerce-Address a.edit", 3 => ".breakdance-woocommerce .woocommerce-button.view", 4 => ".breakdance-woocommerce .woocommerce-Button--previous", 5 => ".breakdance-woocommerce .woocommerce-Button--next", 6 => ".breakdance-woocommerce .widget_price_filter .button", 7 => ".breakdance-woocommerce a.button.add_to_cart_button", 8 => ".breakdance-woocommerce a.button.product_type_grouped", 9 => ".breakdance-woocommerce .added_to_cart", 10 => ".breakdance-woocommerce .woocommerce-widget-layered-nav-dropdown__submit", 11 => ".breakdance-woocommerce .woocommerce-product-search button[type=\"submit\"]", 12 => ".breakdance-woocommerce a.product_type_simple", 13 => ".breakdance-woocommerce .form-submit input[type=\"submit\"]", 14 => ".breakdance-woocommerce button[name=\"update_cart\"]", 15 => ".breakdance-woocommerce button[name=\"calc_shipping\"]", 16 => ".breakdance-woocommerce button[name=\"apply_coupon\"]", 17 => ".breakdance-woocommerce a.product_type_external"];
        // line 691
        echo "

";
        // line 693
        echo twig_call_macro($macros["macros"], "macro_atomV1ButtonButton", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "buttons", [], "any", false, false, false, 693), "primary", [], "any", false, false, false, 693), ($context["primaryButtons"] ?? null), "primary", ($context["breakpoint"] ?? null), ($context["settings"] ?? null)], 693, $context, $this->getSourceContext());
        echo "
";
        // line 694
        echo twig_call_macro($macros["macros"], "macro_atomV1ButtonButton", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "buttons", [], "any", false, false, false, 694), "secondary", [], "any", false, false, false, 694), ($context["secondaryButtons"] ?? null), "secondary", ($context["breakpoint"] ?? null), ($context["settings"] ?? null)], 694, $context, $this->getSourceContext());
        echo "



";
        // line 699
        echo ".breakdance {
   font-family: var(--bde-body-font-family);
   font-size: var(--bde-body-font-size);
   ";
        // line 702
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 702), "advanced", [], "any", false, false, false, 702), "body", [], "any", false, false, false, 702), ($context["settings"] ?? null)], 702, $context, $this->getSourceContext());
        echo "
}

";
        // line 706
        if (($context["isBaseBreakpoint"] ?? null)) {
            // line 707
            echo "    .breakdance h1,
    .breakdance h2,
    .breakdance h3,
    .breakdance h4,
    .breakdance h5,
    .breakdance h6 {
        font-family: var(--bde-heading-font-family);
    }

    .breakdance h1 {
        font-size: var(--bde-h1-font-size);
    }

    .breakdance h2  {
        font-size: var(--bde-h2-font-size);
    }

    .breakdance h3  {
        font-size: var(--bde-h3-font-size);
    }

    .breakdance h4  {
        font-size: var(--bde-h4-font-size);
    }

    .breakdance h5 {
        font-size: var(--bde-h5-font-size);
    }

    .breakdance h6 {
        font-size: var(--bde-h6-font-size);
    }
";
        }
        // line 740
        echo "
";
        // line 742
        echo ".breakdance h1,
.breakdance h2,
.breakdance h3,
.breakdance h4,
.breakdance h5,
.breakdance h6 {
    ";
        // line 748
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 748), "advanced", [], "any", false, false, false, 748), "headings", [], "any", false, false, false, 748), "all_headings", [], "any", false, false, false, 748), ($context["settings"] ?? null)], 748, $context, $this->getSourceContext());
        echo "
}

.breakdance h1 {
    ";
        // line 752
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 752), "advanced", [], "any", false, false, false, 752), "headings", [], "any", false, false, false, 752), "h1", [], "any", false, false, false, 752), ($context["settings"] ?? null)], 752, $context, $this->getSourceContext());
        echo "
}

.breakdance h2  {
    ";
        // line 756
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 756), "advanced", [], "any", false, false, false, 756), "headings", [], "any", false, false, false, 756), "h2", [], "any", false, false, false, 756), ($context["settings"] ?? null)], 756, $context, $this->getSourceContext());
        echo "
}

.breakdance h3  {
    ";
        // line 760
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 760), "advanced", [], "any", false, false, false, 760), "headings", [], "any", false, false, false, 760), "h3", [], "any", false, false, false, 760), ($context["settings"] ?? null)], 760, $context, $this->getSourceContext());
        echo "
}

.breakdance h4  {
    ";
        // line 764
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 764), "advanced", [], "any", false, false, false, 764), "headings", [], "any", false, false, false, 764), "h4", [], "any", false, false, false, 764), ($context["settings"] ?? null)], 764, $context, $this->getSourceContext());
        echo "
}

.breakdance h5 {
    ";
        // line 768
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 768), "advanced", [], "any", false, false, false, 768), "headings", [], "any", false, false, false, 768), "h5", [], "any", false, false, false, 768), ($context["settings"] ?? null)], 768, $context, $this->getSourceContext());
        echo "
}

.breakdance h6 {
    ";
        // line 772
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 772), "advanced", [], "any", false, false, false, 772), "headings", [], "any", false, false, false, 772), "h6", [], "any", false, false, false, 772), ($context["settings"] ?? null)], 772, $context, $this->getSourceContext());
        echo "
}

.breakdance a,
.breakdance .button-atom--text {
    color: ";
        // line 777
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 777), "advanced", [], "any", false, false, false, 777), "links", [], "any", false, false, false, 777), "color", [], "any", false, false, false, 777);
        echo ";
    font-weight: ";
        // line 778
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 778), "advanced", [], "any", false, false, false, 778), "links", [], "any", false, false, false, 778), "font_weight", [], "any", false, false, false, 778);
        echo ";
    ";
        // line 779
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 779), "advanced", [], "any", false, false, false, 779), "links", [], "any", false, false, false, 779), "decoration", [], "any", false, false, false, 779), "style", [], "any", false, false, false, 779) == "none")) {
            // line 780
            echo "        text-decoration: none;
    ";
        }
        // line 782
        echo "    text-decoration-thickness: ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 782), "advanced", [], "any", false, false, false, 782), "links", [], "any", false, false, false, 782), "decoration", [], "any", false, false, false, 782), "thickness", [], "any", false, false, false, 782), "style", [], "any", false, false, false, 782);
        echo ";
    text-decoration-line: ";
        // line 783
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 783), "advanced", [], "any", false, false, false, 783), "links", [], "any", false, false, false, 783), "decoration", [], "any", false, false, false, 783), "line", [], "any", false, false, false, 783);
        echo ";
    text-decoration-style: ";
        // line 784
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 784), "advanced", [], "any", false, false, false, 784), "links", [], "any", false, false, false, 784), "decoration", [], "any", false, false, false, 784), "style", [], "any", false, false, false, 784);
        echo ";
    text-decoration-color: ";
        // line 785
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 785), "advanced", [], "any", false, false, false, 785), "links", [], "any", false, false, false, 785), "decoration", [], "any", false, false, false, 785), "color", [], "any", false, false, false, 785);
        echo ";
}

.breakdance a:hover,
.breakdance .button-atom--text:hover {
    color: ";
        // line 790
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 790), "advanced", [], "any", false, false, false, 790), "links", [], "any", false, false, false, 790), "color_hover", [], "any", false, false, false, 790);
        echo ";
    ";
        // line 791
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 791), "advanced", [], "any", false, false, false, 791), "links", [], "any", false, false, false, 791), "decoration", [], "any", false, false, false, 791), "style_hover", [], "any", false, false, false, 791) == "none")) {
            // line 792
            echo "        text-decoration: none;
    ";
        }
        // line 794
        echo "    text-decoration-thickness: ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 794), "advanced", [], "any", false, false, false, 794), "links", [], "any", false, false, false, 794), "decoration", [], "any", false, false, false, 794), "thickness_hover", [], "any", false, false, false, 794), "style", [], "any", false, false, false, 794);
        echo ";
    text-decoration-line: ";
        // line 795
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 795), "advanced", [], "any", false, false, false, 795), "links", [], "any", false, false, false, 795), "decoration", [], "any", false, false, false, 795), "line_hover", [], "any", false, false, false, 795);
        echo ";
    text-decoration-style: ";
        // line 796
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 796), "advanced", [], "any", false, false, false, 796), "links", [], "any", false, false, false, 796), "decoration", [], "any", false, false, false, 796), "style_hover", [], "any", false, false, false, 796);
        echo ";
    text-decoration-color: ";
        // line 797
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 797), "advanced", [], "any", false, false, false, 797), "links", [], "any", false, false, false, 797), "decoration", [], "any", false, false, false, 797), "color_hover", [], "any", false, false, false, 797);
        echo ";
}







:root {
    ";
        // line 807
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 807), "global_typography", [], "any", false, false, false, 807), "typography_presets", [], "any", false, false, false, 807));
        foreach ($context['_seq'] as $context["_key"] => $context["preset_style"]) {
            // line 808
            echo "        ";
            echo twig_call_macro($macros["macros"], "macro_customTypographyValuesAsCssVariables", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["preset_style"], "preset", [], "any", false, false, false, 808), "id", [], "any", false, false, false, 808), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["preset_style"], "custom", [], "any", false, false, false, 808), "customTypography", [], "any", false, false, false, 808)], 808, $context, $this->getSourceContext());
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['preset_style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 810
        echo "}

";
        // line 812
        echo twig_call_macro($macros["macros"], "macro_atomV1ButtonButton", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "forms", [], "any", false, false, false, 812), "fields", [], "any", false, false, false, 812), "advanced", [], "any", false, false, false, 812), "file_input", [], "any", false, false, false, 812), "button", [], "any", false, false, false, 812), ".breakdance .breakdance-form-file-upload__button", "custom", ($context["breakpoint"] ?? null), ($context["settings"] ?? null)], 812, $context, $this->getSourceContext());
        echo "
";
        // line 813
        echo twig_call_macro($macros["macros"], "macro_atomV1ButtonButton", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "forms", [], "any", false, false, false, 813), "submit_button", [], "any", false, false, false, 813), "styles", [], "any", false, false, false, 813), [0 => ".breakdance .breakdance-form-button", 1 => ".breakdance .comment-form__submit"], "primary", ($context["breakpoint"] ?? null), ($context["settings"] ?? null)], 813, $context, $this->getSourceContext());
        echo "
";
        // line 814
        echo twig_call_macro($macros["macros"], "macro_atomV1FormCss", [twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "forms", [], "any", false, false, false, 814), null, ($context["breakpoint"] ?? null), ($context["settings"] ?? null)], 814, $context, $this->getSourceContext());
        echo "



:root {
\t";
        // line 819
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "containers", [], "any", false, false, false, 819), "sections", [], "any", false, false, false, 819), "container_width", [], "any", false, false, false, 819), "style", [], "any", false, false, false, 819)) {
            // line 820
            echo "\t--bde-section-width: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "containers", [], "any", false, false, false, 820), "sections", [], "any", false, false, false, 820), "container_width", [], "any", false, false, false, 820), "style", [], "any", false, false, false, 820);
            echo ";
\t";
        }
        // line 822
        echo "
\t";
        // line 823
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "containers", [], "any", false, false, false, 823), "sections", [], "any", false, false, false, 823), "vertical_padding", [], "any", false, false, false, 823), "style", [], "any", false, false, false, 823)) {
            // line 824
            echo "\t--bde-section-vertical-padding: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "containers", [], "any", false, false, false, 824), "sections", [], "any", false, false, false, 824), "vertical_padding", [], "any", false, false, false, 824), "style", [], "any", false, false, false, 824);
            echo ";
\t";
        }
        // line 826
        echo "
\t";
        // line 827
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "containers", [], "any", false, false, false, 827), "sections", [], "any", false, false, false, 827), "horizontal_padding", [], "any", false, false, false, 827), "style", [], "any", false, false, false, 827)) {
            // line 828
            echo "\t--bde-section-horizontal-padding: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "containers", [], "any", false, false, false, 828), "sections", [], "any", false, false, false, 828), "horizontal_padding", [], "any", false, false, false, 828), "style", [], "any", false, false, false, 828);
            echo ";
\t";
        }
        // line 830
        echo "
    ";
        // line 831
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "containers", [], "any", false, false, false, 831), "column_gap", [], "any", false, false, false, 831), "style", [], "any", false, false, false, 831)) {
            // line 832
            echo "\t--bde-column-gap: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "containers", [], "any", false, false, false, 832), "column_gap", [], "any", false, false, false, 832), "style", [], "any", false, false, false, 832);
            echo ";
\t";
        }
        // line 834
        echo "}


";
        // line 837
        if (($context["isBaseBreakpoint"] ?? null)) {
            // line 838
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "code", [], "any", false, false, false, 838), "stylesheets", [], "any", false, false, false, 838));
            foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
                // line 839
                echo "        ";
                echo twig_get_attribute($this->env, $this->source, $context["stylesheet"], "code", [], "any", false, false, false, 839);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 842
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "cb11c3442870e7d65283e85f7eb4510d601d70b3";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1197 => 842,  1187 => 839,  1182 => 838,  1180 => 837,  1175 => 834,  1169 => 832,  1167 => 831,  1164 => 830,  1158 => 828,  1156 => 827,  1153 => 826,  1147 => 824,  1145 => 823,  1142 => 822,  1136 => 820,  1134 => 819,  1126 => 814,  1122 => 813,  1118 => 812,  1114 => 810,  1105 => 808,  1101 => 807,  1088 => 797,  1084 => 796,  1080 => 795,  1075 => 794,  1071 => 792,  1069 => 791,  1065 => 790,  1057 => 785,  1053 => 784,  1049 => 783,  1044 => 782,  1040 => 780,  1038 => 779,  1034 => 778,  1030 => 777,  1022 => 772,  1015 => 768,  1008 => 764,  1001 => 760,  994 => 756,  987 => 752,  980 => 748,  972 => 742,  969 => 740,  934 => 707,  932 => 706,  926 => 702,  921 => 699,  914 => 694,  910 => 693,  906 => 691,  904 => 670,  900 => 667,  898 => 646,  895 => 644,  890 => 636,  863 => 611,  860 => 609,  858 => 608,  855 => 607,  837 => 591,  830 => 585,  811 => 567,  783 => 540,  781 => 539,  778 => 538,  760 => 522,  749 => 512,  744 => 509,  740 => 508,  736 => 507,  708 => 480,  689 => 462,  686 => 460,  684 => 459,  680 => 457,  674 => 455,  672 => 454,  669 => 453,  663 => 451,  661 => 450,  657 => 448,  654 => 444,  641 => 433,  637 => 430,  632 => 426,  625 => 420,  621 => 417,  613 => 410,  592 => 390,  586 => 385,  581 => 382,  576 => 381,  559 => 365,  555 => 362,  548 => 356,  543 => 352,  532 => 342,  530 => 341,  528 => 340,  511 => 324,  509 => 323,  507 => 322,  503 => 319,  498 => 315,  491 => 309,  486 => 305,  483 => 303,  481 => 302,  479 => 301,  474 => 298,  469 => 297,  462 => 291,  449 => 279,  443 => 274,  437 => 269,  425 => 258,  418 => 252,  410 => 245,  404 => 240,  398 => 235,  393 => 231,  374 => 213,  363 => 203,  359 => 200,  351 => 193,  346 => 189,  342 => 186,  334 => 181,  329 => 177,  320 => 169,  318 => 168,  316 => 167,  291 => 143,  289 => 142,  287 => 141,  279 => 134,  273 => 129,  264 => 121,  259 => 117,  252 => 111,  249 => 109,  247 => 108,  245 => 107,  237 => 100,  235 => 99,  233 => 98,  227 => 95,  224 => 93,  218 => 92,  210 => 90,  207 => 89,  204 => 88,  199 => 87,  194 => 84,  189 => 82,  184 => 81,  179 => 78,  175 => 77,  171 => 76,  167 => 75,  163 => 74,  159 => 73,  156 => 72,  151 => 69,  148 => 68,  145 => 66,  139 => 64,  133 => 62,  131 => 61,  128 => 60,  122 => 58,  116 => 56,  114 => 55,  111 => 54,  108 => 53,  105 => 51,  103 => 50,  101 => 49,  96 => 46,  91 => 45,  56 => 11,  54 => 10,  52 => 9,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cb11c3442870e7d65283e85f7eb4510d601d70b3", "");
    }
}
