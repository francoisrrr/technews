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
class __TwigTemplate_7387f709a188688e3403250cb207cc5cd2d21562100028aeafba4d094728103d extends \Twig\Template
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
        echo "    Acceuil
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
            <span>spotlight</span>
        </div>
        <!--sportlight-->
        <section class=\"owl-carousel owl-spotlight\">
            <div>
                <article class=\"spotlight-item\">
                    <div class=\"spotlight-img\">
                        <img alt=\"\" src=\"images/product/16.jpg\" class=\"img-responsive\" />
                        <a href=\"#\" class=\"cate-tag\">Mobile</a>
                    </div>
                    <div class=\"spotlight-item-caption\">
                        <h2 class=\"font-heading\">
                            <a href=\"article.html\">
                                7 essential lessons from agency marketing to startup growth
                            </a>
                        </h2>
                        <div class=\"meta-post\">
                            <a href=\"#\">
                                Super User
                            </a>
                            <em></em>
                            <span>
\t\t\t\t\t\t\t24 Sep 2016
\t\t\t\t\t\t</span>
                        </div>
                        <p>When Microsoft took to the stage at this year's E3 it announced not one but two new consoles: the Xbox One S, which went on sale earlier this year, and Project Scorpio,which will enable gaming at native resolutions up to 4K when it hits store shelves in 2017. </p>
                    </div>
                </article>
            </div>
            <div>
                <article class=\"spotlight-item\">
                    <div class=\"spotlight-img\">
                        <img alt=\"\" src=\"images/product/1.jpg\" class=\"img-responsive\" />
                        <a href=\"#\" class=\"cate-tag\">Computing</a>
                    </div>
                    <div class=\"spotlight-item-caption\">
                        <h2 class=\"font-heading\">
                            <a href=\"article.html\">
                                Windows 10 Now Running on 400 Million Active Devices, Says Microsoft
                            </a>
                        </h2>
                        <div class=\"meta-post\">
                            <a href=\"#\">
                                Ashley Ford
                            </a>
                            <em></em>
                            <span>
\t\t\t\t\t\t\t26 Sep 2016
\t\t\t\t\t\t</span>
                        </div>
                        <p>Microsoft had set an ambitious goal for itself of having Windows 10 running on 1 billion active devices by FY18 at the launch of its software platform. However, back in July, the company acknowledged that due to lack of traction in its smartphone business, it might take longer to achieve this target</p>
                    </div>
                </article>
            </div>
            <div>
                <article class=\"spotlight-item\">
                    <div class=\"spotlight-img\">
                        <img alt=\"\" src=\"images/product/2.jpg\" class=\"img-responsive\" />
                        <a href=\"#\" class=\"cate-tag\">Mobile</a>
                    </div>

                    <div class=\"spotlight-item-caption\">
                        <h2 class=\"font-heading\">
                            <a href=\"article.html\">
                                iOS 10 Backups Less Secure Than iOS 9, Claims Researcher
                            </a>
                        </h2>
                        <div class=\"meta-post\">
                            <a href=\"#\">
                                Super User
                            </a>
                            <em></em>
                            <span>
\t\t\t\t\t\t\t24 Sep 2016
\t\t\t\t\t\t</span>
                        </div>
                        <p>A security research company based in Moscow claims to have discovered a flaw in Apple's local password protected iTunes backups in iOS 10, a flaw that is said to weaken password security. According to ElcomSoft's Oleg Afonin, the security flaw lets attackers develop a new attack that can bypass certain security </p>
                    </div>
                </article>
            </div>

        </section>

        <!--spotlight-thumbs-->
        <section class=\"spotlight-thumbs\">
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"spotlight-item-thumb\">
                        <div class=\"spotlight-item-thumb-img\">
                            <a href=\"#\">
                                <img alt=\"\" src=\"images/product/3.jpg\" />
                            </a>
                            <a href=\"#\" class=\"cate-tag\">business</a>
                        </div>
                        <h3><a href=\"#\">Tip Aligning Digital Marketing with Business Goals and Objectives</a></h3>
                        <div class=\"meta-post\">
                            <a href=\"#\">
                                Sue\tBenson
                            </a>
                            <em></em>
                            <span>
\t\t\t\t\t\t\t22 Sep 2016
\t\t\t\t\t\t</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"spotlight-item-thumb\">
                        <div class=\"spotlight-item-thumb-img\">
                            <a href=\"#\">
                                <img alt=\"\" src=\"images/product/4.jpg\" />
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
\t\t\t\t\t\t\t21 Sep 2016
\t\t\t\t\t\t</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"spotlight-item-thumb\">
                        <div class=\"spotlight-item-thumb-img\">
                            <a href=\"#\">
                                <img alt=\"\" src=\"images/product/5.jpg\" />
                            </a>
                            <a href=\"#\" class=\"cate-tag\">Tech</a>
                        </div>
                        <h3><a href=\"#\">Will Anker be the company to finally put a heads-up display in my car?</a></h3>
                        <div class=\"meta-post\">
                            <a href=\"#\">
                                Super User
                            </a>
                            <em></em>
                            <span>
\t\t\t\t\t\t\t26 Sep 2016
\t\t\t\t\t\t</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"spotlight-item-thumb\">
                        <div class=\"spotlight-item-thumb-img\">
                            <a href=\"#\">
                                <img alt=\"\" src=\"images/product/3.jpg\" />
                            </a>
                            <a href=\"#\" class=\"cate-tag\">business</a>
                        </div>
                        <h3><a href=\"#\">Tip Aligning Digital Marketing with Business Goals and Objectives</a></h3>
                        <div class=\"meta-post\">
                            <a href=\"#\">
                                Sue\tBenson
                            </a>
                            <em></em>
                            <span>
\t\t\t\t\t\t\t22 Sep 2016
\t\t\t\t\t\t</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"spotlight-item-thumb\">
                        <div class=\"spotlight-item-thumb-img\">
                            <a href=\"#\">
                                <img alt=\"\" src=\"images/product/4.jpg\" />
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
\t\t\t\t\t\t\t21 Sep 2016
\t\t\t\t\t\t</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"spotlight-item-thumb\">
                        <div class=\"spotlight-item-thumb-img\">
                            <a href=\"#\">
                                <img alt=\"\" src=\"images/product/5.jpg\" />
                            </a>
                            <a href=\"#\" class=\"cate-tag\">Tech</a>
                        </div>
                        <h3><a href=\"#\">Will Anker be the company to finally put a heads-up display in my car?</a></h3>
                        <div class=\"meta-post\">
                            <a href=\"#\">
                                Super User
                            </a>
                            <em></em>
                            <span>
\t\t\t\t\t\t\t26 Sep 2016
\t\t\t\t\t\t</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    ";
        // line 222
        $this->loadTemplate("components/_sidebar.html.twig", "default/index.html.twig", 222)->display($context);
        // line 223
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
        return array (  304 => 223,  302 => 222,  86 => 8,  77 => 7,  66 => 4,  57 => 3,  27 => 1,);
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
        <!--sportlight-->
        <section class=\"owl-carousel owl-spotlight\">
            <div>
                <article class=\"spotlight-item\">
                    <div class=\"spotlight-img\">
                        <img alt=\"\" src=\"images/product/16.jpg\" class=\"img-responsive\" />
                        <a href=\"#\" class=\"cate-tag\">Mobile</a>
                    </div>
                    <div class=\"spotlight-item-caption\">
                        <h2 class=\"font-heading\">
                            <a href=\"article.html\">
                                7 essential lessons from agency marketing to startup growth
                            </a>
                        </h2>
                        <div class=\"meta-post\">
                            <a href=\"#\">
                                Super User
                            </a>
                            <em></em>
                            <span>
\t\t\t\t\t\t\t24 Sep 2016
\t\t\t\t\t\t</span>
                        </div>
                        <p>When Microsoft took to the stage at this year's E3 it announced not one but two new consoles: the Xbox One S, which went on sale earlier this year, and Project Scorpio,which will enable gaming at native resolutions up to 4K when it hits store shelves in 2017. </p>
                    </div>
                </article>
            </div>
            <div>
                <article class=\"spotlight-item\">
                    <div class=\"spotlight-img\">
                        <img alt=\"\" src=\"images/product/1.jpg\" class=\"img-responsive\" />
                        <a href=\"#\" class=\"cate-tag\">Computing</a>
                    </div>
                    <div class=\"spotlight-item-caption\">
                        <h2 class=\"font-heading\">
                            <a href=\"article.html\">
                                Windows 10 Now Running on 400 Million Active Devices, Says Microsoft
                            </a>
                        </h2>
                        <div class=\"meta-post\">
                            <a href=\"#\">
                                Ashley Ford
                            </a>
                            <em></em>
                            <span>
\t\t\t\t\t\t\t26 Sep 2016
\t\t\t\t\t\t</span>
                        </div>
                        <p>Microsoft had set an ambitious goal for itself of having Windows 10 running on 1 billion active devices by FY18 at the launch of its software platform. However, back in July, the company acknowledged that due to lack of traction in its smartphone business, it might take longer to achieve this target</p>
                    </div>
                </article>
            </div>
            <div>
                <article class=\"spotlight-item\">
                    <div class=\"spotlight-img\">
                        <img alt=\"\" src=\"images/product/2.jpg\" class=\"img-responsive\" />
                        <a href=\"#\" class=\"cate-tag\">Mobile</a>
                    </div>

                    <div class=\"spotlight-item-caption\">
                        <h2 class=\"font-heading\">
                            <a href=\"article.html\">
                                iOS 10 Backups Less Secure Than iOS 9, Claims Researcher
                            </a>
                        </h2>
                        <div class=\"meta-post\">
                            <a href=\"#\">
                                Super User
                            </a>
                            <em></em>
                            <span>
\t\t\t\t\t\t\t24 Sep 2016
\t\t\t\t\t\t</span>
                        </div>
                        <p>A security research company based in Moscow claims to have discovered a flaw in Apple's local password protected iTunes backups in iOS 10, a flaw that is said to weaken password security. According to ElcomSoft's Oleg Afonin, the security flaw lets attackers develop a new attack that can bypass certain security </p>
                    </div>
                </article>
            </div>

        </section>

        <!--spotlight-thumbs-->
        <section class=\"spotlight-thumbs\">
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"spotlight-item-thumb\">
                        <div class=\"spotlight-item-thumb-img\">
                            <a href=\"#\">
                                <img alt=\"\" src=\"images/product/3.jpg\" />
                            </a>
                            <a href=\"#\" class=\"cate-tag\">business</a>
                        </div>
                        <h3><a href=\"#\">Tip Aligning Digital Marketing with Business Goals and Objectives</a></h3>
                        <div class=\"meta-post\">
                            <a href=\"#\">
                                Sue\tBenson
                            </a>
                            <em></em>
                            <span>
\t\t\t\t\t\t\t22 Sep 2016
\t\t\t\t\t\t</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"spotlight-item-thumb\">
                        <div class=\"spotlight-item-thumb-img\">
                            <a href=\"#\">
                                <img alt=\"\" src=\"images/product/4.jpg\" />
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
\t\t\t\t\t\t\t21 Sep 2016
\t\t\t\t\t\t</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"spotlight-item-thumb\">
                        <div class=\"spotlight-item-thumb-img\">
                            <a href=\"#\">
                                <img alt=\"\" src=\"images/product/5.jpg\" />
                            </a>
                            <a href=\"#\" class=\"cate-tag\">Tech</a>
                        </div>
                        <h3><a href=\"#\">Will Anker be the company to finally put a heads-up display in my car?</a></h3>
                        <div class=\"meta-post\">
                            <a href=\"#\">
                                Super User
                            </a>
                            <em></em>
                            <span>
\t\t\t\t\t\t\t26 Sep 2016
\t\t\t\t\t\t</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"spotlight-item-thumb\">
                        <div class=\"spotlight-item-thumb-img\">
                            <a href=\"#\">
                                <img alt=\"\" src=\"images/product/3.jpg\" />
                            </a>
                            <a href=\"#\" class=\"cate-tag\">business</a>
                        </div>
                        <h3><a href=\"#\">Tip Aligning Digital Marketing with Business Goals and Objectives</a></h3>
                        <div class=\"meta-post\">
                            <a href=\"#\">
                                Sue\tBenson
                            </a>
                            <em></em>
                            <span>
\t\t\t\t\t\t\t22 Sep 2016
\t\t\t\t\t\t</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"spotlight-item-thumb\">
                        <div class=\"spotlight-item-thumb-img\">
                            <a href=\"#\">
                                <img alt=\"\" src=\"images/product/4.jpg\" />
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
\t\t\t\t\t\t\t21 Sep 2016
\t\t\t\t\t\t</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"spotlight-item-thumb\">
                        <div class=\"spotlight-item-thumb-img\">
                            <a href=\"#\">
                                <img alt=\"\" src=\"images/product/5.jpg\" />
                            </a>
                            <a href=\"#\" class=\"cate-tag\">Tech</a>
                        </div>
                        <h3><a href=\"#\">Will Anker be the company to finally put a heads-up display in my car?</a></h3>
                        <div class=\"meta-post\">
                            <a href=\"#\">
                                Super User
                            </a>
                            <em></em>
                            <span>
\t\t\t\t\t\t\t26 Sep 2016
\t\t\t\t\t\t</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {% include \"components/_sidebar.html.twig\" %}

{% endblock %}", "default/index.html.twig", "C:\\xampp\\htdocs\\techNews\\templates\\default\\index.html.twig");
    }
}
