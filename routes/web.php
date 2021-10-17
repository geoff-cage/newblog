<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AuthController;


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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);


//for authentication

Route::post('/auth/save', [AuthController::class, 'save'])->name('auth.save');
Route::post('/auth/check', [AuthController::class, 'check'])->name('auth.check');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');



Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/auth/register', [AuthController::class, 'register'])->name('auth.register');
    Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');

    //for dashboard
    Route::get('/dash/dashboard', [AuthController::class, 'dashboard']);

    //for the crud functions
    Route::resource('posts', PostsController::class);

    //Route::resource('posts/create', PostsController::class)->withoutMiddleware('posts.create');

});
