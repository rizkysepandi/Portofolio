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
        Schema::create('invoice_penjualan_kredit', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies');
            $table->date('tanggal');
            $table->string('no_invoice');
            $table->string('nama');
            $table->string('alamat');
            $table->string('telp');
            $table->date('tanggal_jatuh_tempo');
            $table->string('barang');
            $table->string('jumlah_barang');
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
        Schema::dropIfExists('invoice_penjualan_kredit');
    }
};
