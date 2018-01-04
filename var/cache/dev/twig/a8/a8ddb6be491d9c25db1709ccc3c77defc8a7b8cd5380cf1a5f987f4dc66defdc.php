<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_2a3205ae8b2fed98772797f29532c73acd405c91a79528aa561898f219d9b922 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_d47d5ad759fdf8acf5cb4811ff519897a5732ec4a591dfafe9f2947bb0f651d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d47d5ad759fdf8acf5cb4811ff519897a5732ec4a591dfafe9f2947bb0f651d3->enter($__internal_d47d5ad759fdf8acf5cb4811ff519897a5732ec4a591dfafe9f2947bb0f651d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_8d39a6069dd341555d60dcdd6bcaedda322cce85ca22acfd340ac4e4bff4bd82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d39a6069dd341555d60dcdd6bcaedda322cce85ca22acfd340ac4e4bff4bd82->enter($__internal_8d39a6069dd341555d60dcdd6bcaedda322cce85ca22acfd340ac4e4bff4bd82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d47d5ad759fdf8acf5cb4811ff519897a5732ec4a591dfafe9f2947bb0f651d3->leave($__internal_d47d5ad759fdf8acf5cb4811ff519897a5732ec4a591dfafe9f2947bb0f651d3_prof);

        
        $__internal_8d39a6069dd341555d60dcdd6bcaedda322cce85ca22acfd340ac4e4bff4bd82->leave($__internal_8d39a6069dd341555d60dcdd6bcaedda322cce85ca22acfd340ac4e4bff4bd82_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ebf2485589c3d6b45ddc97314012c292ee179ceb5d8778e1067a2ef66a3fba6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebf2485589c3d6b45ddc97314012c292ee179ceb5d8778e1067a2ef66a3fba6a->enter($__internal_ebf2485589c3d6b45ddc97314012c292ee179ceb5d8778e1067a2ef66a3fba6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fe190934da96fe4a686ed7cb0667d5225dcd28e2123bf4bd9d94fff03ad87f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe190934da96fe4a686ed7cb0667d5225dcd28e2123bf4bd9d94fff03ad87f26->enter($__internal_fe190934da96fe4a686ed7cb0667d5225dcd28e2123bf4bd9d94fff03ad87f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_fe190934da96fe4a686ed7cb0667d5225dcd28e2123bf4bd9d94fff03ad87f26->leave($__internal_fe190934da96fe4a686ed7cb0667d5225dcd28e2123bf4bd9d94fff03ad87f26_prof);

        
        $__internal_ebf2485589c3d6b45ddc97314012c292ee179ceb5d8778e1067a2ef66a3fba6a->leave($__internal_ebf2485589c3d6b45ddc97314012c292ee179ceb5d8778e1067a2ef66a3fba6a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
