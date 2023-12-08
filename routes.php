<?php
//DEMO
use Group4\BaseMvc\Controllers\Admin\StatisticalController;
use Group4\BaseMvc\Controllers\Admin\UserController;
use Group4\BaseMvc\Controllers\Admin\CategoryController;
use Group4\BaseMvc\Controllers\Admin\BrandController;
use Group4\BaseMvc\Controllers\Admin\ProductController;
use Group4\BaseMvc\Controllers\Admin\ProductDetailController;
use Group4\BaseMvc\Controllers\Admin\OrderController;
use Group4\BaseMvc\Controllers\Admin\PostController;

use Group4\BaseMvc\Controllers\Client\BlogController;
use Group4\BaseMvc\Controllers\Client\HomeController;
use Group4\BaseMvc\Controllers\Client\ShopController;
use Group4\BaseMvc\Controllers\Client\ContactController;
use Group4\BaseMvc\Controllers\Client\AccountController;
use Group4\BaseMvc\Controllers\Client\wishlistController;
use Group4\BaseMvc\Controllers\Client\ShowShoping;
use Group4\BaseMvc\Controllers\Client\CartController;
use Group4\BaseMvc\Controllers\Client\CommentController;

use Group4\BaseMvc\Router;

$router = new Router();

$router->addRoute('/', HomeController::class, 'index');
$router->addRoute('/modal', HomeController::class, 'modal');

$router->addRoute('/admin', StatisticalController::class, 'index');
$router->addRoute('/admin/statistical', StatisticalController::class, 'index');

$router->addRoute('/admin/users', UserController::class, 'index');
$router->addRoute('/admin/users/customer', UserController::class, 'customer');
$router->addRoute('/admin/users/create', UserController::class, 'create');
$router->addRoute('/admin/users/update', UserController::class, 'update');
$router->addRoute('/admin/users/delete', UserController::class, 'delete');
$router->addRoute('/admin/users/lock', UserController::class, 'lock');
$router->addRoute('/admin/users/active', UserController::class, 'active');

$router->addRoute('/admin/categories', CategoryController::class, 'index');
$router->addRoute('/admin/categories/create', CategoryController::class, 'create');
$router->addRoute('/admin/categories/update', CategoryController::class, 'update');
$router->addRoute('/admin/categories/delete', CategoryController::class, 'delete');

$router->addRoute('/admin/brands', BrandController::class, 'index');
$router->addRoute('/admin/brands/create', BrandController::class, 'create');
$router->addRoute('/admin/brands/update', BrandController::class, 'update');
$router->addRoute('/admin/brands/delete', BrandController::class, 'delete');

$router->addRoute('/admin/products', ProductController::class, 'index');
$router->addRoute('/admin/products/create', ProductController::class, 'create');
$router->addRoute('/admin/products/update', ProductController::class, 'update');
$router->addRoute('/admin/products/delete', ProductController::class, 'delete');

$router->addRoute('/admin/products/products_detail/delete', ProductDetailController::class, 'delete');
$router->addRoute('/admin/products/products_detail/create', ProductDetailController::class, 'create');
$router->addRoute('/admin/products/products_detail/update', ProductDetailController::class, 'update');

$router->addRoute('/admin/orders', OrderController::class, 'index');
$router->addRoute('/admin/orders/detail', OrderController::class, 'detail');
$router->addRoute('/admin/orders/status', OrderController::class, 'status');
$router->addRoute('/admin/orders/cancel', OrderController::class, 'cancel');

$router->addRoute('/admin/post', PostController::class, 'index');
$router->addRoute('/admin/post/update', PostController::class, 'update');
$router->addRoute('/admin/post/create', PostController::class, 'create');
///////////

$router->addRoute('/client/shop', ShopController::class, 'index');

$router->addRoute('/client/blog', BlogController::class, 'index' );

$router->addRoute('/client/contact', ContactController::class, 'index');

$router->addRoute('/client/account', AccountController::class, 'index');
$router->addRoute('/client/account/Logup', AccountController::class, 'Logup');
$router->addRoute('/client/account/login', AccountController::class,'login');
$router->addRoute('/client/account/my_account', AccountController::class, 'my_account');
$router->addRoute('/client/account/resetpassword', AccountController::class, 'resetpassword');


$router->addRoute('/client/wishlist', wishlistController::class, 'index');

////
$router->addRoute('/client/product_detail', ShowShoping::class, 'index');
$router->addRoute('/client/shoping/checkout', ShowShoping::class, 'checkout');
$router->addRoute('/client/shoping/order', ShowShoping::class, 'addOrder');
$router->addRoute('/client/shoping/success', ShowShoping::class, 'success');
$router->addRoute('/client/shoping/error', ShowShoping::class, 'error');
$router->addRoute('/client/shoping/list', ShowShoping::class, 'listOrders');
$router->addRoute('/client/shoping/pay', ShowShoping::class, 'pay');
$router->addRoute('/client/shoping/receive', ShowShoping::class, 'receive');
$router->addRoute('/client/shoping/cancel', ShowShoping::class, 'cancel');
$router->addRoute('/client/shoping/return', ShowShoping::class, 'return');
$router->addRoute('/client/shoping/rachat', ShowShoping::class, 'rachat');
////

$router->addRoute('/client/shop/cart', CartController::class, 'index');
$router->addRoute('/client/shop/cart/delete', CartController::class, 'delete');
$router->addRoute('/client/shop/cart/incrementQuantity', CartController::class, 'incrementQuantity');
$router->addRoute('/client/shop/cart/decrementQuantity', CartController::class, 'decrementQuantity');

////
$router->addRoute('/client/comment', CommentController::class, 'index');