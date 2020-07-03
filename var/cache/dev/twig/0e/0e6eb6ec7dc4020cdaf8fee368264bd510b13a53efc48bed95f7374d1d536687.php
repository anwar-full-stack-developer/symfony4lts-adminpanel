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

/* layouts/adminlte/sidebar.html.twig */
class __TwigTemplate_d31faedcddfd8ce123a34c356e48f17b4bc34c1a4a627e3fcd34b18f5f297446 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/adminlte/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/adminlte/sidebar.html.twig"));

        // line 1
        echo "<!-- Main Sidebar Container -->
<aside
\tclass=\"main-sidebar sidebar-dark-primary elevation-4\">
\t<!-- Brand Logo -->
\t<a href=\"index3.html\" class=\"brand-link\">
\t\t<img src=\"/images/symfony-logo.png\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
\t\t<span class=\"brand-text font-weight-light\">Secure Panel</span>
\t</a>

\t<!-- Sidebar -->
\t<div
\t\tclass=\"sidebar\">
\t\t<!-- Sidebar user panel (optional) -->
\t\t<div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
\t\t\t<div class=\"image\">
\t\t\t\t<img src=\"/images/user-avarter.png\" class=\"img-circle elevation-2\" alt=\"User Image\">
\t\t\t</div>
\t\t\t<div class=\"info\">
\t\t\t\t<a href=\"#\" class=\"d-block\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "username", [], "any", false, false, false, 19), "html", null, true);
        echo "</a>
\t\t\t</div>
\t\t</div>

\t\t<!-- Sidebar Menu -->
\t\t<nav class=\"mt-2\">
\t\t\t<ul
\t\t\t\tclass=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
\t\t\t\t<!-- Add icons to the links using the .nav-icon class
\t\t\t\t               with font-awesome or any other icon font library -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"./\" class=\"nav-link\">
\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t<p>Nav item 1</p>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"./\" class=\"nav-link\">
\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t<p>Nav item 2</p>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"./\" class=\"nav-link\">
\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t<p>Nav item 3</p>
\t\t\t\t\t</a>
\t\t\t\t</li>      
\t\t\t</ul>
\t\t</nav>
\t\t<!-- /.sidebar-menu -->
\t</div>
\t<!-- /.sidebar -->
</aside>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layouts/adminlte/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 19,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Main Sidebar Container -->
<aside
\tclass=\"main-sidebar sidebar-dark-primary elevation-4\">
\t<!-- Brand Logo -->
\t<a href=\"index3.html\" class=\"brand-link\">
\t\t<img src=\"/images/symfony-logo.png\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
\t\t<span class=\"brand-text font-weight-light\">Secure Panel</span>
\t</a>

\t<!-- Sidebar -->
\t<div
\t\tclass=\"sidebar\">
\t\t<!-- Sidebar user panel (optional) -->
\t\t<div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
\t\t\t<div class=\"image\">
\t\t\t\t<img src=\"/images/user-avarter.png\" class=\"img-circle elevation-2\" alt=\"User Image\">
\t\t\t</div>
\t\t\t<div class=\"info\">
\t\t\t\t<a href=\"#\" class=\"d-block\">{{ app.user.username }}</a>
\t\t\t</div>
\t\t</div>

\t\t<!-- Sidebar Menu -->
\t\t<nav class=\"mt-2\">
\t\t\t<ul
\t\t\t\tclass=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
\t\t\t\t<!-- Add icons to the links using the .nav-icon class
\t\t\t\t               with font-awesome or any other icon font library -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"./\" class=\"nav-link\">
\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t<p>Nav item 1</p>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"./\" class=\"nav-link\">
\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t<p>Nav item 2</p>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"./\" class=\"nav-link\">
\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t<p>Nav item 3</p>
\t\t\t\t\t</a>
\t\t\t\t</li>      
\t\t\t</ul>
\t\t</nav>
\t\t<!-- /.sidebar-menu -->
\t</div>
\t<!-- /.sidebar -->
</aside>
", "layouts/adminlte/sidebar.html.twig", "C:\\xampp\\htdocs\\symfony\\symfony4lts-adminpanel\\templates\\layouts\\adminlte\\sidebar.html.twig");
    }
}
