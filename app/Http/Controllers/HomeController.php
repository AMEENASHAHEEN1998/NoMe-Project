<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         $this->middleware('auth')->only('control_panel');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $latestProducts = product::orderBy('id' , 'desc')->take(20)->get();
        $categories = category::orderBy('id' , 'desc')->get();
        return view('front.index',compact('latestProducts', $latestProducts , 'categories' ,$categories));
    }
    public function control_panel(){
        return view('admin.index');
    }
    public function about()
    {
        $categories = category::orderBy('id' , 'desc')->get();

        return view('front.about', 'categories' ,$categories);
    }
    public function products()
    {
        $categories = category::orderBy('id' , 'desc')->get();

        $products = product::orderBy('id' , 'desc')->get();
        return view('front.products',compact('products', $products , 'categories' ,$categories));
    }
    public function productpage(product $product)
    {
        $product = product::findOrFail($product->id);
        $products = product::where('category_id' , $product->category_id)->orderBy('id' ,'desc')->get();
        $categories = category::orderBy('id' , 'desc')->get();
        
        return view('front.productpage', compact($product , 'product' , $products , 'products' , 'categories' ,$categories));
    }
    public function contact()
    {
        $categories = category::orderBy('id' , 'desc')->get();

        return view('front.contact',compact( 'categories' ,$categories));
    }
}
