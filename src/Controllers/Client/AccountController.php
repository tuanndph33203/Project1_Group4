<?php

namespace Group4\BaseMvc\Controllers\Client;

use Group4\BaseMvc\Controller;
use Group4\BaseMvc\Models\User;

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
        $thongbao = null;
        if(isset($_POST['register'])&&($_POST['register'])){
            $avatar = $_POST['avatar'];
            $username = $_POST['username'];
            $phone = $_POST['phone'];  
            $email = $_POST['email'];
            $password = $_POST['password'];
            $birth_day = date('Y-m-d', strtotime('birth_day'));
            $address = $_POST['address'];
            // $sex_id = $_POST['sex_id'];
            (new User)->register_user($avatar, $username, $phone,  $email, $password, $birth_day, $address);
            $thongbao="đã đăng ký thành công vui lòng đăng để thực hiện đặt hàng và bình luận";
        }
        $this->renderClient('account/Logup',['thongbao'=>$thongbao]);
    }
}
