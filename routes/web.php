<?php

use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\All\MainController;
use Illuminate\Support\Facades\Auth;
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

Route::view('/', 'welcome')->name('index');

Auth::routes(['except' => 'home']);

Route::middleware('role:admin')->prefix('admin')->as('admin.')->group(function(){
    Route::get('/', DashboardController::class)->name('index');
});
