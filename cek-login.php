<?php
include 'controller/Koneksi.php';
include 'controller/Account.php';
if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = md5($_POST['password']);
echo $username.'<br>';
echo $password;
  $acc = Account::login($username,$password);
}
?>
