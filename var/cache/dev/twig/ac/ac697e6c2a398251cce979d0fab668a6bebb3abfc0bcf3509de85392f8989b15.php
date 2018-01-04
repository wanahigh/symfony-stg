<?php

/* :entity/actor:edit.html.twig */
class __TwigTemplate_022a5e71a19d0c3ca46172f8d2dcd15ef011b7677827ca9c8a830a883f02f137 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":entity/actor:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6cfb327b1606b0998c6c8ddc403a0ef51c4cbc61aafc0451a04bb6e28cf88be9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cfb327b1606b0998c6c8ddc403a0ef51c4cbc61aafc0451a04bb6e28cf88be9->enter($__internal_6cfb327b1606b0998c6c8ddc403a0ef51c4cbc61aafc0451a04bb6e28cf88be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":entity/actor:edit.html.twig"));

        $__internal_7aed5f0ad581b5dd55d164a74b973dea7a0e329f022f08382fc2537e9f3cd343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aed5f0ad581b5dd55d164a74b973dea7a0e329f022f08382fc2537e9f3cd343->enter($__internal_7aed5f0ad581b5dd55d164a74b973dea7a0e329f022f08382fc2537e9f3cd343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":entity/actor:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cfb327b1606b0998c6c8ddc403a0ef51c4cbc61aafc0451a04bb6e28cf88be9->leave($__internal_6cfb327b1606b0998c6c8ddc403a0ef51c4cbc61aafc0451a04bb6e28cf88be9_prof);

        
        $__internal_7aed5f0ad581b5dd55d164a74b973dea7a0e329f022f08382fc2537e9f3cd343->leave($__internal_7aed5f0ad581b5dd55d164a74b973dea7a0e329f022f08382fc2537e9f3cd343_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef2ec1c228a65d739ef049c28389544202e33fa47c0e35af53b8a168c90d6c06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef2ec1c228a65d739ef049c28389544202e33fa47c0e35af53b8a168c90d6c06->enter($__internal_ef2ec1c228a65d739ef049c28389544202e33fa47c0e35af53b8a168c90d6c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0435eb1724e3201b78a8300a95da4de583a7db20f00ad6de8ebf5bc396591837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0435eb1724e3201b78a8300a95da4de583a7db20f00ad6de8ebf5bc396591837->enter($__internal_0435eb1724e3201b78a8300a95da4de583a7db20f00ad6de8ebf5bc396591837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Actor edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_actor_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 16, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 18, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0435eb1724e3201b78a8300a95da4de583a7db20f00ad6de8ebf5bc396591837->leave($__internal_0435eb1724e3201b78a8300a95da4de583a7db20f00ad6de8ebf5bc396591837_prof);

        
        $__internal_ef2ec1c228a65d739ef049c28389544202e33fa47c0e35af53b8a168c90d6c06->leave($__internal_ef2ec1c228a65d739ef049c28389544202e33fa47c0e35af53b8a168c90d6c06_prof);

    }

    public function getTemplateName()
    {
        return ":entity/actor:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Actor edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('entity_actor_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":entity/actor:edit.html.twig", "/var/www/html/symfony-stg/app/Resources/views/entity/actor/edit.html.twig");
    }
}
