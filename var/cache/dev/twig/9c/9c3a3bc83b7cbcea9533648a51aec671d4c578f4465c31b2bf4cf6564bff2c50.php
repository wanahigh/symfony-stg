<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_de267ec603701c58765bc41b94428587379287a40d8c0b373185cb69305c4b7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_65f9a7776298d55ebbe1ee63472fa677c255b53a3c5af66fb271bd5d7c5849a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65f9a7776298d55ebbe1ee63472fa677c255b53a3c5af66fb271bd5d7c5849a9->enter($__internal_65f9a7776298d55ebbe1ee63472fa677c255b53a3c5af66fb271bd5d7c5849a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_0c86e0aa6d9588df55f43b77cd99d0d0504bf95294e31010e3332c0436dc5f8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c86e0aa6d9588df55f43b77cd99d0d0504bf95294e31010e3332c0436dc5f8c->enter($__internal_0c86e0aa6d9588df55f43b77cd99d0d0504bf95294e31010e3332c0436dc5f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65f9a7776298d55ebbe1ee63472fa677c255b53a3c5af66fb271bd5d7c5849a9->leave($__internal_65f9a7776298d55ebbe1ee63472fa677c255b53a3c5af66fb271bd5d7c5849a9_prof);

        
        $__internal_0c86e0aa6d9588df55f43b77cd99d0d0504bf95294e31010e3332c0436dc5f8c->leave($__internal_0c86e0aa6d9588df55f43b77cd99d0d0504bf95294e31010e3332c0436dc5f8c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dbccb21d6a629dfac4129f6a86164c25c25aab60141136c2e0a90f09bcfd1110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbccb21d6a629dfac4129f6a86164c25c25aab60141136c2e0a90f09bcfd1110->enter($__internal_dbccb21d6a629dfac4129f6a86164c25c25aab60141136c2e0a90f09bcfd1110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c0f9fdd28dbd04c10e47b13c30fce1298141813b999064edf3c6f4240bce26e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f9fdd28dbd04c10e47b13c30fce1298141813b999064edf3c6f4240bce26e1->enter($__internal_c0f9fdd28dbd04c10e47b13c30fce1298141813b999064edf3c6f4240bce26e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c0f9fdd28dbd04c10e47b13c30fce1298141813b999064edf3c6f4240bce26e1->leave($__internal_c0f9fdd28dbd04c10e47b13c30fce1298141813b999064edf3c6f4240bce26e1_prof);

        
        $__internal_dbccb21d6a629dfac4129f6a86164c25c25aab60141136c2e0a90f09bcfd1110->leave($__internal_dbccb21d6a629dfac4129f6a86164c25c25aab60141136c2e0a90f09bcfd1110_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
