<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_64de71d2a439b2ef060e1d17eaede87a7ea4a1798b3ae99225cd4fd957b00221 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_7d18d566938731b32f43853c30eeebc8040c5389e51a128fdde4dac7a54a4cc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d18d566938731b32f43853c30eeebc8040c5389e51a128fdde4dac7a54a4cc8->enter($__internal_7d18d566938731b32f43853c30eeebc8040c5389e51a128fdde4dac7a54a4cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_2b2c5b12cb0e2b9a37c6de8fa9999bd989eac6d0d42ede6f6cd3674e247256e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b2c5b12cb0e2b9a37c6de8fa9999bd989eac6d0d42ede6f6cd3674e247256e3->enter($__internal_2b2c5b12cb0e2b9a37c6de8fa9999bd989eac6d0d42ede6f6cd3674e247256e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d18d566938731b32f43853c30eeebc8040c5389e51a128fdde4dac7a54a4cc8->leave($__internal_7d18d566938731b32f43853c30eeebc8040c5389e51a128fdde4dac7a54a4cc8_prof);

        
        $__internal_2b2c5b12cb0e2b9a37c6de8fa9999bd989eac6d0d42ede6f6cd3674e247256e3->leave($__internal_2b2c5b12cb0e2b9a37c6de8fa9999bd989eac6d0d42ede6f6cd3674e247256e3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72ca298ba7c8182d0e48f2a70da2d2aa27b3ca3533ddcba9529049f010ba544d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ca298ba7c8182d0e48f2a70da2d2aa27b3ca3533ddcba9529049f010ba544d->enter($__internal_72ca298ba7c8182d0e48f2a70da2d2aa27b3ca3533ddcba9529049f010ba544d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7e06ea6bccd983667c0f61dddb4a7a19a6977ef9494910762c7d256823798091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e06ea6bccd983667c0f61dddb4a7a19a6977ef9494910762c7d256823798091->enter($__internal_7e06ea6bccd983667c0f61dddb4a7a19a6977ef9494910762c7d256823798091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_7e06ea6bccd983667c0f61dddb4a7a19a6977ef9494910762c7d256823798091->leave($__internal_7e06ea6bccd983667c0f61dddb4a7a19a6977ef9494910762c7d256823798091_prof);

        
        $__internal_72ca298ba7c8182d0e48f2a70da2d2aa27b3ca3533ddcba9529049f010ba544d->leave($__internal_72ca298ba7c8182d0e48f2a70da2d2aa27b3ca3533ddcba9529049f010ba544d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
