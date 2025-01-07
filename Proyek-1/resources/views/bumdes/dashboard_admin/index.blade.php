@extends('bumdes.dashboard_admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  
                  <!-- /.card -->
                    
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Dashboard Admin</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead class="text-center">
                                    <tr>
                                    <th>ID User</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Company</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                
                                    @if (isset($users))
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->nama}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->role}}</td>
                                                <td>{{$user->company->nama}}</td>
                                                <td>
                                                    <a href="/create_user/{{$user->id}}/edit" class="nav-icon fas fa-edit"></a>
                                                    
                                                    <form action="/create_user/{{$user->id}}/delete" method="POST" class="d-inline">
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

                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead class="text-center">
                                    <tr>
                                        <th>ID Company</th>
                                        <th>Company Name</th>
                                        <th>Company Email</th>
                                        <th>Company Contact</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                
                                    @if (isset($companies))
                                        @foreach ($companies as $company)
                                            <tr>
                                                <td>{{$company->id}}</td>
                                                <td>{{$company->nama}}</td>
                                                <td>{{$company->email}}</td>
                                                <td>{{$company->no_hp}}</td>
                                                <td>
                                                    <a href="/create_company/{{$company->id}}/edit" class="nav-icon fas fa-edit"></a>
                                                    
                                                    <form action="/create_company/{{$company->id}}/delete" method="post" class="d-inline">
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