@extends('bumdes.dashboard_admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{$title}} Data - User</h3>
                        </div>
                        <form action="/{{$action}}" method="post" class="form-container">
                            @csrf
                            <div >
                                <div>
                                    <div class="text-center">
                                        <h1>Form {{$title}} User</h1>
                                    </div>
            

                                    <label for="nama" class="fs-5"><b>Nama</b></label>
                                    <input type="text" placeholder="Masukkan Nama" name="nama" value="{{isset($data)?$data->nama:''}}" required>

                                    <!-- <label for="email" class="fs-5"><b>Email</b></label>
                                    <input type="text" placeholder="Masukkan Email" name="email" value="{{isset($data)?$data->email:''}}" required> -->
                                    
                                    <label for="email" class="form-label"><b>Email</b></label>
                                    <input type="email" class="form-control" id="email" name="email" required>

                                    <label for="no_hp" class="form-label"><b>Nomor Telepon</b></label>
                                    <input type="text" class="form-control" id="no_hp" name="no_hp" minlength="11" required>

                                    <label for="role" class="form-label fs-4"><b>Role</b></label>
                                        <div class="mb-3">
                                            
                                            <select id="role" name="role" class="form-control" >
                                                <option value="operator">Operator</option>
                                                <option value="pelihat">Pelihat</option>
                                                
                                            </select>
                                        </div>
                                    
                                    <label for="company_id" class="form-label fs-4"><b>Company</b></label>
                                        <div class="">
                                            
                                            <select id="company_id" name="company_id" class="form-control" >
                                                @foreach ($companies as $company)
                                                    <option value="{{$company->id}}">{{$company->nama}}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                    <p >Belum ada Company? <a href="/create_company">Klik Disini!</a> </p>

                                    <div class="">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-label fs-4 " placeholder="Enter Password" name="password" minlength="8" required>
                                        
                                    </div>

                    
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