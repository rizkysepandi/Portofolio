<button class="open-button" onclick="openForm()">+ Tambah</button>
<div class="form-popup-jurnal-khusus" id="myForm">
  <form action="/pemasukan_kas/createNew" method="post" class="form-container">
    @csrf
    <div class="mx-4">
        <div class="" style="margin-left: 100%">

            <button type="button" class="btn-close" aria-label="Close" onclick="closeForm()"></button>
        </div>
        <h1>Tambah Data</h1>
        <p class="fs-5" style="color: #8F9CA9">isi form dibawah ini untuk menambah data</p>
        
        <label for="tanggal" ><b>Tanggal Transaksi</b></label>
        <input type="date" placeholder="DD/MM/YYYY" name="tanggal" class="form-control mb-4" required>
        
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