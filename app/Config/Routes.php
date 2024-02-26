<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group('', static function ($routes) {
    $routes->group('', ['filter' => 'cifilter:auth'], static function ($routes) {
        $routes->get('home', 'AdminController::index', ['as' => 'admin.home']);
        $routes->get('logout', 'AdminController::logoutHandler', ['as' => 'admin.logout']);
        //! Kategori
        $routes->get('categories', 'AdminController::categories', ['as' => 'categories']);
        $routes->post('add-category', 'AdminController::addCategory', ['as' => 'add-category']);
        $routes->get('get-categories', 'AdminController::getCategories', ['as' => 'get-categories']);
        $routes->get('get-category', 'AdminController::getCategory', ['as' => 'get-category']);
        $routes->post('update-category', 'AdminController::updateCategory', ['as' => 'update-category']);
        $routes->get('delete-category', 'AdminController::deleteCategory', ['as' => 'delete-category']);
        $routes->get('reorder-categories', 'AdminController::reorderCategories', ['as' => 'reorder-categories']);
    });
    $routes->group('', ['filter' => 'cifilter:guest'], static function ($routes) {
        $routes->get('/', 'AuthController::loginForm', ['as' => 'admin.login.form']);
        $routes->post('login', 'AuthController::loginHandler', ['as' => 'admin.login.handler']);
    });
});
