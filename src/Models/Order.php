<?php

namespace Group4\BaseMvc\Models;

use Group4\BaseMvc\Model;

class Order extends Model {
    protected $table = 'order';
    protected $columns = [
        'user_id',
        'order_date',
        'total_price',
        'status_id'
    ];
}