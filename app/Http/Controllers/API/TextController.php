<?php

namespace App\Http\Controllers\API;

use App\Author;
use App\Paragraph;
use App\Text;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function paragraphs($text_id)
    {

        $paragraphs = Paragraph::where(['text_id' => $text_id])
            ->select('id', 'paragraph')
            ->orderBy('order')
            ->get();

        $text = Text::with('author')
            ->where(['id' => $text_id])
            ->first();

        $data = [
            'story' => $text,
            'paragraphs' => $paragraphs,
        ];

        return $data;

    }

    public function authors()
    {
        $authors = Author::orderBy('name', 'asc')
            ->select('id', 'name', 'lastname', 'picture')
            ->orderBy('lastname', 'asc')
            ->get();

        $data = [];
        foreach($authors as $author)
        {
            $data[] = [
                'id' => $author->id,
                'fullname' => $author->fullname,
                'picture' => $author->picture,
            ];
        }

        return $data;
    }

    public function texts()
    {

        $author_id = request()->get('author_id');

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


        $data = [];
        foreach($texts as $text)
        {
            $data[] = [
                'id' => $text->id,
                'title' => $text->title,
                'author' => $text->author->fullname,
                'author_id' => $text->author->id,
                'search' => $text->title . ' ' . $text->author->fullname,
            ];
        }

        return $data;
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
