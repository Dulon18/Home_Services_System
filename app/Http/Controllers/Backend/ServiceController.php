<?php

namespace App\Http\Controllers\Backend;
use App\Models\Service;
use App\Models\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class ServiceController extends Controller
{
        public function services()
        {   
            //searching......
            $categories = Categories::all();
            $key=null;
            if(request()->search){
                $key=request()->search; //here search came to form name 
                $services = Service::with('category')
                ->where('name','LIKE','%'.$key.'%')
                ->orwhere('price','LIKE','%'.$key.'%')
                ->orwhere('category','LIKE','%'.$key.'%')
                ->get();
                return view('admin.pages.services.search',compact('services','key','categories'));
            } // searching end...

            $categories = Categories::all();
            $services=Service::with('category')->get();
            return view('admin.pages.services.services',compact('services','key','categories'));

        }
        public function add()
        {   
            $categories = Categories::all();
            return view('admin.pages.services.add_services',compact('categories'));
        }

        public function store(Request $request)
        {
            // dd($request->all());
            $filename=null;
            if ($request->hasFile('image'))
            {
                
                $file=$request->file('image');
                $filename=date('Ymdhms').'.'.$file->getclientOriginalExtension();
                $file->storeAs('/uploads',$filename);
            }
            //dd('ok');
    
            //serverside validation
            
            $request->validate([
                'name'=>'required',
                'price'=>'required|numeric',
                'description'=>'required',
                'category'=>'required',


            ]);

            Service::create([

                'name'=>$request->name,
                'price'=>$request->price,
                'description'=>$request->description,
                'category_id'=>$request->category,
                'image'=>$filename,
                
            ]); 
            return redirect()->back()->with('success','Service Add successfully..');
        }

        public function service_details($service_id)
        {
            $services = Service::find($service_id);
            $categories =Categories::all();
            return view('admin.pages.services.services_details',compact('services','categories'));
        }
        
        public function service_delete($id)
        {
        Service::find($id)->delete();
        return redirect()->back()->with('success','Services Deleted.');
        }

        public function service_edit($id)
        {
            //dd($id);
            $service=Service::find($id);
            $categories =Categories::all();
            if($service)
            {
            return view('admin.pages.services.service_edit',compact('service','categories'));
            }
       }

        public function service_update(Request $request,$service_id)
        {
                //dd($request->all());
                //dd($service_id);

           $service=Service::find($service_id);

                //  Product::where('column','value')->udpate([
                //  'column'=>'request form field name'
                //  ]);
 
           $service_image = $service->Image;
           // step 1: check image exist in this request.
           
           if ($request->hasFile('image'))
           {
            // step 2: generate file name
            $service_image = date('Ymdhms').'.'.$request->file('image')->getClientOriginalExtension();
            //step 3 : store into project directory
            $request->file('image')->storeAs('/uploads',$service_image);

              
           }
           if($service){

               $service->update([
                'name'=>$request->name,
                'price'=>$request->price,
                'description'=>$request->description,
                'category'=>$request->category,
                'image'=>$service_image,

               ]);
              
             return redirect()->back()->with('success','Service update successfully..');
           }

        }
}

