@extends('bumdes.dashboard.layouts.main')

@section('content')
<style>
    .tabcontent {
        display: none;
        padding: 6px 12px;
        
        border-top: none;
        }
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
                            <h3 class="card-title">Buku Besar</h3>
                        </div>
                        

                        <!-- /.card-header -->
                        <div class="card-body">
                            <div>
                                <ul class="nav tablinks">
                                    
                                    <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle text-black fw-bold fs-4" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Nama Akun</a>
                                      <ul class="dropdown-menu">
                                        @foreach ($nama_akuns as $nama_akun)
                                            @if ($nama_akun->detailakun->d_k != '')
                                                <li><a type="button" class="dropdown-item tablinks" onclick="openAkun(event, '{{$nama_akun->nama}}')">{{$nama_akun->nama}}</a></li>        
                                            @endif
                                        @endforeach
                                      </ul>
                                    </li>
                                    
                                </ul>
                            </div>
                            @foreach ($nama_akuns as $nama_akun)
                                @if($nama_akun->detailakun->d_k != '')
                                <div id="{{$nama_akun->nama}}" class="tabcontent">
                                    <p class="hide">{{$iterasi = 0}}{{$saldo = 0}}</p>
                                    <h2>{{$nama_akun->nama}}</h2>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead class="text-center">
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Keterangan</th>
                                                <th>Debit</th>
                                                <th>Kredit</th>
                                                <th>Saldo</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                        
                                            @foreach ($jurnals as $jurnal)
                                                @if(isset($jurnal->datas->first()->nama_akun))
                                                @if ($jurnal->datas->first()->nama_akun == $nama_akun->nama)
                                                    @foreach ($jurnal->datas as $data)
                                                        @if ($data->nama_akun != $nama_akun->nama)
                                                            <tr>
                                                                <td>{{$iterasi = $iterasi + 1}}</td>
                                                                <td>{{$jurnal->tanggal->format('d F Y')}}</td>
                                                                <td>{{$jurnal->jenis_transaksi}}</td>
                                                                <td>{{$data->formatRupiah('kredit')}}</td>
                                                                <td>-</td>
                                                                <td>{{formatRupiah($saldo = $saldo + $data->kredit)}}</td>
                                                            </tr>    
                                                        @endif
                                                    @endforeach
                                                @else
                                                    @foreach ($jurnal->datas as $data)
                                                        @if ($data->nama_akun == $nama_akun->nama)
                                                            <tr>
                                                                <td>{{$iterasi = $iterasi + 1}}</td>
                                                                <td>{{$jurnal->tanggal->format('d F Y')}}</td>
                                                                <td>{{$jurnal->jenis_transaksi}}</td>
                                                                <td>-</td>
                                                                <td>{{$data->formatRupiah('kredit')}}</td>
                                                                <td>{{formatRupiah($saldo = $saldo - $data->kredit)}}</td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                @endif
                                                @endif
                                            @endforeach
                                        
                                        </tbody>
                                    </table>
                                </div>
                                @endif
                            @endforeach
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