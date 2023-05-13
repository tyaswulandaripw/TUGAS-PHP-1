<?php
require 'model.php';

$model = new Model();
$kartu = $model->getKartu();
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
<a href="index.php?url=insertkartu" class="btn btn-primary btn-sm">Insert</a>

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
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Diskon</th>
                    <th>Iuaran</th>
                </tr>
                <?php foreach ($kartu as $row) : ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['kode']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['diskon']; ?></td>
                        <td><?php echo $row['iuran']; ?></td>
                    </tr>
                <?php endforeach; ?>
        </table>
    </div>

</div>
</div>
<?php
// include_once 'bottom.php';
?>