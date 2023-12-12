<?php

namespace Group4\BaseMvc\Models;

use Group4\BaseMvc\Model;

class ProductDetail extends Model
{
    protected $table = 'product_detail';
    protected $columns = [
        'size',
        'price',
        'quantity',
        'product_id'
    ];
    public function getAllProductDetail($product_id)
    {
        $sql = "SELECT * FROM product_detail 
        WHERE product_id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $product_id, \PDO::PARAM_INT);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
    public function deleteProductDetail($product_id, $size)
    {
        $sql = "DELETE FROM product_detail 
        WHERE product_id = :id AND size = :size";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $product_id, \PDO::PARAM_INT);
        $stmt->bindParam(':size', $size, \PDO::PARAM_INT);
        $stmt->execute();
    }
    public function updateProductDetail($data, $condition)
    {
        $sql = "UPDATE product_detail SET 
        price = :price,
        quantity = :quantity,
        size = :size
        WHERE product_id = :id AND size = :sizeOld";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':price', $data['price']);
        $stmt->bindParam(':quantity', $data['quantity']);
        $stmt->bindParam(':size', $data['size']);
        $stmt->bindParam(':id', $condition['product_id']);
        $stmt->bindParam(':sizeOld', $condition['size']);
        $stmt->execute();
    }
}
