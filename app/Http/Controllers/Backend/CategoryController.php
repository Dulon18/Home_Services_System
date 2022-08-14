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
        
        $filename="";
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getclientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }
        //dd('ok');  
         //serverside validation
            
         $request->validate([
            'name'=>'required | unique:categories,name',
            'description'=>'required',
            


        ]);

        //dd($request->all());
        Categories::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$filename,

        ]);
        return redirect()->route('admin.category')->with('success','Category Add successfully..');
    }

    public function edit($id)
    {
        $category=Categories::find($id);
        return view('admin.pages.categories.edit',compact('category'));
    }

    public function update(Request $request,$id)
    {
        $category=Categories::find($id);
        $logo=$category->image;
        if($request->hasFile('image'))
        {
  
            $logo= date('Ymdhms').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$logo);
        }
        $category->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$logo,

        ]);
        return redirect()->route('admin.category')->with('success','Update  successfully..');
    }

    public function remove($id)
    {
        Categories::find($id)->delete();
        return redirect()->route('admin.category')->with('success','Deleted  successfully..');
    }
}
