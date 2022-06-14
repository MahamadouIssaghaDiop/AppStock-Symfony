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

/* produit/produit.html.twig */
class __TwigTemplate_fdc31a49ab8f85009cd8a9d26b81972f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/produit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/produit.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\"/>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>Produit</title>
<link rel=\"stylesheet\" type=\"text/css\" id=\"applicationStylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Pcss/Produit.css"), "html", null, true);
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
<script id=\"applicationScript\" type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Pscript/Produit.js"), "html", null, true);
        echo "\"></script>
</head>
<body>
<div id=\"Produit\">
\t<img id=\"Calque_1_i\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Pimage/Calque_1_i.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Pimage/Calque_1_i.png 1x, Pimage/Calque_1_i@2x.png 2x"), "html", null, true);
        echo "\">
\t\t
\t<div id=\"Page_produit_jz\">
\t\t<div id=\"menu_j\">
\t\t\t<svg class=\"Rectangle_1_ka\">
\t\t\t\t<linearGradient id=\"Rectangle_1_ka\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t<stop offset=\"0\" stop-color=\"#28343b\" stop-opacity=\"1\"></stop>
\t\t\t\t\t<stop offset=\"1\" stop-color=\"#004a95\" stop-opacity=\"1\"></stop>
\t\t\t\t</linearGradient>
\t\t\t\t<rect id=\"Rectangle_1_ka\" rx=\"75\" ry=\"75\" x=\"0\" y=\"0\" width=\"1620\" height=\"144\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Logo_j\">
\t\t\t\t<span>Logo</span>
\t\t\t</div>
\t\t\t<img id=\"logo4-b_j\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Pimage/logo4-b_j.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Pimage/logo4-b_j.png 1x, Pimage/logo4-b_j@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t
\t\t\t<a class=\"collapse-item\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Acceuil_j\">
\t\t\t\t<span>Acceuil</span>
\t\t\t</div>
\t\t\t</a>
\t\t\t
\t\t\t<a class=\"collapse-item\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_liste");
        echo "\">
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Produit_j\">
\t\t\t\t<span>Produit</span>
\t\t\t</div>
\t\t\t</a>
\t\t\t
\t\t\t<a class=\"collapse-item\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_liste");
        echo "\">
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Categorie_j\">
\t\t\t\t<span>Categorie</span>
\t\t\t</div>
\t\t\t</a>
\t\t\t<svg class=\"Rectangle_Profil_kc\">
\t\t\t\t<rect id=\"Rectangle_Profil_kc\" rx=\"20\" ry=\"20\" x=\"-5\" y=\"-10\" width=\"180\" height=\"100\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Profil_kd\">
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
\t\t\t<svg class=\"Rectangle_Log_out_ke\">
\t\t\t\t<rect onclick=\"application.goToTargetView(event)\" id=\"Rectangle_Log_out_ke\" rx=\"20\" ry=\"20\" x=\"0\" y=\"0\" width=\"199\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>

\t\t\t";
        // line 71
        echo "\t\t\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
\t\t\t<div id=\"Log_out__kf\">
\t\t\t\t<span>Log out</span><br/>
\t\t\t</div>
\t\t\t</a>

\t\t</div>
\t\t<div id=\"Produit_body_kg\">
\t\t\t<div id=\"Screenshot_2022-05-31_132950_kh\">
\t\t\t\t<img id=\"Screenshot_2022-05-31_132950_ki\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Pimage/Screenshot_2022-05-31_132950_ki.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Pimage/Screenshot_2022-05-31_132950_ki.png 1x, Pimage/Screenshot_2022-05-31_132950_ki@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t\t
\t\t\t\t<img id=\"Clip_kj\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Pimage/Clip_kj.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Pimage/Clip_kj.png 1x, Pimage/Clip_kj@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t\t
\t\t\t\t</svg>
\t\t\t</div>
\t\t\t<div id=\"sous_menu_kk\">
\t\t\t\t<svg class=\"Rectanglegauche_sous_menu_km\">
\t\t\t\t\t<linearGradient id=\"Rectanglegauche_sous_menu_km\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#192530\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#1b606f\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectanglegauche_sous_menu_km\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"254\" height=\"659\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<svg class=\"Rectangle_entree_kn\">
\t\t\t\t\t<rect onclick=\"application.goToTargetView(event)\" id=\"Rectangle_entree_kn\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"228\" height=\"53\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Forme_entree_ko\">
\t\t\t\t\t<svg class=\"Forme_entree_kp\" viewBox=\"352.999 1632.998 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Forme_entree_kp\" d=\"M 352.9988098144531 1683.071533203125 C 352.9988098144531 1680.624877929688 352.9988098144531 1637.675415039062 352.9988098144531 1635.987548828125 C 352.9988098144531 1633.798583984375 355.4229125976562 1632.169677734375 357.8183898925781 1633.4501953125 C 359.7384948730469 1634.4755859375 398.1080932617188 1655.174926757812 401.3829040527344 1656.944946289062 C 403.53369140625 1658.108154296875 403.4974060058594 1660.881225585938 401.3829040527344 1662.04541015625 C 399.0256042480469 1663.34423828125 360.5094909667969 1684.148681640625 357.72021484375 1685.593872070312 C 355.6777954101562 1686.65380859375 352.9988098144531 1685.483154296875 352.9988098144531 1683.071533203125 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"Stroke_Effect_kq\" viewBox=\"352.999 1632.998 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Stroke_Effect_kq\" d=\"M 352.9988098144531 1683.071533203125 C 352.9988098144531 1680.624877929688 352.9988098144531 1637.675415039062 352.9988098144531 1635.987548828125 C 352.9988098144531 1633.798583984375 355.4229125976562 1632.169677734375 357.8183898925781 1633.4501953125 C 359.7384948730469 1634.4755859375 398.1080932617188 1655.174926757812 401.3829040527344 1656.944946289062 C 403.53369140625 1658.108154296875 403.4974060058594 1660.881225585938 401.3829040527344 1662.04541015625 C 399.0256042480469 1663.34423828125 360.5094909667969 1684.148681640625 357.72021484375 1685.593872070312 C 355.6777954101562 1686.65380859375 352.9988098144531 1685.483154296875 352.9988098144531 1683.071533203125 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<a class=\"collapse-item\" href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entree_liste");
        echo "\">
\t\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Entree_kr\">
\t\t\t\t\t<span>Entree</span>
\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t<img id=\"img_entree_ks\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Pimage/img_entree_ks.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Pimage/img_entree_ks.png 1x, Pimage/img_entree_ks@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t\t
\t\t\t\t<svg class=\"Rectangle_sortie_kt\">
\t\t\t\t\t<rect onclick=\"application.goToTargetView(event)\" id=\"Rectangle_sortie_kt\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"228\" height=\"53\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Forme_sortie_ku\">
\t\t\t\t\t<svg class=\"Forme_sortie_kv\" viewBox=\"352.999 1936.998 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Forme_sortie_kv\" d=\"M 352.9988098144531 1987.071411132812 C 352.9988098144531 1984.624267578125 352.9988098144531 1941.675659179688 352.9988098144531 1939.987426757812 C 352.9988098144531 1937.79833984375 355.4229125976562 1936.169555664062 357.8183898925781 1937.450439453125 C 359.7384948730469 1938.475830078125 398.1080932617188 1959.174682617188 401.3829040527344 1960.9453125 C 403.53369140625 1962.108154296875 403.4974060058594 1964.881469726562 401.3829040527344 1966.045654296875 C 399.0256042480469 1967.343994140625 360.5094909667969 1988.148559570312 357.72021484375 1989.59375 C 355.6777954101562 1990.654052734375 352.9988098144531 1989.48291015625 352.9988098144531 1987.071411132812 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"Stroke_Effect_kw\" viewBox=\"352.999 1936.998 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Stroke_Effect_kw\" d=\"M 352.9988098144531 1987.071411132812 C 352.9988098144531 1984.624267578125 352.9988098144531 1941.675659179688 352.9988098144531 1939.987426757812 C 352.9988098144531 1937.79833984375 355.4229125976562 1936.169555664062 357.8183898925781 1937.450439453125 C 359.7384948730469 1938.475830078125 398.1080932617188 1959.174682617188 401.3829040527344 1960.9453125 C 403.53369140625 1962.108154296875 403.4974060058594 1964.881469726562 401.3829040527344 1966.045654296875 C 399.0256042480469 1967.343994140625 360.5094909667969 1988.148559570312 357.72021484375 1989.59375 C 355.6777954101562 1990.654052734375 352.9988098144531 1989.48291015625 352.9988098144531 1987.071411132812 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t\t<a class=\"collapse-item\" href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_liste");
        echo "\">
\t\t\t\t<div id=\"Sortie_kx\">
\t\t\t\t\t<span>Sortie</span>
\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t<img id=\"imd_sortie_ky\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Pimage/imd_sortie_ky.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Pimage/imd_sortie_ky.png 1x, Pimage/imd_sortie_ky@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t\t
\t\t\t</div>
\t\t\t<div id=\"User_kz\">
\t\t\t\t<svg class=\"Rectangle_User_info_la\">
\t\t\t\t\t<linearGradient id=\"Rectangle_User_info_la\" spreadMethod=\"pad\" x1=\"0.097\" x2=\"0.903\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#19252f\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#20494d\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectangle_User_info_la\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"254\" height=\"160\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"User_Name_k\">
\t\t\t\t\t<span>User</span><br/><span>Name</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"en_tte__k\">
\t\t\t\t<svg class=\"Rectangle_haut_en_tte__la\">
\t\t\t\t\t<linearGradient id=\"Rectangle_haut_en_tte__la\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#18202b\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#214f53\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectangle_haut_en_tte__la\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"1367\" height=\"160\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<svg class=\"Rectangle_3_k\">
\t\t\t\t\t<rect id=\"Rectangle_3_k\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"527\" height=\"54\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Recherche_k\">
\t\t\t\t\t<span>Recherche</span>
\t\t\t\t</div>
\t\t\t\t<div id=\"Gestion_des_Produits_k\">
\t\t\t\t\t<span>Gestion des Produits</span>
\t\t\t\t</div>
\t\t\t\t<svg class=\"Forme_1_k\" viewBox=\"1307.998 1299.994 47.003 45.004\">
\t\t\t\t\t<path id=\"Forme_1_k\" d=\"M 1354.325805664062 1343.05810546875 C 1353.137329101562 1345.100830078125 1350.773193359375 1345.613647460938 1349.053100585938 1344.197509765625 C 1349.053100585938 1344.197509765625 1333.47705078125 1331.398193359375 1333.47705078125 1331.398193359375 C 1332.374389648438 1330.494873046875 1331.8037109375 1329.022094726562 1331.846069335938 1327.54150390625 C 1329.839721679688 1330.096557617188 1327.204223632812 1331.812866210938 1324.251953125 1332.450073242188 C 1320.625854492188 1333.235595703125 1316.963745117188 1332.296264648438 1313.941040039062 1329.812255859375 C 1310.916748046875 1327.328735351562 1308.887084960938 1323.592651367188 1308.226318359375 1319.289916992188 C 1307.565185546875 1314.983764648438 1308.353881835938 1310.632934570312 1310.44775390625 1307.040283203125 C 1314.7724609375 1299.622436523438 1323.37451171875 1297.762451171875 1329.62451171875 1302.895629882812 C 1335.297119140625 1307.559814453125 1337.110107421875 1316.408935546875 1334.161376953125 1323.551513671875 C 1335.3134765625 1322.976440429688 1336.679809570312 1323.088623046875 1337.7880859375 1323.998046875 C 1337.7880859375 1323.998046875 1353.368530273438 1336.796875 1353.368530273438 1336.796875 C 1355.088623046875 1338.213500976562 1355.518676757812 1341.015502929688 1354.325805664062 1343.05810546875 Z M 1331.23388671875 1314.3115234375 C 1330.774169921875 1311.310791015625 1329.35986328125 1308.705200195312 1327.251342773438 1306.973999023438 C 1322.895385742188 1303.39208984375 1316.89501953125 1304.687255859375 1313.876586914062 1309.859619140625 C 1310.862060546875 1315.0380859375 1311.9541015625 1322.161010742188 1316.31103515625 1325.737670898438 C 1320.667358398438 1329.319946289062 1326.666748046875 1328.025390625 1329.684448242188 1322.85107421875 C 1331.144287109375 1320.346557617188 1331.694702148438 1317.31396484375 1331.23388671875 1314.3115234375 Z\">
\t\t\t\t\t</path>
\t\t\t\t</svg>
\t\t\t\t<img id=\"img_gestion_produit_la\" src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Pimage/img_gestion_produit_la.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Pimage/img_gestion_produit_la.png 1x, Pimage/img_gestion_produit_la@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t\t
\t\t\t</div>

\t\t\t<div id=\"table_lb\">

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"container col-md-12\">
\t\t\t\t\t\t<div class=\"card bg-transparent text-white\">
\t\t\t\t\t\t\t<div class=\"card-header text-center bg-primary text-white\">Liste des produits</div>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t\t\t\t<thead class=\"thead-dark text-center text-white\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Identifiant</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Libelle</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Quantite</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Categorie</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" colspan=\"2\">Action</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 196, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 197
            echo "\t\t\t\t\t\t\t\t\t<tr class=\"text-center text-white\">
\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 198), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 199
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "libelle", [], "any", false, false, false, 199), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 200
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "qtStock", [], "any", false, false, false, 200), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 201
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "categorie", [], "any", false, false, false, 201), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-th-list\"> <a class=\"btn btn-outline-warning\" href=\"";
            // line 203
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 203)]), "html", null, true);
            echo "\">Edit</a></i>&emsp;
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"> <a class=\"btn btn-outline-danger\" href=\"";
            // line 204
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 204)]), "html", null, true);
            echo "\">Supr</a></i>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
            // line 207
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            // line 208
            echo "\t\t\t\t\t\t\t\t\t\t";
            // line 209
            echo "\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-footer text-dark\">LPGL</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div id=\"Formulaire_Produit_l\">
\t\t\t\t<svg class=\"Rectangle_Formulaire_l\">
\t\t\t\t\t<rect id=\"Rectangle_Formulaire_l\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"527\" height=\"507\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<svg class=\"Rectangle_Form_ma\">
\t\t\t\t\t<linearGradient id=\"Rectangle_Form_ma\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#0c1318\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#364753\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectangle_Form_ma\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"527\" height=\"51\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Formulaire_Produit_ma\">
\t\t\t\t\t<span>Formulaire Produit</span>
\t\t\t\t</div><br><br>
\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"container col-md-12\">    
\t\t\t\t\t\t<div class=\"card bg-transparent text-white\"><br><br>
\t\t\t\t\t\t\t<div class=\"card-body\"><br><br>
\t\t\t\t\t\t\t\t";
        // line 240
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), 'form');
        echo "
\t\t\t\t\t\t\t</div><br><br><br><br>
\t\t\t\t\t\t\t<div class=\"card-footer\">LPGL</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"footer_mi\">
\t\t\t<svg class=\"Rectangle_footer_mj\">
\t\t\t\t<rect id=\"Rectangle_footer_mj\" rx=\"45\" ry=\"45\" x=\"0\" y=\"0\" width=\"1620\" height=\"112\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<svg class=\"tel_mk\" viewBox=\"970.087 2058.08 116.825 94.839\">
\t\t\t\t<path id=\"tel_mk\" d=\"M 1068.492431640625 2058.080078125 C 1068.492431640625 2058.080078125 988.50048828125 2058.080078125 988.50048828125 2058.080078125 C 978.3338012695312 2058.080078125 970.08740234375 2064.756591796875 970.08740234375 2073.024658203125 C 970.08740234375 2073.024658203125 970.08740234375 2137.974609375 970.08740234375 2137.974609375 C 970.08740234375 2146.2294921875 978.3338012695312 2152.919189453125 988.50048828125 2152.919189453125 C 988.50048828125 2152.919189453125 1068.492431640625 2152.919189453125 1068.492431640625 2152.919189453125 C 1078.666137695312 2152.919189453125 1086.91259765625 2146.2294921875 1086.91259765625 2137.974609375 C 1086.91259765625 2137.974609375 1086.91259765625 2073.024658203125 1086.91259765625 2073.024658203125 C 1086.91259765625 2064.756591796875 1078.666137695312 2058.080078125 1068.492431640625 2058.080078125 Z M 1026.7373046875 2067.976318359375 L 1028.017700195312 2084.335205078125 L 1023.366882324219 2085.425537109375 L 1021.1298828125 2067.53759765625 L 1026.7373046875 2067.976318359375 Z M 1046.7080078125 2142.033447265625 C 1046.7080078125 2142.033447265625 1026.30517578125 2141.6953125 1026.30517578125 2141.6953125 C 992.6038818359375 2112.43310546875 998.0960083007812 2078.3984375 998.0960083007812 2078.3984375 L 1013.446716308594 2067.687744140625 L 1016.470275878906 2067.687744140625 L 1018.930908203125 2086.40234375 L 1012.212890625 2090.02294921875 L 1029.391357421875 2126.56298828125 L 1036.125122070312 2124.822021484375 L 1049.038208007812 2140.44287109375 L 1046.7080078125 2142.033447265625 Z M 1053.188354492188 2138.551025390625 L 1039.527221679688 2123.181396484375 L 1044.702514648438 2121.376708984375 L 1056.613159179688 2135.770263671875 L 1053.188354492188 2138.551025390625 Z\">
\t\t\t\t</path>
\t\t\t</svg>
\t\t\t<img id=\"whatsapp_ml\" src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Pimage/whatsapp_ml.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Pimage/whatsapp_ml.png 1x, Pimage/whatsapp_ml@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<img id=\"messenger_mm\" src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Pimage/messenger_mm.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Pimage/messenger_mm.png 1x, Pimage/messenger_mm@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<img id=\"insta_mn\" src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Pimage/insta_mn.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Pimage/insta_mn.png 1x, Pimage/insta_mn@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<img id=\"youtube_mo\" src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Pimage/youtube_mo.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Pimage/youtube_mo.png 1x, Pimage/youtube_mo@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<div id=\"Mahamadou_Issagha_Diop_mp\">
\t\t\t\t<span>Mahamadou Issagha Diop</span>
\t\t\t</div>
\t\t\t<img id=\"copyright_mq\" src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Pimage/copyright_mq.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Pimage/copyright_mq.png 1x, Pimage/copyright_mq@2x.png 2x"), "html", null, true);
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
        return "produit/produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  440 => 268,  430 => 263,  423 => 261,  416 => 259,  409 => 257,  389 => 240,  358 => 211,  351 => 209,  349 => 208,  347 => 207,  342 => 204,  338 => 203,  333 => 201,  329 => 200,  325 => 199,  321 => 198,  318 => 197,  314 => 196,  288 => 175,  244 => 136,  236 => 131,  215 => 115,  207 => 110,  174 => 82,  167 => 80,  154 => 71,  146 => 64,  138 => 62,  136 => 61,  123 => 51,  114 => 45,  105 => 39,  98 => 37,  78 => 22,  71 => 18,  67 => 17,  58 => 11,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\"/>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>Produit</title>
<link rel=\"stylesheet\" type=\"text/css\" id=\"applicationStylesheet\" href=\"{{ asset('Prototype/Pcss/Produit.css') }}\"/>
<link href=\"https://fonts.googleapis.com/css?family=Quicksand&display=swap\" rel=\"stylesheet\">
<!-- Custom fonts for this template-->
    <link href=\"{{ asset('template/sb_bootstrap/vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"{{ asset('template/sb_bootstrap/css/sb-admin-2.min.css') }}\"rel=\"stylesheet\">
<script id=\"applicationScript\" type=\"text/javascript\" src=\"{{ asset('Prototype/Pscript/Produit.js') }}\"></script>
</head>
<body>
<div id=\"Produit\">
\t<img id=\"Calque_1_i\" src=\"{{ asset('Prototype/Pimage/Calque_1_i.png') }}\" srcset=\"{{ asset('Prototype/Pimage/Calque_1_i.png 1x, Pimage/Calque_1_i@2x.png 2x') }}\">
\t\t
\t<div id=\"Page_produit_jz\">
\t\t<div id=\"menu_j\">
\t\t\t<svg class=\"Rectangle_1_ka\">
\t\t\t\t<linearGradient id=\"Rectangle_1_ka\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t<stop offset=\"0\" stop-color=\"#28343b\" stop-opacity=\"1\"></stop>
\t\t\t\t\t<stop offset=\"1\" stop-color=\"#004a95\" stop-opacity=\"1\"></stop>
\t\t\t\t</linearGradient>
\t\t\t\t<rect id=\"Rectangle_1_ka\" rx=\"75\" ry=\"75\" x=\"0\" y=\"0\" width=\"1620\" height=\"144\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Logo_j\">
\t\t\t\t<span>Logo</span>
\t\t\t</div>
\t\t\t<img id=\"logo4-b_j\" src=\"{{ asset('Prototype/Pimage/logo4-b_j.png') }}\" srcset=\"{{ asset('Prototype/Pimage/logo4-b_j.png 1x, Pimage/logo4-b_j@2x.png 2x') }}\">
\t\t\t
\t\t\t<a class=\"collapse-item\" href=\"{{ path('accueil')}}\">
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Acceuil_j\">
\t\t\t\t<span>Acceuil</span>
\t\t\t</div>
\t\t\t</a>
\t\t\t
\t\t\t<a class=\"collapse-item\" href=\"{{ path('produit_liste')}}\">
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Produit_j\">
\t\t\t\t<span>Produit</span>
\t\t\t</div>
\t\t\t</a>
\t\t\t
\t\t\t<a class=\"collapse-item\" href=\"{{ path('categorie_liste')}}\">
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Categorie_j\">
\t\t\t\t<span>Categorie</span>
\t\t\t</div>
\t\t\t</a>
\t\t\t<svg class=\"Rectangle_Profil_kc\">
\t\t\t\t<rect id=\"Rectangle_Profil_kc\" rx=\"20\" ry=\"20\" x=\"-5\" y=\"-10\" width=\"180\" height=\"100\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Profil_kd\">
\t\t\t\t{% if app.user %}
\t\t\t\t<span>{{ app.user.nom }}<br>{{ app.user.prenom }}</span>
\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<svg class=\"Rectangle_Log_out_ke\">
\t\t\t\t<rect onclick=\"application.goToTargetView(event)\" id=\"Rectangle_Log_out_ke\" rx=\"20\" ry=\"20\" x=\"0\" y=\"0\" width=\"199\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>

\t\t\t{# button Logout #}
\t\t\t<a href=\"{{path('app_logout')}}\">
\t\t\t<div id=\"Log_out__kf\">
\t\t\t\t<span>Log out</span><br/>
\t\t\t</div>
\t\t\t</a>

\t\t</div>
\t\t<div id=\"Produit_body_kg\">
\t\t\t<div id=\"Screenshot_2022-05-31_132950_kh\">
\t\t\t\t<img id=\"Screenshot_2022-05-31_132950_ki\" src=\"{{ asset('Prototype/Pimage/Screenshot_2022-05-31_132950_ki.png') }}\" srcset=\"{{ asset('Prototype/Pimage/Screenshot_2022-05-31_132950_ki.png 1x, Pimage/Screenshot_2022-05-31_132950_ki@2x.png 2x') }}\">
\t\t\t\t\t
\t\t\t\t<img id=\"Clip_kj\" src=\"{{ asset('Prototype/Pimage/Clip_kj.png') }}\" srcset=\"{{ asset('Prototype/Pimage/Clip_kj.png 1x, Pimage/Clip_kj@2x.png 2x') }}\">
\t\t\t\t\t
\t\t\t\t</svg>
\t\t\t</div>
\t\t\t<div id=\"sous_menu_kk\">
\t\t\t\t<svg class=\"Rectanglegauche_sous_menu_km\">
\t\t\t\t\t<linearGradient id=\"Rectanglegauche_sous_menu_km\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#192530\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#1b606f\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectanglegauche_sous_menu_km\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"254\" height=\"659\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<svg class=\"Rectangle_entree_kn\">
\t\t\t\t\t<rect onclick=\"application.goToTargetView(event)\" id=\"Rectangle_entree_kn\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"228\" height=\"53\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Forme_entree_ko\">
\t\t\t\t\t<svg class=\"Forme_entree_kp\" viewBox=\"352.999 1632.998 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Forme_entree_kp\" d=\"M 352.9988098144531 1683.071533203125 C 352.9988098144531 1680.624877929688 352.9988098144531 1637.675415039062 352.9988098144531 1635.987548828125 C 352.9988098144531 1633.798583984375 355.4229125976562 1632.169677734375 357.8183898925781 1633.4501953125 C 359.7384948730469 1634.4755859375 398.1080932617188 1655.174926757812 401.3829040527344 1656.944946289062 C 403.53369140625 1658.108154296875 403.4974060058594 1660.881225585938 401.3829040527344 1662.04541015625 C 399.0256042480469 1663.34423828125 360.5094909667969 1684.148681640625 357.72021484375 1685.593872070312 C 355.6777954101562 1686.65380859375 352.9988098144531 1685.483154296875 352.9988098144531 1683.071533203125 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"Stroke_Effect_kq\" viewBox=\"352.999 1632.998 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Stroke_Effect_kq\" d=\"M 352.9988098144531 1683.071533203125 C 352.9988098144531 1680.624877929688 352.9988098144531 1637.675415039062 352.9988098144531 1635.987548828125 C 352.9988098144531 1633.798583984375 355.4229125976562 1632.169677734375 357.8183898925781 1633.4501953125 C 359.7384948730469 1634.4755859375 398.1080932617188 1655.174926757812 401.3829040527344 1656.944946289062 C 403.53369140625 1658.108154296875 403.4974060058594 1660.881225585938 401.3829040527344 1662.04541015625 C 399.0256042480469 1663.34423828125 360.5094909667969 1684.148681640625 357.72021484375 1685.593872070312 C 355.6777954101562 1686.65380859375 352.9988098144531 1685.483154296875 352.9988098144531 1683.071533203125 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('entree_liste')}}\">
\t\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Entree_kr\">
\t\t\t\t\t<span>Entree</span>
\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t<img id=\"img_entree_ks\" src=\"{{ asset('Prototype/Pimage/img_entree_ks.png') }}\" srcset=\"{{ asset('Prototype/Pimage/img_entree_ks.png 1x, Pimage/img_entree_ks@2x.png 2x') }}\">
\t\t\t\t\t
\t\t\t\t<svg class=\"Rectangle_sortie_kt\">
\t\t\t\t\t<rect onclick=\"application.goToTargetView(event)\" id=\"Rectangle_sortie_kt\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"228\" height=\"53\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Forme_sortie_ku\">
\t\t\t\t\t<svg class=\"Forme_sortie_kv\" viewBox=\"352.999 1936.998 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Forme_sortie_kv\" d=\"M 352.9988098144531 1987.071411132812 C 352.9988098144531 1984.624267578125 352.9988098144531 1941.675659179688 352.9988098144531 1939.987426757812 C 352.9988098144531 1937.79833984375 355.4229125976562 1936.169555664062 357.8183898925781 1937.450439453125 C 359.7384948730469 1938.475830078125 398.1080932617188 1959.174682617188 401.3829040527344 1960.9453125 C 403.53369140625 1962.108154296875 403.4974060058594 1964.881469726562 401.3829040527344 1966.045654296875 C 399.0256042480469 1967.343994140625 360.5094909667969 1988.148559570312 357.72021484375 1989.59375 C 355.6777954101562 1990.654052734375 352.9988098144531 1989.48291015625 352.9988098144531 1987.071411132812 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"Stroke_Effect_kw\" viewBox=\"352.999 1936.998 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Stroke_Effect_kw\" d=\"M 352.9988098144531 1987.071411132812 C 352.9988098144531 1984.624267578125 352.9988098144531 1941.675659179688 352.9988098144531 1939.987426757812 C 352.9988098144531 1937.79833984375 355.4229125976562 1936.169555664062 357.8183898925781 1937.450439453125 C 359.7384948730469 1938.475830078125 398.1080932617188 1959.174682617188 401.3829040527344 1960.9453125 C 403.53369140625 1962.108154296875 403.4974060058594 1964.881469726562 401.3829040527344 1966.045654296875 C 399.0256042480469 1967.343994140625 360.5094909667969 1988.148559570312 357.72021484375 1989.59375 C 355.6777954101562 1990.654052734375 352.9988098144531 1989.48291015625 352.9988098144531 1987.071411132812 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('sortie_liste')}}\">
\t\t\t\t<div id=\"Sortie_kx\">
\t\t\t\t\t<span>Sortie</span>
\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t<img id=\"imd_sortie_ky\" src=\"{{ asset('Prototype/Pimage/imd_sortie_ky.png') }}\" srcset=\"{{ asset('Prototype/Pimage/imd_sortie_ky.png 1x, Pimage/imd_sortie_ky@2x.png 2x') }}\">
\t\t\t\t\t
\t\t\t</div>
\t\t\t<div id=\"User_kz\">
\t\t\t\t<svg class=\"Rectangle_User_info_la\">
\t\t\t\t\t<linearGradient id=\"Rectangle_User_info_la\" spreadMethod=\"pad\" x1=\"0.097\" x2=\"0.903\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#19252f\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#20494d\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectangle_User_info_la\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"254\" height=\"160\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"User_Name_k\">
\t\t\t\t\t<span>User</span><br/><span>Name</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"en_tte__k\">
\t\t\t\t<svg class=\"Rectangle_haut_en_tte__la\">
\t\t\t\t\t<linearGradient id=\"Rectangle_haut_en_tte__la\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#18202b\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#214f53\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectangle_haut_en_tte__la\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"1367\" height=\"160\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<svg class=\"Rectangle_3_k\">
\t\t\t\t\t<rect id=\"Rectangle_3_k\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"527\" height=\"54\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Recherche_k\">
\t\t\t\t\t<span>Recherche</span>
\t\t\t\t</div>
\t\t\t\t<div id=\"Gestion_des_Produits_k\">
\t\t\t\t\t<span>Gestion des Produits</span>
\t\t\t\t</div>
\t\t\t\t<svg class=\"Forme_1_k\" viewBox=\"1307.998 1299.994 47.003 45.004\">
\t\t\t\t\t<path id=\"Forme_1_k\" d=\"M 1354.325805664062 1343.05810546875 C 1353.137329101562 1345.100830078125 1350.773193359375 1345.613647460938 1349.053100585938 1344.197509765625 C 1349.053100585938 1344.197509765625 1333.47705078125 1331.398193359375 1333.47705078125 1331.398193359375 C 1332.374389648438 1330.494873046875 1331.8037109375 1329.022094726562 1331.846069335938 1327.54150390625 C 1329.839721679688 1330.096557617188 1327.204223632812 1331.812866210938 1324.251953125 1332.450073242188 C 1320.625854492188 1333.235595703125 1316.963745117188 1332.296264648438 1313.941040039062 1329.812255859375 C 1310.916748046875 1327.328735351562 1308.887084960938 1323.592651367188 1308.226318359375 1319.289916992188 C 1307.565185546875 1314.983764648438 1308.353881835938 1310.632934570312 1310.44775390625 1307.040283203125 C 1314.7724609375 1299.622436523438 1323.37451171875 1297.762451171875 1329.62451171875 1302.895629882812 C 1335.297119140625 1307.559814453125 1337.110107421875 1316.408935546875 1334.161376953125 1323.551513671875 C 1335.3134765625 1322.976440429688 1336.679809570312 1323.088623046875 1337.7880859375 1323.998046875 C 1337.7880859375 1323.998046875 1353.368530273438 1336.796875 1353.368530273438 1336.796875 C 1355.088623046875 1338.213500976562 1355.518676757812 1341.015502929688 1354.325805664062 1343.05810546875 Z M 1331.23388671875 1314.3115234375 C 1330.774169921875 1311.310791015625 1329.35986328125 1308.705200195312 1327.251342773438 1306.973999023438 C 1322.895385742188 1303.39208984375 1316.89501953125 1304.687255859375 1313.876586914062 1309.859619140625 C 1310.862060546875 1315.0380859375 1311.9541015625 1322.161010742188 1316.31103515625 1325.737670898438 C 1320.667358398438 1329.319946289062 1326.666748046875 1328.025390625 1329.684448242188 1322.85107421875 C 1331.144287109375 1320.346557617188 1331.694702148438 1317.31396484375 1331.23388671875 1314.3115234375 Z\">
\t\t\t\t\t</path>
\t\t\t\t</svg>
\t\t\t\t<img id=\"img_gestion_produit_la\" src=\"{{ asset('Prototype/Pimage/img_gestion_produit_la.png') }}\" srcset=\"{{ asset('Prototype/Pimage/img_gestion_produit_la.png 1x, Pimage/img_gestion_produit_la@2x.png 2x') }}\">
\t\t\t\t\t
\t\t\t</div>

\t\t\t<div id=\"table_lb\">

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"container col-md-12\">
\t\t\t\t\t\t<div class=\"card bg-transparent text-white\">
\t\t\t\t\t\t\t<div class=\"card-header text-center bg-primary text-white\">Liste des produits</div>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t\t\t\t<thead class=\"thead-dark text-center text-white\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Identifiant</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Libelle</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Quantite</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Categorie</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" colspan=\"2\">Action</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t{% for p in produits %}
\t\t\t\t\t\t\t\t\t<tr class=\"text-center text-white\">
\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">{{ p.id }}</th>
\t\t\t\t\t\t\t\t\t\t<td>{{ p.libelle }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ p.qtStock }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ p.categorie }}</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-th-list\"> <a class=\"btn btn-outline-warning\" href=\"{{ path('produit_edit', {'id': p.id}) }}\">Edit</a></i>&emsp;
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"> <a class=\"btn btn-outline-danger\" href=\"{{ path('produit_delete', {'id': p.id}) }}\">Supr</a></i>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t{# <td class=\"btn btn-outline-danger\"> #}
\t\t\t\t\t\t\t\t\t\t\t{# <i class=\"fas fa-trash\"> <a href=\"{{ path('categorie_delete', {'id': c.id}) }}\">Supr</a></i> #}
\t\t\t\t\t\t\t\t\t\t{# </td> #}
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-footer text-dark\">LPGL</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div id=\"Formulaire_Produit_l\">
\t\t\t\t<svg class=\"Rectangle_Formulaire_l\">
\t\t\t\t\t<rect id=\"Rectangle_Formulaire_l\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"527\" height=\"507\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<svg class=\"Rectangle_Form_ma\">
\t\t\t\t\t<linearGradient id=\"Rectangle_Form_ma\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#0c1318\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#364753\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectangle_Form_ma\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"527\" height=\"51\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Formulaire_Produit_ma\">
\t\t\t\t\t<span>Formulaire Produit</span>
\t\t\t\t</div><br><br>
\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"container col-md-12\">    
\t\t\t\t\t\t<div class=\"card bg-transparent text-white\"><br><br>
\t\t\t\t\t\t\t<div class=\"card-body\"><br><br>
\t\t\t\t\t\t\t\t{{ form(form) }}
\t\t\t\t\t\t\t</div><br><br><br><br>
\t\t\t\t\t\t\t<div class=\"card-footer\">LPGL</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"footer_mi\">
\t\t\t<svg class=\"Rectangle_footer_mj\">
\t\t\t\t<rect id=\"Rectangle_footer_mj\" rx=\"45\" ry=\"45\" x=\"0\" y=\"0\" width=\"1620\" height=\"112\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<svg class=\"tel_mk\" viewBox=\"970.087 2058.08 116.825 94.839\">
\t\t\t\t<path id=\"tel_mk\" d=\"M 1068.492431640625 2058.080078125 C 1068.492431640625 2058.080078125 988.50048828125 2058.080078125 988.50048828125 2058.080078125 C 978.3338012695312 2058.080078125 970.08740234375 2064.756591796875 970.08740234375 2073.024658203125 C 970.08740234375 2073.024658203125 970.08740234375 2137.974609375 970.08740234375 2137.974609375 C 970.08740234375 2146.2294921875 978.3338012695312 2152.919189453125 988.50048828125 2152.919189453125 C 988.50048828125 2152.919189453125 1068.492431640625 2152.919189453125 1068.492431640625 2152.919189453125 C 1078.666137695312 2152.919189453125 1086.91259765625 2146.2294921875 1086.91259765625 2137.974609375 C 1086.91259765625 2137.974609375 1086.91259765625 2073.024658203125 1086.91259765625 2073.024658203125 C 1086.91259765625 2064.756591796875 1078.666137695312 2058.080078125 1068.492431640625 2058.080078125 Z M 1026.7373046875 2067.976318359375 L 1028.017700195312 2084.335205078125 L 1023.366882324219 2085.425537109375 L 1021.1298828125 2067.53759765625 L 1026.7373046875 2067.976318359375 Z M 1046.7080078125 2142.033447265625 C 1046.7080078125 2142.033447265625 1026.30517578125 2141.6953125 1026.30517578125 2141.6953125 C 992.6038818359375 2112.43310546875 998.0960083007812 2078.3984375 998.0960083007812 2078.3984375 L 1013.446716308594 2067.687744140625 L 1016.470275878906 2067.687744140625 L 1018.930908203125 2086.40234375 L 1012.212890625 2090.02294921875 L 1029.391357421875 2126.56298828125 L 1036.125122070312 2124.822021484375 L 1049.038208007812 2140.44287109375 L 1046.7080078125 2142.033447265625 Z M 1053.188354492188 2138.551025390625 L 1039.527221679688 2123.181396484375 L 1044.702514648438 2121.376708984375 L 1056.613159179688 2135.770263671875 L 1053.188354492188 2138.551025390625 Z\">
\t\t\t\t</path>
\t\t\t</svg>
\t\t\t<img id=\"whatsapp_ml\" src=\"{{ asset('Prototype/Pimage/whatsapp_ml.png') }}\" srcset=\"{{ asset('Prototype/Pimage/whatsapp_ml.png 1x, Pimage/whatsapp_ml@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"messenger_mm\" src=\"{{ asset('Prototype/Pimage/messenger_mm.png') }}\" srcset=\"{{ asset('Prototype/Pimage/messenger_mm.png 1x, Pimage/messenger_mm@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"insta_mn\" src=\"{{ asset('Prototype/Pimage/insta_mn.png') }}\" srcset=\"{{ asset('Prototype/Pimage/insta_mn.png 1x, Pimage/insta_mn@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"youtube_mo\" src=\"{{ asset('Prototype/Pimage/youtube_mo.png') }}\" srcset=\"{{ asset('Prototype/Pimage/youtube_mo.png 1x, Pimage/youtube_mo@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<div id=\"Mahamadou_Issagha_Diop_mp\">
\t\t\t\t<span>Mahamadou Issagha Diop</span>
\t\t\t</div>
\t\t\t<img id=\"copyright_mq\" src=\"{{ asset('Prototype/Pimage/copyright_mq.png') }}\" srcset=\"{{ asset('Prototype/Pimage/copyright_mq.png 1x, Pimage/copyright_mq@2x.png 2x') }}\">
\t\t\t\t
\t\t</div>
\t</div>
</div>
</body>
</html>", "produit/produit.html.twig", "C:\\xampp\\htdocs\\semestre2\\Symfony\\appstocksymfony\\templates\\produit\\produit.html.twig");
    }
}
