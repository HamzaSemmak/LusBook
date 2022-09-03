<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\LusproductController;
use Illuminate\Support\Facades\Auth;

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

/*
*   HomeController
*/
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("/removeaccount", [HomeController::class, 'removeaccount']);
Route::get("/deleteaccount/{id}", [HomeController::class, 'deleteaccount']);
/*
*   ProductController
*/
Route::get("/", [ProductController::class, 'index']);
Route::get("/fiche-product/{id}", [ProductController::class, 'show']);
Route::get("/search", [ProductController::class, 'search']);
/*
*   CartController
*/
Route::post("/AddToCart", [CartController::class, 'AddToCart']);
Route::get("/cart", [CartController::class, 'shoppingCart']);
Route::get("/removeProductFromCart/{id}", [CartController::class, 'removeProductFromCart']);
/*
*   OrderController
*/
Route::get("/order", [OrderController::class, 'orderProduct']);
Route::post("/orderplace", [OrderController::class, 'orderPlace']);
Route::get("/myorderdetail/{id}", [OrderController::class, 'myorderdetail']);
/*
*   AdminController
*/
Route::post("/dashboard", [AdminController::class, 'Admin']);
Route::get('/Authentication', [AdminController::class, 'Authentication']);
Route::get('/Admin', [AdminController::class, 'index']);
Route::get('/logout', [AdminController::class, 'logout']);
/*
*   CompteController
*/
Route::get("/myorders", [CompteController::class, 'myOrders']);
Route::get("/donnéesPersonnelle", [CompteController::class, 'donnéesPersonnelle']);
Route::post("/editDonnéesPersonnelle/{id}", [CompteController::class, 'editDonnéesPersonnelle']);
/*
*   ContactController
*/
Route::get('/contact', [ContactController::class, 'contact']);
Route::post("/sendEmail", [ContactController::class, 'sendEmail']);
/*
*   CategoryController
*/
Route::get("/nouveautes", [CategoryController::class, 'nouveautes']);
Route::get("/categorie/{categorie}", [CategoryController::class, 'categorie']);
Route::post("/searchAdvanced", [CategoryController::class, 'advancedSearchByPrice']);
Route::get("/searchReleases/{days}", [CategoryController::class, 'advancedSearchByDays']);
Route::get("/searchauthor/{author}", [CategoryController::class, 'advancedSearchByAuthor']);
/*
*   FavoritesController
*/
Route::get("/favorites", [FavoritesController::class, 'favorites']);
Route::post("/AddToFavorite", [FavoritesController::class, 'AddToFavorite']);
Route::get("/removeProductFromFavorite/{id}", [FavoritesController::class, 'removeProductFromFavorite']);
/*
*   Cms Views
*/
Route::get('/Emploi', function () { return view('Emploi'); });
Route::get('/features', function () { return view('features'); });
Route::get('/QuiSommesNous', function () { return view('QuiSommesNous'); });
Route::get('/livraison', function () { return view('livraison'); });
Route::get('/Retour', function () { return view('Retour'); });
Route::get('/Paiement', function () { return view('Paiement'); });
Route::get('/Faq', function () { return view('Faq'); });
Route::get('/Cgv', function () { return view('Cgv'); });
/*
*   Error Page 404
*/
Route::get('/404', function () {
    return abort(404);
});




/*
*   LusproductController
*/
Route::get("/Products", [LusproductController::class, 'index']);
Route::get("/productcreate", [LusproductController::class, 'create']);
Route::get("/productedit/{id}", [LusproductController::class, 'edit']);
Route::get("/productremove/{id}", [LusproductController::class, 'delete']);
Route::post("/SaveProduct", [LusproductController::class, 'SaveProduct']);