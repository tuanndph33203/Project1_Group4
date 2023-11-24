<?php

namespace Group4\BaseMvc\Controllers\Admin;

use Group4\BaseMvc\Controller;
use Group4\BaseMvc\Models\Product;
use Group4\BaseMvc\Models\Brand;
use Group4\BaseMvc\Models\Category;
use Group4\BaseMvc\Models\Skin;
use Group4\BaseMvc\Models\StatusProduct;

class ProductController extends Controller
{

    /* Lấy danh sách */
    public function index()
    {
        $columns = [
            "brand" => ['brand_name', 'brand_id'],
            "type" => ['type_name', 'type_id'],
            "status" => ['status_name', 'status_id']
        ];
        $where = [
            "status_id" => 1
        ];
        $groupByColumn = "product_id";

        $products = (new Product())-> getAll($columns, $where, $groupByColumn);
        $this->renderAdmin("products/index", ["products" => $products]);
    }
    /* Thêm mới */
    public function create()
    {
        $brands = (new Brand())->all("brand_id");
        $types = (new Category())->all("type_id");
        $skins = (new Skin())->all("skin_id");
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
            $time = time();
            $data = [
                'product_name' => $_POST['name'],
                'image' => $file_name,
                'price' => $_POST['price'],
                'description' => $_POST['description'],
                'time_create' => $time,
                'expiry' => $_POST['expiry'],
                'skin_id' => $_POST['skin_id'],
                'type_id' => $_POST['type_id'],
                'brand_id' => $_POST['brand_id'],
                'status_id' => 1
            ];
            (new Product())->insert($data);
            // }else{
            //     $_SESSION['error']['submit'] = "Thêm Thất Bại";
            // }

            header('Location:/admin/products/create');
        }
        $this->renderAdmin(
            "products/create",
            $data = [
                "types" => $types,
                "brands" => $brands,
                "skins" => $skins
            ]
        );
    }
    /* Cập nhật */
    public function update()
    {
        $brands = (new Brand())->all("brand_id");
        $types = (new Category())->all("type_id");
        $skins = (new Skin())->all("skin_id");
        $status = (new StatusProduct())->all("status_id");
        $product = (new Product())->findOne('product_id', $_GET["id"]);
        if (isset($_POST["btn-submit"])) {
            if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
                $image = $_FILES['image'];
                $folder = "assets/img/product/";
                $file_name = basename($image['name']);
                $target = $folder . $file_name;
                move_uploaded_file($image["tmp_name"], $target);
            } else {
                $file_name = $product['image'];
            }
            $data = [
                'product_name' => $_POST['name'],
                'image' => $file_name,
                'price' => $_POST['price'],
                'description' => $_POST['description'],
                'time_create' => $product['time_create'],
                'expiry' => $_POST['expiry'],
                'skin_id' => $_POST['skin_id'],
                'type_id' => $_POST['type_id'],
                'brand_id' => $_POST['brand_id'],
                'status_id' => $_POST['status_id']
            ];

            if (isset($_GET['id'])) {
                $conditions = [
                    ['product_id', '=', $_GET['id']],
                ];
                $product = (new Product())->update($data, $conditions);
            }
        }

        $product = (new Product())->findOne('product_id', $_GET["id"]);

        $this->renderAdmin(
            "products/update",
            $data = [
                "types" => $types,
                "brands" => $brands,
                "skins" => $skins,
                "status" => $status,
                "product" => $product
            ]
        );
    }

    /* Xóa */
    public function delete()
    {
        $conditions = [
            ['product_id', '=', $_POST['id']],
        ];
        (new Product())->delete($conditions);
        header('Location:/admin/products');
    }
}
