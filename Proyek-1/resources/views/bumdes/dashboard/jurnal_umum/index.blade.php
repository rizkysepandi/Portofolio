@extends('bumdes.dashboard.layouts.main')

@section('content')
<style>
    
    p.hide{
        visibility: hidden;
    }
</style>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  
                  <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Jurnal Umum</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="d-flex mb-3" >
                                <div class="ms-auto">
                                    <div>
                                        @include('bumdes.dashboard.jurnal_umum.form')
                                    </div>
                                </div>
                            </div>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead class="text-center">
                                    <tr>
                                    <th>No.</th>
                                    <th>Tanggal</th>
                                    <th>Jenis Transaksi</th>
                                    <th>Nama Akun</th>
                                    <th>No. Referensi</th>
                                    <th>Debit</th>
                                    <th>Kredit</th>
                                    <th>Bukti Transaksi</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                
                                    @if (isset($jurnals))
                                    <p style="visibility: hidden; height: 0px;"> 
                                        {{$i =1}}
                                    </p>
                                        @foreach ($jurnals as $jurnal)
                                            @foreach ($jurnal->datas as $data)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$jurnal->tanggal->format('d F Y')}}</td>
                                                <td>{{$jurnal->jenis_transaksi}}</td>
                                                <td>{{$data->nama_akun}}</td>
                                                <td>{{$data->noref}}</td>
                                                @if ($data->debit == 0)
                                                    <td>-</td>
                                                    <td>{{($data->formatRupiah('kredit'))}}</td>
                                                @else
                                                    <td>{{($data->formatRupiah('debit'))}}</td>
                                                    <td>-</td>
                                                @endif
                                                <td><a href="/jurnal_umum/{{$jurnal->id}}/download" class="btn btn-primary btn-unduh">Download</a></td>
                                                <td>
                                                    <a href="/jurnal_umum/{{$data->id}}/edit" class="nav-icon fas fa-edit"></a>
                                                    
                                                    <form action="/jurnal_umum/{{$jurnal->id}}/delete" method="POST" class="d-inline">
                                                    @csrf
                                                        <button class="fa fa-trash border-0" onclick="return confirm('Apakah Kamu Yakin Ingin Menghapus Data?')"></button>
                                                    </form>
                                                    
                                                </td>
                                                
                                                
                                            </tr> 
                                            
                                            @endforeach
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