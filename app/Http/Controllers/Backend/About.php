<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class About extends Controller
{
    public function about()
    {
        return view('backend.contents.about');
    }
}
