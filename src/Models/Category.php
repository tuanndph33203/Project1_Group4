<?php

namespace Group4\BaseMvc\Models;

use Group4\BaseMvc\Model;

class Category extends Model {
    protected $table = 'types';
    protected $columns = [
        'type_name',
    ];
}