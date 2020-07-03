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

/* layouts/adminlte/main.html.twig */
class __TwigTemplate_cfd473e582f35cf6833ca68f72a8eaf9a9913bbebf5c44b1ba3d344ee77ae793 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/adminlte/main.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/adminlte/main.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\teLearning - ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "\t\t</title>
\t\t";
        // line 8
        $this->loadTemplate("layouts/adminlte/stylesheets.html.twig", "layouts/adminlte/main.html.twig", 8)->display($context);
        // line 9
        echo "\t\t";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY") == false)) {
            // line 10
            echo "\t\t\t<style>
\t\t\t\tbody:not(.sidebar-mini-md) .content-wrapper,
\t\t\t\tbody:not(.sidebar-mini-md) .main-footer,
\t\t\t\tbody:not(.sidebar-mini-md) .main-header {
\t\t\t\t\ttransition: margin-left 0.3s ease-in-out;
\t\t\t\t\tmargin-left: 0;
\t\t\t\t}
\t\t\t</style>
\t\t";
        }
        // line 19
        echo "\t\t";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
\t</head>
\t<body class=\"hold-transition sidebar-mini layout-fixed \">
\t\t<div class=\"wrapper\">
\t\t\t";
        // line 24
        $this->loadTemplate("layouts/adminlte/navbar.html.twig", "layouts/adminlte/main.html.twig", 24)->display($context);
        // line 25
        echo "
\t\t\t";
        // line 26
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 27
            echo "\t\t\t\t";
            $this->loadTemplate("layouts/adminlte/sidebar.html.twig", "layouts/adminlte/main.html.twig", 27)->display($context);
            // line 28
            echo "\t\t\t";
        }
        // line 29
        echo "
\t\t\t<!-- Content Wrapper. Contains page content -->
\t\t\t<div
\t\t\t\tclass=\"content-wrapper\">
\t\t\t\t<!-- Main content -->
\t\t\t\t<section class=\"content\">
\t\t\t\t\t<br style=\"clear:both;\"/> ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "\t\t\t\t\t<br style=\"clear:both;\"/>
\t\t\t\t</section>
\t\t\t\t<!-- /.content -->
\t\t\t</div>
\t\t\t<!-- /.content-wrapper -->

\t\t\t";
        // line 42
        $this->loadTemplate("layouts/adminlte/footer.html.twig", "layouts/adminlte/main.html.twig", 42)->display($context);
        // line 43
        echo "\t\t</div>

\t\t";
        // line 45
        $this->loadTemplate("layouts/adminlte/javascripts.html.twig", "layouts/adminlte/main.html.twig", 45)->display($context);
        // line 46
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Homepage";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layouts/adminlte/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 46,  175 => 35,  157 => 19,  138 => 6,  126 => 47,  123 => 46,  121 => 45,  117 => 43,  115 => 42,  107 => 36,  105 => 35,  97 => 29,  94 => 28,  91 => 27,  89 => 26,  86 => 25,  84 => 24,  78 => 20,  75 => 19,  64 => 10,  61 => 9,  59 => 8,  56 => 7,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\teLearning - {% block title %}Homepage{% endblock %}
\t\t</title>
\t\t{% include 'layouts/adminlte/stylesheets.html.twig' %}
\t\t{% if is_granted('IS_AUTHENTICATED_FULLY')==false %}
\t\t\t<style>
\t\t\t\tbody:not(.sidebar-mini-md) .content-wrapper,
\t\t\t\tbody:not(.sidebar-mini-md) .main-footer,
\t\t\t\tbody:not(.sidebar-mini-md) .main-header {
\t\t\t\t\ttransition: margin-left 0.3s ease-in-out;
\t\t\t\t\tmargin-left: 0;
\t\t\t\t}
\t\t\t</style>
\t\t{% endif %}
\t\t{% block stylesheets %}{% endblock %}

\t</head>
\t<body class=\"hold-transition sidebar-mini layout-fixed \">
\t\t<div class=\"wrapper\">
\t\t\t{% include 'layouts/adminlte/navbar.html.twig' %}

\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t{% include 'layouts/adminlte/sidebar.html.twig' %}
\t\t\t{% endif %}

\t\t\t<!-- Content Wrapper. Contains page content -->
\t\t\t<div
\t\t\t\tclass=\"content-wrapper\">
\t\t\t\t<!-- Main content -->
\t\t\t\t<section class=\"content\">
\t\t\t\t\t<br style=\"clear:both;\"/> {% block body %}{% endblock %}
\t\t\t\t\t<br style=\"clear:both;\"/>
\t\t\t\t</section>
\t\t\t\t<!-- /.content -->
\t\t\t</div>
\t\t\t<!-- /.content-wrapper -->

\t\t\t{% include 'layouts/adminlte/footer.html.twig' %}
\t\t</div>

\t\t{% include 'layouts/adminlte/javascripts.html.twig' %}
\t\t{% block javascripts %}{% endblock %}
\t</body>
</html>
", "layouts/adminlte/main.html.twig", "C:\\xampp\\htdocs\\symfony\\symfony4lts-adminpanel\\templates\\layouts\\adminlte\\main.html.twig");
    }
}
