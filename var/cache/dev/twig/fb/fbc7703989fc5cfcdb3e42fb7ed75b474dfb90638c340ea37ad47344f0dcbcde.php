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

/* question/index.html.twig */
class __TwigTemplate_ea937cc3ccd903673b455d8adaf5f9dc84e7f442f303730ca05f6a4fd23f7905 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "question/index.html.twig", 1);
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

        echo "Question";
        
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
    .example-wrapper { margin: 1em auto; font: 20px/1.5 sans-serif; }
</style>

<div class=\"col-9\">
";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["nextQuest"]) || array_key_exists("nextQuest", $context) ? $context["nextQuest"] : (function () { throw new RuntimeError('Variable "nextQuest" does not exist.', 11, $this->source); })()));
        echo "
    <div class=\"example-wrapper\">
        <br><h1 style=\"text-align: center\">Quizz \"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "\"</h1><br><br>
        <div class=\"card\">
            <div class=\"card-header\">
                <br><h4>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 16, $this->source); })()), "question", [], "any", false, false, false, 16), "html", null, true);
        echo "</h4><br>
            </div>
            <div class=\"card-body\">
                <form action=\"\" name=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 21
            echo "                        ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), twig_get_attribute($this->env, $this->source, $context["reponse"], "id_question", [], "any", false, false, false, 21))) {
                // line 22
                echo "                            <input type=\"radio\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 22), "html", null, true);
                echo "\" name=\"reponse\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse_expected", [], "any", false, false, false, 22), "html", null, true);
                echo "\">
                            <label for=\"";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 23), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 23), "html", null, true);
                echo "</label><br>
                        ";
            }
            // line 25
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                    <br><input type=\"submit\" class=\"btn btn-secondary\" value=\"Valider\">
                </form>
            </div>
            <div class=\"card-footer text-center\">
            ";
        // line 30
        if (0 === twig_compare((isset($context["nextQuest"]) || array_key_exists("nextQuest", $context) ? $context["nextQuest"] : (function () { throw new RuntimeError('Variable "nextQuest" does not exist.', 30, $this->source); })()), 10)) {
            // line 31
            echo "                ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["expected"]) || array_key_exists("expected", $context) ? $context["expected"] : (function () { throw new RuntimeError('Variable "expected" does not exist.', 31, $this->source); })()), "reponse_expected", [], "any", false, false, false, 31), (isset($context["validate"]) || array_key_exists("validate", $context) ? $context["validate"] : (function () { throw new RuntimeError('Variable "validate" does not exist.', 31, $this->source); })()))) {
                // line 32
                echo "                    <div class=\"alert alert-success\" role=\"alert\">
                        Bonne réponse !
                    </div>
                    <a href=\"/categorie/resultat.html.twig\"><button class=\"btn btn-primary\">Question suivante</button></a>
                ";
            } elseif (0 === twig_compare(            // line 36
(isset($context["validate"]) || array_key_exists("validate", $context) ? $context["validate"] : (function () { throw new RuntimeError('Variable "validate" does not exist.', 36, $this->source); })()), null)) {
                // line 37
                echo "                ";
            } else {
                // line 38
                echo "                    <br><div class=\"alert alert-danger\" role=\"alert\">
                        Faux, la réponse est : ";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["expected"]) || array_key_exists("expected", $context) ? $context["expected"] : (function () { throw new RuntimeError('Variable "expected" does not exist.', 39, $this->source); })()), "reponse", [], "any", false, false, false, 39), "html", null, true);
                echo "
                    </div><br>
                    <a href=\"/categorie/";
                // line 41
                echo twig_escape_filter($this->env, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 41, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["nextQuest"]) || array_key_exists("nextQuest", $context) ? $context["nextQuest"] : (function () { throw new RuntimeError('Variable "nextQuest" does not exist.', 41, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 41, $this->source); })()), "html", null, true);
                echo "\"><button>Question suivante</button></a><br>
                ";
            }
            // line 43
            echo "            ";
        } else {
            // line 44
            echo "                ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["expected"]) || array_key_exists("expected", $context) ? $context["expected"] : (function () { throw new RuntimeError('Variable "expected" does not exist.', 44, $this->source); })()), "reponse_expected", [], "any", false, false, false, 44), (isset($context["validate"]) || array_key_exists("validate", $context) ? $context["validate"] : (function () { throw new RuntimeError('Variable "validate" does not exist.', 44, $this->source); })()))) {
                // line 45
                echo "                    <div class=\"alert alert-success\" role=\"alert\">
                        Bonne réponse !
                    </div>
                    <a href=\"/categorie/";
                // line 48
                echo twig_escape_filter($this->env, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 48, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["nextQuest"]) || array_key_exists("nextQuest", $context) ? $context["nextQuest"] : (function () { throw new RuntimeError('Variable "nextQuest" does not exist.', 48, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 48, $this->source); })()), "html", null, true);
                echo "\"><button class=\"btn btn-primary\">Question suivante</button></a>
                ";
            } elseif (0 === twig_compare(            // line 49
(isset($context["validate"]) || array_key_exists("validate", $context) ? $context["validate"] : (function () { throw new RuntimeError('Variable "validate" does not exist.', 49, $this->source); })()), null)) {
                // line 50
                echo "                ";
            } else {
                // line 51
                echo "                    <br><div class=\"alert alert-danger\" role=\"alert\">
                        Faux, la réponse est : ";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["expected"]) || array_key_exists("expected", $context) ? $context["expected"] : (function () { throw new RuntimeError('Variable "expected" does not exist.', 52, $this->source); })()), "reponse", [], "any", false, false, false, 52), "html", null, true);
                echo "
                    </div><br>
                    <a href=\"/categorie/";
                // line 54
                echo twig_escape_filter($this->env, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 54, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["nextQuest"]) || array_key_exists("nextQuest", $context) ? $context["nextQuest"] : (function () { throw new RuntimeError('Variable "nextQuest" does not exist.', 54, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 54, $this->source); })()), "html", null, true);
                echo "\"><button>Question suivante</button></a><br>
                ";
            }
            // line 56
            echo "            ";
        }
        // line 57
        echo "                <p>score : ";
        echo twig_escape_filter($this->env, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "/10</p>
            </div>
            
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "question/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 57,  223 => 56,  214 => 54,  209 => 52,  206 => 51,  203 => 50,  201 => 49,  193 => 48,  188 => 45,  185 => 44,  182 => 43,  173 => 41,  168 => 39,  165 => 38,  162 => 37,  160 => 36,  154 => 32,  151 => 31,  149 => 30,  143 => 26,  137 => 25,  130 => 23,  123 => 22,  120 => 21,  116 => 20,  112 => 19,  106 => 16,  100 => 13,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Question{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; font: 20px/1.5 sans-serif; }
</style>

<div class=\"col-9\">
{{ dump(nextQuest) }}
    <div class=\"example-wrapper\">
        <br><h1 style=\"text-align: center\">Quizz \"{{ categories.name }}\"</h1><br><br>
        <div class=\"card\">
            <div class=\"card-header\">
                <br><h4>{{ questions.question }}</h4><br>
            </div>
            <div class=\"card-body\">
                <form action=\"\" name=\"{{ questions.id }}\">
                    {% for reponse in reponses %}
                        {% if questions.id == reponse.id_question %}
                            <input type=\"radio\" id=\"{{ reponse.id }}\" name=\"reponse\" value=\"{{ reponse.reponse_expected }}\">
                            <label for=\"{{ reponse.id }}\">{{ reponse.reponse }}</label><br>
                        {% endif %}
                    {% endfor %}
                    <br><input type=\"submit\" class=\"btn btn-secondary\" value=\"Valider\">
                </form>
            </div>
            <div class=\"card-footer text-center\">
            {% if nextQuest  == 10 %}
                {% if expected.reponse_expected == validate %}
                    <div class=\"alert alert-success\" role=\"alert\">
                        Bonne réponse !
                    </div>
                    <a href=\"/categorie/resultat.html.twig\"><button class=\"btn btn-primary\">Question suivante</button></a>
                {% elseif validate == null %}
                {% else %}
                    <br><div class=\"alert alert-danger\" role=\"alert\">
                        Faux, la réponse est : {{ expected.reponse }}
                    </div><br>
                    <a href=\"/categorie/{{ cat }}/{{ nextQuest }}/{{ score }}\"><button>Question suivante</button></a><br>
                {% endif %}
            {% else %}
                {% if expected.reponse_expected == validate %}
                    <div class=\"alert alert-success\" role=\"alert\">
                        Bonne réponse !
                    </div>
                    <a href=\"/categorie/{{ cat }}/{{ nextQuest }}/{{ score }}\"><button class=\"btn btn-primary\">Question suivante</button></a>
                {% elseif validate == null %}
                {% else %}
                    <br><div class=\"alert alert-danger\" role=\"alert\">
                        Faux, la réponse est : {{ expected.reponse }}
                    </div><br>
                    <a href=\"/categorie/{{ cat }}/{{ nextQuest }}/{{ score }}\"><button>Question suivante</button></a><br>
                {% endif %}
            {% endif %}
                <p>score : {{ score }}/10</p>
            </div>
            
        </div>
    </div>
</div>
{% endblock %}
", "question/index.html.twig", "/home/MVC_My_Quiz/my_quiz/templates/question/index.html.twig");
    }
}
