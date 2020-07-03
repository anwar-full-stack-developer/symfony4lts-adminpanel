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

/* layouts/adminlte/navbar.html.twig */
class __TwigTemplate_dc63f3f223f836ec88dc73317c4c4df4a34177830a8a9f83ca1df3eabdd88193 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/adminlte/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/adminlte/navbar.html.twig"));

        // line 1
        echo "<!-- Navbar -->
<nav
\tclass=\"main-header navbar navbar-expand navbar-white navbar-light\">
\t<!-- Left navbar links -->
\t<ul class=\"navbar-nav\">
\t\t";
        // line 6
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 7
            echo "\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\">
\t\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        // line 13
        echo "\t\t<li class=\"nav-item d-none d-sm-inline-block\">
\t\t\t<a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-link\">Home</a>
\t\t</li>
\t\t";
        // line 16
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY") == false)) {
            // line 17
            echo "\t\t\t<li class=\"nav-item d-none d-sm-inline-block\">
\t\t\t\t<a href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
            echo "\" class=\"nav-link\">Register</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item d-none d-sm-inline-block\">
\t\t\t\t<a href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\" class=\"nav-link\">Login</a>
\t\t\t</li>
\t\t";
        }
        // line 24
        echo "\t</ul>

\t";
        // line 26
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 27
            echo "\t\t<form class=\"form-inline ml-3\">
\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t<input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t<button class=\"btn btn-navbar\" type=\"submit\">
\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t";
        }
        // line 38
        echo "
\t<!-- Right navbar links -->
\t<ul
\t\tclass=\"navbar-nav ml-auto\">
\t\t<!-- Messages Dropdown Menu -->
\t\t<li style=\"display:none;\" class=\"nav-item dropdown\">
\t\t\t<a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t<i class=\"far fa-comments\"></i>
\t\t\t\t<span class=\"badge badge-danger navbar-badge\">3</span>
\t\t\t</a>
\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
\t\t\t\t<a
\t\t\t\t\thref=\"#\" class=\"dropdown-item\">
\t\t\t\t\t<!-- Message Start -->
\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t<img src=\"dist/img/user1-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\t\t\t\t\tBrad Diesel
\t\t\t\t\t\t\t\t<span class=\"float-right text-sm text-danger\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p class=\"text-sm\">Call me whenever you can...</p>
\t\t\t\t\t\t\t<p class=\"text-sm text-muted\">
\t\t\t\t\t\t\t\t<i class=\"far fa-clock mr-1\"></i>
\t\t\t\t\t\t\t\t4 Hours Ago</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Message End -->
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a
\t\t\t\t\thref=\"#\" class=\"dropdown-item\">
\t\t\t\t\t<!-- Message Start -->
\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t<img src=\"dist/img/user8-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\t\t\t\t\tJohn Pierce
\t\t\t\t\t\t\t\t<span class=\"float-right text-sm text-muted\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p class=\"text-sm\">I got your message bro</p>
\t\t\t\t\t\t\t<p class=\"text-sm text-muted\">
\t\t\t\t\t\t\t\t<i class=\"far fa-clock mr-1\"></i>
\t\t\t\t\t\t\t\t4 Hours Ago</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Message End -->
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a
\t\t\t\t\thref=\"#\" class=\"dropdown-item\">
\t\t\t\t\t<!-- Message Start -->
\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t<img src=\"dist/img/user3-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\t\t\t\t\tNora Silvester
\t\t\t\t\t\t\t\t<span class=\"float-right text-sm text-warning\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p class=\"text-sm\">The subject goes here</p>
\t\t\t\t\t\t\t<p class=\"text-sm text-muted\">
\t\t\t\t\t\t\t\t<i class=\"far fa-clock mr-1\"></i>
\t\t\t\t\t\t\t\t4 Hours Ago</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Message End -->
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
\t\t\t</div>
\t\t</li>
\t\t<!-- Notifications Dropdown Menu -->
\t\t<li style=\"display:none;\" class=\"nav-item dropdown\">
\t\t\t<a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t<i class=\"far fa-bell\"></i>
\t\t\t\t<span class=\"badge badge-warning navbar-badge\">15</span>
\t\t\t</a>
\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
\t\t\t\t<span class=\"dropdown-item dropdown-header\">15 Notifications</span>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t<i class=\"fas fa-envelope mr-2\"></i>
\t\t\t\t\t4 new messages
\t\t\t\t\t<span class=\"float-right text-muted text-sm\">3 mins</span>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t<i class=\"fas fa-users mr-2\"></i>
\t\t\t\t\t8 friend requests
\t\t\t\t\t<span class=\"float-right text-muted text-sm\">12 hours</span>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t<i class=\"fas fa-file mr-2\"></i>
\t\t\t\t\t3 new reports
\t\t\t\t\t<span class=\"float-right text-muted text-sm\">2 days</span>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
\t\t\t</div>
\t\t</li>
\t</ul>
</nav>
<!-- /.navbar -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layouts/adminlte/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 38,  91 => 27,  89 => 26,  85 => 24,  79 => 21,  73 => 18,  70 => 17,  68 => 16,  63 => 14,  60 => 13,  52 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Navbar -->
<nav
\tclass=\"main-header navbar navbar-expand navbar-white navbar-light\">
\t<!-- Left navbar links -->
\t<ul class=\"navbar-nav\">
\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\">
\t\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t\t</a>
\t\t\t</li>
\t\t{% endif %}
\t\t<li class=\"nav-item d-none d-sm-inline-block\">
\t\t\t<a href=\"{{ path('home') }}\" class=\"nav-link\">Home</a>
\t\t</li>
\t\t{% if is_granted('IS_AUTHENTICATED_FULLY')==false %}
\t\t\t<li class=\"nav-item d-none d-sm-inline-block\">
\t\t\t\t<a href=\"{{ path('fos_user_registration_register') }}\" class=\"nav-link\">Register</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item d-none d-sm-inline-block\">
\t\t\t\t<a href=\"{{ path('fos_user_security_login') }}\" class=\"nav-link\">Login</a>
\t\t\t</li>
\t\t{% endif %}
\t</ul>

\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t<form class=\"form-inline ml-3\">
\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t<input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t<button class=\"btn btn-navbar\" type=\"submit\">
\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t{% endif %}

\t<!-- Right navbar links -->
\t<ul
\t\tclass=\"navbar-nav ml-auto\">
\t\t<!-- Messages Dropdown Menu -->
\t\t<li style=\"display:none;\" class=\"nav-item dropdown\">
\t\t\t<a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t<i class=\"far fa-comments\"></i>
\t\t\t\t<span class=\"badge badge-danger navbar-badge\">3</span>
\t\t\t</a>
\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
\t\t\t\t<a
\t\t\t\t\thref=\"#\" class=\"dropdown-item\">
\t\t\t\t\t<!-- Message Start -->
\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t<img src=\"dist/img/user1-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\t\t\t\t\tBrad Diesel
\t\t\t\t\t\t\t\t<span class=\"float-right text-sm text-danger\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p class=\"text-sm\">Call me whenever you can...</p>
\t\t\t\t\t\t\t<p class=\"text-sm text-muted\">
\t\t\t\t\t\t\t\t<i class=\"far fa-clock mr-1\"></i>
\t\t\t\t\t\t\t\t4 Hours Ago</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Message End -->
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a
\t\t\t\t\thref=\"#\" class=\"dropdown-item\">
\t\t\t\t\t<!-- Message Start -->
\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t<img src=\"dist/img/user8-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\t\t\t\t\tJohn Pierce
\t\t\t\t\t\t\t\t<span class=\"float-right text-sm text-muted\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p class=\"text-sm\">I got your message bro</p>
\t\t\t\t\t\t\t<p class=\"text-sm text-muted\">
\t\t\t\t\t\t\t\t<i class=\"far fa-clock mr-1\"></i>
\t\t\t\t\t\t\t\t4 Hours Ago</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Message End -->
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a
\t\t\t\t\thref=\"#\" class=\"dropdown-item\">
\t\t\t\t\t<!-- Message Start -->
\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t<img src=\"dist/img/user3-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\t\t\t\t\tNora Silvester
\t\t\t\t\t\t\t\t<span class=\"float-right text-sm text-warning\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p class=\"text-sm\">The subject goes here</p>
\t\t\t\t\t\t\t<p class=\"text-sm text-muted\">
\t\t\t\t\t\t\t\t<i class=\"far fa-clock mr-1\"></i>
\t\t\t\t\t\t\t\t4 Hours Ago</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Message End -->
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
\t\t\t</div>
\t\t</li>
\t\t<!-- Notifications Dropdown Menu -->
\t\t<li style=\"display:none;\" class=\"nav-item dropdown\">
\t\t\t<a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t<i class=\"far fa-bell\"></i>
\t\t\t\t<span class=\"badge badge-warning navbar-badge\">15</span>
\t\t\t</a>
\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
\t\t\t\t<span class=\"dropdown-item dropdown-header\">15 Notifications</span>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t<i class=\"fas fa-envelope mr-2\"></i>
\t\t\t\t\t4 new messages
\t\t\t\t\t<span class=\"float-right text-muted text-sm\">3 mins</span>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t<i class=\"fas fa-users mr-2\"></i>
\t\t\t\t\t8 friend requests
\t\t\t\t\t<span class=\"float-right text-muted text-sm\">12 hours</span>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t<i class=\"fas fa-file mr-2\"></i>
\t\t\t\t\t3 new reports
\t\t\t\t\t<span class=\"float-right text-muted text-sm\">2 days</span>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
\t\t\t</div>
\t\t</li>
\t</ul>
</nav>
<!-- /.navbar -->
", "layouts/adminlte/navbar.html.twig", "C:\\xampp\\htdocs\\symfony\\symfony4lts-adminpanel\\templates\\layouts\\adminlte\\navbar.html.twig");
    }
}
