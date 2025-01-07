<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormPengirimanBarang extends Model
{
    use HasFactory;
    public $table = "form_pengiriman_barang";
    protected $fillable = [
        'tanggal',
        'nama_penerima',
        'alamat_penerima',
        'telp_penerima',
        'nama_pengirim',
        'alamat_pengirim',
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
