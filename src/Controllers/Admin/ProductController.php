<?php

namespace Group4\BaseMvc\Controllers\Admin;

use Group4\BaseMvc\Controller;
use Group4\BaseMvc\Models\Product;
use Group4\BaseMvc\Models\Brand;
use Group4\BaseMvc\Models\Category;

class ProductController extends Controller
{

    /* Lấy danh sách */
    public function index()
    {

        $products = (new Product())->all("type_id");

        $this->renderAdmin("products/index", ["products" => $products]);
    }
    /* Thêm mới */
    public function create()
    {
        $brands = (new Brand())->all("brand_id");
        $types = (new Category())->all("type_id");
        if (isset($_POST["btn-submit"])) {
            // if(!isset($_POST['name'])&&$_POST['name']=null){
            //     $_SESSION['error']['name'] = "Bạn chưa nhập tên sản phẩm";
            // }
            // if(!isset($_FILES['image'])&&$_FILES['image']['size']<0){
            //     $_SESSION['error']['image'] = "Bạn chưa nhập ảnh sản phẩm";
            // }else{
            //     $image = $_FILES['image'];
            // }
            // if(!isset($_POST['price'])&&$_POST['price']=null){
            //    $_SESSION['error']['price'] = "Bạn chưa nhập giá sản phẩm";
            // }
            // if(!isset($_POST['description'])&&$_POST['description']=null){
            //     $_SESSION['error']['description'] = "Bạn chưa nhập mô tả sản phẩm";
            // }
            // if (!isset($_SESSION['error'])&&$_SESSION['error'] = null) {  
            $image = $_FILES['image'];
            $folder = "assets/img/product/";
            $file_name = basename($image['name']);
            $target = $folder . $file_name;
            move_uploaded_file($image["tmp_name"], $target);
            // $_SESSION['error']['submit'] = "Thêm Thành Công";
            $data = [
                'name' => $_POST['name'],
                'image' => $file_name,
                'price' => $_POST['price'],
                'description' => $_POST['description'],
                'type_id' => $_POST['type_id'],
                'brand_id' => $_POST['brand_id'],
                'status_id' => 1
            ];
            (new Product())->insert($data);
            // }else{
            //     $_SESSION['error']['submit'] = "Thêm Thất Bại";
            // }

            header('Location: /admin/products');
        }
        $this->renderAdmin(
            "products/create",
            $data = [
                "types" => $types,
                "brands" => $brands,
            ]
        );
    }
    /* Cập nhật */
    public function update()
    {
        if (isset($_POST["btn-submit"])) {
            $data = [
                'name' => $_POST['name'],
            ];

            if (isset($_GET['id'])) {
                $conditions = [
                    ['id', '=', $_GET['id']],
                ];

                $product = new Product();
                $product->update($data, $conditions);
            }
        }

        $Product = (new Product())->findOne('id', $_GET["id"]);

        $this->renderAdmin("products/update", ["product" => $product]);
    }

    /* Xóa */
    public function delete()
    {
        $conditions = [
            ['id', '=', $_POST['id']],
        ];
        (new Product())->delete($conditions);
        header('Location: /admin/poducts');
    }
}