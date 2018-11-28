<?php
ob_start(); 
session_start();

$svr = $_POST['svr'];
$usr = $_POST['usr'];
$pwd = $_POST['pwd'];

@$conn = mysqli_connect($svr,$usr,$pwd);
if (!$conn){
die('Could not connect to database ');
};

if ($conn){

$_SESSION['$svr'] = $svr;
$_SESSION['$usr'] = $usr;
$_SESSION['$pwd'] = $pwd;

$query = "show databases";
$result = mysqli_query($conn,$query);
$num=mysqli_num_rows($result);
?>
<form id="form2" name="form2" method="post" action="" >
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td>Select Database: </td>
    <td> <select name="dbname">

    <?php
$i=0;
while ($i < $num) {
$dbname=mysqli_result($result,$i,"Database");
?> 
    <option value="<?php echo $dbname?>"><?php echo $dbname?></option>
    
    <?php
$i++;
};
?>
  </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label for="Submit"></label>
      <input type="button" name="Button" value="Select" id="Submit" class="btn" onclick="seldb(document.form2.dbname.options[document.form2.dbname.selectedIndex].value)"/></td>
  </tr>
</table>
</form>
  
  <?php
};

function mysqli_result($res, $row, $field=0) {
    $res->data_seek($row);
    $datarow = $res->fetch_array();
    return $datarow[$field];
}
?>