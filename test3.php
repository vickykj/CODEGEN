<?php
ob_start(); 
session_start();


$pkey = $_SESSION['pkey'];
$tableclass=$_POST['tableclass']; 
$listpage=$_POST['listpage'];
$addpage=$_POST['addpage'];
$addsub=$_POST['addsub'];
$editpage=$_POST['editpage'];
$delpage=$_POST['delpage'];
$editsub=$_POST['editsub'];



$svr = $_SESSION['$svr'];
$usr = $_SESSION['$usr'];
$pwd = $_SESSION['$pwd'];
$dbn = $_SESSION['$dbn'];
$tbl = $_SESSION['$tbl'];


@$conn = mysqli_connect($svr,$usr,$pwd);
if (!$conn){
die('Could not connect to database ');
};

@mysqli_select_db($conn,$dbn) or die( "Unable to select database");




 $query = "show columns from  ".$tbl;

 $result = mysqli_query($conn,$query);
 $num = mysqli_num_rows($result);


$i=0;
?>


<ul id="countrytabs" class="shadetabs">
<li><a href="#" rel="country3" class="selected">DBConfig</a></li>
<li><a href="#" rel="country4" class="selected">Generic Functions</a></li>
<li><a href="#" rel="country1" class="selected">Entity Functions</a></li>
<li><a href="#" rel="country7" class="selected">Table Class</a></li>
<li><a href="#" rel="country8" class="selected">Pagination</a></li>
<li><a href="#" rel="country6">List All Data</a></li>
<li><a href="#" rel="country2">Add Data Code</a></li>
<li><a href="#" rel="country5">Edit Data Code</a></li>
<li><a href="#" rel="country9">Misc. Stuff</a></li>
</ul>

<div style="border:1px solid gray; width:850px; margin-bottom: 1em; padding: 10px">

<div id="country3" class="tabcontent">
<textarea name="db" cols="100" rows="15" id="db">
&lt;?php
		$username="<?php echo $usr ?>";
		$password="<?php echo $pwd ?>";
		$database="<?php echo $dbn ?>";
		$conn = mysqli_connect('<?php echo $svr ?>',$username,$password);
		@mysqli_select_db($conn,$database) or die( "Unable to select database");
?&gt;
</textarea>
</div>	


<div id="country4" class="tabcontent">
<textarea name="genfunctions" cols="100" rows="15" id="genfunctions">

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
</textarea>
</div>


<div id="country1" class="tabcontent">
<textarea name="functions" cols="100" rows="15" id="functions">

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 							FUNCTIONS FOR FIELDS IN <?php  echo $tbl ?> 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
<?php
while ($i < $num) {
$fieldname=mysqli_result($result,$i,"Field");

if ($pkey <> $fieldname) {


?>
    


//-----------------------------------------------------------------------------------------------------------
// Entity function to get value for  <?php  echo $fieldname ?> 
//-----------------------------------------------------------------------------------------------------------

function <?php echo $fieldname ?>($conn,$<?php echo $pkey ?>){ 

	// SQL Injection check	

		 $<?php echo $pkey ?> = stripslashes($<?php echo $pkey ?>);
		 $<?php echo $pkey ?> = mysqli_real_escape_string($conn,$<?php echo $pkey ?>); 

		 $query = "select * from <?php echo $tbl ?> where <?php echo $pkey ?> ='".$<?php echo $pkey ?>."'";
		 $result = mysqli_query($conn,$query);	
		 $temp = mysqli_result($result,0,"<?php echo $fieldname ?>");
		 mysqli_free_result($result);
		 return $temp;
}


<?php
	}
	
$i++;
};
?>
</textarea>

</div>


<div id="country7" class="tabcontent">
<strong>Add the following style to your CSS include file:</strong><br />
<textarea name="listcss" cols="100" rows="15" id="listcss">

class <?php echo $tableclass ?>
{
<?php
 $query = "show columns from  ".$tbl;
 $result = mysqli_query($conn,$query);
 $num = mysqli_num_rows($result);
 $i=0;$va='';$ca ='';$pa='';
 while ($i < $num) {
 $fieldname=mysqli_result($result,$i,"Field");
if ($pkey <> $fieldname) {
 $va = $va . "var $" . $fieldname . ";\n";

// null value constructor variable...removing from echo below temporarily
 $ca = $ca . "$". "this->" . $fieldname . "=\"\" ;\n";
 
 $pa = $pa . "$". "this->" . $fieldname . "=$"."rs[\"$fieldname\"];\n";

 
 }
 $i++;
 };
 

 

?>



//Column Names
<?php  echo $va; ?>
   

		
		//Parameterized constructor
		function <?php echo $tableclass ?>($id)
		{
			//retrive value from <?php echo $tbl ?> with primary key <?php echo $pkey ?>
            
			$sql = "select * from <?php echo $tbl ?> where <?php echo $pkey ?>=$<?php echo $pkey ?>";
			
			//Perform query & show error if any problem to perform
			$rs1=mysqli_query($conn,$sql) or die("Unable to perform query");
			
			//Fetch no of rows 
			$rows= mysqli_num_rows($rs1);
			
			//if rows more than 0 then fetch value & assign it to variable
			if($rows>0)
			{

				$rs = mysqli_fetch_assoc($rs1);

<?php  echo $pa; ?>				
                
                
			}
			else
			{
<?php  echo $ca; ?>
			}
		}
}        
</textarea>
</div>


<div id="country8" class="tabcontent">

STEP 1: 

  <a href="pagination.txt" target="_blank">save this file as pagination.php</a><br /><br /><strong>Add the following style to your CSS include file:</strong><br />
<textarea name="listcss" cols="100" rows="15" id="listcss">
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

</textarea>
<br /><br />
<strong>Add the following code to <?php echo $listpage?>.php :</strong><br />
<textarea name="addhtmlcss" cols="100" rows="15" id="addhtmlcss">
<table class="table">
<thead class="thead-inverse"><tr>
<?php
 $query = "show columns from  ".$tbl;
 $result = mysqli_query($conn,$query);
 $num=mysqli_num_rows($result);
 $i=0;$c=$ccc=$t='';
 while ($i < $num) {
$fieldname=mysqli_result($result,$i,"Field");

$c = $c. "$".$fieldname." = mysqli_result($"."result,$"."i,"."'".$fieldname."'".");\n";

$ccc = $ccc. "$".$fieldname.  " = $"."ro["."'".$fieldname. "'];\n";

// $id = $ro["id"];

$t = $t. "<td>&lt;?php echo $".$fieldname." ?&gt; </td> \n";

?>
<th><?php echo $fieldname ?></th> 
<?php
$i++;
};
?><th>Actions</th>
</tr></thead><tbody>
&lt;?php

if(isset($_GET["page"])) $page= $_GET["page"]; else $page="1";
$alamat_pag = "<?php echo $listpage?>.php"; // Full adress your PHP script
$adjacents = 3; // do not change if you do not know
$where=""; // where condition, optional
$order=""; // order condition, optional
$limit = 5; // set limit per page

$tabel="<?php echo $tbl?>"; // table database form MySQL

include "pagination.php"; // include the class

$no=$start+1; // the number, if you want it to diplay, optional


while($ro=mysqli_fetch_array($portfolio))
 {

<?php echo $ccc ?>
?&gt;

<tr>
<?php echo $t ?>
<td> [<a href="<?php echo $editpage?>.php?<?php echo $pkey ?>=&lt;?php echo $<?php echo $pkey ?> ?&gt;">edit</a>] [<a href="<?php echo $delpage?>.php?<?php echo $pkey ?>=&lt;?php echo $<?php echo $pkey ?> ?&gt;">delete</a>]</td>
</tr>
&lt;?php
$i++;
};
?&gt;
<tbody>
</table>

&lt;?php echo $pagination?&gt;

</textarea>

</div>









<div id="country6" class="tabcontent">
<strong>Add the following style to your CSS include file:</strong><br />
<textarea name="listcss" cols="100" rows="15" id="listcss">
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

</textarea>
<br /><br />
<strong>Add the following style to <?php  echo $listpage?>.php :</strong><br />
<textarea name="addhtmlcss" cols="100" rows="15" id="addhtmlcss">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


<table class="table">
 <thead class="thead-inverse"><tr>
<?php 
 $query = "show columns from  ".$tbl;
 $result = mysqli_query($conn,$query);;
 $num=mysqli_num_rows($result);
 $i=0;
 $c123='';$t123='';
 while ($i < $num) {
$fieldname=mysqli_result($result,$i,"Field");

$c123 = $c123. "$".$fieldname." = mysqli_result($"."result,$"."i,"."'".$fieldname."'".");\n";
$t123 = $t123. "<td>&lt;?php echo $".$fieldname." ?&gt; </td> \n";

?>
<th><?php  echo $fieldname ?></th> 
<?php 
$i++;
};
?><th>Actions</th>
</tr><thead><tbody>
&lt;?php
 $query = "select * from  <?php  echo $tbl ?>";
 $result = mysqli_query($conn,$query);
 $num = mysqli_num_rows($result);
 $i=0;
 while ($i < $num) {

<?php  echo $c123 ?>
?&gt;

<tr>
<?php  echo $t123 ?>
<td> [<a href="<?php  echo $editpage?>.php?<?php  echo $pkey ?>=&lt;?php echo $<?php  echo $pkey ?> ?&gt;">edit</a>] [<a href="<?php  echo $delpage?>.php?<?php  echo $pkey ?>=&lt;?php echo $<?php  echo $pkey ?> ?&gt;">delete</a>]</td>
</tr>
&lt;?php
$i++;
};
?&gt;
</tbody>
</table>
</textarea>
</div>



<div id="country2" class="tabcontent">
<strong>Add the following style to your CSS include file:</strong><br />
<textarea name="addhtmlcss" cols="100" rows="15" id="addhtmlcss">
label.label_add{

/* Display as Table */
display:inline-block;
width:100px;
padding:5px;

/* Fonts & Colors */
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
}

</textarea>
<br />
<strong>Add the following FORM code to <?php  echo $addpage?>.php:</strong><br />
<textarea name="addhtmlcode" cols="100" rows="15" id="addhtmlcode">
<form action="<?php  echo $addsub?>.php" method="post" name="form1" id="form1">
<?php 
 $query = "show columns from  ".$tbl;
$result = mysqli_query($conn,$query);
 $num = mysqli_num_rows($result);
 $i=0;
 while ($i < $num) {
$fieldname=mysqli_result($result,$i,"Field");

if ($pkey <> $fieldname) {
?>
	   <label for="<?php  echo $fieldname ?>" class="label_add"><?php  echo $fieldname ?>:</label> <input name="<?php  echo $fieldname ?>" type="text" /> <br />
<?php 
	}
	
$i++;
};
?>

 <input type="submit" name="button" id="button" value="Submit" />
</form>
</textarea>


<br />
<strong>Add the following PHP/MySQL code to <?php  echo $addsub?>.php:</strong><BR />
<strong style="color:red">DO NOT FORGET TO ADD GET() AND POST() FUNCTIONS TO YOUR FUNCTIONS INCLUDE FILE</strong>
<textarea name="addsqlcode" cols="100" rows="15" id="addsqlcode">
&lt;?php
<?php 
 $query = "show columns from  ".$tbl;
 $result = mysqli_query($conn,$query);
 $num = mysqli_num_rows($result);
 $i=0;$f=$v='';
 while ($i < $num) {
$fieldname=mysqli_result($result,$i,"Field");

if ($pkey <> $fieldname) {
?>
@$<?php  echo $fieldname ?>= post($conn,'<?php  echo $fieldname ?>');
<?php 

// generating fieldname code
$f = $f. $fieldname;
if ($i < ($num-1)){
$f = $f. ",";
}
// generating value code
$v = $v. "'&quot;.$".$fieldname.".&quot;'";
if ($i < ($num-1)){
$v = $v. ",";
}

	}
	
$i++;
};


?>


$query = "insert into <?php  echo $tbl ?> (<?php  echo $f ?>) values (<?php  echo $v ?>)";
$result = mysqli_query($conn,$query);
$sid = mysqli_insert_id($conn);
header("location:<?php  echo $listpage?>.php?added=$sid");

?&gt;
</textarea>

</div>


<div id="country5" class="tabcontent">
<strong>Add the following style to your CSS include file:</strong><br />
<textarea name="edithtmlcss" cols="100" rows="15" id="edithtmlcss">
label.label_edit{

/* Display as Table */
display:inline-block;
width:100px;
padding:5px;

/* Fonts & Colors */
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
}

</textarea>
<br />
<strong>Add the following FORM code to <?php  echo $editpage?>.php:</strong><br />
<textarea name="edithtmlcode" cols="100" rows="15" id="edithtmlcode">
&lt;?php
$<?php  echo $pkey ?> = get('<?php  echo $pkey ?>');
$query= "select * from <?php  echo $tbl ?> where <?php  echo $pkey ?>=" .$<?php  echo $pkey ?>;
$result = mysqli_query($conn,$query);
<?php 
 $query = "show columns from  ".$tbl;
 $result = mysqli_query($conn,$query);
 $num = mysqli_num_rows($result);
 $i=0;
 while ($i < $num) {
$fieldname=mysqli_result($result,$i,"Field");

if ($pkey <> $fieldname) {
?>
$<?php  echo $fieldname ?>=mysqli_result($result,0,"<?php  echo $fieldname ?>");
<?php 
	}
	
$i++;
};
?>
?&gt;


<form action="<?php  echo $editsub?>.php" method="post" name="form1" id="form1">
<input name="<?php  echo $pkey ?>" type="hidden" id="<?php  echo $pkey ?>" value="&lt;?php echo $<?php  echo $pkey ?> ?&gt;"/>
<?php 
 $query = "show columns from  ".$tbl;
 $result = mysqli_query($conn,$query);
 $num = mysqli_num_rows($result);
 $i=0;
 while ($i < $num) {
$fieldname=mysqli_result($result,$i,"Field");

if ($pkey <> $fieldname) {
?>
<label for="<?php  echo $fieldname ?>" class="label_edit"><?php  echo $fieldname ?>:</label> <input name="<?php  echo $fieldname ?>" type="text" value="&lt;?php echo $<?php  echo $fieldname ?> ?&gt;"/> <br />
<?php 
	}
	
$i++;
};
?>

 <input type="submit" name="button" id="button" value="Submit" />
</form>
</textarea>


<br />
<strong>Add the following PHP/MySQL code to <?php  echo $editsub?>.php:</strong><BR />
<strong style="color:red">DO NOT FORGET TO ADD GET() AND POST() FUNCTIONS TO YOUR FUNCTIONS INCLUDE FILE</strong>
<textarea name="addsqlcode" cols="100" rows="15" id="addsqlcode">
&lt;?php
@$<?php  echo $pkey ?>= post($conn,'<?php  echo $pkey ?>')
<?php 
 $query = "show columns from  ".$tbl;
 $result = mysqli_query($conn,$query);
 $num = mysqli_num_rows($result);
 $i=0;
 while ($i < $num) {
$fieldname=mysqli_result($result,$i,"Field");
if ($pkey <> $fieldname) {
?>
@$<?php  echo $fieldname ?>= post($conn,'<?php  echo $fieldname ?>');
<?php 

// generating set fieldname & value code
$u = $u."$fieldname=". "'&quot;.$".$fieldname.".&quot;'";
if ($i < ($num-1)){
$u = $u. ", ";
}



	}
	
$i++;
};


?>

$query = "update <?php  echo $tbl ?> set <?php  echo $u ?> where <?php  echo $pkey ?>= ".$<?php  echo $pkey ?>;
$result = mysqli_query($conn,$query);
header("location:<?php  echo $listpage?>.php?updated=$<?php  echo $pkey ?>");

?&gt;
</textarea>

</div>



<div id="country9" class="tabcontent">
<strong>Misc Stuff</strong><br />


</div>
</div>
<?php
function mysqli_result($res, $row, $field=0) {
    $res->data_seek($row);
    $datarow = $res->fetch_array();
    return $datarow[$field];
}
?>




