<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Models\User;
use App\Models\NamaAkun;
use App\Models\DetailAkun;
use App\Models\SaldoAkhir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
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

    public function create_user()
    {
        return view('bumdes.register.create_user.index',[
            'title' => 'Daftar ',
            'method' => 'POST',
            'action' => 'daftar_user/create',
            'companies' => Company::all(),
        ]);
    }
    public function store_user(Request $request)
    {
        $request->validate([
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8',
            'no_hp' => 'required|min:11',
        ]);
        $data = new User;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->no_hp = $request->no_hp;
        $data->role = $request->role;
        $data->company_id = $request->company_id;
        $data->password = $request->password;
        $data->password = Hash::make($data->password);
        
        
        $data->save();
        return redirect('/login');
    }

    public function create_company()
    {
        return view('bumdes.register.create_company.index',[
            'title' => 'Tambah ',
            'method' => 'POST',
            'action' => 'daftar_company/create',
        ]);
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_company(Request $request)
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


        return redirect('/daftar_user');
    }

    
    public function show($id)
    {
        //
    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {
    }


    public function destroy($id)
    {
        //
    }
}
