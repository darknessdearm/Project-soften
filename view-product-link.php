<?php
require_once "dblink.php";
//$sql = "SELECT * FROM product";
$sql = "SELECT p.*,b.UserID FROM product p LEFT JOIN bookmark b ON p.productID = b.ProductID AND b.UserID = 1";
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
    $outp .= '"img":"img/Product/'.$rs["img"].'.png",';
    $outp .= '"Bookmark":"'.$rs["UserID"].'"}';
}
$outp .="]";


echo($outp);
?>