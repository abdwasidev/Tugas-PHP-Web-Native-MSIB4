<?php
$id = $_REQUEST['id'];
$model = new Kartu();
$produk = $model->getKartu($id);

?>
<head>
    <title>Detail Kartu - WasiAdmin</title>
</head>
<main>
    <div class="container-fluid px-4">
    <h1 class="mt-4">Detail Kartu<n</h1>
    <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="./?url=kartu">Kartu</a></li>
            <li class="breadcrumb-item active">Detail Kartu</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <div type="button" class="">
                        <h4>Detail Kartu</h4>
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
                <div class="fw-bold">Diskon</div>
                <?= $produk['diskon'] ?>%
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="fw-bold">Iuran</div>
                Rp.<?= $produk['iuran'] ?>
            </li>
        </div>
    </div>
    </div>
</main>