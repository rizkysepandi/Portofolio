<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function jurnalumums()
    {
        return $this->hasMany(JurnalUmum::class);
    }
    public function pemasukankas()
    {
        return $this->hasMany(PemasukanKas::class);
    }
    public function pengeluarankas()
    {
        return $this->hasMany(PengeluaranKas::class);
    }
    public function pembelians()
    {
        return $this->hasMany(DataPembelian::class);
    }
    public function penjualans()
    {
        return $this->hasMany(DataPenjualan::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function namaakun()
    {
        return $this->hasMany(NamaAkun::class);
    }
    public function saldoakhir()
    {
        return $this->hasOne(SaldoAkhir::class);
    }
    
    public function formpermintaankas()
    {
        return $this->hasMany(FormPermintaanKas::class);
    }
    public function formpurchaseorder()
    {
        return $this->hasMany(FormPurchaseOrder::class);
    }
    public function formpengirimanbarang()
    {
        return $this->hasMany(FormPengirimanBarang::class);
    }
    public function invoicepenjualankredit()
    {
        return $this->hasMany(InvoicePenjualanKredit::class);
    }
    public function invoicepenjualantunai()
    {
        return $this->hasMany(InvoicePenjualanTunai::class);
    }
    public function barangs()
    {
        return $this->hasMany(Barang::class);
    }
    public function vendors()
    {
        return $this->hasMany(Vendor::class);
    }
}
