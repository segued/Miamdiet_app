<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\Produit;
use App\Models\Panier;
use App\Http\Controllers\Controller;
use App\Models\Livre;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Surfsidemedia\Shoppingcart\Facades\Cart ;

class CartController extends Controller
{

    public function index()
    {
        $items = Cart::instance('cart')->content();
        return view('Client.userinterface.cart', compact('items'));
    }

    public function add_to_cart(Request $request)
    {
        Cart::instance('cart')->add($request->id, $request->nom, $request->quantity, $request->prix)
        ->associate(Produit::class);
        return redirect()->back();
    }

    public function traiterCommande(Request $request)
    {
        $panier = new Panier();
        $noms = $request->input('noms'); // Récupérer les noms des produits
        $prix = $request->input('prix'); // Récupérer les prix
        $quantities = $request->input('quantities'); // Récupérer les quantités
        $totals = $request->input('totals'); // Récupérer les totaux

        // Traitez les données comme nécessaire
        // Exemple : enregistrement dans la base de données ou traitement de la commande

        return redirect()->back()->with('success', 'Commande traitée avec succès !');
    }



    public function increase_cart_quantity($rowId)
    {
        $produit = Cart::instance('cart')->get($rowId);
        $qty = $produit->qty + 1;
        Cart::instance('cart')->update($rowId, $qty);
        return redirect()->back();

    }


    public function decrease_cart_quantity($rowId)
    {
        $produit = Cart::instance('cart')->get($rowId);
        $qty = $produit->qty - 1;
        Cart::instance('cart')->update($rowId, $qty);
        return redirect()->back();

    }

    // public function remove(Request $request)
    // {
    //     // Récupérer l'ID du produit à supprimer
    //     $productId = $request->input('productId');

    //     // Récupérer l'utilisateur connecté
    //     $user = auth()->user();

    //     // Supprimer le produit du panier
    //     Cart::where('user_id', $user->id)
    //         ->where('product_id', $productId)
    //         ->delete();

    //     // Retourner une réponse (par exemple, un message de succès)
    //     return response()->json(['success' => true]);
    // }


















//     public function index()
//     {
//         $cartItems = Cart::instance('cart')->content();
//         $produit = Produit::all();
//         $cart = Auth::user()->cart;
//         return view('Client.userinterface.cart', compact('produit', 'cartItems'));
//     }

//     public function addToCart(Request $request)
//     {
//         $produit = Produit::find($request->id);
//         Cart::instance('cart')->add($produit->id, $produit->nom,$request->quantity, $produit->prix)
//                     ->associate('App\Models\Produit');
//                     return redirect()->back()->with('message', 'success ! produit ajouter avec succes');
//     }

//     public function addBookToCart(Request $request){
//         $livre = Livre::find($request->id);
//         Cart::instance('cart')->add($livre->id, $livre->titre, $livre->prix)
//                     ->associate('App\Models\Livre');
//         return redirect()->back()->with('message', 'success ! livre ajouter avec succes');
//     }

//     public function updateCart(Request $request)
//     {
//         Cart::instance('cart')->update($request->rowId,$request->quantity);
//         return redirect()->route('cart.index');
//     }


//     public function removeItem(Request $request)
// {
//     $rowId = $request->rowId;
//     Cart::instance('cart')->remove($rowId);
//     return redirect()->route('cart.index');
// }


// public function clearCart()
// {
//     Cart::instance('cart')->destroy();
//     return redirect()->route('cart.index');
// }


}




