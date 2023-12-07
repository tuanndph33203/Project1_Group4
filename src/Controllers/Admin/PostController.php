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
        $posts = (new Post())->all('post_id');
        $this->renderAdmin(
            "post/update",
            [
                "posts" => $posts
            ]
        );
    }
    public function create()
    {
        $posts = (new Post())->all('post_id');
        $this->renderAdmin(
            "post/create",
            [
                "posts" => $posts
            ]
        );
    }
}
