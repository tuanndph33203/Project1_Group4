<?php

namespace Group4\BaseMvc\Models;

use Group4\BaseMvc\Model;

class Cart extends Model {
    protected $table = 'type';
    protected $columns = [
        'product_id',
        'size',
        'user_id',
        'quantity',
        'price'
    ];
    public function Mycart() {
        $sql = "select product.image , product.product_name , cart.size , cart.quantity, cart.price
        from cart 
        inner join product on cart.product_id = product.product_id";
        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }
}