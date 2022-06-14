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

/* 403/403.html.twig */
class __TwigTemplate_3d16dd4f58dab191c6e4739dddf1dd0d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "403/403.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "403/403.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" >
<head>
  <meta charset=\"UTF-8\">
  <title>CodePen - 403 Forbidden</title>
  <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("403/style.css"), "html", null, true);
        echo "\">

</head>
<body>
<!-- partial:index.partial.html -->
<div class=\"lock\"></div>
<div class=\"message\">
  <h1>Access to this page is restricted</h1>
  <p>Please check with the site admin if you believe this is a mistake.</p>
</div>
<!-- partial -->
  
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "403/403.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" >
<head>
  <meta charset=\"UTF-8\">
  <title>CodePen - 403 Forbidden</title>
  <link rel=\"stylesheet\" href=\"{{ asset('403/style.css') }}\">

</head>
<body>
<!-- partial:index.partial.html -->
<div class=\"lock\"></div>
<div class=\"message\">
  <h1>Access to this page is restricted</h1>
  <p>Please check with the site admin if you believe this is a mistake.</p>
</div>
<!-- partial -->
  
</body>
</html>
", "403/403.html.twig", "C:\\xampp\\htdocs\\semestre2\\Symfony\\appstocksymfony\\templates\\403\\403.html.twig");
    }
}
