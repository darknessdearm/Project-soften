<?php
require_once "dblink.php";
$sql = "SELECT * FROM bookmark WHERE UserID = 1";
$result = connect_database($sql);

$outp = "[";
while($rs = $result->fetch_assoc()) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"UserID":"'.$rs["UserID"].'",';
    $outp .= '"ProductID":"'.$rs["ProductID"].'",';
}
$outp .="]";

echo($outp);
?>