<?php
    include "koneksi.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query="select * from user where username='$username' and password='$password'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);

    if($row['LEVEL']==1){
        echo "Anda berhasil login, silahkan menuju"?>
        <a href="homeAdmin.html"> Halaman HOME</a>
        <?php
    }else if($row['LEVEL']==2){
        echo "Anda berhasil login, silahkan menuju "?>
        <a href="homeGuest.html">Halaman HOME</a>
        <?php
    }else{
        echo "Anda gagal login. Silahkan "?>
        <a href="loginForm.html">Login Kembali</a>
        <?php
        echo mysqli_error($connect);
    }
?>