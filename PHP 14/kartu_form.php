<?php
error_reporting(0);

$obj_produk = new Kartu();
$data_produk = $obj_produk->dataKartu();
$idedit = $_REQUEST['idedit'];
$prod = !empty($idedit) ? $obj_produk->getKartu($idedit) : array();
?>
<h1 class="mt-4">Input Kartu</h1>
<br>

<form action="kartu_controller.php" method="POST">
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Kode</label> 
        <div class="col-8">
          <input id="kode" name="kode" type="text" class="form-control" value="<?= $prod['kode'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Nama</label> 
        <div class="col-8">
          <input id="nama" name="nama" type="text" class="form-control" value="<?= $prod['nama'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text3" class="col-4 col-form-label">Diskon</label> 
        <div class="col-8">
          <input id="diskon" name="diskon" type="text" class="form-control" value="<?= $prod['diskon'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text4" class="col-4 col-form-label">Iuran</label> 
        <div class="col-8">
          <input id="iuran" name="iuran" type="text" class="form-control" value="<?= $prod['iuran'] ?>">
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