<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';
    protected $guarded = ['id'];

    /**
    **********************************
    ATTRIBUTES
    **********************************
    **/
    public function getFullnameAttribute()
    {
        return $this->attributes['name'] . ' ' . $this->attributes['lastname'];
    }
}
