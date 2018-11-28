<?php
		$username="root";
		$password="";
		$database="acg_test";
		$conn = mysqli_connect('localhost',$username,$password);
		@mysqli_select_db($conn,$database) or die( "Unable to select database");
?>
