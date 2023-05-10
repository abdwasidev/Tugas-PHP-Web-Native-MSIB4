<?php
include_once 'connection.php';
include_once 'models/pesanan.php';

$kode = $_POST['tanggal'];
$nama = $_POST['total'];
$jk = $_POST['pelanggan_id'];

$data = [
    $kode,
    $nama,
    $jk,
];
$model = new Pesanan();
$tombol = $_REQUEST['proses'];
switch($tombol){
    case 'simpan':
        $model->simpan($data); 
        break;
    // case 'ubah':
    //     $data[] = $_POST['idx']; $model->ubah($data);break;
    default:
    header('Location:index.php?url=pesanan');
    break;
}
header('Location:index.php?url=pesanan');

?>