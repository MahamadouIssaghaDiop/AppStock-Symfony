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

/* login/Connexion.html.twig */
class __TwigTemplate_9d529dbe74ee62b9d66b314fc1d8f62a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/Connexion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/Connexion.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\"/>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>AppStock</title>
<link rel=\"stylesheet\" type=\"text/css\" id=\"applicationStylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/css/style.css"), "html", null, true);
        echo "\"/>
<!-- CSS only -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
        <!-- JavaScript Bundle with Popper -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2\" crossorigin=\"anonymous\"></script>
        ";
        // line 14
        echo "<script id=\"applicationScript\" type=\"text/javascript\" src=\"script/script.js\"></script>
</head>
<body>
<div id=\"Connexion_\">
\t<img id=\"Calque_1\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/image/Calque_1.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/image/Calque_1.png 1x, image/Calque_1@2x.png 2x"), "html", null, true);
        echo "\">
\t\t
\t<div id=\"Page_Connexion_\">
\t\t<div id=\"menu\">
\t\t\t<svg class=\"Rectangle_1_q\">
\t\t\t\t<linearGradient id=\"Rectangle_1_q\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t<stop offset=\"0\" stop-color=\"#28343b\" stop-opacity=\"1\"></stop>
\t\t\t\t\t<stop offset=\"1\" stop-color=\"#004a95\" stop-opacity=\"1\"></stop>
\t\t\t\t</linearGradient>
\t\t\t\t<rect id=\"Rectangle_1_q\" rx=\"75\" ry=\"75\" x=\"0\" y=\"0\" width=\"1620\" height=\"144\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Bienvenue_sur_votre_AppStock\">
\t\t\t\t<span>Bienvenue sur votre </span><span style=\"color:rgba(159,5,30,1);\">App</span><span>Stock</span>
\t\t\t</div>
\t\t\t<img id=\"logo4-b\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/image/logo4-b.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/image/logo4-b.png 1x, image/logo4-b@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t</div>
\t\t<div id=\"Connexion_body\">
\t\t<form method=\"post\">
\t\t\t<img id=\"icon-128x128-2\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/image/icon-128x128-2.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/image/icon-128x128-2.png 1x, image/icon-128x128-2@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<div id=\"AppStock\">
\t\t\t\t<span>App</span><span style=\"color:rgba(255,255,255,1);\">Stock</span>
\t\t\t</div>
\t\t\t<img id=\"Rectangle_Form\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/image/Rectangle_Form.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/image/Rectangle_Form.png 1x, image/Rectangle_Form@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t";
        // line 49
        echo "\t\t\t<div class=\"col-md-6 text-white\" id=\"Rectangle_Form\"><br>
\t\t\t<h1 class=\"text-white text-center\">Login</h1>
\t\t\t<br>
\t\t\t\t\t<span>Email</span>
\t\t\t\t\t";
        // line 54
        echo "\t\t\t\t<div class=\"input-group flex-nowrap\">
\t\t\t\t\t<span class=\"input-group-text\" id=\"addon-wrapping\">@</span>
\t\t\t\t\t<input type=\"email\" value=\"";
        // line 56
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus placeholder=\"Username\" aria-label=\"Username\" aria-describedby=\"addon-wrapping\">
\t\t\t\t</div>
\t\t\t<br><br>
\t\t\t\t\t<span>Password</span>
\t\t\t\t<div class=\"input-group flex-nowrap\">
\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
\t\t\t\t</div>
\t\t\t\t<img id=\"password__icon\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/image/password__icon.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/image/password__icon.png 1x, image/password__icon@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t<br><br>
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\"value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t\t\t\t\t<button class=\"btn btn-block btn-outline-danger btn-lg m3-3 col-md-12 text-white\" type=\"submit\">
\t\t\t\t\t\t<span>Login</span>
\t\t\t\t\t</button>
\t\t\t</div>
\t\t</form>\t
\t\t</div>
\t\t<div id=\"footer\">
\t\t\t<svg class=\"Rectangle_footer\">
\t\t\t\t<rect id=\"Rectangle_footer\" rx=\"45\" ry=\"45\" x=\"0\" y=\"0\" width=\"1620\" height=\"112\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<svg class=\"tel\" viewBox=\"970.087 6385.58 116.825 94.839\">
\t\t\t\t<path id=\"tel\" d=\"M 1068.492431640625 6385.580078125 C 1068.492431640625 6385.580078125 988.50048828125 6385.580078125 988.50048828125 6385.580078125 C 978.3338012695312 6385.580078125 970.08740234375 6392.2568359375 970.08740234375 6400.52490234375 C 970.08740234375 6400.52490234375 970.08740234375 6465.474609375 970.08740234375 6465.474609375 C 970.08740234375 6473.7294921875 978.3338012695312 6480.4189453125 988.50048828125 6480.4189453125 C 988.50048828125 6480.4189453125 1068.492431640625 6480.4189453125 1068.492431640625 6480.4189453125 C 1078.666137695312 6480.4189453125 1086.91259765625 6473.7294921875 1086.91259765625 6465.474609375 C 1086.91259765625 6465.474609375 1086.91259765625 6400.52490234375 1086.91259765625 6400.52490234375 C 1086.91259765625 6392.2568359375 1078.666137695312 6385.580078125 1068.492431640625 6385.580078125 Z M 1026.7373046875 6395.47607421875 L 1028.017700195312 6411.83544921875 L 1023.366882324219 6412.92578125 L 1021.1298828125 6395.03759765625 L 1026.7373046875 6395.47607421875 Z M 1046.7080078125 6469.533203125 C 1046.7080078125 6469.533203125 1026.30517578125 6469.1953125 1026.30517578125 6469.1953125 C 992.6038818359375 6439.93310546875 998.0960083007812 6405.89892578125 998.0960083007812 6405.89892578125 L 1013.446716308594 6395.18798828125 L 1016.470275878906 6395.18798828125 L 1018.930908203125 6413.90234375 L 1012.212890625 6417.52294921875 L 1029.391357421875 6454.0625 L 1036.125122070312 6452.32177734375 L 1049.038208007812 6467.9423828125 L 1046.7080078125 6469.533203125 Z M 1053.188354492188 6466.05126953125 L 1039.527221679688 6450.68115234375 L 1044.702514648438 6448.87646484375 L 1056.613159179688 6463.2705078125 L 1053.188354492188 6466.05126953125 Z\">
\t\t\t\t</path>
\t\t\t</svg>
\t\t\t<img id=\"whatsapp\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/image/whatsapp.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/image/whatsapp.png 1x, image/whatsapp@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<img id=\"messenger\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/image/messenger.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/image/messenger.png 1x, image/messenger@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<img id=\"insta\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/image/insta.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/image/insta.png 1x, image/insta@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<img id=\"youtube\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/image/youtube.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/image/youtube.png 1x, image/youtube@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<div id=\"Mahamadou_Issagha_Diop\">
\t\t\t\t<span>Mahamadou Issagha Diop</span>
\t\t\t</div>
\t\t\t<img id=\"copyright\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/image/copyright.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/image/copyright.png 1x, image/copyright@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t</div>
\t</div>
\t";
        // line 522
        echo "</div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "login/Connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 522,  189 => 92,  179 => 87,  172 => 85,  165 => 83,  158 => 81,  139 => 65,  132 => 63,  123 => 56,  119 => 54,  113 => 49,  106 => 43,  96 => 38,  86 => 33,  66 => 18,  60 => 14,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\"/>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>AppStock</title>
<link rel=\"stylesheet\" type=\"text/css\" id=\"applicationStylesheet\" href=\"{{ asset('Prototype/css/style.css') }}\"/>
<!-- CSS only -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
        <!-- JavaScript Bundle with Popper -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2\" crossorigin=\"anonymous\"></script>
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
<script id=\"applicationScript\" type=\"text/javascript\" src=\"script/script.js\"></script>
</head>
<body>
<div id=\"Connexion_\">
\t<img id=\"Calque_1\" src=\"{{ asset('Prototype/image/Calque_1.png') }}\" srcset=\"{{ asset('Prototype/image/Calque_1.png 1x, image/Calque_1@2x.png 2x') }}\">
\t\t
\t<div id=\"Page_Connexion_\">
\t\t<div id=\"menu\">
\t\t\t<svg class=\"Rectangle_1_q\">
\t\t\t\t<linearGradient id=\"Rectangle_1_q\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t<stop offset=\"0\" stop-color=\"#28343b\" stop-opacity=\"1\"></stop>
\t\t\t\t\t<stop offset=\"1\" stop-color=\"#004a95\" stop-opacity=\"1\"></stop>
\t\t\t\t</linearGradient>
\t\t\t\t<rect id=\"Rectangle_1_q\" rx=\"75\" ry=\"75\" x=\"0\" y=\"0\" width=\"1620\" height=\"144\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Bienvenue_sur_votre_AppStock\">
\t\t\t\t<span>Bienvenue sur votre </span><span style=\"color:rgba(159,5,30,1);\">App</span><span>Stock</span>
\t\t\t</div>
\t\t\t<img id=\"logo4-b\" src=\"{{ asset('Prototype/image/logo4-b.png') }}\" srcset=\"{{ asset('Prototype/image/logo4-b.png 1x, image/logo4-b@2x.png 2x') }}\">
\t\t\t\t
\t\t</div>
\t\t<div id=\"Connexion_body\">
\t\t<form method=\"post\">
\t\t\t<img id=\"icon-128x128-2\" src=\"{{ asset('Prototype/image/icon-128x128-2.png') }}\" srcset=\"{{ asset('Prototype/image/icon-128x128-2.png 1x, image/icon-128x128-2@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<div id=\"AppStock\">
\t\t\t\t<span>App</span><span style=\"color:rgba(255,255,255,1);\">Stock</span>
\t\t\t</div>
\t\t\t<img id=\"Rectangle_Form\" src=\"{{ asset('Prototype/image/Rectangle_Form.png') }}\" srcset=\"{{ asset('Prototype/image/Rectangle_Form.png 1x, image/Rectangle_Form@2x.png 2x') }}\">
\t\t\t\t
\t\t\t{# <svg class=\"Rectangle_Email\">
\t\t\t\t<rect id=\"Rectangle_Email\" rx=\"25\" ry=\"25\" x=\"0\" y=\"0\" width=\"528\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg> #}
\t\t\t<div class=\"col-md-6 text-white\" id=\"Rectangle_Form\"><br>
\t\t\t<h1 class=\"text-white text-center\">Login</h1>
\t\t\t<br>
\t\t\t\t\t<span>Email</span>
\t\t\t\t\t{# <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus> #}
\t\t\t\t<div class=\"input-group flex-nowrap\">
\t\t\t\t\t<span class=\"input-group-text\" id=\"addon-wrapping\">@</span>
\t\t\t\t\t<input type=\"email\" value=\"{#{{ last_username }}#}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus placeholder=\"Username\" aria-label=\"Username\" aria-describedby=\"addon-wrapping\">
\t\t\t\t</div>
\t\t\t<br><br>
\t\t\t\t\t<span>Password</span>
\t\t\t\t<div class=\"input-group flex-nowrap\">
\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
\t\t\t\t</div>
\t\t\t\t<img id=\"password__icon\" src=\"{{ asset('Prototype/image/password__icon.png') }}\" srcset=\"{{ asset('Prototype/image/password__icon.png 1x, image/password__icon@2x.png 2x') }}\">
\t\t\t\t<br><br>
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\"value=\"{{ csrf_token('authenticate') }}\">
\t\t\t\t\t<button class=\"btn btn-block btn-outline-danger btn-lg m3-3 col-md-12 text-white\" type=\"submit\">
\t\t\t\t\t\t<span>Login</span>
\t\t\t\t\t</button>
\t\t\t</div>
\t\t</form>\t
\t\t</div>
\t\t<div id=\"footer\">
\t\t\t<svg class=\"Rectangle_footer\">
\t\t\t\t<rect id=\"Rectangle_footer\" rx=\"45\" ry=\"45\" x=\"0\" y=\"0\" width=\"1620\" height=\"112\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<svg class=\"tel\" viewBox=\"970.087 6385.58 116.825 94.839\">
\t\t\t\t<path id=\"tel\" d=\"M 1068.492431640625 6385.580078125 C 1068.492431640625 6385.580078125 988.50048828125 6385.580078125 988.50048828125 6385.580078125 C 978.3338012695312 6385.580078125 970.08740234375 6392.2568359375 970.08740234375 6400.52490234375 C 970.08740234375 6400.52490234375 970.08740234375 6465.474609375 970.08740234375 6465.474609375 C 970.08740234375 6473.7294921875 978.3338012695312 6480.4189453125 988.50048828125 6480.4189453125 C 988.50048828125 6480.4189453125 1068.492431640625 6480.4189453125 1068.492431640625 6480.4189453125 C 1078.666137695312 6480.4189453125 1086.91259765625 6473.7294921875 1086.91259765625 6465.474609375 C 1086.91259765625 6465.474609375 1086.91259765625 6400.52490234375 1086.91259765625 6400.52490234375 C 1086.91259765625 6392.2568359375 1078.666137695312 6385.580078125 1068.492431640625 6385.580078125 Z M 1026.7373046875 6395.47607421875 L 1028.017700195312 6411.83544921875 L 1023.366882324219 6412.92578125 L 1021.1298828125 6395.03759765625 L 1026.7373046875 6395.47607421875 Z M 1046.7080078125 6469.533203125 C 1046.7080078125 6469.533203125 1026.30517578125 6469.1953125 1026.30517578125 6469.1953125 C 992.6038818359375 6439.93310546875 998.0960083007812 6405.89892578125 998.0960083007812 6405.89892578125 L 1013.446716308594 6395.18798828125 L 1016.470275878906 6395.18798828125 L 1018.930908203125 6413.90234375 L 1012.212890625 6417.52294921875 L 1029.391357421875 6454.0625 L 1036.125122070312 6452.32177734375 L 1049.038208007812 6467.9423828125 L 1046.7080078125 6469.533203125 Z M 1053.188354492188 6466.05126953125 L 1039.527221679688 6450.68115234375 L 1044.702514648438 6448.87646484375 L 1056.613159179688 6463.2705078125 L 1053.188354492188 6466.05126953125 Z\">
\t\t\t\t</path>
\t\t\t</svg>
\t\t\t<img id=\"whatsapp\" src=\"{{ asset('Prototype/image/whatsapp.png') }}\" srcset=\"{{ asset('Prototype/image/whatsapp.png 1x, image/whatsapp@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"messenger\" src=\"{{ asset('Prototype/image/messenger.png') }}\" srcset=\"{{ asset('Prototype/image/messenger.png 1x, image/messenger@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"insta\" src=\"{{ asset('Prototype/image/insta.png') }}\" srcset=\"{{ asset('Prototype/image/insta.png 1x, image/insta@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"youtube\" src=\"{{ asset('Prototype/image/youtube.png') }}\" srcset=\"{{ asset('Prototype/image/youtube.png 1x, image/youtube@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<div id=\"Mahamadou_Issagha_Diop\">
\t\t\t\t<span>Mahamadou Issagha Diop</span>
\t\t\t</div>
\t\t\t<img id=\"copyright\" src=\"{{ asset('Prototype/image/copyright.png') }}\" srcset=\"{{ asset('Prototype/image/copyright.png 1x, image/copyright@2x.png 2x') }}\">
\t\t\t\t
\t\t</div>
\t</div>
\t{# <div id=\"Page_User_\">
\t\t<div id=\"menu_bf\">
\t\t\t<svg class=\"Rectangle_1_bh\">
\t\t\t\t<linearGradient id=\"Rectangle_1_bh\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t<stop offset=\"0\" stop-color=\"#28343b\" stop-opacity=\"1\"></stop>
\t\t\t\t\t<stop offset=\"1\" stop-color=\"#004a95\" stop-opacity=\"1\"></stop>
\t\t\t\t</linearGradient>
\t\t\t\t<rect id=\"Rectangle_1_bh\" rx=\"75\" ry=\"75\" x=\"0\" y=\"0\" width=\"1620\" height=\"144\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Logo\">
\t\t\t\t<span>Logo</span>
\t\t\t</div>
\t\t\t<img id=\"logo4-b_bj\" src=\"{{ asset('Prototype/image/logo4-b_bj.png') }}\" srcset=\"{{ asset('Prototype/image/logo4-b_bj.png 1x, image/logo4-b_bj@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<div id=\"Acceuil\">
\t\t\t\t<span>Acceuil</span>
\t\t\t</div>
\t\t\t<div id=\"Produit_bl\">
\t\t\t\t<span>Produit</span>
\t\t\t</div>
\t\t\t<div id=\"Categorie_bm\">
\t\t\t\t<span>Categorie</span>
\t\t\t</div>
\t\t\t<svg class=\"Rectangle_login\">
\t\t\t\t<rect id=\"Rectangle_login\" rx=\"20\" ry=\"20\" x=\"0\" y=\"0\" width=\"157\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Login\">
\t\t\t\t<span>Login</span>
\t\t\t</div>
\t\t\t<svg class=\"Rectangle_Sing_in\">
\t\t\t\t<rect id=\"Rectangle_Sing_in\" rx=\"20\" ry=\"20\" x=\"0\" y=\"0\" width=\"199\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Sign_in\">
\t\t\t\t<span>Sign in</span>
\t\t\t</div>
\t\t\t<svg class=\"Rectangle_Profil\">
\t\t\t\t<rect id=\"Rectangle_Profil\" rx=\"20\" ry=\"20\" x=\"0\" y=\"0\" width=\"157\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Profil\">
\t\t\t\t<span>Profil</span>
\t\t\t</div>
\t\t\t<svg class=\"Rectangle_Log_out\">
\t\t\t\t<rect id=\"Rectangle_Log_out\" rx=\"20\" ry=\"20\" x=\"0\" y=\"0\" width=\"199\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Log_out_\">
\t\t\t\t<span>Log out</span><br/>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"user_body\">
\t\t\t<img id=\"icon-128x128-2_bw\" src=\"{{ asset('Prototype/image/icon-128x128-2_bw.png') }}\" srcset=\"{{ asset('Prototype/image/icon-128x128-2_bw.png 1x, image/icon-128x128-2_bw@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<div id=\"AppStock_bx\">
\t\t\t\t<span>App</span><span style=\"color:rgba(255,255,255,1);\">Stock</span>
\t\t\t</div>
\t\t\t<img id=\"Rectangle_Form_by\" src=\"{{ asset('Prototype/image/Rectangle_Form_by.png') }}\" srcset=\"{{ asset('Prototype/image/Rectangle_Form_by.png 1x, image/Rectangle_Form_by@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<svg class=\"Rectangle_Fn\">
\t\t\t\t<rect id=\"Rectangle_Fn\" rx=\"25\" ry=\"25\" x=\"0\" y=\"0\" width=\"528\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Name\">
\t\t\t\t<span>Name</span>
\t\t\t</div>
\t\t\t<div id=\"User_b\">
\t\t\t\t<span>User</span>
\t\t\t</div>
\t\t\t<svg class=\"Rectangle_Email_b\">
\t\t\t\t<rect id=\"Rectangle_Email_b\" rx=\"25\" ry=\"25\" x=\"0\" y=\"0\" width=\"528\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Email_b\">
\t\t\t\t<span>Email</span>
\t\t\t</div>
\t\t\t<div id=\"User_ca\">
\t\t\t\t<span>User</span>
\t\t\t</div>
\t\t\t<svg class=\"Forme_565\" viewBox=\"1004.996 6999 78.008 46\">
\t\t\t\t<path id=\"Forme_565\" d=\"M 1081.464233398438 7044.99951171875 C 1081.464233398438 7044.99951171875 1006.535827636719 7044.99951171875 1006.535827636719 7044.99951171875 C 1005.684692382812 7044.99951171875 1004.995971679688 7044.4013671875 1004.995971679688 7043.66357421875 C 1004.995971679688 7043.66357421875 1004.995971679688 7000.33544921875 1004.995971679688 7000.33544921875 C 1004.995971679688 6999.59814453125 1005.684692382812 6999 1006.535827636719 6999 C 1006.535827636719 6999 1081.464233398438 6999 1081.464233398438 6999 C 1082.315063476562 6999 1083.004028320312 6999.59814453125 1083.004028320312 7000.33544921875 C 1083.004028320312 7000.33544921875 1083.004028320312 7043.66357421875 1083.004028320312 7043.66357421875 C 1083.004028320312 7044.4013671875 1082.315063476562 7044.99951171875 1081.464233398438 7044.99951171875 Z M 1078.568115234375 7042.328125 L 1055.90087890625 7016.79296875 L 1044.051025390625 7023.67626953125 L 1032.0126953125 7016.7021484375 L 1009.301391601562 7042.328125 L 1078.568115234375 7042.328125 Z M 1008.075622558594 7039.326171875 L 1029.445190429688 7015.21435546875 L 1008.075622558594 7002.833984375 L 1008.075622558594 7039.326171875 Z M 1011.612670898438 7001.67138671875 L 1044.003051757812 7020.44140625 L 1076.387939453125 7001.67138671875 L 1011.612670898438 7001.67138671875 Z M 1058.466186523438 7015.302734375 L 1079.924194335938 7039.4755859375 L 1079.924194335938 7002.837890625 L 1058.466186523438 7015.302734375 Z\">
\t\t\t\t</path>
\t\t\t</svg>
\t\t\t<svg class=\"Rectangle_Pwd_b\">
\t\t\t\t<rect id=\"Rectangle_Pwd_b\" rx=\"25\" ry=\"25\" x=\"0\" y=\"0\" width=\"528\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Password_b\">
\t\t\t\t<span>Password</span>
\t\t\t</div>
\t\t\t<img id=\"password__icon_b\" src=\"{{ asset('Prototype/image/password__icon_b.png') }}\" srcset=\"{{ asset('Prototype/image/password__icon_b.png 1x, image/password__icon_b@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<svg class=\"Rectangle_Pr\">
\t\t\t\t<rect id=\"Rectangle_Pr\" rx=\"25\" ry=\"25\" x=\"0\" y=\"0\" width=\"528\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Profile\">
\t\t\t\t<span>Profile</span>
\t\t\t</div>
\t\t\t<img id=\"profil_icon\" src=\"{{ asset('Prototype/image/profil_icon.png') }}\" srcset=\"{{ asset('Prototype/image/profil_icon.png 1x, image/profil_icon@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<div id=\"file\">
\t\t\t\t<span>file</span>
\t\t\t</div>
\t\t\t<svg class=\"Rectangle_Connexion_cd\">
\t\t\t\t<rect id=\"Rectangle_Connexion_cd\" rx=\"25\" ry=\"25\" x=\"0\" y=\"0\" width=\"269\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Valider\">
\t\t\t\t<span>Valider</span>
\t\t\t</div>
\t\t\t<div id=\"Manage_U\">
\t\t\t\t<svg class=\"Rectangle_517\">
\t\t\t\t\t<rect id=\"Rectangle_517\" rx=\"20\" ry=\"20\" x=\"0\" y=\"0\" width=\"410\" height=\"57\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Manage_users\">
\t\t\t\t\t<span>Manage users</span>
\t\t\t\t</div>
\t\t\t\t<div id=\"User_ci\">
\t\t\t\t\t<span>User</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"footer_cj\">
\t\t\t<svg class=\"Rectangle_footer_ck\">
\t\t\t\t<rect id=\"Rectangle_footer_ck\" rx=\"45\" ry=\"45\" x=\"0\" y=\"0\" width=\"1620\" height=\"112\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<svg class=\"tel_cl\" viewBox=\"970.087 7463.58 116.825 94.839\">
\t\t\t\t<path id=\"tel_cl\" d=\"M 1068.492431640625 7463.580078125 C 1068.492431640625 7463.580078125 988.50048828125 7463.580078125 988.50048828125 7463.580078125 C 978.3338012695312 7463.580078125 970.08740234375 7470.2568359375 970.08740234375 7478.5244140625 C 970.08740234375 7478.5244140625 970.08740234375 7543.474609375 970.08740234375 7543.474609375 C 970.08740234375 7551.72998046875 978.3338012695312 7558.4189453125 988.50048828125 7558.4189453125 C 988.50048828125 7558.4189453125 1068.492431640625 7558.4189453125 1068.492431640625 7558.4189453125 C 1078.666137695312 7558.4189453125 1086.91259765625 7551.72998046875 1086.91259765625 7543.474609375 C 1086.91259765625 7543.474609375 1086.91259765625 7478.5244140625 1086.91259765625 7478.5244140625 C 1086.91259765625 7470.2568359375 1078.666137695312 7463.580078125 1068.492431640625 7463.580078125 Z M 1026.7373046875 7473.4765625 L 1028.017700195312 7489.83544921875 L 1023.366882324219 7490.92578125 L 1021.1298828125 7473.03759765625 L 1026.7373046875 7473.4765625 Z M 1046.7080078125 7547.533203125 C 1046.7080078125 7547.533203125 1026.30517578125 7547.1953125 1026.30517578125 7547.1953125 C 992.6038818359375 7517.9326171875 998.0960083007812 7483.89892578125 998.0960083007812 7483.89892578125 L 1013.446716308594 7473.18798828125 L 1016.470275878906 7473.18798828125 L 1018.930908203125 7491.90283203125 L 1012.212890625 7495.5234375 L 1029.391357421875 7532.06298828125 L 1036.125122070312 7530.32177734375 L 1049.038208007812 7545.9423828125 L 1046.7080078125 7547.533203125 Z M 1053.188354492188 7544.05126953125 L 1039.527221679688 7528.68115234375 L 1044.702514648438 7526.876953125 L 1056.613159179688 7541.27001953125 L 1053.188354492188 7544.05126953125 Z\">
\t\t\t\t</path>
\t\t\t</svg>
\t\t\t<img id=\"whatsapp_cm\" src=\"{{ asset('Prototype/image/whatsapp_cm.png') }}\" srcset=\"{{ asset('Prototype/image/whatsapp_cm.png 1x, image/whatsapp_cm@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"messenger_cn\" src=\"{{ asset('Prototype/image/messenger_cn.png') }}\" srcset=\"{{ asset('Prototype/image/messenger_cn.png 1x, image/messenger_cn@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"insta_co\" src=\"{{ asset('Prototype/image/insta_co.png') }}\" srcset=\"{{ asset('Prototype/image/insta_co.png 1x, image/insta_co@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"youtube_cp\" src=\"{{ asset('Prototype/image/youtube_cp.png') }}\" srcset=\"{{ asset('Prototype/image/youtube_cp.png 1x, image/youtube_cp@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<div id=\"Mahamadou_Issagha_Diop_cq\">
\t\t\t\t<span>Mahamadou Issagha Diop</span>
\t\t\t</div>
\t\t\t<img id=\"copyright_cr\" src=\"{{ asset('Prototype/image/copyright_cr.png') }}\" srcset=\"{{ asset('Prototype/image/copyright_cr.png 1x, image/copyright_cr@2x.png 2x') }}\">
\t\t\t\t
\t\t</div>
\t</div>
\t<div id=\"Page_categorie\">
\t\t<div id=\"menu_ct\">
\t\t\t<svg class=\"Rectangle_1_cv\">
\t\t\t\t<linearGradient id=\"Rectangle_1_cv\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t<stop offset=\"0\" stop-color=\"#28343b\" stop-opacity=\"1\"></stop>
\t\t\t\t\t<stop offset=\"1\" stop-color=\"#004a95\" stop-opacity=\"1\"></stop>
\t\t\t\t</linearGradient>
\t\t\t\t<rect id=\"Rectangle_1_cv\" rx=\"75\" ry=\"75\" x=\"0\" y=\"0\" width=\"1620\" height=\"144\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Logo_cw\">
\t\t\t\t<span>Logo</span>
\t\t\t</div>
\t\t\t<img id=\"logo4-b_cx\" src=\"{{ asset('Prototype/image/logo4-b_cx.png') }}\" srcset=\"{{ asset('Prototype/image/logo4-b_cx.png 1x, image/logo4-b_cx@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<div id=\"Acceuil_cy\">
\t\t\t\t<span>Acceuil</span>
\t\t\t</div>
\t\t\t<div id=\"Produit_cz\">
\t\t\t\t<span>Produit</span>
\t\t\t</div>
\t\t\t<div id=\"Categorie_c\">
\t\t\t\t<span>Categorie</span>
\t\t\t</div>
\t\t\t<svg class=\"Rectangle_login_c\">
\t\t\t\t<rect id=\"Rectangle_login_c\" rx=\"20\" ry=\"20\" x=\"0\" y=\"0\" width=\"157\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Login_c\">
\t\t\t\t<span>Login</span>
\t\t\t</div>
\t\t\t<svg class=\"Rectangle_Sing_in_c\">
\t\t\t\t<rect id=\"Rectangle_Sing_in_c\" rx=\"20\" ry=\"20\" x=\"0\" y=\"0\" width=\"199\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Sign_in_c\">
\t\t\t\t<span>Sign in</span>
\t\t\t</div>
\t\t\t<svg class=\"Rectangle_Profil_c\">
\t\t\t\t<rect id=\"Rectangle_Profil_c\" rx=\"20\" ry=\"20\" x=\"0\" y=\"0\" width=\"157\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Profil_c\">
\t\t\t\t<span>Profil</span>
\t\t\t</div>
\t\t\t<svg class=\"Rectangle_Log_out_c\">
\t\t\t\t<rect id=\"Rectangle_Log_out_c\" rx=\"20\" ry=\"20\" x=\"0\" y=\"0\" width=\"199\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Log_out__c\">
\t\t\t\t<span>Log out</span><br/>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"Categorie_body\">
\t\t\t<div id=\"Screenshot_2022-05-31_132950\">
\t\t\t\t<img id=\"Screenshot_2022-05-31_132950_db\" src=\"{{ asset('Prototype/image/Screenshot_2022-05-31_132950_db.png') }}\" srcset=\"{{ asset('Prototype/image/Screenshot_2022-05-31_132950_db.png 1x, image/Screenshot_2022-05-31_132950_db@2x.png 2x') }}\">
\t\t\t\t\t
\t\t\t\t<img id=\"Clip\" src=\"{{ asset('Prototype/image/Clip.png') }}\" srcset=\"{{ asset('Prototype/image/Clip.png 1x, image/Clip@2x.png 2x') }}\">
\t\t\t\t\t
\t\t\t\t</svg>
\t\t\t</div>
\t\t\t<div id=\"sous_menu\">
\t\t\t\t<svg class=\"Rectanglegauche_sous_menu_df\">
\t\t\t\t\t<linearGradient id=\"Rectanglegauche_sous_menu_df\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#192530\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#1b606f\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectanglegauche_sous_menu_df\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"254\" height=\"659\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<svg class=\"Rectangle_entree\">
\t\t\t\t\t<rect id=\"Rectangle_entree\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"228\" height=\"53\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Forme_entree\">
\t\t\t\t\t<svg class=\"Forme_entree_di\" viewBox=\"363.092 4871.499 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Forme_entree_di\" d=\"M 363.0924987792969 4921.5712890625 C 363.0924987792969 4919.12451171875 363.0924987792969 4876.17578125 363.0924987792969 4874.4873046875 C 363.0924987792969 4872.29833984375 365.5166015625 4870.66943359375 367.912109375 4871.95068359375 C 369.8322143554688 4872.97607421875 408.2018127441406 4893.6748046875 411.4765930175781 4895.4453125 C 413.6274108886719 4896.60791015625 413.5910949707031 4899.380859375 411.4765930175781 4900.5458984375 C 409.1192932128906 4901.84423828125 370.6032104492188 4922.6484375 367.8139038085938 4924.09423828125 C 365.7715148925781 4925.15380859375 363.0924987792969 4923.98291015625 363.0924987792969 4921.5712890625 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"Stroke_Effect\" viewBox=\"363.092 4871.499 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Stroke_Effect\" d=\"M 363.0924987792969 4921.5712890625 C 363.0924987792969 4919.12451171875 363.0924987792969 4876.17578125 363.0924987792969 4874.4873046875 C 363.0924987792969 4872.29833984375 365.5166015625 4870.66943359375 367.912109375 4871.95068359375 C 369.8322143554688 4872.97607421875 408.2018127441406 4893.6748046875 411.4765930175781 4895.4453125 C 413.6274108886719 4896.60791015625 413.5910949707031 4899.380859375 411.4765930175781 4900.5458984375 C 409.1192932128906 4901.84423828125 370.6032104492188 4922.6484375 367.8139038085938 4924.09423828125 C 365.7715148925781 4925.15380859375 363.0924987792969 4923.98291015625 363.0924987792969 4921.5712890625 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t\t<div id=\"Entree_dk\">
\t\t\t\t\t<span>Entree</span>
\t\t\t\t</div>
\t\t\t\t<img id=\"img_entree\" src=\"{{ asset('Prototype/image/img_entree.png') }}\" srcset=\"{{ asset('Prototype/image/img_entree.png 1x, image/img_entree@2x.png 2x') }}\">
\t\t\t\t\t
\t\t\t\t<svg class=\"Rectangle_sortie\">
\t\t\t\t\t<rect id=\"Rectangle_sortie\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"228\" height=\"53\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Forme_sortie\">
\t\t\t\t\t<svg class=\"Forme_sortie_do\" viewBox=\"363.092 5175.499 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Forme_sortie_do\" d=\"M 363.0924987792969 5225.57177734375 C 363.0924987792969 5223.12451171875 363.0924987792969 5180.17529296875 363.0924987792969 5178.48779296875 C 363.0924987792969 5176.29833984375 365.5166015625 5174.669921875 367.912109375 5175.9501953125 C 369.8322143554688 5176.9755859375 408.2018127441406 5197.6748046875 411.4765930175781 5199.4453125 C 413.6274108886719 5200.6083984375 413.5910949707031 5203.38134765625 411.4765930175781 5204.54541015625 C 409.1192932128906 5205.84423828125 370.6032104492188 5226.64892578125 367.8139038085938 5228.09423828125 C 365.7715148925781 5229.15380859375 363.0924987792969 5227.98291015625 363.0924987792969 5225.57177734375 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"Stroke_Effect_dp\" viewBox=\"363.092 5175.499 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Stroke_Effect_dp\" d=\"M 363.0924987792969 5225.57177734375 C 363.0924987792969 5223.12451171875 363.0924987792969 5180.17529296875 363.0924987792969 5178.48779296875 C 363.0924987792969 5176.29833984375 365.5166015625 5174.669921875 367.912109375 5175.9501953125 C 369.8322143554688 5176.9755859375 408.2018127441406 5197.6748046875 411.4765930175781 5199.4453125 C 413.6274108886719 5200.6083984375 413.5910949707031 5203.38134765625 411.4765930175781 5204.54541015625 C 409.1192932128906 5205.84423828125 370.6032104492188 5226.64892578125 367.8139038085938 5228.09423828125 C 365.7715148925781 5229.15380859375 363.0924987792969 5227.98291015625 363.0924987792969 5225.57177734375 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t\t<div id=\"Sortie_dq\">
\t\t\t\t\t<span>Sortie</span>
\t\t\t\t</div>
\t\t\t\t<img id=\"imd_sortie\" src=\"{{ asset('Prototype/image/imd_sortie.png') }}\" srcset=\"{{ asset('Prototype/image/imd_sortie.png 1x, image/imd_sortie@2x.png 2x') }}\">
\t\t\t\t\t
\t\t\t</div>
\t\t\t<div id=\"User_ds\">
\t\t\t\t<svg class=\"Rectangle_User_info_du\">
\t\t\t\t\t<linearGradient id=\"Rectangle_User_info_du\" spreadMethod=\"pad\" x1=\"0.097\" x2=\"0.903\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#19252f\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#20494d\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectangle_User_info_du\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"254\" height=\"160\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"User_Name\">
\t\t\t\t\t<span>User</span><br/><span>Name</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"en_tte_\">
\t\t\t\t<svg class=\"Rectangle_haut_en_tte__dy\">
\t\t\t\t\t<linearGradient id=\"Rectangle_haut_en_tte__dy\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#18202b\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#214f53\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectangle_haut_en_tte__dy\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"1367\" height=\"160\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<svg class=\"Rectangle_3\">
\t\t\t\t\t<rect id=\"Rectangle_3\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"527\" height=\"54\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Recherche\">
\t\t\t\t\t<span>Recherche</span>
\t\t\t\t</div>
\t\t\t\t<div id=\"Gestion_des_Categories\">
\t\t\t\t\t<span>Gestion des Categories</span>
\t\t\t\t</div>
\t\t\t\t<svg class=\"Forme_1\" viewBox=\"1318.092 4538.494 47.002 45.004\">
\t\t\t\t\t<path id=\"Forme_1\" d=\"M 1364.41943359375 4581.55810546875 C 1363.23095703125 4583.6005859375 1360.866943359375 4584.11328125 1359.146850585938 4582.697265625 C 1359.146850585938 4582.697265625 1343.570678710938 4569.89794921875 1343.570678710938 4569.89794921875 C 1342.468139648438 4568.99462890625 1341.8974609375 4567.52197265625 1341.939819335938 4566.04150390625 C 1339.933349609375 4568.5966796875 1337.2978515625 4570.31298828125 1334.345581054688 4570.9501953125 C 1330.719604492188 4571.7353515625 1327.057250976562 4570.79638671875 1324.03466796875 4568.3125 C 1321.010498046875 4565.82861328125 1318.980834960938 4562.0927734375 1318.319946289062 4557.78955078125 C 1317.658935546875 4553.48388671875 1318.447631835938 4549.13330078125 1320.54150390625 4545.5400390625 C 1324.866088867188 4538.1220703125 1333.468139648438 4536.26220703125 1339.718139648438 4541.3955078125 C 1345.390747070312 4546.0595703125 1347.203857421875 4554.90869140625 1344.255126953125 4562.05126953125 C 1345.407104492188 4561.4765625 1346.773559570312 4561.5888671875 1347.8818359375 4562.49853515625 C 1347.8818359375 4562.49853515625 1363.462158203125 4575.29736328125 1363.462158203125 4575.29736328125 C 1365.182250976562 4576.7138671875 1365.612426757812 4579.51513671875 1364.41943359375 4581.55810546875 Z M 1341.32763671875 4552.8115234375 C 1340.867797851562 4549.810546875 1339.45361328125 4547.20556640625 1337.344970703125 4545.47412109375 C 1332.989013671875 4541.89208984375 1326.988647460938 4543.18701171875 1323.970336914062 4548.359375 C 1320.955810546875 4553.53857421875 1322.0478515625 4560.6611328125 1326.404663085938 4564.2373046875 C 1330.761108398438 4567.81982421875 1336.760375976562 4566.525390625 1339.778076171875 4561.35107421875 C 1341.237915039062 4558.8466796875 1341.788452148438 4555.81396484375 1341.32763671875 4552.8115234375 Z\">
\t\t\t\t\t</path>
\t\t\t\t</svg>
\t\t\t\t<img id=\"img_gestion_produit\" src=\"{{ asset('Prototype/image/img_gestion_produit.png') }}\" srcset=\"{{ asset('Prototype/image/img_gestion_produit.png 1x, image/img_gestion_produit@2x.png 2x') }}\">
\t\t\t\t\t
\t\t\t</div>
\t\t\t<div id=\"table\">
\t\t\t\t<div id=\"header\">
\t\t\t\t\t<svg class=\"table_header_d\">
\t\t\t\t\t\t<linearGradient id=\"table_header_d\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#1b2a35\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t\t<stop offset=\"0.1184\" stop-color=\"#1b2a35\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t\t<stop offset=\"0.3741\" stop-color=\"#1b263f\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#1b2248\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t<rect id=\"table_header_d\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"838\" height=\"74\">
\t\t\t\t\t\t</rect>
\t\t\t\t\t</svg>
\t\t\t\t\t<div id=\"ID\">
\t\t\t\t\t\t<span>ID</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"Libelle\">
\t\t\t\t\t\t<span>Libelle</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"body\">
\t\t\t\t\t<svg class=\"table_body\">
\t\t\t\t\t\t<rect id=\"table_body\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"838\" height=\"582\">
\t\t\t\t\t\t</rect>
\t\t\t\t\t</svg>
\t\t\t\t\t<div id=\"table_td\">
\t\t\t\t\t\t<svg class=\"table_body_copie\">
\t\t\t\t\t\t\t<rect id=\"table_body_copie\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"838\" height=\"74.34\">
\t\t\t\t\t\t\t</rect>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<svg class=\"table_body_copie_2\">
\t\t\t\t\t\t\t<rect id=\"table_body_copie_2\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"838\" height=\"74.41\">
\t\t\t\t\t\t\t</rect>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<svg class=\"table_body_copie_3\">
\t\t\t\t\t\t\t<rect id=\"table_body_copie_3\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"838\" height=\"74.34\">
\t\t\t\t\t\t\t</rect>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<svg class=\"table_body_copie_3_eg\">
\t\t\t\t\t\t\t<rect id=\"table_body_copie_3_eg\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"838\" height=\"74.38\">
\t\t\t\t\t\t\t</rect>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<svg class=\"table_body_copie_4\">
\t\t\t\t\t\t\t<rect id=\"table_body_copie_4\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"838\" height=\"74.38\">
\t\t\t\t\t\t\t</rect>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<svg class=\"table_body_copie_4_ei\">
\t\t\t\t\t\t\t<rect id=\"table_body_copie_4_ei\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"838\" height=\"74.38\">
\t\t\t\t\t\t\t</rect>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<svg class=\"table_body_copie_5\">
\t\t\t\t\t\t\t<rect id=\"table_body_copie_5\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"838\" height=\"74.38\">
\t\t\t\t\t\t\t</rect>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<svg class=\"table_body_copie_5_ek\">
\t\t\t\t\t\t\t<rect id=\"table_body_copie_5_ek\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"838\" height=\"74.34\">
\t\t\t\t\t\t\t</rect>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"table_ligne\">
\t\t\t\t\t<svg class=\"Rectangle_4\">
\t\t\t\t\t\t<rect id=\"Rectangle_4\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"838\" height=\"653\">
\t\t\t\t\t\t</rect>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"Rectangle_4_copie_4\">
\t\t\t\t\t\t<rect id=\"Rectangle_4_copie_4\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"242.01\" height=\"653\">
\t\t\t\t\t\t</rect>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"Formulaire_Categorie\">
\t\t\t\t<svg class=\"Rectangle_Formulaire\">
\t\t\t\t\t<rect id=\"Rectangle_Formulaire\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"527\" height=\"507\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<svg class=\"Rectangle_Form_er\">
\t\t\t\t\t<linearGradient id=\"Rectangle_Form_er\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#0c1318\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#364753\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectangle_Form_er\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"527\" height=\"51\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Formulaire_Categorie_es\">
\t\t\t\t\t<span>Formulaire Categorie</span>
\t\t\t\t</div>
\t\t\t\t<svg class=\"Rectangle_libelle\">
\t\t\t\t\t<rect id=\"Rectangle_libelle\" rx=\"22\" ry=\"22\" x=\"0\" y=\"0\" width=\"410\" height=\"44\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<img id=\"img_libelle\" src=\"{{ asset('Prototype/image/img_libelle.png') }}\" srcset=\"{{ asset('Prototype/image/img_libelle.png 1x, image/img_libelle@2x.png 2x') }}\">
\t\t\t\t\t
\t\t\t\t<div id=\"Libelle_ev\">
\t\t\t\t\t<span>Libelle</span>
\t\t\t\t</div>
\t\t\t\t<svg class=\"Rectangle_Valider\">
\t\t\t\t\t<rect id=\"Rectangle_Valider\" rx=\"22\" ry=\"22\" x=\"0\" y=\"0\" width=\"137\" height=\"54\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Valider_ex\">
\t\t\t\t\t<span>Valider</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"footer_ey\">
\t\t\t<svg class=\"Rectangle_footer_ez\">
\t\t\t\t<rect id=\"Rectangle_footer_ez\" rx=\"45\" ry=\"45\" x=\"0\" y=\"0\" width=\"1620\" height=\"112\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<svg class=\"tel_e\" viewBox=\"980.181 5296.58 116.825 94.839\">
\t\t\t\t<path id=\"tel_e\" d=\"M 1078.586059570312 5296.580078125 C 1078.586059570312 5296.580078125 998.5941772460938 5296.580078125 998.5941772460938 5296.580078125 C 988.427490234375 5296.580078125 980.1810913085938 5303.2568359375 980.1810913085938 5311.5244140625 C 980.1810913085938 5311.5244140625 980.1810913085938 5376.474609375 980.1810913085938 5376.474609375 C 980.1810913085938 5384.7294921875 988.427490234375 5391.4189453125 998.5941772460938 5391.4189453125 C 998.5941772460938 5391.4189453125 1078.586059570312 5391.4189453125 1078.586059570312 5391.4189453125 C 1088.759765625 5391.4189453125 1097.00634765625 5384.7294921875 1097.00634765625 5376.474609375 C 1097.00634765625 5376.474609375 1097.00634765625 5311.5244140625 1097.00634765625 5311.5244140625 C 1097.00634765625 5303.2568359375 1088.759765625 5296.580078125 1078.586059570312 5296.580078125 Z M 1036.830932617188 5306.4765625 L 1038.111450195312 5322.83544921875 L 1033.46044921875 5323.92578125 L 1031.2236328125 5306.0380859375 L 1036.830932617188 5306.4765625 Z M 1056.8017578125 5380.533203125 C 1056.8017578125 5380.533203125 1036.39892578125 5380.1953125 1036.39892578125 5380.1953125 C 1002.697570800781 5350.93310546875 1008.189697265625 5316.8984375 1008.189697265625 5316.8984375 L 1023.540283203125 5306.1875 L 1026.56396484375 5306.1875 L 1029.024658203125 5324.90283203125 L 1022.306579589844 5328.5234375 L 1039.485107421875 5365.06298828125 L 1046.21875 5363.32177734375 L 1059.131958007812 5378.9423828125 L 1056.8017578125 5380.533203125 Z M 1063.281982421875 5377.05078125 L 1049.620849609375 5361.68115234375 L 1054.796142578125 5359.876953125 L 1066.706909179688 5374.2705078125 L 1063.281982421875 5377.05078125 Z\">
\t\t\t\t</path>
\t\t\t</svg>
\t\t\t<img id=\"whatsapp_e\" src=\"{{ asset('Prototype/image/whatsapp_e.png') }}\" srcset=\"{{ asset('Prototype/image/whatsapp_e.png 1x, image/whatsapp_e@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"messenger_e\" src=\"{{ asset('Prototype/image/messenger_e.png') }}\" srcset=\"{{ asset('Prototype/image/messenger_e.png 1x, image/messenger_e@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"insta_e\" src=\"{{ asset('Prototype/image/insta_e.png') }}\" srcset=\"{{ asset('Prototype/image/insta_e.png 1x, image/insta_e@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"youtube_e\" src=\"{{ asset('Prototype/image/youtube_e.png') }}\" srcset=\"{{ asset('Prototype/image/youtube_e.png 1x, image/youtube_e@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<div id=\"Mahamadou_Issagha_Diop_e\">
\t\t\t\t<span>Mahamadou Issagha Diop</span>
\t\t\t</div>
\t\t\t<img id=\"copyright_e\" src=\"{{ asset('Prototype/image/copyright_e.png') }}\" srcset=\"{{ asset('Prototype/image/copyright_e.png 1x, image/copyright_e@2x.png 2x') }}\">
\t\t\t\t
\t\t</div>
\t</div> #}
</div>
</body>
</html>", "login/Connexion.html.twig", "C:\\xampp\\htdocs\\semestre2\\Symfony\\appstocksymfony\\templates\\login\\Connexion.html.twig");
    }
}
