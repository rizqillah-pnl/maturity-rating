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
            $table->id();
            $table->string('indikator_maturity_id');
            $table->foreign('indikator_maturity_id')->on('indikator_maturities')->references('kode_indikator');
            $table->string('indikator')->unique();
            $table->string('indikator_fullname')->nullable();
            $table->string('nilai');
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
