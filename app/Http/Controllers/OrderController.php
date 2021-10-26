<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            //dd($request->all());
        $validated = $request->validate([
            'color' => 'required',
            'size' => 'required',
            'amount' => 'required',
            'person_name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'product_id' => 'required'
        ]);
        order::create([
            'color' => $request->color,
            'size' => $request->size,
            'amount' => $request->amount,
            'person_name' => $request->person_name,
            'phone' => $request->phone,
            'address' => $request->address,
            'product_id' => $request->product_id,
            'status' => 0,
        ]);
        return redirect()->back()->with('success' , 'تم اضافة الطلبية بنجاح');

        }catch (\Exception $e){
            return redirect()->back()->with('warning','فشل في عملية انشاء الطلبية');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        //
    }
}
