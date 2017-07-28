<?php

include "koneksi.php";

class paket{

  function tampilPaket()
	{
    global $con;
    $i=0;

		$sql = "SELECT * FROM paket";
		$hasil = mysqli_query($con, $sql);

        while($data=mysqli_fetch_array($hasil))
		{
      $i++;

			echo "<tr>";
			echo "<td>$i</td>";
			echo "<td><img src='../image/$data[gambar]' width='150px'></td>";
			echo "<td>$data[nama_paket]</td>";
      echo "<td>$data[jenis_paket]</td>";
      echo "<td>$data[harga]</td>";
    	echo "<td>$data[deskripsi]</td>";
			echo "<td><a href='?data=paket&menu=edit&kd_paket=$data[kd_paket]'>Edit</a> | <a href='data-paket/delete.php?ID=$data[kd_paket]'>Delete </a></td>";
			echo "</tr>";

		}// end of while
	}//end of function

  function tampilPaketHome()
	{
    global $con;
    $i=0;

		$sql = "SELECT * FROM paket";
		$hasil = mysqli_query($con, $sql);

        while($data=mysqli_fetch_array($hasil))
		{
      $i++;

			echo "<tr>";
			echo "<td>$i</td>";
			echo "<td><img src='../image/$data[gambar]' width='150px'></td>";
			echo "<td>$data[nama_paket]</td>";
      echo "<td>$data[jenis_paket]</td>";
      echo "<td>$data[harga]</td>";
    	echo "<td>$data[deskripsi]</td>";
			echo "</tr>";

		}// end of while
	}//end of function

  function tampilCariPaket($nama_paket)
	{
    global $con;
    $i=0;

		$sql = "SELECT * FROM paket where nama_paket = '$nama_paket'";
		$hasil = mysqli_query($con, $sql);

        while($data=mysqli_fetch_array($hasil))
		{
      $i++;

			echo "<tr>";
			echo "<td>$i</td>";
			echo "<td><img src='../image/$data[gambar]' width='150px'></td>";
			echo "<td>$data[nama_paket]</td>";
      echo "<td>$data[jenis_paket]</td>";
      echo "<td>$data[harga]</td>";
    	echo "<td>$data[deskripsi]</td>";
			echo "<td><a href='?data=paket&menu=edit&kd_paket=$data[kd_paket]'>Edit</a> | <a href='data-paket/delete.php?ID=$data[kd_paket]'>Delete </a></td>";
			echo "</tr>";

		}// end of while
	}//end of function


  function tambahPaket($nama_paket, $harga, $gambar, $jenis_paket, $deskripsi)
	{
    global $con;

      $sql= "select * from paket order by kd_paket desc limit 1";
      $hasil = mysqli_query($con, $sql);
      $data=mysqli_fetch_array($hasil);
      $kd_paket = $data['kd_paket'];
      $id = "PKT";
      $no_id = (integer) substr($kd_paket,4);
      $no_id++;
      $kd_paket_baru = "$id" . sprintf("%03d",$no_id);

	    $query = "INSERT INTO paket SET kd_paket = '$kd_paket_baru',
	                                    gambar = '$gambar',
                                      nama_paket = '$nama_paket',
									                    jenis_paket = '$jenis_paket',
										                  harga = '$harga',
                                      deskripsi = '$deskripsi'";


		$hasil = mysqli_query($con, $query);
		if($hasil)echo "Data Paket berhasil disimpan";
		else echo "Data Paket gagal disimpan";
	}//end of function

  function bacaDataPaket($type, $kd_paket)
	{
    global $con;

		$sql = "SELECT * FROM paket WHERE kd_paket = '$kd_paket'";
		$hasil = mysqli_query($con, $sql);
		$data = mysqli_fetch_array($hasil);

		if($type == "nama_paket") return $data['nama_paket'];
		else if($type == "harga") return $data['harga'];
    else if($type == "gambar") return $data['gambar'];
    else if($type == "deskripsi") return $data['deskripsi'];
    else if($type == "jenis_paket") return $data['jenis_paket'];
		else if($type == "kd_paket") return $data['kd_paket'];
	}//end of function

  function updatePaket($kd_paket, $nama_paket, $harga, $gambar, $jenis_paket, $deskripsi)
	{
    global $con;

      $query = "UPDATE paket SET gambar = '$gambar',
                                 nama_paket = '$nama_paket',
									               jenis_paket = '$jenis_paket',
										             harga = '$harga',
                                 deskripsi = '$deskripsi'
                                  WHERE kd_paket = '$kd_paket'";

		$hasil = mysqli_query($con, $query);
		if($hasil)echo "Data Paket berhasil diubah";
		else echo "Data Paket gagal diubah";
	}//end of function

  function hapusPaket($id)
	{
    global $con;

	  $sql = "DELETE FROM paket WHERE kd_paket = '$id'";
	  $hasil = mysqli_query($con, $sql);
	}

}

 ?>
