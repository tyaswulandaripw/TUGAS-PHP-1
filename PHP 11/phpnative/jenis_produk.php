<?php

$model = new JenisProduk();
$jenis_produk = $model->JenisProduk();

// foreach ($data_produk as $row){
//     print $row['kode'];
// }
?>

<h1 class="mt-4">Jenis Produk</h1>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Jenis Produk
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Keterangan</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                    $no = 1;
                    foreach ($jenis_produk as $row){
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $row ['nama'] ?></td>
                    <td><?= $row ['ket'] ?></td>
                </tr>
                <?php
                    $no++;
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>