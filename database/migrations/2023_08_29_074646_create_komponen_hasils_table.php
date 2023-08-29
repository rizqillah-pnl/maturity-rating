<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomponenHasilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komponen_hasils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_kriteria')->unique();
            $table->enum('maturity_level', ['1', '2', '3', '4', '5']);
            $table->string('kriteria_indikator');
            $table->string('work_product')->nullable();
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
        Schema::dropIfExists('komponen_hasils');
    }
}
