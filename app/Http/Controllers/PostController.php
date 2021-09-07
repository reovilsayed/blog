<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function add_new(Request $request)
    {
      $data=  $request->validate([
            'title' =>['required','min:4'],
            'image' =>['required','file'],
            'description' =>['required','min:8'],
        ]);
        if($request->hasFile('image')){
           $data['image'] = $request->file('image')->store('images');
        }
       Post::create($data);
       return back()->with('message','Post created successfully');
    }
}
