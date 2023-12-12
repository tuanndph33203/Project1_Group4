<?php

namespace Group4\BaseMvc\Controllers\Admin;

use Group4\BaseMvc\Controller;
use Group4\BaseMvc\Models\OrderDetail;
use Group4\BaseMvc\Models\Order;
use Group4\BaseMvc\Models\Brand;
use Group4\BaseMvc\Models\Category;
use Group4\BaseMvc\Models\Unit;
use Group4\BaseMvc\Models\Product;

class StatisticalController extends Controller
{
    public function index() {
        $order_details = (new OrderDetail())->all("order_id");
        $types = (new Category())->count();
        $brands = (new Brand())->count();
        $units = (new Unit())->count();
        $orders = (new Order())->all("order_id");
        $month_order = (new Order())->monthOrder(date("Y-m"));
        $charts = [];
        $columns = [
            "skin" => ['skin_name', 'skin_id'],
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
        for ($i=1; $i <= 12 ; $i++) { 
            $charts[$i] = (new Order())->monthOrder(date("Y-$i"));
        }
        $this->renderAdmin('statistical/statistical',[
            "orders" => $orders,
            "order_details"=> $order_details,
            "month_order"=> $month_order,
            "charts"=> $charts,
            "types" => $types,
            "brands" => $brands,
            "units" => $units,
            "products" => $products
        ]);
    }
}
