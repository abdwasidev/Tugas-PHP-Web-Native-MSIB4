<?php

include_once 'connection.php';
include_once 'models/produk.php';
include_once 'models/jenis_produk.php';
include_once 'models/kartu.php';
include_once 'models/pelanggan.php';
include_once 'models/pembayaran.php';
include_once 'models/pesanan.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link
      href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css"
      rel="stylesheet"
    />
    <link href="./../webassets/css/styles.css" rel="stylesheet" />
    <script
      src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body class="sb-nav-fixed">
    <?php 
        include_once 'components/top.php';
    ?>
    <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
        <?php 
            include_once 'components/menu.php';
        ?>
      </div>
      <div id="layoutSidenav_content">
        <?php
          error_reporting(E_ERROR | E_PARSE);
          $url = $_GET['url'];
            if (!empty($url)){
                include_once ''.$url.'.php';
            } else { 
              include_once 'dashboard.php';
            }
            include_once '../components/bottom.php';
        ?>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="./../webassets/js/scripts.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="./../webassets/assets/demo/chart-area-demo.js"></script>
    <script src="./../webassets/assets/demo/chart-bar-demo.js"></script>
    <script src="./../webassets/assets/demo/chart-pie-demo.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="./../webassets/js/datatables-simple-demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
</html>
