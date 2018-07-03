<?php

namespace App\Http\Controllers;

use App\Http\RichModels\Picturext;
use App\Paragraph;
use App\Text;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UploadController extends BaseController
{

    public function getPicturext()
    {
        if(request()->session()->has('picturext'))
        {
            return request()->session()->get('picturext');
        }
        else
        {
            return [
                'file' => '',
                'paragraph_id' => '',
                'text_id' => '',
                'location' => ['lat' => 0.00, 'lng' => 0.00],
                'tags' => '',
                'step' => '',
            ];
        }
    }
    public function storePicturext($value)
    {
        request()->session()->put('picturext', $value);
    }
    public function deletePicturext()
    {
        request()->session()->forget('picturext');
    }
    public function updateStep($step)
    {
        $picturext = $this->getPicturext();
        $picturext['step'] = $step;
        $this->storePicturext($picturext);
    }

    public function buildPicturextData() {

        $picturext = $this->getPicturext();

        $text = Text::with('author')
            ->where(['id' => $picturext['text_id']])
            ->first();

        $paragraph = Paragraph::where(['id' => $picturext['paragraph_id']])->first();

        return [
            'picture' => $picturext['file'],
            'location' => json_encode($picturext['location']),
            'tags' => json_encode($picturext['tags']),
            'likes' => 0,
            'text' => json_encode([
                'id' => $text->id,
                'title' => $text->title,
                'author' => [
                    'id' => $text->author->id,
                    'fullname' => $text->author->fullname,
                ],
                'paragraph' => [
                    'id' => $paragraph->id,
                    'paragraph' => $paragraph->paragraph,
                ]
            ]),
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function picture()
    {
        $step = 1;

        $this->updateStep($step);
        $picturext = $this->getPicturext();

        $buffer = [
            'picturext' => $picturext,
            'step' => $step,
        ];

        return view('upload.picture', $this->pack($buffer));
    }

    public function savePicture(Request $request)
    {

        $picturext = $this->getPicturext();

        $file = $request->file('picture');
        $image_name = $file->getClientOriginalName();
        $file->move(
            base_path() . '/public/uploads/pictures/', $image_name
        );

        $picturext['file'] = $image_name;
        $this->storePicturext($picturext);

        return redirect(route('upload.location.show'));

    }

    public function location()
    {
        $step = 2;

        $this->updateStep($step);
        $picturext = $this->getPicturext();

        $buffer = [
            'picturext' => $picturext,
            'step' => $step,
        ];

        return view('upload.location', $this->pack($buffer));
    }

    public function saveLocation(Request $request)
    {
        $picturext = $this->getPicturext();
        $lat = $request->input('lat');
        $lng = $request->input('lng');

        $picturext['location'] = [
            'lat' => $lat,
            'lng' => $lng,
        ];

        $this->storePicturext($picturext);

        return redirect(route('upload.text.show'));

    }

    public function text()
    {

        $step = 3;
        $this->updateStep($step);
        $picturext = $this->getPicturext();

        $buffer = [
            'step' => $step,
            'picturext' => $picturext,
        ];

        return view('upload.text', $this->pack($buffer));
    }

    public function saveText(Request $request)
    {
        $picturext = $this->getPicturext();
        $paragraph_id = $request->input('paragraph_id');
        $text_id = $request->input('text_id');
        $author_id = $request->input('author_id');

        $picturext['paragraph_id'] = $paragraph_id;
        $picturext['text_id'] = $text_id;
        $picturext['author_id'] = $author_id;

        $this->storePicturext($picturext);

        return redirect(route('upload.tags.show'));
    }

    public function tags()
    {

        $step = 4;
        $this->updateStep($step);
        $picturext = $this->getPicturext();

        $data = $this->buildPicturextData();

        $buffer = [
            'step' => $step,
            'picturext' => $picturext,
            'data' => $data,
        ];
        //{id: 1, title: 'Casa Tomada', author: {id: 1, fullname: 'Julio Cortazar'}, paragraph: { id: 16, paragraph: 'Lorem ipsum dolor'}}

        return view('upload.tags', $this->pack($buffer));
    }

    public function saveTags(Request $request)
    {
        $picturext = $this->getPicturext();
        $tags = $request->input('tags');
        if($tags != '') $picturext['tags'] = explode(",", $tags);
        $this->storePicturext($picturext);

        return redirect(route('upload.confirm.show'));
    }

    public function confirm()
    {
        $step = 5;
        $this->updateStep($step);
        $picturext = $this->getPicturext();

        $data = $this->buildPicturextData();

        $buffer = [
            'step' => $step,
            'picturext' => $picturext,
            'data' => $data,
        ];

        return view('upload.confirm', $this->pack($buffer));
    }

    public function saveConfirm(Request $request)
    {
        $picturext = $this->getPicturext();

        $model = new Picturext;
        $model->dump2DB($picturext);

        return redirect(route('upload.success.show'));

    }

    public function success()
    {
        $picturext = $this->getPicturext();
        $data = $this->buildPicturextData();


        $buffer = [
            'picturext' => $picturext,
            'data' => $data,
        ];

        $this->deletePicturext();

        return view('upload.success', $this->pack($buffer));
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
