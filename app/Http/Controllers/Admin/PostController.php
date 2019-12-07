<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;


class PostController extends Controller
{
    // public function all_post(){
    //     $category = Category::with('posts')->get();
    //     return $category;
    // }

    public function all_post(){
        $posts = Post::with('user','category')->orderBy('id','desc')->get();
        return response()->json([
            'posts' => $posts
        ],200);
    }

    public function post_insert(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'title' => 'required|min:2|max:50',
            'description' => 'required|min:2|max:1000',
        ]);

        // if($request->hasFile('image')){
        //     $image = $request->file('image');
        //     $directory = 'images/post/';
        //     $currentDate = Carbon::now()->toDateString();
        //     $imagename = $currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
        //     $imageUrl = $directory.$imagename;
        //     Image::make($image)->resize(500,333)->save($imageUrl);
        // }else{
        //     // $imagename = "default.png";
        // }
          
            // $strpos = strpos($request->image,';');
            // $sub = substr($request->image,0,$strpos);
            // $ex = explode('/',$sub)[1];
            // // $ex = explode('/',$sub);
            // $name = time().".".$ex;
            // $img = Image::make($request->image)->resize('500','300');
            // $upload_path = public_path()."/images/post/";
            // $img = save($upload_path.$name);

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        // write anyone command for pass the user id
        // $post->user_id = Auth::id();
        $post->user_id = Auth::user()->id;
        $post->category_id = $request->category_id;
        // $post->image = $imagename;

        if($request->image > 0 ){

            $currentDate = Carbon::now()->toDateString();
            $image = $request->file('image');
            $img = $currentDate. '.'. uniqid() . '.'. $image->getClientOriginalExtension();
            $location = public_path('images/post/'.$img);
            Image:: make($image)->save($location);
            // Image:: make($image)->resize(500,333)->save($location);
            $post->image = $img;

        }
        $post->save();
    }

    public function post_edit($id){
        $post = Post::find($id);
        return response()->json([
            'post' => $post
        ],200);
    }


    public function post_update(Request $request,$id){
        // dd($request->all());
        $this->validate($request,[
            'title' => 'required|min:2|max:50',
            'description' => 'required|min:2|max:1000',
        ]);

        // if($request->hasFile('image')){
        //     $image = $request->file('image');
        //     $directory = 'images/post/';
        //     $currentDate = Carbon::now()->toDateString();
        //     $imagename = $currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
        //     $imageUrl = $directory.$imagename;
        //     Image::make($image)->resize(500,333)->save($imageUrl);
        // }else{
        //     // $imagename = "default.png";
        // }

        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        // $post->user_id = Auth::id();
        $post->user_id = Auth::user()->id;
        $post->category_id = $request->category_id;
        // $post->image = $imagename;

        // if($request->image > 0 ){

        //     $currentDate = Carbon::now()->toDateString();
        //     $image = $request->file('image');
        //     $img = $currentDate. '.'. uniqid() . '.'. $image->getClientOriginalExtension();
        //     $location = public_path('images/post/'.$img);
        //     Image:: make($image)->save($location);
        //     // Image:: make($image)->resize(500,333)->save($location);
        //     $post->image = $img;

        // }

        

        if($request->image != $post->image){
            
            $strpos = strpos($request->image,';');
            $sub = substr($request->image,0,$strpos);
            $ex = explode('/',$sub)[1];
            // $ex = explode('/',$sub);
            $name = time().".".$ex;
            $img = Image::make($request->image)->resize('500','300');
            $upload_path = public_path()."/images/post/";
            $img = save($upload_path.$name);
            if(file_exists($image)){
                @unlink($image);
            }
        }else{
            $name = $post->image;
        }


        $post->save();
    }


    public function post_delete($id){
        $post = Post::find($id);
        $image_papth = public_path()."/images/post/";
        $image = $image_papth.$post->image;
        if(file_exists($image)){
            @unlink($image);
        }
        $post->delete();
    }

}
