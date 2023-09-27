<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DebtController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(AuthController::class)->group(function(){
    Route::get('/' , 'welcome')->name('welcome');
    Route::post('/login' , 'loginStore')->name('loginStore');
});

Route::controller(ClientController::class)->group(function(){
    Route::get('/clients' , 'clientsPage')->name('clientsPage');
    Route::get('/addclient', 'addClientPage')->name('addclientpage');
    Route::post('/addclient', 'addClient')->name('addclient');
});

Route::controller(DebtController::class)->group(function(){
    Route::get('/debt/{client_id}' , 'debtPage')->name('debtPage');
});
