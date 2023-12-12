<?php

namespace Group4\BaseMvc\Models;

use Group4\BaseMvc\Model;

class Post extends Model {
    protected $table = 'post';
    protected $columns = [
        'title',
        'content',
        'image',
        'created_at',
        'updated_at'
    ];
}