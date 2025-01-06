<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Models\Cart;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/index', function () {

        $cartCount = Cart::where('user_id', auth()->id())->count();
        return view('karem.index', compact( 'cartCount'));

    })->name('index');

    Route::get('/about', function () {

       $cartCount = Cart::where('user_id', auth()->id())->count();
        return view('karem.about', compact( 'cartCount'));
        
    })->name('about');




    Route::prefix('checkout')->group(function () {
        Route::get('/', [checkoutController::class, 'index'])->name('checkout.index');
        Route::get('/store', [checkoutController::class, 'store'])->name('checkout.store');



    });

    Route::prefix('contact')->group(function () {
        Route::get('/', [ContactController::class, 'index'])->name('contact.index');
        Route::post('/', [ContactController::class, 'store'])->name('contact.store');
  
    });

    Route::prefix('shop')->group(function () {
        Route::get('/', [ShopController::class, 'index'])->name('shop.index');

    });




    Route::prefix('cart')->group(function () {
        Route::get('/', [CartController::class, 'index'])->name('cart.index');
        Route::get('{id}', [CartController::class, 'create'])->name('cart.create');
        Route::get('/destroy/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
        

    });




    Route::get('/thankyou', function () {
        return view('karem.thankyou');
    })->name('thankyou');
    
    
  
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
