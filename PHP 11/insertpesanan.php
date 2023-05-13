<?php
require 'model.php';
?>

<div class="container mt-5">
    <h3>Form Data Pelanggan</h3>
    <form method="POST" action="prosesinputpesanan.php">
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
        </div>
        <div class="form-group">
            <label for="total">Total</label>
            <input type="text" class="form-control" id="total" name="total" required>
        </div>
        <div class="form-group">
            <label for="pelanggan_id">ID Pelanggan</label>
            <input type="text" class="form-control" id="pelanggan_id" name="pelanggan_id" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script>
    // Mendapatkan elemen input tanggal
    var tanggalInput = document.getElementById('tanggal');

    // Mendapatkan tanggal saat ini
    var today = new Date();

    // Format tanggal menjadi YYYY-MM-DD
    var formattedDate = today.toISOString().slice(0, 10);

    // Mengisi nilai tanggal saat ini ke dalam input tanggal
    tanggalInput.value = formattedDate;
</script>
<?php
// include_once 'bottom.php';
?>