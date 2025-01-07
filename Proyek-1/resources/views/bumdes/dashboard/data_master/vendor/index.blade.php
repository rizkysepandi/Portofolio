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
                            <h3 class="card-title">Data Master - Vendor</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="d-flex mb-3" >
                                <div class="ms-auto">
                                    <a href="/vendor/create" type="button" class="btn btn-primary" style="
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
                                <thead class="text-center">
                                    <tr>
                                    <th>No.</th>
                                    <th>Kode</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Nama PIC</th>
                                    <th>Alamat</th>
                                    <th>Nomor Telepon</th>
                                    <th>Action</th>
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
                                            <td>{{$data->kode}}</td>
                                            <td>{{$data->nama_perusahaan}}</td>
                                            <td>{{$data->nama_pic}}</td>
                                            <td>{{$data->alamat}}</td>
                                            <td>{{$data->telp}}</td>
                                            <td>
                                                <a href="/vendor/{{$data->id}}/edit" class="nav-icon fas fa-edit"></a>
                                                
                                                <form action="/vendor/{{$data->id}}/delete" method="POST" class="d-inline">
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