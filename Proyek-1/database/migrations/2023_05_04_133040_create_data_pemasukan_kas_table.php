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
        Schema::create('data_pemasukan_kas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pemasukan_kas_id')->constrained('pemasukan_kas');
            $table->string('nama_akun');
            $table->string('noref');
            $table->float('debit', 12, 2);
            $table->float('kredit', 12, 2);
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
        Schema::dropIfExists('data_pemasukan_kas');
    }
};
