<?php

namespace App\Http\Controllers;

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
                'location' => '',
                'tags' => '',
                'step' => '',
            ];
        }
    }
    public function storePicturext($value)
    {
        request()->session()->put('picturext', $value);
    }
    public function updateStep($step)
    {
        $picturext = $this->getPicturext();
        $picturext['step'] = $step;
        $this->storePicturext($picturext);
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

        return redirect(route('upload.text.show'));

    }

    public function location()
    {

        return view('upload.location');
    }

    public function text()
    {

        $step = 3;

        $this->updateStep($step);

        $buffer = [
            'step' => $step,
        ];

        return view('upload.text', $this->pack($buffer));
    }

    public function tags()
    {

        return view('upload.tags');
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
