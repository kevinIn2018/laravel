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

Route::get('/', function () {
    return view('welcome');
});


class user {
    public $age = "";
    public $name  = "";
}

Route::get('/test', function () {
    $user = new user();
    $user->age=20;
    $user->name="Kevin";

    return json_encode($user);
});
