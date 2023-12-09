<?php

namespace Group4\BaseMvc\Controllers\Client;

use Group4\BaseMvc\Controller;
use Group4\BaseMvc\Models\Cart;

// if(!isset ($_SERVER['mycart'])) $_SESSION['mycart'] = [];
class CartController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index()
    {
        if (isset($_POST['add-cart'])) {
            if ($_SESSION['cart'][$_POST['product_id']] == $_POST['product_id'] && $_SESSION['cart'][$_POST['product_id']]['size'] == $_POST['detail_price']['detail_size']) {
                $_SESSION['cart'][$_POST['product_id']]['quantity'] += 1;
            } else {
                $_SESSION['cart'][$_POST['product_id']] = [
                    'image' => $_POST['image'],
                    'product_name' => $_POST['product_name'],
                    'size' => $_POST['detail_price'][$_POST['detail_size']],
                    'price' => $_POST['detail_size'],
                    'quantity' => 1 // Thêm trường quantity vào khi thêm sản phẩm mới vào giỏ hàng
                ];
            }
        } else if(isset($_POST['add_cart'])){
            if ($_SESSION['cart'][$_POST['product_id']] == $_POST['product_id'] && $_SESSION['cart'][$_POST['product_id']]['size'] == $_POST['size']) {
                $_SESSION['cart'][$_POST['product_id']]['quantity'] += 1;
            } else {
                $_SESSION['cart'][$_POST['product_id']] = [
                    'image' => $_POST['image'],
                    'product_name' => $_POST['product_name'],
                    'price' => $_POST['price'],
                    'quantity' => $_POST['quantity'],
                    'size' => $_POST['size']
                ];
            }
        }
        $this->renderClient('shop/cart', ['cart' => $_SESSION['cart']]);
    }
    public function delete()
    {
        unset($_SESSION['cart'][$_GET['id']]);
        $this->renderClient('shop/cart', ['cart' => $_SESSION['cart']]);
    }

    public function incrementQuantity()
    {
        $product_id = $_GET['id'] ?? '';

        if (!empty($product_id) && isset($_SESSION['cart'][$product_id])) {
            ++$_SESSION['cart'][$product_id]['quantity'];
        }
        $this->renderClient('shop/cart', ['cart' => $_SESSION['cart']]);
    }
    public function decrementQuantity()
    {
        $product_id = $_GET['id'] ?? '';

        if (!empty($product_id) && isset($_SESSION['cart'][$product_id])) {
            if ($_SESSION['cart'][$product_id]['quantity'] > 1) {
                --$_SESSION['cart'][$product_id]['quantity'];
            } else {
                unset($_SESSION['cart'][$product_id]);
            }
        }

        $this->renderClient('shop/cart', ['cart' => $_SESSION['cart']]);
    }
}
