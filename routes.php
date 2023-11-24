<?php

//DEMO
use Group4\BaseMvc\Controllers\Admin\StatisticalController;
use Group4\BaseMvc\Controllers\Admin\UserController;
use Group4\BaseMvc\Controllers\Admin\CategoryController;
use Group4\BaseMvc\Controllers\Admin\BrandController;
use Group4\BaseMvc\Controllers\Admin\ProductController;
use Group4\BaseMvc\Controllers\Client\HomeController;
use Group4\BaseMvc\Controllers\Client\ShopController;

use Group4\BaseMvc\Router;

$router = new Router();

$router->addRoute('/', HomeController::class, 'index');

$router->addRoute('/admin', StatisticalController::class, 'index');
$router->addRoute('/admin/statistical', StatisticalController::class, 'index');

$router->addRoute('/admin/users', UserController::class, 'index');
$router->addRoute('/admin/users/create', UserController::class, 'create');
$router->addRoute('/admin/users/update', UserController::class, 'update');
$router->addRoute('/admin/users/delete', UserController::class, 'delete');

$router->addRoute('/admin/categories', CategoryController::class, 'index');
$router->addRoute('/admin/categories/create', CategoryController::class, 'create');
$router->addRoute('/admin/categories/update', CategoryController::class, 'update');
$router->addRoute('/admin/categories/delete', CategoryController::class, 'delete');

$router->addRoute('/client/shop', ShopController::class, 'index');