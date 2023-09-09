<?php

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

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/detail', function () {
    return view('detail');
});
Route::get('/transactions', function () {
    return view('transactions');
});
Route::get('/transactionsSuccess', function () {
    return view('transactionsSuccess');
});
Route::get('/project', function () {
    return view('project');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/upload', function () {
    return view('upload');
});
Route::get("/dashboard2",function(){
    return view("dashboard2");
});
Route::get('/uploadFilled', function () {
    return view('uploadFilled');
});
Route::get('/createSuccess', function () {
    return view('createSuccess');
});
Route::get('/create', function () {
    return view('create');
});
