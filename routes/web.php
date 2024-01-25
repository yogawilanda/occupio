<?php
require __DIR__ . '/auth.php';

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
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
    return view('home');
});

Route::view('/home', 'home')->name('home');

Route::view('/pricing', 'pricing.index')->name('pricing');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard.index');

Route::get('/product', function () {
    $productController = app('App\Http\Controllers\ProductController');
    $products = $productController->getProducts();
    return $productController->index($products);
})->middleware(['auth', 'verified'])->name('product.index');


// Product Routes
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');
    Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
