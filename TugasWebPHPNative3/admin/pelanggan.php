<?php

$model = new Pelanggan();
$data_pelanggan = $model->dataPelanggan();

?>

<head>
    <title>Pelanggan - WasiAdmin</title>
</head>
<main>
    <div class="container-fluid px-4">
    <h1 class="mt-4">Pelanggan</h1>
    <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
            <li class="breadcrumb-item active">Pelanggan</li>
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
                        <h4>Data Pelanggan</h4>
                    </div>
                </div>
                <div class="col">
                    <a href="?url=pelanggan-form">
                    <button type="button" class="btn btn-primary">
                        Add New Pelanggan
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
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Kartu</th>
                <th>Action</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Kartu</th>
                <th>Action</th>
            </tr>
            </tfoot>
            <tbody>
                <?php
                $no = 1;
                foreach($data_pelanggan as $row){

                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $row['kode']?></td>
                    <td><?= $row['nama_pelanggan']?></td>
                    <td><?= $row['jk']?></td>
                    <td><?= $row['tmp_lahir']?></td>
                    <td><?= $row['tgl_lahir']?></td>
                    <td><?= $row['email']?></td>
                    <td><?= $row['alamat']?></td>
                    <td><?= $row['kartu_id']?></td>
                    <td>
                        <form action="produk_controller.php" method="POST">
                            <a class="btn btn-info btn-sm" href="?url=pelanggan-detail&id=<?= $row ['id'] ?>">Detail</a>
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