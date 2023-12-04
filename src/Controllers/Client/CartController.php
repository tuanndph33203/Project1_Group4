<?php

namespace Group4\BaseMvc\Controllers\Client;

use Group4\BaseMvc\Controller;
use Group4\BaseMvc\Models\Cart;

if(!isset ($_SERVER['mycart'])) $_SESSION['mycart'] = [];
class CartController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {
        if(isset($_POST['add_Cart']) && ($_POST['add_Cart'])) {
            $img = $_POST['img'];
            $product_name= $_POST['product'];
            $min_price = $_POST['price'];
            $quatity = $_POST['quatity'];
            $pay = $quatity * $min_price;
            (new cart) -> Mycart();
            $cart = [$img , $product_name, $min_price , $quatity];
            array_push($_SESSION['mycart'], $cart);
            
        }    
        $this->renderClient('shop/cart' , ['cart'=> $cart]);
}
}