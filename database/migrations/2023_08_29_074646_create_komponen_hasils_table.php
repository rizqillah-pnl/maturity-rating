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
            $table->string('nilai');
            $table->foreignId('user_id')->constrained('users', 'id');
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
