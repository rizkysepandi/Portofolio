<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormPurchaseOrder extends Model
{
    use HasFactory;
    public $table = "form_purchase_order";
    protected $fillable = [
        'tanggal',
        'no_po',
        'barang',
        'jumlah_barang',
        'vendor',
        'tanggal_pengiriman',
        'bukti_transaksi',
    ];
    protected $casts = [
        'tanggal' => 'datetime',
        'tanggal_pengiriman' => 'datetime',
    ];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
