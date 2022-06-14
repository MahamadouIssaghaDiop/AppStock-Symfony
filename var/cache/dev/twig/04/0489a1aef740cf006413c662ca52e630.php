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

/* manage/index.html.twig */
class __TwigTemplate_54ff6aceff19f257ced8e04fff337c2a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manage/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manage/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\"/>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>User</title>
<link rel=\"stylesheet\" type=\"text/css\" id=\"applicationStylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Ucss/User.css"), "html", null, true);
        echo "\"/>
<!-- CSS only -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
        <!-- JavaScript Bundle with Popper -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2\" crossorigin=\"anonymous\"></script>
        ";
        // line 14
        echo "<script id=\"applicationScript\" type=\"text/javascript\" src=\"Uscript/User.js\"></script>
</head>
<body>

<div id=\"User\">
\t<img id=\"Calque_1_bfr\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Uimage/Calque_1_bfr.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Uimage/Calque_1_bfr.png 1x, Uimage/Calque_1_bfr@2x.png 2x"), "html", null, true);
        echo "\">
\t\t
\t<div id=\"Page_Connexion__bfs\">
\t\t<div id=\"menu_bft\">
\t\t\t<svg class=\"Rectangle_1_bfv\">
\t\t\t\t<linearGradient id=\"Rectangle_1_bfv\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t<stop offset=\"0\" stop-color=\"#28343b\" stop-opacity=\"1\"></stop>
\t\t\t\t\t<stop offset=\"1\" stop-color=\"#004a95\" stop-opacity=\"1\"></stop>
\t\t\t\t</linearGradient>
\t\t\t\t<rect id=\"Rectangle_1_bfv\" rx=\"75\" ry=\"75\" x=\"0\" y=\"0\" width=\"1620\" height=\"144\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Bienvenue_sur_votre_AppStock_bfw\">
\t\t\t\t<span>Bienvenue sur votre </span><span style=\"color:rgba(159,5,30,1);\">App</span><span>Stock</span>
\t\t\t</div>
\t\t\t<img id=\"logo4-b_bfx\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Uimage/logo4-b_bfx.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Uimage/logo4-b_bfx.png 1x, Uimage/logo4-b_bfx@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t</div>
\t\t<div id=\"Connexion_body_bfy\">
\t\t\t<img id=\"icon-128x128-2_bfz\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Uimage/icon-128x128-2_bfz.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Uimage/icon-128x128-2_bfz.png 1x, Uimage/icon-128x128-2_bfz@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<div id=\"AppStock_bf\">
\t\t\t\t<span>App</span><span style=\"color:rgba(255,255,255,1);\">Stock</span>
\t\t\t</div>
\t\t\t<img id=\"Rectangle_Form_bf\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Uimage/Rectangle_Form_bf.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Uimage/Rectangle_Form_bf.png 1x, Uimage/Rectangle_Form_bf@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<svg class=\"Rectangle_Email_bf\">
\t\t\t\t<rect id=\"Rectangle_Email_bf\" rx=\"25\" ry=\"25\" x=\"0\" y=\"0\" width=\"528\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Email_bf\">
\t\t\t\t<span>Email</span>
\t\t\t</div>
\t\t\t<div id=\"User_bf\">
\t\t\t\t<span>User</span>
\t\t\t</div>
\t\t\t<svg class=\"Rectangle_Pwd_bf\">
\t\t\t\t<rect id=\"Rectangle_Pwd_bf\" rx=\"25\" ry=\"25\" x=\"0\" y=\"0\" width=\"528\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Password_bf\">
\t\t\t\t<span>Password</span>
\t\t\t</div>
\t\t\t<img id=\"password__icon_bf\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/UimageUimage/password__icon_bf.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/UimageUimage/password__icon_bf.png 1x, Uimage/password__icon_bf@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<svg class=\"Rectangle_Connexion_bf\">
\t\t\t\t<rect id=\"Rectangle_Connexion_bf\" rx=\"25\" ry=\"25\" x=\"0\" y=\"0\" width=\"269\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Connexion_bf\">
\t\t\t\t<span>Connexion</span>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"footer_bga\">
\t\t\t<svg class=\"Rectangle_footer_bgb\">
\t\t\t\t<rect id=\"Rectangle_footer_bgb\" rx=\"45\" ry=\"45\" x=\"0\" y=\"0\" width=\"1620\" height=\"112\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<svg class=\"tel_bgc\" viewBox=\"970.087 6385.58 116.825 94.839\">
\t\t\t\t<path id=\"tel_bgc\" d=\"M 1068.492431640625 6385.580078125 C 1068.492431640625 6385.580078125 988.50048828125 6385.580078125 988.50048828125 6385.580078125 C 978.3338012695312 6385.580078125 970.08740234375 6392.2568359375 970.08740234375 6400.52490234375 C 970.08740234375 6400.52490234375 970.08740234375 6465.474609375 970.08740234375 6465.474609375 C 970.08740234375 6473.7294921875 978.3338012695312 6480.4189453125 988.50048828125 6480.4189453125 C 988.50048828125 6480.4189453125 1068.492431640625 6480.4189453125 1068.492431640625 6480.4189453125 C 1078.666137695312 6480.4189453125 1086.91259765625 6473.7294921875 1086.91259765625 6465.474609375 C 1086.91259765625 6465.474609375 1086.91259765625 6400.52490234375 1086.91259765625 6400.52490234375 C 1086.91259765625 6392.2568359375 1078.666137695312 6385.580078125 1068.492431640625 6385.580078125 Z M 1026.7373046875 6395.47607421875 L 1028.017700195312 6411.83544921875 L 1023.366882324219 6412.92578125 L 1021.1298828125 6395.03759765625 L 1026.7373046875 6395.47607421875 Z M 1046.7080078125 6469.533203125 C 1046.7080078125 6469.533203125 1026.30517578125 6469.1953125 1026.30517578125 6469.1953125 C 992.6038818359375 6439.93310546875 998.0960083007812 6405.89892578125 998.0960083007812 6405.89892578125 L 1013.446716308594 6395.18798828125 L 1016.470275878906 6395.18798828125 L 1018.930908203125 6413.90234375 L 1012.212890625 6417.52294921875 L 1029.391357421875 6454.0625 L 1036.125122070312 6452.32177734375 L 1049.038208007812 6467.9423828125 L 1046.7080078125 6469.533203125 Z M 1053.188354492188 6466.05126953125 L 1039.527221679688 6450.68115234375 L 1044.702514648438 6448.87646484375 L 1056.613159179688 6463.2705078125 L 1053.188354492188 6466.05126953125 Z\">
\t\t\t\t</path>
\t\t\t</svg>
\t\t\t<img id=\"whatsapp_bgd\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/UimageUimage/whatsapp_bgd.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/UimageUimage/whatsapp_bgd.png 1x, Uimage/whatsapp_bgd@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<img id=\"messenger_bge\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/UimageUimage/messenger_bge.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/UimageUimage/messenger_bge.png 1x, Uimage/messenger_bge@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<img id=\"insta_bgf\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/UimageUimage/insta_bgf.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/UimageUimage/insta_bgf.png 1x, Uimage/insta_bgf@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<img id=\"youtube_bgg\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/UimageUimage/youtube_bgg.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/UimageUimage/youtube_bgg.png 1x, Uimage/youtube_bgg@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<div id=\"Mahamadou_Issagha_Diop_bgh\">
\t\t\t\t<span>Mahamadou Issagha Diop</span>
\t\t\t</div>
\t\t\t<img id=\"copyright_bgi\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/UimageUimage/copyright_bgi.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/UimageUimage/copyright_bgi.png 1x, Uimage/copyright_bgi@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t</div>
\t</div>
\t<div id=\"Page_User__bgj\">
\t\t<div id=\"menu_bgk\">
\t\t\t<svg class=\"Rectangle_1_bgm\">
\t\t\t\t<linearGradient id=\"Rectangle_1_bgm\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t<stop offset=\"0\" stop-color=\"#28343b\" stop-opacity=\"1\"></stop>
\t\t\t\t\t<stop offset=\"1\" stop-color=\"#004a95\" stop-opacity=\"1\"></stop>
\t\t\t\t</linearGradient>
\t\t\t\t<rect id=\"Rectangle_1_bgm\" rx=\"75\" ry=\"75\" x=\"0\" y=\"0\" width=\"1620\" height=\"144\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Logo_bgn\">
\t\t\t\t<span>Logo</span>
\t\t\t</div>
\t\t\t<img id=\"logo4-b_bgo\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Uimage/logo4-b_bgo.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Uimage/logo4-b_bgo.png 1x, Uimage/logo4-b_bgo@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t
\t\t\t<a class=\"collapse-item\" href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">\t
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Acceuil_bgp\">
\t\t\t\t<span>Acceuil</span>
\t\t\t</div>
\t\t\t</a>
\t\t\t<a class=\"collapse-item\" href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_liste");
        echo "\">
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Produit_bgq\">
\t\t\t\t<span>Produit</span>
\t\t\t</div>
\t\t\t</a>
\t\t\t<a class=\"collapse-item\" href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_liste");
        echo "\">
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Categorie_bgr\">
\t\t\t\t<span>Categorie</span>
\t\t\t</div>
\t\t\t</a>
\t\t\t";
        // line 140
        echo "\t\t\t<svg class=\"Rectangle_Profil_bgw\">
\t\t\t\t<rect id=\"Rectangle_Profil_bgw\" rx=\"20\" ry=\"20\" x=\"-5\" y=\"-10\" width=\"180\" height=\"100\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Profil_bgx\">
\t\t\t\t";
        // line 145
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "user", [], "any", false, false, false, 145)) {
            // line 146
            echo "\t\t\t\t<span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "user", [], "any", false, false, false, 146), "nom", [], "any", false, false, false, 146), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "user", [], "any", false, false, false, 146), "prenom", [], "any", false, false, false, 146), "html", null, true);
            echo "</span>
\t\t\t";
        }
        // line 148
        echo "\t\t\t</div>
\t\t\t<svg class=\"Rectangle_Log_out_bgy\">
\t\t\t\t<rect onclick=\"application.goToTargetView(event)\" id=\"Rectangle_Log_out_bgy\" rx=\"20\" ry=\"20\" x=\"0\" y=\"0\" width=\"199\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<a href=\"";
        // line 153
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
\t\t\t<div id=\"Log_out__bgz\">
\t\t\t\t<span>Log out</span><br/>
\t\t\t</div>
\t\t\t</a>
\t\t</div>
\t\t<div id=\"user_body_bg\">

\t\t\t<img id=\"icon-128x128-2_bg\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Uimage/icon-128x128-2_bg.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Uimage/icon-128x128-2_bg.png 1x, Uimage/icon-128x128-2_bg@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<div id=\"AppStock_bg\">
\t\t\t\t<span>App</span><span style=\"color:rgba(255,255,255,1);\">Stock</span>
\t\t\t</div>
            <div id=\"Rectangle_Form_bg\" class=\"row\">
\t\t\t\t\t<div class=\"container col-md-8\">    
\t\t\t\t\t<h1 class=\"text-white\">Register</h1>
\t\t\t\t\t\t<div class=\"card bg-transparent text-white\">
\t\t\t\t\t\t\t<div class=\"card-body bg-primary\">
\t\t\t\t\t\t\t\t";
        // line 171
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 171, $this->source); })()), 'form');
        echo "
\t\t\t\t\t\t\t\t<a href=\"";
        // line 172
        echo "\"><button class=\"btn btn-warning btn-lg m3-3 col-md-12 \">Users liste</button></a> 
\t\t\t\t\t\t\t</div><br><br><br><br>
\t\t\t\t\t\t\t<div class=\"card-footer\">LPGL</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>  
        \t</div>
\t\t</div>
\t\t<div id=\"footer_bho\">
\t\t\t<svg class=\"Rectangle_footer_bhp\">
\t\t\t\t<rect id=\"Rectangle_footer_bhp\" rx=\"45\" ry=\"45\" x=\"0\" y=\"0\" width=\"1620\" height=\"112\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<svg class=\"tel_bhq\" viewBox=\"970.087 7463.58 116.825 94.839\">
\t\t\t\t<path id=\"tel_bhq\" d=\"M 1068.492431640625 7463.580078125 C 1068.492431640625 7463.580078125 988.50048828125 7463.580078125 988.50048828125 7463.580078125 C 978.3338012695312 7463.580078125 970.08740234375 7470.2568359375 970.08740234375 7478.5244140625 C 970.08740234375 7478.5244140625 970.08740234375 7543.474609375 970.08740234375 7543.474609375 C 970.08740234375 7551.72998046875 978.3338012695312 7558.4189453125 988.50048828125 7558.4189453125 C 988.50048828125 7558.4189453125 1068.492431640625 7558.4189453125 1068.492431640625 7558.4189453125 C 1078.666137695312 7558.4189453125 1086.91259765625 7551.72998046875 1086.91259765625 7543.474609375 C 1086.91259765625 7543.474609375 1086.91259765625 7478.5244140625 1086.91259765625 7478.5244140625 C 1086.91259765625 7470.2568359375 1078.666137695312 7463.580078125 1068.492431640625 7463.580078125 Z M 1026.7373046875 7473.4765625 L 1028.017700195312 7489.83544921875 L 1023.366882324219 7490.92578125 L 1021.1298828125 7473.03759765625 L 1026.7373046875 7473.4765625 Z M 1046.7080078125 7547.533203125 C 1046.7080078125 7547.533203125 1026.30517578125 7547.1953125 1026.30517578125 7547.1953125 C 992.6038818359375 7517.9326171875 998.0960083007812 7483.89892578125 998.0960083007812 7483.89892578125 L 1013.446716308594 7473.18798828125 L 1016.470275878906 7473.18798828125 L 1018.930908203125 7491.90283203125 L 1012.212890625 7495.5234375 L 1029.391357421875 7532.06298828125 L 1036.125122070312 7530.32177734375 L 1049.038208007812 7545.9423828125 L 1046.7080078125 7547.533203125 Z M 1053.188354492188 7544.05126953125 L 1039.527221679688 7528.68115234375 L 1044.702514648438 7526.876953125 L 1056.613159179688 7541.27001953125 L 1053.188354492188 7544.05126953125 Z\">
\t\t\t\t</path>
\t\t\t</svg>
\t\t\t<img id=\"whatsapp_bhr\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Uimage/whatsapp_bhr.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Uimage/whatsapp_bhr.png 1x, Uimage/whatsapp_bhr@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<img id=\"messenger_bhs\" src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Uimage/messenger_bhs.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Uimage/messenger_bhs.png 1x, Uimage/messenger_bhs@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<img id=\"insta_bht\" src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Uimage/insta_bht.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Uimage/insta_bht.png 1x, Uimage/insta_bht@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<img id=\"youtube_bhu\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Uimage/youtube_bhu.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Uimage/youtube_bhu.png 1x, Uimage/youtube_bhu@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<div id=\"Mahamadou_Issagha_Diop_bhv\">
\t\t\t\t<span>Mahamadou Issagha Diop</span>
\t\t\t</div>
\t\t\t<img id=\"copyright_bhw\" src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Uimage/copyright_bhw.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Uimage/copyright_bhw.png 1x, Uimage/copyright_bhw@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t</div>
\t</div>
</div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "manage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 200,  332 => 195,  325 => 193,  318 => 191,  311 => 189,  292 => 172,  288 => 171,  273 => 161,  262 => 153,  255 => 148,  247 => 146,  245 => 145,  238 => 140,  230 => 121,  222 => 116,  214 => 111,  207 => 109,  185 => 92,  175 => 87,  168 => 85,  161 => 83,  154 => 81,  130 => 62,  106 => 43,  96 => 38,  87 => 34,  67 => 19,  60 => 14,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\"/>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>User</title>
<link rel=\"stylesheet\" type=\"text/css\" id=\"applicationStylesheet\" href=\"{{ asset('Prototype/Ucss/User.css') }}\"/>
<!-- CSS only -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
        <!-- JavaScript Bundle with Popper -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2\" crossorigin=\"anonymous\"></script>
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
<script id=\"applicationScript\" type=\"text/javascript\" src=\"Uscript/User.js\"></script>
</head>
<body>

<div id=\"User\">
\t<img id=\"Calque_1_bfr\" src=\"{{ asset('Prototype/Uimage/Calque_1_bfr.png') }}\" srcset=\"{{ asset('Prototype/Uimage/Calque_1_bfr.png 1x, Uimage/Calque_1_bfr@2x.png 2x') }}\">
\t\t
\t<div id=\"Page_Connexion__bfs\">
\t\t<div id=\"menu_bft\">
\t\t\t<svg class=\"Rectangle_1_bfv\">
\t\t\t\t<linearGradient id=\"Rectangle_1_bfv\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t<stop offset=\"0\" stop-color=\"#28343b\" stop-opacity=\"1\"></stop>
\t\t\t\t\t<stop offset=\"1\" stop-color=\"#004a95\" stop-opacity=\"1\"></stop>
\t\t\t\t</linearGradient>
\t\t\t\t<rect id=\"Rectangle_1_bfv\" rx=\"75\" ry=\"75\" x=\"0\" y=\"0\" width=\"1620\" height=\"144\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Bienvenue_sur_votre_AppStock_bfw\">
\t\t\t\t<span>Bienvenue sur votre </span><span style=\"color:rgba(159,5,30,1);\">App</span><span>Stock</span>
\t\t\t</div>
\t\t\t<img id=\"logo4-b_bfx\" src=\"{{ asset('Prototype/Uimage/logo4-b_bfx.png') }}\" srcset=\"{{ asset('Prototype/Uimage/logo4-b_bfx.png 1x, Uimage/logo4-b_bfx@2x.png 2x') }}\">
\t\t\t\t
\t\t</div>
\t\t<div id=\"Connexion_body_bfy\">
\t\t\t<img id=\"icon-128x128-2_bfz\" src=\"{{ asset('Prototype/Uimage/icon-128x128-2_bfz.png') }}\" srcset=\"{{ asset('Prototype/Uimage/icon-128x128-2_bfz.png 1x, Uimage/icon-128x128-2_bfz@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<div id=\"AppStock_bf\">
\t\t\t\t<span>App</span><span style=\"color:rgba(255,255,255,1);\">Stock</span>
\t\t\t</div>
\t\t\t<img id=\"Rectangle_Form_bf\" src=\"{{ asset('Prototype/Uimage/Rectangle_Form_bf.png') }}\" srcset=\"{{ asset('Prototype/Uimage/Rectangle_Form_bf.png 1x, Uimage/Rectangle_Form_bf@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<svg class=\"Rectangle_Email_bf\">
\t\t\t\t<rect id=\"Rectangle_Email_bf\" rx=\"25\" ry=\"25\" x=\"0\" y=\"0\" width=\"528\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Email_bf\">
\t\t\t\t<span>Email</span>
\t\t\t</div>
\t\t\t<div id=\"User_bf\">
\t\t\t\t<span>User</span>
\t\t\t</div>
\t\t\t<svg class=\"Rectangle_Pwd_bf\">
\t\t\t\t<rect id=\"Rectangle_Pwd_bf\" rx=\"25\" ry=\"25\" x=\"0\" y=\"0\" width=\"528\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Password_bf\">
\t\t\t\t<span>Password</span>
\t\t\t</div>
\t\t\t<img id=\"password__icon_bf\" src=\"{{ asset('Prototype/UimageUimage/password__icon_bf.png') }}\" srcset=\"{{ asset('Prototype/UimageUimage/password__icon_bf.png 1x, Uimage/password__icon_bf@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<svg class=\"Rectangle_Connexion_bf\">
\t\t\t\t<rect id=\"Rectangle_Connexion_bf\" rx=\"25\" ry=\"25\" x=\"0\" y=\"0\" width=\"269\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Connexion_bf\">
\t\t\t\t<span>Connexion</span>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"footer_bga\">
\t\t\t<svg class=\"Rectangle_footer_bgb\">
\t\t\t\t<rect id=\"Rectangle_footer_bgb\" rx=\"45\" ry=\"45\" x=\"0\" y=\"0\" width=\"1620\" height=\"112\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<svg class=\"tel_bgc\" viewBox=\"970.087 6385.58 116.825 94.839\">
\t\t\t\t<path id=\"tel_bgc\" d=\"M 1068.492431640625 6385.580078125 C 1068.492431640625 6385.580078125 988.50048828125 6385.580078125 988.50048828125 6385.580078125 C 978.3338012695312 6385.580078125 970.08740234375 6392.2568359375 970.08740234375 6400.52490234375 C 970.08740234375 6400.52490234375 970.08740234375 6465.474609375 970.08740234375 6465.474609375 C 970.08740234375 6473.7294921875 978.3338012695312 6480.4189453125 988.50048828125 6480.4189453125 C 988.50048828125 6480.4189453125 1068.492431640625 6480.4189453125 1068.492431640625 6480.4189453125 C 1078.666137695312 6480.4189453125 1086.91259765625 6473.7294921875 1086.91259765625 6465.474609375 C 1086.91259765625 6465.474609375 1086.91259765625 6400.52490234375 1086.91259765625 6400.52490234375 C 1086.91259765625 6392.2568359375 1078.666137695312 6385.580078125 1068.492431640625 6385.580078125 Z M 1026.7373046875 6395.47607421875 L 1028.017700195312 6411.83544921875 L 1023.366882324219 6412.92578125 L 1021.1298828125 6395.03759765625 L 1026.7373046875 6395.47607421875 Z M 1046.7080078125 6469.533203125 C 1046.7080078125 6469.533203125 1026.30517578125 6469.1953125 1026.30517578125 6469.1953125 C 992.6038818359375 6439.93310546875 998.0960083007812 6405.89892578125 998.0960083007812 6405.89892578125 L 1013.446716308594 6395.18798828125 L 1016.470275878906 6395.18798828125 L 1018.930908203125 6413.90234375 L 1012.212890625 6417.52294921875 L 1029.391357421875 6454.0625 L 1036.125122070312 6452.32177734375 L 1049.038208007812 6467.9423828125 L 1046.7080078125 6469.533203125 Z M 1053.188354492188 6466.05126953125 L 1039.527221679688 6450.68115234375 L 1044.702514648438 6448.87646484375 L 1056.613159179688 6463.2705078125 L 1053.188354492188 6466.05126953125 Z\">
\t\t\t\t</path>
\t\t\t</svg>
\t\t\t<img id=\"whatsapp_bgd\" src=\"{{ asset('Prototype/UimageUimage/whatsapp_bgd.png') }}\" srcset=\"{{ asset('Prototype/UimageUimage/whatsapp_bgd.png 1x, Uimage/whatsapp_bgd@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"messenger_bge\" src=\"{{ asset('Prototype/UimageUimage/messenger_bge.png') }}\" srcset=\"{{ asset('Prototype/UimageUimage/messenger_bge.png 1x, Uimage/messenger_bge@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"insta_bgf\" src=\"{{ asset('Prototype/UimageUimage/insta_bgf.png') }}\" srcset=\"{{ asset('Prototype/UimageUimage/insta_bgf.png 1x, Uimage/insta_bgf@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"youtube_bgg\" src=\"{{ asset('Prototype/UimageUimage/youtube_bgg.png') }}\" srcset=\"{{ asset('Prototype/UimageUimage/youtube_bgg.png 1x, Uimage/youtube_bgg@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<div id=\"Mahamadou_Issagha_Diop_bgh\">
\t\t\t\t<span>Mahamadou Issagha Diop</span>
\t\t\t</div>
\t\t\t<img id=\"copyright_bgi\" src=\"{{ asset('Prototype/UimageUimage/copyright_bgi.png') }}\" srcset=\"{{ asset('Prototype/UimageUimage/copyright_bgi.png 1x, Uimage/copyright_bgi@2x.png 2x') }}\">
\t\t\t\t
\t\t</div>
\t</div>
\t<div id=\"Page_User__bgj\">
\t\t<div id=\"menu_bgk\">
\t\t\t<svg class=\"Rectangle_1_bgm\">
\t\t\t\t<linearGradient id=\"Rectangle_1_bgm\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t<stop offset=\"0\" stop-color=\"#28343b\" stop-opacity=\"1\"></stop>
\t\t\t\t\t<stop offset=\"1\" stop-color=\"#004a95\" stop-opacity=\"1\"></stop>
\t\t\t\t</linearGradient>
\t\t\t\t<rect id=\"Rectangle_1_bgm\" rx=\"75\" ry=\"75\" x=\"0\" y=\"0\" width=\"1620\" height=\"144\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Logo_bgn\">
\t\t\t\t<span>Logo</span>
\t\t\t</div>
\t\t\t<img id=\"logo4-b_bgo\" src=\"{{ asset('Prototype/Uimage/logo4-b_bgo.png') }}\" srcset=\"{{ asset('Prototype/Uimage/logo4-b_bgo.png 1x, Uimage/logo4-b_bgo@2x.png 2x') }}\">
\t\t\t
\t\t\t<a class=\"collapse-item\" href=\"{{ path('accueil')}}\">\t
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Acceuil_bgp\">
\t\t\t\t<span>Acceuil</span>
\t\t\t</div>
\t\t\t</a>
\t\t\t<a class=\"collapse-item\" href=\"{{ path('produit_liste')}}\">
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Produit_bgq\">
\t\t\t\t<span>Produit</span>
\t\t\t</div>
\t\t\t</a>
\t\t\t<a class=\"collapse-item\" href=\"{{ path('categorie_liste')}}\">
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Categorie_bgr\">
\t\t\t\t<span>Categorie</span>
\t\t\t</div>
\t\t\t</a>
\t\t\t{# <svg class=\"Rectangle_login_bgs\">
\t\t\t\t<rect id=\"Rectangle_login_bgs\" rx=\"20\" ry=\"20\" x=\"0\" y=\"0\" width=\"157\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Login_bgt\">
\t\t\t\t<span>Login</span>
\t\t\t</div>
\t\t\t<svg class=\"Rectangle_Sing_in_bgu\">
\t\t\t\t<rect id=\"Rectangle_Sing_in_bgu\" rx=\"20\" ry=\"20\" x=\"0\" y=\"0\" width=\"199\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Sign_in_bgv\">
\t\t\t\t<span>Sign in</span>
\t\t\t</div> #}
\t\t\t<svg class=\"Rectangle_Profil_bgw\">
\t\t\t\t<rect id=\"Rectangle_Profil_bgw\" rx=\"20\" ry=\"20\" x=\"-5\" y=\"-10\" width=\"180\" height=\"100\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Profil_bgx\">
\t\t\t\t{% if app.user %}
\t\t\t\t<span>{{ app.user.nom }}<br>{{ app.user.prenom }}</span>
\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<svg class=\"Rectangle_Log_out_bgy\">
\t\t\t\t<rect onclick=\"application.goToTargetView(event)\" id=\"Rectangle_Log_out_bgy\" rx=\"20\" ry=\"20\" x=\"0\" y=\"0\" width=\"199\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<a href=\"{{path('app_logout')}}\">
\t\t\t<div id=\"Log_out__bgz\">
\t\t\t\t<span>Log out</span><br/>
\t\t\t</div>
\t\t\t</a>
\t\t</div>
\t\t<div id=\"user_body_bg\">

\t\t\t<img id=\"icon-128x128-2_bg\" src=\"{{ asset('Prototype/Uimage/icon-128x128-2_bg.png') }}\" srcset=\"{{ asset('Prototype/Uimage/icon-128x128-2_bg.png 1x, Uimage/icon-128x128-2_bg@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<div id=\"AppStock_bg\">
\t\t\t\t<span>App</span><span style=\"color:rgba(255,255,255,1);\">Stock</span>
\t\t\t</div>
            <div id=\"Rectangle_Form_bg\" class=\"row\">
\t\t\t\t\t<div class=\"container col-md-8\">    
\t\t\t\t\t<h1 class=\"text-white\">Register</h1>
\t\t\t\t\t\t<div class=\"card bg-transparent text-white\">
\t\t\t\t\t\t\t<div class=\"card-body bg-primary\">
\t\t\t\t\t\t\t\t{{ form(registrationForm) }}
\t\t\t\t\t\t\t\t<a href=\"{# {{path('app_logout')}}#}\"><button class=\"btn btn-warning btn-lg m3-3 col-md-12 \">Users liste</button></a> 
\t\t\t\t\t\t\t</div><br><br><br><br>
\t\t\t\t\t\t\t<div class=\"card-footer\">LPGL</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>  
        \t</div>
\t\t</div>
\t\t<div id=\"footer_bho\">
\t\t\t<svg class=\"Rectangle_footer_bhp\">
\t\t\t\t<rect id=\"Rectangle_footer_bhp\" rx=\"45\" ry=\"45\" x=\"0\" y=\"0\" width=\"1620\" height=\"112\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<svg class=\"tel_bhq\" viewBox=\"970.087 7463.58 116.825 94.839\">
\t\t\t\t<path id=\"tel_bhq\" d=\"M 1068.492431640625 7463.580078125 C 1068.492431640625 7463.580078125 988.50048828125 7463.580078125 988.50048828125 7463.580078125 C 978.3338012695312 7463.580078125 970.08740234375 7470.2568359375 970.08740234375 7478.5244140625 C 970.08740234375 7478.5244140625 970.08740234375 7543.474609375 970.08740234375 7543.474609375 C 970.08740234375 7551.72998046875 978.3338012695312 7558.4189453125 988.50048828125 7558.4189453125 C 988.50048828125 7558.4189453125 1068.492431640625 7558.4189453125 1068.492431640625 7558.4189453125 C 1078.666137695312 7558.4189453125 1086.91259765625 7551.72998046875 1086.91259765625 7543.474609375 C 1086.91259765625 7543.474609375 1086.91259765625 7478.5244140625 1086.91259765625 7478.5244140625 C 1086.91259765625 7470.2568359375 1078.666137695312 7463.580078125 1068.492431640625 7463.580078125 Z M 1026.7373046875 7473.4765625 L 1028.017700195312 7489.83544921875 L 1023.366882324219 7490.92578125 L 1021.1298828125 7473.03759765625 L 1026.7373046875 7473.4765625 Z M 1046.7080078125 7547.533203125 C 1046.7080078125 7547.533203125 1026.30517578125 7547.1953125 1026.30517578125 7547.1953125 C 992.6038818359375 7517.9326171875 998.0960083007812 7483.89892578125 998.0960083007812 7483.89892578125 L 1013.446716308594 7473.18798828125 L 1016.470275878906 7473.18798828125 L 1018.930908203125 7491.90283203125 L 1012.212890625 7495.5234375 L 1029.391357421875 7532.06298828125 L 1036.125122070312 7530.32177734375 L 1049.038208007812 7545.9423828125 L 1046.7080078125 7547.533203125 Z M 1053.188354492188 7544.05126953125 L 1039.527221679688 7528.68115234375 L 1044.702514648438 7526.876953125 L 1056.613159179688 7541.27001953125 L 1053.188354492188 7544.05126953125 Z\">
\t\t\t\t</path>
\t\t\t</svg>
\t\t\t<img id=\"whatsapp_bhr\" src=\"{{ asset('Prototype/Uimage/whatsapp_bhr.png') }}\" srcset=\"{{ asset('Prototype/Uimage/whatsapp_bhr.png 1x, Uimage/whatsapp_bhr@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"messenger_bhs\" src=\"{{ asset('Prototype/Uimage/messenger_bhs.png') }}\" srcset=\"{{ asset('Prototype/Uimage/messenger_bhs.png 1x, Uimage/messenger_bhs@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"insta_bht\" src=\"{{ asset('Prototype/Uimage/insta_bht.png') }}\" srcset=\"{{ asset('Prototype/Uimage/insta_bht.png 1x, Uimage/insta_bht@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"youtube_bhu\" src=\"{{ asset('Prototype/Uimage/youtube_bhu.png') }}\" srcset=\"{{ asset('Prototype/Uimage/youtube_bhu.png 1x, Uimage/youtube_bhu@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<div id=\"Mahamadou_Issagha_Diop_bhv\">
\t\t\t\t<span>Mahamadou Issagha Diop</span>
\t\t\t</div>
\t\t\t<img id=\"copyright_bhw\" src=\"{{ asset('Prototype/Uimage/copyright_bhw.png') }}\" srcset=\"{{ asset('Prototype/Uimage/copyright_bhw.png 1x, Uimage/copyright_bhw@2x.png 2x') }}\">
\t\t\t\t
\t\t</div>
\t</div>
</div>
</body>
</html>", "manage/index.html.twig", "C:\\xampp\\htdocs\\semestre2\\Symfony\\appstocksymfony\\templates\\manage\\index.html.twig");
    }
}
