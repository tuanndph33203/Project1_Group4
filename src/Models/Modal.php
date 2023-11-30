<?php

namespace Group4\BaseMvc\Models;

use Group4\BaseMvc\Model;

class Modal extends Model {
    protected $table = 'modal';
    protected $columns = [
        'type_name',
    ];
}