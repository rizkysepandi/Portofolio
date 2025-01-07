@extends('bumdes.dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  
                  <!-- /.card -->
                    
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Jurnal Khusus - Pembelian</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="d-flex mb-3" >
                                <div class="ms-auto">
                                    <a href="/pembelian/create" type="button" class="btn btn-primary" style="
                                    text-decoration: none; 
                                    color: white;
                                    background-color: #0b297c;
                                    color: white;
                                    padding: 16px 20px;
                                    border: none;
                                    cursor: pointer;
                                    opacity: 0.8;
                                    width: 150px;
                                    border-radius: 10px;
                                    font-size: 15px;
                                    font-weight: 500;">+ Tambah</a>
                                </div>
                            </div>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead class="text-center" >
                                    <tr class="align-middle" >
                                        <th rowspan="3">No.</th>
                                        <th rowspan="3">Tanggal</th>
                                        <th rowspan="3">Keterangan</th>
                                        <th rowspan="3">Ref</th>
                                        <th colspan="3">Debit</th>
                                        <th>Kredit</th>
                                        <th rowspan="3">Action</th>
                                    </tr>
                                    <tr class="align-top">
                                        <th rowspan="2">Pembelian</th>
                                        <th colspan="2">Serba Serbi</th>
                                        <th rowspan="2">Utang Dagang</th>
                                    </tr>
                                    <tr class="align-middle">
                                        <th>Akun</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    
                                    @if (isset($datas))
                                    <p style="visibility: hidden; height: 0px;"> 
                                        {{$i =1}}
                                    </p>
                                        @foreach ($datas as $data)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$data->tanggal->format('d F Y')}}</td>
                                                <td>{{$data->keterangan}}</td>
                                                <td>{{$data->noref}}</td>
                                                <td>{{$data->formatRupiah('pembelian')}}</td>
                                                <td>{{$data->akun}}</td>
                                                <td>{{$data->formatRupiah('jumlah')}}</td>
                                                <td>{{$data->formatRupiah('utang_dagang')}}</td>
                                                
                                                <td>
                                                    <a href="/pembelian/{{$data->id}}/edit" class="nav-icon fas fa-edit"></a>
                                                    {{-- <a href="/jurnal_umum/{{$data->id}}/delete" class="fa fa-trash"></a> --}}
                                                    
                                                    <form action="/pembelian/{{$data->id}}/delete" method="POST" class="d-inline">
                                                    @csrf
                                                        <button class="fa fa-trash border-0" onclick="return confirm('Apakah Kamu Yakin Ingin Menghapus Data?')"></button>
                                                    </form>
                                                    
                                                </td>
                                            </tr>        
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
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