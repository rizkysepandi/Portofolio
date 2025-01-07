<button class="open-button" onclick="openForm()">+ Tambah</button>
<div class="form-popup" id="myForm">
<form action="/jurnal_khusus/create" method="post" class="form-container">
    <?php echo csrf_field(); ?>
    <div class="mx-4">
        <div class="" style="margin-left: 100%">

            <button type="button" class="btn-close" aria-label="Close" onclick="closeForm()"></button>
        </div>
        <h1>Tambah Data</h1>
        <p class="fs-5" style="color: #8F9CA9">isi form dibawah ini untuk menambah data</p>
        
        <label for="tanggal" ><b>Tanggal Transaksi</b></label>
        <input type="text" placeholder="DD/MM/YYYY" name="tanggal" required>

        <label for="keterangan" ><b>Keterangan</b></label>
        <input type="text" placeholder="DD/MM/YYYY" name="Keterangan" required>

        <label for="noref" ><b>Ref</b></label>
        <input type="text" placeholder="DD/MM/YYYY" name="noref" required>

        <h4>Debit</h4>
        <label for="noref" ><b>Pembelian</b></label>
        <input type="text" placeholder="DD/MM/YYYY" name="noref" required>

        <h5>Serba Serbi</h5>
        <label for="noref" ><b>Akun</b></label>
        <input type="text" placeholder="DD/MM/YYYY" name="noref">
        <label for="noref" ><b>Jumlah</b></label>
        <input type="text" placeholder="DD/MM/YYYY" name="noref">

        <div class="mb-4">
            <label for="bukti_pembayaran"><b>Upload Bukti Pembayaran</b></label>
            <input type="file" class="form-control"  name="bukti_pembayaran" required>
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
</div><?php /**PATH C:\Users\Rizky.SHS\Documents\GitHub\Bumdes\resources\views/bumdes/dashboard/jurnal_khusus/penjualan/form.blade.php ENDPATH**/ ?>