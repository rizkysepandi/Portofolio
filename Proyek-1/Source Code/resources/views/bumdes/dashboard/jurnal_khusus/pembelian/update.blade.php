@extends('bumdes.dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Ubah Data - Pembelian</h3>
                        </div>
                        <form action="/pembelian/{{$data->id}}/update" method="post" class="form-container">
                            @csrf
                            <div >
                                <div>
                                    <div class="text-center">
                                        <h1>Form Ubah Data</h1>
                                    </div>
                                    <p class="fs-5" style="color: #8F9CA9">isi form dibawah ini untuk mengubah data pembelian</p>
            
                                    <label for="tanggal" class="fs-5"><b>Tanggal</b></label>
                                    <input type="date" placeholder="DD/MM/YYYY" name="tanggal" class="form-control" value="{{isset($data)?$data->tanggal:''}}" required>

                                    <label for="keterangan" class="fs-5"><b>Keterangan</b></label>
                                    <input type="text" placeholder="Ketik Masukkan.." name="keterangan" value="{{isset($data)?$data->keterangan:''}}" required>

                                    <label for="noref" class="fs-5"><b>Ref</b></label>
                                    <input type="text" placeholder="Ketik Masukkan.." name="noref" value="{{isset($data)?$data->noref:''}}" required>

                                    <h4>Debit</h4>
                                    <label for="pembelian" class="fs-5"><b>Pembelian</b></label>
                                    <input type="number" step="0.01" name="pembelian" class="form-control bg-grey" value="{{isset($data)?$data->pembelian:''}}" required>

                                    <label for="akun" class="fs-5"><b>Akun</b></label>
                                    <input type="text" placeholder="Ketik Masukan.." name="akun" value="{{isset($data)?$data->akun:''}}">

                                    <label for="jumlah" class="fs-5"><b>Jumlah</b></label>
                                    <input type="number" step="0.01" placeholder="Ketik Masukkan" name="jumlah" class="form-control mb-3" value="{{isset($data)?$data->jumlah:''}}">

                                    <h4>Kredit</h4>
                                    <label for="utang_dagang" class="fs-5"><b>Utang Dagang</b></label>
                                    <input type="number" step="0.01" name="utang_dagang" class="form-control" value="{{isset($data)?$data->utang_dagang:''}}" required> 
                    
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