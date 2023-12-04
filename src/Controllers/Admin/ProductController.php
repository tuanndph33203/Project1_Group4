<?php

namespace Group4\BaseMvc\Controllers\Admin;

use Group4\BaseMvc\Controller;

use Group4\BaseMvc\Models\Product;
use Group4\BaseMvc\Models\ProductDetail;

use Group4\BaseMvc\Models\Brand;
use Group4\BaseMvc\Models\Category;
use Group4\BaseMvc\Models\Skin;
use Group4\BaseMvc\Models\StatusProduct;
use Group4\BaseMvc\Models\Unit;

class ProductController extends Controller
{

    /* Lấy danh sách */
    public function index()
    {
        $brands = (new Brand())->all("brand_id");
        $types = (new Category())->all("type_id");
        $status = (new StatusProduct())->all("status_id");
        $columns = [
            "brand" => ['brand_name', 'brand_id'],
            "type" => ['type_name', 'type_id'],
            "status" => ['status_name', 'status_id']
        ];
        $where = [];

        foreach ($_POST as $key => $value) {
            if ($value !== null && $value !== '') {
                $where[$key] = $value;
            }
        }
        $groupByColumn = "product_id";
        $products = (new Product())->getAll($columns, $where, $groupByColumn);
        $this->renderAdmin(
            "products/index",
            [
                "products" => $products,
                "brands" => $brands,
                "types" => $types,
                "status" => $status
            ]
        );
    }

    /* Thêm mới */
    public function create()
    {
        $brands = (new Brand())->all("brand_id");
        $types = (new Category())->all("type_id");
        $skins = (new Skin())->all("skin_id");
        $units = (new Unit())->all("unit_id");
        if (isset($_POST["btn-submit"])) {
            $image = $_FILES['image'];
            $folder = "assets/img/product/";
            $file_name = basename($image['name']);
            $target = $folder . $file_name;
            move_uploaded_file($image["tmp_name"], $target);
            $time = time();
            $data = [
                'product_name' => $_POST['name'],
                'image' => $file_name,
                'description' => $_POST['description'],
                'time_create' => $time,
                'expiry' => $_POST['expiry'],
                'skin_id' => $_POST['skin_id'],
                'type_id' => $_POST['type_id'],
                'brand_id' => $_POST['brand_id'],
                'status_id' => 1,
                'unit_id' => $_POST['unit_id']
            ];
            $id = (new Product())->insert($data);
            header("Location:/admin/products/update?id=$id");
        }
        $this->renderAdmin(
            "products/create",
            [
                "types" => $types,
                "brands" => $brands,
                "skins" => $skins,
                "units" => $units,
            ]
        );
    }
    /* Cập nhật */
    public function update()
    {
        $brands = (new Brand())->all("brand_id");
        $types = (new Category())->all("type_id");
        $skins = (new Skin())->all("skin_id");
        $units = (new Unit())->all("unit_id");
        $status = (new StatusProduct())->all("status_id");
        $product = (new Product())->findOne('product_id', $_GET["id"]);
        $product_details = (new ProductDetail())->getAllProductDetail($_GET['id']);
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
                'description' => $_POST['description'],
                'time_create' => $product['time_create'],
                'expiry' => $_POST['expiry'],
                'skin_id' => $_POST['skin_id'],
                'type_id' => $_POST['type_id'],
                'brand_id' => $_POST['brand_id'],
                'status_id' => $_POST['status_id'],
                'unit_id' => $_POST['unit_id']
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
            [
                "types" => $types,
                "brands" => $brands,
                "skins" => $skins,
                "units" => $units,
                "status" => $status,
                "product" => $product,
                "product_details" => $product_details
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
