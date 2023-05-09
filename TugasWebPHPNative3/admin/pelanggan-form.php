<?php

$model = new Pelanggan();
$data_produk = $model->dataPelanggan();

?>

<head>
    <title>Pelanggan - WasiAdmin</title>
</head>
<main>
    <div class="container-fluid px-4">
    <h1 class="mt-4">Add Pelanggan</h1>
    <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
            <li class="breadcrumb-item active">Add Pelanggan</li>
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
                        <h4>Add Pelanggan</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
  <form action="pelanggan-controller.php" method="post">
    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example3">Kode</label>
          <input id="kode" name="kode" type="text" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Nama</label>
          <input id="nama_pelanggan" name="nama_pelanggan" type="text" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Jenis Kelamin</label>
          <input id="jk" name="jk" type="text" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Tempat Lahir</label>
          <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Tanggal Lahir</label>
          <input id="tgl_lahir" name="tgl_lahir" type="text" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Email</label>
          <input id="email" name="email" type="email" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Alamat</label>
          <input id="alamat" name="alamat" type="text" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Kartu</label>
          <input id="kartu_id" name="kartu_id" type="number" class="form-control">
    </div>

    <!-- Submit button -->
    <button type="submit" name="proses" value="simpan"  class="btn btn-primary btn-block mb-4">Submit</button>
</form>
<!-- Modal -->
        </div>
    </div>
    </div>
</main>
