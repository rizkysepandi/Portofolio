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
                                <h3 class="card-title">Laporan Keuangan - Laba Rugi</h3>
                            </div>

                            <form class="d-inline-flex justify-content-end p-3"
                                  action="{{ route('laporan_keuangan.laba_rugi') }}" method="post">
                                @csrf

                                <button type="submit" class="btn btn-primary">Download Laporan Keuangan (PDF)</button>
                            </form>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-borderless table-striped">
                                    <thead class="text-center" style="background-color:#3C4B64; color:white">
                                    <tr>
                                        <th scope="col" colspan="5">Entitas Jasa</th>
                                    </tr>
                                    <tr>
                                        <th scope="col" colspan="5">Laporan Laba Rugi</th>
                                    </tr>
                                    <tr>
                                        <th scope="col" colspan="5">31 Desember 2023 dan 2022</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Kode Rekening</th>
                                        <th scope="col">Nama Akun</th>
                                        <th scope="col">Catatan</th>
                                        <th scope="col">2023</th>
                                        <th scope="col">2022</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    @foreach($nama_akuns as $akun )
                                        <p hidden>{{$i+=1}}</p>
                                        @if($i >= 57 && $i <= 68)
                                            @if($akun->detailakun->d_k == '')
                                                <tr>
                                                    <td><b>{{$akun->detailakun->kode_rekening}}</b></td>
                                                    <td><b>{{$akun->nama}}</b></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>-</td>
                                                </tr>
                                            @else
                                                <tr>
                                                    <td>{{$akun->detailakun->kode_rekening}}</td>
                                                    <td>{{$akun->nama}}</td>
                                                    <td></td> <!-- catatan -->
                                                    @if ($akun->detailakun->saldo != 0)
                                                        <!-- 2023 -->
                                                        <td>{{formatRupiah($akun->detailakun->saldo)}}</td>
                                                    @else
                                                        <td>-</td>
                                                    @endif
                                                    <td>-</td> <!-- 2022 -->
                                                </tr>
                                            @endif
                                        @elseif($i >= 69)
                                            @if($akun->detailakun->d_k == '')
                                                <tr>
                                                    <td><b>{{$akun->detailakun->kode_rekening}}</b></td>
                                                    <td><b>{{$akun->nama}}</b></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>-</td>
                                                </tr>
                                            @else
                                                <tr>
                                                    <td>{{$akun->detailakun->kode_rekening}}</td>
                                                    <td>{{$akun->nama}}</td>
                                                    <td></td> <!-- catatan -->
                                                    @if ($akun->detailakun->saldo != 0)
                                                        <!-- 2023 -->
                                                        <td>{{formatRupiah($akun->detailakun->saldo)}}</td>
                                                    @else
                                                        <td>-</td>
                                                    @endif
                                                    <td>-</td> <!-- 2022 -->
                                                </tr>
                                            @endif
                                        @endif
                                    @endforeach

                                    <tr>
                                        <td><strong>-</strong></td>
                                        <td><strong>JUMLAH PENDAPATAN</strong></td>
                                        <td></td>
                                        <td><strong>{{formatRupiah($saldo_akhir->pendapatan)}}</strong></td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td><strong>-</strong></td>
                                        <td><strong>JUMLAH BEBAN</strong></td>
                                        <td></td>
                                        <td><strong>{{formatRupiah($saldo_akhir->beban)}}</strong></td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td><strong></strong></td>
                                        <td><strong>PENDAPATAN BERSIH</strong></td>
                                        <td></td>
                                        <td><strong>{{formatRupiah($saldo_akhir->pendapatan_bersih)}}</strong></td>
                                        <td>-</td>
                                    </tr>
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
