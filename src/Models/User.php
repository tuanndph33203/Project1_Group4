<?php

namespace Group4\BaseMvc\Models;

use Group4\BaseMvc\Model;

class User extends Model {
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
}