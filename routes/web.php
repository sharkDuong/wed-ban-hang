<?php
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProdductController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
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
// Route::get('/user', [UserController::class, 'index'])->name('users.index');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::resource('products',ProductController::class)->only(['show','create','index']);
Route::get('/product-detail', function () {
    return view('product-detail');
});
Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/',[AdminController::class,'index'])->name('index');
        Route::get('/products/create',[AdminProductController::class,'create'])->name('.products.create');
        Route::post('/products',[AdminProductController::class,'store'])->name('products.store');
});
require __DIR__.'/auth.php';
