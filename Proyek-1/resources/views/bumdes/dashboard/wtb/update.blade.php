@extends('bumdes.dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Ubah Data - Penyesuaian</h3>
                        </div>
                        <form action="/{{$action}}/update" method="post" class="form-container" id="form">
                            @csrf
                            <div >
                                <div>
                                    <div class="text-center">
                                        <h1>Form Ubah Data</h1>
                                    </div>
                                    <div class="row justify-content-center alert-danger"  id="error"></div>
                                    <h3>Penyesuaian</h3>
                                    <label for="debit" class="fs-5"><b>Debit</b></label>
                                    <input type="number" step="0.01" name="debit" id="debit" class="form-control bg-grey" value="0" required>
                                    
                                    <label for="kredit" class="fs-5"><b>Kredit</b></label>
                                    <input type="number" step="0.01" name="kredit" id="kredit" class="form-control bg-grey" value="0" required>

                    
                                    <button type="submit" class="btn mt-5" style="background-color: #3C4B64">Simpan</button>
                                </div>
                            </div>
                        </form>

                        <script defer src="{{asset('js/jurnalUmum.js')}}"></script>
                    </div>
                </div>
              </div>
            </div>
          </section>
    </div>
    
@endsection