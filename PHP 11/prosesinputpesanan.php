<?php
require_once 'model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil data dari form
    $tanggal = $_POST['tanggal'];
    $total = $_POST['total'];
    $pelanggan_id = $_POST['pelanggan_id'];
    $status = $_POST['status'];


    // Membuat objek Model
    $model = new Model();

    // Memanggil fungsi insertPelanggan() dengan data yang diperoleh dari form
    $model->inputPesanan($tanggal, $total, $pelanggan_id, $status);

    // Tampilkan pesan sukses atau redirect ke halaman lain jika diperlukan
    header("refresh:5;url=index.php?url=insertpesanan");
    exit();
}
