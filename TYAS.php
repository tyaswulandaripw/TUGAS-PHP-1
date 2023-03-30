<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input data nilai mahasiswa 2022</title>
</head>
<body>

<?php 
$m1 = ['kode'=>'001', 'nama' => 'PUTRI', 'nilai' =>75];
$m2 = ['kode'=>'002', 'nama' => 'TYAS', 'nilai' =>95];
$m3 = ['kode'=>'003', 'nama' => 'WULAN', 'nilai'=>80];
$m4 = ['kode'=>'004', 'nama' => 'SITI', 'nilai'=>79];
$m5 = ['kode'=>'005', 'nama' => 'RAMA', 'nilai'=>90];
$m6 = ['kode'=>'006', 'nama' => 'ALVAN', 'nilai'=>75];
$m7 = ['kode'=>'007', 'nama' => 'VILA', 'nilai'=>86];
$m8 = ['kode'=>'008', 'nama' => 'JOHAN', 'nilai'=>60];
$m9 = ['kode'=>'009', 'nama' => 'FIKRI', 'nilai'=>70];
$m10 = ['kode'=>'010', 'nama' => 'REVA', 'nilai'=>90];
$m11 = ['kode'=>'011', 'nama' => 'RIKA', 'nilai'=>85];
$m12 = ['kode'=>'012', 'nama' => 'DEVI', 'nilai'=>65];

$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10, $m11, $m12,];
$ar_judul = ['no','kode','nama','nilai','keterangan','grade','predikat'];

$jumlah_data = count($mahasiswa);
$jml_nilai = array_column($mahasiswa,'nilai');
$rata_nilai = array_sum($jml_nilai);

$max_ni = max ($jml_nilai);
$min_ni = min ($jml_nilai);
$rata_ni = $rata_nilai / $jumlah_data;


$nilai = [
    'Jumlah Mahasiswa'=>$jumlah_data,
    'Nilai Tertingi'=>$max_ni,
    'Nilai Terendah'=>$min_ni,
    'Nilai Rata-rata'=>$rata_ni
]

?>

<table align="left" border-color="blue">
    <thead>

    <tr>
    <?php 
    foreach($ar_judul as $judul){
    ?>

        <th>
            <?= $judul ?>
        </th>

    <?php }?>
    </tr>
    
    </thead>
    <tbody>

    <?php
    $no = 1;
    foreach($mahasiswa as $mhs){

        $ket = ($mhs['nilai']>= 60) ? 'Lulus' : 'Tidak Lulus';

        // grade
        if($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100) $grade ='A';
        else if($mhs['nilai'] >= 75 && $mhs['nilai'] <= 80) $grade ='B';
        else if($mhs['nilai'] >= 60 && $mhs['nilai'] <= 74) $grade ='C';
        else if($mhs['nilai'] >= 30 && $mhs['nilai'] <= 59) $grade ='D';
        else if($mhs['nilai'] >= 0 && $mhs['nilai'] <= 29) $grade ='E';
        else $grade = '';

        // Predikat Nilai
        switch ($grade){
            case "A" : $predikat = "Memuaskan"; break;
            case "B" : $predikat = "Bagus"; break;
            case "C" : $predikat = "Cukup"; break;
            case "D" : $predikat = "Kurang"; break;
            case "E" : $predikat = "Buruk"; break;
            default: $predikat ="";
        }
    ?>

        <tr>
            <td><?= $no ?></td>
            <td><?= $mhs ['kode'] ?></td>
            <td><?= $mhs ['nama'] ?></td>
            <td><?= $mhs ['nilai'] ?></td>
            <td><?= $ket ?></td>
            <td><?= $grade ?></td>
            <td><?= $predikat ?></td>
        </tr>

    <?php $no++; } ?>
    </tbody>

    <tfoot>
        <?php
        foreach($nilai as $ni => $hasil){
        ?>

        <tr>
            <td colspan="5"><?= $ni ?></td>
            <td colspan="2"><?= $hasil ?></td>
        </tr>
    </tfoot>
    
    <?php }?>
</table>
</body>
</html>

<style>

    body {
        background: green;
    }
    table,th,td {
        border-color: red;
        border-collapse: collapse;
        border: 5px solid;
        text-align: center;
        width: 800px;
    }

    thead {
        height: 30px;
        color : blue;
    }

    tbody td {
        height: 20px;
        color :yellow;
    }
    tr {
        height: 25px;
        color : purple;
        font-type : bold;
    }

</style>