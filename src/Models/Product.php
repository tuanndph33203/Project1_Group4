<?php

namespace Group4\BaseMvc\Models;

use Group4\BaseMvc\Model;


class Product extends Model
{
    protected $table = 'product';
    protected $columns = [
        'category_id',
        'name',
        'price',
        'price_sale',
        'img',
        'description',
        'is_active',
    ];

    // Lấy ra tất cả sản phẩm theo ID danh mục, được order by theo ID sản phẩm
    public function get10ByproductID($product_type_id)
    {
        $sql = "SELECT p.*,MIN(pd.price) AS min_price  FROM product p 
        INNER JOIN product_detail pd ON p.product_id = pd.product_id 
        WHERE 1 
        GROUP BY p.product_id, p.product_name 
        ORDER BY p.product_id DESC LIMIT 0,6;
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
}
