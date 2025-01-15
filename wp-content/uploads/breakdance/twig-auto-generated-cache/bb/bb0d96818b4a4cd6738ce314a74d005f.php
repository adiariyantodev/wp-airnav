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

/* 46cdbb6acdbb0bce4262d1b2f7e1fabe8da36e69 */
class __TwigTemplate_163edb2e007431794934f81bbf698453 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "46cdbb6acdbb0bce4262d1b2f7e1fabe8da36e69", 2)->unwrap();
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
          <option value=\"Mengambil Langsung\" selected>Mengambil Langsung</option>
        <option value=\"Kurir\" >Kurir</option>
        <option value=\"Pos\" >Pos</option>
        <option value=\"Faksimili\" >Faksimili</option>
        <option value=\"E-mail\" >E-mail</option>
  </select>


    
    
</div>

         
  ";
        // line 367
        echo do_action("breakdance_form_before_footer", ($context["form"] ?? null));
        echo "

<footer class=\"breakdance-form-field breakdance-form-footer\">
    ";
        // line 370
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
            // line 371
            echo "        <div class=\"breakdance-form-field breakdance-form-field--step-buttons\" data-form-step=\"";
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 371);
            echo "\">
            ";
            // line 372
            echo twig_call_macro($macros["macros"], "macro_atomV1ButtonHtmlManual", [(((twig_get_attribute($this->env, $this->source, $context["step"], "previous_button_text", [], "any", true, true, false, 372) &&  !(null === twig_get_attribute($this->env, $this->source, $context["step"], "previous_button_text", [], "any", false, false, false, 372)))) ? (twig_get_attribute($this->env, $this->source, $context["step"], "previous_button_text", [], "any", false, false, false, 372)) : ("Previous Step")), false, "breakdance-form-button breakdance-form-button__previous-step hidden", ($context["previousStepButtonDesign"] ?? null), "secondary", false, false, "step.next_button_text"], 372, $context, $this->getSourceContext());
            echo "
            ";
            // line 373
            echo twig_call_macro($macros["macros"], "macro_atomV1ButtonHtmlManual", [(((twig_get_attribute($this->env, $this->source, $context["step"], "next_button_text", [], "any", true, true, false, 373) &&  !(null === twig_get_attribute($this->env, $this->source, $context["step"], "next_button_text", [], "any", false, false, false, 373)))) ? (twig_get_attribute($this->env, $this->source, $context["step"], "next_button_text", [], "any", false, false, false, 373)) : ("Next Step")), false, "breakdance-form-button breakdance-form-button__next-step hidden", ($context["nextStepButtonDesign"] ?? null), "primary", false, false, "step.next_button_text"], 373, $context, $this->getSourceContext());
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
        // line 376
        echo "    ";
        echo twig_call_macro($macros["macros"], "macro_atomV1ButtonHtmlManual", [(($context["submitButtonText"]) ?? ("Submit")), false, "breakdance-form-button breakdance-form-button__submit", ($context["submitButtonDesign"] ?? null), "primary", ($context["submitButtonId"] ?? null), true, "content.form.submit_text"], 376, $context, $this->getSourceContext());
        echo "
    <input type=\"hidden\" name=\"form_id\" value=\"%%ID%%\">
    <input type=\"hidden\" name=\"post_id\" value=\"%%POSTID%%\">
</footer>

  ";
        // line 381
        echo do_action("breakdance_form_end", ($context["form"] ?? null));
        echo "
</form>

         ";
    }

    public function getTemplateName()
    {
        return "46cdbb6acdbb0bce4262d1b2f7e1fabe8da36e69";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  541 => 381,  532 => 376,  515 => 373,  511 => 372,  506 => 371,  489 => 370,  483 => 367,  149 => 35,  144 => 32,  128 => 29,  122 => 27,  120 => 26,  117 => 25,  111 => 23,  105 => 21,  103 => 20,  97 => 18,  80 => 17,  76 => 15,  74 => 14,  70 => 13,  56 => 12,  53 => 11,  51 => 9,  50 => 8,  49 => 6,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "46cdbb6acdbb0bce4262d1b2f7e1fabe8da36e69", "");
    }
}
