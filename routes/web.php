<?php

use App\Models\user_list;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\users;

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
    $users = users::all();
    // dd($users);
    return view('users', ['users'=> $users]);
});
Route::get('/user/{id}', function ($id)  {
    
        // dd($id);
        // This is for fetching from a wrtten array and not database
        // $user = Arr::first(users::all(), fn($user) => $user['id'] == $id);

        $user = users::find($id);

        if (! $user) {
           abort(404);
        }
        // dd($user);

        return view('user', ['user' => $user]);
});
Route::get('/test', function(){
    
    return [['name'=>'Akeem', 'age'=>12], ['name'=>'Dav', 'text'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio quia iusto ad deleniti enim distinctio mollitia ipsa obcaecati. A sed sapiente omnis vitae amet non ut officiis quisquam eum blanditiis!']];
});
