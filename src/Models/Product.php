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
        $sql = "SELECT p.*, pd.size, pd.price AS min_price
        FROM product p
        INNER JOIN (
            SELECT product_id, MIN(price) AS min_price
            FROM product_detail
            GROUP BY product_id
        ) AS pd_min ON p.product_id = pd_min.product_id
        INNER JOIN product_detail pd ON pd.product_id = pd_min.product_id AND pd.price = pd_min.min_price
        ORDER BY p.product_id DESC
        LIMIT 0, 8;;
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
    public function Search(){
        if(isset($_POST['sub_search'])){
            $search = $_POST['search'];
        }
        $sql = "select * from product p, type t where t.type_id = t.type_id and p.product_name like '%".$search."%' ";
        
        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();

    }
}
