<?php

namespace Group4\BaseMvc\Controllers\Admin;

use Group4\BaseMvc\Controller;
use Group4\BaseMvc\Models\ProductDetail;

class ProductDetailController extends Controller
{
    public function create()
    {
        if (isset($_POST["btn-create"])) {
            $id = $_POST['product_id'];
            $size = $_POST['size'];
            $product_details = (new ProductDetail())->getAllProductDetail($id);
            $count = 0; // Cờ để kiểm tra sự trùng lặp

            foreach ($product_details as $product_detail) {
                if ($product_detail['size'] == $size && $product_detail['product_id'] == $id) {
                    $count = 1;
                    break;
                }
            };
            if ($count == 0) {
                // Thực hiện câu lệnh INSERT vào cơ sở dữ liệu
                $data = [
                    'size' => $size,
                    'price' => $_POST['price'],
                    'quantity' => $_POST['quantity'],
                    'product_id' => $id,
                ];
                (new ProductDetail())->insert($data);
            }
        }
        header("Location: /admin/products/update?id=$id");
    }
    /* Cập nhật */
    public function update()
    {
        $id = $_POST["product_id"]; 
        if (isset($_POST["btn-update"])) {
            $count = 0; // Cờ để kiểm tra sự trùng lặp
            $product_details = (new ProductDetail())->getAllProductDetail($id);
            foreach ($product_details as $product_detail) {
                if ($product_detail['size'] == $_POST['size'] && $product_detail['product_id'] == $id && $_POST['size']!==$_POST['size_old']) {
                    $count = 1;
                    break;
                }
            };
            if ($count == 0) {
                // Thực hiện câu lệnh INSERT vào cơ sở dữ liệu
                $data = [
                    'size' => $_POST['size'],
                    'price' => $_POST['price'],
                    'quantity' => $_POST['quantity']
                ];
                $conditions = [
                    'product_id'=> $id,
                    'size' => $_POST['size_old']
                ];
                print_r($conditions);
                (new ProductDetail())->updateProductDetail($data,$conditions);
            }
        };
     
        header("Location:/admin/products/update?id=$id");
    }

    /* Xóa */
    public function delete()
    {
        $id = $_GET['id'];
        (new ProductDetail())->deleteProductDetail($id, $_GET['size']);
        header("Location:/admin/products/update?id=$id");
    }
}
