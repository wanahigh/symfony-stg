<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_7910b550f006aa2b0b14a4e782b72f20cbb78a4f12dd30096102613fd7a042b6 extends Twig_Template
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
        $__internal_7f4f84ae850f1d854fc66a95d2b115d1c87e8fb0ecb8fff442320b2e2262da8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f4f84ae850f1d854fc66a95d2b115d1c87e8fb0ecb8fff442320b2e2262da8e->enter($__internal_7f4f84ae850f1d854fc66a95d2b115d1c87e8fb0ecb8fff442320b2e2262da8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_02632502593bc1c46e088307547b63a1efd92f99c99815b7e9f227fe5a1d7f8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02632502593bc1c46e088307547b63a1efd92f99c99815b7e9f227fe5a1d7f8c->enter($__internal_02632502593bc1c46e088307547b63a1efd92f99c99815b7e9f227fe5a1d7f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7f4f84ae850f1d854fc66a95d2b115d1c87e8fb0ecb8fff442320b2e2262da8e->leave($__internal_7f4f84ae850f1d854fc66a95d2b115d1c87e8fb0ecb8fff442320b2e2262da8e_prof);

        
        $__internal_02632502593bc1c46e088307547b63a1efd92f99c99815b7e9f227fe5a1d7f8c->leave($__internal_02632502593bc1c46e088307547b63a1efd92f99c99815b7e9f227fe5a1d7f8c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
