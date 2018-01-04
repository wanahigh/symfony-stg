<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_6ce0f02d4c01bd2fd19e23da8a46547abb69adf0e84b798edbcd134f4146d268 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8c157e2464f6aff209acedcaeae9821f5f98b7a33a32231804b3c712f5bfb41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8c157e2464f6aff209acedcaeae9821f5f98b7a33a32231804b3c712f5bfb41->enter($__internal_c8c157e2464f6aff209acedcaeae9821f5f98b7a33a32231804b3c712f5bfb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_84696fd600eeb002110c623d684cfd62ead4068c7ef47277ab8cbca51331b3ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84696fd600eeb002110c623d684cfd62ead4068c7ef47277ab8cbca51331b3ea->enter($__internal_84696fd600eeb002110c623d684cfd62ead4068c7ef47277ab8cbca51331b3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_c8c157e2464f6aff209acedcaeae9821f5f98b7a33a32231804b3c712f5bfb41->leave($__internal_c8c157e2464f6aff209acedcaeae9821f5f98b7a33a32231804b3c712f5bfb41_prof);

        
        $__internal_84696fd600eeb002110c623d684cfd62ead4068c7ef47277ab8cbca51331b3ea->leave($__internal_84696fd600eeb002110c623d684cfd62ead4068c7ef47277ab8cbca51331b3ea_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_5727aa36c49d32a0d71848e6bc5af6d65a9781179b86f5702d76038b7638fdad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5727aa36c49d32a0d71848e6bc5af6d65a9781179b86f5702d76038b7638fdad->enter($__internal_5727aa36c49d32a0d71848e6bc5af6d65a9781179b86f5702d76038b7638fdad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_256c85dbc7747cb0824f9183e4ebd6590befae37085ee0011a4d7df2abc53651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256c85dbc7747cb0824f9183e4ebd6590befae37085ee0011a4d7df2abc53651->enter($__internal_256c85dbc7747cb0824f9183e4ebd6590befae37085ee0011a4d7df2abc53651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_256c85dbc7747cb0824f9183e4ebd6590befae37085ee0011a4d7df2abc53651->leave($__internal_256c85dbc7747cb0824f9183e4ebd6590befae37085ee0011a4d7df2abc53651_prof);

        
        $__internal_5727aa36c49d32a0d71848e6bc5af6d65a9781179b86f5702d76038b7638fdad->leave($__internal_5727aa36c49d32a0d71848e6bc5af6d65a9781179b86f5702d76038b7638fdad_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_c8d3192a569f5eda9787daa9982efc5dbbb59e7ce18490da914add47e500d7f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d3192a569f5eda9787daa9982efc5dbbb59e7ce18490da914add47e500d7f0->enter($__internal_c8d3192a569f5eda9787daa9982efc5dbbb59e7ce18490da914add47e500d7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_1f6b708a3ea73f7174c5bf37ed9e513d6556602ad33a388b47b4c9940c7b4a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f6b708a3ea73f7174c5bf37ed9e513d6556602ad33a388b47b4c9940c7b4a25->enter($__internal_1f6b708a3ea73f7174c5bf37ed9e513d6556602ad33a388b47b4c9940c7b4a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 11, $this->getSourceContext()); })()) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 14, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_1f6b708a3ea73f7174c5bf37ed9e513d6556602ad33a388b47b4c9940c7b4a25->leave($__internal_1f6b708a3ea73f7174c5bf37ed9e513d6556602ad33a388b47b4c9940c7b4a25_prof);

        
        $__internal_c8d3192a569f5eda9787daa9982efc5dbbb59e7ce18490da914add47e500d7f0->leave($__internal_c8d3192a569f5eda9787daa9982efc5dbbb59e7ce18490da914add47e500d7f0_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_f78c4dc1af6bf3f085fcdd31f4e3c36b523dc2457fb79d8b477e16dc6a86eeaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f78c4dc1af6bf3f085fcdd31f4e3c36b523dc2457fb79d8b477e16dc6a86eeaa->enter($__internal_f78c4dc1af6bf3f085fcdd31f4e3c36b523dc2457fb79d8b477e16dc6a86eeaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_10e1d661e63383d797cd33fd0c923157f2365356c723621453bac1171f3704c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e1d661e63383d797cd33fd0c923157f2365356c723621453bac1171f3704c0->enter($__internal_10e1d661e63383d797cd33fd0c923157f2365356c723621453bac1171f3704c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_10e1d661e63383d797cd33fd0c923157f2365356c723621453bac1171f3704c0->leave($__internal_10e1d661e63383d797cd33fd0c923157f2365356c723621453bac1171f3704c0_prof);

        
        $__internal_f78c4dc1af6bf3f085fcdd31f4e3c36b523dc2457fb79d8b477e16dc6a86eeaa->leave($__internal_f78c4dc1af6bf3f085fcdd31f4e3c36b523dc2457fb79d8b477e16dc6a86eeaa_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_f20b4c3af03286316284d8cb21aa452608222c17302d46a9dd43c88c0151ff33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f20b4c3af03286316284d8cb21aa452608222c17302d46a9dd43c88c0151ff33->enter($__internal_f20b4c3af03286316284d8cb21aa452608222c17302d46a9dd43c88c0151ff33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ff759e0fd8f447115b5c7ff0c9eead62554edd3266402c031f3a16c1af662fe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff759e0fd8f447115b5c7ff0c9eead62554edd3266402c031f3a16c1af662fe5->enter($__internal_ff759e0fd8f447115b5c7ff0c9eead62554edd3266402c031f3a16c1af662fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 26, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 26, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 26, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_ff759e0fd8f447115b5c7ff0c9eead62554edd3266402c031f3a16c1af662fe5->leave($__internal_ff759e0fd8f447115b5c7ff0c9eead62554edd3266402c031f3a16c1af662fe5_prof);

        
        $__internal_f20b4c3af03286316284d8cb21aa452608222c17302d46a9dd43c88c0151ff33->leave($__internal_f20b4c3af03286316284d8cb21aa452608222c17302d46a9dd43c88c0151ff33_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_d2ee62845b82e4dd2139254f6e72861b50db472c4940ae5fb86f3c0f6554e5dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ee62845b82e4dd2139254f6e72861b50db472c4940ae5fb86f3c0f6554e5dc->enter($__internal_d2ee62845b82e4dd2139254f6e72861b50db472c4940ae5fb86f3c0f6554e5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_13e19a63e8d6d8340915f53841b00a9f9e88fbd4ebbd912dfc90eb40a6359cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e19a63e8d6d8340915f53841b00a9f9e88fbd4ebbd912dfc90eb40a6359cff->enter($__internal_13e19a63e8d6d8340915f53841b00a9f9e88fbd4ebbd912dfc90eb40a6359cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_13e19a63e8d6d8340915f53841b00a9f9e88fbd4ebbd912dfc90eb40a6359cff->leave($__internal_13e19a63e8d6d8340915f53841b00a9f9e88fbd4ebbd912dfc90eb40a6359cff_prof);

        
        $__internal_d2ee62845b82e4dd2139254f6e72861b50db472c4940ae5fb86f3c0f6554e5dc->leave($__internal_d2ee62845b82e4dd2139254f6e72861b50db472c4940ae5fb86f3c0f6554e5dc_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_80f3ae1e1b4821a308158c470c32663e87b6937bc5e03150b284ac209df70455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80f3ae1e1b4821a308158c470c32663e87b6937bc5e03150b284ac209df70455->enter($__internal_80f3ae1e1b4821a308158c470c32663e87b6937bc5e03150b284ac209df70455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_0a24fbbd14169ef876759be9d20de3dbba69061be219bb474fc9ceacb6159e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a24fbbd14169ef876759be9d20de3dbba69061be219bb474fc9ceacb6159e0f->enter($__internal_0a24fbbd14169ef876759be9d20de3dbba69061be219bb474fc9ceacb6159e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_0a24fbbd14169ef876759be9d20de3dbba69061be219bb474fc9ceacb6159e0f->leave($__internal_0a24fbbd14169ef876759be9d20de3dbba69061be219bb474fc9ceacb6159e0f_prof);

        
        $__internal_80f3ae1e1b4821a308158c470c32663e87b6937bc5e03150b284ac209df70455->leave($__internal_80f3ae1e1b4821a308158c470c32663e87b6937bc5e03150b284ac209df70455_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_00d685eef447d93626c0f6ab0d13f945b7f4752772c8e28ffdc1a318219b331d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00d685eef447d93626c0f6ab0d13f945b7f4752772c8e28ffdc1a318219b331d->enter($__internal_00d685eef447d93626c0f6ab0d13f945b7f4752772c8e28ffdc1a318219b331d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_3d81babaad76e1e583b00facf65d3f612410d9fb10f6ae8f62f63b9048bec98e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d81babaad76e1e583b00facf65d3f612410d9fb10f6ae8f62f63b9048bec98e->enter($__internal_3d81babaad76e1e583b00facf65d3f612410d9fb10f6ae8f62f63b9048bec98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_3d81babaad76e1e583b00facf65d3f612410d9fb10f6ae8f62f63b9048bec98e->leave($__internal_3d81babaad76e1e583b00facf65d3f612410d9fb10f6ae8f62f63b9048bec98e_prof);

        
        $__internal_00d685eef447d93626c0f6ab0d13f945b7f4752772c8e28ffdc1a318219b331d->leave($__internal_00d685eef447d93626c0f6ab0d13f945b7f4752772c8e28ffdc1a318219b331d_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_85834093578190e58d7db4315dd988a95a59b2c6a9d586de3c93a576ef6dcaf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85834093578190e58d7db4315dd988a95a59b2c6a9d586de3c93a576ef6dcaf7->enter($__internal_85834093578190e58d7db4315dd988a95a59b2c6a9d586de3c93a576ef6dcaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_eaed14aef50f88a5c5d65b54ad55ae81e647205648dc91802e827e1c921ea243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaed14aef50f88a5c5d65b54ad55ae81e647205648dc91802e827e1c921ea243->enter($__internal_eaed14aef50f88a5c5d65b54ad55ae81e647205648dc91802e827e1c921ea243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_eaed14aef50f88a5c5d65b54ad55ae81e647205648dc91802e827e1c921ea243->leave($__internal_eaed14aef50f88a5c5d65b54ad55ae81e647205648dc91802e827e1c921ea243_prof);

        
        $__internal_85834093578190e58d7db4315dd988a95a59b2c6a9d586de3c93a576ef6dcaf7->leave($__internal_85834093578190e58d7db4315dd988a95a59b2c6a9d586de3c93a576ef6dcaf7_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
