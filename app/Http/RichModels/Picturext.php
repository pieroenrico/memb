<?php
namespace App\Http\RichModels;

use App\Location;
use App\Picture;
use App\Tag;

class Picturext {

    public $data;

    function __construct($id = "")
    {
        if($id)
        {
            $picturext = Picture::with('text', 'paragraph', 'location', 'tags')
                ->where(['id' => $id])
                ->first();

            $this->data = $picturext;
        }

    }


    public function dump2DB($picturext)
    {

        $location = new Location;
        $location->lat = $picturext['location']['lat'];
        $location->lng = $picturext['location']['lng'];
        $location->save();

        $picture = new Picture;
        $picture->user_id = 1;
        $picture->text_id = $picturext['text_id'];
        $picture->paragraph_id = $picturext['paragraph_id'];
        $picture->file = $picturext['file'];
        $picture->location_id = $location->id;
        $picture->save();

        for($i = 0; $i < count($picturext['tags']); $i++)
        {
            $picture->tags()->attach(Tag::firstOrCreate(['tag' => $picturext['tags'][$i]]));
        }

    }

}