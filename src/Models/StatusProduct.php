<?php

namespace Group4\BaseMvc\Models;

use Group4\BaseMvc\Model;

class StatusProduct extends Model {
    protected $table = 'status';
    protected $columns = [
        'status_name'
    ];
}