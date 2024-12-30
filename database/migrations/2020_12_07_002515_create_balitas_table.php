<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anak', function (Blueprint $table) {
            $table->bigIncrements('anak_id'); // Primary key
            $table->string('nama_anak', 50);
            $table->string('tempat_lahir', 100);
            $table->date('tanggal_lahir');
            $table->string('jk', 20)->nullable();
            $table->string('nama_ayah', 100)->nullable();
            $table->unsignedBigInteger('ibu_id_anak'); // Foreign key ke tabel ibu
            $table->string('alamat', 50);
           

            // Definisi foreign key
            $table->foreign('ibu_id_anak')->references('ibu_id')->on('ibu')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anak'); // Nama tabel yang sesuai
    }
}
