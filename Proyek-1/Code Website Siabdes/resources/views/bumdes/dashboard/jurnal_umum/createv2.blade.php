@extends('bumdes.dashboard.layouts.main')

@section('content')
    
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data BARU - Jurnal Umum</h3>
                        </div>
                        <div class="mx-5 mt-3">
                            <form method="POST" action="/jurnal_umum/createv2" id="form">
                                @csrf
                                <div class="mb-4">
                                    <div class="akun mb-4">
                                        <div class="row justify-content-center alert-danger"  id="error"></div>
                                        <div class="row">
                                            <div class="col">
                                                <p>Nama Akun</p>
                                                <select id="nama_akun" name="nama_akun[]" class="form-control" >
                                                    @foreach ($nama_akuns as $nama_akun)
                                                    @if ($nama_akun->detailakun->d_k != '')
                                                    <option value="{{$nama_akun->nama}}">{{$nama_akun->nama}}</option>
                                                    @endif
                                                    @endforeach
                                                    
                                                </select>
                                            </div>
                                            <div class="col">
                                                <p>Debit</p>
                                                <input type="number" class="form-control" name="debit[]" id="debit" placeholder="Debit" value="0">
                                            </div>
                                            <div class="col">
                                                <p>Kredit</p>
                                                <input type="number" class="form-control" name="kredit[]" id="kredit" placeholder="Kredit" value="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="akun-container" class="mb-4">
                                    <div class="akun mb-4">
                                        <div class="row justify-content-center text-red" id="error"></div>
                                        <div class="row">
                                            <div class="col">
                                                <p>Nama Akun</p>
                                                <select id="nama_akun" name="nama_akun[]" class="form-control" >
                                                    @foreach ($nama_akuns as $nama_akun)
                                                    @if ($nama_akun->detailakun->d_k != '')
                                                    <option value="{{$nama_akun->nama}}">{{$nama_akun->nama}}</option>
                                                    @endif
                                                    @endforeach
                                                    
                                                </select>
                                            </div>
                                            <div class="col">
                                                <p>Debit</p>
                                                <input type="number" class="form-control" name="debit[]" id="debit" placeholder="Debit" value="0">
                                            </div>
                                            <div class="col">
                                                <p>Kredit</p>
                                                <input type="number" class="form-control" name="kredit[]" id="kredit" placeholder="Kredit" value="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-4 ">
                                    <button type="button" id="add-akun" class="btn btn-success">Tambah Akun</button>
                                    <button type="button" onclick="removeFunction()" class="btn btn-danger">Hapus Akun</button>
                                    <button type="submit" onclick="validationInput()" class="btn btn-primary">Submit</button>
                                </div>
                                    
                                    
                            </form>

                            <script>
                                // Ambil container dari elemen input akun
                                const container = document.getElementById("akun-container");
                                // Ambil tombol "Add More"
                                const addBtn = document.getElementById("add-akun");

                                // Tambahkan event listener ketika tombol "Add More" di klik
                                addBtn.addEventListener("click", () => {
                                    // Clone elemen input akun
                                    const clone = container.children[0].cloneNode(true);
                                    // Bersihkan value pada elemen input
                                    const inputs = clone.querySelectorAll("input");
                                    inputs.forEach((input) => (input.value = "0"));
                                    // Tambahkan elemen input yang sudah diclone ke dalam container
                                    container.appendChild(clone);
                                });

                                function removeFunction() {
                                const list = document.getElementById("akun-container");
                                if (list.lastElementChild != list.firstElementChild){
                                    list.removeChild(list.lastElementChild);
                                }
                                }

                                function validationInput(){
                                    const form = document.getElementById('form');
                                    const debit = document.getElementById('debit');
                                    const kredit = document.getElementById('kredit');
                                    const errorElement = document.getElementById('error');


                                    form.addEventListener('submit', (e) => {
                                        let messages = []
                                        if (debit.value === '' || debit.value == null || debit.value == 0 ){
                                            if(kredit.value === '' || kredit.value == null || kredit.value == 0){
                                                messages.push('Masukkan Total Debit Atau Kredit')    
                                            }else{
                                                //sukses
                                            }
                                        }else if(debit.value !== '' || debit.value != null || debit.value != 0){
                                            if(kredit.value ==='' || kredit.value == null || kredit.value == 0){
                                                //sukses
                                            }else{
                                                messages.push('Harap mengisikan 1 saja antara debit dan kredit')    
                                            }
                                        }

                                        if(messages.length > 0){
                                            e.preventDefault()
                                            errorElement.innerText = messages.join(', ')
                                        }
                                    })
                                }

                                
                            </script>
                            <!-- restricted debit/kredit column -->
                            <!-- <script defer src="{{asset('js/jurnalUmum.js')}}"></script> -->
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </section>
    </div>
@endsection