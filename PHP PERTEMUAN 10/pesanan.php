<?php

$model = new Pesanan();
$pelanggan = $model->dataPesanan();
?>

<h1 class="mt-4">Pesanan</h1>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Pesanan
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Total</th>
                    <th>Pelanggan_id</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Total</th>
                    <th>Pelanggan_id</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                    $no = 1;
                    foreach ($pelanggan as $row){
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $row ['tanggal'] ?></td>
                    <td><?= $row ['total'] ?></td>
                    <td><?= $row ['pelanggan_id'] ?></td>  
                </tr>
                <?php
                    $no++;
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>