<?php

namespace Group4\BaseMvc\Controllers\Admin;

use Group4\BaseMvc\Controller;
use Group4\BaseMvc\Models\User;
use Group4\BaseMvc\Models\Sex;
use Group4\BaseMvc\Models\Role;
use Group4\BaseMvc\Models\StatusUser;

class UserController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index()
    {
        $columns = [
            "role" => ['role_name', 'role_id']
        ];
        $where = [
            'role_id' => 2
        ];
        $groupByColumn = "user_id";

        $users = (new User())->getAll($columns, $where, $groupByColumn);
        $this->renderAdmin(
            "users/index",
            [
                "users" => $users
            ]
        );
    }
    public function customer()
    {
        $status = (new StatusUser())->all("status_user_id");
        $where = [
            'role_id' => 3
        ];
        $columns = [
            "role" => ['role_name', 'role_id']
        ];
        $where = [];
        foreach ($_POST as $key => $value) {
            if ($value !== null && $value !== '') {
                $where[$key] = $value;
            }
        }

        $groupByColumn = "user_id";

        $users = (new User())->getAll($columns, $where, $groupByColumn);
        // print_r($where);
        $this->renderAdmin(
            "users/listCustomer",
            [
                "users" => $users,
                "status" => $status
            ]
        );
    }
    public function create()
    {
        $sex = (new Sex())->all("sex_id");
        $role = (new Role())->all("role_id");
        $status = (new StatusUser())->all("status_user_id");
        if (isset($_POST['btn-submit'])) {
            $image = $_FILES['avatar'];
            $folder = "assets/img/avatar/";
            $file_name = basename($image['name']);
            $target = $folder . $file_name;
            move_uploaded_file($image["tmp_name"], $target);
            $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $data = [
                'username' => $_POST['user_name'],
                'avatar' => $file_name,
                'phone' => $_POST['phone'],
                'birth_day' => $_POST['birth_day'],
                'address' => $_POST['address'],
                'email' => $_POST['email'],
                'password' => $hashedPassword,
                'sex_id' => $_POST['sex_id'],
                'role_id' => $_POST['role_id'],
                'status_id' => $_POST['status_id']
            ];

            (new User)->insert($data);
            header('Location: /admin/users');
        }

        $this->renderAdmin('users/create', [
            'sexs' => $sex,
            'roles' => $role,
            'status' => $status
        ]);
    }

    public function update()
    {
        $sex = (new Sex())->all("sex_id");
        $role = (new Role())->all("role_id");
        $status = (new StatusUser())->all("status_user_id");
        if (isset($_POST['btn-submit'])) {
            if (isset($_FILES['password']) && $_FILES['password']['size'] > 0) {
                $image = $_FILES['avatar'];
                $image = $_FILES['avatar'];
                $folder = "assets/img/avatar/";
                $file_name = basename($image['name']);
                $target = $folder . $file_name;
                move_uploaded_file($image["tmp_name"], $target);
            } else {
                $file_name = $_POST['avatar_old'];
            }
            $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $data = [
                'username' => $_POST['user_name'],
                'avatar' => $file_name,
                'phone' => $_POST['phone'],
                'birth_day' => $_POST['birth_day'],
                'address' => $_POST['address'],
                'email' => $_POST['email'],
                'password' => $hashedPassword,
                'sex_id' => $_POST['sex_id'],
                'role_id' => $_POST['role_id'],
                'status_id' => $_POST['status_id']
            ];

            $conditions = [
                ['user_id', '=', $_GET['id']]
            ];

            (new User)->update($data, $conditions);
        }

        $user = (new User)->findOne('user_id', $_GET['id']);

        $this->renderAdmin('users/update', [
            'sexs' => $sex,
            'roles' => $role,
            'status' => $status,
            'user' => $user
        ]);
    }

    public function delete()
    {
        $conditions = [
            ['user_id', '=', $_GET['id']]
        ];

        (new User)->delete($conditions);

        header('Location:/admin/users');
    }
    public function active()
    {
        (new User)->updateStatus(1,$_GET['id']);
        header('Location:/admin/users/customer');
    }
    public function lock()
    {
        (new User)->updateStatus(2,$_GET['id']);
        header('Location:/admin/users/customer');
    }
}
