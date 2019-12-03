<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    // public function all_post(){
    //     $category = Category::with('posts')->get();
    //     return $category;
    // }

    public function all_post(){
        $posts = Post::with('user','category')->get();
        return response()->json([
            'posts' => $posts
        ],200);
    }


}
