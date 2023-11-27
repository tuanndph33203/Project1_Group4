<?php

namespace Group4\BaseMvc\Models;

use Group4\BaseMvc\Model;

class Role extends Model {
    protected $table = 'role';
    protected $columns = [
        'role_name'
    ];
}