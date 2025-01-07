<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies');
            $table->date('tanggal');
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->string('satuan');
            $table->integer('stok_awal');
            $table->string('harga_jual');
            $table->string('harga_beli');
            $table->integer('jumlah_barang_masuk')->nullable();
            $table->integer('jumlah_barang_keluar')->nullable();
            $table->integer('stok_akhir');
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
        Schema::dropIfExists('barang');
    }
};
