<?php

/* project/new.html.twig */
class __TwigTemplate_a2ff3f0c1da972c6866b0a91609513eb6320028f5247efe5826930201890d1a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_389f7b3bea6905d12a1d0c2c0f718c02a9ef4b0a2f106e1c6e712208c3e63779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389f7b3bea6905d12a1d0c2c0f718c02a9ef4b0a2f106e1c6e712208c3e63779->enter($__internal_389f7b3bea6905d12a1d0c2c0f718c02a9ef4b0a2f106e1c6e712208c3e63779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_389f7b3bea6905d12a1d0c2c0f718c02a9ef4b0a2f106e1c6e712208c3e63779->leave($__internal_389f7b3bea6905d12a1d0c2c0f718c02a9ef4b0a2f106e1c6e712208c3e63779_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_930bcb20998d894db0ca09e7b203c13085465c56bffb6d598261fedf37c2d5c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_930bcb20998d894db0ca09e7b203c13085465c56bffb6d598261fedf37c2d5c3->enter($__internal_930bcb20998d894db0ca09e7b203c13085465c56bffb6d598261fedf37c2d5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Project creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_930bcb20998d894db0ca09e7b203c13085465c56bffb6d598261fedf37c2d5c3->leave($__internal_930bcb20998d894db0ca09e7b203c13085465c56bffb6d598261fedf37c2d5c3_prof);

    }

    public function getTemplateName()
    {
        return "project/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Project creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('project_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "project/new.html.twig", "/home/labxone/Documents/PHP_Avance_II_Techweb/app/Resources/views/project/new.html.twig");
    }
}
