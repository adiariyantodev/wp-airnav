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

/* bd7c814ae99fa00fe0349db23714c6c2d31e7c0e */
class __TwigTemplate_ab4cd1a43ffae1de4f1f04e78143c8aa extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "bd7c814ae99fa00fe0349db23714c6c2d31e7c0e", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 4), "social_networks", [], "any", false, false, false, 4))) {
            // line 5
            echo "  <a href=\"#\" class=\"bde-social-icons__icon-wrapper bde-social-icons__icon-facebook\">
     <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" viewBox=\"0 0 24 24\">
          <path d=\"M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z\"/>
     </svg>
  </a>
  <a href=\"#\" class=\"bde-social-icons__icon-wrapper bde-social-icons__icon-instagram\">
     <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" viewBox=\"0 0 24 24\">
          <path d=\"M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z\"/>
     </svg>
  </a>
  <a href=\"#\" class=\"bde-social-icons__icon-wrapper bde-social-icons__icon-twitter\">
     <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" viewBox=\"0 0 24 24\">
          <path d=\"M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z\"/>
     </svg>
  </a>
  <a href=\"#\" class=\"bde-social-icons__icon-wrapper bde-social-icons__icon-youtube\">
     <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" viewBox=\"0 0 24 24\">
          <path d=\"M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z\"/>
     </svg>
  </a>
  <a href=\"#\" class=\"bde-social-icons__icon-wrapper bde-social-icons__icon-dribbble\">
     <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" viewBox=\"0 0 24 24\">
          <path d=\"M12 0c-6.628 0-12 5.373-12 12s5.372 12 12 12 12-5.373 12-12-5.372-12-12-12zm9.885 11.441c-2.575-.422-4.943-.445-7.103-.073-.244-.563-.497-1.125-.767-1.68 2.31-1 4.165-2.358 5.548-4.082 1.35 1.594 2.197 3.619 2.322 5.835zm-3.842-7.282c-1.205 1.554-2.868 2.783-4.986 3.68-1.016-1.861-2.178-3.676-3.488-5.438.779-.197 1.591-.314 2.431-.314 2.275 0 4.368.779 6.043 2.072zm-10.516-.993c1.331 1.742 2.511 3.538 3.537 5.381-2.43.715-5.331 1.082-8.684 1.105.692-2.835 2.601-5.193 5.147-6.486zm-5.44 8.834l.013-.256c3.849-.005 7.169-.448 9.95-1.322.233.475.456.952.67 1.432-3.38 1.057-6.165 3.222-8.337 6.48-1.432-1.719-2.296-3.927-2.296-6.334zm3.829 7.81c1.969-3.088 4.482-5.098 7.598-6.027.928 2.42 1.609 4.91 2.043 7.46-3.349 1.291-6.953.666-9.641-1.433zm11.586.43c-.438-2.353-1.08-4.653-1.92-6.897 1.876-.265 3.94-.196 6.199.196-.437 2.786-2.028 5.192-4.279 6.701z\"/>
     </svg>
  </a>
  <a href=\"#\" class=\"bde-social-icons__icon-wrapper bde-social-icons__icon-behance\">
     <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" viewBox=\"0 0 24 24\">
          <path d=\"M22 7h-7v-2h7v2zm1.726 10c-.442 1.297-2.029 3-5.101 3-3.074 0-5.564-1.729-5.564-5.675 0-3.91 2.325-5.92 5.466-5.92 3.082 0 4.964 1.782 5.375 4.426.078.506.109 1.188.095 2.14h-8.027c.13 3.211 3.483 3.312 4.588 2.029h3.168zm-7.686-4h4.965c-.105-1.547-1.136-2.219-2.477-2.219-1.466 0-2.277.768-2.488 2.219zm-9.574 6.988h-6.466v-14.967h6.953c5.476.081 5.58 5.444 2.72 6.906 3.461 1.26 3.577 8.061-3.207 8.061zm-3.466-8.988h3.584c2.508 0 2.906-3-.312-3h-3.272v3zm3.391 3h-3.391v3.016h3.341c3.055 0 2.868-3.016.05-3.016z\"/>
     </svg>
  </a>
  <a href=\"#\" class=\"bde-social-icons__icon-wrapper bde-social-icons__icon-github\">
     <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" viewBox=\"0 0 24 24\">
          <path d=\"M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z\"/>
     </svg>
  </a>
  <a href=\"#\" class=\"bde-social-icons__icon-wrapper bde-social-icons__icon-linkedin\">
     <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" viewBox=\"-4 -2 32 32\">
          <path d=\"M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z\"/>
     </svg>
  </a>
  <a href=\"#\" class=\"bde-social-icons__icon-wrapper bde-social-icons__icon-vimeo\">
     <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" viewBox=\"-2 -2 28 28\">
          <path d=\"M22.875 10.063c-2.442 5.217-8.337 12.319-12.063 12.319-3.672 0-4.203-7.831-6.208-13.043-.987-2.565-1.624-1.976-3.474-.681l-1.128-1.455c2.698-2.372 5.398-5.127 7.057-5.28 1.868-.179 3.018 1.098 3.448 3.832.568 3.593 1.362 9.17 2.748 9.17 1.08 0 3.741-4.424 3.878-6.006.243-2.316-1.703-2.386-3.392-1.663 2.673-8.754 13.793-7.142 9.134 2.807z\"/>
     </svg>
  </a>
  ";
        } else {
            // line 51
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 51), "social_networks", [], "any", false, false, false, 51));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 52
                echo "
    ";
                // line 53
                echo twig_call_macro($macros["macros"], "macro_linkStart", [twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 53), ("bde-social-icons__icon-wrapper " . twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 53))], 53, $context, $this->getSourceContext());
                echo "
    <!--a href=\"";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 54);
                echo "\" class=\"bde-social-icons__icon-wrapper ";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 54);
                echo "\" -->
      ";
                // line 55
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 55), "svgCode", [], "any", false, false, false, 55) &&  !twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 55))) {
                    // line 56
                    echo "        ";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 56), "svgCode", [], "any", false, false, false, 56);
                    echo "
      ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 57
$context["item"], "type", [], "any", false, false, false, 57) == "bde-social-icons__icon-facebook")) {
                    // line 58
                    echo "       <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" viewBox=\"0 0 24 24\">
            <path d=\"M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z\"/>
       </svg>
      ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 61
$context["item"], "type", [], "any", false, false, false, 61) == "bde-social-icons__icon-twitter")) {
                    // line 62
                    echo "       <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" viewBox=\"0 0 24 24\">
            <path d=\"M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z\"/>
       </svg>
      ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 65
$context["item"], "type", [], "any", false, false, false, 65) == "bde-social-icons__icon-instagram")) {
                    // line 66
                    echo "       <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" viewBox=\"0 0 24 24\">
            <path d=\"M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z\"/>
       </svg>
      ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 69
$context["item"], "type", [], "any", false, false, false, 69) == "bde-social-icons__icon-youtube")) {
                    // line 70
                    echo "       <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" viewBox=\"0 0 24 24\">
            <path d=\"M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z\"/>
       </svg>
      ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 73
$context["item"], "type", [], "any", false, false, false, 73) == "bde-social-icons__icon-dribbble")) {
                    // line 74
                    echo "       <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" viewBox=\"0 0 24 24\">
            <path d=\"M12 0c-6.628 0-12 5.373-12 12s5.372 12 12 12 12-5.373 12-12-5.372-12-12-12zm9.885 11.441c-2.575-.422-4.943-.445-7.103-.073-.244-.563-.497-1.125-.767-1.68 2.31-1 4.165-2.358 5.548-4.082 1.35 1.594 2.197 3.619 2.322 5.835zm-3.842-7.282c-1.205 1.554-2.868 2.783-4.986 3.68-1.016-1.861-2.178-3.676-3.488-5.438.779-.197 1.591-.314 2.431-.314 2.275 0 4.368.779 6.043 2.072zm-10.516-.993c1.331 1.742 2.511 3.538 3.537 5.381-2.43.715-5.331 1.082-8.684 1.105.692-2.835 2.601-5.193 5.147-6.486zm-5.44 8.834l.013-.256c3.849-.005 7.169-.448 9.95-1.322.233.475.456.952.67 1.432-3.38 1.057-6.165 3.222-8.337 6.48-1.432-1.719-2.296-3.927-2.296-6.334zm3.829 7.81c1.969-3.088 4.482-5.098 7.598-6.027.928 2.42 1.609 4.91 2.043 7.46-3.349 1.291-6.953.666-9.641-1.433zm11.586.43c-.438-2.353-1.08-4.653-1.92-6.897 1.876-.265 3.94-.196 6.199.196-.437 2.786-2.028 5.192-4.279 6.701z\"/>
       </svg>
      ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 77
$context["item"], "type", [], "any", false, false, false, 77) == "bde-social-icons__icon-behance")) {
                    // line 78
                    echo "       <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" viewBox=\"0 0 24 24\">
            <path d=\"M22 7h-7v-2h7v2zm1.726 10c-.442 1.297-2.029 3-5.101 3-3.074 0-5.564-1.729-5.564-5.675 0-3.91 2.325-5.92 5.466-5.92 3.082 0 4.964 1.782 5.375 4.426.078.506.109 1.188.095 2.14h-8.027c.13 3.211 3.483 3.312 4.588 2.029h3.168zm-7.686-4h4.965c-.105-1.547-1.136-2.219-2.477-2.219-1.466 0-2.277.768-2.488 2.219zm-9.574 6.988h-6.466v-14.967h6.953c5.476.081 5.58 5.444 2.72 6.906 3.461 1.26 3.577 8.061-3.207 8.061zm-3.466-8.988h3.584c2.508 0 2.906-3-.312-3h-3.272v3zm3.391 3h-3.391v3.016h3.341c3.055 0 2.868-3.016.05-3.016z\"/>
       </svg>
      ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 81
$context["item"], "type", [], "any", false, false, false, 81) == "bde-social-icons__icon-github")) {
                    // line 82
                    echo "       <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" viewBox=\"0 0 24 24\">
            <path d=\"M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z\"/>
       </svg>
      ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 85
$context["item"], "type", [], "any", false, false, false, 85) == "bde-social-icons__icon-linkedin")) {
                    // line 86
                    echo "       <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" viewBox=\"-4 -2 32 32\">
            <path d=\"M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z\"/>
       </svg>
      ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 89
$context["item"], "type", [], "any", false, false, false, 89) == "bde-social-icons__icon-vimeo")) {
                    // line 90
                    echo "       <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" viewBox=\"-2 -2 28 28\">
            <path d=\"M22.875 10.063c-2.442 5.217-8.337 12.319-12.063 12.319-3.672 0-4.203-7.831-6.208-13.043-.987-2.565-1.624-1.976-3.474-.681l-1.128-1.455c2.698-2.372 5.398-5.127 7.057-5.28 1.868-.179 3.018 1.098 3.448 3.832.568 3.593 1.362 9.17 2.748 9.17 1.08 0 3.741-4.424 3.878-6.006.243-2.316-1.703-2.386-3.392-1.663 2.673-8.754 13.793-7.142 9.134 2.807z\"/>
       </svg>
      ";
                } else {
                    // line 94
                    echo "        ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 94), "svgCode", [], "any", false, false, false, 94)) {
                        // line 95
                        echo "          ";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 95), "svgCode", [], "any", false, false, false, 95);
                        echo "
        ";
                    } else {
                        // line 97
                        echo "          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" viewBox=\"0 0 24 24\">
            <path d=\"M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z\"/>
          </svg>
        ";
                    }
                    // line 101
                    echo "      ";
                }
                // line 102
                echo "    ";
                echo twig_call_macro($macros["macros"], "macro_linkEnd", [], 102, $context, $this->getSourceContext());
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 105
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "bd7c814ae99fa00fe0349db23714c6c2d31e7c0e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 105,  202 => 102,  199 => 101,  193 => 97,  187 => 95,  184 => 94,  178 => 90,  176 => 89,  171 => 86,  169 => 85,  164 => 82,  162 => 81,  157 => 78,  155 => 77,  150 => 74,  148 => 73,  143 => 70,  141 => 69,  136 => 66,  134 => 65,  129 => 62,  127 => 61,  122 => 58,  120 => 57,  115 => 56,  113 => 55,  107 => 54,  103 => 53,  100 => 52,  95 => 51,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bd7c814ae99fa00fe0349db23714c6c2d31e7c0e", "");
    }
}
