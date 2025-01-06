<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $cartCount = Cart::where('user_id', auth()->id())->count();
        $productIds =Cart::where('user_id', auth()->id())->pluck('product_id');

        $products = Product::whereIn('id', $productIds)->get();

    
        return view('karem.cart', compact('products', 'cartCount'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($request)
    {
        $productId = $request; 


        $existingCartItem = Cart::where('product_id', $productId)
                                ->where('user_id', Auth::user()->id)
                                ->exists();
    

        if ($existingCartItem) {
            return back();
        }
    

        Cart::create([
            'product_id' => $productId,
            'user_id' => Auth::user()->id
        ]);
     
         return back();
     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($request)
    {
        Cart::where('product_id', $request)
        ->where('user_id', auth()->id())
        ->delete();

         return back();
    }
}
