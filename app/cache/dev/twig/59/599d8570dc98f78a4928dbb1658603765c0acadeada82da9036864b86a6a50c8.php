<?php

/* project/show.html.twig */
class __TwigTemplate_3a544f06b4c74f036c5e9d3e793d886d74ada03ba450975e5ebe8430413f9b0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/show.html.twig", 1);
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
        $__internal_031fb372d67867e3fe1dfec490e04e48a5db3817c17732a14525b1e9c5008fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031fb372d67867e3fe1dfec490e04e48a5db3817c17732a14525b1e9c5008fcc->enter($__internal_031fb372d67867e3fe1dfec490e04e48a5db3817c17732a14525b1e9c5008fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_031fb372d67867e3fe1dfec490e04e48a5db3817c17732a14525b1e9c5008fcc->leave($__internal_031fb372d67867e3fe1dfec490e04e48a5db3817c17732a14525b1e9c5008fcc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_317ed927782bac632dc9505333df2ca8e38a15b1e72f550552f649604ad75006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_317ed927782bac632dc9505333df2ca8e38a15b1e72f550552f649604ad75006->enter($__internal_317ed927782bac632dc9505333df2ca8e38a15b1e72f550552f649604ad75006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Project</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_edit", array("id" => $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_317ed927782bac632dc9505333df2ca8e38a15b1e72f550552f649604ad75006->leave($__internal_317ed927782bac632dc9505333df2ca8e38a15b1e72f550552f649604ad75006_prof);

    }

    public function getTemplateName()
    {
        return "project/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Project</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ project.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ project.name }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('project_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('project_edit', { 'id': project.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "project/show.html.twig", "/home/labxone/Documents/PHP_Avance_II_Techweb/app/Resources/views/project/show.html.twig");
    }
}
