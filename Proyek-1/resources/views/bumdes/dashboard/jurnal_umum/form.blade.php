<button class="open-button" onclick="openForm()">+ Tambah</button>
<div class="form-popup" id="myForm">
  <form action="/jurnal_umum/createNew" method="post" class="form-container" enctype="multipart/form-data">
    @csrf
    <div class="mx-4">
        <div class="" style="margin-left: 100%">
            <button type="button" class="btn-close border-5 font-weight-bold" aria-label="Close" onclick="closeForm()"></button>
        </div>
        <h1>Tambah Data</h1>
        <p class="fs-5" style="color: #8F9CA9">isi form dibawah ini untuk menambah data</p>
        
        <label for="jenis_transaksi" ><b>Jenis Transaksi</b></label>
        <input type="text" placeholder="Masukkan Jenis Transaksi" name="jenis_transaksi" class="form-control" required>

        <label for="tanggal" ><b>Tanggal Transaksi</b></label>
        <input type="date" placeholder="DD/MM/YYYY" name="tanggal" class="form-control" required>
        
        <div class="mb-4">
            <label for="bukti_pembayaran"><b>Upload Bukti Pembayaran</b></label>
            <input type="file" class="form-control"  name="bukti_pembayaran" id="bukti_pembayaran" accept=".jpg, .jpeg, .png" required>
            <div id="filehelp" class="form-text">Maks file size : 1 MB</div>
        </div>
        

        
        
        <button type="submit" class="btn" style="background-color: #3C4B64">Tambah</button>
        
    </div>
  </form>
  <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }
    
    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
</script>
</div>