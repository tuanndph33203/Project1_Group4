<?php

namespace Group4\BaseMvc\Models;

use Group4\BaseMvc\Model;

class OrderDetail extends Model {
    protected $table = 'order_detail';
    protected $columns = [
        'order_id',
        'product_id',
        'size',
        'quantity',
        'price',
        'subtotal'
    ];
    public function getOderDetail($id){
        $sql = "SELECT
        product.product_name,
        unit.unit_name,
        product_detail.size,
        SUM(order_detail.quantity) AS total_quantity
    FROM
        order_detail
        INNER JOIN product_detail ON order_detail.product_id = product_detail.product_id
        INNER JOIN product ON product.product_id = product_detail.product_id
        INNER JOIN unit ON product.unit_id = unit.unit_id
    WHERE
        order_detail.order_id = :id
    GROUP BY
        product_detail.product_id,
        product_detail.size";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
}