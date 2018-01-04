<?php

/* form_table_layout.html.twig */
class __TwigTemplate_8f7168ea68cb454af36b0eaa3e276ba484613d69936c20e057a83604d1ef4b8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e74596ed8c4cb42c37e5bab8a1e9d461613ea7d5886c931d5a21cd99cbb1308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e74596ed8c4cb42c37e5bab8a1e9d461613ea7d5886c931d5a21cd99cbb1308->enter($__internal_7e74596ed8c4cb42c37e5bab8a1e9d461613ea7d5886c931d5a21cd99cbb1308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_2854524bbc88cc484bb86d2c0fdb2c001805188371202d3f9085b3044e665a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2854524bbc88cc484bb86d2c0fdb2c001805188371202d3f9085b3044e665a0c->enter($__internal_2854524bbc88cc484bb86d2c0fdb2c001805188371202d3f9085b3044e665a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_7e74596ed8c4cb42c37e5bab8a1e9d461613ea7d5886c931d5a21cd99cbb1308->leave($__internal_7e74596ed8c4cb42c37e5bab8a1e9d461613ea7d5886c931d5a21cd99cbb1308_prof);

        
        $__internal_2854524bbc88cc484bb86d2c0fdb2c001805188371202d3f9085b3044e665a0c->leave($__internal_2854524bbc88cc484bb86d2c0fdb2c001805188371202d3f9085b3044e665a0c_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_8d46d0f0d2b55332b1cf42914309f3584a3510a6eae3712e15d9aba1b1fe69b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d46d0f0d2b55332b1cf42914309f3584a3510a6eae3712e15d9aba1b1fe69b3->enter($__internal_8d46d0f0d2b55332b1cf42914309f3584a3510a6eae3712e15d9aba1b1fe69b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_8030b6817f08ded109c59572993ebe247ccf3555781f6bc2f77963423ef8da73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8030b6817f08ded109c59572993ebe247ccf3555781f6bc2f77963423ef8da73->enter($__internal_8030b6817f08ded109c59572993ebe247ccf3555781f6bc2f77963423ef8da73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_8030b6817f08ded109c59572993ebe247ccf3555781f6bc2f77963423ef8da73->leave($__internal_8030b6817f08ded109c59572993ebe247ccf3555781f6bc2f77963423ef8da73_prof);

        
        $__internal_8d46d0f0d2b55332b1cf42914309f3584a3510a6eae3712e15d9aba1b1fe69b3->leave($__internal_8d46d0f0d2b55332b1cf42914309f3584a3510a6eae3712e15d9aba1b1fe69b3_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_889f13501d5b963e4baf6a2c71594e6acb14cc8ea0cbe3f943fa3e00e0adc36d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_889f13501d5b963e4baf6a2c71594e6acb14cc8ea0cbe3f943fa3e00e0adc36d->enter($__internal_889f13501d5b963e4baf6a2c71594e6acb14cc8ea0cbe3f943fa3e00e0adc36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_3b1ac1278b1d779ddb8986894c790d93bf334279001d2015ac8412e9830af12e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1ac1278b1d779ddb8986894c790d93bf334279001d2015ac8412e9830af12e->enter($__internal_3b1ac1278b1d779ddb8986894c790d93bf334279001d2015ac8412e9830af12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_3b1ac1278b1d779ddb8986894c790d93bf334279001d2015ac8412e9830af12e->leave($__internal_3b1ac1278b1d779ddb8986894c790d93bf334279001d2015ac8412e9830af12e_prof);

        
        $__internal_889f13501d5b963e4baf6a2c71594e6acb14cc8ea0cbe3f943fa3e00e0adc36d->leave($__internal_889f13501d5b963e4baf6a2c71594e6acb14cc8ea0cbe3f943fa3e00e0adc36d_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_4178d22869615300c8bc248f7a3f1ce3556e523ee0c9ca4a9938326b6810a3af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4178d22869615300c8bc248f7a3f1ce3556e523ee0c9ca4a9938326b6810a3af->enter($__internal_4178d22869615300c8bc248f7a3f1ce3556e523ee0c9ca4a9938326b6810a3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_54ad89235243f16ccea5b55bc6b53d7c303b4a08ec730be998fe4a30386c99f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54ad89235243f16ccea5b55bc6b53d7c303b4a08ec730be998fe4a30386c99f1->enter($__internal_54ad89235243f16ccea5b55bc6b53d7c303b4a08ec730be998fe4a30386c99f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_54ad89235243f16ccea5b55bc6b53d7c303b4a08ec730be998fe4a30386c99f1->leave($__internal_54ad89235243f16ccea5b55bc6b53d7c303b4a08ec730be998fe4a30386c99f1_prof);

        
        $__internal_4178d22869615300c8bc248f7a3f1ce3556e523ee0c9ca4a9938326b6810a3af->leave($__internal_4178d22869615300c8bc248f7a3f1ce3556e523ee0c9ca4a9938326b6810a3af_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_e2897b0587d532ef67b2554aa1b88b7a2a1cac7f22c26d01fceabfdd6e3ce0fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2897b0587d532ef67b2554aa1b88b7a2a1cac7f22c26d01fceabfdd6e3ce0fe->enter($__internal_e2897b0587d532ef67b2554aa1b88b7a2a1cac7f22c26d01fceabfdd6e3ce0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_7fd823d056edd243e75a90fabe865393a76194c30c6517dbf140280950bf8486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fd823d056edd243e75a90fabe865393a76194c30c6517dbf140280950bf8486->enter($__internal_7fd823d056edd243e75a90fabe865393a76194c30c6517dbf140280950bf8486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_7fd823d056edd243e75a90fabe865393a76194c30c6517dbf140280950bf8486->leave($__internal_7fd823d056edd243e75a90fabe865393a76194c30c6517dbf140280950bf8486_prof);

        
        $__internal_e2897b0587d532ef67b2554aa1b88b7a2a1cac7f22c26d01fceabfdd6e3ce0fe->leave($__internal_e2897b0587d532ef67b2554aa1b88b7a2a1cac7f22c26d01fceabfdd6e3ce0fe_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
