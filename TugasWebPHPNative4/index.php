<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>Tugas Web PHP Native 4 - Wasi</title>
  </head>
  <body>
    <?php include_once 'header.php'; ?>
    <br><br><br><br>
    <div class="main-content">
      <h1>Tugas Web PHP Native 4</h1>
      <section class="card">
        <h3>Detail</h3>
        <div>
          <p>
              Buat update dan delete pada table : pelanggan, pesanan, kartu<br/>
          </p>
        </div>
      </section>
      <section class="card">
        <h3>Routes</h3>
          <div class="data-hasil">
            <div class="scroll">
              <table width=100%>
                <tbody>
                  <tr>
                    <td><a href="admin/connection.php" target="_blank" rel="noopener noreferrer">Check Connection</a></td>
                  </tr>
                  <tr>
                    <td><a href="admin/?url=product" target="_blank" rel="noopener noreferrer">Data Produk</a></td>
                  </tr>
                  <tr>
                    <td><a href="admin/?url=pelanggan" target="_blank" rel="noopener noreferrer">Data Pelanggan</a></td>
                  </tr>
                  <tr>
                    <td><a href="admin/?url=pesanan" target="_blank" rel="noopener noreferrer">Data Pesanan</a></td>
                  </tr>
                  <tr>
                    <td><a href="admin/?url=kartu" target="_blank" rel="noopener noreferrer">Data Kartu</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
            
        <br />
        <br />
      </section>
    </div>
  </body>
<?php
error_reporting(0);
$hal = $_GET['hal'];
if($hal == '/'){
	include_once 'home.php';
} else if( !empty($hal)){
	include_once '' .$hal.'.php';
} else {
	include_once 'home.php';
}

?>


<?php
include_once 'footer.php';
?>
</html>