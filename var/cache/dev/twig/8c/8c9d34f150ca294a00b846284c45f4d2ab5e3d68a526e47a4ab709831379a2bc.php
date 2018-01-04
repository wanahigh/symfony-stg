<?php

/* :entity/advert:edit.html.twig */
class __TwigTemplate_26f9139bf460eb4caa9ea1e01d0d1ce5d2c4ab32147442e4edc10ca3c031ced2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":entity/advert:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c133eb6291d7a57ddec4da0890b29ecdf9f145231c6d4ccb24a268d53ca24ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c133eb6291d7a57ddec4da0890b29ecdf9f145231c6d4ccb24a268d53ca24ab->enter($__internal_7c133eb6291d7a57ddec4da0890b29ecdf9f145231c6d4ccb24a268d53ca24ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":entity/advert:edit.html.twig"));

        $__internal_b374e859a97848db6aba935276674ccbbf1fb38c5862ff4b329e976a05cba38b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b374e859a97848db6aba935276674ccbbf1fb38c5862ff4b329e976a05cba38b->enter($__internal_b374e859a97848db6aba935276674ccbbf1fb38c5862ff4b329e976a05cba38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":entity/advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c133eb6291d7a57ddec4da0890b29ecdf9f145231c6d4ccb24a268d53ca24ab->leave($__internal_7c133eb6291d7a57ddec4da0890b29ecdf9f145231c6d4ccb24a268d53ca24ab_prof);

        
        $__internal_b374e859a97848db6aba935276674ccbbf1fb38c5862ff4b329e976a05cba38b->leave($__internal_b374e859a97848db6aba935276674ccbbf1fb38c5862ff4b329e976a05cba38b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3810e62e281f921c833262245646af8e8ab5c2cb47ae4ae7b38ec124329f235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3810e62e281f921c833262245646af8e8ab5c2cb47ae4ae7b38ec124329f235->enter($__internal_b3810e62e281f921c833262245646af8e8ab5c2cb47ae4ae7b38ec124329f235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_103d58ae913e6096a77914af9adc111a2fd0539a0fc4386b010f4e2b0cb8d319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103d58ae913e6096a77914af9adc111a2fd0539a0fc4386b010f4e2b0cb8d319->enter($__internal_103d58ae913e6096a77914af9adc111a2fd0539a0fc4386b010f4e2b0cb8d319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Advert edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_advert_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 16, $this->getSourceContext()); })()), 'form_start');
        echo "
            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 17, $this->getSourceContext()); })()), "image", array()))), "html", null, true);
        echo "\" height=\"100px\" width=\"250px\">
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 19, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_103d58ae913e6096a77914af9adc111a2fd0539a0fc4386b010f4e2b0cb8d319->leave($__internal_103d58ae913e6096a77914af9adc111a2fd0539a0fc4386b010f4e2b0cb8d319_prof);

        
        $__internal_b3810e62e281f921c833262245646af8e8ab5c2cb47ae4ae7b38ec124329f235->leave($__internal_b3810e62e281f921c833262245646af8e8ab5c2cb47ae4ae7b38ec124329f235_prof);

    }

    public function getTemplateName()
    {
        return ":entity/advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 19,  79 => 17,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Advert edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('entity_advert_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
            <img src=\"{{ asset('uploads/images/' ~ advert.image) }}\" height=\"100px\" width=\"250px\">
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":entity/advert:edit.html.twig", "/var/www/html/symfony-stg/app/Resources/views/entity/advert/edit.html.twig");
    }
}
