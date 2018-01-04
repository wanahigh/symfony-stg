<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_1968956f530f406478789dca68db44295bd2d0d28f3a75e067e6cf1a13d0d428 extends Twig_Template
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
        $__internal_c7902771bda727e358f5fa8e1d6bbdb791336be4627d4842d0211e40b3407b3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7902771bda727e358f5fa8e1d6bbdb791336be4627d4842d0211e40b3407b3d->enter($__internal_c7902771bda727e358f5fa8e1d6bbdb791336be4627d4842d0211e40b3407b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_f4e2e22ba2476e0b00a4754b9389c86255bb1f466d6fbbaf67c2057c18a791da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e2e22ba2476e0b00a4754b9389c86255bb1f466d6fbbaf67c2057c18a791da->enter($__internal_f4e2e22ba2476e0b00a4754b9389c86255bb1f466d6fbbaf67c2057c18a791da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c7902771bda727e358f5fa8e1d6bbdb791336be4627d4842d0211e40b3407b3d->leave($__internal_c7902771bda727e358f5fa8e1d6bbdb791336be4627d4842d0211e40b3407b3d_prof);

        
        $__internal_f4e2e22ba2476e0b00a4754b9389c86255bb1f466d6fbbaf67c2057c18a791da->leave($__internal_f4e2e22ba2476e0b00a4754b9389c86255bb1f466d6fbbaf67c2057c18a791da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
