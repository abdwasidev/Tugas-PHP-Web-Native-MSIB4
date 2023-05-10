<?php

$model = new Kartu();
$data_produk = $model->dataKartu();

?>

<head>
    <title>Kartu - WasiAdmin</title>
</head>
<main>
    <div class="container-fluid px-4">
    <h1 class="mt-4">Add Kartu</h1>
    <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
            <li class="breadcrumb-item active">Add Kartu</li>
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
                        <h4>Add Kartu</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
  <form action="kartu-controller.php" method="post">
    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example3">Kode</label>
          <input id="kode" name="kode" type="text" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Nama</label>
          <input id="nama" name="nama" type="text" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Diskon</label>
          <input id="diskon" name="diskon" type="text" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Iuran</label>
          <input id="iuran" name="iuran" type="text" class="form-control">
    </div>
    <!-- Submit button -->
    <button type="submit" name="proses" value="simpan"  class="btn btn-primary btn-block mb-4">Submit</button>
</form>
<!-- Modal -->
        </div>
    </div>
    </div>
</main>
