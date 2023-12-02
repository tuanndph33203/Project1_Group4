<?php 

namespace Group4\BaseMvc\Controllers\Admin;

use Group4\BaseMvc\Controller;
use Group4\BaseMvc\Models\Order;
use Group4\BaseMvc\Models\OrderDetail;

class OrderController extends Controller {

    /* Lấy danh sách */
    public function index() {
        $columns = [
            "user" => ['username', 'user_id','address'],
            "status_order" => ['status_order_name', 'status_order_id']
           
        ];
        $where = [];
        if (isset($_GET['id'])) {
            $where["status_order_id"] = $_GET['id'];
        }
        
        $orders = (new Order())->getAll($columns,$where,'order_id');
        $orders_detail = [];
        foreach ($orders as $key => $order) {
            $orders_detail[$key] = (new OrderDetail())->getOderDetail($order['order_id']);
        }
        // print_r($orders);
        $this->renderAdmin("orders/index", 
        [
            "orders" => $orders,
            "orders_detail" => $orders_detail
        ]);
    }

    /* Thêm mới */
    public function detail() {
        $id = $_GET['id'];
        $columns = [
            "user" => ['username', 'user_id'],
            "status_order" => ['status_order_name', 'status_order_id'],
            "pay" => ['pay_name', 'pay_id']
        ];
        $where = [
            "order_id" => $id
        ];
        $order = (new Order())->getAll($columns,$where,'order_id');
        $order_detail = (new OrderDetail())->getOderDetail($order[0]['order_id']);
        print_r($order_detail);
        $this->renderAdmin("orders/detail", 
        [
            "order" => $order[0],
            "order_detail" => $order_detail
        ]);
    }
    // /* Cập nhật */
    public function status()
    {
        (new Order())->updateStatusOrder($_GET['id'], $_GET["act"]);
    
        header("Location:/admin/orders");
    }

    // /* Xóa */
    // public function delete() {
    //     $conditions = [
    //         ['type_id', '=', $_POST['type_id']],
    //     ];
    //     (new Order())->delete($conditions);
    //     header('Location: /admin/categories');
    // }
}