<?php

class Koneksi
{
  public function koneksi(){
    try
    {
    $con = new PDO("mysql:host=localhost;dbname=wedding","root","");
    return $con;
    }
    catch(PDOException $e)
    {
    	echo $e->getMessage();
    }
  }

}


 ?>
