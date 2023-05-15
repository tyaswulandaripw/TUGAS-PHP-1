<?php
$id = $_REQUEST['id'];
$model = new Pesanan();
$pesanan = $model->getPesanan($id);

?>

<h1 class="mt-4">Tabel Pesanana</h1>
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Total</th>
                    <th>Pelanggan_id</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $pesanan['tanggal']?></td>
                    <td><?= $pesanan['total']?></td>
                    <td><?= $pesanan['pelanggan_id']?></td>
                </tr>
            </tbody>
            </table>