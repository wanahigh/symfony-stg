<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3c448dacef6334a7d35be17ac06db56833c4a00018828ef0091cc35593b50081 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcb05d44a5049e49237eaaa49b7c546d9f3b5d08a4bdbf81da6fde58f596d3e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcb05d44a5049e49237eaaa49b7c546d9f3b5d08a4bdbf81da6fde58f596d3e6->enter($__internal_fcb05d44a5049e49237eaaa49b7c546d9f3b5d08a4bdbf81da6fde58f596d3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_4d389d17d23b2a6dcf4cd10f8a01fcbfbb2d0426b80f6c3f929cfda0ade86c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d389d17d23b2a6dcf4cd10f8a01fcbfbb2d0426b80f6c3f929cfda0ade86c04->enter($__internal_4d389d17d23b2a6dcf4cd10f8a01fcbfbb2d0426b80f6c3f929cfda0ade86c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fcb05d44a5049e49237eaaa49b7c546d9f3b5d08a4bdbf81da6fde58f596d3e6->leave($__internal_fcb05d44a5049e49237eaaa49b7c546d9f3b5d08a4bdbf81da6fde58f596d3e6_prof);

        
        $__internal_4d389d17d23b2a6dcf4cd10f8a01fcbfbb2d0426b80f6c3f929cfda0ade86c04->leave($__internal_4d389d17d23b2a6dcf4cd10f8a01fcbfbb2d0426b80f6c3f929cfda0ade86c04_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a58ad3431c879ff818196c97195fb1eb7ced351f479f11235ac966282bee8415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a58ad3431c879ff818196c97195fb1eb7ced351f479f11235ac966282bee8415->enter($__internal_a58ad3431c879ff818196c97195fb1eb7ced351f479f11235ac966282bee8415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_48aca72cc1117daf8672c60fc552798bb2847663bb9075843683b1eda4c0c2c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48aca72cc1117daf8672c60fc552798bb2847663bb9075843683b1eda4c0c2c2->enter($__internal_48aca72cc1117daf8672c60fc552798bb2847663bb9075843683b1eda4c0c2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_48aca72cc1117daf8672c60fc552798bb2847663bb9075843683b1eda4c0c2c2->leave($__internal_48aca72cc1117daf8672c60fc552798bb2847663bb9075843683b1eda4c0c2c2_prof);

        
        $__internal_a58ad3431c879ff818196c97195fb1eb7ced351f479f11235ac966282bee8415->leave($__internal_a58ad3431c879ff818196c97195fb1eb7ced351f479f11235ac966282bee8415_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
