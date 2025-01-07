<?php

namespace App\Http\Controllers;

use App\Models\NamaAkun;
use Illuminate\Http\Request;
use PDF;

class LaporanPosisiKeuanganController extends Controller
{
    public function index()
    {
        $data = $this->get_data_laporan_posisi_keuangan();

        $pdf = PDF::loadView('pdf.posisi_keuangan', $data);

        return $pdf->download('laporan-posisi-keuangan.pdf');
    }

    public function preview()
    {
        $data = $this->get_data_laporan_posisi_keuangan();

        return view('pdf.posisi_keuangan', $data);
    }

    private function get_data_laporan_posisi_keuangan()
    {

        $akuns_aset_lancar = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', auth()->user()->company->id)
            ->where('saldo', '!=', 0)
            ->whereBetween('detail_akun.kode_rekening', [1100, 1199])
            ->get();

        $akuns_investasi = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', auth()->user()->company->id)
            ->where('saldo', '!=', 0)
            ->whereBetween('detail_akun.kode_rekening', [1200, 1299])
            ->get();

        $akuns_aset_tetap = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', auth()->user()->company->id)
            ->where('saldo', '!=', 0)
            ->whereBetween('detail_akun.kode_rekening', [1300, 1399])
            ->get();

        $akuns_kewajiban = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', auth()->user()->company->id)
            ->where('saldo', '!=', 0)
            ->whereBetween('detail_akun.kode_rekening', [2100, 2199])
            ->get();

        $akuns_equitas = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', auth()->user()->company->id)
            ->where('saldo', '!=', 0)
            ->whereBetween('detail_akun.kode_rekening', [3000, 3299])
            ->get();

        $saldo_akhir = auth()->user()->company->saldoakhir;
        $cadangan = $saldo_akhir->pendapatan_bersih;

        $total_equitas = array_sum($akuns_equitas->pluck('saldo')->toArray());
        $total_kewajiban = array_sum($akuns_kewajiban->pluck('saldo')->toArray());
        $total_aset_lancar = array_sum($akuns_aset_lancar->pluck('saldo')->toArray());
        $total_investasi = array_sum($akuns_investasi->pluck('saldo')->toArray());
        $total_aset_tetap = array_sum($akuns_aset_tetap->pluck('saldo')->toArray());
        $total_aset = $total_aset_lancar + $total_investasi + $total_aset_tetap;

        $data = [
            'akuns_aset_lancar' => $akuns_aset_lancar,
            'akuns_investasi' => $akuns_investasi,
            'akuns_aset_tetap' => $akuns_aset_tetap,
            'akuns_kewajiban' => $akuns_kewajiban,
            'akuns_equitas' => $akuns_equitas,
            'cadangan' => $cadangan,
            'total_aset' => $total_aset,
            'total_aset_lancar' => $total_aset_lancar,
            'total_investasi' => $total_investasi,
            'total_aset_tetap' => $total_aset_tetap,
            'total_equitas' => $total_equitas,
            'total_kewajiban' => $total_kewajiban,
            'total_equitas_kewajiban_cadangan' => $total_equitas + $total_kewajiban + $cadangan
        ];

//        dd($data);

        return $data;
    }
}
