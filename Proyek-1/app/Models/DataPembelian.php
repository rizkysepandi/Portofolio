<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPembelian extends Model
{
    use HasFactory;
    use HasFormatRupiah;
    public $table = "data_pembelian";

    protected $fillable = [
        'tanggal',
        'keterangan',
        'noref',
        'pembelian',
        'akun',
        'jumlah',
        'utang_dagang',
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
