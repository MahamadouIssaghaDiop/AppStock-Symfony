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

/* categorie/categorie.html.twig */
class __TwigTemplate_f4882b2e8fc42fc42811af5a92e101f7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/categorie.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/categorie.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\"/>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>Categorie</title>
<link rel=\"stylesheet\" type=\"text/css\" id=\"applicationStylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Ccss/Categorie.css"), "html", null, true);
        echo "\"/>
<link href=\"https://fonts.googleapis.com/css?family=Quicksand&display=swap\" rel=\"stylesheet\">
<!-- Custom fonts for this template-->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template/sb_bootstrap/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template/sb_bootstrap/css/sb-admin-2.min.css"), "html", null, true);
        echo "\"rel=\"stylesheet\">
<script id=\"applicationScript\" type=\"text/javascript\" src=\"Cscript/Categorie.js\"></script>
</head>
<body>
<div id=\"Categorie\">
\t<img id=\"Calque_1_p\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Cimage/Calque_1_p.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Cimage/Calque_1_p.png 1x, Cimage/Calque_1_p@2x.png 2x"), "html", null, true);
        echo "\">
\t\t
\t<div id=\"Page_categorie_p\">
\t\t<div id=\"menu_p\">
\t\t\t<svg class=\"Rectangle_1_qb\">
\t\t\t\t<linearGradient id=\"Rectangle_1_qb\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t<stop offset=\"0\" stop-color=\"#28343b\" stop-opacity=\"1\"></stop>
\t\t\t\t\t<stop offset=\"1\" stop-color=\"#004a95\" stop-opacity=\"1\"></stop>
\t\t\t\t</linearGradient>
\t\t\t\t<rect id=\"Rectangle_1_qb\" rx=\"75\" ry=\"75\" x=\"0\" y=\"0\" width=\"1620\" height=\"144\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Logo_qc\">
\t\t\t\t<span>Logo</span>
\t\t\t</div>
\t\t\t<img id=\"logo4-b_qd\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Cimage/logo4-b_qd.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Cimage/logo4-b_qd.png 1x, Cimage/logo4-b_qd@2x.png 2x"), "html", null, true);
        echo "\">

\t\t\t<a class=\"collapse-item\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">\t\t
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Acceuil_qe\">
\t\t\t\t<span>Acceuil</span>
\t\t\t</div>
\t\t\t</a>

\t\t\t<a class=\"collapse-item\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_liste");
        echo "\">
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Produit_qf\">
\t\t\t\t<span>Produit</span>
\t\t\t</div>
\t\t\t</a>

\t\t\t<a class=\"collapse-item\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_liste");
        echo "\">
\t\t\t<div id=\"Categorie_qg\">
\t\t\t\t<span>Categorie</span>
\t\t\t</div>
\t\t\t</a>\t

\t\t\t<svg class=\"Rectangle_Profil_ql\">
\t\t\t\t<rect id=\"Rectangle_Profil_ql\" rx=\"20\" ry=\"20\" x=\"-5\" y=\"-10\" width=\"180\" height=\"100\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Profil_qm\">
\t\t\t";
        // line 62
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62)) {
            // line 63
            echo "\t\t\t\t<span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "nom", [], "any", false, false, false, 63), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "prenom", [], "any", false, false, false, 63), "html", null, true);
            echo "</span>
\t\t\t";
        }
        // line 65
        echo "\t\t\t</div>
\t\t\t<svg class=\"Rectangle_Log_out_qn\">
\t\t\t\t<rect onclick=\"application.goToTargetView(event)\" id=\"Rectangle_Log_out_qn\" rx=\"20\" ry=\"20\" x=\"0\" y=\"0\" width=\"199\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
\t\t\t<div id=\"Log_out__qo\">
\t\t\t\t<span>Log out</span><br/>
\t\t\t</div>
\t\t\t</a>
\t\t</div>
\t\t<div id=\"Categorie_body_qp\">
\t\t\t<div id=\"Screenshot_2022-05-31_132950_qq\">
\t\t\t\t<img id=\"Screenshot_2022-05-31_132950_qr\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Cimage/Screenshot_2022-05-31_132950_qr.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Cimage/Screenshot_2022-05-31_132950_qr.png 1x, Cimage/Screenshot_2022-05-31_132950_qr@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t\t
\t\t\t\t<img id=\"Clip_qs\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Cimage/Clip_qs.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Cimage/Clip_qs.png 1x, Cimage/Clip_qs@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t\t
\t\t\t\t</svg>
\t\t\t</div>
\t\t\t<div id=\"sous_menu_qt\">
\t\t\t\t<svg class=\"Rectanglegauche_sous_menu_qv\">
\t\t\t\t\t<linearGradient id=\"Rectanglegauche_sous_menu_qv\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#192530\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#1b606f\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectanglegauche_sous_menu_qv\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"254\" height=\"659\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<svg class=\"Rectangle_entree_qw\">
\t\t\t\t\t<rect id=\"Rectangle_entree_qw\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"228\" height=\"53\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Forme_entree_qx\">
\t\t\t\t\t<svg class=\"Forme_entree_qy\" viewBox=\"363.092 4871.499 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Forme_entree_qy\" d=\"M 363.0924987792969 4921.5712890625 C 363.0924987792969 4919.12451171875 363.0924987792969 4876.17578125 363.0924987792969 4874.4873046875 C 363.0924987792969 4872.29833984375 365.5166015625 4870.66943359375 367.912109375 4871.95068359375 C 369.8322143554688 4872.97607421875 408.2018127441406 4893.6748046875 411.4765930175781 4895.4453125 C 413.6274108886719 4896.60791015625 413.5910949707031 4899.380859375 411.4765930175781 4900.5458984375 C 409.1192932128906 4901.84423828125 370.6032104492188 4922.6484375 367.8139038085938 4924.09423828125 C 365.7715148925781 4925.15380859375 363.0924987792969 4923.98291015625 363.0924987792969 4921.5712890625 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"Stroke_Effect_qz\" viewBox=\"363.092 4871.499 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Stroke_Effect_qz\" d=\"M 363.0924987792969 4921.5712890625 C 363.0924987792969 4919.12451171875 363.0924987792969 4876.17578125 363.0924987792969 4874.4873046875 C 363.0924987792969 4872.29833984375 365.5166015625 4870.66943359375 367.912109375 4871.95068359375 C 369.8322143554688 4872.97607421875 408.2018127441406 4893.6748046875 411.4765930175781 4895.4453125 C 413.6274108886719 4896.60791015625 413.5910949707031 4899.380859375 411.4765930175781 4900.5458984375 C 409.1192932128906 4901.84423828125 370.6032104492188 4922.6484375 367.8139038085938 4924.09423828125 C 365.7715148925781 4925.15380859375 363.0924987792969 4923.98291015625 363.0924987792969 4921.5712890625 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t\t<div id=\"Entree_q\">
\t\t\t\t\t<span>Entree</span>
\t\t\t\t</div>
\t\t\t\t<img id=\"img_entree_q\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Cimage/img_entree_q.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Cimage/img_entree_q.png 1x, Cimage/img_entree_q@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t\t
\t\t\t\t<svg class=\"Rectangle_sortie_q\">
\t\t\t\t\t<rect id=\"Rectangle_sortie_q\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"228\" height=\"53\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Forme_sortie_q\">
\t\t\t\t\t<svg class=\"Forme_sortie_ra\" viewBox=\"363.092 5175.499 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Forme_sortie_ra\" d=\"M 363.0924987792969 5225.57177734375 C 363.0924987792969 5223.12451171875 363.0924987792969 5180.17529296875 363.0924987792969 5178.48779296875 C 363.0924987792969 5176.29833984375 365.5166015625 5174.669921875 367.912109375 5175.9501953125 C 369.8322143554688 5176.9755859375 408.2018127441406 5197.6748046875 411.4765930175781 5199.4453125 C 413.6274108886719 5200.6083984375 413.5910949707031 5203.38134765625 411.4765930175781 5204.54541015625 C 409.1192932128906 5205.84423828125 370.6032104492188 5226.64892578125 367.8139038085938 5228.09423828125 C 365.7715148925781 5229.15380859375 363.0924987792969 5227.98291015625 363.0924987792969 5225.57177734375 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"Stroke_Effect_q\" viewBox=\"363.092 5175.499 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Stroke_Effect_q\" d=\"M 363.0924987792969 5225.57177734375 C 363.0924987792969 5223.12451171875 363.0924987792969 5180.17529296875 363.0924987792969 5178.48779296875 C 363.0924987792969 5176.29833984375 365.5166015625 5174.669921875 367.912109375 5175.9501953125 C 369.8322143554688 5176.9755859375 408.2018127441406 5197.6748046875 411.4765930175781 5199.4453125 C 413.6274108886719 5200.6083984375 413.5910949707031 5203.38134765625 411.4765930175781 5204.54541015625 C 409.1192932128906 5205.84423828125 370.6032104492188 5226.64892578125 367.8139038085938 5228.09423828125 C 365.7715148925781 5229.15380859375 363.0924987792969 5227.98291015625 363.0924987792969 5225.57177734375 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t\t<div id=\"Sortie_q\">
\t\t\t\t\t<span>Sortie</span>
\t\t\t\t</div>
\t\t\t\t<img id=\"imd_sortie_q\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Cimage/imd_sortie_q.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Cimage/imd_sortie_q.png 1x, Cimage/imd_sortie_q@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t\t
\t\t\t</div>
\t\t\t<div id=\"User_q\">
\t\t\t\t<svg class=\"Rectangle_User_info_ra\">
\t\t\t\t\t<linearGradient id=\"Rectangle_User_info_ra\" spreadMethod=\"pad\" x1=\"0.097\" x2=\"0.903\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#19252f\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#20494d\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectangle_User_info_ra\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"254\" height=\"160\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"User_Name_rb\">
\t\t\t\t\t<span>User</span><br/><span>Name</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"en_tte__rc\">
\t\t\t\t<svg class=\"Rectangle_haut_en_tte__re\">
\t\t\t\t\t<linearGradient id=\"Rectangle_haut_en_tte__re\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#18202b\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#214f53\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectangle_haut_en_tte__re\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"1367\" height=\"160\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<svg class=\"Rectangle_3_rf\">
\t\t\t\t\t<rect id=\"Rectangle_3_rf\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"527\" height=\"54\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Recherche_rg\">
\t\t\t\t\t<span>Recherche</span>
\t\t\t\t</div>
\t\t\t\t<div id=\"Gestion_des_Categories_rh\">
\t\t\t\t\t<span>Gestion des Categories</span>
\t\t\t\t</div>
\t\t\t\t<svg class=\"Forme_1_ri\" viewBox=\"1318.092 4538.494 47.002 45.004\">
\t\t\t\t\t<path id=\"Forme_1_ri\" d=\"M 1364.41943359375 4581.55810546875 C 1363.23095703125 4583.6005859375 1360.866943359375 4584.11328125 1359.146850585938 4582.697265625 C 1359.146850585938 4582.697265625 1343.570678710938 4569.89794921875 1343.570678710938 4569.89794921875 C 1342.468139648438 4568.99462890625 1341.8974609375 4567.52197265625 1341.939819335938 4566.04150390625 C 1339.933349609375 4568.5966796875 1337.2978515625 4570.31298828125 1334.345581054688 4570.9501953125 C 1330.719604492188 4571.7353515625 1327.057250976562 4570.79638671875 1324.03466796875 4568.3125 C 1321.010498046875 4565.82861328125 1318.980834960938 4562.0927734375 1318.319946289062 4557.78955078125 C 1317.658935546875 4553.48388671875 1318.447631835938 4549.13330078125 1320.54150390625 4545.5400390625 C 1324.866088867188 4538.1220703125 1333.468139648438 4536.26220703125 1339.718139648438 4541.3955078125 C 1345.390747070312 4546.0595703125 1347.203857421875 4554.90869140625 1344.255126953125 4562.05126953125 C 1345.407104492188 4561.4765625 1346.773559570312 4561.5888671875 1347.8818359375 4562.49853515625 C 1347.8818359375 4562.49853515625 1363.462158203125 4575.29736328125 1363.462158203125 4575.29736328125 C 1365.182250976562 4576.7138671875 1365.612426757812 4579.51513671875 1364.41943359375 4581.55810546875 Z M 1341.32763671875 4552.8115234375 C 1340.867797851562 4549.810546875 1339.45361328125 4547.20556640625 1337.344970703125 4545.47412109375 C 1332.989013671875 4541.89208984375 1326.988647460938 4543.18701171875 1323.970336914062 4548.359375 C 1320.955810546875 4553.53857421875 1322.0478515625 4560.6611328125 1326.404663085938 4564.2373046875 C 1330.761108398438 4567.81982421875 1336.760375976562 4566.525390625 1339.778076171875 4561.35107421875 C 1341.237915039062 4558.8466796875 1341.788452148438 4555.81396484375 1341.32763671875 4552.8115234375 Z\">
\t\t\t\t\t</path>
\t\t\t\t</svg>
\t\t\t\t<img id=\"img_gestion_produit_rj\" src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Cimage/img_gestion_produit_rj.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Cimage/img_gestion_produit_rj.png 1x, Cimage/img_gestion_produit_rj@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t\t
\t\t\t</div>
\t\t\t<div id=\"table_rk\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"container col-md-12\">
\t\t\t\t\t<div class=\"card bg-transparent text-white\">
\t\t\t\t\t\t<div class=\"card-header text-center bg-primary text-white\">Liste des categories</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t\t\t<thead class=\"thead-dark text-center text-white\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Identifiant</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Libelle</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\" colspan=\"2\">Action</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 185, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 186
            echo "\t\t\t\t\t\t\t\t<tr class=\"text-center text-white\">
\t\t\t\t\t\t\t\t\t<th scope=\"row\">";
            // line 187
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 187), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t\t\t<td>";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nom", [], "any", false, false, false, 188), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-th-list\"> <a class=\"btn btn-outline-warning\" href=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 190)]), "html", null, true);
            echo "\">Edit</a></i>&emsp;
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"> <a class=\"btn btn-outline-danger\" href=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 191)]), "html", null, true);
            echo "\">Supr</a></i>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-footer text-dark\">LPGL</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"Formulaire_Categorie_r\">
\t\t\t\t<svg class=\"Rectangle_Formulaire_r\">
\t\t\t\t\t<rect id=\"Rectangle_Formulaire_r\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"527\" height=\"507\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<svg class=\"Rectangle_Form_sa\">
\t\t\t\t\t<linearGradient id=\"Rectangle_Form_sa\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#0c1318\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#364753\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectangle_Form_sa\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"527\" height=\"51\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Formulaire_Categorie_sa\">
\t\t\t\t\t<span>Formulaire Categorie</span>
\t\t\t\t</div><br><br>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"container col-md-12\">    
\t\t\t\t\t\t<div class=\"card bg-transparent text-white\"><br><br>
\t\t\t\t\t\t\t<div class=\"card-body\"><br><br>
\t\t\t\t\t\t\t\t";
        // line 223
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), 'form');
        echo "
\t\t\t\t\t\t\t</div><br><br><br><br>
\t\t\t\t\t\t\t<div class=\"card-footer text-dark\">LPGL</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t<div id=\"footer_se\">
\t\t\t<svg class=\"Rectangle_footer_sf\">
\t\t\t\t<rect id=\"Rectangle_footer_sf\" rx=\"45\" ry=\"45\" x=\"0\" y=\"0\" width=\"1620\" height=\"112\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<svg class=\"tel_sg\" viewBox=\"980.181 5296.58 116.825 94.839\">
\t\t\t\t<path id=\"tel_sg\" d=\"M 1078.586059570312 5296.580078125 C 1078.586059570312 5296.580078125 998.5941772460938 5296.580078125 998.5941772460938 5296.580078125 C 988.427490234375 5296.580078125 980.1810913085938 5303.2568359375 980.1810913085938 5311.5244140625 C 980.1810913085938 5311.5244140625 980.1810913085938 5376.474609375 980.1810913085938 5376.474609375 C 980.1810913085938 5384.7294921875 988.427490234375 5391.4189453125 998.5941772460938 5391.4189453125 C 998.5941772460938 5391.4189453125 1078.586059570312 5391.4189453125 1078.586059570312 5391.4189453125 C 1088.759765625 5391.4189453125 1097.00634765625 5384.7294921875 1097.00634765625 5376.474609375 C 1097.00634765625 5376.474609375 1097.00634765625 5311.5244140625 1097.00634765625 5311.5244140625 C 1097.00634765625 5303.2568359375 1088.759765625 5296.580078125 1078.586059570312 5296.580078125 Z M 1036.830932617188 5306.4765625 L 1038.111450195312 5322.83544921875 L 1033.46044921875 5323.92578125 L 1031.2236328125 5306.0380859375 L 1036.830932617188 5306.4765625 Z M 1056.8017578125 5380.533203125 C 1056.8017578125 5380.533203125 1036.39892578125 5380.1953125 1036.39892578125 5380.1953125 C 1002.697570800781 5350.93310546875 1008.189697265625 5316.8984375 1008.189697265625 5316.8984375 L 1023.540283203125 5306.1875 L 1026.56396484375 5306.1875 L 1029.024658203125 5324.90283203125 L 1022.306579589844 5328.5234375 L 1039.485107421875 5365.06298828125 L 1046.21875 5363.32177734375 L 1059.131958007812 5378.9423828125 L 1056.8017578125 5380.533203125 Z M 1063.281982421875 5377.05078125 L 1049.620849609375 5361.68115234375 L 1054.796142578125 5359.876953125 L 1066.706909179688 5374.2705078125 L 1063.281982421875 5377.05078125 Z\">
\t\t\t\t</path>
\t\t\t</svg>
\t\t\t<img id=\"whatsapp_sh\" src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Cimage/whatsapp_sh.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Cimage/whatsapp_sh.png 1x, Cimage/whatsapp_sh@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<img id=\"messenger_si\" src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Cimage/messenger_si.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Cimage/messenger_si.png 1x, Cimage/messenger_si@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<img id=\"insta_sj\" src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Cimage/insta_sj.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Cimage/insta_sj.png 1x, Cimage/insta_sj@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<img id=\"youtube_sk\" src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Cimage/youtube_sk.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Cimage/youtube_sk.png 1x, Cimage/youtube_sk@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<div id=\"Mahamadou_Issagha_Diop_sl\">
\t\t\t\t<span>Mahamadou Issagha Diop</span>
\t\t\t</div>
\t\t\t<img id=\"copyright_sm\" src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Cimage/copyright_sm.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Cimage/copyright_sm.png 1x, Cimage/copyright_sm@2x.png 2x"), "html", null, true);
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
        return "categorie/categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 252,  396 => 247,  389 => 245,  382 => 243,  375 => 241,  354 => 223,  324 => 195,  314 => 191,  310 => 190,  305 => 188,  301 => 187,  298 => 186,  294 => 185,  272 => 168,  228 => 129,  204 => 110,  169 => 80,  162 => 78,  151 => 70,  144 => 65,  136 => 63,  134 => 62,  120 => 51,  111 => 45,  102 => 39,  95 => 37,  75 => 22,  67 => 17,  58 => 11,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\"/>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>Categorie</title>
<link rel=\"stylesheet\" type=\"text/css\" id=\"applicationStylesheet\" href=\"{{ asset('Prototype/Ccss/Categorie.css') }}\"/>
<link href=\"https://fonts.googleapis.com/css?family=Quicksand&display=swap\" rel=\"stylesheet\">
<!-- Custom fonts for this template-->
    <link href=\"{{ asset('template/sb_bootstrap/vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"{{ asset('template/sb_bootstrap/css/sb-admin-2.min.css') }}\"rel=\"stylesheet\">
<script id=\"applicationScript\" type=\"text/javascript\" src=\"Cscript/Categorie.js\"></script>
</head>
<body>
<div id=\"Categorie\">
\t<img id=\"Calque_1_p\" src=\"{{ asset('Prototype/Cimage/Calque_1_p.png') }}\" srcset=\"{{ asset('Prototype/Cimage/Calque_1_p.png 1x, Cimage/Calque_1_p@2x.png 2x') }}\">
\t\t
\t<div id=\"Page_categorie_p\">
\t\t<div id=\"menu_p\">
\t\t\t<svg class=\"Rectangle_1_qb\">
\t\t\t\t<linearGradient id=\"Rectangle_1_qb\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t<stop offset=\"0\" stop-color=\"#28343b\" stop-opacity=\"1\"></stop>
\t\t\t\t\t<stop offset=\"1\" stop-color=\"#004a95\" stop-opacity=\"1\"></stop>
\t\t\t\t</linearGradient>
\t\t\t\t<rect id=\"Rectangle_1_qb\" rx=\"75\" ry=\"75\" x=\"0\" y=\"0\" width=\"1620\" height=\"144\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Logo_qc\">
\t\t\t\t<span>Logo</span>
\t\t\t</div>
\t\t\t<img id=\"logo4-b_qd\" src=\"{{ asset('Prototype/Cimage/logo4-b_qd.png') }}\" srcset=\"{{ asset('Prototype/Cimage/logo4-b_qd.png 1x, Cimage/logo4-b_qd@2x.png 2x') }}\">

\t\t\t<a class=\"collapse-item\" href=\"{{ path('accueil')}}\">\t\t
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Acceuil_qe\">
\t\t\t\t<span>Acceuil</span>
\t\t\t</div>
\t\t\t</a>

\t\t\t<a class=\"collapse-item\" href=\"{{ path('produit_liste')}}\">
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Produit_qf\">
\t\t\t\t<span>Produit</span>
\t\t\t</div>
\t\t\t</a>

\t\t\t<a class=\"collapse-item\" href=\"{{ path('categorie_liste')}}\">
\t\t\t<div id=\"Categorie_qg\">
\t\t\t\t<span>Categorie</span>
\t\t\t</div>
\t\t\t</a>\t

\t\t\t<svg class=\"Rectangle_Profil_ql\">
\t\t\t\t<rect id=\"Rectangle_Profil_ql\" rx=\"20\" ry=\"20\" x=\"-5\" y=\"-10\" width=\"180\" height=\"100\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Profil_qm\">
\t\t\t{% if app.user %}
\t\t\t\t<span>{{ app.user.nom }}<br>{{ app.user.prenom }}</span>
\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<svg class=\"Rectangle_Log_out_qn\">
\t\t\t\t<rect onclick=\"application.goToTargetView(event)\" id=\"Rectangle_Log_out_qn\" rx=\"20\" ry=\"20\" x=\"0\" y=\"0\" width=\"199\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<a href=\"{{path('app_logout')}}\">
\t\t\t<div id=\"Log_out__qo\">
\t\t\t\t<span>Log out</span><br/>
\t\t\t</div>
\t\t\t</a>
\t\t</div>
\t\t<div id=\"Categorie_body_qp\">
\t\t\t<div id=\"Screenshot_2022-05-31_132950_qq\">
\t\t\t\t<img id=\"Screenshot_2022-05-31_132950_qr\" src=\"{{ asset('Prototype/Cimage/Screenshot_2022-05-31_132950_qr.png') }}\" srcset=\"{{ asset('Prototype/Cimage/Screenshot_2022-05-31_132950_qr.png 1x, Cimage/Screenshot_2022-05-31_132950_qr@2x.png 2x') }}\">
\t\t\t\t\t
\t\t\t\t<img id=\"Clip_qs\" src=\"{{ asset('Prototype/Cimage/Clip_qs.png') }}\" srcset=\"{{ asset('Prototype/Cimage/Clip_qs.png 1x, Cimage/Clip_qs@2x.png 2x') }}\">
\t\t\t\t\t
\t\t\t\t</svg>
\t\t\t</div>
\t\t\t<div id=\"sous_menu_qt\">
\t\t\t\t<svg class=\"Rectanglegauche_sous_menu_qv\">
\t\t\t\t\t<linearGradient id=\"Rectanglegauche_sous_menu_qv\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#192530\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#1b606f\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectanglegauche_sous_menu_qv\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"254\" height=\"659\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<svg class=\"Rectangle_entree_qw\">
\t\t\t\t\t<rect id=\"Rectangle_entree_qw\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"228\" height=\"53\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Forme_entree_qx\">
\t\t\t\t\t<svg class=\"Forme_entree_qy\" viewBox=\"363.092 4871.499 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Forme_entree_qy\" d=\"M 363.0924987792969 4921.5712890625 C 363.0924987792969 4919.12451171875 363.0924987792969 4876.17578125 363.0924987792969 4874.4873046875 C 363.0924987792969 4872.29833984375 365.5166015625 4870.66943359375 367.912109375 4871.95068359375 C 369.8322143554688 4872.97607421875 408.2018127441406 4893.6748046875 411.4765930175781 4895.4453125 C 413.6274108886719 4896.60791015625 413.5910949707031 4899.380859375 411.4765930175781 4900.5458984375 C 409.1192932128906 4901.84423828125 370.6032104492188 4922.6484375 367.8139038085938 4924.09423828125 C 365.7715148925781 4925.15380859375 363.0924987792969 4923.98291015625 363.0924987792969 4921.5712890625 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"Stroke_Effect_qz\" viewBox=\"363.092 4871.499 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Stroke_Effect_qz\" d=\"M 363.0924987792969 4921.5712890625 C 363.0924987792969 4919.12451171875 363.0924987792969 4876.17578125 363.0924987792969 4874.4873046875 C 363.0924987792969 4872.29833984375 365.5166015625 4870.66943359375 367.912109375 4871.95068359375 C 369.8322143554688 4872.97607421875 408.2018127441406 4893.6748046875 411.4765930175781 4895.4453125 C 413.6274108886719 4896.60791015625 413.5910949707031 4899.380859375 411.4765930175781 4900.5458984375 C 409.1192932128906 4901.84423828125 370.6032104492188 4922.6484375 367.8139038085938 4924.09423828125 C 365.7715148925781 4925.15380859375 363.0924987792969 4923.98291015625 363.0924987792969 4921.5712890625 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t\t<div id=\"Entree_q\">
\t\t\t\t\t<span>Entree</span>
\t\t\t\t</div>
\t\t\t\t<img id=\"img_entree_q\" src=\"{{ asset('Prototype/Cimage/img_entree_q.png') }}\" srcset=\"{{ asset('Prototype/Cimage/img_entree_q.png 1x, Cimage/img_entree_q@2x.png 2x') }}\">
\t\t\t\t\t
\t\t\t\t<svg class=\"Rectangle_sortie_q\">
\t\t\t\t\t<rect id=\"Rectangle_sortie_q\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"228\" height=\"53\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Forme_sortie_q\">
\t\t\t\t\t<svg class=\"Forme_sortie_ra\" viewBox=\"363.092 5175.499 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Forme_sortie_ra\" d=\"M 363.0924987792969 5225.57177734375 C 363.0924987792969 5223.12451171875 363.0924987792969 5180.17529296875 363.0924987792969 5178.48779296875 C 363.0924987792969 5176.29833984375 365.5166015625 5174.669921875 367.912109375 5175.9501953125 C 369.8322143554688 5176.9755859375 408.2018127441406 5197.6748046875 411.4765930175781 5199.4453125 C 413.6274108886719 5200.6083984375 413.5910949707031 5203.38134765625 411.4765930175781 5204.54541015625 C 409.1192932128906 5205.84423828125 370.6032104492188 5226.64892578125 367.8139038085938 5228.09423828125 C 365.7715148925781 5229.15380859375 363.0924987792969 5227.98291015625 363.0924987792969 5225.57177734375 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"Stroke_Effect_q\" viewBox=\"363.092 5175.499 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Stroke_Effect_q\" d=\"M 363.0924987792969 5225.57177734375 C 363.0924987792969 5223.12451171875 363.0924987792969 5180.17529296875 363.0924987792969 5178.48779296875 C 363.0924987792969 5176.29833984375 365.5166015625 5174.669921875 367.912109375 5175.9501953125 C 369.8322143554688 5176.9755859375 408.2018127441406 5197.6748046875 411.4765930175781 5199.4453125 C 413.6274108886719 5200.6083984375 413.5910949707031 5203.38134765625 411.4765930175781 5204.54541015625 C 409.1192932128906 5205.84423828125 370.6032104492188 5226.64892578125 367.8139038085938 5228.09423828125 C 365.7715148925781 5229.15380859375 363.0924987792969 5227.98291015625 363.0924987792969 5225.57177734375 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t\t<div id=\"Sortie_q\">
\t\t\t\t\t<span>Sortie</span>
\t\t\t\t</div>
\t\t\t\t<img id=\"imd_sortie_q\" src=\"{{ asset('Prototype/Cimage/imd_sortie_q.png') }}\" srcset=\"{{ asset('Prototype/Cimage/imd_sortie_q.png 1x, Cimage/imd_sortie_q@2x.png 2x') }}\">
\t\t\t\t\t
\t\t\t</div>
\t\t\t<div id=\"User_q\">
\t\t\t\t<svg class=\"Rectangle_User_info_ra\">
\t\t\t\t\t<linearGradient id=\"Rectangle_User_info_ra\" spreadMethod=\"pad\" x1=\"0.097\" x2=\"0.903\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#19252f\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#20494d\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectangle_User_info_ra\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"254\" height=\"160\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"User_Name_rb\">
\t\t\t\t\t<span>User</span><br/><span>Name</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"en_tte__rc\">
\t\t\t\t<svg class=\"Rectangle_haut_en_tte__re\">
\t\t\t\t\t<linearGradient id=\"Rectangle_haut_en_tte__re\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#18202b\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#214f53\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectangle_haut_en_tte__re\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"1367\" height=\"160\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<svg class=\"Rectangle_3_rf\">
\t\t\t\t\t<rect id=\"Rectangle_3_rf\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"527\" height=\"54\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Recherche_rg\">
\t\t\t\t\t<span>Recherche</span>
\t\t\t\t</div>
\t\t\t\t<div id=\"Gestion_des_Categories_rh\">
\t\t\t\t\t<span>Gestion des Categories</span>
\t\t\t\t</div>
\t\t\t\t<svg class=\"Forme_1_ri\" viewBox=\"1318.092 4538.494 47.002 45.004\">
\t\t\t\t\t<path id=\"Forme_1_ri\" d=\"M 1364.41943359375 4581.55810546875 C 1363.23095703125 4583.6005859375 1360.866943359375 4584.11328125 1359.146850585938 4582.697265625 C 1359.146850585938 4582.697265625 1343.570678710938 4569.89794921875 1343.570678710938 4569.89794921875 C 1342.468139648438 4568.99462890625 1341.8974609375 4567.52197265625 1341.939819335938 4566.04150390625 C 1339.933349609375 4568.5966796875 1337.2978515625 4570.31298828125 1334.345581054688 4570.9501953125 C 1330.719604492188 4571.7353515625 1327.057250976562 4570.79638671875 1324.03466796875 4568.3125 C 1321.010498046875 4565.82861328125 1318.980834960938 4562.0927734375 1318.319946289062 4557.78955078125 C 1317.658935546875 4553.48388671875 1318.447631835938 4549.13330078125 1320.54150390625 4545.5400390625 C 1324.866088867188 4538.1220703125 1333.468139648438 4536.26220703125 1339.718139648438 4541.3955078125 C 1345.390747070312 4546.0595703125 1347.203857421875 4554.90869140625 1344.255126953125 4562.05126953125 C 1345.407104492188 4561.4765625 1346.773559570312 4561.5888671875 1347.8818359375 4562.49853515625 C 1347.8818359375 4562.49853515625 1363.462158203125 4575.29736328125 1363.462158203125 4575.29736328125 C 1365.182250976562 4576.7138671875 1365.612426757812 4579.51513671875 1364.41943359375 4581.55810546875 Z M 1341.32763671875 4552.8115234375 C 1340.867797851562 4549.810546875 1339.45361328125 4547.20556640625 1337.344970703125 4545.47412109375 C 1332.989013671875 4541.89208984375 1326.988647460938 4543.18701171875 1323.970336914062 4548.359375 C 1320.955810546875 4553.53857421875 1322.0478515625 4560.6611328125 1326.404663085938 4564.2373046875 C 1330.761108398438 4567.81982421875 1336.760375976562 4566.525390625 1339.778076171875 4561.35107421875 C 1341.237915039062 4558.8466796875 1341.788452148438 4555.81396484375 1341.32763671875 4552.8115234375 Z\">
\t\t\t\t\t</path>
\t\t\t\t</svg>
\t\t\t\t<img id=\"img_gestion_produit_rj\" src=\"{{ asset('Prototype/Cimage/img_gestion_produit_rj.png') }}\" srcset=\"{{ asset('Prototype/Cimage/img_gestion_produit_rj.png 1x, Cimage/img_gestion_produit_rj@2x.png 2x') }}\">
\t\t\t\t\t
\t\t\t</div>
\t\t\t<div id=\"table_rk\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"container col-md-12\">
\t\t\t\t\t<div class=\"card bg-transparent text-white\">
\t\t\t\t\t\t<div class=\"card-header text-center bg-primary text-white\">Liste des categories</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t\t\t<thead class=\"thead-dark text-center text-white\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Identifiant</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Libelle</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\" colspan=\"2\">Action</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t{% for c in categories %}
\t\t\t\t\t\t\t\t<tr class=\"text-center text-white\">
\t\t\t\t\t\t\t\t\t<th scope=\"row\">{{ c.id }}</th>
\t\t\t\t\t\t\t\t\t<td>{{ c.nom }}</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-th-list\"> <a class=\"btn btn-outline-warning\" href=\"{{ path('categorie_edit', {'id': c.id}) }}\">Edit</a></i>&emsp;
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"> <a class=\"btn btn-outline-danger\" href=\"{{ path('categorie_delete', {'id': c.id}) }}\">Supr</a></i>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-footer text-dark\">LPGL</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"Formulaire_Categorie_r\">
\t\t\t\t<svg class=\"Rectangle_Formulaire_r\">
\t\t\t\t\t<rect id=\"Rectangle_Formulaire_r\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"527\" height=\"507\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<svg class=\"Rectangle_Form_sa\">
\t\t\t\t\t<linearGradient id=\"Rectangle_Form_sa\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#0c1318\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#364753\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectangle_Form_sa\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"527\" height=\"51\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Formulaire_Categorie_sa\">
\t\t\t\t\t<span>Formulaire Categorie</span>
\t\t\t\t</div><br><br>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"container col-md-12\">    
\t\t\t\t\t\t<div class=\"card bg-transparent text-white\"><br><br>
\t\t\t\t\t\t\t<div class=\"card-body\"><br><br>
\t\t\t\t\t\t\t\t{{ form(form) }}
\t\t\t\t\t\t\t</div><br><br><br><br>
\t\t\t\t\t\t\t<div class=\"card-footer text-dark\">LPGL</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t<div id=\"footer_se\">
\t\t\t<svg class=\"Rectangle_footer_sf\">
\t\t\t\t<rect id=\"Rectangle_footer_sf\" rx=\"45\" ry=\"45\" x=\"0\" y=\"0\" width=\"1620\" height=\"112\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<svg class=\"tel_sg\" viewBox=\"980.181 5296.58 116.825 94.839\">
\t\t\t\t<path id=\"tel_sg\" d=\"M 1078.586059570312 5296.580078125 C 1078.586059570312 5296.580078125 998.5941772460938 5296.580078125 998.5941772460938 5296.580078125 C 988.427490234375 5296.580078125 980.1810913085938 5303.2568359375 980.1810913085938 5311.5244140625 C 980.1810913085938 5311.5244140625 980.1810913085938 5376.474609375 980.1810913085938 5376.474609375 C 980.1810913085938 5384.7294921875 988.427490234375 5391.4189453125 998.5941772460938 5391.4189453125 C 998.5941772460938 5391.4189453125 1078.586059570312 5391.4189453125 1078.586059570312 5391.4189453125 C 1088.759765625 5391.4189453125 1097.00634765625 5384.7294921875 1097.00634765625 5376.474609375 C 1097.00634765625 5376.474609375 1097.00634765625 5311.5244140625 1097.00634765625 5311.5244140625 C 1097.00634765625 5303.2568359375 1088.759765625 5296.580078125 1078.586059570312 5296.580078125 Z M 1036.830932617188 5306.4765625 L 1038.111450195312 5322.83544921875 L 1033.46044921875 5323.92578125 L 1031.2236328125 5306.0380859375 L 1036.830932617188 5306.4765625 Z M 1056.8017578125 5380.533203125 C 1056.8017578125 5380.533203125 1036.39892578125 5380.1953125 1036.39892578125 5380.1953125 C 1002.697570800781 5350.93310546875 1008.189697265625 5316.8984375 1008.189697265625 5316.8984375 L 1023.540283203125 5306.1875 L 1026.56396484375 5306.1875 L 1029.024658203125 5324.90283203125 L 1022.306579589844 5328.5234375 L 1039.485107421875 5365.06298828125 L 1046.21875 5363.32177734375 L 1059.131958007812 5378.9423828125 L 1056.8017578125 5380.533203125 Z M 1063.281982421875 5377.05078125 L 1049.620849609375 5361.68115234375 L 1054.796142578125 5359.876953125 L 1066.706909179688 5374.2705078125 L 1063.281982421875 5377.05078125 Z\">
\t\t\t\t</path>
\t\t\t</svg>
\t\t\t<img id=\"whatsapp_sh\" src=\"{{ asset('Prototype/Cimage/whatsapp_sh.png') }}\" srcset=\"{{ asset('Prototype/Cimage/whatsapp_sh.png 1x, Cimage/whatsapp_sh@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"messenger_si\" src=\"{{ asset('Prototype/Cimage/messenger_si.png') }}\" srcset=\"{{ asset('Prototype/Cimage/messenger_si.png 1x, Cimage/messenger_si@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"insta_sj\" src=\"{{ asset('Prototype/Cimage/insta_sj.png') }}\" srcset=\"{{ asset('Prototype/Cimage/insta_sj.png 1x, Cimage/insta_sj@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"youtube_sk\" src=\"{{ asset('Prototype/Cimage/youtube_sk.png') }}\" srcset=\"{{ asset('Prototype/Cimage/youtube_sk.png 1x, Cimage/youtube_sk@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<div id=\"Mahamadou_Issagha_Diop_sl\">
\t\t\t\t<span>Mahamadou Issagha Diop</span>
\t\t\t</div>
\t\t\t<img id=\"copyright_sm\" src=\"{{ asset('Prototype/Cimage/copyright_sm.png') }}\" srcset=\"{{ asset('Prototype/Cimage/copyright_sm.png 1x, Cimage/copyright_sm@2x.png 2x') }}\">
\t\t\t\t
\t\t</div>
\t</div>
</div>
</body>
</html>", "categorie/categorie.html.twig", "C:\\xampp\\htdocs\\semestre2\\Symfony\\appstocksymfony\\templates\\categorie\\categorie.html.twig");
    }
}
