<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\profileController;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
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

Route::get('/', function () {return view('welcome');});

Route::get('home',function(){return view('home');});

Route::middleware('guest')->group(function (){

    Route::get('/signup', function () {return view('signup');});
    Route::post('/signAction',[authController::class,'register']);
    Route::get('/login', function () {return view('sign');});
    Route::post('/loginAction',[authController::class,'login']);
});

Route::middleware('auth')->group(function (){

    Route::get('/dashboard',function () {return view('layouts.back');});
    Route::get('/index',function(){return view('profile.index');});
    Route::post('/store',[profileController::class,'store']);
    Route::get('/profile/{profile_name}',[profileController::class,'profile']);
    Route::get('/user/{id}',[profileController::class,'allProfiles']);
    Route::get('/updateData/{idProf}',[profileController::class,'updateForm']);
    Route::post('/update/{idProf}',[profileController::class,'update']);
    Route::get('/delete/{id}',[profileController::class,'delete']);
    Route::get('/logout',[authController::class,'logout']);
});
