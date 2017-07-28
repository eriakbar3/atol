<?php $titik ='../../' ?>
<?php
 $side ='../';
 session_start();
include '../../controller/Koneksi.php';
include '../../controller/Account.php';
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
            <div class="panel-heading">Ubah Password</div>
            <div class="panel-body">
              <?php
              if(isset($_POST['submit'])){
                $con = new Koneksi;
                $result = $con->koneksi()->query("SELECT * FROM pelanggan WHERE username = '$_SESSION[username]'");
                $res = $result->fetch();
                $pw_lama = md5($_POST['password_lama']);
                $pw = $_POST['password'];
                $pw_cf = $_POST['password_cf'];
                if ($pw_lama != $res['password'] ) {
                  # code...
                  echo "<div class='alert alert-danger'>Password Lama Salah</div>";
                }elseif($pw != $pw_cf){
                  echo "<div class='alert alert-danger'>Confirm Password Salah</div>";
                }else{
                    $u = Account::ubahpw($pw);
                }
                //echo $res['password'];
              }
               ?>
              <div class="col-sm-6">
                <form class="" action="" method="post">
                  <div class="form-group">
                    <label>Password Lama</label>
                    <input type="password" name="password_lama" value="" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Password Baru</label>
                    <input type="password" name="password" value="" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="password_cf" value="" class="form-control">
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
