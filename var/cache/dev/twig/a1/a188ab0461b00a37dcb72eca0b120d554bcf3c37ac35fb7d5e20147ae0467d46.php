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

/* layouts/adminlte/javascripts.html.twig */
class __TwigTemplate_e0e7675d6359c800a804d35835a87180ac49a20c3d087d3f67f7fcf73a6422c6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/adminlte/javascripts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/adminlte/javascripts.html.twig"));

        // line 1
        echo "
        <!-- jQuery -->
        <script src=\"/plugins/jquery/jquery.min.js\"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src=\"/plugins/jquery-ui/jquery-ui.min.js\"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        \$.widget.bridge('uibutton', \$.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src=\"/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
        <!-- ChartJS -->
        <script src=\"/plugins/chart.js/Chart.min.js\"></script>
        <!-- Sparkline -->
        <script src=\"/plugins/sparklines/sparkline.js\"></script>
        <!-- JQVMap -->
        <script src=\"/plugins/jqvmap/jquery.vmap.min.js\"></script>
        <script src=\"/plugins/jqvmap/maps/jquery.vmap.usa.js\"></script>
        <!-- jQuery Knob Chart -->
        <script src=\"/plugins/jquery-knob/jquery.knob.min.js\"></script>
        <!-- daterangepicker -->
        <script src=\"/plugins/moment/moment.min.js\"></script>
        <script src=\"/plugins/daterangepicker/daterangepicker.js\"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src=\"/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js\"></script>
        <!-- Summernote -->
        <script src=\"/plugins/summernote/summernote-bs4.min.js\"></script>
        <!-- overlayScrollbars -->
        <script src=\"/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js\"></script>
        <!-- AdminLTE App -->
        <script src=\"/dist/js/adminlte.js\"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=\"/dist/js/pages/dashboard.js\"></script>
        <!-- AdminLTE for demo purposes -->
        <script src=\"/dist/js/demo.js\"></script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layouts/adminlte/javascripts.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
        <!-- jQuery -->
        <script src=\"/plugins/jquery/jquery.min.js\"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src=\"/plugins/jquery-ui/jquery-ui.min.js\"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        \$.widget.bridge('uibutton', \$.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src=\"/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
        <!-- ChartJS -->
        <script src=\"/plugins/chart.js/Chart.min.js\"></script>
        <!-- Sparkline -->
        <script src=\"/plugins/sparklines/sparkline.js\"></script>
        <!-- JQVMap -->
        <script src=\"/plugins/jqvmap/jquery.vmap.min.js\"></script>
        <script src=\"/plugins/jqvmap/maps/jquery.vmap.usa.js\"></script>
        <!-- jQuery Knob Chart -->
        <script src=\"/plugins/jquery-knob/jquery.knob.min.js\"></script>
        <!-- daterangepicker -->
        <script src=\"/plugins/moment/moment.min.js\"></script>
        <script src=\"/plugins/daterangepicker/daterangepicker.js\"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src=\"/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js\"></script>
        <!-- Summernote -->
        <script src=\"/plugins/summernote/summernote-bs4.min.js\"></script>
        <!-- overlayScrollbars -->
        <script src=\"/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js\"></script>
        <!-- AdminLTE App -->
        <script src=\"/dist/js/adminlte.js\"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=\"/dist/js/pages/dashboard.js\"></script>
        <!-- AdminLTE for demo purposes -->
        <script src=\"/dist/js/demo.js\"></script>", "layouts/adminlte/javascripts.html.twig", "C:\\xampp\\htdocs\\symfony\\symfony4lts-adminpanel\\templates\\layouts\\adminlte\\javascripts.html.twig");
    }
}
