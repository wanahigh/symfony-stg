<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_204ead343281ac2d45e22d46fafbb21f398b54cb397ed56fa9a34ad58834bd4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_9f2d49d3fc9f77b5a8ec9483a9e1ee296ee39e5eb378605345e77139a91698b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f2d49d3fc9f77b5a8ec9483a9e1ee296ee39e5eb378605345e77139a91698b3->enter($__internal_9f2d49d3fc9f77b5a8ec9483a9e1ee296ee39e5eb378605345e77139a91698b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_de34df056cabe2da00869e8e27d53ee18c3ccb282c779fcc472a4d31f8dbba50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de34df056cabe2da00869e8e27d53ee18c3ccb282c779fcc472a4d31f8dbba50->enter($__internal_de34df056cabe2da00869e8e27d53ee18c3ccb282c779fcc472a4d31f8dbba50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f2d49d3fc9f77b5a8ec9483a9e1ee296ee39e5eb378605345e77139a91698b3->leave($__internal_9f2d49d3fc9f77b5a8ec9483a9e1ee296ee39e5eb378605345e77139a91698b3_prof);

        
        $__internal_de34df056cabe2da00869e8e27d53ee18c3ccb282c779fcc472a4d31f8dbba50->leave($__internal_de34df056cabe2da00869e8e27d53ee18c3ccb282c779fcc472a4d31f8dbba50_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d4f88a30a6e4cb20abdfd9e7df44e1be14d51157f2c3908f9aa52739f1e8569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d4f88a30a6e4cb20abdfd9e7df44e1be14d51157f2c3908f9aa52739f1e8569->enter($__internal_0d4f88a30a6e4cb20abdfd9e7df44e1be14d51157f2c3908f9aa52739f1e8569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_866fb66a8cb2973455428d7d118adbfe592e7b8de60ec3c4b91facea3fefd5f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_866fb66a8cb2973455428d7d118adbfe592e7b8de60ec3c4b91facea3fefd5f7->enter($__internal_866fb66a8cb2973455428d7d118adbfe592e7b8de60ec3c4b91facea3fefd5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_866fb66a8cb2973455428d7d118adbfe592e7b8de60ec3c4b91facea3fefd5f7->leave($__internal_866fb66a8cb2973455428d7d118adbfe592e7b8de60ec3c4b91facea3fefd5f7_prof);

        
        $__internal_0d4f88a30a6e4cb20abdfd9e7df44e1be14d51157f2c3908f9aa52739f1e8569->leave($__internal_0d4f88a30a6e4cb20abdfd9e7df44e1be14d51157f2c3908f9aa52739f1e8569_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/html/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
