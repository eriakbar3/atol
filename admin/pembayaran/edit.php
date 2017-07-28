<?php include '../controller/Koneksi.php'; ?>
<?php include '../controller/Pembayaran.php'; ?>
<?php
  $id = $_GET['id'];
$pembayaran = Pembayaran::edit($id); ?>
<div class="col-sm-12">
  <div class="tab-head">
    <h3>Ubah Status Pembayaran</h3>
  </div>
  <?php
  if (isset($_POST['submit'])) {
    # code...
    $status = $_POST['status'];
    $id = $_GET['id'];
    $update = Pembayaran::update($id,$status);
  }

   ?>
  <form class="" action="/" method="post">
    <div class="form-group">
      <label>No Pembayaran</label>
      <input type="text" name="nama" value="<?php echo $pembayaran->no_pembayaran ?>" class="form-control" style="width:50%">
    </div>
    <div class="form-group">
      <label>Status</label>
      <select class="form-control" name="status" style="width:10%;">
        <option value="sukses">Sukses</option>
        <option value="gagal">Gagal</option>
      </select>
    </div>

    <input type="submit" name="submit" value="Tambah" class="btn btn-default">
  </form>
</div>
