<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurnalUmum extends Model
{
    use HasFactory;
    public $table = "jurnal_umum";

    protected $fillable = [
        'tanggal',
        'bukti_pembayaran',
        'user_id',
    ];
    protected $casts = [
        'tanggal' => 'datetime',
    ];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function datas()
    {
        return $this->hasMany(DataJurnalUmum::class);
    }
    public function dataTests()
    {
        return $this->hasMany(DataTest::class);
    }
}
