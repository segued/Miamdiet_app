<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    public function produits()
    {
        return $this->belongsTo(Produit::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function Panier()
    {
        return $this->belongsTo(cart::class);
    }

}
