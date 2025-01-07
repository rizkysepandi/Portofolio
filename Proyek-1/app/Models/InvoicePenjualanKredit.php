<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoicePenjualanKredit extends Model
{
    use HasFactory;
    public $table = "invoice_penjualan_kredit";
    protected $fillable = [
        'tanggal',
        'no_invoice',
        'nama',
        'alamat',
        'telp',
        'tanggal_jatuh_tempo',
        'barang',
        'jumlah_barang',
        'bukti_transaksi',
    ];
    protected $casts = [
        'tanggal' => 'datetime',
        'tanggal_jatuh_tempo' => 'datetime',
    ];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
