<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndikatorMaturitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indikator_maturities', function (Blueprint $table) {
            // $table->increments('id');
            $table->string('kode_indikator')->primary();
            $table->string('aspek_maturity_id');
            $table->foreign('aspek_maturity_id')->on('aspek_maturities')->references('kode_aspek');
            $table->string('nama_indikator');
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
        Schema::dropIfExists('indikator_maturities');
    }
}
