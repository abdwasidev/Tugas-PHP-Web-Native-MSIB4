<?php
class Pelanggan {
    private $koneksi;
    public function __construct(){
        global $db_vendorpos; //instance object koneksi.php
        $this->koneksi = $db_vendorpos;
    }

    public function dataPelanggan(){
        $sql = "SELECT * FROM pelanggan";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getPelanggan($id){
        $sql = "SELECT * FROM pelanggan WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
    public function simpan($data){
        $sql = "INSERT INTO pelanggan (kode, nama_pelanggan, jk, tmp_lahir, tgl_lahir, email, alamat, kartu_id)
        VALUES (?,?,?,?,?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data); 
    }
}

?>