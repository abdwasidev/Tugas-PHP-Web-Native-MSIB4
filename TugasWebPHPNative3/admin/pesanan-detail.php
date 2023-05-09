<?php
$id = $_REQUEST['id'];
$model = new Pesanan();
$produk = $model->getPesanan($id);

?>

<head>
    <title>Detail Pesanan - WasiAdmin</title>
</head>
<main>
    <div class="container-fluid px-4">
    <h1 class="mt-4">Detail Pesanan<n</h1>
    <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
            <li class="breadcrumb-item active">Detail Pesanan</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <div type="button" class="">
                        <h4>Detail Pesanan</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="fw-bold">Tanggal</div>
                <?= $produk['tanggal'] ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="fw-bold">Total</div>
                <?= $produk['total'] ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="fw-bold">Pelanggan</div>
                <?= $produk['pelanggan_id'] ?>
            </li>
        </div>
    </div>
    </div>
</main>
