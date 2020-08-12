<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function search(){
        return view('posts.search');
    }

    public function show(){
        return view('posts.show');
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        
    }

    public function my(){
        return view('posts.my');
    }
}
