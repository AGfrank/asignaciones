<?php

/* SensioDistributionBundle::Configurator/final.html.twig */
class __TwigTemplate_12ffaa4ba29555831a0ae397eaf1de2948275983d24bbf677a537c42af1eba25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "SensioDistributionBundle::Configurator/final.html.twig", 1);
        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0441fc7c52e751273957a71d371dbb0d5bc24c24745e7d85e469ac4be04d1eb7 = $this->env->getExtension("native_profiler");
        $__internal_0441fc7c52e751273957a71d371dbb0d5bc24c24745e7d85e469ac4be04d1eb7->enter($__internal_0441fc7c52e751273957a71d371dbb0d5bc24c24745e7d85e469ac4be04d1eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/final.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0441fc7c52e751273957a71d371dbb0d5bc24c24745e7d85e469ac4be04d1eb7->leave($__internal_0441fc7c52e751273957a71d371dbb0d5bc24c24745e7d85e469ac4be04d1eb7_prof);

    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        $__internal_681bbf8a0b2fe25c2c0ff695b2cfd3d658364697134614bb67d44a5fc5526b7b = $this->env->getExtension("native_profiler");
        $__internal_681bbf8a0b2fe25c2c0ff695b2cfd3d658364697134614bb67d44a5fc5526b7b->enter($__internal_681bbf8a0b2fe25c2c0ff695b2cfd3d658364697134614bb67d44a5fc5526b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_class"));

        echo "config_done";
        
        $__internal_681bbf8a0b2fe25c2c0ff695b2cfd3d658364697134614bb67d44a5fc5526b7b->leave($__internal_681bbf8a0b2fe25c2c0ff695b2cfd3d658364697134614bb67d44a5fc5526b7b_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_33b52a0ecc4ba6316834566edfb8c89f4b7ac963d3b8607443fddb86d5a0e9dc = $this->env->getExtension("native_profiler");
        $__internal_33b52a0ecc4ba6316834566edfb8c89f4b7ac963d3b8607443fddb86d5a0e9dc->enter($__internal_33b52a0ecc4ba6316834566edfb8c89f4b7ac963d3b8607443fddb86d5a0e9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if ((isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url"))) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url")), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
        
        $__internal_33b52a0ecc4ba6316834566edfb8c89f4b7ac963d3b8607443fddb86d5a0e9dc->leave($__internal_33b52a0ecc4ba6316834566edfb8c89f4b7ac963d3b8607443fddb86d5a0e9dc_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  100 => 26,  97 => 25,  95 => 24,  90 => 22,  85 => 19,  79 => 17,  73 => 15,  71 => 14,  67 => 12,  63 => 10,  59 => 8,  57 => 7,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
