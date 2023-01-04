<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AndroidPhoneController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyFavoritesController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\ShopCartController;



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

Route::get('/', [HomeController::class, 'index'])->name('Home.index');

Route::get('/Hakkimizda', [AboutUsController::class, 'index'])->name('AboutUs.index');

Route::get('/Android_telefonlar', [AndroidPhoneController::class, 'index'])->name('AndroidPhone.index');

Route::get('/Bize_Ulaşin', [ContactUsController::class, 'index'])->name('Contact.index');

Route::get('/Favorilerim', [MyFavoritesController::class, 'index'])->name('MyFavorites.index');

Route::get('/Ürün_Hakkinda', [ProductDetailsController::class, 'index'])->name('ProductDetail.index');

Route::get('/Sepet', [ShopCartController::class, 'index'])->name('ShopCart.index');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
