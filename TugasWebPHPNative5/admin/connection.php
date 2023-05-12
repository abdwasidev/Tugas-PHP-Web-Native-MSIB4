<?php
$dbname = 'vendorposdb';
$db_ku = 'mysql:dbname='.$dbname.';host=localhost';
$db_user = 'root'; $password = '';
try {
    $db_vendorpos = new PDO($db_ku, $db_user, $password);
    $db_vendorpos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo '<center><h1>Connection to the Database is success</h1></center>';
} catch (PDOException $e) {
    echo 'Terjadi Kesalahan Koneksi DB dengan sebab: ' .
    $e->getMessage();
}
