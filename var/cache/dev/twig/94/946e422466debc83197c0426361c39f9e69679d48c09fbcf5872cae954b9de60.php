<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_247b8483749afb4d3f67609697d7bf19756eca33a91bb7e0064a7fdca3aa724c extends Twig_Template
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
        $__internal_5fd400b55db95f95d124830d3d90f368c60a1b02e6e7d9091160b007ae54294b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fd400b55db95f95d124830d3d90f368c60a1b02e6e7d9091160b007ae54294b->enter($__internal_5fd400b55db95f95d124830d3d90f368c60a1b02e6e7d9091160b007ae54294b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_8deada774bd036ca624f8e97a29af5184954e191663c1482198fbd00e7afc284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8deada774bd036ca624f8e97a29af5184954e191663c1482198fbd00e7afc284->enter($__internal_8deada774bd036ca624f8e97a29af5184954e191663c1482198fbd00e7afc284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_5fd400b55db95f95d124830d3d90f368c60a1b02e6e7d9091160b007ae54294b->leave($__internal_5fd400b55db95f95d124830d3d90f368c60a1b02e6e7d9091160b007ae54294b_prof);

        
        $__internal_8deada774bd036ca624f8e97a29af5184954e191663c1482198fbd00e7afc284->leave($__internal_8deada774bd036ca624f8e97a29af5184954e191663c1482198fbd00e7afc284_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
