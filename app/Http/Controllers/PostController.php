<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
class PostController extends Controller
{
    public function saw($post) {

        $post = Post::where('slug', $post)->first();

        return view('post', ['post'=> $post]);
    }
}
