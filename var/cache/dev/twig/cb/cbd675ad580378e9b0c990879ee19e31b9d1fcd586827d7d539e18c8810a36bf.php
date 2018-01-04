<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_4b4a283348e50ba223d9e45ff8e293743066e2cad9b9973ed9ce61c915fabe89 extends Twig_Template
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
        $__internal_4dafc485eb6f784227fc51b15aff73e1f52c555dbafa8ca29979c07eabec0b75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dafc485eb6f784227fc51b15aff73e1f52c555dbafa8ca29979c07eabec0b75->enter($__internal_4dafc485eb6f784227fc51b15aff73e1f52c555dbafa8ca29979c07eabec0b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_743b3dcd3ae7eaa522f32bf5cd0f555f83ee597a61c5404c67e4c90486111d08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743b3dcd3ae7eaa522f32bf5cd0f555f83ee597a61c5404c67e4c90486111d08->enter($__internal_743b3dcd3ae7eaa522f32bf5cd0f555f83ee597a61c5404c67e4c90486111d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_4dafc485eb6f784227fc51b15aff73e1f52c555dbafa8ca29979c07eabec0b75->leave($__internal_4dafc485eb6f784227fc51b15aff73e1f52c555dbafa8ca29979c07eabec0b75_prof);

        
        $__internal_743b3dcd3ae7eaa522f32bf5cd0f555f83ee597a61c5404c67e4c90486111d08->leave($__internal_743b3dcd3ae7eaa522f32bf5cd0f555f83ee597a61c5404c67e4c90486111d08_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
