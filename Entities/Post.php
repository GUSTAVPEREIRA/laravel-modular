<?php

namespace Son\Blog\Entities;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body'];

    protected $table = 'posts';

    protected function getAuthorAttribute()
    {
        return 'Gustavo Pereira';
    }
}
