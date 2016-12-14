<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_dc91587cf4690e3d125f9a6c2330bb64d60818ab60d6c9b132b0c1c710a84008 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09f7e4303225b5dc7fb1fab75209e5705f240b2282a0eb1e7557f4f839b9bf8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f7e4303225b5dc7fb1fab75209e5705f240b2282a0eb1e7557f4f839b9bf8b->enter($__internal_09f7e4303225b5dc7fb1fab75209e5705f240b2282a0eb1e7557f4f839b9bf8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09f7e4303225b5dc7fb1fab75209e5705f240b2282a0eb1e7557f4f839b9bf8b->leave($__internal_09f7e4303225b5dc7fb1fab75209e5705f240b2282a0eb1e7557f4f839b9bf8b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff8e802b40da84f2791b26f6af1bfdcb5e471c7669b94d223091515dfd1de4bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8e802b40da84f2791b26f6af1bfdcb5e471c7669b94d223091515dfd1de4bf->enter($__internal_ff8e802b40da84f2791b26f6af1bfdcb5e471c7669b94d223091515dfd1de4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_ff8e802b40da84f2791b26f6af1bfdcb5e471c7669b94d223091515dfd1de4bf->leave($__internal_ff8e802b40da84f2791b26f6af1bfdcb5e471c7669b94d223091515dfd1de4bf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/labxone/Documents/PHP_Avance_II_Techweb/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
