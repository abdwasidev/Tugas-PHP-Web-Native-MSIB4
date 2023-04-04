<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- <title>Auth - SB Admin</title> -->
        <link href="./../../webassets/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="layoutError">
            <div id="layoutError_content">
                <?php
                error_reporting(E_ERROR | E_PARSE);
                $url = $_GET['url'];
                    if (!empty($url)){
                        include_once ''.$url.'.php';
                    } else { 
                    include_once '404.php';
                    }
                ?>
            </div>
            <div id="layoutError_footer">
                <?php 
                    include_once '../components/bottom.php';
                ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="./../../webassets/js/scripts.js"></script>
    </body>
</html>
