<?php include("dbconfig.php"); ?>
<?php include("functions.php"); ?>
<?php

$cid=$_GET['cid'];
$crfid = get($conn,$cid);
$query= "select * from contract_review_bpo where crfid=" .$crfid;
$result=mysqli_query($conn,$query);
$sid="sid";
$cid="cid";
$cont_id="cont_id";
$orderid="orderid";
$prodid="prodid";
$cust_name="cust_name";
$cust_sold_addr="cust_sold_addr";
$ship_to_addr="ship_to_addr";
$machine_mfr="machine_mfr";
$machine_srno="machine_srno";
$ocv_printer_mfr="ocv_printer_mfr";
$KU="KU";
$shipping_cost="shipping_cost";
$created_date="created_date";
$prodctToBeRead_1="prodctToBeRead_1";
$prodctToBeRead_2="prodctToBeRead_2";
$prodctToBeRead_3="prodctToBeRead_3";
$prodctToBeRead_4="prodctToBeRead_4";
$inspectionOn_1="inspectionOn_1";
$inspectionOn_2="inspectionOn_2";
$inspectionOn_3="inspectionOn_3";
$inspectionOn_4="inspectionOn_4";
$fovAndLight_1="fovAndLight_1";
$fovAndLight_2="fovAndLight_2";
$fovAndLight_3="fovAndLight_3";
$fovAndLight_4="fovAndLight_4";
$MP="MP";
$WP="WP";
$BP="BP";
?>


<form action="editpagesub.php" method="post" name="form1" id="form1">
<input name="crfid" type="hidden" id="crfid" value="<?php echo $crfid ?>"/>
<label for="sid" class="label_edit">sid:</label> <input name="sid" type="text" value="<?php echo $sid ?>"/> <br />
<label for="cid" class="label_edit">cid:</label> <input name="cid" type="text" value="<?php echo $cid ?>"/> <br />
<label for="cont_id" class="label_edit">cont_id:</label> <input name="cont_id" type="text" value="<?php echo $cont_id ?>"/> <br />
<label for="orderid" class="label_edit">orderid:</label> <input name="orderid" type="text" value="<?php echo $orderid ?>"/> <br />
<label for="prodid" class="label_edit">prodid:</label> <input name="prodid" type="text" value="<?php echo $prodid ?>"/> <br />
<label for="cust_name" class="label_edit">cust_name:</label> <input name="cust_name" type="text" value="<?php echo $cust_name ?>"/> <br />
<label for="cust_sold_addr" class="label_edit">cust_sold_addr:</label> <input name="cust_sold_addr" type="text" value="<?php echo $cust_sold_addr ?>"/> <br />
<label for="ship_to_addr" class="label_edit">ship_to_addr:</label> <input name="ship_to_addr" type="text" value="<?php echo $ship_to_addr ?>"/> <br />
<label for="machine_mfr" class="label_edit">machine_mfr:</label> <input name="machine_mfr" type="text" value="<?php echo $machine_mfr ?>"/> <br />
<label for="machine_srno" class="label_edit">machine_srno:</label> <input name="machine_srno" type="text" value="<?php echo $machine_srno ?>"/> <br />
<label for="ocv_printer_mfr" class="label_edit">ocv_printer_mfr:</label> <input name="ocv_printer_mfr" type="text" value="<?php echo $ocv_printer_mfr ?>"/> <br />
<label for="KU" class="label_edit">KU:</label> <input name="KU" type="text" value="<?php echo $KU ?>"/> <br />
<label for="shipping_cost" class="label_edit">shipping_cost:</label> <input name="shipping_cost" type="text" value="<?php echo $shipping_cost ?>"/> <br />
<label for="created_date" class="label_edit">created_date:</label> <input name="created_date" type="text" value="<?php echo $created_date ?>"/> <br />
<label for="prodctToBeRead_1" class="label_edit">prodctToBeRead_1:</label> <input name="prodctToBeRead_1" type="text" value="<?php echo $prodctToBeRead_1 ?>"/> <br />
<label for="prodctToBeRead_2" class="label_edit">prodctToBeRead_2:</label> <input name="prodctToBeRead_2" type="text" value="<?php echo $prodctToBeRead_2 ?>"/> <br />
<label for="prodctToBeRead_3" class="label_edit">prodctToBeRead_3:</label> <input name="prodctToBeRead_3" type="text" value="<?php echo $prodctToBeRead_3 ?>"/> <br />
<label for="prodctToBeRead_4" class="label_edit">prodctToBeRead_4:</label> <input name="prodctToBeRead_4" type="text" value="<?php echo $prodctToBeRead_4 ?>"/> <br />
<label for="inspectionOn_1" class="label_edit">inspectionOn_1:</label> <input name="inspectionOn_1" type="text" value="<?php echo $inspectionOn_1 ?>"/> <br />
<label for="inspectionOn_2" class="label_edit">inspectionOn_2:</label> <input name="inspectionOn_2" type="text" value="<?php echo $inspectionOn_2 ?>"/> <br />
<label for="inspectionOn_3" class="label_edit">inspectionOn_3:</label> <input name="inspectionOn_3" type="text" value="<?php echo $inspectionOn_3 ?>"/> <br />
<label for="inspectionOn_4" class="label_edit">inspectionOn_4:</label> <input name="inspectionOn_4" type="text" value="<?php echo $inspectionOn_4 ?>"/> <br />
<label for="fovAndLight_1" class="label_edit">fovAndLight_1:</label> <input name="fovAndLight_1" type="text" value="<?php echo $fovAndLight_1 ?>"/> <br />
<label for="fovAndLight_2" class="label_edit">fovAndLight_2:</label> <input name="fovAndLight_2" type="text" value="<?php echo $fovAndLight_2 ?>"/> <br />
<label for="fovAndLight_3" class="label_edit">fovAndLight_3:</label> <input name="fovAndLight_3" type="text" value="<?php echo $fovAndLight_3 ?>"/> <br />
<label for="fovAndLight_4" class="label_edit">fovAndLight_4:</label> <input name="fovAndLight_4" type="text" value="<?php echo $fovAndLight_4 ?>"/> <br />
<label for="MP" class="label_edit">MP:</label> <input name="MP" type="text" value="<?php echo $MP ?>"/> <br />
<label for="WP" class="label_edit">WP:</label> <input name="WP" type="text" value="<?php echo $WP ?>"/> <br />
<label for="BP" class="label_edit">BP:</label> <input name="BP" type="text" value="<?php echo $BP ?>"/> <br />

 <input type="submit" name="button" id="button" value="Submit" />
</form>