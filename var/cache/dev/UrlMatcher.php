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
        '/category' => [[['_route' => 'film_category_asc', '_controller' => 'App\\Controller\\FilmCategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/category/DESC' => [[['_route' => 'film_category_desc', '_controller' => 'App\\Controller\\FilmCategoryController::sortCategoryDESC'], null, ['GET' => 0], null, false, false, null]],
        '/film' => [[['_route' => 'film_index', '_controller' => 'App\\Controller\\FilmController::index'], null, ['GET' => 0], null, true, false, null]],
        '/film/titleASC' => [[['_route' => 'film_title_asc', '_controller' => 'App\\Controller\\FilmController::sortTitleASC'], null, ['GET' => 0], null, false, false, null]],
        '/film/titleDESC' => [[['_route' => 'film_title_desc', '_controller' => 'App\\Controller\\FilmController::sortTitleDESC'], null, ['GET' => 0], null, false, false, null]],
        '/film/rentalASC' => [[['_route' => 'film_rental_asc', '_controller' => 'App\\Controller\\FilmController::sortRentalASC'], null, ['GET' => 0], null, false, false, null]],
        '/film/rentalDESC' => [[['_route' => 'film_rental_desc', '_controller' => 'App\\Controller\\FilmController::sortRentalDESC'], null, ['GET' => 0], null, false, false, null]],
        '/film/new' => [[['_route' => 'film_new', '_controller' => 'App\\Controller\\FilmController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/film/([^/]++)(?'
                    .'|(*:186)'
                    .'|/edit(*:199)'
                    .'|(*:207)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        186 => [[['_route' => 'film_show', '_controller' => 'App\\Controller\\FilmController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        199 => [[['_route' => 'film_edit', '_controller' => 'App\\Controller\\FilmController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        207 => [
            [['_route' => 'film_delete', '_controller' => 'App\\Controller\\FilmController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
