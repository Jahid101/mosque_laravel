<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function admin()
    {
        return view('backend.contents.admin');
    }
}
