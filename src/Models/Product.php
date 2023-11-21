<?php

namespace Group4\BaseMvc\Models;

use Group4\BaseMvc\Model;

class Product extends Model {
    protected $table = 'products';
    protected $columns = [
        'name',
        'image',
        'price',
        'description',
        'type_id',
        'brand_id',
        'status_id'
    ];
}