@extends('layouts.main')

@section('content')
<div class="card">
    <form action="/{{$action}}" method="post" class="form-container">
        @csrf
        <div class="text-center">
            <h1>Form {{$title}} User</h1>
        </div>
        <div class="mb-4 mx-5">
            <label for="nama" class="form-label"><b>Nama</b></label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-4 mx-5">
            <label for="email" class="form-label"><b>Email</b></label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-4 mx-5">
            <label for="no_hp" class="form-label"><b>Nomor Telepon</b></label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" minlength="11" required>
        </div>
        <div class="mb-4 mx-5">
            <label for="password" class="form-label"><b>Password</b></label>
            <input type="password" class="form-control" id="password" name="password" minlength="8" required>
        </div>
        <div class="mb-4 mx-5">

            <label for="role" class="form-label"><b>Role</b></label>
            <div class="">
                
                <select id="role" name="role" class="form-control" >
                    <option value="operator">Operator</option>
                    <option value="pelihat">Pelihat</option>
                </select>
            </div>
        </div>
        <br>
        <br>
        <div class="mb-4 mx-5">
        <label for="company_id" class="form-label"><b>Company</b></label>
            <div class="">
                
                <select id="company_id" name="company_id" class="form-control" >
                    @foreach ($companies as $company)
                        @if($company->id > 1)
                            <option value="{{$company->id}}">{{$company->nama}}</option>
                        @endif
                    @endforeach
                    
                </select>
            </div>
        </div>
        <b class="mx-3">Belum ada Company? <a href="/daftar_company">Klik Disini!</a> <b>
        <br><br>
        <button type="submit" class="btn btn-primary mx-5 mt-2" style="background-color: #3C4B64">Simpan</button>
    </form>
</div>
    
@endsection