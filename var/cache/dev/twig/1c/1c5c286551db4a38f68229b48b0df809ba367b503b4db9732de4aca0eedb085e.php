<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_0c5e9a0e6c9e525216acf6582dac24a05979d6f29e48083d703fffb81fd9e65a extends Twig_Template
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
        $__internal_eb925d6ccf9b73e161016f0bcdc0dd4453e94928e893e791f8ffbb77fa0b1d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb925d6ccf9b73e161016f0bcdc0dd4453e94928e893e791f8ffbb77fa0b1d44->enter($__internal_eb925d6ccf9b73e161016f0bcdc0dd4453e94928e893e791f8ffbb77fa0b1d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_d645a0e6a1b7c0d59e50a1e1cba47b5015bf95aaf1e224179c3ed0d049b18009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d645a0e6a1b7c0d59e50a1e1cba47b5015bf95aaf1e224179c3ed0d049b18009->enter($__internal_d645a0e6a1b7c0d59e50a1e1cba47b5015bf95aaf1e224179c3ed0d049b18009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_eb925d6ccf9b73e161016f0bcdc0dd4453e94928e893e791f8ffbb77fa0b1d44->leave($__internal_eb925d6ccf9b73e161016f0bcdc0dd4453e94928e893e791f8ffbb77fa0b1d44_prof);

        
        $__internal_d645a0e6a1b7c0d59e50a1e1cba47b5015bf95aaf1e224179c3ed0d049b18009->leave($__internal_d645a0e6a1b7c0d59e50a1e1cba47b5015bf95aaf1e224179c3ed0d049b18009_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
