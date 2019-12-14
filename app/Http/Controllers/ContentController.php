<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contentController extends Controller
{
    public function home()
    {
        return view('contents/home');
    }

}
