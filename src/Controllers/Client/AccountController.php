<?php

namespace Group4\BaseMvc\Controllers\Client;

use Group4\BaseMvc\Controller;

class AccountController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {
        
        $this->renderClient('account/Login');

    }
    public function my_account() {
        $this->renderClient('account/my_account');
    }
    public function logup() {
        $this->renderClient('account/Logup');
    }
    public function resetpassword() {
        $this->renderClient('account/resetpassword');
    }
}

