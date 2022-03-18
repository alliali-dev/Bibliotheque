<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeingnToLivre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('livre', function (Blueprint $table) {
            //Creons la cle table_id
             $table->unsignedBigInteger('editeur_id');
            // la cle table_id devient cle etrangere de la table livre et referencie table
            $table->foreign('editeur_id')->references('id')->on('editeur')->onDelete('cascade')->onUpdate('cascade');
           
            $table->unsignedBigInteger('auteur_id');
            $table->foreign('auteur_id')->references('id')->on('auteur')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('categorie_id');
            $table->foreign('categorie_id')->references('id')->on('categorie')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('typelivre_id');
            $table->foreign('typelivre_id')->references('id')->on('typelivre')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('livre', function (Blueprint $table) {
            //
        });
    }
}
