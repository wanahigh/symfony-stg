<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_29f976dd766d6ca20520721d9309c7aea67af48e3e01aa033597c7f8f8f50789 extends Twig_Template
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
        $__internal_160adf65d77ad5e40dad34faadf563bf1b117e4c6aaa8c27795df028db4dacb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_160adf65d77ad5e40dad34faadf563bf1b117e4c6aaa8c27795df028db4dacb0->enter($__internal_160adf65d77ad5e40dad34faadf563bf1b117e4c6aaa8c27795df028db4dacb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_43f366ba705687219e34200f89d2e098d30c652ca0261374a49acf49aaa76c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f366ba705687219e34200f89d2e098d30c652ca0261374a49acf49aaa76c6f->enter($__internal_43f366ba705687219e34200f89d2e098d30c652ca0261374a49acf49aaa76c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_160adf65d77ad5e40dad34faadf563bf1b117e4c6aaa8c27795df028db4dacb0->leave($__internal_160adf65d77ad5e40dad34faadf563bf1b117e4c6aaa8c27795df028db4dacb0_prof);

        
        $__internal_43f366ba705687219e34200f89d2e098d30c652ca0261374a49acf49aaa76c6f->leave($__internal_43f366ba705687219e34200f89d2e098d30c652ca0261374a49acf49aaa76c6f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
