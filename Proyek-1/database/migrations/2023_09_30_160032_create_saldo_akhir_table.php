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
        Schema::create('saldo_akhir', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies');
            $table->float('akun', 12, 2);
            $table->float('penyesuaian', 12, 2);
            $table->float('neraca_setelahnya', 12, 2);
            $table->float('laba_rugi', 12, 2);
            $table->float('neraca', 12, 2);
            $table->float('aset', 12, 2);
            $table->float('kewajiban', 12, 2);
            $table->float('ekuitas', 12, 2);
            $table->float('pendapatan', 12, 2);
            $table->float('beban', 12, 2);
            $table->float('pendapatan_bersih', 12, 2);
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
        Schema::dropIfExists('saldo_akhir');
    }
};
