<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d0f09418d18b46df48a77e878180f2174951052aa4a1d1653634f960cca62c69 extends Twig_Template
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
        $__internal_a6f25fdaada5affa42f37af1de9669892090e7aa6c85f13fc2214a21bf5655b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6f25fdaada5affa42f37af1de9669892090e7aa6c85f13fc2214a21bf5655b2->enter($__internal_a6f25fdaada5affa42f37af1de9669892090e7aa6c85f13fc2214a21bf5655b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_96487e540c9a79066e5ad1d99c9f2ffc9d4e77251b7b46bb36cf89677e03c0ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96487e540c9a79066e5ad1d99c9f2ffc9d4e77251b7b46bb36cf89677e03c0ee->enter($__internal_96487e540c9a79066e5ad1d99c9f2ffc9d4e77251b7b46bb36cf89677e03c0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_a6f25fdaada5affa42f37af1de9669892090e7aa6c85f13fc2214a21bf5655b2->leave($__internal_a6f25fdaada5affa42f37af1de9669892090e7aa6c85f13fc2214a21bf5655b2_prof);

        
        $__internal_96487e540c9a79066e5ad1d99c9f2ffc9d4e77251b7b46bb36cf89677e03c0ee->leave($__internal_96487e540c9a79066e5ad1d99c9f2ffc9d4e77251b7b46bb36cf89677e03c0ee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
