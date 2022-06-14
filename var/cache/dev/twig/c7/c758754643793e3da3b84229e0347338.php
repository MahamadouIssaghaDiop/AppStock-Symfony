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

/* accueil.html.twig */
class __TwigTemplate_a5aec199ff755c50c79a903da794748c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\"/>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>Accueil</title>
<link rel=\"stylesheet\" type=\"text/css\" id=\"applicationStylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Acss/Accueil.css"), "html", null, true);
        echo "\"/>
<script id=\"applicationScript\" type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Ascript/Accueil.js"), "html", null, true);
        echo "\"></script>
</head>
<body>
<div id=\"Accueil_\">
\t<img id=\"Calque_1_e\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Aimage/Calque_1_e.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Aimage/Calque_1_e.png 1x, Aimage/Calque_1_e@2x.png 2x"), "html", null, true);
        echo "\">
\t\t
\t<div id=\"Page_accueil_\">
\t\t<div id=\"menu_fb\">
\t\t\t<svg class=\"Rectangle_1_fd\">
\t\t\t\t<linearGradient id=\"Rectangle_1_fd\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t<stop offset=\"0\" stop-color=\"#28343b\" stop-opacity=\"1\"></stop>
\t\t\t\t\t<stop offset=\"1\" stop-color=\"#004a95\" stop-opacity=\"1\"></stop>
\t\t\t\t</linearGradient>
\t\t\t\t<rect id=\"Rectangle_1_fd\" rx=\"75\" ry=\"75\" x=\"0\" y=\"0\" width=\"1620\" height=\"144\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Logo_fe\">
\t\t\t\t<span>Logo</span>
\t\t\t</div>
\t\t\t<img id=\"logo4-b_ff\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Aimage/logo4-b_ff.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Aimage/logo4-b_ff.png 1x, Aimage/logo4-b_ff@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t
\t\t\t<a class=\"collapse-item\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">\t
\t\t\t<div id=\"Acceuil_fg\">
\t\t\t\t<span>Acceuil</span>
\t\t\t</div>
\t\t\t</a>
\t\t";
        // line 35
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_VENDEUR")) {
            // line 36
            echo "\t\t\t<a class=\"collapse-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_liste");
            echo "\">
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Produit_fh\">
\t\t\t\t<span>Gestion Vente</span>
\t\t\t</div>
\t\t\t</a>
\t\t";
        }
        // line 42
        echo "\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GESTION_STOCK")) {
            // line 43
            echo "\t\t\t";
            // line 44
            echo "\t\t\t<a class=\"collapse-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_liste");
            echo "\">
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Produit_fh\">
\t\t\t\t<span>Produit</span>
\t\t\t</div>
\t\t\t</a>

\t\t\t<a class=\"collapse-item\" href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_liste");
            echo "\">
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Categorie_fi\">
\t\t\t\t<span>Categorie</span>
\t\t\t</div>
\t\t\t</a>
\t\t";
        }
        // line 55
        echo "\t\t
\t\t\t<svg class=\"Rectangle_Profil_fn\">
\t\t\t\t<rect id=\"Rectangle_Profil_fn\" rx=\"20\" ry=\"20\" x=\"-5\" y=\"-10\" width=\"180\" height=\"100\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Profil_fo\">
\t\t\t\t";
        // line 61
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61)) {
            // line 62
            echo "\t\t\t\t<span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "nom", [], "any", false, false, false, 62), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "prenom", [], "any", false, false, false, 62), "html", null, true);
            echo "</span>
\t\t\t";
        }
        // line 64
        echo "\t\t\t</div>
\t\t\t<svg class=\"Rectangle_Log_out_fp\">
\t\t\t\t<rect onclick=\"application.goToTargetView(event)\" id=\"Rectangle_Log_out_fp\" rx=\"20\" ry=\"20\" x=\"0\" y=\"0\" width=\"199\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t";
        // line 70
        echo "\t\t\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
\t\t\t<div id=\"Log_out__fq\">
\t\t\t\t<span>Logout</span><br/>
\t\t\t</div>
\t\t\t</a>
\t\t</div>
\t\t<div id=\"Accueil_body\">
\t\t\t<img id=\"icon-128x128-2_fs\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Aimage/icon-128x128-2_fs.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Aimage/icon-128x128-2_fs.png 1x, Aimage/icon-128x128-2_fs@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<div id=\"AppStock_ft\">
\t\t\t\t<span>App</span><span style=\"color:rgba(255,255,255,1);\">Stock</span>
\t\t\t</div>
\t\t\t";
        // line 82
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GESTION_STOCK")) {
            // line 83
            echo "\t\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Manage_U_fu\">
\t\t\t\t\t<svg class=\"Rectangle_517_fv\">
\t\t\t\t\t\t<rect id=\"Rectangle_517_fv\" rx=\"20\" ry=\"20\" x=\"0\" y=\"0\" width=\"410\" height=\"57\">
\t\t\t\t\t\t</rect>
\t\t\t\t\t</svg>
\t\t\t\t\t<a href=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manage_liste");
            echo "\">
\t\t\t\t\t<div id=\"Manage_users_fw\">
\t\t\t\t\t\t<span>Manage users</span>
\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"User_fx\">
\t\t\t\t\t\t<span><i class=\"fa-duotone fa-user\"></i></span>
\t\t\t\t\t\t<i class=\"fa-regular fa-user\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 99
        echo "\t\t</div>
\t\t<div id=\"footer_fy\">
\t\t\t<svg class=\"Rectangle_footer_fz\">
\t\t\t\t<rect id=\"Rectangle_footer_fz\" rx=\"45\" ry=\"45\" x=\"0\" y=\"0\" width=\"1620\" height=\"112\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<svg class=\"tel_f\" viewBox=\"970.087 977.08 116.825 94.839\">
\t\t\t\t<path id=\"tel_f\" d=\"M 1068.492431640625 977.0800170898438 C 1068.492431640625 977.0800170898438 988.50048828125 977.0800170898438 988.50048828125 977.0800170898438 C 978.3338012695312 977.0800170898438 970.08740234375 983.7568969726562 970.08740234375 992.0247802734375 C 970.08740234375 992.0247802734375 970.08740234375 1056.974853515625 970.08740234375 1056.974853515625 C 970.08740234375 1065.229736328125 978.3338012695312 1071.918823242188 988.50048828125 1071.918823242188 C 988.50048828125 1071.918823242188 1068.492431640625 1071.918823242188 1068.492431640625 1071.918823242188 C 1078.666137695312 1071.918823242188 1086.91259765625 1065.229736328125 1086.91259765625 1056.974853515625 C 1086.91259765625 1056.974853515625 1086.91259765625 992.0247802734375 1086.91259765625 992.0247802734375 C 1086.91259765625 983.7568969726562 1078.666137695312 977.0800170898438 1068.492431640625 977.0800170898438 Z M 1026.7373046875 986.976318359375 L 1028.017700195312 1003.335510253906 L 1023.366882324219 1004.42578125 L 1021.1298828125 986.5377807617188 L 1026.7373046875 986.976318359375 Z M 1046.7080078125 1061.033081054688 C 1046.7080078125 1061.033081054688 1026.30517578125 1060.695556640625 1026.30517578125 1060.695556640625 C 992.6038818359375 1031.433227539062 998.0960083007812 997.398681640625 998.0960083007812 997.398681640625 L 1013.446716308594 986.6879272460938 L 1016.470275878906 986.6879272460938 L 1018.930908203125 1005.402526855469 L 1012.212890625 1009.023071289062 L 1029.391357421875 1045.562744140625 L 1036.125122070312 1043.821655273438 L 1049.038208007812 1059.442504882812 L 1046.7080078125 1061.033081054688 Z M 1053.188354492188 1057.55126953125 L 1039.527221679688 1042.181030273438 L 1044.702514648438 1040.376831054688 L 1056.613159179688 1054.769897460938 L 1053.188354492188 1057.55126953125 Z\">
\t\t\t\t</path>
\t\t\t</svg>
\t\t\t<img id=\"whatsapp_f\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Aimage/whatsapp_f.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Aimage/whatsapp_f.png 1x, Aimage/whatsapp_f@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<img id=\"messenger_f\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Aimage/messenger_f.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Aimage/messenger_f.png 1x, Aimage/messenger_f@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<img id=\"insta_f\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Aimage/insta_f.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Aimage/insta_f.png 1x, Aimage/insta_f@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<img id=\"youtube_f\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Aimage/youtube_f.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Aimage/youtube_f.png 1x, Aimage/youtube_f@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<div id=\"Mahamadou_Issagha_Diop_f\">
\t\t\t\t<span>Mahamadou Issagha Diop</span>
\t\t\t</div>
\t\t\t<img id=\"copyright_f\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Aimage/copyright_f.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Aimage/copyright_f.png 1x, Aimage/copyright_f@2x.png 2x"), "html", null, true);
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
        return "accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 120,  236 => 115,  229 => 113,  222 => 111,  215 => 109,  203 => 99,  189 => 88,  182 => 83,  180 => 82,  170 => 77,  159 => 70,  152 => 64,  144 => 62,  142 => 61,  134 => 55,  125 => 50,  115 => 44,  113 => 43,  110 => 42,  100 => 36,  98 => 35,  90 => 30,  83 => 28,  63 => 13,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\"/>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>Accueil</title>
<link rel=\"stylesheet\" type=\"text/css\" id=\"applicationStylesheet\" href=\"{{ asset('Prototype/Acss/Accueil.css') }}\"/>
<script id=\"applicationScript\" type=\"text/javascript\" src=\"{{ asset('Prototype/Ascript/Accueil.js') }}\"></script>
</head>
<body>
<div id=\"Accueil_\">
\t<img id=\"Calque_1_e\" src=\"{{ asset('Prototype/Aimage/Calque_1_e.png') }}\" srcset=\"{{ asset('Prototype/Aimage/Calque_1_e.png 1x, Aimage/Calque_1_e@2x.png 2x') }}\">
\t\t
\t<div id=\"Page_accueil_\">
\t\t<div id=\"menu_fb\">
\t\t\t<svg class=\"Rectangle_1_fd\">
\t\t\t\t<linearGradient id=\"Rectangle_1_fd\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t<stop offset=\"0\" stop-color=\"#28343b\" stop-opacity=\"1\"></stop>
\t\t\t\t\t<stop offset=\"1\" stop-color=\"#004a95\" stop-opacity=\"1\"></stop>
\t\t\t\t</linearGradient>
\t\t\t\t<rect id=\"Rectangle_1_fd\" rx=\"75\" ry=\"75\" x=\"0\" y=\"0\" width=\"1620\" height=\"144\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Logo_fe\">
\t\t\t\t<span>Logo</span>
\t\t\t</div>
\t\t\t<img id=\"logo4-b_ff\" src=\"{{ asset('Prototype/Aimage/logo4-b_ff.png') }}\" srcset=\"{{ asset('Prototype/Aimage/logo4-b_ff.png 1x, Aimage/logo4-b_ff@2x.png 2x') }}\">
\t\t\t
\t\t\t<a class=\"collapse-item\" href=\"{{ path('accueil')}}\">\t
\t\t\t<div id=\"Acceuil_fg\">
\t\t\t\t<span>Acceuil</span>
\t\t\t</div>
\t\t\t</a>
\t\t{% if is_granted('ROLE_VENDEUR') %}
\t\t\t<a class=\"collapse-item\" href=\"{{ path('sortie_liste')}}\">
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Produit_fh\">
\t\t\t\t<span>Gestion Vente</span>
\t\t\t</div>
\t\t\t</a>
\t\t{% endif %}
\t\t{% if is_granted('ROLE_GESTION_STOCK') %}
\t\t\t{# Gestion de Produits #}
\t\t\t<a class=\"collapse-item\" href=\"{{ path('produit_liste')}}\">
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Produit_fh\">
\t\t\t\t<span>Produit</span>
\t\t\t</div>
\t\t\t</a>

\t\t\t<a class=\"collapse-item\" href=\"{{ path('categorie_liste')}}\">
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Categorie_fi\">
\t\t\t\t<span>Categorie</span>
\t\t\t</div>
\t\t\t</a>
\t\t{% endif %}\t\t
\t\t\t<svg class=\"Rectangle_Profil_fn\">
\t\t\t\t<rect id=\"Rectangle_Profil_fn\" rx=\"20\" ry=\"20\" x=\"-5\" y=\"-10\" width=\"180\" height=\"100\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Profil_fo\">
\t\t\t\t{% if app.user %}
\t\t\t\t<span>{{ app.user.nom }}<br>{{ app.user.prenom }}</span>
\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<svg class=\"Rectangle_Log_out_fp\">
\t\t\t\t<rect onclick=\"application.goToTargetView(event)\" id=\"Rectangle_Log_out_fp\" rx=\"20\" ry=\"20\" x=\"0\" y=\"0\" width=\"199\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t{# button Logout #}
\t\t\t<a href=\"{{path('app_logout')}}\">
\t\t\t<div id=\"Log_out__fq\">
\t\t\t\t<span>Logout</span><br/>
\t\t\t</div>
\t\t\t</a>
\t\t</div>
\t\t<div id=\"Accueil_body\">
\t\t\t<img id=\"icon-128x128-2_fs\" src=\"{{ asset('Prototype/Aimage/icon-128x128-2_fs.png') }}\" srcset=\"{{ asset('Prototype/Aimage/icon-128x128-2_fs.png 1x, Aimage/icon-128x128-2_fs@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<div id=\"AppStock_ft\">
\t\t\t\t<span>App</span><span style=\"color:rgba(255,255,255,1);\">Stock</span>
\t\t\t</div>
\t\t\t{% if is_granted('ROLE_GESTION_STOCK') %}
\t\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Manage_U_fu\">
\t\t\t\t\t<svg class=\"Rectangle_517_fv\">
\t\t\t\t\t\t<rect id=\"Rectangle_517_fv\" rx=\"20\" ry=\"20\" x=\"0\" y=\"0\" width=\"410\" height=\"57\">
\t\t\t\t\t\t</rect>
\t\t\t\t\t</svg>
\t\t\t\t\t<a href=\"{{path('manage_liste')}}\">
\t\t\t\t\t<div id=\"Manage_users_fw\">
\t\t\t\t\t\t<span>Manage users</span>
\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"User_fx\">
\t\t\t\t\t\t<span><i class=\"fa-duotone fa-user\"></i></span>
\t\t\t\t\t\t<i class=\"fa-regular fa-user\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>
\t\t<div id=\"footer_fy\">
\t\t\t<svg class=\"Rectangle_footer_fz\">
\t\t\t\t<rect id=\"Rectangle_footer_fz\" rx=\"45\" ry=\"45\" x=\"0\" y=\"0\" width=\"1620\" height=\"112\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<svg class=\"tel_f\" viewBox=\"970.087 977.08 116.825 94.839\">
\t\t\t\t<path id=\"tel_f\" d=\"M 1068.492431640625 977.0800170898438 C 1068.492431640625 977.0800170898438 988.50048828125 977.0800170898438 988.50048828125 977.0800170898438 C 978.3338012695312 977.0800170898438 970.08740234375 983.7568969726562 970.08740234375 992.0247802734375 C 970.08740234375 992.0247802734375 970.08740234375 1056.974853515625 970.08740234375 1056.974853515625 C 970.08740234375 1065.229736328125 978.3338012695312 1071.918823242188 988.50048828125 1071.918823242188 C 988.50048828125 1071.918823242188 1068.492431640625 1071.918823242188 1068.492431640625 1071.918823242188 C 1078.666137695312 1071.918823242188 1086.91259765625 1065.229736328125 1086.91259765625 1056.974853515625 C 1086.91259765625 1056.974853515625 1086.91259765625 992.0247802734375 1086.91259765625 992.0247802734375 C 1086.91259765625 983.7568969726562 1078.666137695312 977.0800170898438 1068.492431640625 977.0800170898438 Z M 1026.7373046875 986.976318359375 L 1028.017700195312 1003.335510253906 L 1023.366882324219 1004.42578125 L 1021.1298828125 986.5377807617188 L 1026.7373046875 986.976318359375 Z M 1046.7080078125 1061.033081054688 C 1046.7080078125 1061.033081054688 1026.30517578125 1060.695556640625 1026.30517578125 1060.695556640625 C 992.6038818359375 1031.433227539062 998.0960083007812 997.398681640625 998.0960083007812 997.398681640625 L 1013.446716308594 986.6879272460938 L 1016.470275878906 986.6879272460938 L 1018.930908203125 1005.402526855469 L 1012.212890625 1009.023071289062 L 1029.391357421875 1045.562744140625 L 1036.125122070312 1043.821655273438 L 1049.038208007812 1059.442504882812 L 1046.7080078125 1061.033081054688 Z M 1053.188354492188 1057.55126953125 L 1039.527221679688 1042.181030273438 L 1044.702514648438 1040.376831054688 L 1056.613159179688 1054.769897460938 L 1053.188354492188 1057.55126953125 Z\">
\t\t\t\t</path>
\t\t\t</svg>
\t\t\t<img id=\"whatsapp_f\" src=\"{{ asset('Prototype/Aimage/whatsapp_f.png') }}\" srcset=\"{{ asset('Prototype/Aimage/whatsapp_f.png 1x, Aimage/whatsapp_f@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"messenger_f\" src=\"{{ asset('Prototype/Aimage/messenger_f.png') }}\" srcset=\"{{ asset('Prototype/Aimage/messenger_f.png 1x, Aimage/messenger_f@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"insta_f\" src=\"{{ asset('Prototype/Aimage/insta_f.png') }}\" srcset=\"{{ asset('Prototype/Aimage/insta_f.png 1x, Aimage/insta_f@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"youtube_f\" src=\"{{ asset('Prototype/Aimage/youtube_f.png') }}\" srcset=\"{{ asset('Prototype/Aimage/youtube_f.png 1x, Aimage/youtube_f@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<div id=\"Mahamadou_Issagha_Diop_f\">
\t\t\t\t<span>Mahamadou Issagha Diop</span>
\t\t\t</div>
\t\t\t<img id=\"copyright_f\" src=\"{{ asset('Prototype/Aimage/copyright_f.png') }}\" srcset=\"{{ asset('Prototype/Aimage/copyright_f.png 1x, Aimage/copyright_f@2x.png 2x') }}\">
\t\t\t\t
\t\t</div>
\t</div>
</div>
</body>
</html>", "accueil.html.twig", "C:\\xampp\\htdocs\\semestre2\\Symfony\\appstocksymfony\\templates\\accueil.html.twig");
    }
}
