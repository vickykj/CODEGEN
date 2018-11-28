<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
.colHeader {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #FFFFFF;
	background-color: #333365;
	padding: 3px;
}

.colData {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	padding: 3px;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #CCCCCC;
}
/* Style starts for pagination */
div.pagination {
    padding: 1px;
    margin: 1px;
	font-size:11px;
}
div.pagination a {
    padding: 2px 1px 2px 1px;
    margin: 2px;
    text-decoration: none;
    color: #8D011B;
	font-size:11px;
}
div.pagination a:hover, div.pagination a:active {
    color: #000;
	font-size:11px;
}
div.pagination span.current {
	padding: 2px 1px 2px 1px;
	margin: 2px;      
	font-weight: bold;       
	color: #000000;
	font-size:11px;
}
div.pagination span.disabled {
	padding: 2px 1px 2px 1px;
	margin: 2px;
	color: #E1E1DE;
	font-size:11px;
}
.total_pages
{
	font-size:10px;
	color:#8D011B;
}
/* Style ends for pagination */
</style>
</head>

<body>
<?
		$username="intra1";
		$password="intra1";
		$database="Damien_Property";
		$conn = mysql_connect('linuxbeast2',$username,$password);
		@mysql_select_db($database) or die( "Unable to select database");
?>



<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td class="colHeader">id</td> 
<td class="colHeader">property_id</td> 
<td class="colHeader">headline</td> 
<td class="colHeader">holdtype</td> 
<td class="colHeader">price</td> 
<td class="colHeader">town</td> 
<td class="colHeader">address</td> 
<td class="colHeader">postcode</td> 
<td class="colHeader">company</td> 
<td class="colHeader">added_date</td> 
<td class="colHeader">Actions</td>
</tr>
<?

if(isset($_GET["page"])) $page= $_GET["page"]; else $page="1";
$alamat_pag = "patil.php"; // Full adress your PHP script
$adjacents = 3; // do not change if you do not know
$where=""; // where condition, optional
$order=""; // order condition, optional
$limit = 5; // set limit per page

$tabel="d_property"; // table database form MySQL

include "pagination1.php"; // include the class

$no=$start+1; // the number, if you want it to diplay, optional


while($ro=mysql_fetch_array($portfolio))
 {
	$id = $ro["id"];
	$property_id = $ro["property_id"];
	$headline = $ro["headline"];
	$head_desc = $ro["head_desc"];
	$holdtype = $ro["holdtype"];
	$price = $ro["price"];
	$town = $ro["town"];
	$address = $ro["address"];
	$postcode = $ro["postcode"];
	$company = $ro["company"];
	$enquiryph = $ro["enquiryph"];
	$number = $ro["number"];
	$property = $ro["property"];
	$bedroomno = $ro["bedroomno"];
	$description = $ro["description"];
	$simage = $ro["simage"];
	$limage = $ro["limage"];
	$image1 = $ro["image1"];
	$image2 = $ro["image2"];
	$image3 = $ro["image3"];
	$image4 = $ro["image4"];
	$image5 = $ro["image5"];
	$image6 = $ro["image6"];
	$image7 = $ro["image7"];
	$image8 = $ro["image8"];
	$image9 = $ro["image9"];
	$image10 = $ro["image10"];
	$added_date = $ro["added_date"];
?>

<tr>
<td class=colData><? echo $id ?> </td> 
<td class=colData><? echo $property_id ?> </td> 
<td class=colData><? echo $headline ?> </td> 
<td class=colData><? echo $holdtype ?> </td> 
<td class=colData><? echo $price ?> </td> 
<td class=colData><? echo $town ?> </td> 
<td class=colData><? echo $address ?> </td> 
<td class=colData><? echo $postcode ?> </td> 
<td class=colData><? echo $company ?> </td> 
<td class=colData><? echo $added_date ?> </td> 
<td class=colData> [<a href=".php?id=<? echo $id ?>">edit</a>] [<a href=".php?id=<? echo $id ?>">delete</a>]</td>
</tr>
<?

};
?>
<tr><td><?=$pagination?></td></tr>
</table>




</body>
</html>
