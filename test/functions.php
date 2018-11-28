<?php 
// $_GET replacement to prevent SQL INJECTION ATTACKS 

function get($conn,$varble){
@$tempvar = $_GET[$varble];
@$tempvar = stripslashes($tempvar);
@$tempvar = mysqli_real_escape_string($conn,$tempvar);
return $tempvar;
}


// $_POST replacement to prevent SQL INJECTION ATTACKS 

function post($conn,$varble){
@$tempvar = $_POST[$varble];
@$tempvar = stripslashes($tempvar);
@$tempvar = mysqli_real_escape_string($conn,$tempvar);
return $tempvar;
}

function mysqli_result($res, $row, $field=0) {
    $res->data_seek($row);
    $datarow = $res->fetch_array();
    return $datarow[$field];
}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 							FUNCTIONS FOR FIELDS IN master_customer 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  custname 
//-----------------------------------------------------------------------------------------------------------

function custname($cid){ 

	// SQL Injection check	

		 $cid = stripslashes($cid);
		 $cid = mysqli_real_escape_string($conn,$cid); 

		 $query = "select * from master_customer where cid ='".$cid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"custname");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  add1 
//-----------------------------------------------------------------------------------------------------------

function add1($cid){ 

	// SQL Injection check	

		 $cid = stripslashes($cid);
		 $cid = mysqli_real_escape_string($conn,$cid); 

		 $query = "select * from master_customer where cid ='".$cid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"add1");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  add2 
//-----------------------------------------------------------------------------------------------------------

function add2($cid){ 

	// SQL Injection check	

		 $cid = stripslashes($cid);
		 $cid = mysqli_real_escape_string($conn,$cid); 

		 $query = "select * from master_customer where cid ='".$cid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"add2");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  pincode 
//-----------------------------------------------------------------------------------------------------------

function pincode($cid){ 

	// SQL Injection check	

		 $cid = stripslashes($cid);
		 $cid = mysqli_real_escape_string($conn,$cid); 

		 $query = "select * from master_customer where cid ='".$cid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"pincode");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  department 
//-----------------------------------------------------------------------------------------------------------

function department($cid){ 

	// SQL Injection check	

		 $cid = stripslashes($cid);
		 $cid = mysqli_real_escape_string($conn,$cid); 

		 $query = "select * from master_customer where cid ='".$cid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"department");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  designation 
//-----------------------------------------------------------------------------------------------------------

function designation($cid){ 

	// SQL Injection check	

		 $cid = stripslashes($cid);
		 $cid = mysqli_real_escape_string($conn,$cid); 

		 $query = "select * from master_customer where cid ='".$cid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"designation");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  city 
//-----------------------------------------------------------------------------------------------------------

function city($cid){ 

	// SQL Injection check	

		 $cid = stripslashes($cid);
		 $cid = mysqli_real_escape_string($conn,$cid); 

		 $query = "select * from master_customer where cid ='".$cid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"city");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  state 
//-----------------------------------------------------------------------------------------------------------

function state($cid){ 

	// SQL Injection check	

		 $cid = stripslashes($cid);
		 $cid = mysqli_real_escape_string($conn,$cid); 

		 $query = "select * from master_customer where cid ='".$cid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"state");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  country 
//-----------------------------------------------------------------------------------------------------------

function country($cid){ 

	// SQL Injection check	

		 $cid = stripslashes($cid);
		 $cid = mysqli_real_escape_string($conn,$cid); 

		 $query = "select * from master_customer where cid ='".$cid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"country");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  phone 
//-----------------------------------------------------------------------------------------------------------

function phone($cid){ 

	// SQL Injection check	

		 $cid = stripslashes($cid);
		 $cid = mysqli_real_escape_string($conn,$cid); 

		 $query = "select * from master_customer where cid ='".$cid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"phone");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  office_phone 
//-----------------------------------------------------------------------------------------------------------

function office_phone($cid){ 

	// SQL Injection check	

		 $cid = stripslashes($cid);
		 $cid = mysqli_real_escape_string($conn,$cid); 

		 $query = "select * from master_customer where cid ='".$cid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"office_phone");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  cell_phone 
//-----------------------------------------------------------------------------------------------------------

function cell_phone($cid){ 

	// SQL Injection check	

		 $cid = stripslashes($cid);
		 $cid = mysqli_real_escape_string($conn,$cid); 

		 $query = "select * from master_customer where cid ='".$cid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"cell_phone");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  email 
//-----------------------------------------------------------------------------------------------------------

function email($cid){ 

	// SQL Injection check	

		 $cid = stripslashes($cid);
		 $cid = mysqli_real_escape_string($conn,$cid); 

		 $query = "select * from master_customer where cid ='".$cid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"email");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  sap_code 
//-----------------------------------------------------------------------------------------------------------

function sap_code($cid){ 

	// SQL Injection check	

		 $cid = stripslashes($cid);
		 $cid = mysqli_real_escape_string($conn,$cid); 

		 $query = "select * from master_customer where cid ='".$cid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"sap_code");
		 mysqli_free_result($result);
		 return $temp;
}




?>