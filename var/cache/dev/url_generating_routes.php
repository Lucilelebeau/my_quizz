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
    'home' => [[], ['_controller' => 'App\\Controller\\CategorieController::index'], [], [['text', '/']], [], []],
    'home_page' => [[], ['_controller' => 'App\\Controller\\HomePageController::index'], [], [['text', '/home/page']], [], []],
    'categorieId' => [['id', 'id_question', 'score'], ['_controller' => 'App\\Controller\\QuestionController::index'], [], [['variable', '/', '[^/]++', 'score', true], ['variable', '/', '[^/]++', 'id_question', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/categorie']], [], []],
    'resultat' => [['id', 'score'], ['_controller' => 'App\\Controller\\QuestionController::getScore'], [], [['variable', '/', '[^/]++', 'score', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/categorie']], [], []],
    'registration' => [[], ['_controller' => 'App\\Controller\\RegistrationController::index'], [], [['text', '/registration']], [], []],
    'edit_user' => [[], ['_controller' => 'App\\Controller\\RegistrationController::edit'], [], [['text', '/user/edit']], [], []],
    'reponse' => [['id_question'], ['_controller' => 'App\\Controller\\ReponseController::index'], [], [['variable', '/', '[^/]++', 'id_question', true], ['text', '/question']], [], []],
    'score' => [[], ['_controller' => 'App\\Controller\\ScoreController::index'], [], [['text', '/score']], [], []],
    'security' => [[], ['_controller' => 'App\\Controller\\SecurityController::index'], [], [['text', '/security']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'user_edit' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user_edit']], [], []],
    'admin_user' => [[], ['_controller' => 'App\\Controller\\UserController::admin_user'], [], [['text', '/admin_user']], [], []],
    'admin_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::admin_user_delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin_user']], [], []],
];
