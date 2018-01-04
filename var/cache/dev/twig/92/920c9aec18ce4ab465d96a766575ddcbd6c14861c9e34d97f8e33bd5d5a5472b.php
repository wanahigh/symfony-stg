<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_d2f5003526ccf57be8962b4ecabf325668092d88fb1c876d4536a433c6e0112f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_5989c882dc1872f910a75705553a431247eb1c121ba5cc1d4b3f8097ba729cb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5989c882dc1872f910a75705553a431247eb1c121ba5cc1d4b3f8097ba729cb7->enter($__internal_5989c882dc1872f910a75705553a431247eb1c121ba5cc1d4b3f8097ba729cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_c13cc31afe7a6059915b2e21f1bb7e381d550f4d4f89f97547f34cc5310f08a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c13cc31afe7a6059915b2e21f1bb7e381d550f4d4f89f97547f34cc5310f08a9->enter($__internal_c13cc31afe7a6059915b2e21f1bb7e381d550f4d4f89f97547f34cc5310f08a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5989c882dc1872f910a75705553a431247eb1c121ba5cc1d4b3f8097ba729cb7->leave($__internal_5989c882dc1872f910a75705553a431247eb1c121ba5cc1d4b3f8097ba729cb7_prof);

        
        $__internal_c13cc31afe7a6059915b2e21f1bb7e381d550f4d4f89f97547f34cc5310f08a9->leave($__internal_c13cc31afe7a6059915b2e21f1bb7e381d550f4d4f89f97547f34cc5310f08a9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49156f21e6d70734c37a1a4af49480187bab034281e9609b2adb819fa476f344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49156f21e6d70734c37a1a4af49480187bab034281e9609b2adb819fa476f344->enter($__internal_49156f21e6d70734c37a1a4af49480187bab034281e9609b2adb819fa476f344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8a0b7eef690450b708e8dbf52a52a50f4a86f45cdaea556feb74c366140d1d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0b7eef690450b708e8dbf52a52a50f4a86f45cdaea556feb74c366140d1d4f->enter($__internal_8a0b7eef690450b708e8dbf52a52a50f4a86f45cdaea556feb74c366140d1d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_8a0b7eef690450b708e8dbf52a52a50f4a86f45cdaea556feb74c366140d1d4f->leave($__internal_8a0b7eef690450b708e8dbf52a52a50f4a86f45cdaea556feb74c366140d1d4f_prof);

        
        $__internal_49156f21e6d70734c37a1a4af49480187bab034281e9609b2adb819fa476f344->leave($__internal_49156f21e6d70734c37a1a4af49480187bab034281e9609b2adb819fa476f344_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
