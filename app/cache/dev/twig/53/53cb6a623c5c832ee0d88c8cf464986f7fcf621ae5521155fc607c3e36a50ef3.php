<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0332b47354e6761976bd5c8576489eb501b769232a5965b056d0cfb577c0fb7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_bc466e2ab3624c27079e058f92703d5f8b4852b2dc043b74bab0fadb7e379cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc466e2ab3624c27079e058f92703d5f8b4852b2dc043b74bab0fadb7e379cae->enter($__internal_bc466e2ab3624c27079e058f92703d5f8b4852b2dc043b74bab0fadb7e379cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc466e2ab3624c27079e058f92703d5f8b4852b2dc043b74bab0fadb7e379cae->leave($__internal_bc466e2ab3624c27079e058f92703d5f8b4852b2dc043b74bab0fadb7e379cae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6ba19db0dfd36f123dd2df3d72e87d7ea3f3ae7d7ee7ed27bf4e9b778fbc95f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ba19db0dfd36f123dd2df3d72e87d7ea3f3ae7d7ee7ed27bf4e9b778fbc95f->enter($__internal_c6ba19db0dfd36f123dd2df3d72e87d7ea3f3ae7d7ee7ed27bf4e9b778fbc95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c6ba19db0dfd36f123dd2df3d72e87d7ea3f3ae7d7ee7ed27bf4e9b778fbc95f->leave($__internal_c6ba19db0dfd36f123dd2df3d72e87d7ea3f3ae7d7ee7ed27bf4e9b778fbc95f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/labxone/Documents/PHP_Avance_II_Techweb/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
