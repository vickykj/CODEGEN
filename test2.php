<?php
ob_start(); 
session_start();

$tbl = $_POST['tbl'];
$_SESSION['$tbl'] = $tbl;

$svr = $_SESSION['$svr'];
$usr = $_SESSION['$usr'];
$pwd = $_SESSION['$pwd'];
$dbn = $_SESSION['$dbn'];



@$conn = mysqli_connect($svr,$usr,$pwd);
if (!$conn){
die('Could not connect to database ');
};

@mysqli_select_db($conn,$dbn) or die( "Unable to select database");

$query = "show columns from  ".$tbl;
// echo $query;

 $result = mysqli_query($conn,$query);
 $num = mysqli_num_rows($result);


$i=0;
?>
<form name="form4" method="post" action="">
<select name="pkey" id="pkey">
<?php
while ($i < $num) {
$fieldname=mysqli_result($result,$i,"Field");

?>
     <option value="<?php echo $fieldname?>"><?php echo $fieldname?></option>


<?php
$i++;
};

function mysqli_result($res, $row, $field=0) {
    $res->data_seek($row);
    $datarow = $res->fetch_array();
    return $datarow[$field];
}
?>
</select>
<input type="button" name="Button" value="Select" id="Submit" class="btn" onclick="pglist(document.form4.pkey.options[document.form4.pkey.selectedIndex].value)">

  
  </form>
  
  <div id="pkeymsg"></div>

