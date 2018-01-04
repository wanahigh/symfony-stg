<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_3e05d7520b63b701d28f8f44b7587b08b4fa4348a85b70200c05798439c06c73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_44b9ccee7742acb3d3639be4eb7ad2bc65ba0cc5de26b04c2e685b1e7c4d4745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44b9ccee7742acb3d3639be4eb7ad2bc65ba0cc5de26b04c2e685b1e7c4d4745->enter($__internal_44b9ccee7742acb3d3639be4eb7ad2bc65ba0cc5de26b04c2e685b1e7c4d4745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_289d00e322fdef338d27fba638e179b86f3c1aaef1cd972f463de5311acc1afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_289d00e322fdef338d27fba638e179b86f3c1aaef1cd972f463de5311acc1afc->enter($__internal_289d00e322fdef338d27fba638e179b86f3c1aaef1cd972f463de5311acc1afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44b9ccee7742acb3d3639be4eb7ad2bc65ba0cc5de26b04c2e685b1e7c4d4745->leave($__internal_44b9ccee7742acb3d3639be4eb7ad2bc65ba0cc5de26b04c2e685b1e7c4d4745_prof);

        
        $__internal_289d00e322fdef338d27fba638e179b86f3c1aaef1cd972f463de5311acc1afc->leave($__internal_289d00e322fdef338d27fba638e179b86f3c1aaef1cd972f463de5311acc1afc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bcb1129d27f4d9e514b31e9b15fbf24458e0f66bab52f35e461aeccaa64c8f21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcb1129d27f4d9e514b31e9b15fbf24458e0f66bab52f35e461aeccaa64c8f21->enter($__internal_bcb1129d27f4d9e514b31e9b15fbf24458e0f66bab52f35e461aeccaa64c8f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9676db72466c2549491b82c225ea6d37aea86f07df514ad963390415d7c56121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9676db72466c2549491b82c225ea6d37aea86f07df514ad963390415d7c56121->enter($__internal_9676db72466c2549491b82c225ea6d37aea86f07df514ad963390415d7c56121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_9676db72466c2549491b82c225ea6d37aea86f07df514ad963390415d7c56121->leave($__internal_9676db72466c2549491b82c225ea6d37aea86f07df514ad963390415d7c56121_prof);

        
        $__internal_bcb1129d27f4d9e514b31e9b15fbf24458e0f66bab52f35e461aeccaa64c8f21->leave($__internal_bcb1129d27f4d9e514b31e9b15fbf24458e0f66bab52f35e461aeccaa64c8f21_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
