<?php

namespace Group4\BaseMvc\Models;

use Group4\BaseMvc\Model;

class Category extends Model {
    protected $table = 'comment';
    protected $columns = [
        'user_id ',
        'product_id ',
        'rating',
        'title',
        'comment',
        'comment_date',
    ];
    public function comment_product($product_id,$user_id) {
        $sql = "SELECT * FROM comment 
        WHERE (product_id, user_id) IN (
          SELECT product_id, user_id 
          FROM comments
          GROUP BY product_id, user_id
          ORDER BY id DESC
          LIMIT 1
        )";
        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();

    }
    public function getAllcomment() {
        $sql = "select * from comment";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();

    }
}