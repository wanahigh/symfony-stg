<?php

/* :entity/actor:show.html.twig */
class __TwigTemplate_230271f5c77c4a6282f49a38754e6d99510c3a067807fe645388631a226bdf45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":entity/actor:show.html.twig", 1);
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
        $__internal_68c598e60cfbae76faafa11d4c475d40fd1f8cd424ae7203d259ec8bb90d38a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68c598e60cfbae76faafa11d4c475d40fd1f8cd424ae7203d259ec8bb90d38a0->enter($__internal_68c598e60cfbae76faafa11d4c475d40fd1f8cd424ae7203d259ec8bb90d38a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":entity/actor:show.html.twig"));

        $__internal_ced05289e8164d530c91e2ad52e8c6717b69dbe6b6cafed4e85d67acc420e5c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced05289e8164d530c91e2ad52e8c6717b69dbe6b6cafed4e85d67acc420e5c5->enter($__internal_ced05289e8164d530c91e2ad52e8c6717b69dbe6b6cafed4e85d67acc420e5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":entity/actor:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68c598e60cfbae76faafa11d4c475d40fd1f8cd424ae7203d259ec8bb90d38a0->leave($__internal_68c598e60cfbae76faafa11d4c475d40fd1f8cd424ae7203d259ec8bb90d38a0_prof);

        
        $__internal_ced05289e8164d530c91e2ad52e8c6717b69dbe6b6cafed4e85d67acc420e5c5->leave($__internal_ced05289e8164d530c91e2ad52e8c6717b69dbe6b6cafed4e85d67acc420e5c5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa938f048f67c1aa613378e31e036604a9975d69b13c8ae8f5d9090c564c0bfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa938f048f67c1aa613378e31e036604a9975d69b13c8ae8f5d9090c564c0bfb->enter($__internal_aa938f048f67c1aa613378e31e036604a9975d69b13c8ae8f5d9090c564c0bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73c772cdd3ffd9572fe1bd979a89f2fa87e0d6276cb1b3c5a45fa5c4ae39d58f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c772cdd3ffd9572fe1bd979a89f2fa87e0d6276cb1b3c5a45fa5c4ae39d58f->enter($__internal_73c772cdd3ffd9572fe1bd979a89f2fa87e0d6276cb1b3c5a45fa5c4ae39d58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Actor</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Entreprise</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 14, $this->getSourceContext()); })()), "entreprise", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Categories</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 18, $this->getSourceContext()); })()), "categories", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dirigeant</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 22, $this->getSourceContext()); })()), "dirigeant", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 26, $this->getSourceContext()); })()), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 30, $this->getSourceContext()); })()), "tel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 34, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Siteweb</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 38, $this->getSourceContext()); })()), "siteweb", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Facebook</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 42, $this->getSourceContext()); })()), "facebook", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Linkedin</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 46, $this->getSourceContext()); })()), "linkedin", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Twitter</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 50, $this->getSourceContext()); })()), "twitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Instagram</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 54, $this->getSourceContext()); })()), "instagram", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_actor_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_actor_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 64, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 67, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 69, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_73c772cdd3ffd9572fe1bd979a89f2fa87e0d6276cb1b3c5a45fa5c4ae39d58f->leave($__internal_73c772cdd3ffd9572fe1bd979a89f2fa87e0d6276cb1b3c5a45fa5c4ae39d58f_prof);

        
        $__internal_aa938f048f67c1aa613378e31e036604a9975d69b13c8ae8f5d9090c564c0bfb->leave($__internal_aa938f048f67c1aa613378e31e036604a9975d69b13c8ae8f5d9090c564c0bfb_prof);

    }

    public function getTemplateName()
    {
        return ":entity/actor:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 69,  156 => 67,  150 => 64,  144 => 61,  134 => 54,  127 => 50,  120 => 46,  113 => 42,  106 => 38,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Actor</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ actor.id }}</td>
            </tr>
            <tr>
                <th>Entreprise</th>
                <td>{{ actor.entreprise }}</td>
            </tr>
            <tr>
                <th>Categories</th>
                <td>{{ actor.categories }}</td>
            </tr>
            <tr>
                <th>Dirigeant</th>
                <td>{{ actor.dirigeant }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ actor.adresse }}</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>{{ actor.tel }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ actor.email }}</td>
            </tr>
            <tr>
                <th>Siteweb</th>
                <td>{{ actor.siteweb }}</td>
            </tr>
            <tr>
                <th>Facebook</th>
                <td>{{ actor.facebook }}</td>
            </tr>
            <tr>
                <th>Linkedin</th>
                <td>{{ actor.linkedin }}</td>
            </tr>
            <tr>
                <th>Twitter</th>
                <td>{{ actor.twitter }}</td>
            </tr>
            <tr>
                <th>Instagram</th>
                <td>{{ actor.instagram }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('entity_actor_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('entity_actor_edit', { 'id': actor.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":entity/actor:show.html.twig", "/var/www/html/symfony-stg/app/Resources/views/entity/actor/show.html.twig");
    }
}
