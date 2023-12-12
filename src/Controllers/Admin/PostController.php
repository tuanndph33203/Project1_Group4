<?php

namespace Group4\BaseMvc\Controllers\Admin;

use Group4\BaseMvc\Controller;
use Group4\BaseMvc\Models\Post;

class PostController extends Controller
{
    /* Lấy danh sách */
    public function index()
    {
        $posts = (new Post())->all('post_id');
        $this->renderAdmin(
            "post/index",
            [
                "posts" => $posts
            ]
        );
    }
    public function update()
    {
        $post = (new Post())->findOne('post_id',$_GET['id']);
        $this->renderAdmin(
            "post/update",
            [
                "post" => $post
            ]
        );
    }
    public function delete()
    {
        $conditions = [
            ['post_id', '=', $_GET['id']],
        ];
        (new Post())->delete($conditions);
        header('Location:/admin/post');
    }
    public function create()
    {
        if (isset($_POST["add_post"])) { 
            $image = $_FILES['image'];
            $folder = "assets/img/cart/";
            $file_name = basename($image['name']);
            $target = $folder . $file_name;
            move_uploaded_file($image["tmp_name"], $target);
            $time = date("Y-m-d H:i:s");
            $data = [
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'image' => $file_name,
                'created_at' => $time,
                'updated_at' => null
            ];
            (new Post())->insert($data);
            header('Location:/admin/post/create');
        }
        $this->renderAdmin("post/create");
    }
}
