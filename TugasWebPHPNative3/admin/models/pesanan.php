<?php
class Pesanan {
    private $koneksi;
    public function __construct(){
        global $db_vendorpos; //instance object koneksi.php
        $this->koneksi = $db_vendorpos;
    }
    public function dataPesanan(){
        $sql = "SELECT * FROM pesanan";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getPesanan($id){
        $sql = "SELECT * FROM pesanan WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
    public function simpan($data){
        $sql = "INSERT INTO pesanan (tanggal, total, pelanggan_id)
        VALUES (?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data); 
    }
}

?>