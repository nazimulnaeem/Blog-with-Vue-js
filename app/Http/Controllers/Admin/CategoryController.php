<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function all_category(){
        $categories = Category::all();
        return response()->json([
            'categories'=>$categories
        ],200);
    }

    public function add_category(Request $request){
        $this->validate($request,[
            'name' => 'required|min:2|max:50'
        ]);
        $category = New Category();
        // dd($request->all());
        $category->name = $request->name;
        $category->save();
        return ['message'=>'Ok'];
    }
}
