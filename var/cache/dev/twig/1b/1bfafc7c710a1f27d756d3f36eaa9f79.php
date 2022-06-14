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

/* entree/entree.html.twig */
class __TwigTemplate_9e36bbadf43b6fdc6022e6c2c2b223b6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entree/entree.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entree/entree.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\"/>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>Entree</title>
<link rel=\"stylesheet\" type=\"text/css\" id=\"applicationStylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Ecss/Entree.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Escript/Entree.js"), "html", null, true);
        echo "\"></script>
</head>
<body>
<div id=\"Entree\">
\t<img id=\"Calque_1_wu\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Eimage/Calque_1_wu.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Eimage/Calque_1_wu.png 1x, Eimage/Calque_1_wu@2x.png 2x"), "html", null, true);
        echo "\">

\t<div id=\"Page_entree_zn\">
\t\t<div id=\"menu_zo\">
\t\t\t<svg class=\"Rectangle_1_zq\">
\t\t\t\t<linearGradient id=\"Rectangle_1_zq\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t<stop offset=\"0\" stop-color=\"#28343b\" stop-opacity=\"1\"></stop>
\t\t\t\t\t<stop offset=\"1\" stop-color=\"#004a95\" stop-opacity=\"1\"></stop>
\t\t\t\t</linearGradient>
\t\t\t\t<rect id=\"Rectangle_1_zq\" rx=\"75\" ry=\"75\" x=\"0\" y=\"0\" width=\"1620\" height=\"144\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Logo_zr\">
\t\t\t\t<span>Logo</span>
\t\t\t</div>
\t\t\t<img id=\"logo4-b_zs\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Eimage/logo4-b_zs.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Eimage/logo4-b_zs.png 1x, Eimage/logo4-b_zs@2x.png 2x"), "html", null, true);
        echo "\">

\t\t\t<a class=\"collapse-item\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">\t\t
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Acceuil_zt\">
\t\t\t\t<span>Acceuil</span>
\t\t\t</div>
\t\t\t</a>

\t\t\t<a class=\"collapse-item\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_liste");
        echo "\">\t
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Produit_zu\">
\t\t\t\t<span>Produit</span>
\t\t\t</div>
\t\t\t</a>

\t\t\t<a class=\"collapse-item\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_liste");
        echo "\">
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Categorie_zv\">
\t\t\t\t<span>Categorie</span>
\t\t\t</div>
\t\t\t</a>
\t\t\t
\t\t\t";
        // line 71
        echo "\t\t\t<svg class=\"Rectangle_Profil_z\">
\t\t\t\t<rect id=\"Rectangle_Profil_z\" rx=\"20\" ry=\"20\" x=\"-5\" y=\"-10\" width=\"180\" height=\"100\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Profil_z\">
\t\t\t";
        // line 76
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76)) {
            // line 77
            echo "\t\t\t\t<span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "nom", [], "any", false, false, false, 77), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "prenom", [], "any", false, false, false, 77), "html", null, true);
            echo "</span>
\t\t\t";
        }
        // line 79
        echo "\t\t\t</div>
\t\t\t<svg class=\"Rectangle_Log_out_z\">
\t\t\t\t<rect onclick=\"application.goToTargetView(event)\" id=\"Rectangle_Log_out_z\" rx=\"20\" ry=\"20\" x=\"0\" y=\"0\" width=\"199\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t";
        // line 85
        echo "\t\t\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
\t\t\t<div id=\"Log_out__z\">
\t\t\t\t<span>Log out</span><br/>
\t\t\t</div>
\t\t
\t\t</div>
\t\t<div id=\"Entree_body_z\">
\t\t\t<div id=\"Screenshot_2022-05-31_132950_z\">
\t\t\t\t<img id=\"Screenshot_2022-05-31_132950_a\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Eimage/Screenshot_2022-05-31_132950_a.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Eimage/Screenshot_2022-05-31_132950_a.png 1x, Eimage/Screenshot_2022-05-31_132950_a@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t\t
\t\t\t\t<img id=\"Clip_z\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Eimage/Clip_z.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Eimage/Clip_z.png 1x, Eimage/Clip_z@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t\t
\t\t\t\t</svg>
\t\t\t</div>
\t\t\t<div id=\"sous_menu_z\">
\t\t\t\t<svg class=\"Rectanglegauche_sous_menu_a\">
\t\t\t\t\t<linearGradient id=\"Rectanglegauche_sous_menu_a\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#192530\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#1b606f\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectanglegauche_sous_menu_a\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"254\" height=\"659\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<svg class=\"Rectangle_entree_b\">
\t\t\t\t\t<rect id=\"Rectangle_entree_b\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"228\" height=\"53\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Forme_entree_c\">
\t\t\t\t\t<svg class=\"Forme_entree_d\" viewBox=\"352.999 2712.999 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Forme_entree_d\" d=\"M 352.9988098144531 2763.07177734375 C 352.9988098144531 2760.624755859375 352.9988098144531 2717.675537109375 352.9988098144531 2715.9873046875 C 352.9988098144531 2713.79833984375 355.4229125976562 2712.169921875 357.8183898925781 2713.450439453125 C 359.7384948730469 2714.475830078125 398.1080932617188 2735.175048828125 401.3829040527344 2736.9453125 C 403.53369140625 2738.1083984375 403.4974060058594 2740.88134765625 401.3829040527344 2742.045654296875 C 399.0256042480469 2743.343994140625 360.5094909667969 2764.1484375 357.72021484375 2765.59375 C 355.6777954101562 2766.654052734375 352.9988098144531 2765.48291015625 352.9988098144531 2763.07177734375 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"Stroke_Effect_e\" viewBox=\"352.999 2712.999 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Stroke_Effect_e\" d=\"M 352.9988098144531 2763.07177734375 C 352.9988098144531 2760.624755859375 352.9988098144531 2717.675537109375 352.9988098144531 2715.9873046875 C 352.9988098144531 2713.79833984375 355.4229125976562 2712.169921875 357.8183898925781 2713.450439453125 C 359.7384948730469 2714.475830078125 398.1080932617188 2735.175048828125 401.3829040527344 2736.9453125 C 403.53369140625 2738.1083984375 403.4974060058594 2740.88134765625 401.3829040527344 2742.045654296875 C 399.0256042480469 2743.343994140625 360.5094909667969 2764.1484375 357.72021484375 2765.59375 C 355.6777954101562 2766.654052734375 352.9988098144531 2765.48291015625 352.9988098144531 2763.07177734375 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t</div>

\t\t\t\t<a class=\"collapse-item\" href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entree_liste");
        echo "\">
\t\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Entree_f\">
\t\t\t\t\t<span>Entree</span>
\t\t\t\t</div>
\t\t\t\t</a>

\t\t\t\t<img id=\"img_entree_h\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Eimage/img_entree_h.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Eimage/img_entree_h.png 1x, Eimage/img_entree_h@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t\t
\t\t\t\t<svg class=\"Rectangle_sortie_h\">
\t\t\t\t\t<rect onclick=\"application.goToTargetView(event)\" id=\"Rectangle_sortie_h\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"228\" height=\"53\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Forme_sortie_i\">
\t\t\t\t\t<svg class=\"Forme_sortie_j\" viewBox=\"352.999 3016.999 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Forme_sortie_j\" d=\"M 352.9988098144531 3067.071533203125 C 352.9988098144531 3064.62451171875 352.9988098144531 3021.67529296875 352.9988098144531 3019.987548828125 C 352.9988098144531 3017.798583984375 355.4229125976562 3016.169677734375 357.8183898925781 3017.45068359375 C 359.7384948730469 3018.4755859375 398.1080932617188 3039.1748046875 401.3829040527344 3040.945068359375 C 403.53369140625 3042.1083984375 403.4974060058594 3044.88134765625 401.3829040527344 3046.04541015625 C 399.0256042480469 3047.34375 360.5094909667969 3068.148681640625 357.72021484375 3069.593994140625 C 355.6777954101562 3070.65380859375 352.9988098144531 3069.483154296875 352.9988098144531 3067.071533203125 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"Stroke_Effect_k\" viewBox=\"352.999 3016.999 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Stroke_Effect_k\" d=\"M 352.9988098144531 3067.071533203125 C 352.9988098144531 3064.62451171875 352.9988098144531 3021.67529296875 352.9988098144531 3019.987548828125 C 352.9988098144531 3017.798583984375 355.4229125976562 3016.169677734375 357.8183898925781 3017.45068359375 C 359.7384948730469 3018.4755859375 398.1080932617188 3039.1748046875 401.3829040527344 3040.945068359375 C 403.53369140625 3042.1083984375 403.4974060058594 3044.88134765625 401.3829040527344 3046.04541015625 C 399.0256042480469 3047.34375 360.5094909667969 3068.148681640625 357.72021484375 3069.593994140625 C 355.6777954101562 3070.65380859375 352.9988098144531 3069.483154296875 352.9988098144531 3067.071533203125 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t</div>

\t\t\t\t<a class=\"collapse-item\" href=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_liste");
        echo "\">
\t\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Sortie_l\">
\t\t\t\t\t<span>Sortie</span>
\t\t\t\t</div>
\t\t\t\t</a>

\t\t\t\t<img id=\"imd_sortie_m\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Eimage/imd_sortie_m.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Eimage/imd_sortie_m.png 1x, Eimage/imd_sortie_m@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t\t
\t\t\t</div>
\t\t\t<div id=\"User_n\">
\t\t\t\t<svg class=\"Rectangle_User_info_p\">
\t\t\t\t\t<linearGradient id=\"Rectangle_User_info_p\" spreadMethod=\"pad\" x1=\"0.097\" x2=\"0.903\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#19252f\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#20494d\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectangle_User_info_p\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"254\" height=\"160\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"User_Name_q\">
\t\t\t\t\t<span>User</span><br/><span>Name</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"en_tte__r\">
\t\t\t\t<svg class=\"Rectangle_haut_en_tte__t\">
\t\t\t\t\t<linearGradient id=\"Rectangle_haut_en_tte__t\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#18202b\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#214f53\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectangle_haut_en_tte__t\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"1367\" height=\"160\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<svg class=\"Rectangle_3_u\">
\t\t\t\t\t<rect id=\"Rectangle_3_u\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"527\" height=\"54\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Recherche_v\">
\t\t\t\t\t<span>Recherche</span>
\t\t\t\t</div>
\t\t\t\t<div id=\"Gestion_des_Produits_w\">
\t\t\t\t\t<span>Gestion des Produits</span>
\t\t\t\t</div>
\t\t\t\t<svg class=\"Forme_1_y\" viewBox=\"1307.998 2379.994 47.003 45.004\">
\t\t\t\t\t<path id=\"Forme_1_y\" d=\"M 1354.325805664062 2423.057861328125 C 1353.137329101562 2425.1005859375 1350.773193359375 2425.614013671875 1349.053100585938 2424.197265625 C 1349.053100585938 2424.197265625 1333.47705078125 2411.3984375 1333.47705078125 2411.3984375 C 1332.374389648438 2410.4951171875 1331.8037109375 2409.02197265625 1331.846069335938 2407.541748046875 C 1329.839721679688 2410.09619140625 1327.204223632812 2411.81298828125 1324.251953125 2412.450439453125 C 1320.625854492188 2413.2353515625 1316.963745117188 2412.29638671875 1313.941040039062 2409.8125 C 1310.916748046875 2407.32861328125 1308.887084960938 2403.5927734375 1308.226318359375 2399.28955078125 C 1307.565185546875 2394.98388671875 1308.353881835938 2390.633056640625 1310.44775390625 2387.0400390625 C 1314.7724609375 2379.6220703125 1323.37451171875 2377.76220703125 1329.62451171875 2382.895751953125 C 1335.297119140625 2387.5595703125 1337.110107421875 2396.40869140625 1334.161376953125 2403.55126953125 C 1335.3134765625 2402.97607421875 1336.679809570312 2403.0888671875 1337.7880859375 2403.998291015625 C 1337.7880859375 2403.998291015625 1353.368530273438 2416.797119140625 1353.368530273438 2416.797119140625 C 1355.088623046875 2418.213134765625 1355.518676757812 2421.015625 1354.325805664062 2423.057861328125 Z M 1331.23388671875 2394.311767578125 C 1330.774169921875 2391.310546875 1329.35986328125 2388.70556640625 1327.251342773438 2386.97412109375 C 1322.895385742188 2383.392333984375 1316.89501953125 2384.6875 1313.876586914062 2389.85986328125 C 1310.862060546875 2395.038330078125 1311.9541015625 2402.160888671875 1316.31103515625 2405.73779296875 C 1320.667358398438 2409.319580078125 1326.666748046875 2408.025146484375 1329.684448242188 2402.850830078125 C 1331.144287109375 2400.3466796875 1331.694702148438 2397.313720703125 1331.23388671875 2394.311767578125 Z\">
\t\t\t\t\t</path>
\t\t\t\t</svg>
\t\t\t\t<img id=\"img_gestion_produit_y\" src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Eimage/img_gestion_produit_y.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Eimage/img_gestion_produit_y.png 1x, Eimage/img_gestion_produit_y@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t\t
\t\t\t</div>
\t\t\t";
        // line 272
        echo "\t\t\t<div id=\"table_m\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"container col-md-12\">
\t\t\t\t\t\t<div class=\"card bg-transparent text-white\">
\t\t\t\t\t\t\t<div class=\"card-header text-center bg-primary text-white\">Liste des entrees</div>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t\t\t\t<thead class=\"thead-dark text-center text-white\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Identifiant</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Produit</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Quantite</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Date</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t";
        // line 287
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entrees"]) || array_key_exists("entrees", $context) ? $context["entrees"] : (function () { throw new RuntimeError('Variable "entrees" does not exist.', 287, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 288
            echo "\t\t\t\t\t\t\t\t\t<tr class=\"text-center text-white\">
\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">";
            // line 289
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 289), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 290
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "produit", [], "any", false, false, false, 290), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 291
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "qteE", [], "any", false, false, false, 291), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 292
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "dateE", [], "any", false, false, false, 292), "d/m/y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 295
        echo "\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-footer text-dark\">LPGL</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 387
        echo "\t\t\t</div>
\t\t\t<div id=\"Formulaire_Produit_b\">
\t\t\t\t<svg class=\"Rectangle_Formulaire_c\">
\t\t\t\t\t<rect id=\"Rectangle_Formulaire_c\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"527\" height=\"507\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<svg class=\"Rectangle_Form_e\">
\t\t\t\t\t<linearGradient id=\"Rectangle_Form_e\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#0c1318\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#364753\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectangle_Form_e\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"527\" height=\"51\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Formulaire_Produit_f\">
\t\t\t\t\t<span>Formulaire Achats</span>
\t\t\t\t</div><br><br>
\t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"container col-md-12\">    
\t\t\t\t\t\t<div class=\"card bg-transparent text-white\"><br><br>
\t\t\t\t\t\t\t<div class=\"card-body\"><br><br>
\t\t\t\t\t\t\t\t";
        // line 409
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 409, $this->source); })()), 'form');
        echo "
\t\t\t\t\t\t\t</div><br><br><br><br>
\t\t\t\t\t\t\t<div class=\"card-footer\">LPGL</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"footer_t\">
\t\t\t<svg class=\"Rectangle_footer_t\">
\t\t\t\t<rect id=\"Rectangle_footer_t\" rx=\"45\" ry=\"45\" x=\"0\" y=\"0\" width=\"1620\" height=\"112\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<svg class=\"tel_u\" viewBox=\"970.087 3138.08 116.825 94.839\">
\t\t\t\t<path id=\"tel_u\" d=\"M 1068.492431640625 3138.080078125 C 1068.492431640625 3138.080078125 988.50048828125 3138.080078125 988.50048828125 3138.080078125 C 978.3338012695312 3138.080078125 970.08740234375 3144.7568359375 970.08740234375 3153.0244140625 C 970.08740234375 3153.0244140625 970.08740234375 3217.974853515625 970.08740234375 3217.974853515625 C 970.08740234375 3226.229736328125 978.3338012695312 3232.918701171875 988.50048828125 3232.918701171875 C 988.50048828125 3232.918701171875 1068.492431640625 3232.918701171875 1068.492431640625 3232.918701171875 C 1078.666137695312 3232.918701171875 1086.91259765625 3226.229736328125 1086.91259765625 3217.974853515625 C 1086.91259765625 3217.974853515625 1086.91259765625 3153.0244140625 1086.91259765625 3153.0244140625 C 1086.91259765625 3144.7568359375 1078.666137695312 3138.080078125 1068.492431640625 3138.080078125 Z M 1026.7373046875 3147.976318359375 L 1028.017700195312 3164.335693359375 L 1023.366882324219 3165.42578125 L 1021.1298828125 3147.537353515625 L 1026.7373046875 3147.976318359375 Z M 1046.7080078125 3222.033203125 C 1046.7080078125 3222.033203125 1026.30517578125 3221.695068359375 1026.30517578125 3221.695068359375 C 992.6038818359375 3192.432861328125 998.0960083007812 3158.398681640625 998.0960083007812 3158.398681640625 L 1013.446716308594 3147.68798828125 L 1016.470275878906 3147.68798828125 L 1018.930908203125 3166.402587890625 L 1012.212890625 3170.023193359375 L 1029.391357421875 3206.563232421875 L 1036.125122070312 3204.821533203125 L 1049.038208007812 3220.442626953125 L 1046.7080078125 3222.033203125 Z M 1053.188354492188 3218.551513671875 L 1039.527221679688 3203.180908203125 L 1044.702514648438 3201.376708984375 L 1056.613159179688 3215.77001953125 L 1053.188354492188 3218.551513671875 Z\">
\t\t\t\t</path>
\t\t\t</svg>
\t\t\t<img id=\"whatsapp_v\" src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Eimage/whatsapp_v.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Eimage/whatsapp_v.png 1x, Eimage/whatsapp_v@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<img id=\"messenger_w\" src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Eimage/messenger_w.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Eimage/messenger_w.png 1x, Eimage/messenger_w@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<img id=\"insta_x\" src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Eimage/insta_x.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Eimage/insta_x.png 1x, Eimage/insta_x@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<img id=\"youtube_y\" src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Eimage/youtube_y.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Eimage/youtube_y.png 1x, Eimage/youtube_y@2x.png 2x"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t<div id=\"Mahamadou_Issagha_Diop_z\">
\t\t\t\t<span>Mahamadou Issagha Diop</span>
\t\t\t</div>
\t\t\t<img id=\"copyright_\" src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Eimage/copyright_.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Prototype/Eimage/copyright_.png 1x, Eimage/copyright_@2x.png 2x"), "html", null, true);
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
        return "entree/entree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 437,  418 => 432,  411 => 430,  404 => 428,  397 => 426,  377 => 409,  353 => 387,  345 => 295,  336 => 292,  332 => 291,  328 => 290,  324 => 289,  321 => 288,  317 => 287,  300 => 272,  292 => 191,  248 => 152,  239 => 146,  217 => 129,  208 => 123,  175 => 95,  168 => 93,  156 => 85,  149 => 79,  141 => 77,  139 => 76,  132 => 71,  123 => 51,  114 => 45,  105 => 39,  98 => 37,  78 => 22,  71 => 18,  67 => 17,  58 => 11,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\"/>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>Entree</title>
<link rel=\"stylesheet\" type=\"text/css\" id=\"applicationStylesheet\" href=\"{{ asset('Prototype/Ecss/Entree.css') }}\"/>
<link href=\"https://fonts.googleapis.com/css?family=Quicksand&display=swap\" rel=\"stylesheet\">
<!-- Custom fonts for this template-->
    <link href=\"{{ asset('template/sb_bootstrap/vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"{{ asset('template/sb_bootstrap/css/sb-admin-2.min.css') }}\"rel=\"stylesheet\">
<script id=\"applicationScript\" type=\"text/javascript\" src=\"{{ asset('Prototype/Escript/Entree.js') }}\"></script>
</head>
<body>
<div id=\"Entree\">
\t<img id=\"Calque_1_wu\" src=\"{{ asset('Prototype/Eimage/Calque_1_wu.png') }}\" srcset=\"{{ asset('Prototype/Eimage/Calque_1_wu.png 1x, Eimage/Calque_1_wu@2x.png 2x') }}\">

\t<div id=\"Page_entree_zn\">
\t\t<div id=\"menu_zo\">
\t\t\t<svg class=\"Rectangle_1_zq\">
\t\t\t\t<linearGradient id=\"Rectangle_1_zq\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t<stop offset=\"0\" stop-color=\"#28343b\" stop-opacity=\"1\"></stop>
\t\t\t\t\t<stop offset=\"1\" stop-color=\"#004a95\" stop-opacity=\"1\"></stop>
\t\t\t\t</linearGradient>
\t\t\t\t<rect id=\"Rectangle_1_zq\" rx=\"75\" ry=\"75\" x=\"0\" y=\"0\" width=\"1620\" height=\"144\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Logo_zr\">
\t\t\t\t<span>Logo</span>
\t\t\t</div>
\t\t\t<img id=\"logo4-b_zs\" src=\"{{ asset('Prototype/Eimage/logo4-b_zs.png') }}\" srcset=\"{{ asset('Prototype/Eimage/logo4-b_zs.png 1x, Eimage/logo4-b_zs@2x.png 2x') }}\">

\t\t\t<a class=\"collapse-item\" href=\"{{ path('accueil')}}\">\t\t
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Acceuil_zt\">
\t\t\t\t<span>Acceuil</span>
\t\t\t</div>
\t\t\t</a>

\t\t\t<a class=\"collapse-item\" href=\"{{ path('produit_liste')}}\">\t
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Produit_zu\">
\t\t\t\t<span>Produit</span>
\t\t\t</div>
\t\t\t</a>

\t\t\t<a class=\"collapse-item\" href=\"{{ path('categorie_liste')}}\">
\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Categorie_zv\">
\t\t\t\t<span>Categorie</span>
\t\t\t</div>
\t\t\t</a>
\t\t\t
\t\t\t{# <svg class=\"Rectangle_login_zw\">
\t\t\t\t<rect id=\"Rectangle_login_zw\" rx=\"20\" ry=\"20\" x=\"0\" y=\"0\" width=\"157\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Login_zx\">
\t\t\t\t<span>Login</span>
\t\t\t</div>
\t\t\t<svg class=\"Rectangle_Sing_in_zy\">
\t\t\t\t<rect id=\"Rectangle_Sing_in_zy\" rx=\"20\" ry=\"20\" x=\"0\" y=\"0\" width=\"199\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Sign_in_zz\">
\t\t\t\t<span>Sign in</span>
\t\t\t</div> #}
\t\t\t<svg class=\"Rectangle_Profil_z\">
\t\t\t\t<rect id=\"Rectangle_Profil_z\" rx=\"20\" ry=\"20\" x=\"-5\" y=\"-10\" width=\"180\" height=\"100\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<div id=\"Profil_z\">
\t\t\t{% if app.user %}
\t\t\t\t<span>{{ app.user.nom }}<br>{{ app.user.prenom }}</span>
\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<svg class=\"Rectangle_Log_out_z\">
\t\t\t\t<rect onclick=\"application.goToTargetView(event)\" id=\"Rectangle_Log_out_z\" rx=\"20\" ry=\"20\" x=\"0\" y=\"0\" width=\"199\" height=\"50\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t{# button Logout #}
\t\t\t<a href=\"{{path('app_logout')}}\">
\t\t\t<div id=\"Log_out__z\">
\t\t\t\t<span>Log out</span><br/>
\t\t\t</div>
\t\t
\t\t</div>
\t\t<div id=\"Entree_body_z\">
\t\t\t<div id=\"Screenshot_2022-05-31_132950_z\">
\t\t\t\t<img id=\"Screenshot_2022-05-31_132950_a\" src=\"{{ asset('Prototype/Eimage/Screenshot_2022-05-31_132950_a.png') }}\" srcset=\"{{ asset('Prototype/Eimage/Screenshot_2022-05-31_132950_a.png 1x, Eimage/Screenshot_2022-05-31_132950_a@2x.png 2x') }}\">
\t\t\t\t\t
\t\t\t\t<img id=\"Clip_z\" src=\"{{ asset('Prototype/Eimage/Clip_z.png') }}\" srcset=\"{{ asset('Prototype/Eimage/Clip_z.png 1x, Eimage/Clip_z@2x.png 2x') }}\">
\t\t\t\t\t
\t\t\t\t</svg>
\t\t\t</div>
\t\t\t<div id=\"sous_menu_z\">
\t\t\t\t<svg class=\"Rectanglegauche_sous_menu_a\">
\t\t\t\t\t<linearGradient id=\"Rectanglegauche_sous_menu_a\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#192530\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#1b606f\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectanglegauche_sous_menu_a\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"254\" height=\"659\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<svg class=\"Rectangle_entree_b\">
\t\t\t\t\t<rect id=\"Rectangle_entree_b\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"228\" height=\"53\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Forme_entree_c\">
\t\t\t\t\t<svg class=\"Forme_entree_d\" viewBox=\"352.999 2712.999 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Forme_entree_d\" d=\"M 352.9988098144531 2763.07177734375 C 352.9988098144531 2760.624755859375 352.9988098144531 2717.675537109375 352.9988098144531 2715.9873046875 C 352.9988098144531 2713.79833984375 355.4229125976562 2712.169921875 357.8183898925781 2713.450439453125 C 359.7384948730469 2714.475830078125 398.1080932617188 2735.175048828125 401.3829040527344 2736.9453125 C 403.53369140625 2738.1083984375 403.4974060058594 2740.88134765625 401.3829040527344 2742.045654296875 C 399.0256042480469 2743.343994140625 360.5094909667969 2764.1484375 357.72021484375 2765.59375 C 355.6777954101562 2766.654052734375 352.9988098144531 2765.48291015625 352.9988098144531 2763.07177734375 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"Stroke_Effect_e\" viewBox=\"352.999 2712.999 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Stroke_Effect_e\" d=\"M 352.9988098144531 2763.07177734375 C 352.9988098144531 2760.624755859375 352.9988098144531 2717.675537109375 352.9988098144531 2715.9873046875 C 352.9988098144531 2713.79833984375 355.4229125976562 2712.169921875 357.8183898925781 2713.450439453125 C 359.7384948730469 2714.475830078125 398.1080932617188 2735.175048828125 401.3829040527344 2736.9453125 C 403.53369140625 2738.1083984375 403.4974060058594 2740.88134765625 401.3829040527344 2742.045654296875 C 399.0256042480469 2743.343994140625 360.5094909667969 2764.1484375 357.72021484375 2765.59375 C 355.6777954101562 2766.654052734375 352.9988098144531 2765.48291015625 352.9988098144531 2763.07177734375 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t</div>

\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('entree_liste')}}\">
\t\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Entree_f\">
\t\t\t\t\t<span>Entree</span>
\t\t\t\t</div>
\t\t\t\t</a>

\t\t\t\t<img id=\"img_entree_h\" src=\"{{ asset('Prototype/Eimage/img_entree_h.png') }}\" srcset=\"{{ asset('Prototype/Eimage/img_entree_h.png 1x, Eimage/img_entree_h@2x.png 2x') }}\">
\t\t\t\t\t
\t\t\t\t<svg class=\"Rectangle_sortie_h\">
\t\t\t\t\t<rect onclick=\"application.goToTargetView(event)\" id=\"Rectangle_sortie_h\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"228\" height=\"53\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Forme_sortie_i\">
\t\t\t\t\t<svg class=\"Forme_sortie_j\" viewBox=\"352.999 3016.999 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Forme_sortie_j\" d=\"M 352.9988098144531 3067.071533203125 C 352.9988098144531 3064.62451171875 352.9988098144531 3021.67529296875 352.9988098144531 3019.987548828125 C 352.9988098144531 3017.798583984375 355.4229125976562 3016.169677734375 357.8183898925781 3017.45068359375 C 359.7384948730469 3018.4755859375 398.1080932617188 3039.1748046875 401.3829040527344 3040.945068359375 C 403.53369140625 3042.1083984375 403.4974060058594 3044.88134765625 401.3829040527344 3046.04541015625 C 399.0256042480469 3047.34375 360.5094909667969 3068.148681640625 357.72021484375 3069.593994140625 C 355.6777954101562 3070.65380859375 352.9988098144531 3069.483154296875 352.9988098144531 3067.071533203125 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"Stroke_Effect_k\" viewBox=\"352.999 3016.999 49.984 52.988\">
\t\t\t\t\t\t<path id=\"Stroke_Effect_k\" d=\"M 352.9988098144531 3067.071533203125 C 352.9988098144531 3064.62451171875 352.9988098144531 3021.67529296875 352.9988098144531 3019.987548828125 C 352.9988098144531 3017.798583984375 355.4229125976562 3016.169677734375 357.8183898925781 3017.45068359375 C 359.7384948730469 3018.4755859375 398.1080932617188 3039.1748046875 401.3829040527344 3040.945068359375 C 403.53369140625 3042.1083984375 403.4974060058594 3044.88134765625 401.3829040527344 3046.04541015625 C 399.0256042480469 3047.34375 360.5094909667969 3068.148681640625 357.72021484375 3069.593994140625 C 355.6777954101562 3070.65380859375 352.9988098144531 3069.483154296875 352.9988098144531 3067.071533203125 Z\">
\t\t\t\t\t\t</path>
\t\t\t\t\t</svg>
\t\t\t\t</div>

\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('sortie_liste')}}\">
\t\t\t\t<div onclick=\"application.goToTargetView(event)\" id=\"Sortie_l\">
\t\t\t\t\t<span>Sortie</span>
\t\t\t\t</div>
\t\t\t\t</a>

\t\t\t\t<img id=\"imd_sortie_m\" src=\"{{ asset('Prototype/Eimage/imd_sortie_m.png') }}\" srcset=\"{{ asset('Prototype/Eimage/imd_sortie_m.png 1x, Eimage/imd_sortie_m@2x.png 2x') }}\">
\t\t\t\t\t
\t\t\t</div>
\t\t\t<div id=\"User_n\">
\t\t\t\t<svg class=\"Rectangle_User_info_p\">
\t\t\t\t\t<linearGradient id=\"Rectangle_User_info_p\" spreadMethod=\"pad\" x1=\"0.097\" x2=\"0.903\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#19252f\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#20494d\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectangle_User_info_p\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"254\" height=\"160\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"User_Name_q\">
\t\t\t\t\t<span>User</span><br/><span>Name</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"en_tte__r\">
\t\t\t\t<svg class=\"Rectangle_haut_en_tte__t\">
\t\t\t\t\t<linearGradient id=\"Rectangle_haut_en_tte__t\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#18202b\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#214f53\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectangle_haut_en_tte__t\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"1367\" height=\"160\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<svg class=\"Rectangle_3_u\">
\t\t\t\t\t<rect id=\"Rectangle_3_u\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"527\" height=\"54\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Recherche_v\">
\t\t\t\t\t<span>Recherche</span>
\t\t\t\t</div>
\t\t\t\t<div id=\"Gestion_des_Produits_w\">
\t\t\t\t\t<span>Gestion des Produits</span>
\t\t\t\t</div>
\t\t\t\t<svg class=\"Forme_1_y\" viewBox=\"1307.998 2379.994 47.003 45.004\">
\t\t\t\t\t<path id=\"Forme_1_y\" d=\"M 1354.325805664062 2423.057861328125 C 1353.137329101562 2425.1005859375 1350.773193359375 2425.614013671875 1349.053100585938 2424.197265625 C 1349.053100585938 2424.197265625 1333.47705078125 2411.3984375 1333.47705078125 2411.3984375 C 1332.374389648438 2410.4951171875 1331.8037109375 2409.02197265625 1331.846069335938 2407.541748046875 C 1329.839721679688 2410.09619140625 1327.204223632812 2411.81298828125 1324.251953125 2412.450439453125 C 1320.625854492188 2413.2353515625 1316.963745117188 2412.29638671875 1313.941040039062 2409.8125 C 1310.916748046875 2407.32861328125 1308.887084960938 2403.5927734375 1308.226318359375 2399.28955078125 C 1307.565185546875 2394.98388671875 1308.353881835938 2390.633056640625 1310.44775390625 2387.0400390625 C 1314.7724609375 2379.6220703125 1323.37451171875 2377.76220703125 1329.62451171875 2382.895751953125 C 1335.297119140625 2387.5595703125 1337.110107421875 2396.40869140625 1334.161376953125 2403.55126953125 C 1335.3134765625 2402.97607421875 1336.679809570312 2403.0888671875 1337.7880859375 2403.998291015625 C 1337.7880859375 2403.998291015625 1353.368530273438 2416.797119140625 1353.368530273438 2416.797119140625 C 1355.088623046875 2418.213134765625 1355.518676757812 2421.015625 1354.325805664062 2423.057861328125 Z M 1331.23388671875 2394.311767578125 C 1330.774169921875 2391.310546875 1329.35986328125 2388.70556640625 1327.251342773438 2386.97412109375 C 1322.895385742188 2383.392333984375 1316.89501953125 2384.6875 1313.876586914062 2389.85986328125 C 1310.862060546875 2395.038330078125 1311.9541015625 2402.160888671875 1316.31103515625 2405.73779296875 C 1320.667358398438 2409.319580078125 1326.666748046875 2408.025146484375 1329.684448242188 2402.850830078125 C 1331.144287109375 2400.3466796875 1331.694702148438 2397.313720703125 1331.23388671875 2394.311767578125 Z\">
\t\t\t\t\t</path>
\t\t\t\t</svg>
\t\t\t\t<img id=\"img_gestion_produit_y\" src=\"{{ asset('Prototype/Eimage/img_gestion_produit_y.png') }}\" srcset=\"{{ asset('Prototype/Eimage/img_gestion_produit_y.png 1x, Eimage/img_gestion_produit_y@2x.png 2x') }}\">
\t\t\t\t\t
\t\t\t</div>
\t\t\t{# <div id=\"table_z\">
\t\t\t\t<div id=\"header_\">
\t\t\t\t\t<svg class=\"table_header_\">
\t\t\t\t\t\t<rect id=\"table_header_\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"820\" height=\"74.31\">
\t\t\t\t\t\t</rect>
\t\t\t\t\t</svg>
\t\t\t\t\t<div id=\"Libelle_\">
\t\t\t\t\t\t<span>Libelle</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"Prix_\">
\t\t\t\t\t\t<span>Prix</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"Quantite_\">
\t\t\t\t\t\t<span>Quantite</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"Categorie_\">
\t\t\t\t\t\t<span>Categorie</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"body_\">
\t\t\t\t\t<svg class=\"table_body_\">
\t\t\t\t\t\t<rect id=\"table_body_\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"820\" height=\"581.66\">
\t\t\t\t\t\t</rect>
\t\t\t\t\t</svg>
\t\t\t\t\t<div id=\"table_td_\">
\t\t\t\t\t\t<svg class=\"table_body_copie_\">
\t\t\t\t\t\t\t<rect id=\"table_body_copie_\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"820\" height=\"74.31\">
\t\t\t\t\t\t\t</rect>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<svg class=\"table_body_copie_2_a\">
\t\t\t\t\t\t\t<rect id=\"table_body_copie_2_a\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"820\" height=\"74.34\">
\t\t\t\t\t\t\t</rect>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<svg class=\"table_body_copie_3_b\">
\t\t\t\t\t\t\t<rect id=\"table_body_copie_3_b\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"820\" height=\"74.31\">
\t\t\t\t\t\t\t</rect>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<svg class=\"table_body_copie_3_c\">
\t\t\t\t\t\t\t<rect id=\"table_body_copie_3_c\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"820\" height=\"74.31\">
\t\t\t\t\t\t\t</rect>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<svg class=\"table_body_copie_4_d\">
\t\t\t\t\t\t\t<rect id=\"table_body_copie_4_d\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"820\" height=\"74.31\">
\t\t\t\t\t\t\t</rect>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<svg class=\"table_body_copie_4_e\">
\t\t\t\t\t\t\t<rect id=\"table_body_copie_4_e\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"820\" height=\"74.34\">
\t\t\t\t\t\t\t</rect>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<svg class=\"table_body_copie_5_f\">
\t\t\t\t\t\t\t<rect id=\"table_body_copie_5_f\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"820\" height=\"74.31\">
\t\t\t\t\t\t\t</rect>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<svg class=\"table_body_copie_5_g\">
\t\t\t\t\t\t\t<rect id=\"table_body_copie_5_g\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"820\" height=\"74.31\">
\t\t\t\t\t\t\t</rect>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"table_ligne_i\">
\t\t\t\t\t<svg class=\"Rectangle_4_i\">
\t\t\t\t\t\t<rect id=\"Rectangle_4_i\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"182.53\" height=\"653\">
\t\t\t\t\t\t</rect>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"Rectangle_4_copie_j\">
\t\t\t\t\t\t<rect id=\"Rectangle_4_copie_j\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"183.84\" height=\"653\">
\t\t\t\t\t\t</rect>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"Rectangle_4_copie_2_k\">
\t\t\t\t\t\t<rect id=\"Rectangle_4_copie_2_k\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"183.16\" height=\"653.03\">
\t\t\t\t\t\t</rect>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"Rectangle_4_copie_3_m\">
\t\t\t\t\t\t<rect id=\"Rectangle_4_copie_3_m\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"273.78\" height=\"653.03\">
\t\t\t\t\t\t</rect>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t</div> #}
\t\t\t<div id=\"table_m\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"container col-md-12\">
\t\t\t\t\t\t<div class=\"card bg-transparent text-white\">
\t\t\t\t\t\t\t<div class=\"card-header text-center bg-primary text-white\">Liste des entrees</div>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t\t\t\t<thead class=\"thead-dark text-center text-white\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Identifiant</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Produit</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Quantite</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Date</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t{% for e in entrees %}
\t\t\t\t\t\t\t\t\t<tr class=\"text-center text-white\">
\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">{{ e.id }}</th>
\t\t\t\t\t\t\t\t\t\t<td>{{ e.produit }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ e.qteE }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ e.dateE|date('d/m/y') }}</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-footer text-dark\">LPGL</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{# <div id=\"header_o\">
\t\t\t\t\t<svg class=\"table_header_p\">
\t\t\t\t\t\t<linearGradient id=\"table_header_p\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#1b2a35\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t\t<stop offset=\"0.1184\" stop-color=\"#1b2a35\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t\t<stop offset=\"0.3741\" stop-color=\"#1b263f\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#1b2248\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t<rect id=\"table_header_p\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"838\" height=\"74.45\">
\t\t\t\t\t\t</rect>
\t\t\t\t\t</svg>
\t\t\t\t\t<div id=\"ID_q\">
\t\t\t\t\t\t<span>ID</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"Produit_r\">
\t\t\t\t\t\t<span>Produit</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"Quantite_achet_s\">
\t\t\t\t\t\t<span>Quantite acheté</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"Date_t\">
\t\t\t\t\t\t<span>Date</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"body_u\">
\t\t\t\t\t<svg class=\"table_body_v\">
\t\t\t\t\t\t<rect id=\"table_body_v\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"838\" height=\"585.55\">
\t\t\t\t\t\t<div id=\"ID_q\">
\t\t\t\t\t\t{% for e in entrees %}
\t\t\t\t\t\t<span>{{ e.id }}</span><br><br><br><br>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</rect>
\t\t\t\t\t</svg>
\t\t\t\t\t<div id=\"table_td_w\">
\t\t\t\t\t\t<svg class=\"table_body_copie_x\">
\t\t\t\t\t\t\t<rect id=\"table_body_copie_x\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"838\" height=\"74.8\">
\t\t\t\t\t\t\t<div id=\"Produit_r\">
\t\t\t\t\t\t\t\t{% for e in entrees %}
\t\t\t\t\t\t\t\t<span>{{ e.produit }}</span><br><br><br><br>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</rect>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<svg class=\"table_body_copie_2_y\">
\t\t\t\t\t\t\t<rect id=\"table_body_copie_2_y\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"838\" height=\"74.86\">
\t\t\t\t\t\t\t<div id=\"Quantite_achet_s\">
\t\t\t\t\t\t\t\t{% for e in entrees %}
\t\t\t\t\t\t\t\t<span>{{ e.qteE }}</span><br><br><br><br>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</rect>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<svg class=\"table_body_copie_3_z\">
\t\t\t\t\t\t\t<rect id=\"table_body_copie_3_z\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"838\" height=\"74.8\">
\t\t\t\t\t\t\t<div id=\"Date_t\">
\t\t\t\t\t\t\t\t{% for e in entrees %}
\t\t\t\t\t\t\t\t<span>{{ e.dateE|date('d/m/y') }}</span><br><br><br><br>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</rect>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"table_ligne_\">
\t\t\t\t\t<svg class=\"Rectangle_4_\">
\t\t\t\t\t\t<rect id=\"Rectangle_4_\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"274\" height=\"657\">
\t\t\t\t\t\t</rect>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"Rectangle_4_copie_4_\">
\t\t\t\t\t\t<rect id=\"Rectangle_4_copie_4_\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"67\" height=\"656.99\">
\t\t\t\t\t\t</rect>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"Rectangle_4_copie_\">
\t\t\t\t\t\t<rect id=\"Rectangle_4_copie_\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"234\" height=\"657\">
\t\t\t\t\t\t</rect>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"Rectangle_4_copie_2_\">
\t\t\t\t\t\t<rect id=\"Rectangle_4_copie_2_\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"196\" height=\"656.99\">
\t\t\t\t\t\t</rect>
\t\t\t\t\t</svg>
\t\t\t\t\t<svg class=\"Rectangle_4_copie_3_a\">
\t\t\t\t\t\t<rect id=\"Rectangle_4_copie_3_a\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"234\" height=\"656.99\">
\t\t\t\t\t\t</rect>
\t\t\t\t\t</svg>
\t\t\t\t</div> #}
\t\t\t</div>
\t\t\t<div id=\"Formulaire_Produit_b\">
\t\t\t\t<svg class=\"Rectangle_Formulaire_c\">
\t\t\t\t\t<rect id=\"Rectangle_Formulaire_c\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"527\" height=\"507\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<svg class=\"Rectangle_Form_e\">
\t\t\t\t\t<linearGradient id=\"Rectangle_Form_e\" spreadMethod=\"pad\" x1=\"0.5\" x2=\"0.5\" y1=\"1\" y2=\"0\">
\t\t\t\t\t\t<stop offset=\"0\" stop-color=\"#0c1318\" stop-opacity=\"1\"></stop>
\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#364753\" stop-opacity=\"1\"></stop>
\t\t\t\t\t</linearGradient>
\t\t\t\t\t<rect id=\"Rectangle_Form_e\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"527\" height=\"51\">
\t\t\t\t\t</rect>
\t\t\t\t</svg>
\t\t\t\t<div id=\"Formulaire_Produit_f\">
\t\t\t\t\t<span>Formulaire Achats</span>
\t\t\t\t</div><br><br>
\t\t\t\t
\t\t\t\t<div class=\"row\">
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
\t\t<div id=\"footer_t\">
\t\t\t<svg class=\"Rectangle_footer_t\">
\t\t\t\t<rect id=\"Rectangle_footer_t\" rx=\"45\" ry=\"45\" x=\"0\" y=\"0\" width=\"1620\" height=\"112\">
\t\t\t\t</rect>
\t\t\t</svg>
\t\t\t<svg class=\"tel_u\" viewBox=\"970.087 3138.08 116.825 94.839\">
\t\t\t\t<path id=\"tel_u\" d=\"M 1068.492431640625 3138.080078125 C 1068.492431640625 3138.080078125 988.50048828125 3138.080078125 988.50048828125 3138.080078125 C 978.3338012695312 3138.080078125 970.08740234375 3144.7568359375 970.08740234375 3153.0244140625 C 970.08740234375 3153.0244140625 970.08740234375 3217.974853515625 970.08740234375 3217.974853515625 C 970.08740234375 3226.229736328125 978.3338012695312 3232.918701171875 988.50048828125 3232.918701171875 C 988.50048828125 3232.918701171875 1068.492431640625 3232.918701171875 1068.492431640625 3232.918701171875 C 1078.666137695312 3232.918701171875 1086.91259765625 3226.229736328125 1086.91259765625 3217.974853515625 C 1086.91259765625 3217.974853515625 1086.91259765625 3153.0244140625 1086.91259765625 3153.0244140625 C 1086.91259765625 3144.7568359375 1078.666137695312 3138.080078125 1068.492431640625 3138.080078125 Z M 1026.7373046875 3147.976318359375 L 1028.017700195312 3164.335693359375 L 1023.366882324219 3165.42578125 L 1021.1298828125 3147.537353515625 L 1026.7373046875 3147.976318359375 Z M 1046.7080078125 3222.033203125 C 1046.7080078125 3222.033203125 1026.30517578125 3221.695068359375 1026.30517578125 3221.695068359375 C 992.6038818359375 3192.432861328125 998.0960083007812 3158.398681640625 998.0960083007812 3158.398681640625 L 1013.446716308594 3147.68798828125 L 1016.470275878906 3147.68798828125 L 1018.930908203125 3166.402587890625 L 1012.212890625 3170.023193359375 L 1029.391357421875 3206.563232421875 L 1036.125122070312 3204.821533203125 L 1049.038208007812 3220.442626953125 L 1046.7080078125 3222.033203125 Z M 1053.188354492188 3218.551513671875 L 1039.527221679688 3203.180908203125 L 1044.702514648438 3201.376708984375 L 1056.613159179688 3215.77001953125 L 1053.188354492188 3218.551513671875 Z\">
\t\t\t\t</path>
\t\t\t</svg>
\t\t\t<img id=\"whatsapp_v\" src=\"{{ asset('Prototype/Eimage/whatsapp_v.png') }}\" srcset=\"{{ asset('Prototype/Eimage/whatsapp_v.png 1x, Eimage/whatsapp_v@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"messenger_w\" src=\"{{ asset('Prototype/Eimage/messenger_w.png') }}\" srcset=\"{{ asset('Prototype/Eimage/messenger_w.png 1x, Eimage/messenger_w@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"insta_x\" src=\"{{ asset('Prototype/Eimage/insta_x.png') }}\" srcset=\"{{ asset('Prototype/Eimage/insta_x.png 1x, Eimage/insta_x@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<img id=\"youtube_y\" src=\"{{ asset('Prototype/Eimage/youtube_y.png') }}\" srcset=\"{{ asset('Prototype/Eimage/youtube_y.png 1x, Eimage/youtube_y@2x.png 2x') }}\">
\t\t\t\t
\t\t\t<div id=\"Mahamadou_Issagha_Diop_z\">
\t\t\t\t<span>Mahamadou Issagha Diop</span>
\t\t\t</div>
\t\t\t<img id=\"copyright_\" src=\"{{ asset('Prototype/Eimage/copyright_.png') }}\" srcset=\"{{ asset('Prototype/Eimage/copyright_.png 1x, Eimage/copyright_@2x.png 2x') }}\">
\t\t\t\t
\t\t</div>
\t</div>
</div>
</body>
</html>", "entree/entree.html.twig", "C:\\xampp\\htdocs\\semestre2\\Symfony\\appstocksymfony\\templates\\entree\\entree.html.twig");
    }
}
