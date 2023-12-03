<?php

namespace Group4\BaseMvc\Controllers\Client;

use Group4\BaseMvc\Controller;

use Group4\BaseMvc\Models\Product;
use Group4\BaseMvc\Models\ProductDetail;
use Group4\BaseMvc\Models\Order;
use Group4\BaseMvc\Models\OrderDetail;

class ShowShoping extends Controller
{
    public function index()
    {
        $columns = [
            "brand" => ['brand_name', 'brand_id'],
            "type" => ['type_name', 'type_id'],
            "status" => ['status_name', 'status_id'],
            "skin" => ['skin_name', 'skin_id'],
            "unit" => ['unit_name', 'unit_id']
        ];
        $where = [
            'product_id' => $_GET['id']
        ];

        $groupByColumn = "product_id";
        $product = (new Product())->getAll($columns, $where, $groupByColumn);
        $product_details = (new ProductDetail())->getAllProductDetail($product[0]["product_id"]);
        $this->renderClient(
            "shoping/product_detail",
            [
                "product" => $product[0],
                "product_details" => $product_details
            ]
        );
    }
    public function checkout()
    {
        $columns = [
            "brand" => ['brand_name', 'brand_id'],
            "type" => ['type_name', 'type_id'],
            "status" => ['status_name', 'status_id'],
            "skin" => ['skin_name', 'skin_id'],
            "unit" => ['unit_name', 'unit_id']
        ];
        $where = [
            'product_id' => $_POST['product_id']
        ];

        $groupByColumn = "product_id";
        $product = (new Product())->getAll($columns, $where, $groupByColumn);
        if (isset($_POST['add-order'])) {
            print_r($_POST);
            $this->renderClient(
                "shoping/checkout",
                [
                    "data" => $_POST,
                    "product" => $product[0]
                ]
            );
        }else{
            header("Location:/");
        }
    }
    public function addOrder(){
        if (isset($_POST["submit-order"])) {
            $date = date("Y-m-d", time());
            $data = [
                'receiver' => $_POST['receiver'],
                'order_phone' => $_POST['order_phone'],
                'order_address' => $_POST['order_address'],
                'order_date' => $date,
                'total_price' => $_POST['total_price'],
                'user_id' => 2,
                'status_order_id' => 1,
                'pay_id' => 1
            ];
            $id = (new Order())->insert($data);
            $data_detail = [
                'order_id' => $id,
                'product_id' => $_POST['product_id'],
                'size' => $_POST['size'],
                'quantity' => $_POST['quantity'],
                'subtotal' => $_POST['subtotal']
            ];
            (new OrderDetail())->insert($data_detail);
            header("location:/client/shoping/success");
        }else{
            header("location:/client/shoping/error");
        }
    }
    public function success(){
        $this->renderClient(
            "shoping/success");
    }
    public function error(){
        $this->renderClient(
            "shoping/error");
    }
}