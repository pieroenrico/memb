<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class TextsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $author_id = request()->get('author');
        /*

        if($author_id)
        {
            $texts = Text::with('author')
                ->orderBy('title', 'asc')
                ->where(['author_id' => $author_id])
                ->get();
        }
        else
        {


            $texts = Text::with('author')
                ->orderBy('title', 'asc')
                ->get();


        }


        $texts = [];
        foreach($texts as $text)
        {
            $texts[] = [
                'id' => $text->id,
                'title' => $text->title,
                'author' => $text->author->fullname,
                'author_id' => $text->author->id,
                'search' => $text->title . ' ' . $text->author->fullname,
            ];
        }

        $buffer = [
            'texts' => $texts,
        ];*/

        $buffer = [
            'author_id' => $author_id,
        ];

        return view('texts.index', $this->pack($buffer));
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
        //
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
