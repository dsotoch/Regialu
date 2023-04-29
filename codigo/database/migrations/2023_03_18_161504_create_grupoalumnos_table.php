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
        Schema::create('grupoalumnos', function (Blueprint $table) {
            $table->id();
            $table->json('alumno_id')->nullable();
            $table->string('grupo_id');
            $table->foreignId('horario_id')->nullable()->references('id')->on('horarios')->onDelete(null);
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupoalumnos');
    }
};
