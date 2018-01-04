<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_04ec52f1fd1a743d0ffc8b37eb6bc79bfda30d1cef22df8b9de3d589840276fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_327417226a25ad4e7f42a87f38157b5d2ec3d44f9c2fd200a82a0025d0807796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_327417226a25ad4e7f42a87f38157b5d2ec3d44f9c2fd200a82a0025d0807796->enter($__internal_327417226a25ad4e7f42a87f38157b5d2ec3d44f9c2fd200a82a0025d0807796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_1ce0d55f5d16a69c83d471ecde265076dc723539150b4d6c7746f5569920e269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce0d55f5d16a69c83d471ecde265076dc723539150b4d6c7746f5569920e269->enter($__internal_1ce0d55f5d16a69c83d471ecde265076dc723539150b4d6c7746f5569920e269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_327417226a25ad4e7f42a87f38157b5d2ec3d44f9c2fd200a82a0025d0807796->leave($__internal_327417226a25ad4e7f42a87f38157b5d2ec3d44f9c2fd200a82a0025d0807796_prof);

        
        $__internal_1ce0d55f5d16a69c83d471ecde265076dc723539150b4d6c7746f5569920e269->leave($__internal_1ce0d55f5d16a69c83d471ecde265076dc723539150b4d6c7746f5569920e269_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d0c1e5880b96d974e61254cf3639867db05651e5431555bc2afaef89e0e59a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d0c1e5880b96d974e61254cf3639867db05651e5431555bc2afaef89e0e59a3->enter($__internal_2d0c1e5880b96d974e61254cf3639867db05651e5431555bc2afaef89e0e59a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_efe470476e376662a352127a868747cec5307a7155470fdbd01e893890eba986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe470476e376662a352127a868747cec5307a7155470fdbd01e893890eba986->enter($__internal_efe470476e376662a352127a868747cec5307a7155470fdbd01e893890eba986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 8
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_efe470476e376662a352127a868747cec5307a7155470fdbd01e893890eba986->leave($__internal_efe470476e376662a352127a868747cec5307a7155470fdbd01e893890eba986_prof);

        
        $__internal_2d0c1e5880b96d974e61254cf3639867db05651e5431555bc2afaef89e0e59a3->leave($__internal_2d0c1e5880b96d974e61254cf3639867db05651e5431555bc2afaef89e0e59a3_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5f77577f2bbc122689498eb99d37a24b304f434e35c858a53c39ea35a42cd2c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f77577f2bbc122689498eb99d37a24b304f434e35c858a53c39ea35a42cd2c4->enter($__internal_5f77577f2bbc122689498eb99d37a24b304f434e35c858a53c39ea35a42cd2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4d267bb6d25fdc9d6d1d8a0d4da47d8379869bfd4d6555e0e379fad27ac0d5d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d267bb6d25fdc9d6d1d8a0d4da47d8379869bfd4d6555e0e379fad27ac0d5d1->enter($__internal_4d267bb6d25fdc9d6d1d8a0d4da47d8379869bfd4d6555e0e379fad27ac0d5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_4d267bb6d25fdc9d6d1d8a0d4da47d8379869bfd4d6555e0e379fad27ac0d5d1->leave($__internal_4d267bb6d25fdc9d6d1d8a0d4da47d8379869bfd4d6555e0e379fad27ac0d5d1_prof);

        
        $__internal_5f77577f2bbc122689498eb99d37a24b304f434e35c858a53c39ea35a42cd2c4->leave($__internal_5f77577f2bbc122689498eb99d37a24b304f434e35c858a53c39ea35a42cd2c4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 7,  57 => 8,  55 => 7,  50 => 4,  41 => 3,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                {% block fos_user_content %}{% endblock %}
            </div>
        </div>
    </div>
{% endblock %}", "FOSUserBundle::layout.html.twig", "/var/www/html/symfony-stg/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
