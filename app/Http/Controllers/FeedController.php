<?php

namespace App\Http\Controllers;

use App\Author;
use App\Http\RichModels\Picturext;
use App\Picture;
use App\Text;
use Illuminate\Http\Request;

class FeedController extends BaseController
{

    public function home()
    {
        $author_id = request()->get('author');
        $text_id = request()->get('text');

        $buffer = [

        ];

        if($author_id)
        {
            $author_data = Author::find($author_id);
            $buffer['author_id'] = $author_id;
            $buffer['author_data'] = $author_data;
        }
        if($text_id)
        {
            $text_data = Text::with('author')->where(['id' => $text_id])->first();
            $buffer['text_id'] = $text_id;
            $buffer['text_data'] = $text_data;
        }


        return view('home.index', $this->pack($buffer));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function feed()
    {

        return view('feed.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $picturext = Picture::with('text', 'paragraph', 'location', 'tags', 'user', 'user.profile', 'author')
            ->where(['id' => $id])
            ->first();

        $relateds = Picture::with('text', 'paragraph', 'location', 'tags', 'user', 'user.profile', 'author')
            ->where(['user_id' => $picturext->user->id])
            ->orderBy('created_at', 'desc')
            ->get();

        $buffer = [
            'picturext' => $picturext,
            'relateds' => $relateds,
        ];

        return view('feed.show', $this->pack($buffer));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
