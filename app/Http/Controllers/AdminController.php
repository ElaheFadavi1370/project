<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
       $this->middleware('IsAdmin') ;
    }
    public function index (){
        return" you are an administrator because u are seeing this page";

return view ('adminhome');
    }

}
