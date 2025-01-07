<?php

namespace App\Http\Controllers;

use App\Models\BukuBesar;
use App\Models\DataJurnalUmum;
use App\Models\NamaAkun;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\JurnalUmum;
use Illuminate\Support\Facades\Storage;
class JurnalUmumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bumdes.dashboard.jurnal_umum.index',[
            'jurnals' => auth()->user()->company->jurnalumums,
        ]);
    }
    public function downloadImage($id)
    {
        $data = JurnalUmum::find($id);
        $foto = $data->bukti_pembayaran;
        return Storage::download($foto);
    }
    public function createNew(Request $request)
    {
        $request->validate([
            'bukti_pembayaran' => 'required|file|max:1024',
        ]);
        $jurnal_umum = new JurnalUmum;
        $jurnal_umum->tanggal = Carbon::parse($request->tanggal);
        $jurnal_umum->bukti_pembayaran = $request->file('bukti_pembayaran')->store('jurnal_umum');
        $jurnal_umum->jenis_transaksi = $request->jenis_transaksi;
        $jurnal_umum->company_id = auth()->user()->company->id;
        $jurnal_umum->save();
        session(['jurnal_umum_id' => $jurnal_umum->id]);
        return redirect('/jurnal_umum/create');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createv2()
    {
        return view('bumdes.dashboard.jurnal_umum.createv2',[
            'title' => 'Tambah Data',
            'nama_akuns' => auth()->user()->company->namaakun,
        ]);
    }

    public function storeTestArray(Request $request)
    {

        $datas = $request->input('nama_akun');
        $debit = $request->input('debit');
        $kredit = $request->input('kredit');

        foreach ($datas as $key => $value) {
            $data = new DataTest();
            $data->nama_akun = $value;
            $data->debit = $debit[$key];
            $data->kredit = $kredit[$key];

            $data->save();
        }

        // return redirect()->route('mahasiswa.index');
        return redirect('/jurnal_umum')->with('msg', 'sukses');
    }



    public function create()
    {
        return view('bumdes.dashboard.jurnal_umum.create',[
            'title' => 'Tambah Data',
            'method' => 'POST',
            'action' => 'jurnal_umum',
            'i' => 0,
            'jurnal' => JurnalUmum::find(session('jurnal_umum_id')),
            'nama_akuns' => auth()->user()->company->namaakun,
            
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $akuns = auth()->user()->company->namaakun;
        $data = new DataJurnalUmum;
        $data->nama_akun = $request->nama_akun;
        $saldo_akhir = auth()->user()->company->saldoakhir;
        
        foreach ($akuns as $akun){
            if($data->nama_akun == $akun->nama){
                $data->noref = $akun->detailakun->kode_rekening;
                if($akun->detailakun->kode_rekening[0] == '1'){//aset
                    $saldo_akhir->aset += $request->debit - $request->kredit;
                    $akun->detailakun->saldo += $request->debit - $request->kredit;
                }elseif($akun->detailakun->kode_rekening[0] == '2'){//kewajiban
                    $saldo_akhir->kewajiban += $request->kredit - $request->debit;
                    $akun->detailakun->saldo += $request->kredit - $request->debit;
                }elseif($akun->detailakun->kode_rekening[0] == '3'){//ekuitas
                    $saldo_akhir->ekuitas += $request->kredit - $request->debit;
                    $akun->detailakun->saldo += $request->kredit - $request->debit;
                }elseif(($akun->detailakun->kode_rekening[0] == '4') || ($akun->detailakun->kode_rekening[0] == '7' && $akun->detailakun->kode_rekening[1] == '1')){//pendapatan
                    $saldo_akhir->pendapatan += $request->kredit - $request->debit;
                    $akun->detailakun->saldo += $request->kredit - $request->debit;
                }elseif($akun->detailakun->kode_rekening[0] == '6' || ($akun->detailakun->kode_rekening[0] == '7' && $akun->detailakun->kode_rekening[1] == '2')){//beban
                    $saldo_akhir->beban += $request->debit - $request->kredit;
                    $akun->detailakun->saldo += $request->debit - $request->kredit;
                }
                $saldo_akhir->akun = $saldo_akhir->aset + $saldo_akhir->kewajiban + $saldo_akhir->ekuitas + $saldo_akhir->pendapatan + $saldo_akhir->beban;
                $saldo_akhir->neraca_setelahnya = $saldo_akhir->akun + $saldo_akhir->penyesuaian;
                $saldo_akhir->laba_rugi = $saldo_akhir->pendapatan + $saldo_akhir->beban;
                $saldo_akhir->neraca = $saldo_akhir->aset + $saldo_akhir->kewajiban + $saldo_akhir->ekuitas;
                $saldo_akhir->pendapatan_bersih = $saldo_akhir->pendapatan - $saldo_akhir->beban;
                $saldo_akhir->save();
                $akun->detailakun->save();
            }
        }
        
        $data->debit = $request->debit;
        $data->kredit = $request->kredit;
        $data->jurnal_umum_id = session('jurnal_umum_id');

        $data->save();

        

        return redirect('/jurnal_umum/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('bumdes.dashboard.jurnal_umum.update',[
            'title' => 'Edit Data',
            'method' => 'PUT',
            'action' => 'jurnal_umum/'.$id,
            'nama_akuns' => auth()->user()->company->namaakun,
            'data' => DataJurnalUmum::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $akuns = auth()->user()->company->namaakun;
        $saldo_akhir = auth()->user()->company->saldoakhir;
        $data = DataJurnalUmum::find($id);
        $i = 0;
        
        if($request->nama_akun == $data->nama_akun){
            foreach ($akuns as $akun){
                if($data->nama_akun == $akun->nama){
                    if($akun->detailakun->kode_rekening[0] == '1'){//aset
                        $saldo_akhir->aset -= $data->debit - $data->kredit;
                        $saldo_akhir->aset += $request->debit - $request->kredit;
                        $akun->detailakun->saldo -= $data->debit - $data->kredit;
                        $akun->detailakun->saldo += $request->debit - $request->kredit;
                    }elseif($akun->detailakun->kode_rekening[0] == '2'){//kewajiban
                        $saldo_akhir->kewajiban -= $data->kredit - $data->debit;
                        $saldo_akhir->kewajiban += $request->kredit - $request->debit;
                        $akun->detailakun->saldo -= $data->kredit - $data->debit;
                        $akun->detailakun->saldo += $request->kredit - $request->debit;
                    }elseif($akun->detailakun->kode_rekening[0] == '3'){//ekuitas
                        $saldo_akhir->ekuitas -= $data->kredit - $data->debit;
                        $saldo_akhir->ekuitas += $request->kredit - $request->debit;
                        $akun->detailakun->saldo -= $data->kredit - $data->debit;
                        $akun->detailakun->saldo += $request->kredit - $request->debit;
                    }elseif(($akun->detailakun->kode_rekening[0] == '4') || ($akun->detailakun->kode_rekening[0] == '7' && $akun->detailakun->kode_rekening[1] == '1')){//pendapatan
                        $saldo_akhir->pendapatan -= $data->kredit - $data->debit;
                        $saldo_akhir->pendapatan += $request->kredit - $request->debit;
                        $akun->detailakun->saldo -= $data->kredit - $data->debit;
                        $akun->detailakun->saldo += $request->kredit - $request->debit;
                    }elseif($akun->detailakun->kode_rekening[0] == '6' || ($akun->detailakun->kode_rekening[0] == '7' && $akun->detailakun->kode_rekening[1] == '2')){//beban
                        $saldo_akhir->beban -= $data->debit - $data->kredit;
                        $saldo_akhir->beban += $request->debit - $request->kredit;
                    }
                    $saldo_akhir->akun = $saldo_akhir->aset + $saldo_akhir->kewajiban + $saldo_akhir->ekuitas + $saldo_akhir->pendapatan + $saldo_akhir->beban;
                    $saldo_akhir->neraca_setelahnya = $saldo_akhir->akun + $saldo_akhir->penyesuaian;
                    $saldo_akhir->laba_rugi = $saldo_akhir->pendapatan + $saldo_akhir->beban;
                    $saldo_akhir->neraca = $saldo_akhir->aset + $saldo_akhir->kewajiban + $saldo_akhir->ekuitas;
                    $saldo_akhir->pendapatan_bersih = $saldo_akhir->pendapatan - $saldo_akhir->beban;
                    $saldo_akhir->save();
                    $akun->detailakun->save();
                }
            }
        }else{
            foreach ($akuns as $akun){
                if($data->nama_akun == $akun->nama){
                    if($akun->detailakun->kode_rekening[0] == '1'){//aset
                        $saldo_akhir->aset -= $data->debit - $data->kredit;
                        $akun->detailakun->saldo -= $data->debit - $data->kredit;
                    }elseif($akun->detailakun->kode_rekening[0] == '2'){//kewajiban
                        $saldo_akhir->kewajiban -= $data->kredit - $data->debit;
                        $akun->detailakun->saldo -= $data->kredit - $data->debit;
                    }elseif($akun->detailakun->kode_rekening[0] == '3'){//ekuitas
                        $saldo_akhir->ekuitas -= $data->kredit - $data->debit;
                        $akun->detailakun->saldo -= $data->kredit - $data->debit;
                    }elseif(($akun->detailakun->kode_rekening[0] == '4') || ($akun->detailakun->kode_rekening[0] == '7' && $akun->detailakun->kode_rekening[1] == '1')){//pendapatan
                        $saldo_akhir->pendapatan -= $data->kredit - $data->debit;
                        $akun->detailakun->saldo -= $data->kredit - $data->debit;
                    }elseif($akun->detailakun->kode_rekening[0] == '6' || ($akun->detailakun->kode_rekening[0] == '7' && $akun->detailakun->kode_rekening[1] == '2')){//beban
                        $saldo_akhir->beban -= $data->debit - $data->kredit;
                        $akun->detailakun->saldo -= $data->debit - $data->kredit;
                    }
                    $saldo_akhir->akun = $saldo_akhir->aset + $saldo_akhir->kewajiban + $saldo_akhir->ekuitas + $saldo_akhir->pendapatan + $saldo_akhir->beban;
                    $saldo_akhir->neraca_setelahnya = $saldo_akhir->akun + $saldo_akhir->penyesuaian;
                    $saldo_akhir->laba_rugi = $saldo_akhir->pendapatan + $saldo_akhir->beban;
                    $saldo_akhir->neraca = $saldo_akhir->aset + $saldo_akhir->kewajiban + $saldo_akhir->ekuitas;
                    $saldo_akhir->pendapatan_bersih = $saldo_akhir->pendapatan - $saldo_akhir->beban;
                    $saldo_akhir->save();
                    $akun->detailakun->save();
                }
            }
            foreach ($akuns as $akun){
                if($request->nama_akun == $akun->nama){
                    if($akun->detailakun->kode_rekening[0] == '1'){//aset
                        $saldo_akhir->aset += $request->debit - $request->kredit;
                        $akun->detailakun->saldo += $request->debit - $request->kredit;
                    }elseif($akun->detailakun->kode_rekening[0] == '2'){//kewajiban
                        $saldo_akhir->kewajiban += $request->kredit - $request->debit;
                        $akun->detailakun->saldo += $request->kredit - $request->debit;
                    }elseif($akun->detailakun->kode_rekening[0] == '3'){//ekuitas
                        $saldo_akhir->ekuitas += $request->kredit - $request->debit;
                        $akun->detailakun->saldo += $request->kredit - $request->debit;
                    }elseif(($akun->detailakun->kode_rekening[0] == '4') || ($akun->detailakun->kode_rekening[0] == '7' && $akun->detailakun->kode_rekening[1] == '1')){//pendapatan
                        $saldo_akhir->pendapatan += $request->kredit - $request->debit;
                        $akun->detailakun->saldo += $request->kredit - $request->debit;
                    }elseif($akun->detailakun->kode_rekening[0] == '6' || ($akun->detailakun->kode_rekening[0] == '7' && $akun->detailakun->kode_rekening[1] == '2')){//beban
                        $saldo_akhir->beban += $request->debit - $request->kredit;
                        $akun->detailakun->saldo += $request->debit - $request->kredit;
                    }
                    $saldo_akhir->akun = $saldo_akhir->aset + $saldo_akhir->kewajiban + $saldo_akhir->ekuitas + $saldo_akhir->pendapatan + $saldo_akhir->beban;
                    $saldo_akhir->neraca_setelahnya = $saldo_akhir->akun + $saldo_akhir->penyesuaian;
                    $saldo_akhir->laba_rugi = $saldo_akhir->pendapatan + $saldo_akhir->beban;
                    $saldo_akhir->neraca = $saldo_akhir->aset + $saldo_akhir->kewajiban + $saldo_akhir->ekuitas;
                    $saldo_akhir->pendapatan_bersih = $saldo_akhir->pendapatan - $saldo_akhir->beban;
                    $saldo_akhir->save();
                    $akun->detailakun->save();
                }
            }
        }
        $data->nama_akun = $request->nama_akun;
        $data->debit = $request->debit;
        $data->kredit = $request->kredit;
        $data->save();
        
        return redirect('/jurnal_umum');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurnal = JurnalUmum::find($id);
        $akuns = auth()->user()->company->namaakun;
        $saldo_akhir = auth()->user()->company->saldoakhir;
        foreach($jurnal->datas as $data)
        {
            foreach ($akuns as $akun) {
                if ($akun->nama == $data->nama_akun) {
                    if($akun->detailakun->kode_rekening[0] == '1'){//aset
                        $saldo_akhir->aset -= $data->debit - $data->kredit;
                    }elseif($akun->detailakun->kode_rekening[0] == '2'){//kewajiban
                        $saldo_akhir->kewajiban -= $data->debit - $data->kredit;
                    }elseif($akun->detailakun->kode_rekening[0] == '3'){//ekuitas
                        $saldo_akhir->ekuitas -= $data->debit - $data->kredit;
                    }elseif(($akun->detailakun->kode_rekening[0] == '4') || ($akun->detailakun->kode_rekening[0] == '7' && $akun->detailakun->kode_rekening[1] == '1')){//pendapatan
                        $saldo_akhir->pendapatan -= $data->debit - $data->kredit;
                    }elseif($akun->detailakun->kode_rekening[0] == '6' || ($akun->detailakun->kode_rekening[0] == '7' && $akun->detailakun->kode_rekening[1] == '2')){//beban
                        $saldo_akhir->beban -= $data->debit - $data->kredit;
                    }
                    $saldo_akhir->akun = $saldo_akhir->aset + $saldo_akhir->kewajiban + $saldo_akhir->ekuitas + $saldo_akhir->pendapatan + $saldo_akhir->beban;
                    $saldo_akhir->neraca_setelahnya = $saldo_akhir->akun + $saldo_akhir->penyesuaian;
                    $saldo_akhir->laba_rugi = $saldo_akhir->pendapatan + $saldo_akhir->beban;
                    $saldo_akhir->neraca = $saldo_akhir->aset + $saldo_akhir->kewajiban + $saldo_akhir->ekuitas;
                    $saldo_akhir->pendapatan_bersih = $saldo_akhir->pendapatan - $saldo_akhir->beban;
                    $saldo_akhir->save();
                    $akun->detailakun->saldo -= $data->debit - $data->kredit;
                    $akun->detailakun->save();
                }
            }
            $data->delete();
        }
        Storage::delete($jurnal->bukti_pembayaran);
        $jurnal->delete();
        return redirect('/jurnal_umum')->with('msg', 'sukses');
    }
}
