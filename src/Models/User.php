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
}
