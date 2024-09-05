<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\Produit;
use App\Models\Panier;
use App\Http\Controllers\Controller;
use App\Models\Livre;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Surfsidemedia\Shoppingcart\Facades\Cart;

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

    public function add_book_to_cart(Request $request)
    {
        Cart::instance('cart')->add($request->id, $request->titre, $request->quantity, $request->prix)
            ->associate(Livre::class);
        return redirect()->back();
    }

    // public function remove_item($rowId){
    //     Cart::instance('cart')->remove($rowId);
    //     return redirect()->back();
    // }

    public function empty_cart()
    {
        Cart::instance('cart')->destroy();
        return redirect()->back();
    }

    public function remove_item($rowId)
    {
        // Logique pour retirer l'élément du panier
        Cart::remove($rowId); // Par exemple, si tu utilises la bibliothèque Cart
        return response()->json(['success' => true]);
    }



    // public function removeItem($rowId)
    // {
    //     // Vérifie si l'élément existe
    //     $item = Cart::get($rowId); // Assure-toi que tu utilises la bonne méthode pour récupérer l'élément

    //     if (!$item) {
    //         return response()->json(['message' => 'Élément non trouvé.'], 404);
    //     }

    //     // Supprime l'élément du panier
    //     Cart::remove($rowId);

    //     return response()->json(['success' => true]);
    // }


    public function remove($rowId)
    {
        Cart::remove($rowId);
        return response()->json(['success' => true]);
    }


    public function clear()
    {
        Cart::remove();
        return response()->json(['success' => true]);
    }



















    // public function increase_cart_quantity($rowId)
    // {
    //     $produit = Cart::instance('cart')->get($rowId);
    //     $qty = $produit->qty + 1;
    //     Cart::instance('cart')->update($rowId, $qty);
    //     return redirect()->back();

    // }

    // public function decrease_cart_quantity($rowId)
    // {
    //     $produit = Cart::instance('cart')->get($rowId);
    //     $qty = $produit->qty - 1;
    //     Cart::instance('cart')->update($rowId, $qty);
    //     return redirect()->back();
    // }

}
