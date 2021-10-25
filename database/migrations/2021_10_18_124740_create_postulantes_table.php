<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostulantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulantes', function (Blueprint $table) {
            $table->integer('ci')->primary();

            $table->string('cpt');
            $table->decimal('monto', 5, 2);
            $table->string('foto')->nullable();
            $table->string('carrera', 19);
            $table->string('modalidad', 10);
            $table->decimal('nota1', 5, 2)->nullable();
            $table->decimal('nota2', 5, 2)->nullable();
            $table->date('fex1')->nullable();
            $table->date('fex2')->nullable();

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
        Schema::dropIfExists('postulantes');
    }
}
