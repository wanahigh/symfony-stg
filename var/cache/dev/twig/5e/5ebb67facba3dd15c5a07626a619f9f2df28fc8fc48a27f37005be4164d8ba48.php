<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_8135fefefda43c2a086cb4ac40c0078e2d4be7a6baf5b525649059099e0dfacd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_cfc40314ae737c7900726c3557f2566ef664258d82e59889599486a5198f5336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfc40314ae737c7900726c3557f2566ef664258d82e59889599486a5198f5336->enter($__internal_cfc40314ae737c7900726c3557f2566ef664258d82e59889599486a5198f5336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_3b3bcfa831b18377d3cace65510350db21a5db4715839218f1d5c4c1d391cb58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3bcfa831b18377d3cace65510350db21a5db4715839218f1d5c4c1d391cb58->enter($__internal_3b3bcfa831b18377d3cace65510350db21a5db4715839218f1d5c4c1d391cb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfc40314ae737c7900726c3557f2566ef664258d82e59889599486a5198f5336->leave($__internal_cfc40314ae737c7900726c3557f2566ef664258d82e59889599486a5198f5336_prof);

        
        $__internal_3b3bcfa831b18377d3cace65510350db21a5db4715839218f1d5c4c1d391cb58->leave($__internal_3b3bcfa831b18377d3cace65510350db21a5db4715839218f1d5c4c1d391cb58_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac0cc3b2339edd9c14af2b9702173a73ca133c4757a9acb0de8b662f0a13fb7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac0cc3b2339edd9c14af2b9702173a73ca133c4757a9acb0de8b662f0a13fb7e->enter($__internal_ac0cc3b2339edd9c14af2b9702173a73ca133c4757a9acb0de8b662f0a13fb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_35229c0d957ae47ce0ad7fc8510114a8b45914b5f4e683f1f0b93310350eff9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35229c0d957ae47ce0ad7fc8510114a8b45914b5f4e683f1f0b93310350eff9e->enter($__internal_35229c0d957ae47ce0ad7fc8510114a8b45914b5f4e683f1f0b93310350eff9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_35229c0d957ae47ce0ad7fc8510114a8b45914b5f4e683f1f0b93310350eff9e->leave($__internal_35229c0d957ae47ce0ad7fc8510114a8b45914b5f4e683f1f0b93310350eff9e_prof);

        
        $__internal_ac0cc3b2339edd9c14af2b9702173a73ca133c4757a9acb0de8b662f0a13fb7e->leave($__internal_ac0cc3b2339edd9c14af2b9702173a73ca133c4757a9acb0de8b662f0a13fb7e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
