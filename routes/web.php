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
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/centers', function (){
    return \App\Models\Center::All();
});

Route::get('/resources', function () {
    return view('resources', [
        'resources' => \App\Models\Resource::Where('received', '=', '1')->WhereRaw('given_quantity < resources_quantity')->get(),
    ]);
});

Route::get('/resource/{resource}', function (\App\Models\Resource $resource) {
    return $resource;
});

Route::get('/form', function() {
    return view('form');
});

Route::get('/resource/{resource}/received', function (\App\Models\Resource $resource) {
    $resource->received = true;
    $resource->save();
    return redirect('/');
});

Route::post('/resource/{resource}/given', function (\App\Models\Resource $resource) {
    $attributes = request()->validate([
        'quantity' => 'required|numeric'
    ]);

    $quantity = $attributes['quantity'];

    if($resource->received == false){
        return "No se puede dar un producto que no se tiene";
    }

    $resource->given_quantity += $quantity;

    if($resource->resources_quantity < $resource->given_quantity){
        return "No puede ser mayor";
    }

    $resource->save();
    return redirect('/');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function () {
    $attributes = request()->validate([
        'email' => 'required|email|max:255',
        'password' => 'required|max:255'
    ]);

    if(!auth()->attempt($attributes, request()->get('remember'))){
        throw ValidationException::withMessages([
            'email' => 'Credentials are incorrect',
        ]);
    }

    session()->regenerate();
    return redirect('/')->with('success', 'Logged in succesfully!');
});

Route::post('/create/resource', function() {
    $checkData = request()->validate([
        'product_name' => 'required|max:255',
        'email' => 'required|email|max:255',
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
