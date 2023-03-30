<?php 
$ar_prodi = ["SI"=>"Sistem Informasi", "TI"=>"Teknik Informatika", "ILKOM"=>"Ilmu Komputer","TE"=>"Teknik Elektro"];
$ar_skill = ["HTML"=>50, "CSS"=>60, "Javascript"=>70, "RWD Bootstrap"=>80, "PHP"=>90, "MySQL"=>90, "Laravel"=>100];
$domisili = ["Aceh","Jakarta","Bandung","Semarang","Yogyakarta","Surabaya","Lainnya"];

?>

<fieldset>

    <table align="center">
        <thead>
            <tr>
                <th colspan="2" height="40px">Form Registrasi</th>
            </tr>
        </thead>
        <tbody>
            <form method="POST">
                <tr>
                    <td>NPM</td>
                    <td>: 
                        <input type="text" name="nim">
                    </td>
                </tr>
                <tr>
                    <td>Nama </td>
                    <td>: 
                        <input type="text" name="nama">
                    </td>
                </tr>
                <tr>
                    <td>Email </td>
                    <td>: 
                        <input type="email" name="email">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin </td>
                    <td>: 
                        <input type="radio" name="jk" value="L" checked>Laki-Laki &nbsp;
                        <input type="radio" name="jk" value="P">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Program Studi </td>
                    <td>: 
                        <select name="prodi">
                            <?php

                            foreach($ar_prodi as $prodi => $v){
                                ?>
                                <option value="<?= $prodi?>"><?= $v?></option>

                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Skill Programming </td>
                    <td>: 
                        <?php
                        foreach ($ar_skill as $skill => $s){
                            ?>
                        <input type="checkbox" name="skill[]" value="<?= $s." / " .$skill ?>"><?= $skill ?>

                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>Domisili </td>
                    <td>: 
                        <select name="domisili">
                            <?php

                            foreach($domisili as $d){
                                ?>
                                <option value="<?= $d?>"><?= $d?></option>

                            <?php } ?>
                        </select>
                    </td>
                </tr>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="2">
                    <button name="proses" >Submit</button>
                </th>
            </tr>
        </tfoot>
            </form>
    </table>

</fieldset>

<?php
error_reporting(0);

    function rangeSkill($jml){
        if($jml <= 0) $range = "Tidak Memadai";
        else if ($jml <= 40) $range = "Kurang";
        else if ($jml <= 60) $range = "Cukup";
        else if ($jml <= 100) $range = "Baik";
        else if ($jml <= 160) $range = "Sangat Baik";
        else $range = "";
        return $range;
    }

    // Proses Tombol Submit
    if(isset($_POST['proses'])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $prodi2 = $_POST['prodi'];
        $skill2 = $_POST['skill'];
        $domisili = $_POST['domisili'];
        $email = $_POST['email'];

        // hitung nilai Skill
        $jumlah = array_sum($skill2);

        // fungsi Kategory skill
        $range = rangeSkill($jumlah);

    


?>
<br>
<fieldset align="center">
<legend>Hasil Inputan</legend>

    <table>
        <tr>
            <td>NPM</td>
            <td>: <?= $nim ?> </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: <?= $nama ?> </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: <?= $jk ?> </td>
        </tr>
        <tr>
            <td>Prodi</td>
            <td>: <?= $prodi2 ?> </td>
        </tr>
        <tr>
            <td>Point / Skill</td>
            <td>: 
                <?php
                foreach($skill2 as $s){ ?>|
                <?= $s ?> |
                <?php } ?>
            </td>
        </tr>
        <tr>
            <td>Skor Skill</td>
            <td>: <?= $jumlah ?> </td>
        </tr>
        <tr>
            <td>Kategory Skill</td>
            <td>: <?= $range ?> </td>
        </tr>
        <tr>
            <td>Domisili  </td>
            <td>: <?= $domisili ?> </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>: <?= $email ?> </td>
        </tr>
    </table>

</fieldset>

<?php } ?>