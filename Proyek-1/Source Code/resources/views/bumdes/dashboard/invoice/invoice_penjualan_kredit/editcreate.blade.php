@extends('bumdes.dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{$title}} Data - Invoice Penjualan Kredit</h3>
                        </div>
                        <form action="/{{$action}}" method="post" class="form-container" enctype="multipart/form-data">
                            @csrf
                            <div >
                                <div>
                                    <div class="text-center">
                                        <h1>Invoice {{$title}} Penjualan Kredit</h1>
                                    </div>
                                    
                                    <label for="tanggal" ><b>Tanggal Transaksi</b></label>
                                    <input type="date" placeholder="DD/MM/YYYY" name="tanggal" class="form-control" value="{{isset($data)?$data->tanggal:''}}" required>
                                    
                                    <label for="no_invoice" class="fs-5"><b>No Invoice</b></label>
                                    <input type="text" placeholder="Masukkan No Invoice" name="no_invoice" value="{{isset($data)?$data->no_invoice:''}}" required>
                                    
                                    <label for="nama" class="fs-5"><b>Nama</b></label>
                                    <input type="text" placeholder="Masukkan Nama" name="nama" value="{{isset($data)?$data->nama:''}}" required>

                                    <label for="alamat" class="fs-5"><b>Alamat</b></label>
                                    <input type="text" placeholder="Masukkan Alamat" name="alamat" value="{{isset($data)?$data->alamat:''}}" required>

                                    <label for="telp" class="fs-5"><b>Telepon</b></label>
                                    <input type="text" placeholder="Masukkan Telepon" name="telp" value="{{isset($data)?$data->telp:''}}" required>
                                    
                                    <label for="tanggal_jatuh_tempo" ><b>Tanggal Jatuh Tempo</b></label>
                                    <input type="date" placeholder="DD/MM/YYYY" name="tanggal_jatuh_tempo" class="form-control" value="{{isset($data)?$data->tanggal_jatuh_tempo:''}}" required>

                                    <label for="barang" class="fs-5"><b>Barang</b></label>
                                    <input type="text" placeholder="Masukkan Barang" name="barang" value="{{isset($data)?$data->barang:''}}" required>
                                    
                                    <label for="jumlah_barang" class="fs-5"><b>Jumlah Barang</b></label>
                                    <input type="text" placeholder="Masukkan Jumlah Barang" name="jumlah_barang" value="{{isset($data)?$data->jumlah_barang:''}}" required>

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