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
        $orders = (new Order())->getAll($columns,$where,'order_id');
        $orders_detail = [];
        foreach ($orders as $key => $order) {
            $orders_detail[$key] = (new OrderDetail())->getOderDetail($order['order_id']);
        }
        $this->renderAdmin("orders/index", 
        [
            "orders" => $orders,
            "orders_detail" => $orders_detail
        ]);
    }

    /* Thêm mới */
    // public function create() {
    //     if (isset($_POST["btn-submit"])) { 
    //         $data = [
    //             'type_name' => $_POST['name'],
    //         ];
    //         print_r($data);
    //         (new Order())->insert($data);
    //         header('Location: /admin/categories');
    //     }
    //     $this->renderAdmin("categories/create");
    // }
    // /* Cập nhật */
    // public function update()
    // {
    //     if (isset($_POST["btn-submit"])) {
    //         $data = [
    //             'type_name' => $_POST['name'],
    //         ];
    
    //         if (isset($_GET['type_id'])) {
    //             $conditions = [
    //                 ['type_id', '=', $_GET['type_id']],
    //             ];
    
    //             $category = new Order();
    //             $category->update($data, $conditions);
    //         }
    //     }
    
    //     $category = (new Order())->findOne('type_id', $_GET["type_id"]);
    
    //     $this->renderAdmin("categories/update", ["category" => $category]);
    // }

    // /* Xóa */
    // public function delete() {
    //     $conditions = [
    //         ['type_id', '=', $_POST['type_id']],
    //     ];
    //     (new Order())->delete($conditions);
    //     header('Location: /admin/categories');
    // }
}