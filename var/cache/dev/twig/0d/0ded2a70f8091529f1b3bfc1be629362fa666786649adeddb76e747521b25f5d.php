<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_21952d6282425e799ed50a0400eaa000c7c9b2562f2463ba0a2bde35f84f5a34 extends Twig_Template
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
        $__internal_d1c474fff7e7186e02c072a132b4084410ee2a2bd3d95284ddda99f3a25f86a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1c474fff7e7186e02c072a132b4084410ee2a2bd3d95284ddda99f3a25f86a9->enter($__internal_d1c474fff7e7186e02c072a132b4084410ee2a2bd3d95284ddda99f3a25f86a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_86878d9de1e06ef44e17b8377fd42f36cd3d605abb91afc96798aac46ec5254b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86878d9de1e06ef44e17b8377fd42f36cd3d605abb91afc96798aac46ec5254b->enter($__internal_86878d9de1e06ef44e17b8377fd42f36cd3d605abb91afc96798aac46ec5254b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d1c474fff7e7186e02c072a132b4084410ee2a2bd3d95284ddda99f3a25f86a9->leave($__internal_d1c474fff7e7186e02c072a132b4084410ee2a2bd3d95284ddda99f3a25f86a9_prof);

        
        $__internal_86878d9de1e06ef44e17b8377fd42f36cd3d605abb91afc96798aac46ec5254b->leave($__internal_86878d9de1e06ef44e17b8377fd42f36cd3d605abb91afc96798aac46ec5254b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
