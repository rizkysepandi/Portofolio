<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use App\Models\JurnalUmum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bumdes.dashboard.index',[
            'saldo_akhir' => auth()->user()->company->saldoakhir,
            'jurnals' => auth()->user()->company->jurnalumums,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bumdes.dashboard_admin.create_user.index',[
            'title' => 'Tambah ',
            'method' => 'POST',
            'action' => 'create_user/create',
            'companies' => Company::all(),
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
        return view('bumdes.dashboard_admin.create_user.index', [
            'title' => 'Ubah ',
            'method' => 'PUT',
            'action' => 'create_user/'.$id.'/update',
            'data' => User::find($id),
            'companies' => Company::all(),
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
        $data = User::find($id);
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->no_hp = $request->no_hp;
        $data->role = $request->role;
        $data->company_id = $request->company_id;
        $data->password = $request->password;
        $data->password = Hash::make($data->password);
        
        
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
        $data = User::find($id);
        $data->delete();
        return redirect('/dashboard_admin')->with('msg', 'delete sukses');
    }
}
