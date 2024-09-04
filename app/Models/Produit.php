<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produit extends Model
{
    use HasFactory;

    public function categorie():BelongsTo{
        return $this->belongsTo(Categorie::class);
    }


    public function Order()
    {
        return $this->hasMany(Commande::class);
    }

    public function cart()
    {
        return $this->belongsToMany(Cart::class, 'panier_produits')
            ->withPivot('quantite');
    }

}
