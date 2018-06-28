<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    protected $table = 'texts';
    protected $guarded = ['id'];

    /**
    **********************************
    RELATIONSHIPS
    **********************************
    **/
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }
}
