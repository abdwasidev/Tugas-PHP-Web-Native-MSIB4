<?php
class Member {
    private $koneksi;
    public function __construct(){
        global $db_vendorpos; //instance object koneksi.php
        $this->koneksi = $db_vendorpos;
    }
    public function cekLogin($data){
        $sql = "SELECT * FROM member WHERE username = ? AND password = SHA1(MD5(SHA1(?)))";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
        $rs = $ps->fetch();
        return $rs;
    }
}

?>