<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\WinController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\HumanController;
use App\Http\Controllers\Admin\NumberController;

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

Route::get('/', [PagesController::class, 'index']);

Route::prefix('front/')->group(function () {
    Route::get('/groups', [PagesController::class, 'groups']);
    Route::get('/teachers', [PagesController::class, 'teachers']);
    Route::get('/wins', [PagesController::class, 'wins']);
    Route::get('/gallery', [PagesController::class, 'gallery']);
    Route::get('/blogs', [PagesController::class, 'blogs']);
    Route::get('/contact', [PagesController::class, 'contact']);
});

Route::get('lang/{lang}', function($lang){
    session(['lang' => $lang]);
    return back();
});

Route::prefix('admin/')->group(function(){

    Route::get('home', function(){
        return view('admin.layouts.dashboard');
    });

    Route::resource('teachers', TeacherController::class);
    Route::resource('groups', GroupController::class);
    Route::resource('wins', WinController::class);
    Route::resource('galleries', GalleryController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('posts', PostController::class);
    Route::resource('humans', HumanController::class);
    Route::resource('numbers', NumberController::class);

});
