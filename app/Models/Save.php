<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Save extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    protected $fillable = [
        'id_utente',
        'id_prodotto',
        'nome_maglia',
        'immagine_maglia',
        'prezzo_maglia',
        
    ];

    public function user() {
        return $this->belongsTo("App\Models\User");
    }


    public function shop(){
        return $this->BelongsTo("App\Models\Shop");
    }
 
}
