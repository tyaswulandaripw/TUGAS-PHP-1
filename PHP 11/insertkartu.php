<?php
require 'model.php';
?>

<div class="container mt-5">
    <h3>Form Data Pelanggan</h3>
    <form method="POST" action="prosesinputkartu.php">
        <div class="form-group">
            <label for="kode">Kode</label>
            <input type="text" class="form-control" id="kode" name="kode" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="diskon">Diskon</label>
            <input type="text" class="form-control" id="diskon" name="diskon" required>
        </div>
        <div class="form-group">
            <label for="iuran">Iuran</label>
            <input type="text" class="form-control" id="iuran" name="iuran" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php
// include_once 'bottom.php';
?>