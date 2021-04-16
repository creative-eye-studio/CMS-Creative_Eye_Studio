<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminController::index'], [], [['text', '/admin']], [], []],
    'pages_site' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminController::pages_site'], [], [['text', '/admin/pages-site']], [], []],
    'add_page' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminController::add_page'], [], [['text', '/admin/add-page']], [], []],
    'modify_page' => [['slug'], ['_controller' => 'App\\Controller\\Admin\\AdminController::modify_page'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/admin/modify-page']], [], []],
    'delete_page' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminController::delete_page'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/delete-page']], [], []],
    'articles_site' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminController::articles_site'], [], [['text', '/admin/articles-site']], [], []],
    'add_article' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminController::add_article'], [], [['text', '/admin/add-article']], [], []],
    'delete_article' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminController::delete_article'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/delete-article']], [], []],
    'users_list' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminController::users_list'], [], [['text', '/admin/users-list']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/admin/register']], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\ViewController::index'], [], [['text', '/']], [], []],
    'ef_connect' => [['instance', 'homeFolder'], ['_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], [], [['variable', '/', '[^/]++', 'homeFolder', true], ['variable', '/', '[^/]++', 'instance', true], ['text', '/efconnect']], [], []],
    'ef_main_js' => [[], ['_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], [], [['text', '/elfinder.main.js']], [], []],
    'elfinder' => [['instance', 'homeFolder'], ['_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], [], [['variable', '/', '[^/]++', 'homeFolder', true], ['variable', '/', '[^/]++', 'instance', true], ['text', '/elfinder']], [], []],
];
