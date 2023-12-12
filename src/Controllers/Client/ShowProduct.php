<?php

namespace Group4\BaseMvc\Controllers\Client;

use Group4\BaseMvc\Controller;

use Group4\BaseMvc\Models\Product;
use Group4\BaseMvc\Models\ProductDetail;
use Group4\BaseMvc\Models\comment;

class ShowProduct extends Controller
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
        $getAllcomment = (new comment()) ->getAllcomment($product[0]["product_id"]);
        print_r($product);
        $this->renderClient(
            "components/product_detail/product_detail",
            [
                "product" => $product[0],
                "product_details" => $product_details,
                "getAllcomment"=> $getAllcomment,
                
            ]
        );
    }
}
