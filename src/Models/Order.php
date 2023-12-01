<?php

namespace Group4\BaseMvc\Models;

use Group4\BaseMvc\Model;

class Order extends Model {
    protected $table = 'order';
    protected $columns = [
        'user_id',
        'order_date',
        'total_price',
        'status_id'
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
}