<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/average', function () {
    return view('average-form');
});
Route::post('/average', function (Illuminate\Http\Request $request) {
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');
    $average = ($num1 + $num2) / 2;
    return "Điểm trung bình của $num1 và $num2 là $average.";
})->name('average');


Route::get('/getxinchao', [UserController::class,'getxinchao']);

Route::get('/Welcome', function(){
    $htm= '<h1>Chào mừng bạn đến với PNV</h1>';
    return $htm;
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/tinhtich/{a}/{b}', function ($a,$b) {
    echo $a*$b;exit;
    
})->whereNumber('a')->whereNumber('b');
Route::get('/tinhtong/{a}/{b}', function ($a,$b) {
    echo $a+$b;exit;
    
})->whereNumber('a')->whereNumber('b');
Route::get('/tinhhieu/{a}/{b}', function ($a,$b) {
    echo $a-$b;exit;
    
})->whereNumber('a')->whereNumber('b');
Route::get('/tinhthuong/{a}/{b}', function ($a,$b) {
    echo $a/$b;exit;
    
})->whereNumber('a')->whereNumber('b');
