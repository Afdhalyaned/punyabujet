<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('transaction.index');
})->middleware(['auth'])->name('dashboard');

// transaction route
Route::get('/transaction', 'App\Http\Controllers\TransactionController@index')->middleware(['auth'])->name('transaction');
// Route::get('/transaction/create', 'App\Http\Controllers\TransactionController@create')->middleware(['auth'])->name('transaction-create');
Route::get('/transaction/{transaction}', 'App\Http\Controllers\TransactionController@show')->middleware(['auth'])->name('transaction-show');
Route::post('/transaction', 'App\Http\Controllers\TransactionController@store')->middleware(['auth'])->name('transaction-store');
Route::post('/transaction/{transaction}/delete', 'App\Http\Controllers\TransactionController@destroy')->middleware(['auth'])->name('transaction-destroy');
Route::get('/transaction/{transaction}/edit', 'App\Http\Controllers\TransactionController@edit')->middleware(['auth'])->name('transaction-edit');
Route::post('/transaction/{transaction}/update', 'App\Http\Controllers\TransactionController@update')->middleware(['auth'])->name('transaction-update');

// wallet route
Route::get('/wallet', 'App\Http\Controllers\WalletController@index')->middleware(['auth'])->name('wallet');
Route::get('/wallet/{wallet}', 'App\Http\Controllers\WalletController@show')->middleware(['auth'])->name('wallet-show');
Route::post('/wallet', 'App\Http\Controllers\WalletController@store')->middleware(['auth'])->name('wallet-store');
Route::post('/wallet/{wallet}/delete', 'App\Http\Controllers\WalletController@destroy')->middleware(['auth'])->name('wallet-destroy');
Route::get('/wallet/{wallet}/edit', 'App\Http\Controllers\WalletController@edit')->middleware(['auth'])->name('wallet-edit');
Route::post('/wallet/{wallet}/update', 'App\Http\Controllers\WalletController@update')->middleware(['auth'])->name('wallet-update');

// category route
Route::get('/category', 'App\Http\Controllers\CategoryController@index')->middleware(['auth'])->name('category');
Route::get('/category/{category}', 'App\Http\Controllers\CategoryController@show')->middleware(['auth'])->name('category-show');
Route::post('/category', 'App\Http\Controllers\CategoryController@store')->middleware(['auth'])->name('category-store');
Route::post('/category/{category}/delete', 'App\Http\Controllers\CategoryController@destroy')->middleware(['auth'])->name('category-destroy');
Route::get('/category/{category}/edit', 'App\Http\Controllers\CategoryController@edit')->middleware(['auth'])->name('category-edit');
Route::post('/category/{category}/update', 'App\Http\Controllers\CategoryController@update')->middleware(['auth'])->name('category-update');

require __DIR__.'/auth.php';
