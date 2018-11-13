<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/Calculator', function () {
    return view('Calculator');

});

Route::post('/Calculator', function (Illuminate\Http\Request $request) {

    $Product = $request->PD;
    $List_Price = $request->LP;
    $Discount = $request->DP;
    $Discount_Amount = $List_Price * $Discount * 0.01;
    $Discount_Price = $List_Price - $Discount_Amount;

    return view('display-discount',
        [
            'Product' => $Product,
            'List_Price' => $List_Price,
            'Discount' => $Discount,
            'Discount_Amount' => $Discount_Amount,
            'Discount_Price' => $Discount_Price
        ]
    );
});

