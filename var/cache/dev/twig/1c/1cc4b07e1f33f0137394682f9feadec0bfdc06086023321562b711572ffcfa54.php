<?php

/* base.html.twig */
class __TwigTemplate_9ed44c2daf83bc2cd11b7ab4641f51b8d3832cbf4d47a8c71e2b588e1ed8e489 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
    <head>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <meta charset=\"UTF-8\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('header', $context, $blocks);
        // line 44
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 191
        echo "
        ";
        // line 192
        $this->displayBlock('footer', $context, $blocks);
        // line 199
        echo "
        ";
        // line 200
        $this->displayBlock('javascripts', $context, $blocks);
        // line 206
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "RealtyAgency";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-grid.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/shop-homepage.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 17
        echo "            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
                <div class=\"container\">
                    <a class=\"navbar-brand\" href=\"#\">RealtyAgency</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                        <ul class=\"navbar-nav ml-auto\">
                            <li class=\"nav-item active\">
                                <a class=\"nav-link\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_page");
        echo "\">Home
                                    <span class=\"sr-only\">(current)</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\">About</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\">Services</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "            <div class=\"container\">

                <div class=\"row\">

                    <div class=\"col-lg-3\">

                        <h1 class=\"my-4\">Shop Name</h1>
                        <div class=\"list-group\">
                            <a href=\"#\" class=\"list-group-item\">Category 1</a>
                            <a href=\"#\" class=\"list-group-item\">Category 2</a>
                            <a href=\"#\" class=\"list-group-item\">Category 3</a>
                        </div>

                    </div>

                    <div class=\"col-lg-9\">

                        <div id=\"carouselExampleIndicators\" class=\"carousel slide my-4\" data-ride=\"carousel\">
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                            </ol>
                            <div class=\"carousel-inner\" role=\"listbox\">
                                <div class=\"carousel-item active\">
                                    <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"First slide\">
                                </div>
                                <div class=\"carousel-item\">
                                    <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"Second slide\">
                                </div>
                                <div class=\"carousel-item\">
                                    <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"Third slide\">
                                </div>
                            </div>
                            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </div>

                        <div class=\"row\">

                            <div class=\"col-lg-4 col-md-6 mb-4\">
                                <div class=\"card h-100\">
                                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\">
                                            <a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("apartment");
        echo "\">Item One</a>
                                        </h4>
                                        <h5>\$24.99</h5>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                    </div>
                                    <div class=\"card-footer\">
                                        <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 mb-4\">
                                <div class=\"card h-100\">
                                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\">
                                            <a href=\"#\">Item Two</a>
                                        </h4>
                                        <h5>\$24.99</h5>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    <div class=\"card-footer\">
                                        <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 mb-4\">
                                <div class=\"card h-100\">
                                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\">
                                            <a href=\"#\">Item Three</a>
                                        </h4>
                                        <h5>\$24.99</h5>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                    </div>
                                    <div class=\"card-footer\">
                                        <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 mb-4\">
                                <div class=\"card h-100\">
                                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\">
                                            <a href=\"#\">Item Four</a>
                                        </h4>
                                        <h5>\$24.99</h5>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                    </div>
                                    <div class=\"card-footer\">
                                        <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 mb-4\">
                                <div class=\"card h-100\">
                                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\">
                                            <a href=\"#\">Item Five</a>
                                        </h4>
                                        <h5>\$24.99</h5>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    <div class=\"card-footer\">
                                        <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 mb-4\">
                                <div class=\"card h-100\">
                                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\">
                                            <a href=\"#\">Item Six</a>
                                        </h4>
                                        <h5>\$24.99</h5>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                    </div>
                                    <div class=\"card-footer\">
                                        <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 192
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 193
        echo "            <footer class=\"py-5 bg-dark\">
                <div class=\"container\">
                    <p class=\"m-0 text-center text-white\">Copyright &copy; Den-Che 2018</p>
                </div>
            </footer>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 200
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 201
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/admin.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  396 => 204,  392 => 203,  388 => 202,  383 => 201,  374 => 200,  359 => 193,  350 => 192,  245 => 96,  192 => 45,  183 => 44,  155 => 26,  144 => 17,  135 => 16,  123 => 12,  119 => 11,  115 => 10,  111 => 9,  106 => 8,  97 => 7,  79 => 6,  67 => 206,  65 => 200,  62 => 199,  60 => 192,  57 => 191,  54 => 44,  52 => 16,  48 => 14,  46 => 7,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"ru\">
    <head>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <meta charset=\"UTF-8\">
        <title>{% block title %}RealtyAgency{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-grid.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/shop-homepage.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/admin.css') }}\">
        {% endblock %}
    </head>
    <body>
        {% block header %}
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
                <div class=\"container\">
                    <a class=\"navbar-brand\" href=\"#\">RealtyAgency</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                        <ul class=\"navbar-nav ml-auto\">
                            <li class=\"nav-item active\">
                                <a class=\"nav-link\" href=\"{{ path('main_page') }}\">Home
                                    <span class=\"sr-only\">(current)</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\">About</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\">Services</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        {% endblock %}
        {% block body %}
            <div class=\"container\">

                <div class=\"row\">

                    <div class=\"col-lg-3\">

                        <h1 class=\"my-4\">Shop Name</h1>
                        <div class=\"list-group\">
                            <a href=\"#\" class=\"list-group-item\">Category 1</a>
                            <a href=\"#\" class=\"list-group-item\">Category 2</a>
                            <a href=\"#\" class=\"list-group-item\">Category 3</a>
                        </div>

                    </div>

                    <div class=\"col-lg-9\">

                        <div id=\"carouselExampleIndicators\" class=\"carousel slide my-4\" data-ride=\"carousel\">
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                            </ol>
                            <div class=\"carousel-inner\" role=\"listbox\">
                                <div class=\"carousel-item active\">
                                    <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"First slide\">
                                </div>
                                <div class=\"carousel-item\">
                                    <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"Second slide\">
                                </div>
                                <div class=\"carousel-item\">
                                    <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"Third slide\">
                                </div>
                            </div>
                            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </div>

                        <div class=\"row\">

                            <div class=\"col-lg-4 col-md-6 mb-4\">
                                <div class=\"card h-100\">
                                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\">
                                            <a href=\"{{ path('apartment') }}\">Item One</a>
                                        </h4>
                                        <h5>\$24.99</h5>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                    </div>
                                    <div class=\"card-footer\">
                                        <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 mb-4\">
                                <div class=\"card h-100\">
                                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\">
                                            <a href=\"#\">Item Two</a>
                                        </h4>
                                        <h5>\$24.99</h5>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    <div class=\"card-footer\">
                                        <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 mb-4\">
                                <div class=\"card h-100\">
                                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\">
                                            <a href=\"#\">Item Three</a>
                                        </h4>
                                        <h5>\$24.99</h5>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                    </div>
                                    <div class=\"card-footer\">
                                        <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 mb-4\">
                                <div class=\"card h-100\">
                                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\">
                                            <a href=\"#\">Item Four</a>
                                        </h4>
                                        <h5>\$24.99</h5>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                    </div>
                                    <div class=\"card-footer\">
                                        <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 mb-4\">
                                <div class=\"card h-100\">
                                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\">
                                            <a href=\"#\">Item Five</a>
                                        </h4>
                                        <h5>\$24.99</h5>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    <div class=\"card-footer\">
                                        <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-6 mb-4\">
                                <div class=\"card h-100\">
                                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\">
                                            <a href=\"#\">Item Six</a>
                                        </h4>
                                        <h5>\$24.99</h5>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                    </div>
                                    <div class=\"card-footer\">
                                        <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {% endblock %}

        {% block footer %}
            <footer class=\"py-5 bg-dark\">
                <div class=\"container\">
                    <p class=\"m-0 text-center text-white\">Copyright &copy; Den-Che 2018</p>
                </div>
            </footer>
        {% endblock %}

        {% block javascripts %}
            <script src=\"{{ asset('jquery/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
            <script src=\"{{ asset('js/app.js') }}\"></script>
            <script src=\"{{ asset('js/admin.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/denische/phpStormProjects/RealtyAgency/templates/base.html.twig");
    }
}
