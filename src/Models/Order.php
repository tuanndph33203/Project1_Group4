<?php

namespace Group4\BaseMvc\Models;

use Group4\BaseMvc\Model;

class Order extends Model {
    protected $table = 'order';
    protected $columns = [
        'receiver',
        'order_phone',
        'order_address',
        'order_date',
        'total_price',
        'user_id',
        'status_order_id',
        'pay_id'
    ];
    public function updateStatusOrder($id,$status_id){
        $sql = "UPDATE `order` SET 
        status_order_id = :status_id
        WHERE order.order_id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':status_id',$status_id);
        $stmt->execute();
    }
    public function updatePay($id,$pay_id){
        $sql = "UPDATE `order` SET 
        pay_id = :pay_id
        WHERE order.order_id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id',$id); 
        $stmt->bindParam(':pay_id',$pay_id);
        $stmt->execute();
    }
    public function monthOrder($date){
        $sql = "SELECT count(*) as total_orders, SUM(total_price) as total_price FROM `order`
                WHERE DATE_FORMAT(order_date, '%Y-%m') = :date;";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':date', $date);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }
}