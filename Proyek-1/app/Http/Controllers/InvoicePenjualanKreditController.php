<?php

namespace App\Http\Controllers;

use App\Models\InvoicePenjualanKredit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InvoicePenjualanKreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bumdes.dashboard.invoice.invoice_penjualan_kredit.index',[
            'datas' => auth()->user()->company->invoicepenjualankredit,
        ]);
    }
    public function downloadImage($id)
    {
        $data = InvoicePenjualanKredit::find($id);
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
        return view('bumdes.dashboard.invoice.invoice_penjualan_kredit.editcreate',[
            'title' => 'Tambah',
            'method' => 'POST',
            'action' => 'invoice_penjualan_kredit/create',
            
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
        $data = new InvoicePenjualanKredit;
        $data->tanggal = Carbon::parse($request->tanggal);
        $data->no_invoice = $request->no_invoice;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->telp = $request->telp;
        $data->tanggal_jatuh_tempo = Carbon::parse($request->tanggal_jatuh_tempo);
        $data->barang = $request->barang;
        $data->jumlah_barang = $request->jumlah_barang;
        $data->bukti_transaksi = $request->file('bukti_transaksi')->store('invoice_penjualan_kredit');
        $data->company_id = auth()->user()->company->id;
        $data->save();
        return redirect('/invoice_penjualan_kredit');
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
        return view('bumdes.dashboard.invoice.invoice_penjualan_kredit.editcreate', [
            'title' => 'Ubah ',
            'method' => 'PUT',
            'action' => 'invoice_penjualan_kredit/'.$id.'/update',
            'data' => InvoicePenjualanKredit::find($id),
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
        $data = InvoicePenjualanKredit::find($id);
        $data->tanggal = Carbon::parse($request->tanggal);
        $data->no_invoice = $request->no_invoice;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->telp = $request->telp;
        $data->tanggal_jatuh_tempo = Carbon::parse($request->tanggal_jatuh_tempo);
        $data->barang = $request->barang;
        $data->jumlah_barang = $request->jumlah_barang;
        if ($request->file('bukti_transaksi')) {
            Storage::delete($data->bukti_transaksi);
            $data->bukti_transaksi = $request->file('bukti_transaksi')->store('invoice_penjualan_kredit');
        }
        $data->save();
        return redirect('/invoice_penjualan_kredit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = InvoicePenjualanKredit::find($id);
        Storage::delete($data->bukti_transaksi);
        $data->delete();
        return redirect('/invoice_penjualan_kredit')->with('msg', 'sukses');
    }
}
