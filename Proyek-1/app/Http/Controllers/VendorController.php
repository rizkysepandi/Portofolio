<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bumdes.dashboard.data_master.vendor.index',[
            'datas' => auth()->user()->company->vendors,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bumdes.dashboard.data_master.vendor.editcreate',[
            'title' => 'Tambah',
            'method' => 'POST',
            'action' => 'vendor/create',
            
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
        $data = new Vendor;
        $data->kode = $request->kode;
        $data->nama_perusahaan = $request->nama_perusahaan;
        $data->nama_pic = $request->nama_pic;
        $data->alamat = $request->alamat;
        $data->telp = $request->telp;
        $data->company_id = auth()->user()->company->id;
        $data->save();
        return redirect('/vendor');
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
        return view('bumdes.dashboard.data_master.vendor.editcreate', [
            'title' => 'Ubah ',
            'method' => 'PUT',
            'action' => 'vendor/'.$id.'/update',
            'data' => Vendor::find($id),
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
        $data = Vendor::find($id);
        $data->kode = $request->kode;
        $data->nama_perusahaan = $request->nama_perusahaan;
        $data->nama_pic = $request->nama_pic;
        $data->alamat = $request->alamat;
        $data->telp = $request->telp;
        $data->save();
        return redirect('/vendor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Vendor::find($id);
        $data->delete();
        return redirect('/vendor')->with('msg', 'sukses');
    }
}
