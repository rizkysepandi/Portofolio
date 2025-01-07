<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoicePenjualanTunai extends Model
{
    use HasFactory;
    public $table = "invoice_penjualan_tunai";
    protected $fillable = [
        'tanggal',
        'no_invoice',
        'nama',
        'telp',
        'barang',
        'jumlah_barang',
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
