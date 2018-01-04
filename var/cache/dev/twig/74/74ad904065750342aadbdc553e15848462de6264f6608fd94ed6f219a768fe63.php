<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_1ea5f0a99dfddb9a651ccf9aa12740b16cae88dcf9f1a6714aa97bf594047673 extends Twig_Template
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
        $__internal_957928a923b68cd8aebfd30b998982555acceb1c99bb80bf7c81f060338c9a4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_957928a923b68cd8aebfd30b998982555acceb1c99bb80bf7c81f060338c9a4f->enter($__internal_957928a923b68cd8aebfd30b998982555acceb1c99bb80bf7c81f060338c9a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_580f93312c69637433c4a253a365dbe55b295019ef36dd3119e1b40333db7ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_580f93312c69637433c4a253a365dbe55b295019ef36dd3119e1b40333db7ab8->enter($__internal_580f93312c69637433c4a253a365dbe55b295019ef36dd3119e1b40333db7ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_957928a923b68cd8aebfd30b998982555acceb1c99bb80bf7c81f060338c9a4f->leave($__internal_957928a923b68cd8aebfd30b998982555acceb1c99bb80bf7c81f060338c9a4f_prof);

        
        $__internal_580f93312c69637433c4a253a365dbe55b295019ef36dd3119e1b40333db7ab8->leave($__internal_580f93312c69637433c4a253a365dbe55b295019ef36dd3119e1b40333db7ab8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
