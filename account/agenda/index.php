<?php $titik ='../../' ?>
<?php $side ='../' ?>
<?php
$side ='../';
session_start();
include '../../controller/Koneksi.php';
include '../../controller/Paket.php';
include '../../controller/Agenda.php';
include '../../controller/Account.php';
$account = Account::index();
$id_pelanggan = $account->id_pelanggan;
$agenda = Agenda::getByUser($id_pelanggan);
$koneksi = new Koneksi;
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
            <div class="panel-heading">Agenda</div>
            <div class="panel-body">
              <div class="col-sm-12">
                <a href="tambah.php" class="pull-right btn btn-primary">Buat Agenda</a>
              </div>
              <div class="">
                <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Id Pesanan</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($agenda as $agenda): ?>
                        <tr>
                          <td><?php echo $agenda->no_agenda; ?></td>
                          <td><?php echo $agenda->judul; ?></td>
                          <td><?php echo $agenda->id_pesanan; ?></td>
                          <td><?php echo $agenda->tgl_acara; ?></td>
                          <td><?php echo $agenda->status_agenda; ?></td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </body>
</html>
