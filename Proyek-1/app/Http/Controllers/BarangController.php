<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bumdes.dashboard.data_master.barang.index',[
            'datas' => auth()->user()->company->barangs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bumdes.dashboard.data_master.barang.editcreate',[
            'title' => 'Tambah',
            'method' => 'POST',
            'action' => 'barang/create',
            
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
        $data = new Barang;
        $data->tanggal = Carbon::parse($request->tanggal);
        $data->kode_barang = $request->kode_barang;
        $data->nama_barang = $request->nama_barang;
        $data->satuan = $request->satuan;
        $data->stok_awal = $request->stok_awal;
        $data->harga_jual = $request->harga_jual;
        $data->harga_beli = $request->harga_beli;
        if (!isset($request->jumlah_barang_masuk)) {
            $data->jumlah_barang_masuk = 0;
        } else {
            $data->jumlah_barang_masuk = $request->jumlah_barang_masuk;
        }
        if (!isset($request->jumlah_barang_keluar)) {
            $data->jumlah_barang_keluar = 0;
        } else {
            $data->jumlah_barang_keluar = $request->jumlah_barang_keluar;
        }
        $data->stok_akhir = $request->stok_akhir;
        $data->company_id = auth()->user()->company->id;
        $data->save();
        return redirect('/barang');
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
        return view('bumdes.dashboard.data_master.barang.editcreate', [
            'title' => 'Ubah ',
            'method' => 'PUT',
            'action' => 'barang/'.$id.'/update',
            'data' => Barang::find($id),
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
        $data = Barang::find($id);
        $data->tanggal = Carbon::parse($request->tanggal);
        $data->kode_barang = $request->kode_barang;
        $data->nama_barang = $request->nama_barang;
        $data->satuan = $request->satuan;
        $data->stok_awal = $request->stok_awal;
        $data->harga_jual = $request->harga_jual;
        $data->harga_beli = $request->harga_beli;
        $data->jumlah_barang_masuk = $request->jumlah_barang_masuk;
        $data->jumlah_barang_keluar = $request->jumlah_barang_keluar;
        $data->stok_akhir = $request->stok_akhir;
        $data->save();
        return redirect('/barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Barang::find($id);
        $data->delete();
        return redirect('/barang')->with('msg', 'sukses');
    }
}
