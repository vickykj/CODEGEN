<?php 
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
?>