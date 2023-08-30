<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKriteriaMaturitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kriteria_maturities', function (Blueprint $table) {
            // $table->id();
            $table->string('kode_kriteria')->primary();
            $table->string('kode_indikator_id');
            $table->foreign('kode_indikator_id')->on('indikator_maturities')->references('kode_indikator');
            $table->string('maturity_level');
            $table->text('kriteria_indikator');
            $table->text('work_product')->nullable();
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
        Schema::dropIfExists('kriteria_maturities');
    }
}
