<?php

namespace Group4\BaseMvc\Models;

use Group4\BaseMvc\Model;


class Product extends Model
{
    protected $table = 'product';
    protected $columns = [
        'product_name',
        'image',
        'description',
        'time_create',
        'expiry',
        'skin_id',
        'type_id',
        'brand_id',
        'status_id',
        'unit_id'
    ];

    // Lấy ra tất cả sản phẩm theo ID danh mục, được order by theo ID sản phẩm
    public function get10ByproductID()
    {
        $sql = "SELECT p.*,MIN(pd.price) AS min_price  FROM product p 
        INNER JOIN product_detail pd ON p.product_id = pd.product_id 
        WHERE 1 
        GROUP BY p.product_id, p.product_name 
        ORDER BY p.product_id DESC LIMIT 0,8;
        ";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }
    public function getAllByproductID($product_type_id)
    {
        $sql = "
            SELECT 
                *
            FROM product p 
           
            ORDER BY p.product_id DESC 
        ";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }
    public function Getone_product($product_id){
        $sql = "
        SELECT 
            *
        FROM product p 

        where p.product_id = :product_id
    ";
    $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':product_id', $product_id);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetch();
    }
    public function GetrElated_products(){
        $sql = "select * 
        from type t

        ORDER BY t.type_id DESC
        ";
        
        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }
}
