<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'creneau_id',
        'date',
        'statut',
        'deleted_at'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function creneau()
    {
        return $this->belongsTo(Creneau::class);
    }
}


