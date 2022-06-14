<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/Categorie/liste' => [[['_route' => 'categorie_liste', '_controller' => 'App\\Controller\\CategorieController::index'], null, null, null, false, false, null]],
        '/Categorie/add' => [[['_route' => 'categorie_add', '_controller' => 'App\\Controller\\CategorieController::add'], null, null, null, false, false, null]],
        '/Entree/liste' => [[['_route' => 'entree_liste', '_controller' => 'App\\Controller\\EntreeController::index'], null, null, null, false, false, null]],
        '/Entree/add' => [[['_route' => 'entree_add', '_controller' => 'App\\Controller\\EntreeController::add'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/logins' => [[['_route' => 'logins', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logon' => [[['_route' => 'logon', '_controller' => 'App\\Controller\\LoginController::logon'], null, null, null, false, false, null]],
        '/403' => [[['_route' => 'accessDenied', '_controller' => 'App\\Controller\\LoginController::accessDenied'], null, null, null, false, false, null]],
        '/manage' => [[['_route' => 'manage_liste', '_controller' => 'App\\Controller\\ManageController::index'], null, null, null, false, false, null]],
        '/Produit/liste' => [[['_route' => 'produit_liste', '_controller' => 'App\\Controller\\ProduitController::index'], null, null, null, false, false, null]],
        '/Produit/add' => [[['_route' => 'produit_add', '_controller' => 'App\\Controller\\ProduitController::add'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/Sortie/liste' => [[['_route' => 'sortie_liste', '_controller' => 'App\\Controller\\SortieController::index'], null, null, null, false, false, null]],
        '/Sortie/add' => [[['_route' => 'sortie_add', '_controller' => 'App\\Controller\\SortieController::add'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/Categorie/(?'
                    .'|edit/([^/]++)(*:195)'
                    .'|update/([^/]++)(*:218)'
                    .'|delete/([^/]++)(*:241)'
                .')'
                .'|/Entree/get/([^/]++)(*:270)'
                .'|/Produit/(?'
                    .'|edit/([^/]++)(*:303)'
                    .'|update/([^/]++)(*:326)'
                    .'|delete/([^/]++)(*:349)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        195 => [[['_route' => 'categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], null, null, false, true, null]],
        218 => [[['_route' => 'categorie_update', '_controller' => 'App\\Controller\\CategorieController::update'], ['id'], null, null, false, true, null]],
        241 => [[['_route' => 'categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], null, null, false, true, null]],
        270 => [[['_route' => 'entree_get', '_controller' => 'App\\Controller\\EntreeController::getProduit'], ['id'], null, null, false, true, null]],
        303 => [[['_route' => 'produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], null, null, false, true, null]],
        326 => [[['_route' => 'produit_update', '_controller' => 'App\\Controller\\ProduitController::update'], ['id'], null, null, false, true, null]],
        349 => [
            [['_route' => 'produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
