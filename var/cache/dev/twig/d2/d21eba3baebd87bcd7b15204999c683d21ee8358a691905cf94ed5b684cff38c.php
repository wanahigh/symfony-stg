<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_a64227d91d695c04f25b60fcc640ac5fd78fd49accde94fcb2d70e1cbe53caa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_d50a28cf0a573f20b8a3311fb7b2159959a2185fca29e59baa6ca49a9fb32286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d50a28cf0a573f20b8a3311fb7b2159959a2185fca29e59baa6ca49a9fb32286->enter($__internal_d50a28cf0a573f20b8a3311fb7b2159959a2185fca29e59baa6ca49a9fb32286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_40e01331a8fc66ae2970bfe96ace5f979662ffe9f55d144639f198a416acc5ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e01331a8fc66ae2970bfe96ace5f979662ffe9f55d144639f198a416acc5ac->enter($__internal_40e01331a8fc66ae2970bfe96ace5f979662ffe9f55d144639f198a416acc5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d50a28cf0a573f20b8a3311fb7b2159959a2185fca29e59baa6ca49a9fb32286->leave($__internal_d50a28cf0a573f20b8a3311fb7b2159959a2185fca29e59baa6ca49a9fb32286_prof);

        
        $__internal_40e01331a8fc66ae2970bfe96ace5f979662ffe9f55d144639f198a416acc5ac->leave($__internal_40e01331a8fc66ae2970bfe96ace5f979662ffe9f55d144639f198a416acc5ac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_86051c1db83a1c2561fa45594fc0bd890aba1198b523af66afbb438145c35328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86051c1db83a1c2561fa45594fc0bd890aba1198b523af66afbb438145c35328->enter($__internal_86051c1db83a1c2561fa45594fc0bd890aba1198b523af66afbb438145c35328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_45bcdd1ab1213678c282f6250dbde978bb403113abe2072b3ab58944f4ae8bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45bcdd1ab1213678c282f6250dbde978bb403113abe2072b3ab58944f4ae8bec->enter($__internal_45bcdd1ab1213678c282f6250dbde978bb403113abe2072b3ab58944f4ae8bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_45bcdd1ab1213678c282f6250dbde978bb403113abe2072b3ab58944f4ae8bec->leave($__internal_45bcdd1ab1213678c282f6250dbde978bb403113abe2072b3ab58944f4ae8bec_prof);

        
        $__internal_86051c1db83a1c2561fa45594fc0bd890aba1198b523af66afbb438145c35328->leave($__internal_86051c1db83a1c2561fa45594fc0bd890aba1198b523af66afbb438145c35328_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
