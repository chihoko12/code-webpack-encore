<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_account' => [[], ['_controller' => 'App\\Controller\\AccountController::index'], [], [['text', '/account']], [], []],
    'api_account' => [[], ['_controller' => 'App\\Controller\\AccountController::accountApi'], [], [['text', '/api/account']], [], []],
    'admin_utility_users' => [[], ['_controller' => 'App\\Controller\\AdminUtilityController::getUsersApi'], [], [['text', '/admin/utility/users']], [], []],
    'admin_article_new' => [[], ['_controller' => 'App\\Controller\\ArticleAdminController::new'], [], [['text', '/admin/article/new']], [], []],
    'admin_article_edit' => [['id'], ['_controller' => 'App\\Controller\\ArticleAdminController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/article']], [], []],
    'admin_article_location_select' => [[], ['_controller' => 'App\\Controller\\ArticleAdminController::getSpecificLocationSelect'], [], [['text', '/admin/article/location-select']], [], []],
    'admin_article_list' => [[], ['_controller' => 'App\\Controller\\ArticleAdminController::list'], [], [['text', '/admin/article']], [], []],
    'app_homepage' => [[], ['_controller' => 'App\\Controller\\ArticleController::homepage'], [], [['text', '/']], [], []],
    'article_show' => [['slug'], ['_controller' => 'App\\Controller\\ArticleController::show'], [], [['variable', '/', '[^/]++', 'slug'], ['text', '/news']], [], []],
    'article_toggle_heart' => [['slug'], ['_controller' => 'App\\Controller\\ArticleController::toggleArticleHeart'], [], [['text', '/heart'], ['variable', '/', '[^/]++', 'slug'], ['text', '/news']], [], []],
    'admin_article_add_reference' => [['id'], ['_controller' => 'App\\Controller\\ArticleReferenceAdminController::uploadArticleReference'], [], [['text', '/references'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/article']], [], []],
    'admin_article_list_references' => [['id'], ['_controller' => 'App\\Controller\\ArticleReferenceAdminController::getArticleReferences'], [], [['text', '/references'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/article']], [], []],
    'admin_article_reorder_references' => [['id'], ['_controller' => 'App\\Controller\\ArticleReferenceAdminController::reorderArticleReferences'], [], [['text', '/references/reorder'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/article']], [], []],
    'admin_article_download_reference' => [['id'], ['_controller' => 'App\\Controller\\ArticleReferenceAdminController::downloadArticleReference'], [], [['text', '/download'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/article/references']], [], []],
    'admin_article_delete_reference' => [['id'], ['_controller' => 'App\\Controller\\ArticleReferenceAdminController::deleteArticleReference'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/article/references']], [], []],
    'admin_article_update_reference' => [['id'], ['_controller' => 'App\\Controller\\ArticleReferenceAdminController::updateArticleReference'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/article/references']], [], []],
    'comment_admin' => [[], ['_controller' => 'App\\Controller\\CommentAdminController::index'], [], [['text', '/admin/comment']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\SecurityController::register'], [], [['text', '/register']], [], []],
    'liip_imagine_filter_runtime' => [['filter', 'hash', 'path'], ['_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter' => '[A-z0-9_-]*', 'path' => '.+'], [['variable', '/', '.+', 'path'], ['variable', '/', '[^/]++', 'hash'], ['text', '/rc'], ['variable', '/', '[A-z0-9_-]*', 'filter'], ['text', '/media/cache/resolve']], [], []],
    'liip_imagine_filter' => [['filter', 'path'], ['_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter' => '[A-z0-9_-]*', 'path' => '.+'], [['variable', '/', '.+', 'path'], ['variable', '/', '[A-z0-9_-]*', 'filter'], ['text', '/media/cache/resolve']], [], []],
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
];
