<?php

namespace Group4\BaseMvc\Controllers\Client;

use Group4\BaseMvc\Controller;

class ShopController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {
        $this->renderClient('shop/shop');
    }
}
