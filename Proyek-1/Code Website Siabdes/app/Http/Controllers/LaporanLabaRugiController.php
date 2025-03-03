<?php

namespace App\Http\Controllers;

use App\Models\NamaAkun;
use PDF;

class LaporanLabaRugiController extends Controller
{
    //
    public function index()
    {
        $data = $this->get_data_laporan_laba_rugi();

        $pdf = PDF::loadView('pdf.laba_rugi', $data);

        return $pdf->download('laporan-laba-rugi.pdf');
    }

    public function preview()
    {
        $data = $this->get_data_laporan_laba_rugi();

        return view('pdf.laba_rugi', $data);
    }

    /**
     * @return array
     */
    private function get_data_laporan_laba_rugi(): array
    {
        $company_id = auth()->user()->company->id;

        $saldo_akhir = auth()->user()->company->saldoakhir;

        $akuns_pendapatan = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', $company_id)
            ->whereBetween('detail_akun.kode_rekening', [7000, 7199])
            ->where('saldo', '!=', 0)
            ->get();

        $akuns_pendapatan_lain = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', $company_id)
            ->whereBetween('detail_akun.kode_rekening', [4000, 4999])
            ->where('saldo', '!=', 0)
            ->get();

        $akuns_beban = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', $company_id)
            ->whereBetween('detail_akun.kode_rekening', [6000, 6999])
            ->where('saldo', '!=', 0)
            ->get();

        $akuns_beban_lain = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', $company_id)
            ->whereBetween('detail_akun.kode_rekening', [7200, 7299])
            ->where('saldo', '!=', 0)
            ->get();

        $total = [
            'pendapatan' => array_sum($akuns_pendapatan->pluck('saldo')->toArray()),
            'pendapatan_lain' => array_sum($akuns_pendapatan_lain->pluck('saldo')->toArray()),
            'beban' => array_sum($akuns_beban->pluck('saldo')->toArray()),
            'beban_lain' => array_sum($akuns_beban_lain->pluck('saldo')->toArray()),
        ];

        $pendapatan_bersih = ($total['pendapatan'] - $total['beban']) + ($total['pendapatan_lain'] - $total['beban_lain']);

        return [
            'pendapatan' => formatRupiah($total['pendapatan']),
            'pendapatan_lain' => formatRupiah($total['pendapatan_lain']),
            'beban' => formatRupiah($total['beban']),
            'beban_lain' => formatRupiah($total['beban_lain']),
            'pendapatan_bersih' => formatRupiah($pendapatan_bersih),
            'akuns_pendapatan' => $akuns_pendapatan,
            'akuns_pendapatan_lain' => $akuns_pendapatan_lain,
            'akuns_beban' => $akuns_beban,
            'akuns_beban_lain' => $akuns_beban_lain,
        ];
    }
}
