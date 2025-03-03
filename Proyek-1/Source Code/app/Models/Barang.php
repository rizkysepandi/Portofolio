<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    public $table = "barang";
    protected $fillable = [
        'tanggal',
        'kode_barang',
        'nama_barang',
        'satuan',
        'stok_awal',
        'harga_jual',
        'harga_beli',
        'jumlah_barang_masuk',
        'jumlah_barang_keluar',
        'stok_akhir',
    ];
    protected $casts = [
        'tanggal' => 'datetime',
    ];
    public function company(){
        return $this->belongsTo(Company::class);
    }
}
