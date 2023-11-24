<?php

namespace Group4\BaseMvc\Models;

use Group4\BaseMvc\Model;

class Brand extends Model {
    protected $table = 'brand';
    protected $columns = [
        'brand_name',
        'logo'
    ];
}