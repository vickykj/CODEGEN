<?php 
class contract_review{



//Column Names
var $sid;
var $cid;
var $cont_id;
var $orderid;
var $prodid;
var $urs_given;
var $feedback_on_urs;
var $fat_needed;
var $crf_month;
var $so_no;
var $po_no;
var $po_date;
var $machine_model;
var $std_mc;
var $spl_req;
var $cust_sold_addr;
var $ship_to_addr;
var $category;
var $domestic;
var $exports;
var $payment_terms;
var $profit_percentage;
var $os_codes;
var $imports_adv_licence;
var $road_permit;
var $lc_expiry_date;
var $incoterms;
var $fat_date;
var $penalty_start_date;
var $cust_plant_approv;
var $country_export_req;
var $ele_volt;
var $scope_supply;
var $special_req;
var $history_review;
var $bom_rel_date;
var $layout_details;
var $date_of_dispatch;
var $specific_details_bom;
var $special_remark;
var $critical_deadline;
var $KU;
var $shipping_cost;
var $created_date;
var $MP;
var $WP;
var $BP;
   

		
		//Parameterized constructor
		function contract_review($id)
		{
			//retrive value from contract_review with primary key crfid            
			$sql = "select * from contract_review where crfid=$crfid";
			
			//Perform query & show error if any problem to perform
			$rs1=mysqli_query($conn,$sql) or die("Unable to perform query");
			
			//Fetch no of rows 
			$rows= mysqli_num_rows($rs1);
			
			//if rows more than 0 then fetch value & assign it to variable
			if($rows>0)
			{

				$rs = mysqli_fetch_assoc($rs1);

$this->sid=$rs["sid"];
$this->cid=$rs["cid"];
$this->cont_id=$rs["cont_id"];
$this->orderid=$rs["orderid"];
$this->prodid=$rs["prodid"];
$this->urs_given=$rs["urs_given"];
$this->feedback_on_urs=$rs["feedback_on_urs"];
$this->fat_needed=$rs["fat_needed"];
$this->crf_month=$rs["crf_month"];
$this->so_no=$rs["so_no"];
$this->po_no=$rs["po_no"];
$this->po_date=$rs["po_date"];
$this->machine_model=$rs["machine_model"];
$this->std_mc=$rs["std_mc"];
$this->spl_req=$rs["spl_req"];
$this->cust_sold_addr=$rs["cust_sold_addr"];
$this->ship_to_addr=$rs["ship_to_addr"];
$this->category=$rs["category"];
$this->domestic=$rs["domestic"];
$this->exports=$rs["exports"];
$this->payment_terms=$rs["payment_terms"];
$this->profit_percentage=$rs["profit_percentage"];
$this->os_codes=$rs["os_codes"];
$this->imports_adv_licence=$rs["imports_adv_licence"];
$this->road_permit=$rs["road_permit"];
$this->lc_expiry_date=$rs["lc_expiry_date"];
$this->incoterms=$rs["incoterms"];
$this->fat_date=$rs["fat_date"];
$this->penalty_start_date=$rs["penalty_start_date"];
$this->cust_plant_approv=$rs["cust_plant_approv"];
$this->country_export_req=$rs["country_export_req"];
$this->ele_volt=$rs["ele_volt"];
$this->scope_supply=$rs["scope_supply"];
$this->special_req=$rs["special_req"];
$this->history_review=$rs["history_review"];
$this->bom_rel_date=$rs["bom_rel_date"];
$this->layout_details=$rs["layout_details"];
$this->date_of_dispatch=$rs["date_of_dispatch"];
$this->specific_details_bom=$rs["specific_details_bom"];
$this->special_remark=$rs["special_remark"];
$this->critical_deadline=$rs["critical_deadline"];
$this->KU=$rs["KU"];
$this->shipping_cost=$rs["shipping_cost"];
$this->created_date=$rs["created_date"];
$this->MP=$rs["MP"];
$this->WP=$rs["WP"];
$this->BP=$rs["BP"];
				
                
                
			}
			else
			{
$this->sid="" ;
$this->cid="" ;
$this->cont_id="" ;
$this->orderid="" ;
$this->prodid="" ;
$this->urs_given="" ;
$this->feedback_on_urs="" ;
$this->fat_needed="" ;
$this->crf_month="" ;
$this->so_no="" ;
$this->po_no="" ;
$this->po_date="" ;
$this->machine_model="" ;
$this->std_mc="" ;
$this->spl_req="" ;
$this->cust_sold_addr="" ;
$this->ship_to_addr="" ;
$this->category="" ;
$this->domestic="" ;
$this->exports="" ;
$this->payment_terms="" ;
$this->profit_percentage="" ;
$this->os_codes="" ;
$this->imports_adv_licence="" ;
$this->road_permit="" ;
$this->lc_expiry_date="" ;
$this->incoterms="" ;
$this->fat_date="" ;
$this->penalty_start_date="" ;
$this->cust_plant_approv="" ;
$this->country_export_req="" ;
$this->ele_volt="" ;
$this->scope_supply="" ;
$this->special_req="" ;
$this->history_review="" ;
$this->bom_rel_date="" ;
$this->layout_details="" ;
$this->date_of_dispatch="" ;
$this->specific_details_bom="" ;
$this->special_remark="" ;
$this->critical_deadline="" ;
$this->KU="" ;
$this->shipping_cost="" ;
$this->created_date="" ;
$this->MP="" ;
$this->WP="" ;
$this->BP="" ;
			}
		}
}        
?>