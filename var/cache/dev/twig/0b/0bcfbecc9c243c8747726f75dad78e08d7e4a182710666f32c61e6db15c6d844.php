<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_d2cae8d43ab6929472b5a15966d79919b03172db80358342067ee117820bc45f extends Twig_Template
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
        $__internal_214ccb81d749018605e06c65dd6523278b5abd912d88b5f06ce9b70cb888a25f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_214ccb81d749018605e06c65dd6523278b5abd912d88b5f06ce9b70cb888a25f->enter($__internal_214ccb81d749018605e06c65dd6523278b5abd912d88b5f06ce9b70cb888a25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_0e793e8203ced8347aaccd9f138824041ec5eadad73e8b0db1b7f921b51ab1c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e793e8203ced8347aaccd9f138824041ec5eadad73e8b0db1b7f921b51ab1c9->enter($__internal_0e793e8203ced8347aaccd9f138824041ec5eadad73e8b0db1b7f921b51ab1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_214ccb81d749018605e06c65dd6523278b5abd912d88b5f06ce9b70cb888a25f->leave($__internal_214ccb81d749018605e06c65dd6523278b5abd912d88b5f06ce9b70cb888a25f_prof);

        
        $__internal_0e793e8203ced8347aaccd9f138824041ec5eadad73e8b0db1b7f921b51ab1c9->leave($__internal_0e793e8203ced8347aaccd9f138824041ec5eadad73e8b0db1b7f921b51ab1c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
