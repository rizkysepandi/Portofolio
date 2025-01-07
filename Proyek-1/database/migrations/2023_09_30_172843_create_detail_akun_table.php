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
        Schema::create('detail_akun', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nama_akun_id')->constrained('nama_akuns');
            $table->float('saldo', 12, 2);
            $table->float('penyesuaian', 12, 2);
            $table->string('kode_rekening');
            $table->string('d_k');
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
        Schema::dropIfExists('detail_akun');
    }
};
