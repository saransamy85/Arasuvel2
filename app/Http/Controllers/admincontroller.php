<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\slider;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
    //
    public function login()
    {
        // User::create([
        //     'name' => "samy",
        //     'email' => "samy@gmail.com",
        //     'password' => Hash::make("samy123"),
        // ]);
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
             $request->session()->regenerate();
             session(['username' => Auth::user()->name]);
            return redirect()->route('dashboard');
            
        }
        return redirect()->back()->with('error', 'Invalid username password');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken(); 
        return redirect()->route('login');
    }

    public function dashboard()
    {
        $cates=Category::all();
        $ccount = Category::withCount('products')->get();
        $sl=Product::with('Category')->get();
        $labels = $ccount->pluck('catename'); // category names
        $data = $ccount->pluck('products_count'); // product counts
        return view('admin.home',compact('cates','sl','ccount','labels','data'));
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
        $ttle=$request->input('ttle');
        $alt=$request->input('alt');
        $desc=$request->input('desc');
        $image=$request->file('slimg');
        $imgname=time().'.'.$image->getClientOriginalExtension();

        $imagepath=$image->storeAs('public/product',$imgname);

        $imgmodel=new Product();
        $imgmodel->category_id=$cateid;
        $imgmodel->path='product/'.basename($imagepath);
        $imgmodel->title=$ttle;
        $imgmodel->alt=$alt;
        $imgmodel->description=$desc;
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
    public function prodel(Request $request,$id)
    {
        $alpro=Product::findOrFail($id);
        $alpro->delete();
        return redirect()->route('dashboard');
    }

}
