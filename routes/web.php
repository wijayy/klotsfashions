<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;

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
    return view('index', [
        "title" => "Home",
        'recomendations' => Product::all()->shuffle()->take(12),
        'newA' => Product::latest()->take(12)->get(),
    ]);
});

Route::resource('/products', ProductController::class)->only(['index', "show"]);
Route::resource('/blogs', BlogController::class)->only(['index', "show"]);

Route::get("/login", [LoginController::class, 'index'])->name("login")->middleware("guest");
Route::post("/login", [LoginController::class, "authenticate"]);
Route::post("/logout", [LoginController::class, 'logout']);
