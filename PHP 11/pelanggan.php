<?php
require 'model.php';

$model = new Model();
$pelanggan = $model->getPelanggan();
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
<a href="index.php?url=insertpelanggan" class="btn btn-primary btn-sm">Insert</a>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Example
    </div>
    <div class="card-body">
        <table id="data_pelanggan">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Email</th>
                </tr>
                <?php foreach ($pelanggan as $row) : ?>
                    <tr>
                        <td><?php echo $row['nama_pelanggan']; ?></td>
                        <td><?php echo $row['alamat']; ?></td>
                        <td><?php echo $row['jk']; ?></td>
                        <td><?php echo $row['tmp_lahir']; ?></td>
                        <td><?php echo $row['tgl_lahir']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                    </tr>
                <?php endforeach; ?>
        </table>
    </div>

</div>
</div>
<?php
// include_once 'bottom.php';
?>