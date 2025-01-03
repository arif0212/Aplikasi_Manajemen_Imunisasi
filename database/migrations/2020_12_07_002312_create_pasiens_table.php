<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->bigIncrements('pendaftaran_id');
            $table->string('nama', 50);
            $table->string('alamat', 100);
            $table->string('nomor_telepon');
            $table->string('jk', 20)->nullable();
            $table->string('nama_ayah', 100)->nullable();
            $table->string('nama_orang_tua', 50);
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->tinyInteger('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasien');
    }
}
