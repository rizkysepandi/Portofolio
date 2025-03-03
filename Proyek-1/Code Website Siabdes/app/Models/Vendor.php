<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    public $table = "vendor";
    protected $fillable = [
        'kode',
        'nama_perusahaan',
        'nama_pic',
        'alamat',
        'telp',
    ];
    public function company(){
        return $this->belongsTo(Company::class);
    }
}
