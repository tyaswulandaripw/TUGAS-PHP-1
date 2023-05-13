<?php

$model = new Produk();
$data_produk = $model->dataProduk();

// foreach ($data_produk as $row){
//     print $row['kode'];
// }
?>

<h1 class="mt-4">Data Produk</h1>
<div class="card mb-4">
    <div class="card-header">
        <!-- <i class="fas fa-table me-1"></i>
        Data Produk -->
        <!-- Membuat tombol mengarahkan ke file produk form.php -->
        <a href="index.php?url=product_form" class="btn btn-primary btn-small">Tambah</a>
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
                    <td><?= $row ['harga_beli'] ?></td>
                    <td><?= $row ['harga_jual'] ?></td>
                    <td><?= $row ['stok'] ?></td>
                    <td><?= $row ['min_stok'] ?></td>
                    <td><?= $row ['jenis_produk_id'] ?></td>
                    <td>
                        <form action="produk_controller.php" method="POST">
                            <a class="btn btn-info btn-sm" href="index.php?url=product_detail&id=<?= $row['id'] ?>">Detail</a>
                            <a class="btn btn-warning btn-sm">Ubah</a>
                            <a class="btn btn-danger btn-sm">Hapus</a>

                            <input type="hidden" nama="idx" value="<?= $row['id'] ?>">
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