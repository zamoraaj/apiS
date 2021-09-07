<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUlwasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ulwas', function (Blueprint $table) {
            $table->id();
            $table->string('palabra',60);
            $table->string('descripcion',80);
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
        Schema::dropIfExists('ulwas');
    }
}



// $table->integer("rol_id")->unsigned();

//         $table->foreign("rol_id")->references("id")->on("roles")
//             ->onDelete("cascade")
//             ->onUpdate("cascade");
//         $table->timestamps();