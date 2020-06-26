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
class __TwigTemplate_bc4d131c3a9ea4e8affb9300640fdbc37fa66887556c243950c3b04f9c94bc83 extends Template
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
    <div class=\"example-wrapper\">
        <br><h1 style=\"text-align: center\">Quizz \"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
        echo " \"</h1><br><br>
        <div class=\"card\">
            <div class=\"card-header\">
                <br><h4>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 15, $this->source); })()), "question", [], "any", false, false, false, 15), "html", null, true);
        echo "</h4><br>
            </div>
            <div class=\"card-body\">
                <form action=\"\" name=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        echo "\">
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 20
            echo "                        ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), twig_get_attribute($this->env, $this->source, $context["reponse"], "id_question", [], "any", false, false, false, 20))) {
                // line 21
                echo "                            <input type=\"radio\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 21), "html", null, true);
                echo "\" name=\"reponse\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse_expected", [], "any", false, false, false, 21), "html", null, true);
                echo "\">
                            <label for=\"";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 22), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 22), "html", null, true);
                echo "</label><br>
                        ";
            }
            // line 24
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                    <br><input type=\"submit\" class=\"btn btn-secondary\" value=\"Valider\">
                </form>
            </div>
            <div class=\"card-footer text-center\">
            ";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["nextQuest"]) || array_key_exists("nextQuest", $context) ? $context["nextQuest"] : (function () { throw new RuntimeError('Variable "nextQuest" does not exist.', 29, $this->source); })()));
        echo "
            ";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 30, $this->source); })()));
        echo "
            ";
        // line 31
        if (1 === twig_compare((isset($context["nextQuest"]) || array_key_exists("nextQuest", $context) ? $context["nextQuest"] : (function () { throw new RuntimeError('Variable "nextQuest" does not exist.', 31, $this->source); })()), (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 31, $this->source); })()))) {
            // line 32
            echo "            
                ";
            // line 33
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["expected"]) || array_key_exists("expected", $context) ? $context["expected"] : (function () { throw new RuntimeError('Variable "expected" does not exist.', 33, $this->source); })()), "reponse_expected", [], "any", false, false, false, 33), (isset($context["validate"]) || array_key_exists("validate", $context) ? $context["validate"] : (function () { throw new RuntimeError('Variable "validate" does not exist.', 33, $this->source); })()))) {
                // line 34
                echo "                    <div class=\"alert alert-success\" role=\"alert\">
                       Bonne réponse !
                    </div>
                    <a href=\"/categorie/";
                // line 37
                echo twig_escape_filter($this->env, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 37, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 37, $this->source); })()), "html", null, true);
                echo "\"><button class=\"btn btn-primary\">Résultat</button></a>
                ";
            } elseif (0 === twig_compare(            // line 38
(isset($context["validate"]) || array_key_exists("validate", $context) ? $context["validate"] : (function () { throw new RuntimeError('Variable "validate" does not exist.', 38, $this->source); })()), null)) {
                // line 39
                echo "                ";
            } else {
                // line 40
                echo "                    <br><div class=\"alert alert-danger\" role=\"alert\">
                        Faux, la réponse est : ";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["expected"]) || array_key_exists("expected", $context) ? $context["expected"] : (function () { throw new RuntimeError('Variable "expected" does not exist.', 41, $this->source); })()), "reponse", [], "any", false, false, false, 41), "html", null, true);
                echo "
                    </div><br>
                    <a href=\"/categorie/";
                // line 43
                echo twig_escape_filter($this->env, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 43, $this->source); })()), "html", null, true);
                echo "/resultat\"><button class=\"btn btn-primary\">Résultat</button></a><br>
                ";
            }
            // line 45
            echo "            ";
        } else {
            // line 46
            echo "                ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["expected"]) || array_key_exists("expected", $context) ? $context["expected"] : (function () { throw new RuntimeError('Variable "expected" does not exist.', 46, $this->source); })()), "reponse_expected", [], "any", false, false, false, 46), (isset($context["validate"]) || array_key_exists("validate", $context) ? $context["validate"] : (function () { throw new RuntimeError('Variable "validate" does not exist.', 46, $this->source); })()))) {
                // line 47
                echo "                    <div class=\"alert alert-success\" role=\"alert\">
                        Bonne réponse !
                    </div>
                    <a href=\"/categorie/";
                // line 50
                echo twig_escape_filter($this->env, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 50, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["nextQuest"]) || array_key_exists("nextQuest", $context) ? $context["nextQuest"] : (function () { throw new RuntimeError('Variable "nextQuest" does not exist.', 50, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 50, $this->source); })()), "html", null, true);
                echo "\"><button class=\"btn btn-primary\">Question suivante</button></a>
                ";
            } elseif (0 === twig_compare(            // line 51
(isset($context["validate"]) || array_key_exists("validate", $context) ? $context["validate"] : (function () { throw new RuntimeError('Variable "validate" does not exist.', 51, $this->source); })()), null)) {
                // line 52
                echo "                ";
            } else {
                // line 53
                echo "                    <br><div class=\"alert alert-danger\" role=\"alert\">
                        Faux, la réponse est : ";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["expected"]) || array_key_exists("expected", $context) ? $context["expected"] : (function () { throw new RuntimeError('Variable "expected" does not exist.', 54, $this->source); })()), "reponse", [], "any", false, false, false, 54), "html", null, true);
                echo "
                    </div><br>
                    <a href=\"/categorie/";
                // line 56
                echo twig_escape_filter($this->env, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 56, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["nextQuest"]) || array_key_exists("nextQuest", $context) ? $context["nextQuest"] : (function () { throw new RuntimeError('Variable "nextQuest" does not exist.', 56, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 56, $this->source); })()), "html", null, true);
                echo "\"><button>Question suivante</button></a><br>
                ";
            }
            // line 58
            echo "            ";
        }
        // line 59
        echo "                <p>score : ";
        echo twig_escape_filter($this->env, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "</p>
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
        return array (  233 => 59,  230 => 58,  221 => 56,  216 => 54,  213 => 53,  210 => 52,  208 => 51,  200 => 50,  195 => 47,  192 => 46,  189 => 45,  184 => 43,  179 => 41,  176 => 40,  173 => 39,  171 => 38,  165 => 37,  160 => 34,  158 => 33,  155 => 32,  153 => 31,  149 => 30,  145 => 29,  139 => 25,  133 => 24,  126 => 22,  119 => 21,  116 => 20,  112 => 19,  108 => 18,  102 => 15,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
    <div class=\"example-wrapper\">
        <br><h1 style=\"text-align: center\">Quizz \"{{ categories.name }} \"</h1><br><br>
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
            {{ dump(nextQuest) }}
            {{ dump(last) }}
            {% if nextQuest > last %}
            
                {% if expected.reponse_expected == validate %}
                    <div class=\"alert alert-success\" role=\"alert\">
                       Bonne réponse !
                    </div>
                    <a href=\"/categorie/{{ cat }}/{{ score }}\"><button class=\"btn btn-primary\">Résultat</button></a>
                {% elseif validate == null %}
                {% else %}
                    <br><div class=\"alert alert-danger\" role=\"alert\">
                        Faux, la réponse est : {{ expected.reponse }}
                    </div><br>
                    <a href=\"/categorie/{{ cat }}/resultat\"><button class=\"btn btn-primary\">Résultat</button></a><br>
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
                <p>score : {{ score }}</p>
            </div>
            
        </div>
    </div>
</div>
{% endblock %}
", "question/index.html.twig", "/home/MVC_My_Quiz/my_quiz/templates/question/index.html.twig");
    }
}
