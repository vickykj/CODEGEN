<?php
		$username="pma";
		$password="pma";
		$database="acg-vc5";
		$conn = mysqli_connect('linuxbeast2',$username,$password);
		@mysqli_select_db($conn,$database) or die( "Unable to select database");
?>