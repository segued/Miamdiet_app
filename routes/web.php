<?php

use Illuminate\Support\Facades\Route;

// //User
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RessetpasswordController;
use App\Http\Controllers\Admin\User\BlogController;
use App\Http\Controllers\Admin\User\BookController;
use App\Http\Controllers\Admin\User\CartController;
use App\Http\Controllers\Admin\User\ShopController;
use App\Http\Controllers\Admin\User\AboutController;
use App\Http\Controllers\Admin\User\IndexController;
use App\Http\Controllers\Admin\User\ContactController;

//
use App\Http\Controllers\Admin\User\ServiceController;
use App\Http\Controllers\Admin\User\CheckoutController;
use App\Http\Controllers\Admin\User\ServicesController;
use App\Http\Controllers\Admin\Produit\ProductController;

//Admin/Produit
use App\Http\Controllers\Admin\User\BlogSingleController;
use App\Http\Controllers\Admin\Produit\CategoryController;

//Admin/Dashboard
use App\Http\Controllers\Admin\Produit\CategorieController;
use App\Http\Controllers\Admin\Dashboard\CommandeController;
use App\Http\Controllers\Admin\Dashboard\CreneauController;
use App\Http\Controllers\Admin\User\SingleproduitController;
use App\Http\Controllers\Admin\User\UserdashboardController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Dashboard\TemoignageController;
use App\Http\Controllers\Admin\Dashboard\GestionnaireController;
use App\Http\Controllers\Admin\User\CartsController;
use App\Http\Controllers\Admin\User\LivreController;
use App\Http\Controllers\Admin\User\MessageController;
use App\Http\Controllers\Admin\User\ProduitparcategorieController;
use App\Http\Controllers\Admin\User\RendezvousController;






Route::get('/', [IndexController::class, 'index'])->name('accueil');
Route::resource('/register', RegisterController::class);
Route::get('/register', [RegisterController::class, 'userlist'])->name('register');
Route::post('/create', [RegisterController::class, 'create'])->name('create');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/traitementlogin', [AuthController::class, 'handle'])->name('traitementlogin');
Route::get('/resset', [RessetpasswordController::class, 'index'])->name('resset');
Route::put('/update', [RessetpasswordController::class, 'update'])->name('update');


Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/monpanier', [CheckoutController::class, 'afficherPanier'])->name('afficherPanier');
    Route::get('/checkout/{id}', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::get('/planifierRdv', [RendezvousController::class, 'planifierRdv']);
    Route::post('/ValiderCommande', [CommandeController::class, 'ValiderCommande'])->name('ValiderCommande');
    Route::post('procederpaiment/{id}', [CommandeController::class, 'procederpaiment'])->name('procederpaiment');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add', [CartController::class, 'add_to_cart'])->name('cart.add');
    Route::post('/cart/book', [CartController::class, 'add_book_to_cart'])->name('cart.book');
    Route::delete('/cart/supprimer/{rowId}', [CartController::class, 'remove'])->name('cart.remove.item');
    Route::delete('/cart/clear', [CartController::class, 'clear'])->name('cart.clear.item');
    Route::resource('commande', CommandeController::class);

});
Route::get('/categorie/{id}/produit', [ProductController::class, 'produitparcategorie'])->name('produitcategorie');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/singleproduit/{id}', [SingleproduitController::class, 'show'])->name('singleproduit');
Route::get('/produitparcategorie', [ProduitparcategorieController::class, 'index'])->name('produitparcategorie');
Route::resource('/message', MessageController::class);
Route::resource('livre', LivreController::class);
Route::get('/service', [ServiceController::class, 'index'])->name('service');








Route::middleware(['auth', 'admin'])->group(function () {

    Route::resource('produit', ProductController::class);
    Route::resource('category', CategoryController::class);
    Route::get('/store', [ProductController::class, 'store'])->name('Administration.produit.index');
    Route::resource('book', BookController::class);
    Route::resource('rdv', RendezvousController::class);
    Route::resource('temoignage', TemoignageController::class);
    Route::resource('user', UserController::class);
    Route::resource('Userdashboard', UserdashboardController::class);
    Route::resource('gestionnaire', GestionnaireController::class);
    // Route::resource('commande', CommandeController::class);
    Route::get('rendezvous', [CommandeController::class, 'rendezvous'])->name('rendezvous');
    Route::resource('user', UserController::class);
    Route::get('/client', [UserController::class, 'client'])->name('client');


    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/panier', [DashboardController::class, 'panier'])->name('panier');
});



Route::resource('/register', RegisterController::class);
Route::get('/register', [RegisterController::class, 'userlist'])->name('register');
Route::post('/create', [RegisterController::class, 'create'])->name('create');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
