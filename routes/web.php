<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/form', function () {
    return view('form');
});

Route::post('/submit', function (Request $request){
    \Log::debug($request);
});