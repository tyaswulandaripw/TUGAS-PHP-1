<!DOCTYPE html>
<html>

<head>
    <title>Tugas Inharitance php</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            font-family: Arial, Helvetica, sans-serif;

        }

        th,
        td {
            text-align: center;
            padding: 10px;
            border-bottom: 6px solid #ddd;
        }

        th {
            background-color: #568942;
            color: aquamarine;
        }

        tr:hover {
            background-color: powderblue;

        }
    </style>
</head>

<body>
    <?php
    require_once 'lingkaran.php';
    require_once 'persegipanjang.php';
    require_once 'segitiga.php';

        $shapes = array(
        new lingkaran(7),
        new persegipanjang(4, 8),
        new segitiga(6, 8, 10, 8, 12)
    );
    ?>
    <h1>Penggunaan inheritance pada progam PHP</h1>
    <table>
        <tr>
            <th>Nama Bidang</th>
            <th>Variable</th>
            <th>Luas Bidang</th>
            <th>Keliling Bidang</th>
        </tr>
        <?php foreach ($shapes as $shape) : ?>
            <tr>
                <td><?php echo $shape->namaBidang(); ?></td>
                <td><?php echo $shape->nilaiVariable(); ?></td>
                <td><?php echo $shape->luasBidang(); ?></td>
                <td><?php echo $shape->kelilingBidang(); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>