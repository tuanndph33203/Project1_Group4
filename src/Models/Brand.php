<?php

namespace Group4\BaseMvc\Models;

use Group4\BaseMvc\Model;

class Brand extends Model {
    protected $table = 'brands';
    protected $columns = [
        'brand_name',
    ];
}