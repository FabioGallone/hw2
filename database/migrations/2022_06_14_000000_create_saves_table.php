<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
     {
        Schema::create('saves', function (Blueprint $table) {

            $table->integer('id_utente');
            $table->integer('id_prodotto');
            $table->integer('numero_articolo');
            $table->string('nome_maglia', 100);
            $table->string('immagine_maglia',100);
            $table->decimal('prezzo_maglia', 4, 2);     
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saves');
    }
};
