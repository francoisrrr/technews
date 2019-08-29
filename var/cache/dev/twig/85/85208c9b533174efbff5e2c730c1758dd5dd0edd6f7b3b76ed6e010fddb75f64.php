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

/* default/index.html.twig */
class __TwigTemplate_fd1b656068936acba251597c9f25315cf249a90086174b4573c536bd3556b9b6 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

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
        echo "            Acceuil
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
        echo "        <div class=\"row\">
            <!--colleft-->
            <div class=\"col-md-8 col-sm-12\">
                <div class=\"box-caption\">
                    <span>spotlight</span>
                </div>
                <!--spotlight-->
                <section class=\"owl-carousel owl-spotlight\">
                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["spotlights"]) || array_key_exists("spotlights", $context) ? $context["spotlights"] : (function () { throw new RuntimeError('Variable "spotlights" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["spotlight"]) {
            // line 17
            echo "                    <div>
                        <article class=\"spotlight-item\">
                            <div class=\"spotlight-img\">
                                <img alt=\"\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/product/" . twig_get_attribute($this->env, $this->source, $context["spotlight"], "featuredImage", []))), "html", null, true);
            echo "\" class=\"img-responsive\" />
                                <a href=\"#\" class=\"cate-tag\">Mobile</a>
                            </div>

                            <div class=\"spotlight-item-caption\">
                                <h2 class=\"font-heading\">
                                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default_article", ["categorie" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 27
$context["spotlight"], "categorie", []), "slug", []), "slug" => twig_get_attribute($this->env, $this->source,             // line 28
$context["spotlight"], "slug", []), "id" => twig_get_attribute($this->env, $this->source,             // line 29
$context["spotlight"], "id", [])]), "html", null, true);
            // line 30
            echo "\">
                                        ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spotlight"], "titre", []), "html", null, true);
            echo "
                                    </a>
                                </h2>
                                <div class=\"meta-post\">
                                    <a href=\"#\">
                                        ";
            // line 36
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["spotlight"], "membre", []), "prenom", []) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["spotlight"], "membre", []), "nom", [])), "html", null, true);
            echo "
                                    </a>
                                    <em></em>
                                    <span>
                                        ";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spotlight"], "dateCreation", []), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t            </span>
                                </div>
                                <p>A security research company based in Moscow claims to have discovered a flaw in Apple's local password protected iTunes backups in iOS 10, a flaw that is said to weaken password security. According to ElcomSoft's Oleg Afonin, the security flaw lets attackers develop a new attack that can bypass certain security </p>
                            </div>
                        </article>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['spotlight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </section>

                <!--spotlight-thumbs-->
                <section class=\"spotlight-thumbs\">
                    <div class=\"row\">
                        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 54
            echo "                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                            <div class=\"spotlight-item-thumb\">
                                <div class=\"spotlight-item-thumb-img\">
                                    <a href=\"#\">
                                        <img alt=\"\" src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/product/" . twig_get_attribute($this->env, $this->source, $context["article"], "featuredImage", []))), "html", null, true);
            echo "\" />
                                    </a>
                                    <a href=\"#\" class=\"cate-tag\">Tech</a>
                                </div>
                                <h3><a href=\"#\">
                                        ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", []), "html", null, true);
            echo "
                                    </a></h3>
                                <div class=\"meta-post\">
                                    <a href=\"#\">
                                        ";
            // line 67
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "membre", []), "nom", []) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "membre", []), "prenom", [])), "html", null, true);
            echo "
                                    </a>
                                    <em></em>
                                    <span>
                                        ";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "dateCreation", []), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t            </span>
                                </div>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                    </div>
                </section>
            </div>

            ";
        // line 82
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\DefaultController::sidebar"));
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 82,  202 => 77,  190 => 71,  183 => 67,  176 => 63,  168 => 58,  162 => 54,  158 => 53,  151 => 48,  137 => 40,  130 => 36,  122 => 31,  119 => 30,  117 => 29,  116 => 28,  115 => 27,  114 => 26,  105 => 20,  100 => 17,  96 => 16,  86 => 8,  77 => 7,  66 => 4,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

        {% block title %}
            Acceuil
        {% endblock %}

        {% block content %}
        <div class=\"row\">
            <!--colleft-->
            <div class=\"col-md-8 col-sm-12\">
                <div class=\"box-caption\">
                    <span>spotlight</span>
                </div>
                <!--spotlight-->
                <section class=\"owl-carousel owl-spotlight\">
                    {% for spotlight in spotlights %}
                    <div>
                        <article class=\"spotlight-item\">
                            <div class=\"spotlight-img\">
                                <img alt=\"\" src=\"{{ asset('images/product/'~spotlight.featuredImage)}}\" class=\"img-responsive\" />
                                <a href=\"#\" class=\"cate-tag\">Mobile</a>
                            </div>

                            <div class=\"spotlight-item-caption\">
                                <h2 class=\"font-heading\">
                                    <a href=\"{{ path('default_article',{
                                        'categorie' : spotlight.categorie.slug,
                                        'slug' : spotlight.slug,
                                        'id' : spotlight.id
                                    }) }}\">
                                        {{ spotlight.titre }}
                                    </a>
                                </h2>
                                <div class=\"meta-post\">
                                    <a href=\"#\">
                                        {{ spotlight.membre.prenom ~' '~ spotlight.membre.nom }}
                                    </a>
                                    <em></em>
                                    <span>
                                        {{ spotlight.dateCreation | date('d/m/Y')  }}
\t\t\t\t\t\t            </span>
                                </div>
                                <p>A security research company based in Moscow claims to have discovered a flaw in Apple's local password protected iTunes backups in iOS 10, a flaw that is said to weaken password security. According to ElcomSoft's Oleg Afonin, the security flaw lets attackers develop a new attack that can bypass certain security </p>
                            </div>
                        </article>
                    </div>
                    {% endfor %}
                </section>

                <!--spotlight-thumbs-->
                <section class=\"spotlight-thumbs\">
                    <div class=\"row\">
                        {% for article in articles  %}
                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                            <div class=\"spotlight-item-thumb\">
                                <div class=\"spotlight-item-thumb-img\">
                                    <a href=\"#\">
                                        <img alt=\"\" src=\"{{ asset('images/product/'~article.featuredImage)}}\" />
                                    </a>
                                    <a href=\"#\" class=\"cate-tag\">Tech</a>
                                </div>
                                <h3><a href=\"#\">
                                        {{ article.titre }}
                                    </a></h3>
                                <div class=\"meta-post\">
                                    <a href=\"#\">
                                        {{ article.membre.nom~' '~article.membre.prenom }}
                                    </a>
                                    <em></em>
                                    <span>
                                        {{ article.dateCreation | date('d/m/Y') }}
\t\t\t\t\t\t            </span>
                                </div>
                            </div>
                        </div>
                        {% endfor %}
                    </div>
                </section>
            </div>

            {#{% include \"components/_sidebar.html.twig\" %}#}
            {{ render(controller('App\\\\Controller\\\\DefaultController::sidebar')) }}

{% endblock %}", "default/index.html.twig", "C:\\xampp\\htdocs\\techNews\\templates\\default\\index.html.twig");
    }
}
