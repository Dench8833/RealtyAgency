<?php

/* main/apartment.html.twig */
class __TwigTemplate_ebbfb26651d7e51b74f86b12518ad9da77d5ad402692401330b80a225854e965 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/apartment.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/apartment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/apartment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"container\">

    <h1 class=\"my-4\">Page Heading
        <small>Secondary Text</small>
    </h1>

    <div class=\"row\">

        <div class=\"col-md-8\">
            <img class=\"img-fluid\" src=\"http://placehold.it/750x500\" alt=\"\">
        </div>

        <div class=\"col-md-4\">
            <h3 class=\"my-3\">Project Description</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
            <h3 class=\"my-3\">Project Details</h3>
            <ul>
                <li>Lorem Ipsum</li>
                <li>Dolor Sit Amet</li>
                <li>Consectetur</li>
                <li>Adipiscing Elit</li>
            </ul>
        </div>

    </div>

    <h3 class=\"my-4\">Related Projects</h3>

    <div class=\"row\">

        <div class=\"col-md-3 col-sm-6 mb-4\">
            <a href=\"#\">
                <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
            </a>
        </div>

        <div class=\"col-md-3 col-sm-6 mb-4\">
            <a href=\"#\">
                <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
            </a>
        </div>

        <div class=\"col-md-3 col-sm-6 mb-4\">
            <a href=\"#\">
                <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
            </a>
        </div>

        <div class=\"col-md-3 col-sm-6 mb-4\">
            <a href=\"#\">
                <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
            </a>
        </div>

    </div>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/apartment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"container\">

    <h1 class=\"my-4\">Page Heading
        <small>Secondary Text</small>
    </h1>

    <div class=\"row\">

        <div class=\"col-md-8\">
            <img class=\"img-fluid\" src=\"http://placehold.it/750x500\" alt=\"\">
        </div>

        <div class=\"col-md-4\">
            <h3 class=\"my-3\">Project Description</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
            <h3 class=\"my-3\">Project Details</h3>
            <ul>
                <li>Lorem Ipsum</li>
                <li>Dolor Sit Amet</li>
                <li>Consectetur</li>
                <li>Adipiscing Elit</li>
            </ul>
        </div>

    </div>

    <h3 class=\"my-4\">Related Projects</h3>

    <div class=\"row\">

        <div class=\"col-md-3 col-sm-6 mb-4\">
            <a href=\"#\">
                <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
            </a>
        </div>

        <div class=\"col-md-3 col-sm-6 mb-4\">
            <a href=\"#\">
                <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
            </a>
        </div>

        <div class=\"col-md-3 col-sm-6 mb-4\">
            <a href=\"#\">
                <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
            </a>
        </div>

        <div class=\"col-md-3 col-sm-6 mb-4\">
            <a href=\"#\">
                <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
            </a>
        </div>

    </div>

</div>

{% endblock %}", "main/apartment.html.twig", "/home/denische/phpStormProjects/RealtyAgency/templates/main/apartment.html.twig");
    }
}
