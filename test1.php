<?php
ob_start(); 
session_start();

$dbn = $_POST['dbn'];
$svr = $_SESSION['$svr'];
$usr = $_SESSION['$usr'];
$pwd = $_SESSION['$pwd'];

$_SESSION['$dbn'] = $dbn;

$col = "Tables_in_".$dbn;

//mysql_connect($svr,$usr,$pwd);
@$conn = mysqli_connect($svr,$usr,$pwd);
if (!$conn){
die('Could not connect to database ');
};

$query = "show tables from `".$dbn."`";

 $result = mysqli_query($conn,$query);
 $num = mysqli_num_rows($result);


$i=0;
while ($i < $num) {
$tblname=mysqli_result($result,$i,$col);

?>
    
<a href="javascript:selpk('<?php echo $tblname ?>')"><?php echo $tblname ?>	</a><br />

<?php
$i++;
};


function mysqli_result($res, $row, $field=0) {
    $res->data_seek($row);
    $datarow = $res->fetch_array();
    return $datarow[$field];
}
?>