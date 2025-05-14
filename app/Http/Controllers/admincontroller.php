<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\slider;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
    //
    public function login()
    {
        return view('admin.login');
    }
    public function loginattempt(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $credential=$request->only('email','password');
        if(Auth::attempt($credential))
        {
            return redirect('dashboard');
            
        }
        return redirect()->back()->with('error', 'Invalid username password');
    }

    public function dashboard()
    {
        $cates=Category::all();
        $sl=Product::with('Category')->get();
        return view('admin.home',compact('cates','sl'));
    }
    public function createcate(Request $request)
    {
        Category::create([
            "catename"=>$request->catename,
        ]);
        return redirect()->route('category');
    }
    public function createproduct(Request $request)
    {
        $cateid=$request->input('catevalue');
        $image=$request->file('slimg');
        $imgname=time().'.'.$image->getClientOriginalExtension();

        $imagepath=$image->storeAs('public/product',$imgname);

        $imgmodel=new Product();
        $imgmodel->category_id=$cateid;
        $imgmodel->path='product/'.basename($imagepath);
        $imgmodel->save();
        return redirect()->route('dashboard');
    }
    public function cate()
    {
        $cates=Category::all();
        return view('admin.cate',compact('cates'));
    }

    public function cateup(Request $request, $id)
    {
        $cates=Category::findOrFail($id);
        $cates->catename=$request->name;
        $cates->save();
        return redirect()->route('category');
    }
    public function catedel(Request $request,$id)
    {
        $cates=Category::findOrFail($id);
        $cates->delete();
        return redirect()->route('category');
    }

}
