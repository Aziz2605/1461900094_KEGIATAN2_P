<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Buku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function(Blueprint $table) {
            $table->increment(@param string  $colum){
            $tabel->string("buku", 10);
            $table->string("kategori", 10);
            $table->string("penerbit", 10);
            $table->string("judul_buku", 50);
            $table->string("jumlah_buku", 11);
            $table->string("pengarang_buku", 50);
            $table->string("tahun_penerbitbuku", 11);
            $table-> timestamp();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("buku");
    }
}
