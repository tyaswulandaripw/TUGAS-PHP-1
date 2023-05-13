<?php

$model = new Kartu();
$pelanggan = $model->dataKartu();
?>

<h1 class="mt-4">Kartu</h1>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Kartu
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Diskon</th>
                    <th>Iuran</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Diskon</th>
                    <th>Iuran</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                    $no = 1;
                    foreach ($pelanggan as $row){
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $row ['kode'] ?></td>
                    <td><?= $row ['nama'] ?></td>
                    <td><?= $row ['diskon'] ?></td>  
                    <td><?= $row ['iuran'] ?></td>  
                </tr>
                <?php
                    $no++;
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>