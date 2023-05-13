<?php

// error_reporting(0);
session_start();

$sesi = $_SESSION['MEMBER'];
if(isset($sesi)){

// memanggil dan memproses file bagian atas
include_once 'top.php';


include_once 'koneksi.php';
include_once 'models/Produk.php';
include_once 'models/Jenis_Produk.php';
include_once 'models/Pelanggan.php';
include_once 'models/Pesanan.php';
include_once 'models/Kartu.php';

include_once 'models/Member.php';
// memanggil dan memproses file bagian menu
include_once 'menu.php';

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <!-- algoritma menangkap url agar masuk kedalam index -->
            <?php
            $url = $_GET['url'];
            if($url == ''){
                include_once 'dashboard.php';
            }
            else if (!empty($url)){
                include_once ''.$url.'.php';
            }
            else {'dashboard.php';}

            ?>
        </div>
    </main>

    <?php
    // memanggil dan memproses file bagian top
    include_once 'bottom.php';

    }else {
        echo'<script> alert("anda tidak boleh masuk");history.back();</script>';
    }
    ?>
    
</div>
