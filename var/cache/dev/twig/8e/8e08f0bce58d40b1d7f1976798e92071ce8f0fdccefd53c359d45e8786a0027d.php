<?php

/* :entity/actor:index.html.twig */
class __TwigTemplate_d2275578af88afb3207a79dfb66be49410a7008b4c349ad1d18ee62022db9ca9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":entity/actor:index.html.twig", 1);
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
        $__internal_ca51cac29d46ffb770fcc4fc0ae36ba5e0e3ad0e3f1416afbf720dc9f7ad0cf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca51cac29d46ffb770fcc4fc0ae36ba5e0e3ad0e3f1416afbf720dc9f7ad0cf4->enter($__internal_ca51cac29d46ffb770fcc4fc0ae36ba5e0e3ad0e3f1416afbf720dc9f7ad0cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":entity/actor:index.html.twig"));

        $__internal_d7663101be4b5edfec844504675b2fa4fc6eefe7ef3f1f5a8a31225bf191ab67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7663101be4b5edfec844504675b2fa4fc6eefe7ef3f1f5a8a31225bf191ab67->enter($__internal_d7663101be4b5edfec844504675b2fa4fc6eefe7ef3f1f5a8a31225bf191ab67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":entity/actor:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca51cac29d46ffb770fcc4fc0ae36ba5e0e3ad0e3f1416afbf720dc9f7ad0cf4->leave($__internal_ca51cac29d46ffb770fcc4fc0ae36ba5e0e3ad0e3f1416afbf720dc9f7ad0cf4_prof);

        
        $__internal_d7663101be4b5edfec844504675b2fa4fc6eefe7ef3f1f5a8a31225bf191ab67->leave($__internal_d7663101be4b5edfec844504675b2fa4fc6eefe7ef3f1f5a8a31225bf191ab67_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d687bd9d310876ecd018f0df150e976365d5c1e82d3ca73393e0ae00d33f2d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d687bd9d310876ecd018f0df150e976365d5c1e82d3ca73393e0ae00d33f2d4a->enter($__internal_d687bd9d310876ecd018f0df150e976365d5c1e82d3ca73393e0ae00d33f2d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_062f7c5c88c7032d05b7b8b89f7bd70ca26921599211a6fb73861acd1a02a19c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062f7c5c88c7032d05b7b8b89f7bd70ca26921599211a6fb73861acd1a02a19c->enter($__internal_062f7c5c88c7032d05b7b8b89f7bd70ca26921599211a6fb73861acd1a02a19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Actors list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Entreprise</th>
                <th>Categories</th>
                <th>Dirigeant</th>
                <th>Adresse</th>
                <th>Tel</th>
                <th>Email</th>
                <th>Siteweb</th>
                <th>Facebook</th>
                <th>Linkedin</th>
                <th>Twitter</th>
                <th>Instagram</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actors"]) || array_key_exists("actors", $context) ? $context["actors"] : (function () { throw new Twig_Error_Runtime('Variable "actors" does not exist.', 25, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 26
            echo "            <tr>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_actor_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "entreprise", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "categories", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "dirigeant", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "tel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "siteweb", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "facebook", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "linkedin", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "twitter", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "instagram", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_actor_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_actor_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_actor_new");
        echo "\">Create a new actor</a>
        </li>
    </ul>
";
        
        $__internal_062f7c5c88c7032d05b7b8b89f7bd70ca26921599211a6fb73861acd1a02a19c->leave($__internal_062f7c5c88c7032d05b7b8b89f7bd70ca26921599211a6fb73861acd1a02a19c_prof);

        
        $__internal_d687bd9d310876ecd018f0df150e976365d5c1e82d3ca73393e0ae00d33f2d4a->leave($__internal_d687bd9d310876ecd018f0df150e976365d5c1e82d3ca73393e0ae00d33f2d4a_prof);

    }

    public function getTemplateName()
    {
        return ":entity/actor:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 56,  150 => 51,  138 => 45,  132 => 42,  125 => 38,  121 => 37,  117 => 36,  113 => 35,  109 => 34,  105 => 33,  101 => 32,  97 => 31,  93 => 30,  89 => 29,  85 => 28,  79 => 27,  76 => 26,  72 => 25,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Actors list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Entreprise</th>
                <th>Categories</th>
                <th>Dirigeant</th>
                <th>Adresse</th>
                <th>Tel</th>
                <th>Email</th>
                <th>Siteweb</th>
                <th>Facebook</th>
                <th>Linkedin</th>
                <th>Twitter</th>
                <th>Instagram</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for actor in actors %}
            <tr>
                <td><a href=\"{{ path('entity_actor_show', { 'id': actor.id }) }}\">{{ actor.id }}</a></td>
                <td>{{ actor.entreprise }}</td>
                <td>{{ actor.categories }}</td>
                <td>{{ actor.dirigeant }}</td>
                <td>{{ actor.adresse }}</td>
                <td>{{ actor.tel }}</td>
                <td>{{ actor.email }}</td>
                <td>{{ actor.siteweb }}</td>
                <td>{{ actor.facebook }}</td>
                <td>{{ actor.linkedin }}</td>
                <td>{{ actor.twitter }}</td>
                <td>{{ actor.instagram }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('entity_actor_show', { 'id': actor.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('entity_actor_edit', { 'id': actor.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('entity_actor_new') }}\">Create a new actor</a>
        </li>
    </ul>
{% endblock %}
", ":entity/actor:index.html.twig", "/var/www/html/symfony-stg/app/Resources/views/entity/actor/index.html.twig");
    }
}
