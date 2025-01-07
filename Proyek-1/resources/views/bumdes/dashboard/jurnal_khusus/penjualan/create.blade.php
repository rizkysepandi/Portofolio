@extends('bumdes.dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data - Penjualan</h3>
                        </div>
                        <form action="/penjualan/create" method="post" class="form-container">
                            @csrf
                            <div class="d-flex">
                                <div>
                                    <div class="text-center">
                                        <h1>Form Tambah Data</h1>
                                    </div>
                                    <p class="fs-5" style="color: #8F9CA9">isi form dibawah ini untuk menambah data penjualan</p>
            
                                    <label for="tanggal" class="fs-5"><b>Tanggal</b></label>
                                    <input type="date" placeholder="DD/MM/YYYY" name="tanggal" class="form-control" required>
            
                                    <label for="no_faktur" class="fs-5"><b>No.Faktur</b></label>
                                    <input type="text" placeholder="Ketik Masukkan.." name="no_faktur" required>
            
                                    <label for="keterangan" class="fs-5"><b>Keterangan</b></label>
                                    <input type="text" placeholder="Ketik Masukkan.." name="keterangan" required>
            
                                    <label for="noref" class="fs-5"><b>No. Referensi</b></label>
                                    <input type="text" placeholder="Ketik Masukkan.." name="noref" required>
            
                                    <label for="syarat_pembayaran" class="fs-5"><b>Syarat Pembayaran</b></label>
                                    <input type="text" placeholder="Ketik Masukkan.." name="syarat_pembayaran" required>
            
            
                                    <label for="piutang_dagang" class="fs-5 mb-2"><b>Piutang Dagang (D)</b></label>
                                    <input type="number" step="0.01" name="piutang_dagang" class="form-control mb-4" value="0" required> 
            
                                    
                                    <label for="penjualan" class="fs-5 mb-2"><b>Penjualan (K)</b></label>
                                    <input type="number" step="0.01" name="penjualan" class="form-control" value="0" required> 

                                    <button type="submit" class="btn mt-5" style="background-color: #3C4B64">Tambah</button>
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