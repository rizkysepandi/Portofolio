@extends('bumdes.dashboard_admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{$title}} Data - Company</h3>
                        </div>
                        <form action="/{{$action}}" method="post" class="form-container">
                            @csrf
                            <div >
                                <div>
                                    <div class="text-center">
                                        <h1>Form {{$title}} Company</h1>
                                    </div>
            

                                    <label for="nama" class="fs-5"><b>Nama</b></label>
                                    <input type="text" placeholder="Masukkan Nama" name="nama" value="{{isset($data)?$data->nama:''}}" required>
                                    
                                    <label for="no_hp" class="fs-5"><b>Nomor Telepon</b></label>
                                    <input type="text" placeholder="Masukkan Nomor Telepon" name="no_hp" value="{{isset($data)?$data->no_hp:''}}" minlength="11" required >

                                    <label for="email" class="fs-5"><b>Email</b></label>
                                    <input type="text" placeholder="Masukkan Email" name="email" value="{{isset($data)?$data->email:''}}" required>

                    
                                    <button type="submit" class="btn mt-5" style="background-color: #3C4B64">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </section>
    </div>
    
@endsection