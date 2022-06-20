<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Save extends Model
{

    use HasApiTokens, Notifiable;
    
    protected $connection = 'mongodb';

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
        'numero_articolo',
        
    ];

    public function user() {
        return $this->belongsTo("App\Models\User");
    }


    public function shop(){
        return $this->BelongsTo("App\Models\Shop");
    }
 
}
