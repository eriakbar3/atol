<?php

$con = mysqli_connect("localhost", "root", "", "oop");

if(mysqli_connect_errno()){

  echo "The Connection was not established: " . mysqli_connect_error();

}

class database
{
  // properties

	function tampilBarang()
	{
      echo "jihads";



	}//end of function

}// end of class
?>
