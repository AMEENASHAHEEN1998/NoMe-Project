<?php

namespace App\Http\Controllers;

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
        return view('front.index');
    }
    public function control_panel(){
        return view('admin.index');
    }
    public function about()
    {
        return view('front.about');
    }
    public function products()
    {
        return view('front.products');
    }
    public function productpage()
    {
        return view('front.productpage');
    }
    public function contact()
    {
        return view('front.contact');
    }
}
