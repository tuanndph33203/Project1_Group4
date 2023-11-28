<?php

namespace Group4\BaseMvc\Controllers\Client;

use Group4\BaseMvc\Controller;

class HomeController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {
        $this->renderClient('home/home');
    }
    // public function listproduct_home() {
    //     $this->renderClient('');
    //     $sql = "select * from product onder by limit 0,5"
    // }
    
}
