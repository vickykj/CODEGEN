<?php 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 							FUNCTIONS FOR FIELDS IN contract_review 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  sid 
//-----------------------------------------------------------------------------------------------------------

function sid($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"sid");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  cid 
//-----------------------------------------------------------------------------------------------------------

function cid($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"cid");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  cont_id 
//-----------------------------------------------------------------------------------------------------------

function cont_id($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"cont_id");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  orderid 
//-----------------------------------------------------------------------------------------------------------

function orderid($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"orderid");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  prodid 
//-----------------------------------------------------------------------------------------------------------

function prodid($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"prodid");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  urs_given 
//-----------------------------------------------------------------------------------------------------------

function urs_given($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"urs_given");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  feedback_on_urs 
//-----------------------------------------------------------------------------------------------------------

function feedback_on_urs($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"feedback_on_urs");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  fat_needed 
//-----------------------------------------------------------------------------------------------------------

function fat_needed($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"fat_needed");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  crf_month 
//-----------------------------------------------------------------------------------------------------------

function crf_month($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"crf_month");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  so_no 
//-----------------------------------------------------------------------------------------------------------

function so_no($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"so_no");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  po_no 
//-----------------------------------------------------------------------------------------------------------

function po_no($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"po_no");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  po_date 
//-----------------------------------------------------------------------------------------------------------

function po_date($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"po_date");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  machine_model 
//-----------------------------------------------------------------------------------------------------------

function machine_model($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"machine_model");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  std_mc 
//-----------------------------------------------------------------------------------------------------------

function std_mc($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"std_mc");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  spl_req 
//-----------------------------------------------------------------------------------------------------------

function spl_req($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"spl_req");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  cust_sold_addr 
//-----------------------------------------------------------------------------------------------------------

function cust_sold_addr($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"cust_sold_addr");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  ship_to_addr 
//-----------------------------------------------------------------------------------------------------------

function ship_to_addr($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"ship_to_addr");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  category 
//-----------------------------------------------------------------------------------------------------------

function category($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"category");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  domestic 
//-----------------------------------------------------------------------------------------------------------

function domestic($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"domestic");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  exports 
//-----------------------------------------------------------------------------------------------------------

function exports($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"exports");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  payment_terms 
//-----------------------------------------------------------------------------------------------------------

function payment_terms($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"payment_terms");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  profit_percentage 
//-----------------------------------------------------------------------------------------------------------

function profit_percentage($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"profit_percentage");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  os_codes 
//-----------------------------------------------------------------------------------------------------------

function os_codes($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"os_codes");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  imports_adv_licence 
//-----------------------------------------------------------------------------------------------------------

function imports_adv_licence($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"imports_adv_licence");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  road_permit 
//-----------------------------------------------------------------------------------------------------------

function road_permit($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"road_permit");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  lc_expiry_date 
//-----------------------------------------------------------------------------------------------------------

function lc_expiry_date($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"lc_expiry_date");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  incoterms 
//-----------------------------------------------------------------------------------------------------------

function incoterms($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"incoterms");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  fat_date 
//-----------------------------------------------------------------------------------------------------------

function fat_date($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"fat_date");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  penalty_start_date 
//-----------------------------------------------------------------------------------------------------------

function penalty_start_date($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"penalty_start_date");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  cust_plant_approv 
//-----------------------------------------------------------------------------------------------------------

function cust_plant_approv($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"cust_plant_approv");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  country_export_req 
//-----------------------------------------------------------------------------------------------------------

function country_export_req($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"country_export_req");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  ele_volt 
//-----------------------------------------------------------------------------------------------------------

function ele_volt($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"ele_volt");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  scope_supply 
//-----------------------------------------------------------------------------------------------------------

function scope_supply($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"scope_supply");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  special_req 
//-----------------------------------------------------------------------------------------------------------

function special_req($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"special_req");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  history_review 
//-----------------------------------------------------------------------------------------------------------

function history_review($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"history_review");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  bom_rel_date 
//-----------------------------------------------------------------------------------------------------------

function bom_rel_date($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"bom_rel_date");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  layout_details 
//-----------------------------------------------------------------------------------------------------------

function layout_details($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"layout_details");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  date_of_dispatch 
//-----------------------------------------------------------------------------------------------------------

function date_of_dispatch($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"date_of_dispatch");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  specific_details_bom 
//-----------------------------------------------------------------------------------------------------------

function specific_details_bom($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"specific_details_bom");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  special_remark 
//-----------------------------------------------------------------------------------------------------------

function special_remark($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"special_remark");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  critical_deadline 
//-----------------------------------------------------------------------------------------------------------

function critical_deadline($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"critical_deadline");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  KU 
//-----------------------------------------------------------------------------------------------------------

function KU($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"KU");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  shipping_cost 
//-----------------------------------------------------------------------------------------------------------

function shipping_cost($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"shipping_cost");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  created_date 
//-----------------------------------------------------------------------------------------------------------

function created_date($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"created_date");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  MP 
//-----------------------------------------------------------------------------------------------------------

function MP($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"MP");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  WP 
//-----------------------------------------------------------------------------------------------------------

function WP($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"WP");
		 mysqli_free_result($result);
		 return $temp;
}


    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  BP 
//-----------------------------------------------------------------------------------------------------------

function BP($conn,$crfid){ 

	// SQL Injection check	

		 $crfid = stripslashes($crfid);
		 $crfid = mysqli_real_escape_string($conn,$crfid); 

		 $query = "select * from contract_review where crfid ='".$crfid."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"BP");
		 mysqli_free_result($result);
		 return $temp;
}

?>
