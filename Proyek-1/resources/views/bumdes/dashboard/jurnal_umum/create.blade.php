@extends('bumdes.dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data - Jurnal Umum</h3>
                        </div>
                        <form action="/jurnal_umum/create" method="post" class="form-container">
                            @csrf
                            <div class="d-flex">
                                <div>
                                    <div class="">
                                        <h1>Form Tambah Data</h1>
                                    </div>
                                    <p class="fs-5" style="color: #8F9CA9">isi form dibawah ini untuk menambah data jurnal umum</p>
                                    <div class="mt-3">

                                        <label for="nama_akun" class="form-label fs-4"><b>Nama Akun</b></label>
                                        <div class="">
                                            
                                            <select id="nama_akun" name="nama_akun" class="form-control border border-secondary rounded py-2" >
                                                @foreach ($nama_akuns as $nama_akun)
                                                @if ($nama_akun->detailakun->d_k != '')
                                                    <option value="{{$nama_akun->nama}}">{{$nama_akun->nama}}</option>
                                                @endif
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                    </div>
                                   
                                    <label for="debit" class="fs-5 mb-1"><b>Debit</b></label>
                                    <input type="number" step="0.01" name="debit" class="form-control mb-4" value="0" required> 
            
                                    
                                    <label for="kredit" class="fs-5 mb-2"><b>Kredit</b></label>
                                    <input type="number" step="0.01" name="kredit" class="form-control" value="0" required> 
                                    
                                    <button type="submit" class="btn mt-5" style="background-color: #3C4B64">Tambah</button>
                                    @if(isset($jurnal->datas->first()->nama_akun))
                                        @foreach ($jurnal->datas as $data)
                                            @if($i>1)
                                                <p hidden></p>        
                                            @else
                                                <p hidden>{{$i= $i+1}}</p>
                                            @endif
                                        @endforeach
                                    @endif
                                    @if($i>1)
                                        <a href="/jurnal_umum" type="button" class="btn btn-success mt-3  fw-semibold" style="">Selesai</a>
                                    @endif

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