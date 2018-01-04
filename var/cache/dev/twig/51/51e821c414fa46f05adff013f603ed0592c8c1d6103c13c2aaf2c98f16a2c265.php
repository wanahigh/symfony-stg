<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_d65b34805ab838f0df5302a522f5e501ad742c0d659d920d25be73bf040a9122 extends Twig_Template
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
        $__internal_fc226c965a6592d85b2d1ce5e26365c9802ec70fd99b2c4a68343f416c0c1f35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc226c965a6592d85b2d1ce5e26365c9802ec70fd99b2c4a68343f416c0c1f35->enter($__internal_fc226c965a6592d85b2d1ce5e26365c9802ec70fd99b2c4a68343f416c0c1f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_a7bd9b3eda2f9f1108b64294f74b0db73854ec4bf11ca75b3a6cc569182d0193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7bd9b3eda2f9f1108b64294f74b0db73854ec4bf11ca75b3a6cc569182d0193->enter($__internal_a7bd9b3eda2f9f1108b64294f74b0db73854ec4bf11ca75b3a6cc569182d0193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_fc226c965a6592d85b2d1ce5e26365c9802ec70fd99b2c4a68343f416c0c1f35->leave($__internal_fc226c965a6592d85b2d1ce5e26365c9802ec70fd99b2c4a68343f416c0c1f35_prof);

        
        $__internal_a7bd9b3eda2f9f1108b64294f74b0db73854ec4bf11ca75b3a6cc569182d0193->leave($__internal_a7bd9b3eda2f9f1108b64294f74b0db73854ec4bf11ca75b3a6cc569182d0193_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/var/www/html/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
