<?php

use App\Http\Controllers\BuyingController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SalesController;
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

Route::get('/', function () {
    return view('welcome');
});

 # For the Auth process
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

 # Editing the profile of a user
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/products', [ProductsController::class, 'index'])->name('products');
Route::get('/sales', [SalesController::class, 'index'])->name('sales');
Route::get('/available', [BuyingController::class, 'index'])->name('available');


# 
Route::middleware('auth')->group(function () {
    Route::get('/products/create', [ProductsController::class, 'create']);
});



# For the features of the web application
// Route::resources([
//     'products', ProductsController::class,
//     'sales', SalesController::class,
//     'available', BuyingController::class
// ]);




Route::fallback( [FallbackController::class, '__invoke']);


require __DIR__.'/auth.php';
