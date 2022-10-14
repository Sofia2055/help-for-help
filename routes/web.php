<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

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
    return view('home', [
        'centers' => \App\Models\Center::All()
    ]);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('tutorial', function () {
    return view('tutorial');
});

Route::get('/centers', function (){
    return \App\Models\Center::All();
});

Route::get('/form', function() {
    return view('form', [
        'centers' => \App\Models\Center::All()
    ]);
});

Route::get('/form2', function() {
    return view('form2');
});

Route::get('/resources', function () {
    $resources = \App\Models\Resource::WhereRaw('given_quantity < resources_quantity');

    if(!Auth::check()){
        $resources->Where('received', '=', '1');
    }

    return view('resources', [
        'resources' => $resources->get(),
    ]);
});


Route::get('/resource/{resource}', function (\App\Models\Resource $resource) {
    return view('resource', [
        'resource' => $resource
    ]);
});

Route::get('/resource/{resource}/received', function (\App\Models\Resource $resource) {
    if(!Auth::check()){
        return back()->with('error', "You must be logged in to make changes");
    }

    $resource->received = true;
    $resource->save();
    return back()->with('success', 'The resource has been marked as received successfully');
});

Route::post('/resource/{resource}/given', function (\App\Models\Resource $resource) {
    if(!Auth::check()){
        return back()->with('error', "You must be logged in to make changes");
    }

    $attributes = request()->validate([
        'quantity' => 'required|numeric'
    ]);

    $quantity = $attributes['quantity'];

    if($resource->received == false){
        return back()->with('error', "It cannot be given a product that we don't have");
    }

    $resource->given_quantity += $quantity;

    if($resource->resources_quantity < $resource->given_quantity){
        $resource->refresh();
        return back()->with('error', "There is not much quantity available, maximun can be $resource->available_quantity");
    }

    $resource->save();
    return back()->with('success', "$quantity $resource->product_name given successfully");
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

Route::get('/logout', function () {
    auth()->logout();

    return redirect('/')->with('success', 'Logged out sucessfully!');
});

Route::post('/create/resource', function() {
    $checkData = request()->validate([
        'product_name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'description' => 'required|max:750',
        'state' => 'required|max:10',
        'resources_quantity'=> 'required|numeric',
        'center_id' => 'required|numeric',
        'images' => 'required'
    ]);


    $checkData['given_quantity'] = 0;
    $checkData['received'] = false;

    $resource = \App\Models\Resource::create($checkData);

    /*for ($i=1; $i <= 10; $i++) {
        if(request()->hasFile("image$i")){
            request()->file("image$i")->storeAs('resources-img', "$resource->id-$i.jpg", 'public');
        }
    }*/

    if(request()->hasFile('images')){
        $counter = 0;
        foreach (request()->file('images') as $image) {
            $image->storeAs('resources-img', "$resource->id-$i.jpg", 'public');
            $counter++;
            if($counter >= 6){
                break;
            }
        }
    }

    return redirect('/')->with('success', 'Your resource request has been created successfully, please try to bring the resource as soon as posible to the center you have selected');;
});
