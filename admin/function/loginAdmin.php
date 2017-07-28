<?php

  include "koneksi.php";

    global $con;

    if(isset($_POST['submit'])){

      $username = $_POST['username'];
      $password = md5($_POST['password']);

      $sql= "select * from admin where username = '$username'";
      $hasil = mysqli_query($con, $sql);
      $data = mysqli_fetch_array($hasil);

      if(($username == $data['username']) & ($password == $data['password'])){
        session_start();
    		$_SESSION['username'] = $data['username'];
    		$_SESSION['password'] = $data['password'];
    		echo "<script>window.location='../home.php'</script>";
      }else {
        echo "<script>window.location='../login.php'</script>";
      }
    }


 ?>
