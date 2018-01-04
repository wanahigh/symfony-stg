<?php

/* :entity/advert:index.html.twig */
class __TwigTemplate_0b1dc928782da14dc5554a08c85320d26a872183ac60f0ddee24f2d3f3dd4a0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":entity/advert:index.html.twig", 1);
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
        $__internal_83aca1e7f602d30ce4b6a1dddc18dac672cd8000818bd05e5e6fc2bfb8775f75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83aca1e7f602d30ce4b6a1dddc18dac672cd8000818bd05e5e6fc2bfb8775f75->enter($__internal_83aca1e7f602d30ce4b6a1dddc18dac672cd8000818bd05e5e6fc2bfb8775f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":entity/advert:index.html.twig"));

        $__internal_0b2b499ef348d9e175e7ebb9981d90ec84f9792ccae56b9606e1bca0f4aaad3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b2b499ef348d9e175e7ebb9981d90ec84f9792ccae56b9606e1bca0f4aaad3c->enter($__internal_0b2b499ef348d9e175e7ebb9981d90ec84f9792ccae56b9606e1bca0f4aaad3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":entity/advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83aca1e7f602d30ce4b6a1dddc18dac672cd8000818bd05e5e6fc2bfb8775f75->leave($__internal_83aca1e7f602d30ce4b6a1dddc18dac672cd8000818bd05e5e6fc2bfb8775f75_prof);

        
        $__internal_0b2b499ef348d9e175e7ebb9981d90ec84f9792ccae56b9606e1bca0f4aaad3c->leave($__internal_0b2b499ef348d9e175e7ebb9981d90ec84f9792ccae56b9606e1bca0f4aaad3c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6e100431eb6ba8fe91df33b7a69f47a9c333051e1a74cc9a169b3628e0781c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6e100431eb6ba8fe91df33b7a69f47a9c333051e1a74cc9a169b3628e0781c8->enter($__internal_a6e100431eb6ba8fe91df33b7a69f47a9c333051e1a74cc9a169b3628e0781c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0849fc3f39fd90390dc1dd4de41a4b136d8f4878cd18f6194d852b2c50b4d0ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0849fc3f39fd90390dc1dd4de41a4b136d8f4878cd18f6194d852b2c50b4d0ca->enter($__internal_0849fc3f39fd90390dc1dd4de41a4b136d8f4878cd18f6194d852b2c50b4d0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div style=\"margin-left: 12.5%;\" class=\" container\">
    <h1>L'Actualité</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Title</th>
                <th>Author</th>
                <th>Content</th>
                <th>Image</th>
                <th>Categories</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class=\"card panel\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adverts"]) || array_key_exists("adverts", $context) ? $context["adverts"] : (function () { throw new Twig_Error_Runtime('Variable "adverts" does not exist.', 22, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 23
            echo "            <tr>
                <td><img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "image", array()))), "html", null, true);
            echo "\" height=\"150px\" width=\"300px\" ></td>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_advert_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "date", array()), "Y-m-d H"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "author", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "content", array()), "html", null, true);
            echo "</td>

                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "categories", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a class=\"btn-large blue\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_advert_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>

                            <a class=\"btn-large red\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_advert_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">edit</a>


                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
        <hr>
    </table>

    <ul>
        <li>
            <a class=\"btn-large blue\" href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_advert_new");
        echo "\">New</a>
        </li>
    </ul>
</div>
</div>

    <div class=\"text-center\">";
        // line 59
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["adverts"]) || array_key_exists("adverts", $context) ? $context["adverts"] : (function () { throw new Twig_Error_Runtime('Variable "adverts" does not exist.', 59, $this->getSourceContext()); })()));
        echo "</div>
";
        
        $__internal_0849fc3f39fd90390dc1dd4de41a4b136d8f4878cd18f6194d852b2c50b4d0ca->leave($__internal_0849fc3f39fd90390dc1dd4de41a4b136d8f4878cd18f6194d852b2c50b4d0ca_prof);

        
        $__internal_a6e100431eb6ba8fe91df33b7a69f47a9c333051e1a74cc9a169b3628e0781c8->leave($__internal_a6e100431eb6ba8fe91df33b7a69f47a9c333051e1a74cc9a169b3628e0781c8_prof);

    }

    public function getTemplateName()
    {
        return ":entity/advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 59,  141 => 53,  133 => 47,  119 => 39,  112 => 35,  105 => 31,  100 => 29,  96 => 28,  92 => 27,  86 => 26,  80 => 25,  76 => 24,  73 => 23,  69 => 22,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div style=\"margin-left: 12.5%;\" class=\" container\">
    <h1>L'Actualité</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Title</th>
                <th>Author</th>
                <th>Content</th>
                <th>Image</th>
                <th>Categories</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class=\"card panel\">
        {% for advert in adverts %}
            <tr>
                <td><img src=\"{{ asset('uploads/images/' ~ advert.image) }}\" height=\"150px\" width=\"300px\" ></td>
                <td><a href=\"{{ path('entity_advert_show', { 'id': advert.id }) }}\">{{ advert.id }}</a></td>
                <td>{% if advert.date %}{{ advert.date|date('Y-m-d H') }}{% endif %}</td>
                <td>{{ advert.title }}</td>
                <td>{{ advert.author }}</td>
                <td>{{ advert.content }}</td>

                <td>{{ advert.categories }}</td>
                <td>
                    <ul>
                        <li>
                            <a class=\"btn-large blue\" href=\"{{ path('entity_advert_show', { 'id': advert.id }) }}\">show</a>
                        </li>
                        <li>

                            <a class=\"btn-large red\" href=\"{{ path('entity_advert_edit', { 'id': advert.id }) }}\">edit</a>


                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
        <hr>
    </table>

    <ul>
        <li>
            <a class=\"btn-large blue\" href=\"{{ path('entity_advert_new') }}\">New</a>
        </li>
    </ul>
</div>
</div>

    <div class=\"text-center\">{{ knp_pagination_render(adverts) }}</div>
{% endblock %}
", ":entity/advert:index.html.twig", "/var/www/html/symfony-stg/app/Resources/views/entity/advert/index.html.twig");
    }
}
