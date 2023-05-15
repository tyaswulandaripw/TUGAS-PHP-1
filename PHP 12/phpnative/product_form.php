<?php
error_reporting(0);

$model = new JenisProduk();
$jenis_produk = $model->JenisProduk();


$obj_produk = new Produk();
$data_produk = $obj_produk->dataProduk();
$idedit = $_REQUEST['idedit'];
$prod = !empty($idedit) ? $obj_produk->getProduk($idedit) : array();
?>
<h1 class="mt-4">Input Produk</h1>
<br>

<form action="produk_controller.php" method="POST">
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Kode</label> 
        <div class="col-8">
          <input id="kode" name="kode" type="text" class="form-control" value="<?= $prod['kode'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Nama Produk</label> 
        <div class="col-8">
          <input id="nama" name="nama" type="text" class="form-control" value="<?= $prod['nama'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text3" class="col-4 col-form-label">Harga Jual</label> 
        <div class="col-8">
          <input id="harga_jual" name="harga_jual" type="number" class="form-control" value="<?= $prod['harga_jual'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text4" class="col-4 col-form-label">Harga Beli</label> 
        <div class="col-8">
          <input id="harga_beli" name="harga_beli" type="number" class="form-control" value="<?= $prod['harga_beli'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text5" class="col-4 col-form-label">Stok</label> 
        <div class="col-8">
          <input id="stok" name="stok" type="number" class="form-control" value="<?= $prod['stok'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text6" class="col-4 col-form-label">Minimal Stok</label> 
        <div class="col-8">
          <input id="min_stok" name="min_stok" type="number" class="form-control" value="<?= $prod['min_stok'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Jenis Produk</label> 
        <div class="col-8">
        <select id="jenis_produk_id" name="jenis_produk_id" type="text" class="form-control" value="<?= $prod['jenis_produk_id'] ?>">

          <?php
              $no = 1;
              foreach ($jenis_produk as $row){
          ?>

          <option value="<?= $no ?>"><?= $row['nama'] ?></option>

          <?php
              $no++;
              }
          ?>

        </select>
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