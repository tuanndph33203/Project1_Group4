<?php

namespace Group4\BaseMvc\Controllers\Client;

use Group4\BaseMvc\Controller;
use Group4\BaseMvc\Models\product;

class HomeController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {
        $get10ByproductID = (new Product)->get10ByproductID();  
        $getAllByproductID = (new Product)->getAllByproductID(1); 
        extract($get10ByproductID);
        extract($getAllByproductID);
        $this->renderClient('home/home' ,['get10ByproductID'=> $get10ByproductID]);
        // $this->renderClient('home/home',['getAllByproductID'=> $getAllByproductID]);
    }
}