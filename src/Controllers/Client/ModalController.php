<?php

namespace Group4\BaseMvc\Controllers\Client;

use Group4\BaseMvc\Controller;
use Group4\BaseMvc\Models\product;


class ModalController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {
        $Getone_product = (new Product)->Getone_product('1');
        extract($Getone_product);
        $this->renderClient('components/modal', ['Getone_product'=> $Getone_product]);

    }
}
