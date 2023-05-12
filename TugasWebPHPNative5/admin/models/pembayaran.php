<?php
class Pembayaran {
    private $koneksi;
    public function __construct(){
        global $db_vendorpos; //instance object koneksi.php
        $this->koneksi = $db_vendorpos;
    }
    public function dataPembayaran(){
        $sql = "SELECT * FROM pembayaran";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}

?>