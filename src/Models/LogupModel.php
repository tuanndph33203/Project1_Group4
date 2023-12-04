<?php

namespace Group4\BaseMvc\Models;

use Group4\BaseMvc\Model;
    class LogupModel extends Model {
        public function logup($username, $password, $email, $phone,) {
            $sql = "SELECT * FROM user where username = '{$username}'";
            
            $stmt = $this->conn->prepare($sql);

            $stmt->execute();
    
            $stmt->setFetchMode(\PDO::FETCH_ASSOC);
    
            return $stmt->fetchAll();
        }
    }     
?>