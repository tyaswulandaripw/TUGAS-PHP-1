<?php
$jabatan = "";
$status = "";
$jumlah_anak = "";
$gaji_pokok = 0;
$tunjangan_jabatan = 0;
$tunjangan_keluarga = 0;
$gaji_kotor = 0;
$zakat_profesi = 0;
$take_home_pay = 0;

if (isset($_POST["submit"])) {
    $jabatan = $_POST["jabatan"];
    $status = $_POST["status"];
    $jumlah_anak = $_POST["jumlah_anak"];
}

switch ($jabatan) {
    case "Manager":
        $gaji_pokok = 20000000;
        break;
    case "Asisten":
        $gaji_pokok = 15000000;
        break;
    case "Kabag":
        $gaji_pokok = 10000000;
        break;
    case "Staff":
        $gaji_pokok = 4000000;
        break;
    case "":
        $gaji_pokok = 0;
        break;
    default:
        echo "Jabatan tidak valid.";
        exit();
}

$tunjangan_jabatan = $gaji_pokok * 0.2;

if ($status == "Sudah Menikah") {
    if ($jumlah_anak >= 3) {
        $tunjangan_keluarga = $gaji_pokok * 0.1;
    } elseif ($jumlah_anak > 0 && $jumlah_anak <= 2) {
        $tunjangan_keluarga = $gaji_pokok * 0.05;
    }
}

$gaji_kotor = $gaji_pokok + $tunjangan_jabatan + $tunjangan_keluarga;

$zakat_profesi = $gaji_kotor >= 6000000 && $_POST["agama"] == "Islam" ? $gaji_kotor * 0.025 : 0;

$take_home_pay = $gaji_kotor - $zakat_profesi;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Form Gaji Pegawai</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="" method="post">
        <h2>Form Gaji Pegawai</h2>
        <label>Jabatan:</label>
        <select name="jabatan">
            <option value="Manager">Manager</option>
            <option value="Asisten">Asisten</option>
            <option value="Kabag">Kabag</option>
            <option value="Staff">Staff</option>
        </select>
        <br>
        <br>
        <label>Status Pernikahan:</label>
        <input type="radio" name="status" value="Belum Menikah" checked>Belum Menikah
        <input type="radio" name="status" value="Sudah Menikah">Sudah Menikah<br>
        <br>
        <label>Jumlah Anak:</label>
        <input type="text" name="jumlah_anak"><br>
        <br>
        <label>Agama:</label>
        <select name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Kong Hu Cu">Kong Hu Cu</option>
        </select>
        <input type="submit" name="submit" value="Submit">
    </form>
    <div class="container">
        <h1>Rincian gaji <?php echo $jabatan ?>:</h1>
        <table>
            <tr>
                <td><label>Gaji Pokok:</label></td>
                <td><span><?php echo number_format($gaji_pokok, 0, ".", ","); ?></span></td>
            </tr>
            <tr>
                <td><label>Tunjangan Jabatan:</label></td>
                <td><span><?php echo number_format($tunjangan_jabatan, 0, ".", ","); ?></span></td>
            </tr>
            <tr>
                <td><label>Tunjangan Keluarga:</label></td>
                <td><span><?php echo number_format($tunjangan_keluarga, 0, ".", ","); ?></span></td>
            </tr>
            <tr>
                <td><label>Gaji Kotor:</label></td>
                <td><span><?php echo number_format($gaji_kotor, 0, ".", ","); ?></span></td>
            </tr>
            <tr>
                <td><label>Zakat Profesi:</label></td>
                <td><span><?php echo number_format($zakat_profesi, 0, ".", ","); ?></span></td>
            </tr>
            <tr>
                <td><label>Take Home Pay:</label></td>
                <td><span><?php echo number_format($take_home_pay, 0, ".", ","); ?></span></td>
            </tr>
        </table>
    </div>

</body>

</html>