@extends('bumdes.dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{$title}} Data - Barang</h3>
                        </div>
                        <form action="/{{$action}}" method="post" class="form-container">
                            @csrf
                            <div >
                                <div>
                                    <div class="text-center">
                                        <h1>Form {{$title}} Barang</h1>
                                    </div>
                                    
                                    <label for="tanggal" ><b>Tanggal Transaksi</b></label>
                                    <input type="date" placeholder="DD/MM/YYYY" name="tanggal" class="form-control" value="{{isset($data)?$data->tanggal:''}}" required>
                                    
                                    <label for="kode_barang" class="fs-5"><b>Kode Barang</b></label>
                                    <input type="text" placeholder="Masukkan Kode Barang" name="kode_barang" value="{{isset($data)?$data->kode_barang:''}}" required>
                                    
                                    <label for="nama_barang" class="fs-5"><b>Nama Barang</b></label>
                                    <input type="text" placeholder="Masukkan Nama Barang" name="nama_barang" value="{{isset($data)?$data->nama_barang:''}}" required>
                                    
                                    <label for="satuan" class="fs-5"><b>Satuan</b></label>
                                    <input type="text" placeholder="Masukkan Satuan" name="satuan" value="{{isset($data)?$data->satuan:''}}" required>

                                    <label for="stok_awal" class="fs-5"><b>Stok Awal</b></label>
                                    <input type="number" name="stok_awal" class="form-control mb-4" value="{{isset($data)?$data->stok_awal:''}}" required>

                                    <label for="harga_jual" class="fs-5"><b>Harga Jual</b></label>
                                    <input type="text" placeholder="Masukkan Harga Jual" name="harga_jual" value="{{isset($data)?$data->harga_jual:''}}" required>
                                    
                                    <label for="harga_beli" class="fs-5"><b>Harga Beli</b></label>
                                    <input type="text" placeholder="Masukkan Harga Beli" name="harga_beli" value="{{isset($data)?$data->harga_beli:''}}" required>
                                    
                                    <label for="jumlah_barang_masuk" class="fs-5"><b>Jumlah Barang Masuk</b></label>
                                    <input type="number" name="jumlah_barang_masuk" class="form-control mb-4" value="{{isset($data)?$data->jumlah_barang_masuk:''}}">
                                    
                                    <label for="jumlah_barang_keluar" class="fs-5"><b>Jumlah Barang Keluar</b></label>
                                    <input type="number" name="jumlah_barang_keluar" class="form-control mb-4" value="{{isset($data)?$data->jumlah_barang_keluar:''}}" >
                                    
                                    <label for="stok_akhir" class="fs-5"><b>Stok Akhir</b></label>
                                    <input type="number" name="stok_akhir" class="form-control mb-4" value="{{isset($data)?$data->stok_akhir:''}}" required>

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