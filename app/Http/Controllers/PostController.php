<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class PostController extends Controller
{
   
    public function createPost(Request $request)
    {
        return view('post.createPost');
    }
   
}
