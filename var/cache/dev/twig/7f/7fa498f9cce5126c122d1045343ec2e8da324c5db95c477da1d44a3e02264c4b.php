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

/* default/article.html.twig */
class __TwigTemplate_6e166fdccbc9c33114ca067dcda238be5a27540e5174529d2a3db86b5a147593 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/article.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/article.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/article.html.twig"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 4, $this->source); })()), "titre", []), "html", null, true);
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
            <!--post-detail-->
            <article class=\"post-detail\">
                <h1>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 13, $this->source); })()), "titre", []), "html", null, true);
        echo "</h1>
                <div class=\"meta-post\">
                    <a href=\"#\">
                        ";
        // line 16
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "membre", []), "prenom", []) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "membre", []), "nom", [])), "html", null, true);
        echo "
                    </a>
                    <em></em>
                    <span>
                        ";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "dateCreation", []), "d/m/Y"), "html", null, true);
        echo "
                    </span>
                </div>

                <p>";
        // line 24
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 24, $this->source); })()), "contenu", []);
        echo "</p>


                <div class=\"post-detail-img\">
                    <img alt=\"\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/product/" . twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 28, $this->source); })()), "featuredImage", []))), "html", null, true);
        echo "\" />
                </div>
             <h5 class=\"text-right font-heading\"><strong>";
        // line 30
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 30, $this->source); })()), "membre", []), "prenom", []) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 30, $this->source); })()), "membre", []), "nom", [])), "html", null, true);
        echo "</strong> </h5>

            </article>
            <!--social-detail-->
            <div class=\"social-detail\">
                <span>   Share article</span>

                <ul class=\"list-social-icon\">
                    <li>
                        <a href=\"#\" class=\"facebook\">
                            <i class=\"fa fa-facebook\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"twitter\">
                            <i class=\"fa fa-twitter\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"google\">
                            <i class=\"fa fa-google\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"youtube\">
                            <i class=\"fa fa-youtube-play\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"pinterest\">
                            <i class=\"fa fa-pinterest-p\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"rss\">
                            <i class=\"fa fa-rss\"></i>
                        </a>
                    </li>

                </ul>
            </div>

            <!--related post-->
            <div class=\"detail-caption\">
                <span>  RELATED POST</span>
            </div>
            <section class=\"spotlight-thumbs spotlight-thumbs-related\">
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"spotlight-item-thumb\">
                            <div class=\"spotlight-item-thumb-img\">
                                <a href=\"#\">
                                    <img alt=\"\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/3.jpg"), "html", null, true);
        echo "\">
                                </a>
                                <a href=\"#\" class=\"cate-tag\">business</a>
                            </div>
                            <h3><a href=\"#\">Donald Trump suggests the DNC was hacked by 'someone sitting on their bed that weighs 400 lbs'</a></h3>
                            <div class=\"meta-post\">
                                <a href=\"#\">
                                    Sue\tBenson
                                </a>
                                <em></em>
                                <span>
                                            22 Sep 2016
                                        </span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"spotlight-item-thumb\">
                            <div class=\"spotlight-item-thumb-img\">
                                <a href=\"#\">
                                    <img alt=\"\" src=\"images/product/4.jpg\">
                                </a>
                                <a href=\"#\" class=\"cate-tag\">Computing</a>
                            </div>
                            <h3><a href=\"#\">Six big ways MacOS Sierra is going to change your Apple experience</a></h3>
                            <div class=\"meta-post\">
                                <a href=\"#\">
                                    Marion\tCraig
                                </a>
                                <em></em>
                                <span>
                                            21 Sep 2016
                                        </span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"spotlight-item-thumb\">
                            <div class=\"spotlight-item-thumb-img\">
                                <a href=\"#\">
                                    <img alt=\"\" src=\"images/product/5.jpg\">
                                </a>
                                <a href=\"#\" class=\"cate-tag\">Tech</a>
                            </div>
                            <h3><a href=\"#\">Messenger Bots Are Overhyped, Underpowered—and Growing like Crazy</a></h3>
                            <div class=\"meta-post\">
                                <a href=\"#\">
                                    Super User
                                </a>
                                <em></em>
                                <span>
                                            26 Sep 2016
                                        </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        ";
        // line 141
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\DefaultController::sidebar"));
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 141,  182 => 82,  127 => 30,  122 => 28,  115 => 24,  108 => 20,  101 => 16,  95 => 13,  88 => 8,  79 => 7,  66 => 4,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}
    {{ article.titre }}
{% endblock %}

{% block content %}
    <div class=\"row\">
        <!--colleft-->
        <div class=\"col-md-8 col-sm-12\">
            <!--post-detail-->
            <article class=\"post-detail\">
                <h1>{{ article.titre }}</h1>
                <div class=\"meta-post\">
                    <a href=\"#\">
                        {{ article.membre.prenom ~' '~ article.membre.nom }}
                    </a>
                    <em></em>
                    <span>
                        {{ article.dateCreation | date('d/m/Y')  }}
                    </span>
                </div>

                <p>{{ article.contenu | raw }}</p>


                <div class=\"post-detail-img\">
                    <img alt=\"\" src=\"{{ asset('images/product/'~article.featuredImage)}}\" />
                </div>
             <h5 class=\"text-right font-heading\"><strong>{{ article.membre.prenom ~' '~ article.membre.nom }}</strong> </h5>

            </article>
            <!--social-detail-->
            <div class=\"social-detail\">
                <span>   Share article</span>

                <ul class=\"list-social-icon\">
                    <li>
                        <a href=\"#\" class=\"facebook\">
                            <i class=\"fa fa-facebook\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"twitter\">
                            <i class=\"fa fa-twitter\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"google\">
                            <i class=\"fa fa-google\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"youtube\">
                            <i class=\"fa fa-youtube-play\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"pinterest\">
                            <i class=\"fa fa-pinterest-p\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"rss\">
                            <i class=\"fa fa-rss\"></i>
                        </a>
                    </li>

                </ul>
            </div>

            <!--related post-->
            <div class=\"detail-caption\">
                <span>  RELATED POST</span>
            </div>
            <section class=\"spotlight-thumbs spotlight-thumbs-related\">
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"spotlight-item-thumb\">
                            <div class=\"spotlight-item-thumb-img\">
                                <a href=\"#\">
                                    <img alt=\"\" src=\"{{ asset('images/product/3.jpg') }}\">
                                </a>
                                <a href=\"#\" class=\"cate-tag\">business</a>
                            </div>
                            <h3><a href=\"#\">Donald Trump suggests the DNC was hacked by 'someone sitting on their bed that weighs 400 lbs'</a></h3>
                            <div class=\"meta-post\">
                                <a href=\"#\">
                                    Sue\tBenson
                                </a>
                                <em></em>
                                <span>
                                            22 Sep 2016
                                        </span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"spotlight-item-thumb\">
                            <div class=\"spotlight-item-thumb-img\">
                                <a href=\"#\">
                                    <img alt=\"\" src=\"images/product/4.jpg\">
                                </a>
                                <a href=\"#\" class=\"cate-tag\">Computing</a>
                            </div>
                            <h3><a href=\"#\">Six big ways MacOS Sierra is going to change your Apple experience</a></h3>
                            <div class=\"meta-post\">
                                <a href=\"#\">
                                    Marion\tCraig
                                </a>
                                <em></em>
                                <span>
                                            21 Sep 2016
                                        </span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"spotlight-item-thumb\">
                            <div class=\"spotlight-item-thumb-img\">
                                <a href=\"#\">
                                    <img alt=\"\" src=\"images/product/5.jpg\">
                                </a>
                                <a href=\"#\" class=\"cate-tag\">Tech</a>
                            </div>
                            <h3><a href=\"#\">Messenger Bots Are Overhyped, Underpowered—and Growing like Crazy</a></h3>
                            <div class=\"meta-post\">
                                <a href=\"#\">
                                    Super User
                                </a>
                                <em></em>
                                <span>
                                            26 Sep 2016
                                        </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        {{ render(controller('App\\\\Controller\\\\DefaultController::sidebar')) }}
    </div>
{% endblock %}", "default/article.html.twig", "C:\\xampp\\htdocs\\techNews\\templates\\default\\article.html.twig");
    }
}
