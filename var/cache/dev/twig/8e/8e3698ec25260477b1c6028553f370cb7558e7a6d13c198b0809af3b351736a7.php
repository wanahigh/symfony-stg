<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_f0c86500b4127ef89f52ebb705eeb7354b98f0a719383224a505f561d3cf1d3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2383bfa1acac382595a7c126672552155ba0df30efdb7a5f05df6ed71324078b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2383bfa1acac382595a7c126672552155ba0df30efdb7a5f05df6ed71324078b->enter($__internal_2383bfa1acac382595a7c126672552155ba0df30efdb7a5f05df6ed71324078b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_210b22eddbfc7a40c8dab1536354255d13bb38dc62688bd7bd67e93ecde08e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_210b22eddbfc7a40c8dab1536354255d13bb38dc62688bd7bd67e93ecde08e99->enter($__internal_210b22eddbfc7a40c8dab1536354255d13bb38dc62688bd7bd67e93ecde08e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_2383bfa1acac382595a7c126672552155ba0df30efdb7a5f05df6ed71324078b->leave($__internal_2383bfa1acac382595a7c126672552155ba0df30efdb7a5f05df6ed71324078b_prof);

        
        $__internal_210b22eddbfc7a40c8dab1536354255d13bb38dc62688bd7bd67e93ecde08e99->leave($__internal_210b22eddbfc7a40c8dab1536354255d13bb38dc62688bd7bd67e93ecde08e99_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c7430a9ae70abc5fe9b79109c2fb05135e3679d011c6b75821f880074cf76da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7430a9ae70abc5fe9b79109c2fb05135e3679d011c6b75821f880074cf76da7->enter($__internal_c7430a9ae70abc5fe9b79109c2fb05135e3679d011c6b75821f880074cf76da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_28c64328cdd9a678bb1d98d0fc438e7ec7784eaaedbb0cf7b2dcbdb8a261f630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c64328cdd9a678bb1d98d0fc438e7ec7784eaaedbb0cf7b2dcbdb8a261f630->enter($__internal_28c64328cdd9a678bb1d98d0fc438e7ec7784eaaedbb0cf7b2dcbdb8a261f630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_28c64328cdd9a678bb1d98d0fc438e7ec7784eaaedbb0cf7b2dcbdb8a261f630->leave($__internal_28c64328cdd9a678bb1d98d0fc438e7ec7784eaaedbb0cf7b2dcbdb8a261f630_prof);

        
        $__internal_c7430a9ae70abc5fe9b79109c2fb05135e3679d011c6b75821f880074cf76da7->leave($__internal_c7430a9ae70abc5fe9b79109c2fb05135e3679d011c6b75821f880074cf76da7_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_d0a1f21c5870f595f0ccdcea7cd171c17ff50f725c35be9d21b73a9b866387a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0a1f21c5870f595f0ccdcea7cd171c17ff50f725c35be9d21b73a9b866387a0->enter($__internal_d0a1f21c5870f595f0ccdcea7cd171c17ff50f725c35be9d21b73a9b866387a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_85f77af9d0033c468e099cad4c315962e9d646c60af0277dae9c42b894adb97f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f77af9d0033c468e099cad4c315962e9d646c60af0277dae9c42b894adb97f->enter($__internal_85f77af9d0033c468e099cad4c315962e9d646c60af0277dae9c42b894adb97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_85f77af9d0033c468e099cad4c315962e9d646c60af0277dae9c42b894adb97f->leave($__internal_85f77af9d0033c468e099cad4c315962e9d646c60af0277dae9c42b894adb97f_prof);

        
        $__internal_d0a1f21c5870f595f0ccdcea7cd171c17ff50f725c35be9d21b73a9b866387a0->leave($__internal_d0a1f21c5870f595f0ccdcea7cd171c17ff50f725c35be9d21b73a9b866387a0_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_6da168e06530a8f02fe7280b9a0e424964504dab47d1d31a698d0f084e3f30fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6da168e06530a8f02fe7280b9a0e424964504dab47d1d31a698d0f084e3f30fe->enter($__internal_6da168e06530a8f02fe7280b9a0e424964504dab47d1d31a698d0f084e3f30fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_e7c193d4b160eb7c103e2fa5eee863cf5f20149646345884d52596578cbc1936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c193d4b160eb7c103e2fa5eee863cf5f20149646345884d52596578cbc1936->enter($__internal_e7c193d4b160eb7c103e2fa5eee863cf5f20149646345884d52596578cbc1936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 18, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 19, $this->getSourceContext()); })()))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_e7c193d4b160eb7c103e2fa5eee863cf5f20149646345884d52596578cbc1936->leave($__internal_e7c193d4b160eb7c103e2fa5eee863cf5f20149646345884d52596578cbc1936_prof);

        
        $__internal_6da168e06530a8f02fe7280b9a0e424964504dab47d1d31a698d0f084e3f30fe->leave($__internal_6da168e06530a8f02fe7280b9a0e424964504dab47d1d31a698d0f084e3f30fe_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_28e53128416bfc5e7920773d7c469cf60383d59cd8ba9d6816905ddfc3c796de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28e53128416bfc5e7920773d7c469cf60383d59cd8ba9d6816905ddfc3c796de->enter($__internal_28e53128416bfc5e7920773d7c469cf60383d59cd8ba9d6816905ddfc3c796de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_73717ea3d13edf8b896bf43da9065780747b2bee20eb6674a8deeeb39f7cd5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73717ea3d13edf8b896bf43da9065780747b2bee20eb6674a8deeeb39f7cd5a0->enter($__internal_73717ea3d13edf8b896bf43da9065780747b2bee20eb6674a8deeeb39f7cd5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 29, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 30, $this->getSourceContext()); })()))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_73717ea3d13edf8b896bf43da9065780747b2bee20eb6674a8deeeb39f7cd5a0->leave($__internal_73717ea3d13edf8b896bf43da9065780747b2bee20eb6674a8deeeb39f7cd5a0_prof);

        
        $__internal_28e53128416bfc5e7920773d7c469cf60383d59cd8ba9d6816905ddfc3c796de->leave($__internal_28e53128416bfc5e7920773d7c469cf60383d59cd8ba9d6816905ddfc3c796de_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5b8f5f50d01178cbb70c69770fd4c29072fa5182dcdf6a7b66dc247f4a9ef463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b8f5f50d01178cbb70c69770fd4c29072fa5182dcdf6a7b66dc247f4a9ef463->enter($__internal_5b8f5f50d01178cbb70c69770fd4c29072fa5182dcdf6a7b66dc247f4a9ef463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_042436e284d0e395db67908b75300561efa1503063a5a1459302585168eba25c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042436e284d0e395db67908b75300561efa1503063a5a1459302585168eba25c->enter($__internal_042436e284d0e395db67908b75300561efa1503063a5a1459302585168eba25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_042436e284d0e395db67908b75300561efa1503063a5a1459302585168eba25c->leave($__internal_042436e284d0e395db67908b75300561efa1503063a5a1459302585168eba25c_prof);

        
        $__internal_5b8f5f50d01178cbb70c69770fd4c29072fa5182dcdf6a7b66dc247f4a9ef463->leave($__internal_5b8f5f50d01178cbb70c69770fd4c29072fa5182dcdf6a7b66dc247f4a9ef463_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_b3067b9a7260f6dad7979f5a1b7fe0522916962669fb8d7c1f8fb615f6082620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3067b9a7260f6dad7979f5a1b7fe0522916962669fb8d7c1f8fb615f6082620->enter($__internal_b3067b9a7260f6dad7979f5a1b7fe0522916962669fb8d7c1f8fb615f6082620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_c91ea0d47eca27c2247c6e35ddcd050db044ac33ffc86b146937f0c5e3b99e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c91ea0d47eca27c2247c6e35ddcd050db044ac33ffc86b146937f0c5e3b99e76->enter($__internal_c91ea0d47eca27c2247c6e35ddcd050db044ac33ffc86b146937f0c5e3b99e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_c91ea0d47eca27c2247c6e35ddcd050db044ac33ffc86b146937f0c5e3b99e76->leave($__internal_c91ea0d47eca27c2247c6e35ddcd050db044ac33ffc86b146937f0c5e3b99e76_prof);

        
        $__internal_b3067b9a7260f6dad7979f5a1b7fe0522916962669fb8d7c1f8fb615f6082620->leave($__internal_b3067b9a7260f6dad7979f5a1b7fe0522916962669fb8d7c1f8fb615f6082620_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_102df098a5f037ca82e41fd4927d7c93e2e2d6245487d5849aab77e103781515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_102df098a5f037ca82e41fd4927d7c93e2e2d6245487d5849aab77e103781515->enter($__internal_102df098a5f037ca82e41fd4927d7c93e2e2d6245487d5849aab77e103781515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_a034cf077517f12deb5f5fb3f143540c15acf41893e144b0db9862357d7c00aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a034cf077517f12deb5f5fb3f143540c15acf41893e144b0db9862357d7c00aa->enter($__internal_a034cf077517f12deb5f5fb3f143540c15acf41893e144b0db9862357d7c00aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a034cf077517f12deb5f5fb3f143540c15acf41893e144b0db9862357d7c00aa->leave($__internal_a034cf077517f12deb5f5fb3f143540c15acf41893e144b0db9862357d7c00aa_prof);

        
        $__internal_102df098a5f037ca82e41fd4927d7c93e2e2d6245487d5849aab77e103781515->leave($__internal_102df098a5f037ca82e41fd4927d7c93e2e2d6245487d5849aab77e103781515_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_a7153534286b523bf86b42df1a9d8055c1fddf6c2acf24265e38b13d0a815118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7153534286b523bf86b42df1a9d8055c1fddf6c2acf24265e38b13d0a815118->enter($__internal_a7153534286b523bf86b42df1a9d8055c1fddf6c2acf24265e38b13d0a815118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_be6af9acfaa7672bd865078b38507dc1306d5d6ce6c3675bc0a1e3ca7611b634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be6af9acfaa7672bd865078b38507dc1306d5d6ce6c3675bc0a1e3ca7611b634->enter($__internal_be6af9acfaa7672bd865078b38507dc1306d5d6ce6c3675bc0a1e3ca7611b634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_be6af9acfaa7672bd865078b38507dc1306d5d6ce6c3675bc0a1e3ca7611b634->leave($__internal_be6af9acfaa7672bd865078b38507dc1306d5d6ce6c3675bc0a1e3ca7611b634_prof);

        
        $__internal_a7153534286b523bf86b42df1a9d8055c1fddf6c2acf24265e38b13d0a815118->leave($__internal_a7153534286b523bf86b42df1a9d8055c1fddf6c2acf24265e38b13d0a815118_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_4f85253fbc92701d11a669721480999810984a4aeddb7b6e5fe63fe41dbd495e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f85253fbc92701d11a669721480999810984a4aeddb7b6e5fe63fe41dbd495e->enter($__internal_4f85253fbc92701d11a669721480999810984a4aeddb7b6e5fe63fe41dbd495e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_071c7eb2870f357750542c918fe4d7c1a4a0c8bcbced1ad8fa6c2019a0340343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_071c7eb2870f357750542c918fe4d7c1a4a0c8bcbced1ad8fa6c2019a0340343->enter($__internal_071c7eb2870f357750542c918fe4d7c1a4a0c8bcbced1ad8fa6c2019a0340343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 67, $this->getSourceContext()); })())) {
                // line 68
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 68, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 71, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 71, $this->getSourceContext()); })())))));
            }
            // line 73
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })())))) {
                // line 74
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 74, $this->getSourceContext()); })()))) {
                    // line 75
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 75, $this->getSourceContext()); })()), array("%name%" =>                     // line 76
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 76, $this->getSourceContext()); })()), "%id%" =>                     // line 77
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 77, $this->getSourceContext()); })())));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 80, $this->getSourceContext()); })()));
                }
            }
            // line 83
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 83, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 84
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 84, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_071c7eb2870f357750542c918fe4d7c1a4a0c8bcbced1ad8fa6c2019a0340343->leave($__internal_071c7eb2870f357750542c918fe4d7c1a4a0c8bcbced1ad8fa6c2019a0340343_prof);

        
        $__internal_4f85253fbc92701d11a669721480999810984a4aeddb7b6e5fe63fe41dbd495e->leave($__internal_4f85253fbc92701d11a669721480999810984a4aeddb7b6e5fe63fe41dbd495e_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_2c5d43364922120984fbab7f9a007dc7b581783ebf953c5062c56477b6b7636a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c5d43364922120984fbab7f9a007dc7b581783ebf953c5062c56477b6b7636a->enter($__internal_2c5d43364922120984fbab7f9a007dc7b581783ebf953c5062c56477b6b7636a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_074fecf46a26f9780a7d6354ba6ab55f1eb799359e19bbe32dddde8404416264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_074fecf46a26f9780a7d6354ba6ab55f1eb799359e19bbe32dddde8404416264->enter($__internal_074fecf46a26f9780a7d6354ba6ab55f1eb799359e19bbe32dddde8404416264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 92, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 92, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 92, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->getSourceContext()); })()), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_074fecf46a26f9780a7d6354ba6ab55f1eb799359e19bbe32dddde8404416264->leave($__internal_074fecf46a26f9780a7d6354ba6ab55f1eb799359e19bbe32dddde8404416264_prof);

        
        $__internal_2c5d43364922120984fbab7f9a007dc7b581783ebf953c5062c56477b6b7636a->leave($__internal_2c5d43364922120984fbab7f9a007dc7b581783ebf953c5062c56477b6b7636a_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_078414152dcb48ad7afba70991983f5d568857f935f25756df9aa93c6b426daf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_078414152dcb48ad7afba70991983f5d568857f935f25756df9aa93c6b426daf->enter($__internal_078414152dcb48ad7afba70991983f5d568857f935f25756df9aa93c6b426daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_afb8b5287c2256aacd5900ab553e93857ebe17e1ffc52ec2b205a0cbfcb464dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb8b5287c2256aacd5900ab553e93857ebe17e1ffc52ec2b205a0cbfcb464dd->enter($__internal_afb8b5287c2256aacd5900ab553e93857ebe17e1ffc52ec2b205a0cbfcb464dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_afb8b5287c2256aacd5900ab553e93857ebe17e1ffc52ec2b205a0cbfcb464dd->leave($__internal_afb8b5287c2256aacd5900ab553e93857ebe17e1ffc52ec2b205a0cbfcb464dd_prof);

        
        $__internal_078414152dcb48ad7afba70991983f5d568857f935f25756df9aa93c6b426daf->leave($__internal_078414152dcb48ad7afba70991983f5d568857f935f25756df9aa93c6b426daf_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_b2bb7cadf332e29101ebafa6a076f15704461760082abcbf37892ef33174898c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2bb7cadf332e29101ebafa6a076f15704461760082abcbf37892ef33174898c->enter($__internal_b2bb7cadf332e29101ebafa6a076f15704461760082abcbf37892ef33174898c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_442e49462474e67c15926e72e34d0030f49ec735506310c46ecb98b70521b362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_442e49462474e67c15926e72e34d0030f49ec735506310c46ecb98b70521b362->enter($__internal_442e49462474e67c15926e72e34d0030f49ec735506310c46ecb98b70521b362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_442e49462474e67c15926e72e34d0030f49ec735506310c46ecb98b70521b362->leave($__internal_442e49462474e67c15926e72e34d0030f49ec735506310c46ecb98b70521b362_prof);

        
        $__internal_b2bb7cadf332e29101ebafa6a076f15704461760082abcbf37892ef33174898c->leave($__internal_b2bb7cadf332e29101ebafa6a076f15704461760082abcbf37892ef33174898c_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_d69876aa66884ea15a8b4147c921042031b236505543396b31189f2e8875056e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d69876aa66884ea15a8b4147c921042031b236505543396b31189f2e8875056e->enter($__internal_d69876aa66884ea15a8b4147c921042031b236505543396b31189f2e8875056e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_c7426d01cb6f6ea3ca9c8d14ca5f32622b16f87f8aa9c21e7d374f0beaba941d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7426d01cb6f6ea3ca9c8d14ca5f32622b16f87f8aa9c21e7d374f0beaba941d->enter($__internal_c7426d01cb6f6ea3ca9c8d14ca5f32622b16f87f8aa9c21e7d374f0beaba941d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c7426d01cb6f6ea3ca9c8d14ca5f32622b16f87f8aa9c21e7d374f0beaba941d->leave($__internal_c7426d01cb6f6ea3ca9c8d14ca5f32622b16f87f8aa9c21e7d374f0beaba941d_prof);

        
        $__internal_d69876aa66884ea15a8b4147c921042031b236505543396b31189f2e8875056e->leave($__internal_d69876aa66884ea15a8b4147c921042031b236505543396b31189f2e8875056e_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_e080098c3d6561664f3ef96a325f33b6cda066f9f92d0c5b11d7894e172894c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e080098c3d6561664f3ef96a325f33b6cda066f9f92d0c5b11d7894e172894c3->enter($__internal_e080098c3d6561664f3ef96a325f33b6cda066f9f92d0c5b11d7894e172894c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_af2f0af571876a0cb72e60016a4e1c7f3cfe04cd543fb3dc4a9612821ae51f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af2f0af571876a0cb72e60016a4e1c7f3cfe04cd543fb3dc4a9612821ae51f13->enter($__internal_af2f0af571876a0cb72e60016a4e1c7f3cfe04cd543fb3dc4a9612821ae51f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_af2f0af571876a0cb72e60016a4e1c7f3cfe04cd543fb3dc4a9612821ae51f13->leave($__internal_af2f0af571876a0cb72e60016a4e1c7f3cfe04cd543fb3dc4a9612821ae51f13_prof);

        
        $__internal_e080098c3d6561664f3ef96a325f33b6cda066f9f92d0c5b11d7894e172894c3->leave($__internal_e080098c3d6561664f3ef96a325f33b6cda066f9f92d0c5b11d7894e172894c3_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_48faa241d9ff0f8bb6941ee76e625c2c007b000526357ab18532a58ad404121c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48faa241d9ff0f8bb6941ee76e625c2c007b000526357ab18532a58ad404121c->enter($__internal_48faa241d9ff0f8bb6941ee76e625c2c007b000526357ab18532a58ad404121c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_8f697ded6085be00156516f901cadea6fb993329ea222f1d57f2a53115586df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f697ded6085be00156516f901cadea6fb993329ea222f1d57f2a53115586df8->enter($__internal_8f697ded6085be00156516f901cadea6fb993329ea222f1d57f2a53115586df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8f697ded6085be00156516f901cadea6fb993329ea222f1d57f2a53115586df8->leave($__internal_8f697ded6085be00156516f901cadea6fb993329ea222f1d57f2a53115586df8_prof);

        
        $__internal_48faa241d9ff0f8bb6941ee76e625c2c007b000526357ab18532a58ad404121c->leave($__internal_48faa241d9ff0f8bb6941ee76e625c2c007b000526357ab18532a58ad404121c_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_376bd0b90eaecf3e9338200edb4f34c9aea1c39d684033e3866cfe2482fa6a6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_376bd0b90eaecf3e9338200edb4f34c9aea1c39d684033e3866cfe2482fa6a6c->enter($__internal_376bd0b90eaecf3e9338200edb4f34c9aea1c39d684033e3866cfe2482fa6a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_9e7ab3ff91945c0a8ee3ee3c5af158126cb7858b6f4f238ca86d17b10cc65387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7ab3ff91945c0a8ee3ee3c5af158126cb7858b6f4f238ca86d17b10cc65387->enter($__internal_9e7ab3ff91945c0a8ee3ee3c5af158126cb7858b6f4f238ca86d17b10cc65387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 126, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 127, $this->getSourceContext()); })()), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_9e7ab3ff91945c0a8ee3ee3c5af158126cb7858b6f4f238ca86d17b10cc65387->leave($__internal_9e7ab3ff91945c0a8ee3ee3c5af158126cb7858b6f4f238ca86d17b10cc65387_prof);

        
        $__internal_376bd0b90eaecf3e9338200edb4f34c9aea1c39d684033e3866cfe2482fa6a6c->leave($__internal_376bd0b90eaecf3e9338200edb4f34c9aea1c39d684033e3866cfe2482fa6a6c_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_814a758a10be5fcdb7a2116070ff88d49f9d1af248b7c5a4ed38e61c2fadfbb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_814a758a10be5fcdb7a2116070ff88d49f9d1af248b7c5a4ed38e61c2fadfbb1->enter($__internal_814a758a10be5fcdb7a2116070ff88d49f9d1af248b7c5a4ed38e61c2fadfbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_89298dcd8a51b0699b3f260d7041abe17e961cb9909ca28561f7f6229d7f2167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89298dcd8a51b0699b3f260d7041abe17e961cb9909ca28561f7f6229d7f2167->enter($__internal_89298dcd8a51b0699b3f260d7041abe17e961cb9909ca28561f7f6229d7f2167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 133, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->getSourceContext()); })()), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_89298dcd8a51b0699b3f260d7041abe17e961cb9909ca28561f7f6229d7f2167->leave($__internal_89298dcd8a51b0699b3f260d7041abe17e961cb9909ca28561f7f6229d7f2167_prof);

        
        $__internal_814a758a10be5fcdb7a2116070ff88d49f9d1af248b7c5a4ed38e61c2fadfbb1->leave($__internal_814a758a10be5fcdb7a2116070ff88d49f9d1af248b7c5a4ed38e61c2fadfbb1_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_435710399ba0971faa73ed2ed6dfd8319f24c3e60d57bdb603a64364a0f1d848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_435710399ba0971faa73ed2ed6dfd8319f24c3e60d57bdb603a64364a0f1d848->enter($__internal_435710399ba0971faa73ed2ed6dfd8319f24c3e60d57bdb603a64364a0f1d848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_b0df4cc44b0c21bdfe85d539fde30e6655b75a30a25613ef0d0b1af6cbc60055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0df4cc44b0c21bdfe85d539fde30e6655b75a30a25613ef0d0b1af6cbc60055->enter($__internal_b0df4cc44b0c21bdfe85d539fde30e6655b75a30a25613ef0d0b1af6cbc60055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 142, $this->getSourceContext()); })())) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 145, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 149, $this->getSourceContext()); })()))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_b0df4cc44b0c21bdfe85d539fde30e6655b75a30a25613ef0d0b1af6cbc60055->leave($__internal_b0df4cc44b0c21bdfe85d539fde30e6655b75a30a25613ef0d0b1af6cbc60055_prof);

        
        $__internal_435710399ba0971faa73ed2ed6dfd8319f24c3e60d57bdb603a64364a0f1d848->leave($__internal_435710399ba0971faa73ed2ed6dfd8319f24c3e60d57bdb603a64364a0f1d848_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
