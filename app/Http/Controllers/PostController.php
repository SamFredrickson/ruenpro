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
        $data = request()->validate([
            'title' => 'required|max:200',
            'subtitle' => 'required|max:200',
            'image' => 'required|image',
            'initial' => 'required',
            'done' => 'required'
        ]);

        $image = request('image')->store('uploads', 'public');

        auth()->user()->posts()->create([
            'title' => $data['title'],
            'subtitle' => $data['subtitle'],
            'image' => $image,
            'initial' => $data['initial'],
            'done' => $data['done'],
        ]);
    }

    public function my(){
        return view('posts.my');
    }
}
