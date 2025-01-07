@extends('layouts.main')

@section('content')
<div class="card">
    <form action="/{{$action}}" method="post" class="form-container">
        @csrf
        <div class="text-center">
            <h1>Form {{$title}} Company</h1>
        </div>
        <div class="mb-4 mx-5">
            <label for="nama" class="form-label"><b>Company Name</b></label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Company" required>
        </div>
        <div class="mb-4 mx-5">
            <label for="email" class="form-label"><b>Company Email</b></label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email Company" required>
        </div>
        <div class="mb-4 mx-5">
            <label for="no_hp" class="form-label"><b>Nomor Telepon</b></label>
            <input type="no_hp" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan Nomor Telepon Company" minlength="11" required>
        </div>
        
        
        <button type="submit" class="btn btn-primary mx-5 mt-2" style="background-color: #3C4B64">Simpan</button>
    </form>
</div>
    
@endsection