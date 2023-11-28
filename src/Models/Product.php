<?php

namespace Group4\BaseMvc\Models;

use Group4\BaseMvc\Model;

class Product extends Model {
    protected $table = 'product';
    protected $columns = [
        'product_name',
        'image',
        'description',
        'time_create',
        'expiry',
        'skin_id',
        'type_id',
        'brand_id',
        'status_id',
        'unit_id'
    ];

}