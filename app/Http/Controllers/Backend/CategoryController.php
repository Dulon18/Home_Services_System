<?php

namespace App\Http\Controllers\Backend;
use App\Models\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories(){
        $categories =Categories:: all();
        return view('admin.pages.categories.category',compact('categories'));
        
    }

    public function add(){
        return view('admin.pages.categories.add-category');
    }
    
    public function store(Request $request){
        //dd($request->all());

        Categories::create([
            'name'=>$request->name,
            'description'=>$request->description,

        ]);
        return redirect()->route('admin.category');
    }

}
