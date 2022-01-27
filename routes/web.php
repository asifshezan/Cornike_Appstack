<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\RecycleController;

use App\Http\Controllers\Website\WebsiteController;

use App\Models\Admin;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


// Website Routes Start
Route::get('/',[WebsiteController::class, 'index']);
Route::get('about',[WebsiteController::class, 'about']);

// Admin Panel Routes Start
Route::get('dashboard',[AdminController::class, 'index']);

Route::get('dashboard/user',[UserController::class, 'index']);
Route::get('dashboard/user/add',[UserController::class, 'add']);
Route::get('dashboard/user/edit',[UserController::class, 'edit']);
Route::get('dashboard/user/view',[UserController::class, 'view']);
Route::post('dashboard/user/submit',[UserController::class, 'submit']);
Route::post('dashboard/user/update',[UserController::class, 'update']);
Route::post('dashboard/user/softdelete',[UserController::class, 'softdelete']);
Route::post('dashboard/user/restore',[UserController::class, 'restore']);
Route::post('dashboard/user/delete',[UserController::class, 'delete']);


Route::get('dashboard/banner',[BannerController::class, 'index']);
Route::get('dashboard/banner/add',[BannerController::class, 'add']);
Route::get('dashboard/banner/edit',[BannerController::class, 'edit']);
Route::get('dashboard/banner/view',[BannerController::class, 'view']);
Route::post('dashboard/banner/submit',[BannerController::class, 'submit']);
Route::post('dashboard/banner/update',[BannerController::class, 'update']);
Route::post('dashboard/banner/softdelete',[BannerController::class, 'softdelete']);
Route::post('dashboard/banner/restore',[BannerController::class, 'restore']);
Route::post('dashboard/banner/delete',[BannerController::class, 'delete']);

Route::get('dashboard/recycle',[RecycleController::class, 'index']);

require __DIR__.'/auth.php';
