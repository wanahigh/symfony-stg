<?php

/* ::contact.html.twig */
class __TwigTemplate_e6070813365acfaddb41bd20d68da77bf7cf3511415d93a47d90d08fb3428ee1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::contact.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ab52f80454671ca5c74fd8d027d37e497ff6da5c2519b7d0445af237d3bf086 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ab52f80454671ca5c74fd8d027d37e497ff6da5c2519b7d0445af237d3bf086->enter($__internal_9ab52f80454671ca5c74fd8d027d37e497ff6da5c2519b7d0445af237d3bf086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::contact.html.twig"));

        $__internal_9f96f06bab7965c579aac98a5f4029589c78d4436e5b6b08ba52d5959efb6a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f96f06bab7965c579aac98a5f4029589c78d4436e5b6b08ba52d5959efb6a88->enter($__internal_9f96f06bab7965c579aac98a5f4029589c78d4436e5b6b08ba52d5959efb6a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ab52f80454671ca5c74fd8d027d37e497ff6da5c2519b7d0445af237d3bf086->leave($__internal_9ab52f80454671ca5c74fd8d027d37e497ff6da5c2519b7d0445af237d3bf086_prof);

        
        $__internal_9f96f06bab7965c579aac98a5f4029589c78d4436e5b6b08ba52d5959efb6a88->leave($__internal_9f96f06bab7965c579aac98a5f4029589c78d4436e5b6b08ba52d5959efb6a88_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_156003fc064d88524a58ffc0daac4145c78a8e3c855d7378cdf09ae7b7ddf126 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_156003fc064d88524a58ffc0daac4145c78a8e3c855d7378cdf09ae7b7ddf126->enter($__internal_156003fc064d88524a58ffc0daac4145c78a8e3c855d7378cdf09ae7b7ddf126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c2fd71bde3503ebc1ef0e2dbb8f5c08cf4c9ee150d32de78ea52e9d4fa990f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2fd71bde3503ebc1ef0e2dbb8f5c08cf4c9ee150d32de78ea52e9d4fa990f16->enter($__internal_c2fd71bde3503ebc1ef0e2dbb8f5c08cf4c9ee150d32de78ea52e9d4fa990f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        // line 4
        echo "<div class=\"container center\">
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'form_start');
        echo "

    <div>
        <input type=\"text\" required id=\"form.subject\" placeholder=\"Votre sujet\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "subject", array()), 'errors');
        echo "
    </div>
    <div>
        <input type=\"text\" required id=\"form.name\" placeholder=\"Votre nom\">
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "name", array()), 'errors');
        echo "
    </div>
    <div>
        <input type=\"email\" required id=\"form.email\" placeholder=\"exemple@exemple.com\">
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "email", array()), 'errors');
        echo "
    </div>
    <div>
        <input type=\"text\" required id=\"form.message\" placeholder=\"Message\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "message", array()), 'errors');
        echo "
    </div>

    ";
        // line 25
        echo "    <div style=\"display:none\">
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), 'rest');
        echo "
    </div>

    <input class=\"btn-large pink\" type=\"submit\" value=\"Submit\" onclick=\"Materialize.toast('Message envoyé !', 4000)\">
    ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'form_end');
        echo "

</div>

";
        
        $__internal_c2fd71bde3503ebc1ef0e2dbb8f5c08cf4c9ee150d32de78ea52e9d4fa990f16->leave($__internal_c2fd71bde3503ebc1ef0e2dbb8f5c08cf4c9ee150d32de78ea52e9d4fa990f16_prof);

        
        $__internal_156003fc064d88524a58ffc0daac4145c78a8e3c855d7378cdf09ae7b7ddf126->leave($__internal_156003fc064d88524a58ffc0daac4145c78a8e3c855d7378cdf09ae7b7ddf126_prof);

    }

    public function getTemplateName()
    {
        return "::contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 30,  91 => 26,  88 => 25,  82 => 21,  75 => 17,  68 => 13,  61 => 9,  54 => 5,  51 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block body %}
    {# contact.html.twig #}
<div class=\"container center\">
    {{ form_start(form) }}

    <div>
        <input type=\"text\" required id=\"form.subject\" placeholder=\"Votre sujet\">
        {{ form_errors(form.subject) }}
    </div>
    <div>
        <input type=\"text\" required id=\"form.name\" placeholder=\"Votre nom\">
        {{ form_errors(form.name) }}
    </div>
    <div>
        <input type=\"email\" required id=\"form.email\" placeholder=\"exemple@exemple.com\">
        {{ form_errors(form.email) }}
    </div>
    <div>
        <input type=\"text\" required id=\"form.message\" placeholder=\"Message\">
        {{ form_errors(form.message) }}
    </div>

    {# Render CSRF token etc .#}
    <div style=\"display:none\">
        {{ form_rest(form) }}
    </div>

    <input class=\"btn-large pink\" type=\"submit\" value=\"Submit\" onclick=\"Materialize.toast('Message envoyé !', 4000)\">
    {{ form_end(form) }}

</div>

{% endblock %}


", "::contact.html.twig", "/var/www/html/symfony-stg/app/Resources/views/contact.html.twig");
    }
}
