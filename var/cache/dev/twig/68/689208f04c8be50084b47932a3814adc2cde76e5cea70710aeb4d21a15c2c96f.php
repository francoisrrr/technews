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

/* default/categorie.html.twig */
class __TwigTemplate_c6f237cb3009c31bd2ca584e7b4fcb236f968b487823a4469bb5024ab4e3d9f8 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/categorie.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/categorie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 4, $this->source); })()), "nom", []), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div class=\"row\">
        <!--colleft-->
        <div class=\"col-md-8 col-sm-12\">
            ";
        // line 11
        if ( !twig_test_empty((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "            <div class=\"box-caption\">
                <span>
                    ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 14, $this->source); })()), "nom", []), "html", null, true);
            echo "
                </span>
            </div>
            <!--list-news-cate-->
            <div class=\"list-news-cate\">
                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 20
                echo "                    <article class=\"news-cate-item\">
                    <div class=\"row\">
                        <div class=\"col-md-5 col-sm-5 col-xs-12\">
                            <a href=\"#\">
                                <img alt=\"\" src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/product/" . twig_get_attribute($this->env, $this->source, $context["article"], "featuredImage", []))), "html", null, true);
                echo "\">
                            </a>
                        </div>
                        <div class=\"col-md-7 col-sm-7 col-xs-12\">
                            <h3><a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default_article", ["categorie" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 29
$context["article"], "categorie", []), "slug", []), "slug" => twig_get_attribute($this->env, $this->source,                 // line 30
$context["article"], "slug", []), "id" => twig_get_attribute($this->env, $this->source,                 // line 31
$context["article"], "id", [])]), "html", null, true);
                // line 32
                echo "\">
                                    ";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", []), "html", null, true);
                echo "
                                </a></h3>
                            <div class=\"meta-post\">
                                <a href=\"#\">
                                    ";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "membre", []), "nom", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "membre", []), "prenom", []), "html", null, true);
                echo "
                                </a>
                                <em></em>
                                <span>
                                    ";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "dateCreation", []), "d/m/Y"), "html", null, true);
                echo "
                                </span>
                            </div>
                            ";
                // line 44
                echo call_user_func_array($this->env->getFilter('summarize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["article"], "contenu", [])]);
                echo "
                        </div>
                    </div>
                </article>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "            </div>
            ";
        } else {
            // line 51
            echo "                <div class=\"alert alert-danger\">
                    <strong>Aucune publication pour le moment</strong>
                </div>
            ";
        }
        // line 55
        echo "
            ";
        // line 57
        echo "                ";
        // line 58
        echo "                ";
        // line 59
        echo "                ";
        // line 60
        echo "                ";
        // line 61
        echo "                ";
        // line 62
        echo "                ";
        // line 63
        echo "                ";
        // line 64
        echo "            ";
        // line 65
        echo "
        </div>
        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\DefaultController::sidebar"));
        echo "
    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 67,  194 => 65,  192 => 64,  190 => 63,  188 => 62,  186 => 61,  184 => 60,  182 => 59,  180 => 58,  178 => 57,  175 => 55,  169 => 51,  165 => 49,  154 => 44,  148 => 41,  139 => 37,  132 => 33,  129 => 32,  127 => 31,  126 => 30,  125 => 29,  124 => 28,  117 => 24,  111 => 20,  107 => 19,  99 => 14,  95 => 12,  93 => 11,  88 => 8,  79 => 7,  66 => 4,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block title %}
    {{ categorie.nom }}
{% endblock %}

{% block content %}
    <div class=\"row\">
        <!--colleft-->
        <div class=\"col-md-8 col-sm-12\">
            {% if articles is not empty %}
            <div class=\"box-caption\">
                <span>
                    {{ categorie.nom }}
                </span>
            </div>
            <!--list-news-cate-->
            <div class=\"list-news-cate\">
                {% for article in articles %}
                    <article class=\"news-cate-item\">
                    <div class=\"row\">
                        <div class=\"col-md-5 col-sm-5 col-xs-12\">
                            <a href=\"#\">
                                <img alt=\"\" src=\"{{ asset('images/product/'~article.featuredImage)}}\">
                            </a>
                        </div>
                        <div class=\"col-md-7 col-sm-7 col-xs-12\">
                            <h3><a href=\"{{ path('default_article',{
                                    'categorie' : article.categorie.slug,
                                    'slug' : article.slug,
                                    'id' : article.id
                                }) }}\">
                                    {{ article.titre}}
                                </a></h3>
                            <div class=\"meta-post\">
                                <a href=\"#\">
                                    {{ article.membre.nom }} {{ article.membre.prenom }}
                                </a>
                                <em></em>
                                <span>
                                    {{ article.dateCreation | date('d/m/Y') }}
                                </span>
                            </div>
                            {{ article.contenu | summarize }}
                        </div>
                    </div>
                </article>
                {% endfor %}
            </div>
            {% else %}
                <div class=\"alert alert-danger\">
                    <strong>Aucune publication pour le moment</strong>
                </div>
            {% endif %}

            {#<div class=\"paging\">#}
                {#<a href=\"#\">Prev</a>#}
                {#<a href=\"#\" class=\"current\">1</a>#}
                {#<a href=\"#\">2</a>#}
                {#<a href=\"#\">3</a>#}
                {#<a href=\"#\">4</a>#}
                {#<a href=\"#\">5</a>#}
                {#<a href=\"#\">Next</a>#}
            {#</div>#}

        </div>
        {{ render(controller('App\\\\Controller\\\\DefaultController::sidebar')) }}
    </div>



{% endblock %}", "default/categorie.html.twig", "C:\\xampp\\htdocs\\techNews\\templates\\default\\categorie.html.twig");
    }
}
