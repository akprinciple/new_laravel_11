<?php

use Illuminate\Support\Arr;
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
                'id' => 1,
                'name' => 'Akeem',
                'age'=> 10
            ],
            [
                'id'=>2,
                'name' => 'Olayiwola',
                'age' =>   20
            ]
        ]
            ]);
});
Route::get('/user/{id}', function ($id)  {
    $users = [
        [
            'id' => 1,
            'name' => 'Akeem',
            'age'=> 10
        ],
        [
            'id'=>2,
            'name' => 'Olayiwola',
            'age' =>   20
        ]
        ];
        // dd($id);
        
        $user = Arr::first($users, fn($user) => $user['id'] == $id);
        // dd($user);

        return view('user', ['user' => $user]);
});
Route::get('/test', function(){
    
    return [['name'=>'Akeem', 'age'=>12], ['name'=>'Dav', 'text'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio quia iusto ad deleniti enim distinctio mollitia ipsa obcaecati. A sed sapiente omnis vitae amet non ut officiis quisquam eum blanditiis!']];
});
