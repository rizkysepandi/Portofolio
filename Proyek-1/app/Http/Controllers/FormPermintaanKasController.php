<?php

namespace App\Http\Controllers;

use App\Models\FormPermintaanKas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormPermintaanKasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bumdes.dashboard.invoice.form_permintaan_kas.index',[
            'datas' => auth()->user()->company->formpermintaankas,
        ]);
    }
    public function downloadImage($id)
    {
        $data = FormPermintaanKas::find($id);
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
        return view('bumdes.dashboard.invoice.form_permintaan_kas.editcreate',[
            'title' => 'Tambah',
            'method' => 'POST',
            'action' => 'form_permintaan_kas/create',
            
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
        
        
        $data = new FormPermintaanKas;
        $data->tanggal = Carbon::parse($request->tanggal);
        $data->dana_untuk_departemen = $request->dana_untuk_departemen;
        $data->dana_awal = $request->dana_awal;
        $data->saldo = $request->saldo;
        $data->keterangan = $request->keterangan;
        $data->total = $request->total;
        $data->bukti_transaksi = $request->file('bukti_transaksi')->store('form_permintaan_kas');
        $data->company_id = auth()->user()->company->id;
        $data->save();
        return redirect('/form_permintaan_kas');
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
        return view('bumdes.dashboard.invoice.form_permintaan_kas.editcreate', [
            'title' => 'Ubah ',
            'method' => 'PUT',
            'action' => 'form_permintaan_kas/'.$id.'/update',
            'data' => FormPermintaanKas::find($id),
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
        $data = FormPermintaanKas::find($id);
        $data->tanggal = Carbon::parse($request->tanggal);
        $data->dana_untuk_departemen = $request->dana_untuk_departemen;
        $data->dana_awal = $request->dana_awal;
        $data->saldo = $request->saldo;
        $data->keterangan = $request->keterangan;
        $data->total = $request->total;
        if ($request->file('bukti_transaksi')) {
            Storage::delete($data->bukti_transaksi);
            $data->bukti_transaksi = $request->file('bukti_transaksi')->store('form_permintaan_kas');
        }
        $data->save();
        return redirect('/form_permintaan_kas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = FormPermintaanKas::find($id);
        Storage::delete($data->bukti_transaksi);
        $data->delete();
        return redirect('/form_permintaan_kas')->with('msg', 'sukses');
    }
}
