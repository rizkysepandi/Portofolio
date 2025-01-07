<?php

namespace App\Http\Controllers;

use App\Models\NamaAkun;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\DataPenjualan;

class JurnalPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bumdes.dashboard.jurnal_khusus.penjualan.index',[
            'datas' => auth()->user()->company->penjualans,
            'nama_akuns' => NamaAkun::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bumdes.dashboard.jurnal_khusus.penjualan.create',[
            'title' => 'Tambah Data',
            'method' => 'POST',
            'action' => 'penjualan',
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
        $data = new DataPenjualan;
        $data->tanggal = Carbon::parse($request->tanggal);
        $data->no_faktur = $request->no_faktur;
        $data->keterangan = $request->keterangan;
        $data->noref = $request->noref;
        $data->syarat_pembayaran = $request->syarat_pembayaran;
        $data->piutang_dagang = $request->piutang_dagang;
        $data->penjualan = $request->penjualan;
        $data->company_id = auth()->user()->company->id;
        $data->save();
        return redirect('/penjualan');
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
        return view('bumdes.dashboard.jurnal_khusus.penjualan.update',[
            'title' => 'Edit Data',
            'method' => 'PUT',
            'action' => 'penjualan/'.$id,
            'nama_akuns' => NamaAkun::all(),
            'data' => DataPenjualan::find($id),
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
        $data = DataPenjualan::find($id);
        $data->tanggal = $request->tanggal;
        $data->no_faktur = $request->no_faktur;
        $data->keterangan = $request->keterangan;
        $data->noref = $request->noref;
        $data->syarat_pembayaran = $request->syarat_pembayaran;
        $data->piutang_dagang = $request->piutang_dagang;
        $data->penjualan = $request->penjualan;
        $data->save();
        return redirect('/penjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DataPenjualan::find($id);
        $data->delete();
        return redirect('/penjualan')->with('msg', 'sukses');
    }
}
