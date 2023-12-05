<?php

namespace Group4\BaseMvc\Models;

use Group4\BaseMvc\Model;

class User extends Model
{
    protected $table = 'user';
    protected $columns = [
        'avatar',
        'username',
        'phone',
        'birth_day',
        'address',
        'email',
        'password',
        'sex_id',
        'role_id',
        'status_id'
    ];
    public function updateStatus($status_id, $user_id)
    {
        $sql = "UPDATE `user` SET `status_id` = :status_id WHERE user_id = :user_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':status_id', $status_id, \PDO::PARAM_INT);
        $stmt->bindParam(':user_id', $user_id, \PDO::PARAM_INT);
        $stmt->execute();
        // Không cần thực hiện fetchAll() nếu bạn chỉ muốn cập nhật dữ liệu,
        // vì câu lệnh UPDATE không trả về kết quả dữ liệu.
        // Trả về true hoặc false để biểu thị thành công hoặc thất bại
        return $stmt->rowCount() > 0;
    }
    public function register_user($avatar, $username, $phone,  $email, $password, $birth_day, $address){
        $sql = "insert into user( avatar, username, phone, email, password, birth_day, address value(':avatar',':username', ':phone', ':email', ':password,':birth_day',':address')";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":avatar", $avatar, \PDO::PARAM_STR_CHAR);
        $stmt->bindParam(":username", $username, \PDO::PARAM_STR);
        $stmt->bindParam(":phone", $phone, \PDO::PARAM_INT);
        $stmt->bindParam(":email", $email, \PDO::PARAM_STR);
        $stmt->bindParam(":password", $password, \PDO::PARAM_STR);
        $stmt->bindParam(":birth_day", $birth_day, \PDO::PARAM_INT);
        $stmt->bindParam(":address", $address, \PDO::PARAM_STR);
        // $stmt->bindParam("sex_id", $sex_id, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }
}
