<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function check(\App\Post $post){
        return view('editor.check', compact('post'));
    }

    public function accept(){

    }

    public function decline(){
        
    }
}
