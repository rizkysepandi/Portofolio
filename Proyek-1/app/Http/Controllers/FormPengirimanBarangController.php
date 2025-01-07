<?php

namespace App\Http\Controllers;

use App\Models\FormPengirimanBarang;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormPengirimanBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bumdes.dashboard.invoice.form_pengiriman_barang.index',[
            'datas' => auth()->user()->company->formpengirimanbarang,
        ]);
    }
    public function downloadImage($id)
    {
        $data = FormPengirimanBarang::find($id);
        $foto = $data->bukti_transaksi;
        return Storage::download($foto);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bumdes.dashboard.invoice.form_pengiriman_barang.editcreate',[
            'title' => 'Tambah',
            'method' => 'POST',
            'action' => 'form_pengiriman_barang/create',
            
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
        $request->validate([
            'bukti_transaksi' => 'required|file|max:1024',
        ]);
        $data = new FormPengirimanBarang;
        $data->tanggal = Carbon::parse($request->tanggal);
        $data->nama_penerima = $request->nama_penerima;
        $data->alamat_penerima = $request->alamat_penerima;
        $data->telp_penerima = $request->telp_penerima;
        $data->nama_pengirim = $request->nama_pengirim;
        $data->alamat_pengirim = $request->alamat_pengirim;
        $data->bukti_transaksi = $request->file('bukti_transaksi')->store('form_pengiriman_barang');
        $data->company_id = auth()->user()->company->id;
        $data->save();
        return redirect('/form_pengiriman_barang');
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
        return view('bumdes.dashboard.invoice.form_pengiriman_barang.editcreate', [
            'title' => 'Ubah ',
            'method' => 'PUT',
            'action' => 'form_pengiriman_barang/'.$id.'/update',
            'data' => FormPengirimanBarang::find($id),
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
        $data = FormPengirimanBarang::find($id);
        $data->tanggal = Carbon::parse($request->tanggal);
        $data->nama_penerima = $request->nama_penerima;
        $data->alamat_penerima = $request->alamat_penerima;
        $data->telp_penerima = $request->telp_penerima;
        $data->nama_pengirim = $request->nama_pengirim;
        $data->alamat_pengirim = $request->alamat_pengirim;
        if ($request->file('bukti_transaksi')) {
            Storage::delete($data->bukti_transaksi);
            $data->bukti_transaksi = $request->file('bukti_transaksi')->store('form_pengiriman_barang');
        }
        $data->save();
        return redirect('/form_pengiriman_barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = FormPengirimanBarang::find($id);
        Storage::delete($data->bukti_transaksi);
        $data->delete();
        return redirect('/form_pengiriman_barang')->with('msg', 'sukses');
    }
}
