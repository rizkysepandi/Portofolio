<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataJurnalUmum extends Model
{
    use HasFactory;
    use HasFormatRupiah;
    public $table = "data_jurnal_umum";

    protected $fillable = [
        'nama_akun',
        'noref',
        'debit',
        'kredit',
        'jurnal_umum_id',
    ];

    public function jurnalumum()
    {
        return $this->belongsTo(JurnalUmum::class);
    }
}
