<?php

$model = new Kartu();
$data_produk = $model->dataKartu();
$idedit = $_REQUEST['idedit'];
$prod = !empty($idedit) ? $model->getKartu($idedit) : array() ;
$breadcrumb_name =  empty($idedit) ? 'Add Kartu' : 'Update Kartu';

?>

<head>
    <title><?php echo $breadcrumb_name ?> - WasiAdmin</title>
</head>
<main>
    <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo $breadcrumb_name ?></h1>
    <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="./?url=pesanan">Kartu</a></li>
            <li class="breadcrumb-item active"><?php echo $breadcrumb_name ?></li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
            <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>.
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <div type="button" class="">
                        <h4><?php echo $breadcrumb_name ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
  <form action="kartu-controller.php" method="post">
    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example3">Kode</label>
          <input id="kode" name="kode" type="text" value="<?= empty($idedit) ? '' : $prod['kode']; ?>" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Nama</label>
          <input id="nama" name="nama" type="text" value="<?= empty($idedit) ? '' : $prod['nama']; ?>" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Diskon</label>
          <input id="diskon" name="diskon" type="text" value="<?= empty($idedit) ? '' : $prod['diskon']; ?>" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Iuran</label>
          <input id="iuran" name="iuran" type="text" value="<?= empty($idedit) ? '' : $prod['iuran']; ?>" class="form-control">
    </div>

      <div class="form-group row">
        <div class="col-2">
          <?php

          if(empty($idedit)){

          ?>
          <button name="proses" type="submit" name="proses" value="simpan" class="btn btn-primary btn-block mb-4">Submit</button>
          <?php
          }
          else {
            ?>
            <button name="proses" type="submit" value="ubah" class="btn btn-primary btn-block mb-4">Update</button>
            <input type="hidden" name="idx" value="<?= $idedit ?>">
            <?php
          }
          ?>
          <button name="proses" type="submit" value="batal" class="btn btn-primary btn-block mb-4">Cancel</button>
        </div>
      </div>
</form>
<!-- Modal -->
        </div>
    </div>
    </div>
</main>
