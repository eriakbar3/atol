<?php

  include "function/pemesanan.php";

  $db = new pemesanan();

  $id_pesanan = $_GET['id_pesanan'];

  if(isset($_POST['id_pesanan']))
  {

    $id_pesanan = $_POST['id_pesanan'];
    $status = $_POST['status'];
       //insert data pemesan via method
    $db->updatePemesanan($id_pesanan, $status);


  }
 ?>



<div class="col-sm-12">
  <div class="tab-head">
    <h3>Status Pemesanan "<?php echo $db->bacaDataPemesanan('status',$id_pesanan); ?>"</h3>
  </div>
  <hr>
  <form class="" action="data-pemesan.php?data=pemesan&menu=edit&id_pesanan=<?php echo $id_pesanan?>" method="post">
    <div class="form-group">
      <label>Kode Paket</label>
      <input type="text" name="id_pesanan" value="<?php echo $db->bacaDataPemesanan('id_pesanan',$id_pesanan); ?>" class="form-control" style="width:50%" readonly>
    </div>
    <div class="form-group">
      <label>Ubah Status Pemesanan</label>
      <select name="status" class="form-control" style="width:20%">
        <option value="pending">Pending</option>
        <option value="sukses">Sukses</option>
        <option value="gagal">Gagal</option>
      </select>
    </div>
    <hr>
    <input type="submit" name="submit" value="Simpan" class="btn btn-default">
  </form>
</div>
