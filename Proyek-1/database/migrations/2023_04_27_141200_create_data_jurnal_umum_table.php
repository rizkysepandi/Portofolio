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
        Schema::create('data_jurnal_umum', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jurnal_umum_id')->constrained('jurnal_umum');
            $table->string('nama_akun');
            $table->string('noref');
            $table->float('debit', 12, 2)->nullable();
            $table->float('kredit', 12, 2)->nullable();
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
        Schema::dropIfExists('data_jurnal_umum');
    }
};
