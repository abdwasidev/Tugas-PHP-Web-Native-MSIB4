<?php

$model = new Produk();
$data_produk = $model->dataProduk();


$sesi = $_SESSION['MEMBER'];
if(isset($sesi)){

?>

<head>
    <title>Product - WasiAdmin</title>
</head>
<main>
    <div class="container-fluid px-4">
    <h1 class="mt-4">Product</h1>
    <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
            <li class="breadcrumb-item active">Product</li>
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
                        <h4>Data Product</h4>
                    </div>
                </div>
                <?php 
                if($sesi['role'] != 'staff'){
                ?> 
                <div class="col">
                    <a href="?url=product-form">
                    <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop1">
                        Add New Product
                    </button>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="card-body">
        <table id="datatablesSimple">
            <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Stok</th>
                <th>Minimal Stok</th>
                <th>Jenis Produk </th>
                <th>Action</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Stok</th>
                <th>Minimal Stok</th>
                <th>Jenis Produk </th>
                <th>Action</th>
            </tr>
            </tfoot>
            <tbody>
                <?php
                $no = 1;
                foreach($data_produk as $row){

                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $row['kode']?></td>
                    <td><?= $row['nama']?></td>
                    <td><?= $row['harga_beli']?></td>
                    <td><?= $row['harga_jual']?></td>
                    <td><?= $row['stok']?></td>
                    <td><?= $row['min_stok']?></td>
                    <td><?= $row['jenis_produk_id']?></td>
                    <td>
                        <form action="produk_controller.php" method="POST">
                            <a class="btn btn-info btn-sm" href="?url=product-detail&id=<?= $row ['id'] ?>">Detail</a>
                            <a class="btn btn-warning btn-sm" href="?url=product-form&idedit=<?= $row ['id']?>">Ubah</a>
                            <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" 
                            onclick="return confirm('Anda yakin akan dihapus?')">Hapus</button>

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

<?php

} else {
    ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Anda tidak memiliki akses!'
        }).then(()=> history.back());
    </script>
  <?php  
}

?>