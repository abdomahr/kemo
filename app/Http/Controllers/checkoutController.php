<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Validator;


class checkoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        
        return view('karem.checkout');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        // $validator = Validator::make($request->all(), [
        //     'Country' => 'required|string',
        //     'first_name' => 'required|string',
        //     'last_name' => 'required|string',
        //     'address' => 'required|string',
        //     'state' => 'required|string',
        //     'email' => 'required|email',
        //     'phone' => 'required|numeric',
        // ]);

     
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        // // حفظ البيانات في جدول orders
        // $order = new Order();
        // $order->country = $request->Country;
        // $order->first_name = $request->first_name;
        // $order->last_name = $request->last_name;
        // $order->address = $request->address;
        // $order->state = $request->state;
        // $order->email = $request->email;
        // $order->phone = $request->phone;
        // $order->product_id = 1;
        // $order->user_id = 1;
        // $order->save();

        // // التوجيه إلى صفحة التأكيد بعد حفظ الطلب
        // return redirect()->route('thankyou');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
