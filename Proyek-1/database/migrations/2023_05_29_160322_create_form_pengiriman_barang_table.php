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
        Schema::create('form_pengiriman_barang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies');
            $table->date('tanggal');
            $table->string('nama_penerima');
            $table->string('alamat_penerima');
            $table->string('telp_penerima');
            $table->string('nama_pengirim');
            $table->string('alamat_pengirim');
            $table->string('bukti_transaksi');
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
        Schema::dropIfExists('form_pengiriman_barang');
    }
};
