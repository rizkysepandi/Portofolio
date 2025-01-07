@extends('bumdes.dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{$title}} Data - Form Purchase Order</h3>
                        </div>
                        <form action="/{{$action}}" method="post" class="form-container" enctype="multipart/form-data">
                            @csrf
                            <div >
                                <div>
                                    <div class="text-center">
                                        <h1>Form {{$title}} Purchase Order</h1>
                                    </div>
                                    
                                    <label for="tanggal" ><b>Tanggal Transaksi</b></label>
                                    <input type="date" placeholder="DD/MM/YYYY" name="tanggal" class="form-control" value="{{isset($data)?$data->tanggal:''}}" required>
                                    
                                    <label for="no_po" class="fs-5"><b>No PO</b></label>
                                    <input type="text" placeholder="Masukkan No Po" name="no_po" value="{{isset($data)?$data->no_po:''}}" required>

                                    <label for="barang" class="fs-5"><b>Barang</b></label>
                                    <input type="text" placeholder="Masukkan Barang" name="barang" value="{{isset($data)?$data->barang:''}}" required>

                                    <label for="jumlah_barang" class="fs-5"><b>Jumlah Barang (Kg)</b></label>
                                    <input type="text" placeholder="Masukkan Jumlah Barang (100 Kg)" name="jumlah_barang" value="{{isset($data)?$data->jumlah_barang:''}}" required>
                                    
                                    <label for="vendor" class="fs-5"><b>Vendor</b></label>
                                    <input type="text" placeholder="Masukkan Vendor" name="vendor" value="{{isset($data)?$data->vendor:''}}" required>

                                    <label for="tanggal_pengiriman" ><b>Tanggal Pengiriman</b></label>
                                    <input type="date" placeholder="DD/MM/YYYY" name="tanggal_pengiriman" class="form-control" value="{{isset($data)?$data->tanggal_pengiriman:''}}" required>

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