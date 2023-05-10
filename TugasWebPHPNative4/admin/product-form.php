<?php

$model = new Produk();
$data_produk = $model->dataProduk();

?>

<head>
    <title>Product - WasiAdmin</title>
</head>
<main>
    <div class="container-fluid px-4">
    <h1 class="mt-4">Add Product</h1>
    <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
            <li class="breadcrumb-item active">Add Product</li>
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
                        <h4>Add Product</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
  <form action="product-controller.php" method="post">
    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example3">Kode</label>
          <input id="kode" name="kode" type="text" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Nama</label>
          <input id="nama" name="nama" type="text" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Harga Jual</label>
          <input id="harga_jual" name="harga_jual" type="text" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Harga Beli</label>
          <input id="harga_beli" name="harga_beli" type="text" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Stok</label>
          <input id="stok" name="stok" type="text" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Minimal Stok</label>
          <input id="min_stok" name="min_stok" type="text" class="form-control">
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example4">Jenis Produk</label>
          <input id="jenis_produk_id" name="jenis_produk_id" type="text" class="form-control">
    </div>

    <!-- Submit button -->
    <button type="submit" name="proses" value="simpan"  class="btn btn-primary btn-block mb-4">Submit</button>
</form>
<!-- Modal -->
        </div>
    </div>
    </div>
</main>
