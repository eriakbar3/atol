<?php

/**
 *
 */
class Account
{
  public function login($username,$password){
    session_start();
    $cons = new Koneksi;
    $sql = $cons->koneksi()->query("SELECT * FROM pelanggan where username = '$username' and password = '$password'");
    if($sql){
      $result =$sql->fetch();
      $_SESSION['username'] = $result['username'];
      $_SESSION['email'] = $result['email'];
      $_SESSION['name'] = $result['nama_pelanggan'];
      header('Location: account');
    }else if(!$sql){
      echo'<script> window.alert("Username atau Password Salah")</script>';
    }
  }
  public function register($name,$username,$email,$password){
    session_start();
    $cons = new Koneksi;
    $result = $cons->koneksi()->exec("INSERT INTO pelanggan (nama_pelanggan, email,username,password) VALUES ('$name','$email','$username','$password')");

    if($result){
      $_SESSION['username'] = $username;
      $_SESSION['email'] = $email;
      $_SESSION['name'] = $name;
      header('Location: account');
    }else {

      echo '<div class="alert alert-danger">Register Gagal</div>';
    }

  }
  public function logout(){
    session_start();
    session_destroy();
    echo "<script>alert('Logout Berhasil'); window.location = 'index.php'</script>";
  }
  public function index(){
    $cons = new Koneksi;
    $query = $cons->koneksi()->prepare("SELECT * FROM pelanggan WHERE username = '$_SESSION[username]'");
    // Jalankan perintah SQL
    $query->execute();
    // Ambil semua data dan masukkan ke variable $data
    $res = $query->fetch(PDO::FETCH_OBJ);
    return $res;
  }
  public function update($name,$email,$alamat){
    $cons = new Koneksi;
    $result = $cons->koneksi()->exec("UPDATE pelanggan SET nama_pelanggan = '$name', email = '$email', alamat = '$alamat' WHERE username = '$_SESSION[username]'");
    if ($result) {
      echo "<div class='alert alert-success'>Berhasil Di Update</div>";

    }else {
      echo "<div class='alert alert-danger'>Gagal Di Update</div>";
    }
  }
  public function ubahpw($password){
    $cons = new Koneksi;
    $result = $cons->koneksi()->exec("UPDATE pelanggan SET nama_pelanggan = '$password' WHERE username = '$_SESSION[username]'");
    if ($result) {
      echo "<div class='alert alert-success'>Berhasil Di Update</div>";

    }else {
      echo "<div class='alert alert-danger'>Gagal Di Update</div>";
    }
  }

}

 ?>
