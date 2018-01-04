<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_1e7620a4f333abe83ce4e8c353438c7d4275bebb9f02c6b511f654922dcc94c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c375dac6bbcb9d8beac104764e584c2bbe8012e16797a467d223b0316ecb151 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c375dac6bbcb9d8beac104764e584c2bbe8012e16797a467d223b0316ecb151->enter($__internal_3c375dac6bbcb9d8beac104764e584c2bbe8012e16797a467d223b0316ecb151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_99792a0aeb7d8fdabab5ea286f3dd6a5ce32c2969a074e1fa97196d6d3a64e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99792a0aeb7d8fdabab5ea286f3dd6a5ce32c2969a074e1fa97196d6d3a64e67->enter($__internal_99792a0aeb7d8fdabab5ea286f3dd6a5ce32c2969a074e1fa97196d6d3a64e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3c375dac6bbcb9d8beac104764e584c2bbe8012e16797a467d223b0316ecb151->leave($__internal_3c375dac6bbcb9d8beac104764e584c2bbe8012e16797a467d223b0316ecb151_prof);

        
        $__internal_99792a0aeb7d8fdabab5ea286f3dd6a5ce32c2969a074e1fa97196d6d3a64e67->leave($__internal_99792a0aeb7d8fdabab5ea286f3dd6a5ce32c2969a074e1fa97196d6d3a64e67_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7e0deb921fdd8a3dfda5cc60d81477f2f86feffbba9a1671b893d44cdc9a931d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e0deb921fdd8a3dfda5cc60d81477f2f86feffbba9a1671b893d44cdc9a931d->enter($__internal_7e0deb921fdd8a3dfda5cc60d81477f2f86feffbba9a1671b893d44cdc9a931d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_1d659c9c9b578fdd9fbdb6d63471697037b5e44dd2b494d6bf449bf7e6491944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d659c9c9b578fdd9fbdb6d63471697037b5e44dd2b494d6bf449bf7e6491944->enter($__internal_1d659c9c9b578fdd9fbdb6d63471697037b5e44dd2b494d6bf449bf7e6491944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_1d659c9c9b578fdd9fbdb6d63471697037b5e44dd2b494d6bf449bf7e6491944->leave($__internal_1d659c9c9b578fdd9fbdb6d63471697037b5e44dd2b494d6bf449bf7e6491944_prof);

        
        $__internal_7e0deb921fdd8a3dfda5cc60d81477f2f86feffbba9a1671b893d44cdc9a931d->leave($__internal_7e0deb921fdd8a3dfda5cc60d81477f2f86feffbba9a1671b893d44cdc9a931d_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_be44da3f3c2e0fb616a346634f8daac5c5ec7e68f82ad5c496aa948607baf097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be44da3f3c2e0fb616a346634f8daac5c5ec7e68f82ad5c496aa948607baf097->enter($__internal_be44da3f3c2e0fb616a346634f8daac5c5ec7e68f82ad5c496aa948607baf097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_f5af25b36c960fc12105c05f2101c96fececb1c2db14054fd87eae5eb31c9f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5af25b36c960fc12105c05f2101c96fececb1c2db14054fd87eae5eb31c9f4e->enter($__internal_f5af25b36c960fc12105c05f2101c96fececb1c2db14054fd87eae5eb31c9f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_f5af25b36c960fc12105c05f2101c96fececb1c2db14054fd87eae5eb31c9f4e->leave($__internal_f5af25b36c960fc12105c05f2101c96fececb1c2db14054fd87eae5eb31c9f4e_prof);

        
        $__internal_be44da3f3c2e0fb616a346634f8daac5c5ec7e68f82ad5c496aa948607baf097->leave($__internal_be44da3f3c2e0fb616a346634f8daac5c5ec7e68f82ad5c496aa948607baf097_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e9e1dc8de6bd848ea1b490df0431433e91c57835fccdfff8b0dd2aa9f96a3412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9e1dc8de6bd848ea1b490df0431433e91c57835fccdfff8b0dd2aa9f96a3412->enter($__internal_e9e1dc8de6bd848ea1b490df0431433e91c57835fccdfff8b0dd2aa9f96a3412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_9f028f58339d875f9082a7b64d227e0f02217c2e96dd69c723a946a6d4fe2174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f028f58339d875f9082a7b64d227e0f02217c2e96dd69c723a946a6d4fe2174->enter($__internal_9f028f58339d875f9082a7b64d227e0f02217c2e96dd69c723a946a6d4fe2174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9f028f58339d875f9082a7b64d227e0f02217c2e96dd69c723a946a6d4fe2174->leave($__internal_9f028f58339d875f9082a7b64d227e0f02217c2e96dd69c723a946a6d4fe2174_prof);

        
        $__internal_e9e1dc8de6bd848ea1b490df0431433e91c57835fccdfff8b0dd2aa9f96a3412->leave($__internal_e9e1dc8de6bd848ea1b490df0431433e91c57835fccdfff8b0dd2aa9f96a3412_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
