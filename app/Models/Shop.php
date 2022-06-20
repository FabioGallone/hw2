<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Shop extends Model
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
        'immagine',
        'descrizione',
        'prezzo',       
    ];



    

 
}
