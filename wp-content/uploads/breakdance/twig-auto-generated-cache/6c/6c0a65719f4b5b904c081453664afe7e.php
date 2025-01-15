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

/* 874e26d6c41a27453651a0d16bdb79006e59bc13 */
class __TwigTemplate_099401aa4c6c5d728c67d9d4c0b9c42f extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "874e26d6c41a27453651a0d16bdb79006e59bc13", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        $context["layout"] = ((($context["formLayout"] ?? null)) ? (($context["formLayout"] ?? null)) : ("vertical"));
        // line 5
        $context["breakpoints"] = ((($context["hasBreakpoints"] ?? null)) ? ("has-breakpoints") : (""));
        // line 6
        $context["cssClasses"] = twig_join_filter([0 => "breakdance-form", 1 => ("breakdance-form--" .         // line 8
($context["layout"] ?? null)), 2 =>         // line 9
($context["breakpoints"] ?? null)], " ");
        // line 11
        echo "
<form id=\"";
        // line 12
        echo ($context["formId"] ?? null);
        echo "\" class=\"";
        echo ($context["cssClasses"] ?? null);
        echo "\" data-options=\"";
        echo twig_escape_filter($this->env, json_encode(($context["options"] ?? null)));
        echo "\" data-steps=\"";
        echo ($context["stepCount"] ?? null);
        echo "\" ";
        if ((($context["stepCount"] ?? null) >= 1)) {
            echo " data-current-step=\"1\" ";
        }
        echo ">
  ";
        // line 13
        echo do_action("breakdance_form_start", ($context["form"] ?? null));
        echo "
  ";
        // line 14
        if ((($context["stepCount"] ?? null) >= 1)) {
            // line 15
            echo "<div class=\"breakdance-form-stepper\">
    <div class=\"breakdance-form-stepper__list\">
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["steps"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
                // line 18
                echo "            <div class=\"breakdance-form-stepper__step\" data-stepper-step=\"";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 18);
                echo "\">
                <div class=\"breakdance-form-stepper__step-icon\">
                    ";
                // line 20
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["step"], "step_icon", [], "any", false, false, false, 20), "svgCode", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["step"], "step_icon", [], "any", false, false, false, 21), "svgCode", [], "any", false, false, false, 21);
                    echo "
                    ";
                } else {
                    // line 23
                    echo "                        <span>";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 23);
                    echo "</span>
                    ";
                }
                // line 25
                echo "                </div>
                ";
                // line 26
                if (twig_get_attribute($this->env, $this->source, $context["step"], "label", [], "any", false, false, false, 26)) {
                    // line 27
                    echo "                    <div class=\"breakdance-form-stepper__label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["step"], "label", [], "any", false, false, false, 27);
                    echo "</div>
                ";
                }
                // line 29
                echo "            </div>
            <div class=\"breakdance-form-stepper__separator\"></div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    </div>
</div>
";
        }
        // line 35
        echo "
  
          
          <div class=\"breakdance-form-field breakdance-form-field--text\" >
    
            <label class=\"breakdance-form-field__label\" for=\"nama\">
            Nama</span>
        </label>
    
    <input
    class=\"breakdance-form-field__input\"
    id=\"nama\"
    aria-describedby=\"nama\"
    type=\"text\"
    name=\"fields[nama]\"
    placeholder=\"Nama\"
    value=\"\"
        
    
    
    
    
    
>


    
    
</div>

         
          
          <div class=\"breakdance-form-field breakdance-form-field--text\" >
    
            <label class=\"breakdance-form-field__label\" for=\"identitas\">
            No. Identitas</span>
        </label>
    
    <input
    class=\"breakdance-form-field__input\"
    id=\"identitas\"
    aria-describedby=\"identitas\"
    type=\"text\"
    name=\"fields[identitas]\"
    placeholder=\"No. Identitas\"
    value=\"\"
        
    
    
    
    
    
>


    
    
</div>

         
          
          <div class=\"breakdance-form-field breakdance-form-field--textarea\" >
    
            <label class=\"breakdance-form-field__label\" for=\"alamat\">
            Alamat</span>
        </label>
    
    <textarea
    class=\"breakdance-form-field__input\"
    id=\"alamat\"
    aria-describedby=\"alamat\"
    type=\"textarea\"
    name=\"fields[alamat]\"
        rows=\"2\"
        placeholder=\"\"
    
    >
</textarea>


    
    
</div>

         
          
          <div class=\"breakdance-form-field breakdance-form-field--text\" >
    
            <label class=\"breakdance-form-field__label\" for=\"pekerjaan\">
            Pekerjaan</span>
        </label>
    
    <input
    class=\"breakdance-form-field__input\"
    id=\"pekerjaan\"
    aria-describedby=\"pekerjaan\"
    type=\"text\"
    name=\"fields[pekerjaan]\"
    placeholder=\"Pekerjaan\"
    value=\"\"
        
    
    
    
    
    
>


    
    
</div>

         
          
          <div class=\"breakdance-form-field breakdance-form-field--text\" >
    
            <label class=\"breakdance-form-field__label\" for=\"telepon\">
            No. Telepon</span>
        </label>
    
    <input
    class=\"breakdance-form-field__input\"
    id=\"telepon\"
    aria-describedby=\"telepon\"
    type=\"text\"
    name=\"fields[telepon]\"
    placeholder=\"No. Telepon\"
    value=\"\"
        
    
    
    
    
    
>


    
    
</div>

         
          
          <div class=\"breakdance-form-field breakdance-form-field--email\" >
    
            <label class=\"breakdance-form-field__label\" for=\"email\">
            Email</span>
        </label>
    
    <input
    class=\"breakdance-form-field__input\"
    id=\"email\"
    aria-describedby=\"email\"
    type=\"email\"
    name=\"fields[email]\"
    placeholder=\"Email\"
    value=\"\"
        
    
    
    
    
    
>


    
    
</div>

         
          
          <div class=\"breakdance-form-field breakdance-form-field--text\" >
    
            <label class=\"breakdance-form-field__label\" for=\"informasi-dibutuhkan\">
            Rincian Informasi yang dibutuhkan</span>
        </label>
    
    <input
    class=\"breakdance-form-field__input\"
    id=\"informasi-dibutuhkan\"
    aria-describedby=\"informasi-dibutuhkan\"
    type=\"text\"
    name=\"fields[informasi-dibutuhkan]\"
    placeholder=\"Rincian Informasi\"
    value=\"\"
        
    
    
    
    
    
>


    
    
</div>

         
          
          <div class=\"breakdance-form-field breakdance-form-field--text\" >
    
            <label class=\"breakdance-form-field__label\" for=\"ktqwlc\">
            Tujuan Penggunaan Informasi</span>
        </label>
    
    <input
    class=\"breakdance-form-field__input\"
    id=\"ktqwlc\"
    aria-describedby=\"ktqwlc\"
    type=\"text\"
    name=\"fields[ktqwlc]\"
    placeholder=\"Tujuan Penggunaan Informasi\"
    value=\"\"
        
    
    
    
    
    
>


    
    
</div>

         
          
          <div class=\"breakdance-form-field breakdance-form-field--checkbox\" >
    
            <label class=\"breakdance-form-field__label\" for=\"gmwsaz\">
            Cara memperoleh Informasi</span>
        </label>
    
        <div class=\"breakdance-form-checkbox\">
        <input
            type=\"checkbox\"
            name=\"fields[gmwsaz][]\"
            value=\"Melihat\"
            id=\"gmwsaz-1\"
            checked
                    >
        <label class=\"breakdance-form-checkbox__text\" for=\"gmwsaz-1\">Melihat</label>
    </div>
    <div class=\"breakdance-form-checkbox\">
        <input
            type=\"checkbox\"
            name=\"fields[gmwsaz][]\"
            value=\"Membaca\"
            id=\"gmwsaz-2\"
            
                    >
        <label class=\"breakdance-form-checkbox__text\" for=\"gmwsaz-2\">Membaca</label>
    </div>
    <div class=\"breakdance-form-checkbox\">
        <input
            type=\"checkbox\"
            name=\"fields[gmwsaz][]\"
            value=\"Mendengarkan\"
            id=\"gmwsaz-3\"
            
                    >
        <label class=\"breakdance-form-checkbox__text\" for=\"gmwsaz-3\">Mendengarkan</label>
    </div>
    <div class=\"breakdance-form-checkbox\">
        <input
            type=\"checkbox\"
            name=\"fields[gmwsaz][]\"
            value=\"Mencatat\"
            id=\"gmwsaz-4\"
            
                    >
        <label class=\"breakdance-form-checkbox__text\" for=\"gmwsaz-4\">Mencatat</label>
    </div>
    <div class=\"breakdance-form-checkbox\">
        <input
            type=\"checkbox\"
            name=\"fields[gmwsaz][]\"
            value=\"Salinan Informasi (Softcopy)\"
            id=\"gmwsaz-5\"
            
                    >
        <label class=\"breakdance-form-checkbox__text\" for=\"gmwsaz-5\">Salinan Informasi (Softcopy)</label>
    </div>
    <div class=\"breakdance-form-checkbox\">
        <input
            type=\"checkbox\"
            name=\"fields[gmwsaz][]\"
            value=\"Salinan Informasi (Hardcopy)\"
            id=\"gmwsaz-6\"
            
                    >
        <label class=\"breakdance-form-checkbox__text\" for=\"gmwsaz-6\">Salinan Informasi (Hardcopy)</label>
    </div>


    
    
</div>

         
          
          <div class=\"breakdance-form-field breakdance-form-field--select\" >
    
            <label class=\"breakdance-form-field__label\" for=\"cara-mendapatkan\">
            Cara mendapatkan salinan informasi</span>
        </label>
    
    <select
    class=\"breakdance-form-field__input\"
    id=\"cara-mendapatkan\"
    name=\"fields[cara-mendapatkan]\"
    
    
        >
      <option value=\"\">Select...</option>
    </select>


    
    
</div>

         
  ";
        // line 362
        echo do_action("breakdance_form_before_footer", ($context["form"] ?? null));
        echo "

<footer class=\"breakdance-form-field breakdance-form-footer\">
    ";
        // line 365
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["steps"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 366
            echo "        <div class=\"breakdance-form-field breakdance-form-field--step-buttons\" data-form-step=\"";
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 366);
            echo "\">
            ";
            // line 367
            echo twig_call_macro($macros["macros"], "macro_atomV1ButtonHtmlManual", [(((twig_get_attribute($this->env, $this->source, $context["step"], "previous_button_text", [], "any", true, true, false, 367) &&  !(null === twig_get_attribute($this->env, $this->source, $context["step"], "previous_button_text", [], "any", false, false, false, 367)))) ? (twig_get_attribute($this->env, $this->source, $context["step"], "previous_button_text", [], "any", false, false, false, 367)) : ("Previous Step")), false, "breakdance-form-button breakdance-form-button__previous-step hidden", ($context["previousStepButtonDesign"] ?? null), "secondary", false, false, "step.next_button_text"], 367, $context, $this->getSourceContext());
            echo "
            ";
            // line 368
            echo twig_call_macro($macros["macros"], "macro_atomV1ButtonHtmlManual", [(((twig_get_attribute($this->env, $this->source, $context["step"], "next_button_text", [], "any", true, true, false, 368) &&  !(null === twig_get_attribute($this->env, $this->source, $context["step"], "next_button_text", [], "any", false, false, false, 368)))) ? (twig_get_attribute($this->env, $this->source, $context["step"], "next_button_text", [], "any", false, false, false, 368)) : ("Next Step")), false, "breakdance-form-button breakdance-form-button__next-step hidden", ($context["nextStepButtonDesign"] ?? null), "primary", false, false, "step.next_button_text"], 368, $context, $this->getSourceContext());
            echo "
        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 371
        echo "    ";
        echo twig_call_macro($macros["macros"], "macro_atomV1ButtonHtmlManual", [(($context["submitButtonText"]) ?? ("Submit")), false, "breakdance-form-button breakdance-form-button__submit", ($context["submitButtonDesign"] ?? null), "primary", ($context["submitButtonId"] ?? null), true, "content.form.submit_text"], 371, $context, $this->getSourceContext());
        echo "
    <input type=\"hidden\" name=\"form_id\" value=\"%%ID%%\">
    <input type=\"hidden\" name=\"post_id\" value=\"%%POSTID%%\">
</footer>

  ";
        // line 376
        echo do_action("breakdance_form_end", ($context["form"] ?? null));
        echo "
</form>

         ";
    }

    public function getTemplateName()
    {
        return "874e26d6c41a27453651a0d16bdb79006e59bc13";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  536 => 376,  527 => 371,  510 => 368,  506 => 367,  501 => 366,  484 => 365,  478 => 362,  149 => 35,  144 => 32,  128 => 29,  122 => 27,  120 => 26,  117 => 25,  111 => 23,  105 => 21,  103 => 20,  97 => 18,  80 => 17,  76 => 15,  74 => 14,  70 => 13,  56 => 12,  53 => 11,  51 => 9,  50 => 8,  49 => 6,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "874e26d6c41a27453651a0d16bdb79006e59bc13", "");
    }
}
