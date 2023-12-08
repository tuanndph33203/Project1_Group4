<?php

namespace Group4\BaseMvc\Models;

use Group4\BaseMvc\Model;

class comment extends Model {
    protected $table = 'comment';
    protected $columns = [
        'user_id ',
        'product_id ',
        'rating',
        'title',
        'comment',
        'comment_date',
    ];
    public function comment_product() {
        $sql = "SELECT *
        FROM comment
        WHERE product_id = (
          SELECT product_id
          FROM comment  
          ORDER BY product_id DESC 
          LIMIT 1
        ) AND user_id = (
          SELECT user_id
          FROM comment
          ORDER BY user_id DESC
          LIMIT 1  
        )";
        
        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();

    }
    public function getAllcomment() {
        $sql = "select * from comment ";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();

    }
}