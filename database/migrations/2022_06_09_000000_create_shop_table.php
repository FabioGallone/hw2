<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateShopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
     {
        Schema::create('shops', function (Blueprint $table) {
            $table->id('id_prodotto');
            $table->string('nome', 100);
            $table->string('immagine', 100);
            $table->string('descrizione',250);
            $table->decimal("prezzo", 4, 2);
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
};
