<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/centers', function (){
    return \App\Models\Center::All();
});

Route::get('/resource/{resource}', function (\App\Models\Resource $resource) {
    return $resource;
});

Route::get('form/resource', function() {
    return view('form');
});

Route::post('/create/resource', function() {
    $checkData = request()->validate([
        'product_name' => 'required|max:255',
        'description' => 'required|max:750',
        'state' => 'required|max:10',
        'resources_quantity'=> 'required|numeric',
        'center_id' => 'required|numeric',
    ]);


    $checkData['given_quantity'] = 0;
    $checkData['received'] = false;

    \App\Models\Resource::create($checkData);

    return "datos correctos";
});