<?php

use Illuminate\Support\Facades\Route;

use function Pest\Laravel\get;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function(){
    return view('home');
});
Route::get('/about', function(){
    return view('about');
});
Route::get('/contact', function(){
    return view('contact');
});
Route::get('/users', function ()  {
    return view('users', [
        'users' =>[
            [
                'name' => 'Akeem',
                'age'=> 10
            ],
            [
                'name' => 'Olayiwola',
                'age' =>   20
            ]
        ]
            ]);
});
Route::get('/test', function(){
    
    return [['name'=>'Akeem', 'age'=>12], ['name'=>'Dav', 'text'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio quia iusto ad deleniti enim distinctio mollitia ipsa obcaecati. A sed sapiente omnis vitae amet non ut officiis quisquam eum blanditiis!']];
});
