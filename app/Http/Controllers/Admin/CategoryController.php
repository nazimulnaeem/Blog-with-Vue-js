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

    public function edit_category($id){
        $category = Category::find($id);
        return response()->json([
            'category' => $category
        ],200);
    }

    public function update_category(Request $request, $id){
        $this->validate($request,[
            'name' => 'required|min:2|max:50'
        ]);
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
    }

    public function delete_category($id){
        // return $id;
        $category = Category::find($id);
        $category->delete();
    }

}
