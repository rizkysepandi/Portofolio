<?php

namespace App\Http\Controllers;

use App\Models\DataTest;
use App\Models\NamaAkun;
use Illuminate\Http\Request;

class DataTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bumdes.dashboard.jurnal_umum.createv2',[
            'title' => 'Tambah Data',
            'nama_akuns' => NamaAkun::all(),
            
            
        ]);
    }
    public function store(Request $request)
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataTest  $dataTest
     * @return \Illuminate\Http\Response
     */
    public function show(DataTest $dataTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataTest  $dataTest
     * @return \Illuminate\Http\Response
     */
    public function edit(DataTest $dataTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataTest  $dataTest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataTest $dataTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataTest  $dataTest
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataTest $dataTest)
    {
        //
    }
}
