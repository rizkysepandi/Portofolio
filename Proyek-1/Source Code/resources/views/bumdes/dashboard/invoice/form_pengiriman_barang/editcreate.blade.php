@extends('bumdes.dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{$title}} Data - Form Pengiriman Barang</h3>
                        </div>
                        <form action="/{{$action}}" method="post" class="form-container" enctype="multipart/form-data">
                            @csrf
                            <div >
                                <div>
                                    <div class="text-center">
                                        <h1>Form {{$title}} Pengiriman Barang</h1>
                                    </div>
                                    
                                    <label for="tanggal" ><b>Tanggal Transaksi</b></label>
                                    <input type="date" placeholder="DD/MM/YYYY" name="tanggal" class="form-control" value="{{isset($data)?$data->tanggal:''}}" required>
                                    
                                    <label for="nama_penerima" class="fs-5"><b>Nama Penerima</b></label>
                                    <input type="text" placeholder="Masukkan Nama Penerima" name="nama_penerima" value="{{isset($data)?$data->nama_penerima:''}}" required>

                                    <label for="alamat_penerima" class="fs-5"><b>Alamat Penerima</b></label>
                                    <input type="text" placeholder="Masukkan Alamat Penerima" name="alamat_penerima" value="{{isset($data)?$data->alamat_penerima:''}}" required>

                                    <label for="telp_penerima" class="fs-5"><b>Telepon Penerima</b></label>
                                    <input type="text" placeholder="Masukkan Telepon Penerima" name="telp_penerima" value="{{isset($data)?$data->telp_penerima:''}}" required>
                                    
                                    <label for="nama_pengirim" class="fs-5"><b>Nama Pengirim</b></label>
                                    <input type="text" placeholder="Masukkan Nama Pengirim" name="nama_pengirim" value="{{isset($data)?$data->nama_pengirim:''}}" required>
                                    
                                    <label for="alamat_pengirim" class="fs-5"><b>Alamat Pengirim</b></label>
                                    <input type="text" placeholder="Masukkan Alamat Pengirim" name="alamat_pengirim" value="{{isset($data)?$data->alamat_pengirim:''}}" required>

                                    <div class="mb-3">
                                        <label for="bukti_transaksi"><b>Upload Bukti Transaksi</b></label>
                                        <input type="file" class="form-control @error('bukti_transaksi') is-invalid @enderror"  name="bukti_transaksi" id="bukti_transaksi" accept=".jpg, .jpeg, .png" 
                                         required>
                                        @error('bukti_transaksi')
                                            <div class="invalid-feedback">
                                                Ukuran file bukti transaksi tidak boleh lebih dari 1024 kilobytes / 1 MB
                                            </div>
                                        @enderror
                                        <div id="filehelp" class="form-text">Maks file size : 1 MB</div>
                                    </div>
                    
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