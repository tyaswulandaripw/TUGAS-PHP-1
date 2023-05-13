<?php

$model = new Produk();
$data_produk = $model->dataProduk();

// foreach ($data_produk as $row){
//     print $row['kode'];
// }

$sesi = $_SESSION['MEMBER'];
if(isset($sesi)){
?>

<h1 class="mt-4">Data Produk</h1>
<div class="card mb-4">
    <div class="card-header">
        <!-- <i class="fas fa-table me-1"></i>
        Data Produk -->
        <!-- Membuat tombol mengarahkan ke file produk form.php -->
        <?php    
            if($sesi['role'] != 'staff'){
        ?>

        <a href="index.php?url=product_form" class="btn btn-primary btn-small">Tambah</a>

        <?php } ?>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Stok</th>
                    <th>Minimal Stock</th>
                    <th>Jenis Produk</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Name</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Stok</th>
                    <th>Minimal Stock</th>
                    <th>Jenis Produk</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                    $no = 1;
                    foreach ($data_produk as $row){
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $row ['kode'] ?></td>
                    <td><?= $row ['nama'] ?></td>
                    <td><?= 'Rp, '. number_format($row ['harga_beli'], 0, ",", ".")?></td>
                    <td><?= 'Rp, '. number_format($row ['harga_jual'], 0, ",", ".")?></td>
                    <td><?= $row ['stok'] ?></td>
                    <td><?= $row ['min_stok'] ?></td>
                    <td><?= $row ['jenis_produk_id'] ?></td>
                    <td>
                        <form action="produk_controller.php" method="POST">

                            <a class="btn btn-info btn-sm" href="index.php?url=product_detail&id=<?= $row['id'] ?>">Detail</a>
                        <?php    
                        if($sesi['role'] == 'admin'){
                        ?>
                            <a class="btn btn-warning btn-sm" href="index.php?url=product_form&idedit=<?= $row ['id'] ?>">Ubah</a>
                            <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Anda yakin Ingin Menghapusnya?')">Hapus</button>

                            <input type="hidden" name="idx" value="<?= $row['id']?>">
                        <?php } ?>
                        </form>
                    </td>
                </tr>
                <?php
                    $no++;
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php
}else {
    echo'<script> alert("anda tidak boleh masuk");history.back();</script>';
}

?>