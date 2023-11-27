<?php

namespace Group4\BaseMvc\Models;

use Group4\BaseMvc\Model;

class Sex extends Model {
    protected $table = 'sex';
    protected $columns = [
        'sex_name'
    ];
}