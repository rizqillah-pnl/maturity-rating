<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndikatorHasilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('indikator_hasils', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('indikator_maturity_id')->unique();
        //     $table->foreign('indikator_maturity_id')->on('indikator_maturities')->references('kode_indikator');
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
        Schema::dropIfExists('indikator_hasils');
    }
}
