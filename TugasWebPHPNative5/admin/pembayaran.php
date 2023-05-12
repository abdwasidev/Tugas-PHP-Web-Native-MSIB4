<?php

$model = new Pembayaran();
$data_pesanan = $model->dataPembayaran();

?>

<head>
    <title>Pembayaran - WasiAdmin</title>
</head>
<main>
    <div class="container-fluid px-4">
    <h1 class="mt-4">Pembayaran</h1>
    <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
            <li class="breadcrumb-item active">Pembayaran</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
            <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>.
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Pembayaran
        </div>
        <div class="card-body">
        <table id="datatablesSimple">
            <thead>
            <tr>
                <th>No</th>
                <th>No Kwitansi</th>
                <th>Tanggal</th>
                <th>Jumlah</th>
                <th>ke</th>
                <th>Status Pembayaran</th>
                <th>Pesanan</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>No</th>
                <th>No Kwitansi</th>
                <th>Tanggal</th>
                <th>Jumlah</th>
                <th>ke</th>
                <th>Status Pembayaran</th>
                <th>Pesanan</th>
            </tr>
            </tfoot>
            <tbody>
                <?php
                $no = 1;
                foreach($data_pesanan as $row){

                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $row['nokuitansi']?></td>
                    <td><?= $row['tanggal']?></td>
                    <td>Rp.<?= $row['jumlah']?></td>
                    <td><?= $row['ke']?></td>
                    <td><?= $row['status_pembayaran']?></td>
                    <td><?= $row['pesanan_id']?></td>
                </tr>
                <?php
                $no++; 
            } 
                ?>
            </tbody>
        </table>
        </div>
    </div>
    </div>
</main>