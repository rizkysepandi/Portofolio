@extends('bumdes.dashboard.layouts.main')

@section('content')
    {{-- <link href="{{asset('css/stylecalk.css')}}" rel="stylesheet"> --}}
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  
                  <!-- /.card -->
                    
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Catatan Atas Laporan Keuangan</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            
                            <table id="" class="table table-bordered table-striped">
                                <thead class="text-center">
                                    <tr>
                                        <th>Entitas Jasa / Dagang</th>
                                    </tr>
                                    <tr>
                                        <th>Catatan Atas Laporan Keuangan</th>
                                    </tr>
                                    <tr>
                                        <th>31 Desember 2022 dan 2021</th>
                                    </tr>
                                </thead>
                            </table>
                            <form action="" method="post" class="form-container">
                                @csrf
                                <div >
                                    <div>
                
                                        <label for="umum" class="fs-5"><b>1. Umum</b></label>
                                        <input type="text" placeholder="Masukkan Text" name="umum" class="form-control" required>
    
                                        <label for="ikhtisar" class="fs-5"><b>2. Ikhtisar Kebijakan Akuntansi</b></label>
                                        <input type="text" placeholder="Ketik Masukkan.." name="ikhtisar" required>
    
                        
                                        <button type="submit" class="btn mt-5" style="background-color: #3C4B64">Tambah</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
          </section>
    </div>
@endsection