<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_1546fa98e502b0cb7a78e5b04481f43ee64435e2178b052fe3a21f64610345b1 extends Twig_Template
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
        $__internal_863fb4da4324322b1cf22df5bfd56392192fae72ba2b3a64720b689e8115bb4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_863fb4da4324322b1cf22df5bfd56392192fae72ba2b3a64720b689e8115bb4e->enter($__internal_863fb4da4324322b1cf22df5bfd56392192fae72ba2b3a64720b689e8115bb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_cea7c47f785d297e99a7c82d72ce00ba96e3b45471bb5c751a0bcffc883a6c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea7c47f785d297e99a7c82d72ce00ba96e3b45471bb5c751a0bcffc883a6c32->enter($__internal_cea7c47f785d297e99a7c82d72ce00ba96e3b45471bb5c751a0bcffc883a6c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 3, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_863fb4da4324322b1cf22df5bfd56392192fae72ba2b3a64720b689e8115bb4e->leave($__internal_863fb4da4324322b1cf22df5bfd56392192fae72ba2b3a64720b689e8115bb4e_prof);

        
        $__internal_cea7c47f785d297e99a7c82d72ce00ba96e3b45471bb5c751a0bcffc883a6c32->leave($__internal_cea7c47f785d297e99a7c82d72ce00ba96e3b45471bb5c751a0bcffc883a6c32_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/var/www/html/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list_content.html.twig");
    }
}
