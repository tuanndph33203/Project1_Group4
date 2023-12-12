<?php

namespace Group4\BaseMvc\Models;

use Group4\BaseMvc\Model;

class StatusUser extends Model {
    protected $table = 'status_user';
    protected $columns = [
        'status_user_name'
    ];
}