<?php
include "dblink.php";

$result = $conn->query("SELECT * 
                        FROM product");

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"ProductID":"'.$rs["ProductID"].'",';
    $outp .= '"ProductName":"'.$rs["ProductName"].'",';
    $outp .= '"Type":"'.$rs["Type"].'",';
    $outp .= '"Price":"'.$rs["Price"].'",';
    $outp .= '"Description":"'.$rs["Description"].'",';
    $outp .= '"Balance":"'.$rs["Balance"].'",';
    $outp .= '"img":"img/Product/'.$rs["img"].'.jpg"}';
}
$outp .="]";

$conn->close();

echo($outp);
?>