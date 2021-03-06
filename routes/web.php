<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\post;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UploadController;
use App\Mail\WelcomeMail;

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

Route::get('/welcome', function () {
    Mail::to('email@email.com')->send(new WelcomeMail());
    
    
    return new WelcomeMail();
});

Route::get('/education', function () {
    return view('education');
})->name('education');
Route::get('/bio', function () {
    return view('bio');
})->name('bio');
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');



Route::get('post', [BlogController::class, 'index']);
Route::get('post/create', function(){
     return view('blog.create');
});
Route::post('post/create', [BlogController::class, 'store'])->name('add-blog');

Route::get('/post/{id}', [BlogController::class, 'get_post']);
Route::view('upload', 'upload');
Route::post('upload', [UploadController::class,'index']);
Route::get('/upload/{lang}', function($lang){
    App::setlocale($lang);
    return view('upload');
});