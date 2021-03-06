<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\OrderpageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserpageController;
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

Route::get('/', [HomepageController::class, 'index'])->name('home');

Route::get('order', [OrderpageController::class, 'index'])->name('orderpage');
Route::post('order', [CartController::class, 'store'])->name('cart.store');



Route::get('user/order', [CartController::class, 'index'])->name('cart')->middleware('auth');
Route::get('user/checkout', [UserController::class, 'checkout'])->name('checkout')->middleware('auth');
Route::post('user/checkout', [UserController::class, 'checkoutAddress'])->name('checkout.address');

Route::get('user/profile', [UserController::class, 'edit'])->name('edit')->middleware('auth');

Route::post('user/profile', [UserController::class, 'editStore'])->name('edit_store');
// Route::post('user/profile', [UserController::class, 'deleteUser'])->name('delete.user');





Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index']);

Route::post('/', [UserController::class, 'store'])->name('user_store');
