<?php

/* :entity/advert:show.html.twig */
class __TwigTemplate_5219760057d600ff9c4d74546afe642fa270715f0f6f1a1232712020e3c0fa04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":entity/advert:show.html.twig", 1);
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
        $__internal_03aa2181975c1e8caae40bff504f992c2cf1b386254e4fdcf5382cc573ce2cac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03aa2181975c1e8caae40bff504f992c2cf1b386254e4fdcf5382cc573ce2cac->enter($__internal_03aa2181975c1e8caae40bff504f992c2cf1b386254e4fdcf5382cc573ce2cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":entity/advert:show.html.twig"));

        $__internal_275785d73ac6f58de3b3bb3540d3d2f2ee465ce954852223301aca5d5fb89f08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275785d73ac6f58de3b3bb3540d3d2f2ee465ce954852223301aca5d5fb89f08->enter($__internal_275785d73ac6f58de3b3bb3540d3d2f2ee465ce954852223301aca5d5fb89f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":entity/advert:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03aa2181975c1e8caae40bff504f992c2cf1b386254e4fdcf5382cc573ce2cac->leave($__internal_03aa2181975c1e8caae40bff504f992c2cf1b386254e4fdcf5382cc573ce2cac_prof);

        
        $__internal_275785d73ac6f58de3b3bb3540d3d2f2ee465ce954852223301aca5d5fb89f08->leave($__internal_275785d73ac6f58de3b3bb3540d3d2f2ee465ce954852223301aca5d5fb89f08_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c5db44b00963029368a466a38d4bdd6999c6a92cc9969ff2b4fc9232c753ea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c5db44b00963029368a466a38d4bdd6999c6a92cc9969ff2b4fc9232c753ea9->enter($__internal_1c5db44b00963029368a466a38d4bdd6999c6a92cc9969ff2b4fc9232c753ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bcb212bb5f13cf1ebaa65e83345ab664b85faa296630fd6aab4e72175f47500f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb212bb5f13cf1ebaa65e83345ab664b85faa296630fd6aab4e72175f47500f->enter($__internal_bcb212bb5f13cf1ebaa65e83345ab664b85faa296630fd6aab4e72175f47500f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Advert</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 14
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 14, $this->getSourceContext()); })()), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 14, $this->getSourceContext()); })()), "date", array()), "Y-m-d H:i"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 18, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Author</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 22, $this->getSourceContext()); })()), "author", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 26, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 30, $this->getSourceContext()); })()), "image", array()))), "html", null, true);
        echo "\" height=\"100px\" width=\"250px\"></td>
            </tr>
            <tr>
                <th>Categories</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 34, $this->getSourceContext()); })()), "categories", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_advert_index");
        echo "\" class=\"btn-large blue\" >retour</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_advert_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 44, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 47, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 49, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_bcb212bb5f13cf1ebaa65e83345ab664b85faa296630fd6aab4e72175f47500f->leave($__internal_bcb212bb5f13cf1ebaa65e83345ab664b85faa296630fd6aab4e72175f47500f_prof);

        
        $__internal_1c5db44b00963029368a466a38d4bdd6999c6a92cc9969ff2b4fc9232c753ea9->leave($__internal_1c5db44b00963029368a466a38d4bdd6999c6a92cc9969ff2b4fc9232c753ea9_prof);

    }

    public function getTemplateName()
    {
        return ":entity/advert:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 49,  123 => 47,  117 => 44,  111 => 41,  101 => 34,  94 => 30,  87 => 26,  80 => 22,  73 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Advert</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ advert.id }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if advert.date %}{{ advert.date|date('Y-m-d H:i') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ advert.title }}</td>
            </tr>
            <tr>
                <th>Author</th>
                <td>{{ advert.author }}</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>{{ advert.content }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td><img src=\"{{ asset('uploads/images/' ~ advert.image) }}\" height=\"100px\" width=\"250px\"></td>
            </tr>
            <tr>
                <th>Categories</th>
                <td>{{ advert.categories }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('entity_advert_index') }}\" class=\"btn-large blue\" >retour</a>
        </li>
        <li>
            <a href=\"{{ path('entity_advert_edit', { 'id': advert.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":entity/advert:show.html.twig", "/var/www/html/symfony-stg/app/Resources/views/entity/advert/show.html.twig");
    }
}
