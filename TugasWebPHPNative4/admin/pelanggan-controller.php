<?php
include_once 'connection.php';
include_once 'models/pelanggan.php';

$kode = $_POST['kode'];
$nama = $_POST['nama_pelanggan'];
$jk = $_POST['jk'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$kartu_id = $_POST['kartu_id'];

$data = [
    $kode,
    $nama,
    $jk,
    $tmp_lahir,
    $tgl_lahir,
    $email,
    $alamat,
    $kartu_id
];
$model = new Pelanggan();
$tombol = $_REQUEST['proses'];
switch($tombol){
    case 'simpan':
        $model->simpan($data); 
        break;
    // case 'ubah':
    //     $data[] = $_POST['idx']; $model->ubah($data);break;
    default:
    header('Location:index.php?url=pelanggan');
    break;
}
header('Location:index.php?url=pelanggan');

?>