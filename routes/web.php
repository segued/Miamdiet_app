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
use App\Http\Controllers\Admin\User\ProduitparcategorieController;
use App\Http\Controllers\Admin\User\RendezvousController;

Route::get('/', function () {
    return view ('Client.userinterface.index');
});

Route::get('/index', [IndexController::class, 'index'])->name('accueil');
// Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/temoignages',[TemoignageController::class, 'temoignages'])->name('temoignages');
Route::get('/blog',[BlogController::class, 'index'])->name('blog');
Route::get('/blogsingle', [BlogSingleController::class, 'index'])->name('blogsingle');
Route::get('/checkout/{id}', [CheckoutController::class, 'index'])->name('checkout.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/singleproduit/{id}', [SingleproduitController::class, 'show'])->name('singleproduit');
Route::get('/book', [BookController::class, 'vue'])->name('livres');
Route::get('/service', [ServiceController::class, 'index'])->name('service');


Route::get('/store',[ProductController::class, 'store'])->name('Administration.produit.index');
Route::get('/produitparcategorie', [ProduitparcategorieController::class, 'index'])->name('produitparcategorie');


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/traitementlogin', [AuthController::class, 'handle'])->name('traitementlogin');

Route::get('/resset', [RessetpasswordController::class, 'index'])->name('resset');
Route::put('/update', [RessetpasswordController::class, 'update'])->name('update');

Route::resource('/register', RegisterController::class);
Route::get('/register', [RegisterController::class, 'userlist'])->name('register');
Route::post('/create', [RegisterController::class, 'create'])->name('create');


Route::resource('produit', ProductController::class);
Route::resource('category', CategoryController::class);
Route::get('/categorie/{id}/produit', [ProductController::class, 'produitparcategorie'])->name('produitparcategorie');


Route::resource('creneau', CreneauController::class);
// Route::post('prendreRdv',[CreneauController::class, 'prendreRdv'])->name('prendreRdv');
Route::resource('book', BookController::class);
Route::resource('livre', LivreController::class);



Route::middleware('auth')->group(function (){

    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add', [CartController::class, 'add_to_cart'])->name('cart.add');
    Route::post('/cart/book', [CartController::class, 'addBookToCart'])->name('cart.book');
    // Route::put('/cart/increase-quantity/{rowId}', [CartController::class, 'increase_cart_quantity'])->name('cart.qty.increase');
    // Route::put('/cart/decrease-quantity/{rowId}', [CartController::class, 'decrease_cart_quantity'])->name('cart.qty.decrease');
    // Route::delete('/cart/remove/{rowId}',[CartController::class,'remove_item'])->name('cart.remove.item');
    Route::delete('/cart/supprimer/{rowId}', [CartController::class, 'remove'])->name('cart.remove.item');
    Route::delete('/cart/clear', [CartController::class, 'clear'])->name('cart.clear.item');
    // Route::delete('/cart/clear',[CartController::class,'empty_cart'])->name('cart.clear');


    Route::resource('rdv', RendezvousController::class);
    Route::get('/planifierRdv/{id}', [RendezvousController::class, 'planifierRdv']);


    Route::get('/monpanier', [CheckoutController::class, 'afficherPanier'])->name('afficherPanier');




    Route::resource('temoignage', TemoignageController::class);
    Route::resource('user', UserController::class);
    Route::get('/client', [UserController::class, 'client'])->name('client');
    Route::resource('Userdashboard', UserdashboardController::class);
    Route::resource('gestionnaire', GestionnaireController::class);
    Route::resource('commande', CommandeController::class);
    Route::post('/ValiderCommande', [CommandeController::class, 'ValiderCommande'])->name('ValiderCommande');
    Route::get('stockage', [CommandeController::class, 'stockage'])->name('stockage');
    Route::get('rendezvous', [CommandeController::class, 'rendezvous'])->name('rendezvous');
    Route::post('procederpaiment/{id}', [CommandeController::class, 'procederpaiment'])->name('procederpaiment');

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/panier', [DashboardController::class, 'panier'])->name('panier');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

});

