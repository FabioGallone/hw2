<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Product extends Model
{


    use HasApiTokens, Notifiable;
    protected $connection = 'mongodb';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    protected $fillable = [
        'nome',
        'cognome',
        'nome_maglie_acquistate',
        'prezzo',
        'data_ordine',
        
    ];


    public function user() {
        return $this->belongsTo("App\Models\User");
    }


    /*
    public function save(){
        return $this->hasMany("App\Models\Shop");
    }
    */
}
