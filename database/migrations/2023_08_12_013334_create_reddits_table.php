<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRedditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Crea una nueva tabla llamada 'reddits'
        Schema::create('reddits', function (Blueprint $table) {
            // Define una columna de identificación única (ID) para cada registro
            $table->id();
            // Define columnas para otros atributos de la tabla
            $table->string('display_name')->nullable();
            $table->string('title')->nullable();
            $table->string('url')->nullable();
            $table->string('description')->nullable();
            $table->string('banner_background_image')->nullable();
            $table->string('display_name_prefixed')->nullable();
            $table->timestamps(); // Crea columnas para las marcas de tiempo 'created_at' y 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Deshace la creación de la tabla 'reddits'
        Schema::dropIfExists('reddits');
    }
}
