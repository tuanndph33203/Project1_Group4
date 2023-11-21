<?php

namespace Group4\BaseMvc\Controllers\Admin;

use Group4\BaseMvc\Controller;
use Group4\BaseMvc\Models\User;

class UserController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {
        $users = (new User)->all('id');
        
        $this->renderAdmin('admin/users/index', ['users' => $users]);
    }

    public function create() {
        if (isset($_POST['btn-submit'])) { 
            $data = [
                'name' => $_POST['name'],
                'address' => $_POST['address'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
            ];

            (new User)->insert($data);

            header('Location: /admin/users');
        }

        $this->renderAdmin('admin/users/create');
    }

    public function update() {
        if (isset($_POST['btn-submit'])) { 
            $data = [
                'name' => $_POST['name'],
                'address' => $_POST['address'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
            ];

            $conditions = [
                ['id', '=', $_GET['id']]
            ];

            (new User)->update($data, $conditions);
        }

        $user = (new User)->findOne('id',$_GET['id']);

        $this->renderAdmin('admin/users/update', ['user' => $user]);
    }

    public function delete() {
        $conditions = [
            ['id', '=', $_GET['id']]
        ];

        (new User)->delete($conditions);

        header('Location: /admin/users');
    }
}
