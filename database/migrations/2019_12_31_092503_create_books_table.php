<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // create table => création de la table dans MySQL
        // On définit ici la structure de la table que l'on créera plus tard
        // la méthode up crée la table
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 100); // VARCHAR 100
            $table->text('description')->nullable(); // TEXT NULL (pas obligatoire)
            $table->dateTime('published_at')->nullable(); // DATETIME nullable non obligatoire
            $table->timestamps(); // timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //la méthode down supprime la table
        Schema::dropIfExists('books');
    }
}
