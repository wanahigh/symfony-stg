<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_703220152c793cc3f459f3ec7b8466ae40da12da22dab63b48a89d9cd528940c extends Twig_Template
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
        $__internal_4f88167d43bd2cfe4fff6c89ff93d22a8fb3ce421e75b11d4274151a8aabf8b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f88167d43bd2cfe4fff6c89ff93d22a8fb3ce421e75b11d4274151a8aabf8b7->enter($__internal_4f88167d43bd2cfe4fff6c89ff93d22a8fb3ce421e75b11d4274151a8aabf8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_72326b0586e2868235d9725cd45da8bcc53c411c9abda7c5a3d436c4c20c79bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72326b0586e2868235d9725cd45da8bcc53c411c9abda7c5a3d436c4c20c79bb->enter($__internal_72326b0586e2868235d9725cd45da8bcc53c411c9abda7c5a3d436c4c20c79bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_4f88167d43bd2cfe4fff6c89ff93d22a8fb3ce421e75b11d4274151a8aabf8b7->leave($__internal_4f88167d43bd2cfe4fff6c89ff93d22a8fb3ce421e75b11d4274151a8aabf8b7_prof);

        
        $__internal_72326b0586e2868235d9725cd45da8bcc53c411c9abda7c5a3d436c4c20c79bb->leave($__internal_72326b0586e2868235d9725cd45da8bcc53c411c9abda7c5a3d436c4c20c79bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
