<?php

namespace App\Http\Controllers\API;

use App\Http\RichModels\Picturext;
use App\Picture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PicturextController extends Controller
{
    public function picturexts(){

        /**
         * search by
         * - author
         * - text
         * - paragraph
         * - tags
         * - user
         */

        $author_id = request()->get('author');
        $text_id = request()->get('text');
        $paragraph_id = request()->get('paragraph');
        $author_id = request()->get('author');
        $tag = request()->get('tag');
        $user_id = request()->get('user');

        $picturexts_builder = Picture::with('text', 'paragraph', 'location', 'tags', 'user', 'user.profile', 'author');
        if($text_id != '') $picturexts_builder->where(['text_id' => $text_id]);
        if($author_id != '') $picturexts_builder->where(['author_id' => $author_id]);
        if($paragraph_id != '') $picturexts_builder->where(['paragraph_id' => $paragraph_id]);
        if($user_id != '') $picturexts_builder->where(['user_id' => $user_id]);
        $picturexts = $picturexts_builder->orderBy('created_at', 'desc')->get();

        return $picturexts;

    }
}
