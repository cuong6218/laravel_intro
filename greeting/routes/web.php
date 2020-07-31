<?php

use app\Http\Controllers\AgeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting/{name?}', function ($name = null) {
    if ($name)
        echo 'Hello' . $name . '!';
    else
        echo 'Hello world';
});

Route::get('/login', function () {
    return view('login');
    // echo 'Hello world';
});
Route::post('/login', function (\Illuminate\Http\Request $request) {
    if ($request->username == 'admin' && $request->password == 'admin') {
        return view('welcome_admin');
    }
    return view('login_error');
});

Route::get('/product', function () {
    return view('product');
});

Route::post('/product', function (\Illuminate\Http\Request $request) {
    $product = new ProductController($request->price, $request->discount);
    $result = $product->calcDiscount();
    $price = $product->calcPrice();
    return view('product', compact('result', 'price'));
});

Route::get('/dictionary', function () {
    return view('dictionary');
});

Route::post('/dictionary', function (\Illuminate\Http\Request $request) {
    $word = $request->keyword;
    $dictionary = [
        'fish' => 'cá',
        'dog' => 'chó',
        'cat' => 'mèo'
    ];
    if (array_key_exists($word, $dictionary)) {

        $result =  $dictionary[$word];
        return view('dictionary', compact(['result']));
    } else {
        return view('error');
    }
});

Route::get('/count_birth', function () {
    $now = Carbon::now();
    return view('count_birth', compact('now'));
});

Route::post('/count_birth', function (\Illuminate\Http\Request $request) {
    $now = Carbon::now();
    $birth = $request->date;
    $result = $now->diffInYears($birth);
    return view('count_birth', compact('result'));
});
