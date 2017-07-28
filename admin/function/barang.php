<?php

include "koneksi.php";

class barang
{
  // properties

	function tampilBarang()
	{
    global $con;
    $i=0;

		$sql = "SELECT * FROM barang";
		$hasil = mysqli_query($con, $sql);

        while($data=mysqli_fetch_array($hasil))
		{
      $i++;

			echo "<tr>";
			echo "<td>$i</td>";
			echo "<td><img src='../image/$data[gambar]' width='150px'></td>";
			echo "<td>$data[nama_barang]</td>";
    	echo "<td>$data[harga]</td>";
			echo "<td><a href='?data=barang&menu=edit&kd_barang=$data[kd_barang]'>Edit</a> | <a href='data-barang/delete.php?ID=$data[kd_barang]'>Delete </a></td>";
			echo "</tr>";

		}// end of while
	}//end of function

	function tampilBarangHome()
	{
    global $con;
    $i=0;

		$sql = "SELECT * FROM barang";
		$hasil = mysqli_query($con, $sql);

        while($data=mysqli_fetch_array($hasil))
		{
      $i++;

			echo "<tr>";
			echo "<td>$i</td>";
			echo "<td><img src='../image/$data[gambar]' width='150px'></td>";
			echo "<td>$data[nama_barang]</td>";
    	echo "<td>$data[harga]</td>";
			echo "</tr>";

		}// end of while
	}//end of function

	function tampilCariBarang($nama_barang)
	{
    global $con;
    $i=0;

		$sql = "SELECT * FROM barang where nama_barang = '$nama_barang'";
		$hasil = mysqli_query($con, $sql);


        while($data=mysqli_fetch_array($hasil))
		{
      $i++;

			echo "<tr>";
			echo "<td>$i</td>";
			echo "<td><img src='../image/$data[gambar]' width='150px'></td>";
			echo "<td>$data[nama_barang]</td>";
    	echo "<td>$data[harga]</td>";
			echo "<td><a href='?data=barang&menu=edit&kd_barang=$data[kd_barang]'>Edit</a> | <a href='data-barang/delete.php?ID=$data[kd_barang]'>Delete </a></td>";
			echo "</tr>";

		}// end of whilee
	}//end of function

  function bacaDataBarang($type, $kd_barang)
	{
    global $con;

		$sql = "SELECT * FROM barang WHERE kd_barang = '$kd_barang'";
		$hasil = mysqli_query($con, $sql);
		$data = mysqli_fetch_array($hasil);

		if($type == "nama_barang") return $data['nama_barang'];
		else if($type == "harga") return $data['harga'];
    else if($type == "gambar") return $data['gambar'];
		else if($type == "kd_barang") return $data['kd_barang'];
	}//end of function

  function tambahBarang($nama_barang, $harga, $gambar)
	{
    global $con;

      $sql= "select * from barang order by kd_barang desc limit 1";
      $hasil = mysqli_query($con, $sql);
      $data=mysqli_fetch_array($hasil);
      $kd_barang = $data['kd_barang'];
      $id = "BAR";
      $no_id = (integer) substr($kd_barang,4);
      $no_id++;
      $kd_barang_baru = "$id" . sprintf("%03d",$no_id);

	    $query = "INSERT INTO barang SET kd_barang = '$kd_barang_baru',
	                                    gambar = '$gambar',
									                    nama_barang = '$nama_barang',
										                  harga = '$harga'";

		$hasil = mysqli_query($con, $query);
		if($hasil)echo "Data Barang berhasil disimpan";
		else echo "Data Barang gagal disimpan";
	}//end of function

  function updateBarang($kd_barang, $nama_barang, $harga, $gambar)
	{
    global $con;

      $query = "UPDATE barang SET gambar = '$gambar',
									                nama_barang = '$nama_barang',
										              harga = '$harga'
                                  WHERE kd_barang = '$kd_barang'";

		$hasil = mysqli_query($con, $query);
		if($hasil)echo "Data Barang berhasil diubah";
		else echo "Data Barang gagal diubah";
	}//end of function

  function hapusBarang($id)
	{
    global $con;

	  $sql = "DELETE FROM barang WHERE kd_barang = '$id'";
	  $hasil = mysqli_query($con, $sql);
	}
}// end of class


 ?>
