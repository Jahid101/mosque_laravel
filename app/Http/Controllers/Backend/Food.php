<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Food extends Controller
{
    public function food()
    {
        return view('backend.contents.food');
    }
}
