<table class="table">
<thead class="thead-inverse"><tr>
<th>id</th> 
<th>name</th> 
<th>sortname</th> 
<th>A3_UN</th> 
<th>NUM_UN</th> 
<th>DIALING_CODE</th> 
<th>price_factor</th> 
<th>currency</th> 
<th>Actions</th>
</tr></thead><tbody>
<?php

if(isset($_GET["page"])) $page= $_GET["page"]; else $page="1";
$alamat_pag = "listpage.php"; // Full adress your PHP script
$adjacents = 3; // do not change if you do not know
$where=""; // where condition, optional
$order=""; // order condition, optional
$limit = 5; // set limit per page

$tabel="countries"; // table database form MySQL

include "pagination.php"; // include the class

$no=$start+1; // the number, if you want it to diplay, optional


while($ro=mysqli_fetch_array($portfolio))
 {

$id = $ro['id'];
$name = $ro['name'];
$sortname = $ro['sortname'];
$A3_UN = $ro['A3_UN'];
$NUM_UN = $ro['NUM_UN'];
$DIALING_CODE = $ro['DIALING_CODE'];
$price_factor = $ro['price_factor'];
$currency = $ro['currency'];
?>

<tr>
<td><?php echo $id ?> </td> 
<td><?php echo $name ?> </td> 
<td><?php echo $sortname ?> </td> 
<td><?php echo $A3_UN ?> </td> 
<td><?php echo $NUM_UN ?> </td> 
<td><?php echo $DIALING_CODE ?> </td> 
<td><?php echo $price_factor ?> </td> 
<td><?php echo $currency ?> </td> 
<td> [<a href="editpage.php?id=<?php echo $id ?>">edit</a>] [<a href="delpage.php?id=<?php echo $id ?>">delete</a>]</td>
</tr>
<?php
$i++;
};
?>
<tbody>
</table>

<?php echo $pagination?>

