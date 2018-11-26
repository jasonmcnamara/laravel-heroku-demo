<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function test(){
        return view('test');
    }
}
