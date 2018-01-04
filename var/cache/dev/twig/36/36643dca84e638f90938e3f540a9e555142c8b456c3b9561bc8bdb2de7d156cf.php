<?php

/* MaterializeBundle:Materialize:css.html.twig */
class __TwigTemplate_ef4ddf641e5d9b0ba68ace1276fad4c2e2896074571505207d08ce9ca98cc84b extends Twig_Template
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
        $__internal_03d25a198ab02bc55461e542800e988dbb7cbd22e18dbb587b6a74c1c9dd1089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03d25a198ab02bc55461e542800e988dbb7cbd22e18dbb587b6a74c1c9dd1089->enter($__internal_03d25a198ab02bc55461e542800e988dbb7cbd22e18dbb587b6a74c1c9dd1089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MaterializeBundle:Materialize:css.html.twig"));

        $__internal_f28a3969aa563d282713ef7221e6b667ac8911d65002990f3128090944f03292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28a3969aa563d282713ef7221e6b667ac8911d65002990f3128090944f03292->enter($__internal_f28a3969aa563d282713ef7221e6b667ac8911d65002990f3128090944f03292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MaterializeBundle:Materialize:css.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["materialize"]) || array_key_exists("materialize", $context) ? $context["materialize"] : (function () { throw new Twig_Error_Runtime('Variable "materialize" does not exist.', 1, $this->getSourceContext()); })()), "version", array()), "html", null, true);
        echo "/css/materialize.min.css\">";
        
        $__internal_03d25a198ab02bc55461e542800e988dbb7cbd22e18dbb587b6a74c1c9dd1089->leave($__internal_03d25a198ab02bc55461e542800e988dbb7cbd22e18dbb587b6a74c1c9dd1089_prof);

        
        $__internal_f28a3969aa563d282713ef7221e6b667ac8911d65002990f3128090944f03292->leave($__internal_f28a3969aa563d282713ef7221e6b667ac8911d65002990f3128090944f03292_prof);

    }

    public function getTemplateName()
    {
        return "MaterializeBundle:Materialize:css.html.twig";
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
        return new Twig_Source("<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/{{- materialize.version -}}/css/materialize.min.css\">", "MaterializeBundle:Materialize:css.html.twig", "/var/www/html/symfony-stg/vendor/evheniy/materialize-bundle/Evheniy/MaterializeBundle/Resources/views/Materialize/css.html.twig");
    }
}
