<?php

$model = new Pesanan();
$data_produk = $model->dataPesanan();
$idedit = $_REQUEST['idedit'];
$prod = !empty($idedit) ? $model->getPesanan($idedit) : array() ;
$breadcrumb_name =  empty($idedit) ? 'Add Pesanan' : 'Update Pesanan';

?>

<head>
    <title><?php echo $breadcrumb_name ?> - WasiAdmin</title>
</head>
<main>
    <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo $breadcrumb_name ?></h1>
    <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="./?url=pesanan">Pesanan</a></li>
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
  <form action="pesanan-controller.php" method="post">

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Tanggal</label>
          <input id="tanggal" name="tanggal" type="text" value="<?= empty($idedit) ? '' : $prod['tanggal']; ?>" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Total</label>
          <input id="total" name="total" type="number" value="<?= empty($idedit) ? '' : $prod['total']; ?>" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Pelanggan</label>
          <input id="pelanggan_id" name="pelanggan_id" type="number" value="<?= empty($idedit) ? '' : $prod['pelanggan_id']; ?>" class="form-control">
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
