<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Fund extends Controller
{
    public function fund()
    {
        return view('backend.contents.fund');
    }
}
