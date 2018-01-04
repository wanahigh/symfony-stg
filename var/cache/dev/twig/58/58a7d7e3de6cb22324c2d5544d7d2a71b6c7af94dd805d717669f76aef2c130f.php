<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_f20819af60893c65c42a1c080e44c570fe1452ab7f889fc1745f451907294dd5 extends Twig_Template
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
        $__internal_8c3c937b270611c9b6ebb6f87aef4b70b2d99428d906752852921d5bff08d44e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c3c937b270611c9b6ebb6f87aef4b70b2d99428d906752852921d5bff08d44e->enter($__internal_8c3c937b270611c9b6ebb6f87aef4b70b2d99428d906752852921d5bff08d44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_b8e03dcd5cfbf365d37409704c715e35849e11f16faf4c9a4347020ebcf429c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e03dcd5cfbf365d37409704c715e35849e11f16faf4c9a4347020ebcf429c3->enter($__internal_b8e03dcd5cfbf365d37409704c715e35849e11f16faf4c9a4347020ebcf429c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_8c3c937b270611c9b6ebb6f87aef4b70b2d99428d906752852921d5bff08d44e->leave($__internal_8c3c937b270611c9b6ebb6f87aef4b70b2d99428d906752852921d5bff08d44e_prof);

        
        $__internal_b8e03dcd5cfbf365d37409704c715e35849e11f16faf4c9a4347020ebcf429c3->leave($__internal_b8e03dcd5cfbf365d37409704c715e35849e11f16faf4c9a4347020ebcf429c3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
