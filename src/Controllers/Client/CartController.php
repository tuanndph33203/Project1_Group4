<?php

namespace Group4\BaseMvc\Controllers\Client;

use Group4\BaseMvc\Controller;
use Group4\BaseMvc\Models\Cart;

if(!isset ($_SERVER['cart'])) $_SESSION['cart'] = [];
class CartController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {
        if(isset($_POST['add_Cart'])) {
            $_SESSION['cart']['image'] = $_POST['image'];
            $_SESSION['cart']['product_name'] = $_POST['product_name'];
            $_SESSION['price']['price'] = $_POST['price'];
            $_SESSION['cart']['quantity'] = $_POST['quantity'];
            $_SESSION['cart']['size'] = $_POST['size'];
        }    
        print_r($_SESSION['cart']);
        $this->renderClient('shop/cart', ['cart'=> $_SESSION['cart']]);
}
}$_SESSION['cart'][] = [
    'image' => $_POST['image'],
    'product_name' => $_POST['product_name'],
    'price' => $_POST['price'],
    'quantity' => $_POST['quantity'],
    'size' => $_POST['size']  
  ];