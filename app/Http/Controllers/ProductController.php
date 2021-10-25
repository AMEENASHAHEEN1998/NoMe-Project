<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=product::all();
        $categories=category::all();


        // return $products->category->category_name;
        // return $categories;
        return view('admin.page.product.index',compact('products', $products,'categories',$categories));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {        

        
        $categories=category::all();

        return view('admin.page.product.create',compact('categories',$categories));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $status_offer=0;
        if ($request->has('status_offer') == 1) {
            $request->status_offer = 1;
        } else {
            $request->status_offer = 0;
        }        try {
            $image_name = '';

            if ($request->has('primary_image')) {
                $FileEx = $request->file('primary_image')->getClientOriginalExtension();
                $image_name = time() . '_' . rand() . '.' . $FileEx;
                $request->file('primary_image')->move(public_path('upload/admin/product'), $image_name);
            }

            // return   $image_name;
            product::create([
                
              
                'product_name' => $request->product_name,
                'category_id' => $request->category_id,
                'price' => $request->price,
                'description' => $request->description,
                'primary_image' => $image_name,
                'status_offer' => $request->status_offer,
                'created_at' => now()
         
            ]);
            return redirect()->route('admin.products.index');
        } catch (\Throwable $th) {
            return redirect()->route('admin.products.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products=product::find($id);
        // return $products;
        $categories=category::all();

        return view('admin.page.product.edit',compact('products', $products,'categories',$categories));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        try {
            $image_name = '';
            $product = product::findOrFail($id);
            $image_name = $product->primary_image;

            if ($request->has('primary_image')) {
                $FileEx = $request->file('primary_image')->getClientOriginalExtension();
                $image_name = time() . '_' . rand() . '.' . $FileEx;
                $request->file('primary_image')->move(public_path('upload/admin/product'), $image_name);
            }

            if ($request->has('status_offer') == 1) {
                $request->status_offer = 1;
            } else {
                $request->status_offer = 0;
            }

            
           

            // return   $image_name;
            product::find($id)->update([

                'product_name' => $request->product_name,
                'category_id' => $request->category_id,
                'price' => $request->price,
                'description' => $request->description,
                'primary_image' => $image_name,
                'status_offer' => $request->status_offer,
                'created_at' => now()
         
            ]);
            return redirect()->route('admin.products.index');
        } catch (\Throwable $th) {
            return redirect()->route('admin.products.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        product::find($id)->delete();
        return redirect()->back();
    }
}
