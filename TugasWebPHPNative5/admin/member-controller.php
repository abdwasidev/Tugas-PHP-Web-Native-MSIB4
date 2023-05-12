<?php
session_start();
include_once 'connection.php';
include_once 'models/Member.php';

$username = $_POST ['username'];
$password = $_POST ['password'];

$data = [
    $username,
    $password
];

$model = new Member();
$rs = $model->cekLogin($data); 

if(!empty($rs)){
    $_SESSION['MEMBER'] = $rs;
    header('Location:index.php?url=product');
}
else {
    ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Username / password anda salah!'
        }).then(()=> history.back());
    </script>
  <?php  
}

?>