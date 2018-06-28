<?php

namespace App\Http\Controllers;

use App\Language;

class BaseController
{

    public function pack($data)
    {


        $meta = [

        ];

        return array_merge($data, $meta);
    }
}