<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Product extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    protected $fillable = [
        'nome',
        'cognome',
        'nome_maglia',
        'prezzo',
        'data_ordine',
        
    ];


    public function user() {
        return $this->belongsTo("App\Models\User");
    }


    public function save(){
        return $this->hasOne("App\Models\Save");
    }
 
}
