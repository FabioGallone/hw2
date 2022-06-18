<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;

class CreateTrigger extends Migration {

    public function up()
    {
        DB::unprepared('insert into shops (nome, immagine, descrizione, prezzo) values
        ("MAGLIETTA NERA", "image/maglia_nera.jpg", "Una bellissima maglia nera realizzata in cotone", "10"),
        ("MAGLIETTA BIANCA", "image/maglia_bianca.jpg", "Una bellissima maglia bianca realizzata in cotone", "10"),
        ("MAGLIETTA VERDE", "image/maglia_verde.jpg", "Una bellissima maglia verde realizzata in cotone", "10");');
    }
}
