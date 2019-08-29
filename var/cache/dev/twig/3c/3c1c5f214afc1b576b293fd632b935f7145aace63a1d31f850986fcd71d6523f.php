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
class __TwigTemplate_5809dcbf36a245c7bcb8a80c78c1f183cb9cf4892c56e5009e90f76ae760fbde extends \Twig\Template
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
        echo "    Titre de l'article
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
                <h1>Six big ways MacOS Sierra is going to change your Apple experience</h1>
                <div class=\"meta-post\">
                    <a href=\"#\">
                        Sue\tBenson
                    </a>
                    <em></em>
                    <span>
                                22 Sep 2016
                            </span>
                </div>

                <p> <span class=\"dropcap \">N</span> ulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Sed porttitor lectus nibh.</p>


                <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Pellentesque in ipsum id orci porta dapibus.</p>


                <div class=\"post-detail-img\">
                    <img alt=\"\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/4.jpg"), "html", null, true);
        echo "\" />
                </div>
                <p class=\"quote\">Sed porttitor lectus nibh. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>

                <p>Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Pellentesque in ipsum id orci porta dapibus.</p>

                <h4>Nulla porttitor accumsan tincidunt.</h4>

                <p>
                    <img alt=\"\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/2.jpg"), "html", null, true);
        echo "\" class=\"post-detail-img-left\" />

                    Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Donec sollicitudin molestie malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim.
                </p>
                <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                <h5 class=\"text-right font-heading\"><strong>Sue\tBenson</strong> </h5>

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
                                    <img alt=\"\" src=\"images/product/3.jpg\">
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
        // line 157
        $this->loadTemplate("components/_sidebar.html.twig", "default/article.html.twig", 157)->display($context);
        // line 158
        echo "    </div>
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
        return array (  245 => 158,  243 => 157,  123 => 40,  111 => 31,  86 => 8,  77 => 7,  66 => 4,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}
    Titre de l'article
{% endblock %}

{% block content %}
    <div class=\"row\">
        <!--colleft-->
        <div class=\"col-md-8 col-sm-12\">
            <!--post-detail-->
            <article class=\"post-detail\">
                <h1>Six big ways MacOS Sierra is going to change your Apple experience</h1>
                <div class=\"meta-post\">
                    <a href=\"#\">
                        Sue\tBenson
                    </a>
                    <em></em>
                    <span>
                                22 Sep 2016
                            </span>
                </div>

                <p> <span class=\"dropcap \">N</span> ulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Sed porttitor lectus nibh.</p>


                <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Pellentesque in ipsum id orci porta dapibus.</p>


                <div class=\"post-detail-img\">
                    <img alt=\"\" src=\"{{ asset('images/product/4.jpg') }}\" />
                </div>
                <p class=\"quote\">Sed porttitor lectus nibh. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>

                <p>Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Pellentesque in ipsum id orci porta dapibus.</p>

                <h4>Nulla porttitor accumsan tincidunt.</h4>

                <p>
                    <img alt=\"\" src=\"{{ asset('images/product/2.jpg') }}\" class=\"post-detail-img-left\" />

                    Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Donec sollicitudin molestie malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim.
                </p>
                <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                <h5 class=\"text-right font-heading\"><strong>Sue\tBenson</strong> </h5>

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
                                    <img alt=\"\" src=\"images/product/3.jpg\">
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
        {% include \"components/_sidebar.html.twig\" %}
    </div>
{% endblock %}", "default/article.html.twig", "C:\\xampp\\htdocs\\techNews\\templates\\default\\article.html.twig");
    }
}
