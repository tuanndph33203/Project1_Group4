<?php

use Group4\BaseMvc\Controllers\Admin\UserController;
use Group4\BaseMvc\Controllers\Admin\CategoryController;
use Group4\BaseMvc\Controllers\Client\HomeController;
use Group4\BaseMvc\Router;

$router = new Router();

$router->addRoute('/src/Views/', HomeController::class, 'index');

$router->addRoute('/src/Views/admin/users', UserController::class, 'index');
$router->addRoute('/src/Views/admin/users/create', UserController::class, 'create');
$router->addRoute('/src/Views/admin/users/update', UserController::class, 'update');
$router->addRoute('/src/Views/admin/users/delete', UserController::class, 'delete');

$router->addRoute('/src/Views/admin/categories', CategoryController::class, 'index');
$router->addRoute('/src/Views/admin/categories/create', CategoryController::class, 'create');
$router->addRoute('/src/Views/admin/categories/update', CategoryController::class, 'update');
$router->addRoute('/src/Views/admin/categories/delete', CategoryController::class, 'delete');