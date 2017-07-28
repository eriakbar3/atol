<?php include '../controller/Koneksi.php'; ?>
<?php include '../controller/Agenda.php'; ?>
<?php
  $id = $_GET['id'];
$agenda = Agenda::edit($id); ?>
<div class="col-sm-12">
  <div class="tab-head">
    <h3>Ubah Status Agenda</h3>
  </div>
  <?php
  if (isset($_POST['submit'])) {
    # code...
    $status = $_POST['status'];
    $id = $_GET['id'];
    $update = Agenda::update($id,$status);
  }

   ?>
  <form class="" action="" method="post">
    <div class="form-group">
      <label>No Pembayaran</label>
      <input type="text" name="id" value="<?php echo $agenda->no_agenda ?>" class="form-control" style="width:50%">
    </div>
    <div class="form-group">
      <label>Status</label>
      <select class="form-control" name="status" style="width:10%;">
        <option value="diterima">Diterima</option>
        <option value="batal">Batal</option>
      </select>
    </div>

    <input type="submit" name="submit" value="Tambah" class="btn btn-default">
  </form>
</div>
