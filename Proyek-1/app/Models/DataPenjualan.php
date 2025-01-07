<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPenjualan extends Model
{
    use HasFactory;
    use HasFormatRupiah;
    public $table = "data_penjualan";

    protected $fillable = [
        'tanggal',
        'no_faktur',
        'keterangan',
        'noref',
        'syarat_pembayaran',
        'piutang_dagang',
        'penjualan',
        'user_id',
    ];
    protected $casts = [
        'tanggal' => 'datetime',
    ];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
