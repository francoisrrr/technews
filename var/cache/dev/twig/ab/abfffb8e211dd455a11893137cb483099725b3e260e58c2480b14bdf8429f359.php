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
class __TwigTemplate_557e98d568552be5fe29eaa01779d1159efeb9ac82f5e24a0d4c0f380ca26040 extends \Twig\Template
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
        echo "    Catégorie
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
            <div class=\"box-caption\">
                <span>Computing</span>
            </div>
            <!--list-news-cate-->
            <div class=\"list-news-cate\">
                <article class=\"news-cate-item\">
                    <div class=\"row\">
                        <div class=\"col-md-5 col-sm-5 col-xs-12\">
                            <a href=\"#\">
                                <img alt=\"\" src=\"images/product/2.jpg\">
                            </a>
                        </div>
                        <div class=\"col-md-7 col-sm-7 col-xs-12\">
                            <h3><a href=\"#\">Tip Aligning Digital Marketing with Business Goals and Objectives</a></h3>
                            <div class=\"meta-post\">
                                <a href=\"#\">
                                    Hugo LIEGEARD
                                </a>
                                <em></em>
                                <span>
                                        2017-02-26 09:37:18
                                    </span>
                            </div>
                            Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere...
                        </div>
                    </div>
                </article>
            </div>

            <div class=\"paging\">
                <a href=\"#\">Prev</a>
                <a href=\"#\" class=\"current\">1</a>
                <a href=\"#\">2</a>
                <a href=\"#\">3</a>
                <a href=\"#\">4</a>
                <a href=\"#\">5</a>
                <a href=\"#\">Next</a>
            </div>

        </div>

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
        return array (  86 => 8,  77 => 7,  66 => 4,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block title %}
    Catégorie
{% endblock %}

{% block content %}
    <div class=\"row\">
        <!--colleft-->
        <div class=\"col-md-8 col-sm-12\">
            <div class=\"box-caption\">
                <span>Computing</span>
            </div>
            <!--list-news-cate-->
            <div class=\"list-news-cate\">
                <article class=\"news-cate-item\">
                    <div class=\"row\">
                        <div class=\"col-md-5 col-sm-5 col-xs-12\">
                            <a href=\"#\">
                                <img alt=\"\" src=\"images/product/2.jpg\">
                            </a>
                        </div>
                        <div class=\"col-md-7 col-sm-7 col-xs-12\">
                            <h3><a href=\"#\">Tip Aligning Digital Marketing with Business Goals and Objectives</a></h3>
                            <div class=\"meta-post\">
                                <a href=\"#\">
                                    Hugo LIEGEARD
                                </a>
                                <em></em>
                                <span>
                                        2017-02-26 09:37:18
                                    </span>
                            </div>
                            Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere...
                        </div>
                    </div>
                </article>
            </div>

            <div class=\"paging\">
                <a href=\"#\">Prev</a>
                <a href=\"#\" class=\"current\">1</a>
                <a href=\"#\">2</a>
                <a href=\"#\">3</a>
                <a href=\"#\">4</a>
                <a href=\"#\">5</a>
                <a href=\"#\">Next</a>
            </div>

        </div>

    </div>

{% endblock %}", "default/categorie.html.twig", "C:\\xampp\\htdocs\\techNews\\templates\\default\\categorie.html.twig");
    }
}
