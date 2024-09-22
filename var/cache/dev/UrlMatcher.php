<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/account' => [[['_route' => 'app_account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
        '/api/account' => [[['_route' => 'api_account', '_controller' => 'App\\Controller\\AccountController::accountApi'], null, null, null, false, false, null]],
        '/admin/utility/users' => [[['_route' => 'admin_utility_users', '_controller' => 'App\\Controller\\AdminUtilityController::getUsersApi'], null, ['GET' => 0], null, false, false, null]],
        '/admin/article/new' => [[['_route' => 'admin_article_new', '_controller' => 'App\\Controller\\ArticleAdminController::new'], null, null, null, false, false, null]],
        '/admin/article/location-select' => [[['_route' => 'admin_article_location_select', '_controller' => 'App\\Controller\\ArticleAdminController::getSpecificLocationSelect'], null, null, null, false, false, null]],
        '/admin/article' => [[['_route' => 'admin_article_list', '_controller' => 'App\\Controller\\ArticleAdminController::list'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_homepage', '_controller' => 'App\\Controller\\ArticleController::homepage'], null, null, null, false, false, null]],
        '/admin/comment' => [[['_route' => 'comment_admin', '_controller' => 'App\\Controller\\CommentAdminController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/article/(?'
                    .'|([^/]++)/(?'
                        .'|edit(*:41)'
                        .'|references(?'
                            .'|(*:61)'
                            .'|/reorder(*:76)'
                        .')'
                    .')'
                    .'|references/([^/]++)(?'
                        .'|/download(*:116)'
                        .'|(*:124)'
                    .')'
                .')'
                .'|/news/([^/]++)(?'
                    .'|(*:151)'
                    .'|/heart(*:165)'
                .')'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:228)'
                    .'|([A-z0-9_-]*)/(.+)(*:254)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:294)'
                    .'|wdt/([^/]++)(*:314)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:360)'
                            .'|router(*:374)'
                            .'|exception(?'
                                .'|(*:394)'
                                .'|\\.css(*:407)'
                            .')'
                        .')'
                        .'|(*:417)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        41 => [[['_route' => 'admin_article_edit', '_controller' => 'App\\Controller\\ArticleAdminController::edit'], ['id'], null, null, false, false, null]],
        61 => [
            [['_route' => 'admin_article_add_reference', '_controller' => 'App\\Controller\\ArticleReferenceAdminController::uploadArticleReference'], ['id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'admin_article_list_references', '_controller' => 'App\\Controller\\ArticleReferenceAdminController::getArticleReferences'], ['id'], ['GET' => 0], null, false, false, null],
        ],
        76 => [[['_route' => 'admin_article_reorder_references', '_controller' => 'App\\Controller\\ArticleReferenceAdminController::reorderArticleReferences'], ['id'], ['POST' => 0], null, false, false, null]],
        116 => [[['_route' => 'admin_article_download_reference', '_controller' => 'App\\Controller\\ArticleReferenceAdminController::downloadArticleReference'], ['id'], ['GET' => 0], null, false, false, null]],
        124 => [
            [['_route' => 'admin_article_delete_reference', '_controller' => 'App\\Controller\\ArticleReferenceAdminController::deleteArticleReference'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'admin_article_update_reference', '_controller' => 'App\\Controller\\ArticleReferenceAdminController::updateArticleReference'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        151 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['slug'], null, null, false, true, null]],
        165 => [[['_route' => 'article_toggle_heart', '_controller' => 'App\\Controller\\ArticleController::toggleArticleHeart'], ['slug'], ['POST' => 0], null, false, false, null]],
        228 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        254 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        294 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        314 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        360 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        374 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        394 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        407 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        417 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
