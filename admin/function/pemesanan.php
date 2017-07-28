<?php

include "koneksi.php";

class pemesanan
{
  // properties

  function bacaDataPemesanan($type, $id_pesanan)
	{
    global $con;

		$sql = "SELECT * FROM pemesanan WHERE id_pesanan = '$id_pesanan'";
		$hasil = mysqli_query($con, $sql);
		$data = mysqli_fetch_array($hasil);

		if($type == "status") return $data['status'];
		else if($type == "id_pesanan") return $data['id_pesanan'];

	}//end of function



  function updatePemesanan($id_pesanan, $status)
	{
    global $con;

      $query = "UPDATE pemesanan SET status = '$status'
                                  WHERE id_pesanan = '$id_pesanan'";

		$hasil = mysqli_query($con, $query);
		if($hasil)echo "Status Data Pemesanan berhasil diubah";
		else echo "Status Data Pemesanan gagal diubah";
	}//end of function

}

 ?>
