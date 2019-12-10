<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function get_all_blog_post(){
        $posts = Post::with('user','category')->orderBy('id','desc')->get();
        return response()->json([
            'posts' => $posts
        ],200);
    }


    public function get_single_post($id){
        $post = Post::with('user','category')->where('id',$id)->first();
        return response()->json([
            'post' => $post
        ],200);
    }


}
