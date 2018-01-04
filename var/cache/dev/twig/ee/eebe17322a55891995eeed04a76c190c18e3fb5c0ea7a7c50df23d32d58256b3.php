<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_4b5a2feab9f13dee6644fc99851c9a24d62afaf023c63529e3a8667b8ba858b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_458d78bbf77c0a6b4c61a08e3315985adb196d877e23e82a465334277789dbc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_458d78bbf77c0a6b4c61a08e3315985adb196d877e23e82a465334277789dbc3->enter($__internal_458d78bbf77c0a6b4c61a08e3315985adb196d877e23e82a465334277789dbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_7c90d6112d1e631efbdbb3e271659d79aa8a4d34dd8b0a209470f0e931267c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c90d6112d1e631efbdbb3e271659d79aa8a4d34dd8b0a209470f0e931267c85->enter($__internal_7c90d6112d1e631efbdbb3e271659d79aa8a4d34dd8b0a209470f0e931267c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_458d78bbf77c0a6b4c61a08e3315985adb196d877e23e82a465334277789dbc3->leave($__internal_458d78bbf77c0a6b4c61a08e3315985adb196d877e23e82a465334277789dbc3_prof);

        
        $__internal_7c90d6112d1e631efbdbb3e271659d79aa8a4d34dd8b0a209470f0e931267c85->leave($__internal_7c90d6112d1e631efbdbb3e271659d79aa8a4d34dd8b0a209470f0e931267c85_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/var/www/html/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
