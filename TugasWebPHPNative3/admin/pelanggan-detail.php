<?php
$id = $_REQUEST['id'];
$model = new Pelanggan();
$produk = $model->getPelanggan($id);

?>
<head>
    <title>Detail Pelanggan - WasiAdmin</title>
</head>
<main>
    <div class="container-fluid px-4">
    <h1 class="mt-4">Detail Pelanggan<n</h1>
    <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
            <li class="breadcrumb-item active">Detail Pelanggan</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <div type="button" class="">
                        <h4>Detail Pelanggan</h4>
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
                <div class="fw-bold">Nama Pelanggan</div>
                <?= $produk['nama_pelanggan'] ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="fw-bold">Jenis Kelamin</div>
                <?= $produk['jk'] ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="fw-bold">Tempat Lahir</div>
                Rp.<?= $produk['tmp_lahir'] ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="fw-bold">Tanggal Lahir</div>
                <?= $produk['tgl_lahir'] ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="fw-bold">Email</div>
                <?= $produk['email'] ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="fw-bold">Alamat</div>
                <?= $produk['alamat'] ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="fw-bold">Kartu</div>
                <?= $produk['kartu_id'] ?>
            </li>
        </div>
    </div>
    </div>
</main>