<?php
require 'model.php';

$model = new Model();
$pesanan = $model->getPesanan();
?>

<h1 class="mt-4">Tables</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Tables</li>
</ol>
<div class="card mb-4">
    <div class="card-body">
        DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
        <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
        .
    </div>
</div>
<a href="index.php?url=insertpesanan" class="btn btn-primary btn-sm">Insert</a>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Example
    </div>
    <div class="card-body">
        <table id="data_pelanggan">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tanggal</th>
                    <th>Total</th>
                    <th>Pelanggan ID</th>
                    <th>Status</th>
                </tr>
                <?php foreach ($pesanan as $row) : ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['tanggal']; ?></td>
                        <td><?php echo $row['total']; ?></td>
                        <td><?php echo $row['pelanggan_id']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                    </tr>
                <?php endforeach; ?>
        </table>
    </div>

</div>
</div>
<?php
// include_once 'bottom.php';
?>