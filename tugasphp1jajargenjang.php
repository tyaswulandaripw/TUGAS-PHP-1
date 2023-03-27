<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Rumus Bangun Datar Jajar Genjang</title>
</head>

<body>
    <h1> Bangun Datar Jajar Genjang</h1>

    <form method="post">
        <table>
            <tr>
                <td>Alas</td>
                <td>
                    <input type="text" name="a" required>
                </td>
            </tr>
            <tr>
                <td>Tinggi</td>
                <td>
                    <input type="text" name="t" required>
                </td>
            </tr>
            <tr>
                <td>Panjang</td>
                <td>
                    <input type="text" name="p" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Hitung">
                </td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $a = $_POST['a'];
        $t = $_POST['t'];
        $p = $_POST['p'];

        $luasjajargenjang = $a * $t;
        $kelilingjajargenjang = 2 * $a * $p;
        echo 'Hasil perhitungan luas dan keliling Jajar Genjang';
        echo '<br> Diketahui ';
        echo '<br> Nilai a (alas) : ' . $a;
        echo '<br> Nilai p (panjang) : ' . $p;
        echo '<br> Nilai t (tinggi) : ' . $t;

        echo '<br> Maka luasnya :' . $luasjajargenjang;
        echo '<br> Maka kelilingnya :' . $kelilingjajargenjang;
    }
    ?>
</body>

</html>