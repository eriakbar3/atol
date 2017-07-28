<?php $titik = "  "; ?>
<?php
include 'controller/Koneksi.php';
include 'controller/Account.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wedding</title>
    <link rel="stylesheet" href="<?php echo $titik; ?>assets/css/bootstrap.min.css">
    <script src="<?php echo $titik; ?>assets/js/jquery.js"></script>
    <script src="<?php echo $titik; ?>assets/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $titik; ?>assets/css/style.css">

    <style media="screen">
      .main-content{
        min-height: 400px;
      }
      .my-form{
        margin-top: 50px;
      }
    </style>
  </head>
  <body>
    <?php include 'lib/header.php'; ?>
    <div class="main-content">
      <div class="container">
        <?php
        if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
          $acc = Account::login($username,$password);
        } ?>
        <form class="my-form form-horizontal"  action="" method="POST">
          <fieldset>

            <!-- Form Name -->
            <legend>Login</legend>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="username">Username</label>
              <div class="col-md-6">
              <input id="username" name="username" type="text" placeholder="Username" class="form-control " required="">
              </div>
            </div>
            <!-- Password input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="password">Password</label>
              <div class="col-md-6">
                <input id="password" name="password" type="password" placeholder="Password" class="form-control " required="">
              </div>
            </div>

            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="submit"></label>
              <div class="col-md-4">
                <button id="submit" name="submit" class="btn btn-primary" type="submit">login</button>
              </div>
            </div>

          </fieldset>
        </form>


      </div>
    </div>
    <div class="footer">
      <div class="container">
        <div class="col-sm-4">
          <h4>Kelompok 4</h3>
          <ul>
            <li>Eri Akbar Nurjaman (10114160)</li>
            <li>Budi Satria Utama (10114163)</li>
            <li>Anggi Edo Prasetya (10114173)</li>
            <li>Jihad (10114151)</li>
            <li>Dadi Rosadi (10114014)</li>
          </ul>
        </div>
        <div class="col-sm-4">
          <h4>Universitas Komputer Indonesia</h3>
          <p>Kelas ATOL - 7</p>
        </div>
        <div class="col-sm-4">
          <img src="<?php echo $titik; ?>assets/img/unikom.png" alt="" class="img-responsive" style="height:150px;margin-left:125px">

        </div>

      </div>
      <div class="footer-cpr">
        <div class="container">
          <p>Copyright © Kelompok 4 ATOL - 7, 2017</p>
        </div>
      </div>
    </div>
  </body>
</html>
