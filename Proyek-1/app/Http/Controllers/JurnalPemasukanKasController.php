<?php

namespace App\Http\Controllers;

use App\Models\DataPemasukanKas;
use App\Models\PemasukanKas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\NamaAkun;

class JurnalPemasukanKasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bumdes.dashboard.jurnal_khusus.pemasukan_kas.index',[
            'jurnals' => auth()->user()->company->pemasukankas,
        ]);
    }
    public function createNew(Request $request)
    {
        $data = new PemasukanKas;
        $data->tanggal = Carbon::parse($request->tanggal);
        $data->company_id = auth()->user()->company->id;
        $data->save();
        session(['pemasukan_kas_id' => $data->id]);
        return redirect('/pemasukan_kas/create');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bumdes.dashboard.jurnal_khusus.pemasukan_kas.create',[
            'title' => 'Tambah Data',
            'method' => 'POST',
            'action' => 'pemasukan_kas',
            'nama_akuns' => auth()->user()->company->namaakun,
            'jurnal' => PemasukanKas::find(session('pemasukan_kas_id')),
            'i' => 0,
            
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
        $data = new DataPemasukanKas;
        $data->nama_akun = $request->nama_akun;
        
        foreach ($akuns as $akun){
            if($data->nama_akun == $akun->nama){
                $data->noref = $akun->detailakun->kode_rekening;
            }
        }
        
        $data->debit = $request->debit;
        $data->kredit = $request->kredit;
        $data->pemasukan_kas_id = session('pemasukan_kas_id');
        $data->save();
        return redirect('/pemasukan_kas/create');
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
        return view('bumdes.dashboard.jurnal_khusus.pemasukan_kas.update',[
            'title' => 'Edit Data',
            'method' => 'PUT',
            'action' => 'pemasukan_kas/'.$id,
            'nama_akuns' => auth()->user()->company->namaakun,
            'data' => DataPemasukanKas::find($id),
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
        $data = DataPemasukanKas::find($id);
        $data->nama_akun = $request->nama_akun;
        
        foreach ($akuns as $akun){
            if($data->nama_akun == $akun->nama){
                $data->noref = $akun->detailakun->kode_rekening;
            }
        }
        
        $data->debit = $request->debit;
        $data->kredit = $request->kredit;
        $data->save();
        return redirect('/pemasukan_kas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurnal = PemasukanKas::find($id);
        foreach($jurnal->datas as $data)
        {
            $data->delete();
        }
        $jurnal->delete();
        return redirect('/pemasukan_kas')->with('msg', 'sukses');
    }
}
