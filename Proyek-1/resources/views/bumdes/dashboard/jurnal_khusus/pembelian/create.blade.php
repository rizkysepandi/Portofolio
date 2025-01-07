@extends('bumdes.dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data - Pembelian</h3>
                        </div>
                        <form action="/pembelian/create" method="post" class="form-container">
                            @csrf
                            <div >
                                <div>
                                    <div class="text-center">
                                        <h1>Form Tambah Data</h1>
                                    </div>
                                    <p class="fs-5" style="color: #8F9CA9">isi form dibawah ini untuk menambah data pembelian</p>
            
                                    <label for="tanggal" class="fs-5"><b>Tanggal</b></label>
                                    <input type="date" placeholder="DD/MM/YYYY" name="tanggal" class="form-control" required>

                                    <label for="keterangan" class="fs-5"><b>Keterangan</b></label>
                                    <input type="text" placeholder="Ketik Masukkan.." name="keterangan" required>

                                    <label for="noref" class="fs-5"><b>Ref</b></label>
                                    <input type="text" placeholder="Ketik Masukkan.." name="noref" required>

                                    <h4>Debit</h4>
                                    <label for="pembelian" class="fs-5"><b>Pembelian</b></label>
                                    <input type="number" step="0.01" name="pembelian" class="form-control bg-grey" value="0" required>

                                    <label for="akun" class="fs-5"><b>Akun</b></label>
                                    <input type="text" placeholder="Ketik Masukan.." name="akun">

                                    <label for="jumlah" class="fs-5"><b>Jumlah</b></label>
                                    <input type="number" step="0.01" placeholder="Ketik Masukkan" class="form-control mb-3" name="jumlah">

                                    <h4>Kredit</h4>
                                    <label for="utang_dagang" class="fs-5"><b>Utang Dagang</b></label>
                                    <input type="number" step="0.01" name="utang_dagang" class="form-control" value="0" required> 
                    
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