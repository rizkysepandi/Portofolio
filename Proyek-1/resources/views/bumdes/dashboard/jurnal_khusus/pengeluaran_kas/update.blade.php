@extends('bumdes.dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Ubah Data - Jurnal Khusus - Pengeluaran Kas</h3>
                        </div>
                        <form action="/pengeluaran_kas/{{$data->id}}/update" method="post" class="form-container">
                            @csrf
                            <div class="d-flex">
                                <div>
                                    <h1 >Ubah Data</h1>
                                    <div class="mt-3 mb-3">

                                        <label for="nama_akun" class="form-label fs-4"><b>Nama Akun</b></label>
                                        <div class="">
                                            
                                            <select id="nama_akun" name="nama_akun" class="form-control" >
                                                @foreach ($nama_akuns as $nama_akun)
                                                @if ($nama_akun->detailakun->d_k != '')
                                                    <option value="{{$nama_akun->nama}}">{{$nama_akun->nama}}</option>
                                                @endif
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                    </div>
                                   
                                    <label for="debit" class="fs-5 mb-2"><b>Debit</b></label>
                                    <input type="number" step="0.01" name="debit" class="form-control mb-4" value="{{isset($data)?$data->debit:''}}" required> 
            
                                    
                                    <label for="kredit" class="fs-5 mb-2"><b>Kredit</b></label>
                                    <input type="number" step="0.01" name="kredit" class="form-control" value="{{isset($data)?$data->kredit:''}}" required> 
                                    
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