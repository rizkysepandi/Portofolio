@extends('bumdes.dashboard.layouts.main')

@section('content')
<style>
        .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
        }
        .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
        background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
        background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
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
                            <h3 class="card-title">Data Master - Kode Rekening</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab">
                                    <button class="tablinks" onclick="openAkun(event, 'rill_account')">Rill Account</button>
                                    <button class="tablinks" onclick="openAkun(event, 'nominal_account')">Nominal Account</button>
                                    
                                </div>
                                <div class="table-responsive">
                                    <div id="rill_account" class="tabcontent">
                                        
                                        <table class="table table-striped table-borderless">
                                            <thead class="text-white text-center" style="background-color: #3C4B64">
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama Akun</th>
                                                    <th scope="col">Kode Rekening</th>
                                                    <th scope="col">D/K</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody class="fw-semibold text-center">
                                                @foreach ($akuns as $akun)
                                                    @if ($akun->detailakun->kode_rekening[0] == '1' || $akun->detailakun->kode_rekening[0] == '2' || $akun->detailakun->kode_rekening[0] == '3')
                                                         @if($i == 51)
                                                            <tr>
                                                                <tr>
                                                                <td>{{$i+=1}}</td>
                                                                <td>Cadangan</td>
                                                                <td>{{$akun->detailakun->kode_rekening}}</td>
                                                                <td>{{$akun->detailakun->d_k}}</td>
                                                            </tr>
                                                            </tr>   
                                                        @else
                                                            <tr>
                                                                <td>{{$i+=1}}</td>
                                                                <td>{{$akun->nama}}</td>
                                                                <td>{{$akun->detailakun->kode_rekening}}</td>
                                                                <td>{{$akun->detailakun->d_k}}</td>
                                                            </tr>    
                                                        @endif
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="nominal_account" class="tabcontent">
                                        
                                        <table class="table table-striped table-borderless">
                                            <thead class="text-white text-center" style="background-color: #3C4B64">
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Kode Rekening</th>
                                                    <th scope="col">Nama Akun</th>
                                                    <th scope="col">D/K</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody class="fw-semibold text-center">
                                                @foreach ($akuns as $akun)
                                                    @if ($akun->detailakun->kode_rekening[0] == '4' || $akun->detailakun->kode_rekening[0] == '6' || $akun->detailakun->kode_rekening[0] == '7')
                                                        <tr>
                                                            <td>{{$i+=1}}</td>
                                                            <td>{{$akun->nama}}</td>
                                                            <td>{{$akun->detailakun->kode_rekening}}</td>
                                                            <td>{{$akun->detailakun->d_k}}</td>
                                                        </tr>    
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
    <script>
        function openAkun(evt, akunName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(akunName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>

    
@endsection