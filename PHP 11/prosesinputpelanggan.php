<?php
require_once 'model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil data dari form
    $kode = $_POST['kode'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['gender'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $email = $_POST['email'];
    $kartu_id = $_POST['kartu_id'];

    // Membuat objek Model
    $model = new Model();

    // Memanggil fungsi insertPelanggan() dengan data yang diperoleh dari form
    $model->inputPelanggan($kode, $nama_pelanggan, $alamat, $jk, $tempat_lahir, $tanggal_lahir, $email, $kartu_id);

    // Tampilkan pesan sukses atau redirect ke halaman lain jika diperlukan
    header("refresh:5;url=index.php?url=insertpelanggan");
    exit();
}
