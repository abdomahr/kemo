<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class checkoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $cartCount = Cart::where('user_id', auth()->id())->count();

        $products = Product::where('id',$request->id)->get();
        
        return view('karem.checkout', compact('products','cartCount'));
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


        $validator = Validator::make($request->all(), [
            'Country' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'address' => 'required|string',
            'state' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'quantity' => 'required|numeric',
        ]);

     
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $order = new Order();
        $order->country = $request->Country;
        $order->first_name = $request->first_name;
        $order->last_name = $request->last_name;
        $order->address = $request->address;
        $order->state = $request->state;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->quantity = $request->quantity;
        $order->user_id = Auth::user()->id;
        $order->save();

        return redirect()->route('thankyou');

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
