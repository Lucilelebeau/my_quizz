<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* categorie/index.html.twig */
class __TwigTemplate_7c2e45795433da982c336ebd8b39e201e8b9e7bb490ca15a53329e734ee2d4ca extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categorie/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "My_quizz home";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .titre { text-align: center; }
    a { list-style: none; color: black; font-size: 20px; padding: 35px;}
</style>

<div class=\"titre\">
    <br><h1>Bienvenue sur My Quizz</h1><br>
    ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13)) {
            // line 14
            echo "    <i><h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14), "html", null, true);
            echo "</h3></i>
    ";
        }
        // line 16
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 17
            echo "    <h3>Admin</h3><br>
    ";
        }
        // line 19
        echo "    <br><h4>Le meilleur site pour passer le temps pendant le confinement !</h4><br><br><br>
</div>
<div class=\"card\" style=\"width: 38rem;\">
  <div class=\"card-header text-center\">
    <br><h3>Choisis ton Quizz :</h3><br>
</div>
    
    <ul class=\"list-group list-group-flush\">
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 28
            echo "            <li class=\"list-group-item\"><a href=\"/categorie/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "/start/0\"/>
            ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo ". <b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 29), "html", null, true);
            echo "</b>
            ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30)) {
                // line 31
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["scoreData"]) || array_key_exists("scoreData", $context) ? $context["scoreData"] : (function () { throw new RuntimeError('Variable "scoreData" does not exist.', 31, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["scoredata"]) {
                    // line 32
                    echo "                    ";
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 32), twig_get_attribute($this->env, $this->source, $context["scoredata"], "id_categorie", [], "any", false, false, false, 32))) {
                        // line 33
                        echo "                        <i> -> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["scoredata"], "score", [], "any", false, false, false, 33), "html", null, true);
                        echo " / 10</i>
                    ";
                    }
                    // line 35
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scoredata'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "            ";
            } else {
                // line 37
                echo "                ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 37), (isset($context["id_cat"]) || array_key_exists("id_cat", $context) ? $context["id_cat"] : (function () { throw new RuntimeError('Variable "id_cat" does not exist.', 37, $this->source); })()))) {
                    // line 38
                    echo "                    -> ";
                    echo twig_escape_filter($this->env, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 38, $this->source); })()), "html", null, true);
                    echo " / 10
                ";
                }
                // line 40
                echo "            ";
            }
            // line 41
            echo "            </a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
        <li class=\"list-group-item text-center\">
            ";
        // line 45
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), null)) {
            // line 46
            echo "                <a href=\"/login\" class=\"btn btn-info\">
                    Connecte-toi pour créer un quizz >></a>
            ";
        } else {
            // line 49
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\" class=\"btn btn-info\">
                    Créer un quizz >></a>
            ";
        }
        // line 52
        echo "        </li>
    </ul>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "categorie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 52,  192 => 49,  187 => 46,  185 => 45,  181 => 43,  174 => 41,  171 => 40,  165 => 38,  162 => 37,  159 => 36,  153 => 35,  147 => 33,  144 => 32,  139 => 31,  137 => 30,  131 => 29,  126 => 28,  122 => 27,  112 => 19,  108 => 17,  105 => 16,  99 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My_quizz home{% endblock %}

{% block body %}
<style>
    .titre { text-align: center; }
    a { list-style: none; color: black; font-size: 20px; padding: 35px;}
</style>

<div class=\"titre\">
    <br><h1>Bienvenue sur My Quizz</h1><br>
    {% if app.user %}
    <i><h3>{{ app.user.name }}</h3></i>
    {% endif %}
    {% if is_granted('ROLE_ADMIN') %}
    <h3>Admin</h3><br>
    {% endif %}
    <br><h4>Le meilleur site pour passer le temps pendant le confinement !</h4><br><br><br>
</div>
<div class=\"card\" style=\"width: 38rem;\">
  <div class=\"card-header text-center\">
    <br><h3>Choisis ton Quizz :</h3><br>
</div>
    
    <ul class=\"list-group list-group-flush\">
        {% for categorie in categories %}
            <li class=\"list-group-item\"><a href=\"/categorie/{{ categorie.id }}/start/0\"/>
            {{ categorie.id }}. <b>{{ categorie.name }}</b>
            {% if app.user %}
                {% for scoredata in scoreData %}
                    {% if categorie.id == scoredata.id_categorie %}
                        <i> -> {{ scoredata.score }} / 10</i>
                    {% endif %}
                {% endfor %}
            {% else %}
                {% if categorie.id == id_cat %}
                    -> {{ score }} / 10
                {% endif %}
            {% endif %}
            </a></li>
        {% endfor %}

        <li class=\"list-group-item text-center\">
            {% if app.user == null %}
                <a href=\"/login\" class=\"btn btn-info\">
                    Connecte-toi pour créer un quizz >></a>
            {% else %}
                <a href=\"{{ path('home') }}\" class=\"btn btn-info\">
                    Créer un quizz >></a>
            {% endif %}
        </li>
    </ul>
</div>
{% endblock %}
", "categorie/index.html.twig", "/home/MVC_My_Quiz/my_quiz/templates/categorie/index.html.twig");
    }
}
