<?php

$model = new Pesanan();
$data_produk = $model->dataPesanan();

?>

<head>
    <title>Pesanan - WasiAdmin</title>
</head>
<main>
    <div class="container-fluid px-4">
    <h1 class="mt-4">Add Pesanan</h1>
    <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
            <li class="breadcrumb-item active">Add Pesanan</li>
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
                        <h4>Add Pesanan</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
  <form action="pesanan-controller.php" method="post">

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Tanggal</label>
          <input id="tanggal" name="tanggal" type="text" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Total</label>
          <input id="total" name="total" type="number" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Pelanggan</label>
          <input id="pelanggan_id" name="pelanggan_id" type="number" class="form-control">
    </div>

    <!-- Submit button -->
    <button type="submit" name="proses" value="simpan"  class="btn btn-primary btn-block mb-4">Submit</button>
</form>
<!-- Modal -->
        </div>
    </div>
    </div>
</main>
