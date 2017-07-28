<?php

$con = mysqli_connect("localhost", "root", "", "wedding");

if(mysqli_connect_errno()){

  echo "The Connection was not established: " . mysqli_connect_error();

}

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
			echo "<td>$data[gambar]</td>";
			echo "<td>$data[nama_barang]</td>";
    	echo "<td>$data[harga]</td>";
			echo "<td><a href='?data=barang&menu=edit&kd_barang=$data[kd_barang]'>Edit</a> | <a href='data-barang/delete.php?ID=$data[kd_barang]'>Delete </a></td>";
			echo "</tr>";

		}// end of while
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
			echo "<td>$data[gambar]</td>";
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
