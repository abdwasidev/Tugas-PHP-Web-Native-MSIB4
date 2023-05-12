<?php

$model = new Pelanggan();
$data_produk = $model->dataPelanggan();
$idedit = $_REQUEST['idedit'];
$prod = !empty($idedit) ? $model->getPelanggan($idedit) : array() ;
$breadcrumb_name =  empty($idedit) ? 'Add Pelanggan' : 'Update Pelanggan';

?>

<head>
    <title><?php echo $breadcrumb_name ?> - WasiAdmin</title>
</head>
<main>
    <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo $breadcrumb_name ?></h1>
    <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="./?url=pelanggan">Pelanggan</a></li>
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
  <form action="pelanggan-controller.php" method="post">
    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example3">Kode</label>
          <input id="kode" name="kode" type="text" value="<?= empty($idedit) ? '' : $prod['kode']; ?>" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Nama</label>
          <input id="nama_pelanggan" name="nama_pelanggan" value="<?= empty($idedit) ? '' : $prod['nama_pelanggan']; ?>" type="text" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Jenis Kelamin</label>
          <input id="jk" name="jk" type="text" value="<?= empty($idedit) ? '' : $prod['jk']; ?>" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Tempat Lahir</label>
          <input id="tmp_lahir" name="tmp_lahir" type="text" value="<?= empty($idedit) ? '' : $prod['tmp_lahir']; ?>" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Tanggal Lahir</label>
          <input id="tgl_lahir" name="tgl_lahir" type="text" value="<?= empty($idedit) ? '' : $prod['tgl_lahir']; ?>" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Email</label>
          <input id="email" name="email" type="email" value="<?= empty($idedit) ? '' : $prod['email']; ?>" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Alamat</label>
          <input id="alamat" name="alamat" type="text" value="<?= empty($idedit) ? '' : $prod['alamat']; ?>" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Kartu</label>
          <input id="kartu_id" name="kartu_id" type="number" value="<?= empty($idedit) ? '' : $prod['kartu_id']; ?>" class="form-control">
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
<!-- Modal -->
        </div>
    </div>
    </div>
</main>
