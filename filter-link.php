<?php
require_once "dblink.php";
$filter = $_GET["filter"];
if($filter === 'all')
$sql = "SELECT * FROM product";
else 
$sql = "SELECT * FROM product where Type = '$filter'";
$result = connect_database($sql);


$sql_bookmark = "SELECT * FROM bookmark where UserID = '1'";
$result_bookmark = connect_database($sql_bookmark);
while($rs = $result_bookmark->fetch_assoc()){
    $product[$rs["ProductID"]] = 1;
}

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
    if(isset($product[$rs["ProductID"]]) && $product[$rs["ProductID"]] == 1)
    $outp .= '"Bookmark":"1"}';
    else
    $outp .= '"Bookmark":""}';
}
$outp .="]";


echo($outp);
?>