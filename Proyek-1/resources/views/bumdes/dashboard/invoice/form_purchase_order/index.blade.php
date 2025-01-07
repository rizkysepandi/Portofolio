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
                            <h3 class="card-title">Formulir Purchase Order</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="d-flex mb-3" >
                                <div class="ms-auto">
                                    <a href="/form_purchase_order/create" type="button" class="btn btn-primary" style="
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
                                        <th>Tanggal</th>
                                        <th>No PO</th>
                                        <th>Barang</th>
                                        <th>Jumlah Barang</th>
                                        <th>Vendor</th>
                                        <th>Tanggal Pengiriman</th>
                                        <th>Bukti Transaksi</th>
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
                                            <td>{{$data->tanggal->format('d F Y')}}</td>
                                            <td>{{$data->no_po}}</td>
                                            <td>{{$data->barang}}</td>
                                            <td>{{$data->jumlah_barang}}</td>
                                            <td>{{$data->vendor}}</td>
                                            <td>{{$data->tanggal_pengiriman->format('d F Y')}}</td>
                                            <td><a href="/form_purchase_order/{{$data->id}}/download" class="btn btn-primary btn-unduh">Download</a></td>
                                            <td>
                                                <a href="/form_purchase_order/{{$data->id}}/edit" class="nav-icon fas fa-edit"></a>
                                                
                                                <form action="/form_purchase_order/{{$data->id}}/delete" method="POST" class="d-inline">
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