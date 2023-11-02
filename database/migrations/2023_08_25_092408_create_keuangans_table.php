<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeuangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('keuangans', function (Blueprint $table) {
        //     $table->id();
        //     $table->enum('tipe', ['KE.1', 'KE.2', 'KE.3', 'KE.4']);
        //     $table->enum('hasil', ['initial', 'managed', 'defined', 'predicatable', 'optimizing']);
        //     $table->foreignId('user_id')->constrained('users', 'id');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keuangans');
    }
}
