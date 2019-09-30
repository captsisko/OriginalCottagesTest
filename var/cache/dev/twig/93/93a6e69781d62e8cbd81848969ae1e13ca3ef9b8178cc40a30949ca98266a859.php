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

/* postcode.html.twig */
class __TwigTemplate_570c3102f6698e98f2c4f13ee445ee78e5949f83046397f3f6adcc0b9c581286 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postcode.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "postcode.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div><p>Please provide a postcode argument as part of a url in the following form: <a href=\"http://originalcottagetest.com/index.php/w11%203by\">http://originalcottagetest.com/index.php/w11 3by</a></p>
    Postcode authentication powered by the <a href=\"https://postcodes.io/\" target=\"_blank\">postcodes.io</a> API.</div>
    <h1>Postcode Authenticating System:</h1>

    ";
        // line 14
        if ($this->getAttribute(($context["feedback"] ?? $this->getContext($context, "feedback")), "result", [])) {
            // line 15
            echo "        <b>";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["postcode"] ?? $this->getContext($context, "postcode"))), "html", null, true);
            echo "</b> is valid!
    ";
        } elseif ( !$this->getAttribute(        // line 16
($context["feedback"] ?? $this->getContext($context, "feedback")), "result", [])) {
            // line 17
            echo "        <b>";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["postcode"] ?? $this->getContext($context, "postcode"))), "html", null, true);
            echo "</b> is <u>NOT</u> valid!
    ";
        }
        // line 19
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "postcode.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  66 => 17,  64 => 16,  59 => 15,  57 => 14,  51 => 10,  45 => 9,  29 => 1,);
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
    <div><p>Please provide a postcode argument as part of a url in the following form: <a href=\"http://originalcottagetest.com/index.php/w11%203by\">http://originalcottagetest.com/index.php/w11 3by</a></p>
    Postcode authentication powered by the <a href=\"https://postcodes.io/\" target=\"_blank\">postcodes.io</a> API.</div>
    <h1>Postcode Authenticating System:</h1>

    {% if feedback.result %}
        <b>{{ postcode|capitalize }}</b> is valid!
    {% elseif not feedback.result %}
        <b>{{ postcode|capitalize }}</b> is <u>NOT</u> valid!
    {% endif %}

{% endblock %}", "postcode.html.twig", "/var/www/OriginalCottageTest/templates/postcode.html.twig");
    }
}
