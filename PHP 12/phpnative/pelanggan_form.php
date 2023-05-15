<?php
// Mengambil data dari Kartu.php
$model = new Kartu();
$pelanggan = $model->dataKartu();

error_reporting(0);

$obj_produk = new Pelanggan();
$data_produk = $obj_produk->dataPelanggan();
$idedit = $_REQUEST['idedit'];
$prod = !empty($idedit) ? $obj_produk->getPelanggan($idedit) : array();
?>
<h1 class="mt-4">Input Pelanggan</h1>
<br>

<form action="pelanggan_controller.php" method="POST">
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Kode</label> 
        <div class="col-8">
          <input id="kode" name="kode" type="text" class="form-control" value="<?= $prod['kode'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Nama Pelanggan</label> 
        <div class="col-8">
          <input id="nama_pelanggan" name="nama_pelanggan" type="text" class="form-control" value="<?= $prod['nama_pelanggan'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text3" class="col-4 col-form-label">Jenis Kelamin</label> 
        <div class="col-8">
          <select id="jk" name="jk" type="text" class="form-control" value="<?= $prod['jk'] ?>">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
          </select>
          <!-- <input id="jk" name="jk" type="text" class="form-control" value="<?= $prod['jk'] ?>"> -->
        </div>
      </div>
      <div class="form-group row">
        <label for="text4" class="col-4 col-form-label">Tempat Lahir</label> 
        <div class="col-8">
          <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" value="<?= $prod['tmp_lahir'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text5" class="col-4 col-form-label">Tanggal Lahir</label> 
        <div class="col-8">
          <input id="tgl_lahir" name="tgl_lahir" type="text" class="form-control" value="<?= $prod['tgl_lahir'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text6" class="col-4 col-form-label">Email</label> 
        <div class="col-8">
          <input id="email" name="email" type="text" class="form-control" value="<?= $prod['email'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Kartu ID</label> 
        <div class="col-8">
        <select id="kartu_id" name="kartu_id" type="text" class="form-control" value="<?= $prod['kartu_id'] ?>">

          <?php
              $no = 1;
              foreach ($pelanggan as $row){
          ?>
          <option value="<?= $no ?>"><?= $row['nama'] ?></option>
          <?php
              $no++;
              }
          ?>

        </select>
          <!-- <input id="kartu_id" name="kartu_id" type="text" class="form-control" value="<?= $prod['kartu_id'] ?>"> -->
        </div>
      </div> 
      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Alamat</label> 
        <div class="col-8">
          <input id="alamat" name="alamat" type="text" class="form-control" value="<?= $prod['alamat'] ?>">
        </div>
      </div> 
      <div class="form-group row">
      <div class="offset-4 col-8">
          <?php

          if(empty($idedit)){

          ?>
          <button name="proses" type="submit" value="simpan" class="btn btn-primary">Submit</button>
          <?php
          }
          else {
            ?>
            <button name="proses" type="submit" value="ubah" class="btn btn-primary">Update</button>
            <input type="hidden" name="idx" value="<?= $idedit ?>">
            <?php
          }
          ?>
          <button name="proses" type="submit" value="batal" class="btn btn-primary">Cancel</button>
        </div>
      </div>
    </form>