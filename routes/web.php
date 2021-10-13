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

// Example Routes

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    route::get('/',[\App\Http\Controllers\DashboardController::class,'index'])->name('dashboard');
    Route::view('/pages/slick', 'pages.slick');
    Route::view('/pages/datatables', 'pages.datatables');
    Route::view('/pages/blank', 'pages.blank');
});




// Route::view('/', 'landing');
// Route::match(['get', 'post'], '/dashboard', function(){
//     return view('dashboard');
// });
