<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_9bbd6327abc29ffde96b225bac8d2be3263cd7dd0311ee28a24415f8d6d3b65b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0f99ab46f5609ca338776bdcaf7731ab18e91d74b6d4fb987a6bac59eb6a6d7 = $this->env->getExtension("native_profiler");
        $__internal_f0f99ab46f5609ca338776bdcaf7731ab18e91d74b6d4fb987a6bac59eb6a6d7->enter($__internal_f0f99ab46f5609ca338776bdcaf7731ab18e91d74b6d4fb987a6bac59eb6a6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0f99ab46f5609ca338776bdcaf7731ab18e91d74b6d4fb987a6bac59eb6a6d7->leave($__internal_f0f99ab46f5609ca338776bdcaf7731ab18e91d74b6d4fb987a6bac59eb6a6d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6dcae564d8c41a34b7e3943e60b44de79b6e5a6c5bddedf4116b77a55e9cde2a = $this->env->getExtension("native_profiler");
        $__internal_6dcae564d8c41a34b7e3943e60b44de79b6e5a6c5bddedf4116b77a55e9cde2a->enter($__internal_6dcae564d8c41a34b7e3943e60b44de79b6e5a6c5bddedf4116b77a55e9cde2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_6dcae564d8c41a34b7e3943e60b44de79b6e5a6c5bddedf4116b77a55e9cde2a->leave($__internal_6dcae564d8c41a34b7e3943e60b44de79b6e5a6c5bddedf4116b77a55e9cde2a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c08a0f36a59c188dfe7684af67206263de9ed3b109b5fdecf6712da37545bd3 = $this->env->getExtension("native_profiler");
        $__internal_4c08a0f36a59c188dfe7684af67206263de9ed3b109b5fdecf6712da37545bd3->enter($__internal_4c08a0f36a59c188dfe7684af67206263de9ed3b109b5fdecf6712da37545bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_4c08a0f36a59c188dfe7684af67206263de9ed3b109b5fdecf6712da37545bd3->leave($__internal_4c08a0f36a59c188dfe7684af67206263de9ed3b109b5fdecf6712da37545bd3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_527e7bcfc79daa3a60f4d58d6dda2a719efd955f01b3e8df02ad2e4a0a968f41 = $this->env->getExtension("native_profiler");
        $__internal_527e7bcfc79daa3a60f4d58d6dda2a719efd955f01b3e8df02ad2e4a0a968f41->enter($__internal_527e7bcfc79daa3a60f4d58d6dda2a719efd955f01b3e8df02ad2e4a0a968f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_527e7bcfc79daa3a60f4d58d6dda2a719efd955f01b3e8df02ad2e4a0a968f41->leave($__internal_527e7bcfc79daa3a60f4d58d6dda2a719efd955f01b3e8df02ad2e4a0a968f41_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_438cfa2a46f9a12a5b45343c7ff09331fa13feeb6e9b98014a8acee75ab76a83 = $this->env->getExtension("native_profiler");
        $__internal_438cfa2a46f9a12a5b45343c7ff09331fa13feeb6e9b98014a8acee75ab76a83->enter($__internal_438cfa2a46f9a12a5b45343c7ff09331fa13feeb6e9b98014a8acee75ab76a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_438cfa2a46f9a12a5b45343c7ff09331fa13feeb6e9b98014a8acee75ab76a83->leave($__internal_438cfa2a46f9a12a5b45343c7ff09331fa13feeb6e9b98014a8acee75ab76a83_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
