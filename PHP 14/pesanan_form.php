<?php
// Mengambil data dari pelanggan.php
$model = new Pelanggan();
$pelanggan = $model->dataPelanggan();

error_reporting(0);

$obj_produk = new Pesanan();
$data_produk = $obj_produk->dataPesanan();
$idedit = $_REQUEST['idedit'];
$prod = !empty($idedit) ? $obj_produk->getPesanan($idedit) : array();
?>
<h1 class="mt-4">Input Pesanan</h1>
<br>

<form action="pesanan_controller.php" method="POST">
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Tanggal</label> 
        <div class="col-8">
          <input id="tanggal" name="tanggal" type="text" class="form-control" value="<?= $prod['tanggal'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Total</label> 
        <div class="col-8">
          <input id="total" name="total" type="text" class="form-control" value="<?= $prod['total'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text3" class="col-4 col-form-label">Pelanggan ID</label> 
        <div class="col-8">
        <select id="pelanggan_id" name="pelanggan_id" type="text" class="form-control" value="<?= $prod['pelanggan_id'] ?>">

          <?php
              $no = 1;
              foreach ($pelanggan as $row){
          ?>
          <option value="<?= $no ?>"><?= $row['nama_pelanggan'] ?></option>
          <?php
              $no++;
              }
          ?>

        </select>
          <!-- <input id="pelanggan_id" name="pelanggan_id" type="text" class="form-control" value="<?= $prod['pelanggan_id'] ?>"> -->
        </div>
      </div>
      <div class="form-group row">
      <div class="offset-4 col-8">
          <?php

          if(empty($idedit)){

          ?>
          <button name="proses" type="submit" value="simpan" class="btn btn-success">Submit</button>
          <?php
          }
          else {
            ?>
            <button name="proses" type="submit" value="ubah" class="btn btn-success">Update</button>
            <input type="hidden" name="idx" value="<?= $idedit ?>">
            <?php
          }
          ?>
          <button name="proses" type="submit" value="batal" class="btn btn-primary">Cancel</button>
        </div>
      </div>
    </form>