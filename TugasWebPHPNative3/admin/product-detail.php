<?php
$id = $_REQUEST['id'];
$model = new Produk();
$produk = $model->getProduk($id);

?>

<head>
    <title>Detail Produk - WasiAdmin</title>
</head>
<main>
    <div class="container-fluid px-4">
    <h1 class="mt-4">Detail Produk<n</h1>
    <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
            <li class="breadcrumb-item active">Detail Produk</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <div type="button" class="">
                        <h4>Detail Produk</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="fw-bold">Kode</div>
                <?= $produk['kode'] ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="fw-bold">Nama</div>
                <?= $produk['nama'] ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="fw-bold">Harga Beli</div>
                Rp.<?= $produk['harga_beli'] ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="fw-bold">Harga Jual</div>
                Rp.<?= $produk['harga_jual'] ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="fw-bold">Stok</div>
                <?= $produk['stok'] ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="fw-bold">Min. Stok</div>
                <?= $produk['min_stok'] ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="fw-bold">Jenis Produk</div>
                <?= $produk['jenis_produk_id'] ?>
            </li>
        </div>
    </div>
    </div>
</main>
