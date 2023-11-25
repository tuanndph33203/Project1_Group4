<?php

namespace Group4\BaseMvc\Models;

use Group4\BaseMvc\Model;

class User extends Model {
    protected $table = 'user';
    protected $columns = [
        'name',
        'email',
        'address',
        'password',
    ];
}