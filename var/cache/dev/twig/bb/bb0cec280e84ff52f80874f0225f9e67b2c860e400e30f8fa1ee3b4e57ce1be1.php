<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_1d4bf8dfabcdcbd3757bd7fc5cd2dbd83ebc2dbf1181f33b1f487dae0f4bc91a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_290caabf08502a59d5db45ace04597fa8bcd9f4aecf9c0dde4bd70f288b6a467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_290caabf08502a59d5db45ace04597fa8bcd9f4aecf9c0dde4bd70f288b6a467->enter($__internal_290caabf08502a59d5db45ace04597fa8bcd9f4aecf9c0dde4bd70f288b6a467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_7bb138fb8409cb30b36fd8e729c43add7b9c64196d5d7d89136ace0565a77793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb138fb8409cb30b36fd8e729c43add7b9c64196d5d7d89136ace0565a77793->enter($__internal_7bb138fb8409cb30b36fd8e729c43add7b9c64196d5d7d89136ace0565a77793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_290caabf08502a59d5db45ace04597fa8bcd9f4aecf9c0dde4bd70f288b6a467->leave($__internal_290caabf08502a59d5db45ace04597fa8bcd9f4aecf9c0dde4bd70f288b6a467_prof);

        
        $__internal_7bb138fb8409cb30b36fd8e729c43add7b9c64196d5d7d89136ace0565a77793->leave($__internal_7bb138fb8409cb30b36fd8e729c43add7b9c64196d5d7d89136ace0565a77793_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2e0c39f274da35ea2e819e68941d1181fd2248fa8d56fc66ee7706953f0eea6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e0c39f274da35ea2e819e68941d1181fd2248fa8d56fc66ee7706953f0eea6c->enter($__internal_2e0c39f274da35ea2e819e68941d1181fd2248fa8d56fc66ee7706953f0eea6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_085bcaeed72fb7be64bad22f9229399833e40681b18c2bfb20b7f228898344e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085bcaeed72fb7be64bad22f9229399833e40681b18c2bfb20b7f228898344e3->enter($__internal_085bcaeed72fb7be64bad22f9229399833e40681b18c2bfb20b7f228898344e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_085bcaeed72fb7be64bad22f9229399833e40681b18c2bfb20b7f228898344e3->leave($__internal_085bcaeed72fb7be64bad22f9229399833e40681b18c2bfb20b7f228898344e3_prof);

        
        $__internal_2e0c39f274da35ea2e819e68941d1181fd2248fa8d56fc66ee7706953f0eea6c->leave($__internal_2e0c39f274da35ea2e819e68941d1181fd2248fa8d56fc66ee7706953f0eea6c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
