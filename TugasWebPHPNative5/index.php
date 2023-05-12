<?php
error_reporting(0);
include_once 'admin/connection.php';
include_once 'admin/models/product.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>Tugas Web PHP Native 5 - Wasi</title>
  </head>
  <body>
    <?php include_once 'header.php'; ?>
  </body>
<?php
error_reporting(0);
$url = $_GET['url'];
if($url == '/'){
	include_once 'home.php';
} else if( !empty($url)){
	include_once '' .$url.'.php';
} else {
	include_once 'home.php';
}

?>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php
include_once 'footer.php';
?>
</html>