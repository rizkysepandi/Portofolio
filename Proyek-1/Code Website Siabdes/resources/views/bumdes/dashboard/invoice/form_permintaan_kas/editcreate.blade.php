@extends('bumdes.dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{$title}} Data - Form Permintaan Kas</h3>
                        </div>
                        <form action="/{{$action}}" method="post" class="form-container" enctype="multipart/form-data">
                            @csrf
                            <div >
                                <div>
                                    <div class="text-center">
                                        <h1>Form {{$title}} Permintaan Kas</h1>
                                    </div>
                                    
                                    <label for="tanggal" ><b>Tanggal Transaksi</b></label>
                                    <input type="date" placeholder="DD/MM/YYYY" name="tanggal" class="form-control" value="{{isset($data)?$data->tanggal:''}}" required>
                                    
                                    <label for="dana_untuk_departemen" class="fs-5"><b>Dana Untuk Departemen</b></label>
                                    <input type="text" placeholder="Masukkan Dana Untuk Departemen" name="dana_untuk_departemen" value="{{isset($data)?$data->dana_untuk_departemen:''}}" required>

                                    <label for="dana_awal" class="fs-5"><b>Dana Awal</b></label>
                                    <input type="number" step="0.01" name="dana_awal" class="form-control mb-4" value="{{isset($data)?$data->dana_awal:''}}" required>
                                    
                                    <label for="saldo" class="fs-5 mb-2"><b>Saldo</b></label>
                                    <input type="number" step="0.01" name="saldo" class="form-control mb-4" value="{{isset($data)?$data->saldo:''}}" required> 

                                    <label for="keterangan" class="fs-5"><b>Keterangan</b></label>
                                    <input type="text" placeholder="Masukkan Keterangan" name="keterangan" value="{{isset($data)?$data->keterangan:''}}" required>

                                    <label for="total" class="fs-5 mb-2"><b>Total</b></label>
                                    <input type="number" step="0.01" name="total" class="form-control mb-4" value="{{isset($data)?$data->total:''}}" required> 

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