<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\NamaAkun;
use App\Models\DetailAkun;
use App\Models\SaldoAkhir;
use Illuminate\Http\Request;

class CompanyController extends Controller
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
        return view('bumdes.dashboard_admin.create_company.index',[
            'title' => 'Tambah ',
            'method' => 'POST',
            'action' => 'create_company/create',
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
            'nama' => 'required|unique:companies',
            'email' => 'required|email:dns|unique:companies',
            'no_hp' => 'required|unique:companies|min:11',
        ]);
        
        $data = new Company;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->no_hp = $request->no_hp;
        $data->save();
        $dbCompany = Company::find(2);
        $dbAkuns = $dbCompany->namaakun;
        foreach($dbAkuns as $dbAkun){
            $akun = new NamaAkun;
            $akun->nama = $dbAkun->nama;
            $akun->company_id = $data->id;
            $akun->save();
            $detailAkun = new DetailAkun;
            $detailAkun->nama_akun_id = $akun->id;
            $detailAkun->saldo = 0;
            $detailAkun->penyesuaian = 0;
            $detailAkun->kode_rekening = $dbAkun->detailakun->kode_rekening;
            $detailAkun->d_k = $dbAkun->detailakun->d_k;
            $detailAkun->save();
            
        }
        $saldoAkhir = new SaldoAkhir;
        $saldoAkhir->company_id = $data->id;
        $saldoAkhir->akun = 0;
        $saldoAkhir->penyesuaian = 0;
        $saldoAkhir->neraca_setelahnya = 0;
        $saldoAkhir->laba_rugi = 0;
        $saldoAkhir->neraca = 0;
        $saldoAkhir->aset = 0;
        $saldoAkhir->kewajiban = 0;
        $saldoAkhir->ekuitas = 0;
        $saldoAkhir->pendapatan = 0;
        $saldoAkhir->beban = 0;
        $saldoAkhir->pendapatan_bersih = 0;
        $saldoAkhir->save();

        return redirect('/dashboard_admin');
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
        return view('bumdes.dashboard_admin.create_company.index',[
            'title' => 'Ubah ',
            'method' => 'POST',
            'action' => 'create_company/'.$id.'/update',
            'data' => Company::find($id),
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
        $data = Company::find($id);
        $data->nama = $request->nama;
        
        $data->save();
        return redirect('/dashboard_admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Company::find($id);
        $data->delete();
        return redirect('/dashboard_admin')->with('msg', 'delete sukses');
    }
}
