<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_a155120a2cc96725ca2988b2af4be21cd6cda78ebf99a5529de25d3c2c11abb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8bac3f415831d86043c3a7f13188f157d98d7d24edd6ad685cd0995d8e3ca92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8bac3f415831d86043c3a7f13188f157d98d7d24edd6ad685cd0995d8e3ca92->enter($__internal_e8bac3f415831d86043c3a7f13188f157d98d7d24edd6ad685cd0995d8e3ca92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_5697959fe36002901e857f3e7b472851638a19c7ac2282b354b54200147c08b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5697959fe36002901e857f3e7b472851638a19c7ac2282b354b54200147c08b4->enter($__internal_5697959fe36002901e857f3e7b472851638a19c7ac2282b354b54200147c08b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8bac3f415831d86043c3a7f13188f157d98d7d24edd6ad685cd0995d8e3ca92->leave($__internal_e8bac3f415831d86043c3a7f13188f157d98d7d24edd6ad685cd0995d8e3ca92_prof);

        
        $__internal_5697959fe36002901e857f3e7b472851638a19c7ac2282b354b54200147c08b4->leave($__internal_5697959fe36002901e857f3e7b472851638a19c7ac2282b354b54200147c08b4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0ba75bc5fad449664ff02fc82461a3c3aadb199213eb3e1b12f0d37f67bc15f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0ba75bc5fad449664ff02fc82461a3c3aadb199213eb3e1b12f0d37f67bc15f->enter($__internal_d0ba75bc5fad449664ff02fc82461a3c3aadb199213eb3e1b12f0d37f67bc15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c7e9f1810688cd7838a7c5f362bbdd84c8db64b60ba96cf6685222430d6ddf84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e9f1810688cd7838a7c5f362bbdd84c8db64b60ba96cf6685222430d6ddf84->enter($__internal_c7e9f1810688cd7838a7c5f362bbdd84c8db64b60ba96cf6685222430d6ddf84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c7e9f1810688cd7838a7c5f362bbdd84c8db64b60ba96cf6685222430d6ddf84->leave($__internal_c7e9f1810688cd7838a7c5f362bbdd84c8db64b60ba96cf6685222430d6ddf84_prof);

        
        $__internal_d0ba75bc5fad449664ff02fc82461a3c3aadb199213eb3e1b12f0d37f67bc15f->leave($__internal_d0ba75bc5fad449664ff02fc82461a3c3aadb199213eb3e1b12f0d37f67bc15f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
