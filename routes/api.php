<?php

use App\Http\Controllers\api\user;
use App\Http\Controllers\firebase\test;
use App\Http\Controllers\firebase\user as FirebaseUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('regester', [user::class, 'regester'])->name('regester');
Route::post('login', [user::class, 'login'])->name('login');
Route::get('all_std', [user::class, 'all_std'])->name('all_std');

// Route::post('regester', [test::class, 'regester'])->name('regester');

Route::post('reservation', [user::class, 'hagz'])->name('reservation');
Route::post('Confirm_reservation', [user::class, 'valdate_hagz'])->name('Confirm_reservation');
Route::get('orders', [user::class, 'v_stat_std_valdate'])->name('orders');
Route::get('history_orders', [user::class, 'v_stat_std'])->name('history_orders');