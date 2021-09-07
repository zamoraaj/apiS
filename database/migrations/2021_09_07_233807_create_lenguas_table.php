<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLenguasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lenguas', function (Blueprint $table) {
            $table->id();
            $table ->foreignId('garifuna_id')->constrained('garifunas');
            $table ->foreignId('mayagna_id')->constrained('mayagnas');
            $table ->foreignId('miskito_id')->constrained('miskitos');
            $table ->foreignId('rama_id')->constrained('ramas');
            $table ->foreignId('ulwa_id')->constrained('ulwas');
            $table ->foreignId('mestizo_id')->constrained('mestizos');
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
        Schema::dropIfExists('lenguas');
    }
}
