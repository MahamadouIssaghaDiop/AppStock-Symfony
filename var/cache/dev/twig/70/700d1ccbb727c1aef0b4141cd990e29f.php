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

/* login/index.html.twig */
class __TwigTemplate_bebb6b90887333e204981d3dd67492a2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<title>Login</title>
\t<meta charset=\"UTF-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
<!--===============================================================================================-->\t
\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/images/icons/favicon.ico"), "html", null, true);
        echo "\"/>
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/fonts/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/vendor/animate/animate.css"), "html", null, true);
        echo "\"/>
<!--===============================================================================================-->\t
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\"/>
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/vendor/select2/select2.min.css"), "html", null, true);
        echo "\"/>
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/css/util.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/css/main.css"), "html", null, true);
        echo "\"/>
<!--===============================================================================================-->
</head>
<body>
\t
\t<div class=\"limiter\">
\t\t<div class=\"container-login100\">
\t\t\t<div class=\"wrap-login100\">
\t\t\t\t<div class=\"login100-pic js-tilt\" data-tilt>
\t\t\t\t\t<img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/images/img-01.png"), "html", null, true);
        echo "\" alt=\"IMG\"/>
\t\t\t\t</div>

\t\t\t\t<form method=\"POST\" class=\"login100-form validate-form\">
\t\t\t\t\t<span class=\"login100-form-title\">
\t\t\t\t\t\t Login
\t\t\t\t\t</span>

\t\t\t\t\t<div class=\"wrap-input100 validate-input\" data-validate = \"Valid email is required: ex@abc.xyz\">
\t\t\t\t\t\t<input class=\"input100\" type=\"email\" name=\"email\" id=\"inputEmail\" autocomplete=\"email\" autofocus placeholder=\"Email\" />
\t\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t\t<span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"wrap-input100 validate-input\" data-validate = \"Password is required\">
\t\t\t\t\t\t<input class=\"input100\" type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"Password\" />
\t\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t\t<span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"container-login100-form-btn\">
\t\t\t\t\t\t<button class=\"login100-form-btn\">
\t\t\t\t\t\t\tLogin
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-center p-t-12\">
\t\t\t\t\t\t<span class=\"txt1\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<a class=\"txt2\" href=\"#\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-center p-t-136\">
\t\t\t\t\t\t<a class=\"txt2\" href=\"#\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-right m-l-5\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t

\t
<!--===============================================================================================-->\t
\t<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/vendor/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/vendor/bootstrap/js/popper.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/vendor/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/vendor/tilt/tilt.jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script >
\t\t\$('.js-tilt').tilt({
\t\t\tscale: 1.1
\t\t})
\t</script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/js/main.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 99,  178 => 92,  173 => 90,  168 => 88,  164 => 87,  159 => 85,  146 => 75,  98 => 30,  86 => 21,  82 => 20,  77 => 18,  72 => 16,  67 => 14,  62 => 12,  57 => 10,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<title>Login</title>
\t<meta charset=\"UTF-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
<!--===============================================================================================-->\t
\t<link rel=\"icon\" type=\"image/png\" href=\"{{ asset('login/images/icons/favicon.ico') }}\"/>
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/vendor/bootstrap/css/bootstrap.min.css') }}\"/>
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}\"/>
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/vendor/animate/animate.css') }}\"/>
<!--===============================================================================================-->\t
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/vendor/css-hamburgers/hamburgers.min.css') }}\"/>
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/vendor/select2/select2.min.css') }}\"/>
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/css/util.css') }}\"/>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/css/main.css') }}\"/>
<!--===============================================================================================-->
</head>
<body>
\t
\t<div class=\"limiter\">
\t\t<div class=\"container-login100\">
\t\t\t<div class=\"wrap-login100\">
\t\t\t\t<div class=\"login100-pic js-tilt\" data-tilt>
\t\t\t\t\t<img src=\"{{ asset('login/images/img-01.png' ) }}\" alt=\"IMG\"/>
\t\t\t\t</div>

\t\t\t\t<form method=\"POST\" class=\"login100-form validate-form\">
\t\t\t\t\t<span class=\"login100-form-title\">
\t\t\t\t\t\t Login
\t\t\t\t\t</span>

\t\t\t\t\t<div class=\"wrap-input100 validate-input\" data-validate = \"Valid email is required: ex@abc.xyz\">
\t\t\t\t\t\t<input class=\"input100\" type=\"email\" name=\"email\" id=\"inputEmail\" autocomplete=\"email\" autofocus placeholder=\"Email\" />
\t\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t\t<span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"wrap-input100 validate-input\" data-validate = \"Password is required\">
\t\t\t\t\t\t<input class=\"input100\" type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"Password\" />
\t\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t\t<span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"container-login100-form-btn\">
\t\t\t\t\t\t<button class=\"login100-form-btn\">
\t\t\t\t\t\t\tLogin
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-center p-t-12\">
\t\t\t\t\t\t<span class=\"txt1\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<a class=\"txt2\" href=\"#\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-center p-t-136\">
\t\t\t\t\t\t<a class=\"txt2\" href=\"#\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-right m-l-5\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t

\t
<!--===============================================================================================-->\t
\t<script src=\"{{ asset('login/vendor/jquery/jquery-3.2.1.min.js') }}\"></script>
<!--===============================================================================================-->
\t<script src=\"{{ asset('login/vendor/bootstrap/js/popper.js') }}\"></script>
\t<script src=\"{{ asset('login/vendor/bootstrap/js/bootstrap.min.js') }}\"></script>
<!--===============================================================================================-->
\t<script src=\"{{ asset('login/vendor/select2/select2.min.js') }}\"></script>
<!--===============================================================================================-->
\t<script src=\"{{ asset('login/vendor/tilt/tilt.jquery.min.js') }}\"></script>
\t<script >
\t\t\$('.js-tilt').tilt({
\t\t\tscale: 1.1
\t\t})
\t</script>
<!--===============================================================================================-->
\t<script src=\"{{ asset('login/js/main.js') }}\"></script>

</body>
</html>", "login/index.html.twig", "C:\\xampp\\htdocs\\semestre2\\Symfony\\appstocksymfony\\templates\\login\\index.html.twig");
    }
}
