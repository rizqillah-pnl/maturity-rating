<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokumenPendukungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumen_pendukungs', function (Blueprint $table) {
            $table->id();
            $table->string('indikator_maturity_id');
            $table->foreign('indikator_maturity_id')->on('indikator_maturities')->references('kode_indikator');
            $table->text('files');
            $table->text('real_name');
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
        Schema::dropIfExists('dokumen_pendukungs');
    }
}
