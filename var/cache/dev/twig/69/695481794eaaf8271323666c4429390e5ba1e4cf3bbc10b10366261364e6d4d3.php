<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_57779e79334cba65d3132d950f1188bbaaed8f7a78a8fae4d8cfd4f23cfa39b8 extends Twig_Template
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
        $__internal_702a537619d06d0229053c062821221e0505a7c0d7ef54fdb0436ada09fabe3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_702a537619d06d0229053c062821221e0505a7c0d7ef54fdb0436ada09fabe3c->enter($__internal_702a537619d06d0229053c062821221e0505a7c0d7ef54fdb0436ada09fabe3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_c2f38c7f195c7c3e609b292a40d989cbdb34f18a729eea5ca22be8a646e105ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f38c7f195c7c3e609b292a40d989cbdb34f18a729eea5ca22be8a646e105ee->enter($__internal_c2f38c7f195c7c3e609b292a40d989cbdb34f18a729eea5ca22be8a646e105ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_702a537619d06d0229053c062821221e0505a7c0d7ef54fdb0436ada09fabe3c->leave($__internal_702a537619d06d0229053c062821221e0505a7c0d7ef54fdb0436ada09fabe3c_prof);

        
        $__internal_c2f38c7f195c7c3e609b292a40d989cbdb34f18a729eea5ca22be8a646e105ee->leave($__internal_c2f38c7f195c7c3e609b292a40d989cbdb34f18a729eea5ca22be8a646e105ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
