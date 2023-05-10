<?php

$model = new Kartu();
$data_kartu = $model->dataKartu();

?>

<head>
    <title>Kartu - WasiAdmin</title>
</head>
<main>
    <div class="container-fluid px-4">
    <h1 class="mt-4">Kartu</h1>
    <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
            <li class="breadcrumb-item active">Kartu</li>
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
                        <h4>Data Kartu</h4>
                    </div>
                </div>
                <div class="col">
                    <a href="?url=kartu-form">
                    <button type="button" class="btn btn-primary">
                        Add New Kartu
                    </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
        <table id="datatablesSimple">
            <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Diskon</th>
                <th>Iuran</th>
                <th>Action</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Diskon</th>
                <th>Iuran</th>
                <th>Action</th>
            </tr>
            </tfoot>
            <tbody>
                <?php
                $no = 1;
                foreach($data_kartu as $row){

                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $row['kode']?></td>
                    <td><?= $row['nama']?></td>
                    <td><?= $row['diskon']?>%</td>
                    <td><?= $row['iuran']?></td>
                    <td>
                        <form action="produk_controller.php" method="POST">
                            <a class="btn btn-info btn-sm" href="?url=kartu-detail&id=<?= $row ['id'] ?>">Detail</a>
                            <a class="btn btn-warning btn-sm">Ubah</a>
                            <a class="btn btn-danger btn-sm">Hapus</a>

                            <input type="hidden" name="idx" value="<?= $row['id']?>">
                        </form>
                    </td>
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