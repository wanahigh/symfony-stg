<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_45c160ac14c11f39af7d736bbcfa18355eaf7a08940508d698cc4c95a25fb071 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_b2b8faf69a9fb273bdfca3a293c8051517d368e766362714ae87aeea7b047130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2b8faf69a9fb273bdfca3a293c8051517d368e766362714ae87aeea7b047130->enter($__internal_b2b8faf69a9fb273bdfca3a293c8051517d368e766362714ae87aeea7b047130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_1f3ad5ac3b3a989fa2376025d6e35049705ad1078c2faaf59670612a93547a55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f3ad5ac3b3a989fa2376025d6e35049705ad1078c2faaf59670612a93547a55->enter($__internal_1f3ad5ac3b3a989fa2376025d6e35049705ad1078c2faaf59670612a93547a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2b8faf69a9fb273bdfca3a293c8051517d368e766362714ae87aeea7b047130->leave($__internal_b2b8faf69a9fb273bdfca3a293c8051517d368e766362714ae87aeea7b047130_prof);

        
        $__internal_1f3ad5ac3b3a989fa2376025d6e35049705ad1078c2faaf59670612a93547a55->leave($__internal_1f3ad5ac3b3a989fa2376025d6e35049705ad1078c2faaf59670612a93547a55_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d27ccebd0db29c17723db734143febe0dc8ff4df970c4636550ec97d8867ee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d27ccebd0db29c17723db734143febe0dc8ff4df970c4636550ec97d8867ee0->enter($__internal_7d27ccebd0db29c17723db734143febe0dc8ff4df970c4636550ec97d8867ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_034c0ff432681773775199e1cdf5d944b7762398aa58b5c5b9ccaa653fc1d28c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034c0ff432681773775199e1cdf5d944b7762398aa58b5c5b9ccaa653fc1d28c->enter($__internal_034c0ff432681773775199e1cdf5d944b7762398aa58b5c5b9ccaa653fc1d28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_034c0ff432681773775199e1cdf5d944b7762398aa58b5c5b9ccaa653fc1d28c->leave($__internal_034c0ff432681773775199e1cdf5d944b7762398aa58b5c5b9ccaa653fc1d28c_prof);

        
        $__internal_7d27ccebd0db29c17723db734143febe0dc8ff4df970c4636550ec97d8867ee0->leave($__internal_7d27ccebd0db29c17723db734143febe0dc8ff4df970c4636550ec97d8867ee0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/html/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
