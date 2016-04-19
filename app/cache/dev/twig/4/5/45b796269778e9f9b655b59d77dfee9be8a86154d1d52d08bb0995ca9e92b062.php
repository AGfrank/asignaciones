<?php

/* base.html.twig */
class __TwigTemplate_45b796269778e9f9b655b59d77dfee9be8a86154d1d52d08bb0995ca9e92b062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e436212b2484db0632e928fdd442eba1e6586172df514ceffcb23b7bc8d9ff2b = $this->env->getExtension("native_profiler");
        $__internal_e436212b2484db0632e928fdd442eba1e6586172df514ceffcb23b7bc8d9ff2b->enter($__internal_e436212b2484db0632e928fdd442eba1e6586172df514ceffcb23b7bc8d9ff2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e436212b2484db0632e928fdd442eba1e6586172df514ceffcb23b7bc8d9ff2b->leave($__internal_e436212b2484db0632e928fdd442eba1e6586172df514ceffcb23b7bc8d9ff2b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f207d2155d131c46500cbfce7557d2405d90d95cbcbd88134b96c2655bc8171 = $this->env->getExtension("native_profiler");
        $__internal_5f207d2155d131c46500cbfce7557d2405d90d95cbcbd88134b96c2655bc8171->enter($__internal_5f207d2155d131c46500cbfce7557d2405d90d95cbcbd88134b96c2655bc8171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5f207d2155d131c46500cbfce7557d2405d90d95cbcbd88134b96c2655bc8171->leave($__internal_5f207d2155d131c46500cbfce7557d2405d90d95cbcbd88134b96c2655bc8171_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d7c6ed3f87d44d29617235442e19fa454fab55dc6b51974ef0911962126eb705 = $this->env->getExtension("native_profiler");
        $__internal_d7c6ed3f87d44d29617235442e19fa454fab55dc6b51974ef0911962126eb705->enter($__internal_d7c6ed3f87d44d29617235442e19fa454fab55dc6b51974ef0911962126eb705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d7c6ed3f87d44d29617235442e19fa454fab55dc6b51974ef0911962126eb705->leave($__internal_d7c6ed3f87d44d29617235442e19fa454fab55dc6b51974ef0911962126eb705_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a382dbb59fec80d363afde8a7e74490ac3c6f54f7c63c81cc9c7fa73173dbc4e = $this->env->getExtension("native_profiler");
        $__internal_a382dbb59fec80d363afde8a7e74490ac3c6f54f7c63c81cc9c7fa73173dbc4e->enter($__internal_a382dbb59fec80d363afde8a7e74490ac3c6f54f7c63c81cc9c7fa73173dbc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a382dbb59fec80d363afde8a7e74490ac3c6f54f7c63c81cc9c7fa73173dbc4e->leave($__internal_a382dbb59fec80d363afde8a7e74490ac3c6f54f7c63c81cc9c7fa73173dbc4e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_da6ff9e5cd756a05b3c4f88ef3a715c2263f7b0f4c3cad0e4dfd7563b6db896e = $this->env->getExtension("native_profiler");
        $__internal_da6ff9e5cd756a05b3c4f88ef3a715c2263f7b0f4c3cad0e4dfd7563b6db896e->enter($__internal_da6ff9e5cd756a05b3c4f88ef3a715c2263f7b0f4c3cad0e4dfd7563b6db896e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_da6ff9e5cd756a05b3c4f88ef3a715c2263f7b0f4c3cad0e4dfd7563b6db896e->leave($__internal_da6ff9e5cd756a05b3c4f88ef3a715c2263f7b0f4c3cad0e4dfd7563b6db896e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
