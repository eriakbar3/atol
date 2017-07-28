<?php $titik ='../../' ?>
<?php
$side ='../';
session_start();
include '../../controller/Koneksi.php';
include '../../controller/Account.php';
$user = Account::index();
if (!isset($_SESSION['username'])){
  header("Location:../login.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo $titik; ?>assets/css/bootstrap.min.css">
    <script src="<?php echo $titik; ?>assets/js/jquery.js"></script>
    <script src="<?php echo $titik; ?>assets/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $titik; ?>assets/css/style.css">
    <style media="screen">
      .main-content{
        margin-top: 50px;
      }
    </style>
  </head>
  <body>
    <?php include '../../lib/header.php'; ?>
    <div class="main-content">
      <div class="container">
        <?php include '../side.php'; ?>
        <div class="col-sm-9">

          <div class="panel panel-default">
            <div class="panel-heading">Edit Profile</div>
            <div class="panel-body">
              <?php
              if(isset($_POST['submit'])){
                $name = $_POST['nama'];
                $email = $_POST['email'];
                $alamat = $_POST['alamat'];
                $u = Account::update($name,$email,$alamat);

              }
               ?>
              <div class="col-sm-6">
                <form class="" action="?method=update" method="post">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" value="<?php echo $user->nama_pelanggan;?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="<?php echo $user->email;?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" rows="8" cols="80" class="form-control"><?php echo $user->alamat;?></textarea>
                  </div>
                  <input type="submit" name="submit" value="submit" class="btn btn-primary">
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </body>
</html>
