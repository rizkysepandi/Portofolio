<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormPermintaanKas extends Model
{
    use HasFactory;
    use HasFormatRupiah;
    public $table = "form_permintaan_kas";
    protected $fillable = [
        'tanggal',
        'dana_untuk_departemen',
        'dana_awal',
        'saldo',
        'keterangan',
        'total',
        'bukti_transaksi',
    ];
    protected $casts = [
        'tanggal' => 'datetime',
    ];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
