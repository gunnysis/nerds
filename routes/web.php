<?php

use App\Http\Controllers\BoardController;
use App\Http\Controllers\ImageUploadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;



Route::get('/', function () {
    return view('auth.login');
});

Route::get('/index',function (){
    return view('index');
})->name('index');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});







Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('boards',[BoardController::class,'index'])->name('boards.index');
Route::get('boards/create',[BoardController::class,'create'])->name('boards.create');
Route::post('boards',[BoardController::class,'store'])->name('boards.store');
Route::get('boards/{board}',[BoardController::class,'show'])->name('boards.show');

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    Route::get('/gallery/show', [ImageUploadController::class,'index'])->name('gallery.index');
    Route::get('/gallery/uploadForm', [ImageUploadController::class,'uploadForm'])->name('gallery.uploadForm');
    Route::post('/gallery', [ImageUploadController::class,'upload'])->name('gallery.post');
});

Route::get('video',function (){
    return view('videos.show');
})->name('videos.show');


Route::get('test', function (){
    return view('chat.show');
});


