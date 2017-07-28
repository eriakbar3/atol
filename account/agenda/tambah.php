<?php $titik ='../../' ?>
<?php
$side ='../';
session_start();
include '../../controller/Koneksi.php';
include '../../controller/Account.php';
include '../../controller/Transaksi.php';
include '../../controller/Pembayaran.php';
include '../../controller/Agenda.php';
$pesanan = Transaksi::get();
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
    <link href="<?php echo $titik; ?>assets/vendor/daterangepicker/css/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../assets\vendor\font-awesome\css\font-awesome.min.css">
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
            <div class="panel-heading">Transaksi</div>
            <div class="panel-body">
              <div class="">
                <?php
                  if (isset($_POST['submit'])) {
                    # code...
                    $account = Account::index();
                    $id_pelanggan = $account->id_pelanggan;
                    $judul = $_POST['judul'];
                    $sinopsis = $_POST['sinopsis'];
                    $id_pesanan = $_POST['id_pesanan'];
                    //$gambar = $_POST['gambar'];
                    $imgFile    = $_FILES['file']['name'];
                    $tmpDir     = $_FILES['file']['tmp_name'];
                    $imgSize    = $_FILES['file']['size'];

                    $img_ext    = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
                    $gambar      = md5(time()).''.rand(1000,1000000).".".$img_ext;
                    $upload_dir = '../../image/'.$gambar;
                    move_uploaded_file($tmpDir,$upload_dir);
                    $koneksi = new Koneksi;
                    $squery = $koneksi->koneksi()->query("SELECT * FROM agenda Order By no_agenda DESC LIMIT 1");
                    $resu = $squery->fetch();
                    $no_agenda = $resu['no_agenda'];
                    $id = "AGN";
                    $no_id = (integer) substr($no_agenda,4);
                    $no_id++;
                    $no_agenda_baru = "$id" . sprintf("%03d",$no_id);
                    $insert = Agenda::insert($no_agenda_baru,$id_pelanggan,$judul,$sinopsis,$gambar,$id_pesanan);
                  }
                 ?>
                <form class="" action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Id Pesanan</label>
                    <select class="form-control" name="id_pesanan" style="width:40%">
                      <?php foreach ($pesanan as $pesan): ?>
                        <option value="<?php echo $pesan->id_pesanan; ?>"><?php echo $pesan->id_pesanan; ?>(Status : <?php echo $pesan->status; ?>)</option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="judul" value="" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Sinopsis</label>
                    <textarea name="sinopsis" rows="8" cols="80" class="form-control" style="width:70%"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="file" value="">
                  </div>
                  <input type="submit" name="submit" value="Kirim" class="btn btn-primary">
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <script src="../../assets/vendor/moment/js/moment.min.js" type="text/javascript"></script>
    <script src="<?php echo $titik; ?>assets/vendor/daterangepicker/js/daterangepicker.js" type="text/javascript"></script>
    <script type="text/javascript">
    $("#picker").daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        });
    </script>
  </body>
</html>
