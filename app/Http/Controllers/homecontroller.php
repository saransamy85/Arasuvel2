<?php

namespace App\Http\Controllers;
use App\Models\feedback;
use App\Models\slider;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    //
    public function index()
    {
        
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function gallery()
    {
        $gg=Product::with('Category')->get();
        
        return view('gallery',compact('gg'));
    }
    public function product()
    {

        $gg = Category::with('products')->get();
        
        return view('Product',compact('gg'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
      
        feedback::create([
            'Name'=>$request->name,
            'Phone'=>$request->ph,
            'email'=>$request->email,
            'Message'=>$request->msg,
        ]);
        return view('index');
    }
    public function sliderstore(Request $request)
    {
        $image=$request->file('slimg');
        $imgname=time().'.'.$image->getClientOriginalExtension();

        $imagepath=$image->storeAs('public/slider',$imgname);

        $imgmodel=new slider();
        $imgmodel->name=$imgname;
        $imgmodel->path='slider/'.basename($imagepath);
        $imgmodel->save();
        return view('index');


    }
}
