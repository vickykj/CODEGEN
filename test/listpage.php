<?php include("dbconfig.php"); ?>
<?php include("functions.php"); ?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<table class="table table-bordered">
<thead style="max-width:100%;"; class="thead-inverse"><tr>
<th>cid</th> 
<th>custname</th> 
<th>add1</th> 
<th>add2</th> 
<th>pincode</th> 
<th>department</th> 
<th>designation</th> 
<th>city</th> 
<th>state</th> 
<th>country</th> 
<th>phone</th> 
<th>office_phone</th> 
<th>cell_phone</th> 
<th>email</th> 
<th>sap_code</th> 
<th>Actions</th>
</tr>
</thead>
<tbody>
<?php
 $query = "select * from  master_customer";
 $result = mysqli_query($conn,$query);
 $num = mysqli_num_rows($result);
 $i=0;
 while ($i < $num) {

$cid = mysqli_result($result,$i,'cid');
$custname = mysqli_result($result,$i,'custname');
$add1 = mysqli_result($result,$i,'add1');
$add2 = mysqli_result($result,$i,'add2');
$pincode = mysqli_result($result,$i,'pincode');
$department = mysqli_result($result,$i,'department');
$designation = mysqli_result($result,$i,'designation');
$city = mysqli_result($result,$i,'city');
$state = mysqli_result($result,$i,'state');
$country = mysqli_result($result,$i,'country');
$phone = mysqli_result($result,$i,'phone');
$office_phone = mysqli_result($result,$i,'office_phone');
$cell_phone = mysqli_result($result,$i,'cell_phone');
$email = mysqli_result($result,$i,'email');
$sap_code = mysqli_result($result,$i,'sap_code');
?>

<tr>
<td><?php echo $cid ?> </td> 
<td><?php echo $custname ?> </td> 
<td><?php echo $add1 ?> </td> 
<td><?php echo $add2 ?> </td> 
<td><?php echo $pincode ?> </td> 
<td><?php echo $department ?> </td> 
<td><?php echo $designation ?> </td> 
<td><?php echo $city ?> </td> 
<td><?php echo $state ?> </td> 
<td><?php echo $country ?> </td> 
<td><?php echo $phone ?> </td> 
<td><?php echo $office_phone ?> </td> 
<td><?php echo $cell_phone ?> </td> 
<td><?php echo $email ?> </td> 
<td><?php echo $sap_code ?> </td> 
<td> [<a href="editpage.php?cid=<?php echo $cid ?>">edit</a>] [<a href="delpage.php?cid=<?php echo $cid ?>">delete</a>]</td>
</tr>
<?php
$i++;
};
?>
</tbody>
</table>


