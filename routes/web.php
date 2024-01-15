<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', function () {
    // return view('welcome');

    $data = [
        'title'=> 'Hi student I hope you like the course',
        'content'=> 'This laravel course was created with a lot of love and dedication for you'
    ];

    Mail::send('emails.test', $data, function($message){
        $message->to('kylevirmar.millendez@nabepero.co.jp','Kyle')->subject('Hello students how are you?');
    });
});
