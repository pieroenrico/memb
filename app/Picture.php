<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $table = 'pictures';
    protected $guarded = ['id'];

    /**
    **********************************
    RELATIONSHIPS
    **********************************
    **/
    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function text()
    {
        return $this->belongsTo(Text::class, 'text_id');
    }

    public function paragraph()
    {
        return $this->belongsTo(Paragraph::class, 'paragraph_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'pictures_tags', 'picture_id', 'tag_id');
    }

    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
