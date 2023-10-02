<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputanMaturitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputan_maturities', function (Blueprint $table) {
            $table->id();
            $table->string('aspek_maturity_id');
            $table->foreign('aspek_maturity_id')->on('aspek_maturities')->references('kode_aspek');
            $table->string('indikator_maturity_id');
            $table->foreign('indikator_maturity_id')->on('indikator_maturities')->references('kode_indikator');
            $table->string('inputan');
            $table->string('tipe_inputan')->unique();
            $table->string('nilai');
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
        Schema::dropIfExists('inputan_maturities');
    }
}
