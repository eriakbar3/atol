<?php $titik ='../' ?>
<?php
$side ="";
session_start();
include '../controller/Koneksi.php';
include '../controller/Account.php';
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
    <?php include '../lib/header.php'; ?>
    <div class="main-content">
      <div class="container">
        <?php include 'side.php'; ?>
        <div class="col-sm-9">
          <div class="panel panel-default">
            <div class="panel-heading">My Account</div>
            <div class="panel-body">
              <div class="col-sm-6">
                <table class="table">
                  <tr>
                    <td>Nama</td>
                    <td><?php echo $user->nama_pelanggan ?></td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td><?php echo $user->alamat ?></td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td><?php echo $user->email ?></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </body>
</html>
