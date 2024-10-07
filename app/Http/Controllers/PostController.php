<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create(){
        return view('create');
    }

    public function filestore(Request $request){

        $post = new Post;

        $post->name = $request->name;
        $post->description = $request->description;
        $post->image = $request->image;

        $post->save();
       return redirect()->route('home')->with('success', 'post updated successfully');
    }
}
