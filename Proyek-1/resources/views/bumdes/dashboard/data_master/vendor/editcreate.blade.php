@extends('bumdes.dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{$title}} Data - Vendor</h3>
                        </div>
                        <form action="/{{$action}}" method="post" class="form-container">
                            @csrf
                            <div >
                                <div>
                                    <div class="text-center">
                                        <h1>Form {{$title}} Vendor</h1>
                                    </div>
                                    
                                    <label for="kode" class="fs-5"><b>Kode</b></label>
                                    <input type="text" placeholder="Masukkan Kode" name="kode" value="{{isset($data)?$data->kode:''}}" required>
                                    
                                    <label for="nama_perusahaan" class="fs-5"><b>Nama Perusahaan</b></label>
                                    <input type="text" placeholder="Masukkan Nama Perusahaan" name="nama_perusahaan" value="{{isset($data)?$data->nama_perusahaan:''}}" required>
                                    
                                    <label for="nama_pic" class="fs-5"><b>Nama PIC</b></label>
                                    <input type="text" placeholder="Masukkan Nama PIC" name="nama_pic" value="{{isset($data)?$data->nama_pic:''}}" required>
                                    
                                    <label for="alamat" class="fs-5"><b>Alamat</b></label>
                                    <input type="text" placeholder="Masukkan Alamat" name="alamat" value="{{isset($data)?$data->alamat:''}}" required>
                                    
                                    <label for="telp" class="fs-5"><b>Telepon</b></label>
                                    <input type="text" placeholder="Masukkan Telepon" name="telp" value="{{isset($data)?$data->telp:''}}" required>

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