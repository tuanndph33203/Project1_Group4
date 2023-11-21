<?php 

namespace Group4\BaseMvc\Controllers\Admin;

use Group4\BaseMvc\Controller;
use Group4\BaseMvc\Models\Brand;

class BrandController extends Controller {

    /* Lấy danh sách */
    public function index() {
        $brands = (new Brand())->all("brand_id");

        $this->renderAdmin("brands/index", ["brands" => $brands]);
    }

    /* Thêm mới */
    public function create() {
        if (isset($_POST["btn-submit"])) { 
            $image = $_FILES['image'];
            $folder = "assets/img/brand/";
            $file_name = basename($image['name']);
            $target = $folder . $file_name;
            move_uploaded_file($image["tmp_name"], $target);
            $data = [
                'brand_name' => $_POST['name'],
                'logo' => $file_name
            ];
            (new Brand())->insert($data);
            header('Location: /admin/brands/create');
        }
        $this->renderAdmin("brands/create");
    }
    /* Cập nhật */
    public function update()
    {
        if (isset($_POST["btn-submit"])) {
            $data = [
                'brand_name' => $_POST['name'],
            ];
    
            if (isset($_GET['id'])) {
                $conditions = [
                    ['brand_id', '=', $_GET['id']],
                ];
    
                $brand = new Brand();
                $brand->update($data, $conditions);
            }
        }
    
        $brand = (new Brand())->findOne('brand_id', $_GET["id"]);
    
        $this->renderAdmin("brands/update", ["brand" => $brand]);
    }

    /* Xóa */
    public function delete() {
        $conditions = [
            ['brand_id', '=', $_POST['id']],
        ];
        (new Brand())->delete($conditions);
        header('Location: /admin/brands');
    }
}