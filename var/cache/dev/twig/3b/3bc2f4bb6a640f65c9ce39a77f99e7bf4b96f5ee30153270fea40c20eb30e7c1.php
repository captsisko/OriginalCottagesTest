<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* calculations.html.twig */
class __TwigTemplate_1264be6fdbf0a0bf4cec4f6b5b4a7b7b00e7006761a9a7b55064139f63e048f3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calculations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "calculations.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "




    <div>This function uses an argument supplied in the url to create the required array. Just supply an argument in the format: <a href=\"http://originalcottagetest.com/index.php/calculations/15\">http://originalcottagetest.com/index.php/calculations/15</a></div>

    <h1>Calculations Page</h1>
    <b>Sequence of numbers:</b> ";
        // line 12
        echo twig_escape_filter($this->env, twig_join_filter(($context["array"] ?? $this->getContext($context, "array")), ", "), "html", null, true);
        echo "
    <br>
    <b>Median:</b> ";
        // line 14
        echo twig_escape_filter($this->env, ($context["median"] ?? $this->getContext($context, "median")), "html", null, true);
        echo "
    <br>
    <b>Mean:</b> ";
        // line 16
        echo twig_escape_filter($this->env, ($context["mean"] ?? $this->getContext($context, "mean")), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "calculations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  66 => 14,  61 => 12,  51 => 4,  45 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}





    <div>This function uses an argument supplied in the url to create the required array. Just supply an argument in the format: <a href=\"http://originalcottagetest.com/index.php/calculations/15\">http://originalcottagetest.com/index.php/calculations/15</a></div>

    <h1>Calculations Page</h1>
    <b>Sequence of numbers:</b> {{ array|join(', ') }}
    <br>
    <b>Median:</b> {{ median }}
    <br>
    <b>Mean:</b> {{ mean }}
{% endblock %}", "calculations.html.twig", "/var/www/OriginalCottageTest/templates/calculations.html.twig");
    }
}
