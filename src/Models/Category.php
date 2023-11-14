<?php

namespace Group4\BaseMvc\Models;

use Group4\BaseMvc\Model;

class Category extends Model {
    protected $table = 'categories';
    protected $columns = [
        'name',
    ];
}