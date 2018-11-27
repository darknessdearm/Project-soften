<?php
require_once "dblink.php";
$sql = "SELECT * FROM product";
$result = connect_database($sql);

$outp = "[";
while($rs = $result->fetch_array()) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"ProductID":"'.$rs["ProductID"].'",';
    $outp .= '"ProductName":"'.$rs["ProductName"].'",';
    $outp .= '"Type":"'.$rs["Type"].'",';
    $outp .= '"Price":"'.$rs["Price"].'",';
    $outp .= '"Description":"'.$rs["Description"].'",';
    $outp .= '"Balance":"'.$rs["Balance"].'",';
    $outp .= '"img":"img/Product/'.$rs["img"].'.png"}';
}
$outp .="]";


echo($outp);
?>