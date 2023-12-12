<?php

namespace Group4\BaseMvc\Models;

use Group4\BaseMvc\Model;

class OrderDetail extends Model
{
    protected $table = 'order_detail';
    protected $columns = [
        'order_id',
        'product_id',
        'size',
        'quantity',
        'subtotal'
    ];
    public function getOderDetail($id)
    {
        $sql = "SELECT
        order_detail.*,
        product.product_name,
        product_detail.price,
        product.image,
        unit.unit_name
   FROM
       order_detail
       INNER JOIN product_detail ON order_detail.product_id = product_detail.product_id 
       AND order_detail.size = product_detail.size
       INNER JOIN product ON product_detail.product_id = product.product_id
       INNER JOIN unit ON product.unit_id = unit.unit_id
   WHERE
       order_detail.order_id = :id
   GROUP BY
   order_detail.product_id,
       order_detail.size,
       product_detail.product_id,
       product_detail.size";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
}
