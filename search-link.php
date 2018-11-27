<?php
require_once "dblink.php";
$search = strtoupper($_GET["search"]);

$sql = "SELECT * FROM product where UPPER(`ProductName`) like '%$search' or UPPER(`ProductName`) like '$search%' or UPPER(`ProductName`) like '%$search%' or UPPER(`ProductName`) = '$search'
or UPPER(`Description`) like '%$search' or UPPER(`Description`) like '$search%' or UPPER(`Description`) like '%$search%' or UPPER(`Description`) = '$search'";
$result = connect_database($sql);

$outp = "[";
while($rs = $result->fetch_assoc()) {
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