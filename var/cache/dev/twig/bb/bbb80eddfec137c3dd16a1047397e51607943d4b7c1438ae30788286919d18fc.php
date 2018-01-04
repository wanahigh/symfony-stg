<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_f09ad41d9080f8c3effa74ddfdf3155c310649c9013c23f3fb3d3a61b9f16d6b extends Twig_Template
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
        $__internal_37a1bb10575578564db044e94c98f9c3c7a4c9507af86ec912856cc9b28a7c55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a1bb10575578564db044e94c98f9c3c7a4c9507af86ec912856cc9b28a7c55->enter($__internal_37a1bb10575578564db044e94c98f9c3c7a4c9507af86ec912856cc9b28a7c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        $__internal_bbdab9dc130ee4d4f41a0f556754a1f9ebc3c3278b8b229e1b8d714a136afcaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbdab9dc130ee4d4f41a0f556754a1f9ebc3c3278b8b229e1b8d714a136afcaf->enter($__internal_bbdab9dc130ee4d4f41a0f556754a1f9ebc3c3278b8b229e1b8d714a136afcaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>
";
        
        $__internal_37a1bb10575578564db044e94c98f9c3c7a4c9507af86ec912856cc9b28a7c55->leave($__internal_37a1bb10575578564db044e94c98f9c3c7a4c9507af86ec912856cc9b28a7c55_prof);

        
        $__internal_bbdab9dc130ee4d4f41a0f556754a1f9ebc3c3278b8b229e1b8d714a136afcaf->leave($__internal_bbdab9dc130ee4d4f41a0f556754a1f9ebc3c3278b8b229e1b8d714a136afcaf_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>{{ title }}</a>
", "KnpPaginatorBundle:Pagination:sortable_link.html.twig", "/var/www/html/symfony-stg/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/sortable_link.html.twig");
    }
}
