<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AccountController;

Route::resource('products', ProductController::class);

use App\Http\Controllers\MotarController;

  

Route::resource('motars', MotarController::class);
Route::post('/login', [AccountController::class,"login"]);
Route::get('/logout', [AccountController::class,"logout"]);


Route::get('/wd',function()
{
return view('welcomeadmin');
});

Route::get('/receipt',function()
{
return view('receipt');
});

Route::get('/paymentform',function()
{
return view('paymentform');
});


Route::get('/menu',function()
{
return view('menu');
});

Route::get('/header',function()
{
return view('header');
});

Route::get('/footer',function()
{
return view('footer');
});

Route::get('/admin',function()
{
return view('admin');
});


Route::get('/loginform',function()
{
return view('loginform');
});

Route::get('/welcome',function()
{
return view('welcome');
});


Route::get('/adminmenu',function()
{
return view('adminmenu');
});
Route::get('/goods_form',function()
{
return view('goods_form');
});

Route::get('/admin',function()
{
return view('adminpage');
});

Route::get('/',function()
{
return view('index');
});


