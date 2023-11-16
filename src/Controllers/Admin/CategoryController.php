<?php 

namespace Group4\BaseMvc\Controllers\Admin;

use Group4\BaseMvc\Controller;
use Group4\BaseMvc\Models\Category;

class CategoryController extends Controller {

    /* Lấy danh sách */
    public function index() {
        $categories = (new Category())->all("type_id");

        $this->renderAdmin("categories/index", ["categories" => $categories]);
    }

    /* Thêm mới */
    public function create() {
        if (isset($_POST["btn-submit"])) { 
            $data = [
                'type_name' => $_POST['name'],
            ];
            print_r($data);
            (new Category())->insert($data);
            header('Location: /admin/categories');
        }
        $this->renderAdmin("categories/create");
    }
    /* Cập nhật */
    public function update()
    {
        if (isset($_POST["btn-submit"])) {
            $data = [
                'type_name' => $_POST['name'],
            ];
    
            if (isset($_GET['type_id'])) {
                $conditions = [
                    ['type_id', '=', $_GET['type_id']],
                ];
    
                $category = new Category();
                $category->update($data, $conditions);
            }
        }
    
        $category = (new Category())->findOne('type_id', $_GET["type_id"]);
    
        $this->renderAdmin("categories/update", ["category" => $category]);
    }

    /* Xóa */
    public function delete() {
        $conditions = [
            ['type_id', '=', $_POST['type_id']],
        ];
        (new Category())->delete($conditions);
        header('Location: /admin/categories');
    }
}