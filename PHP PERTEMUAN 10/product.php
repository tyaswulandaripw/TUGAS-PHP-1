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
        <i class="fas fa-table me-1"></i>
        Data Produk
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
                </tr>
                <?php
                    $no++;
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>