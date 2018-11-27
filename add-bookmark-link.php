<?php
require_once "dblink.php";
$filter = $_GET["filter"];
if($filter === 'all')
$sql = "SELECT * FROM product";
else 
$sql = "SELECT * FROM product where Type = '$filter'";
$result = connect_database($sql);
INSERT INTO bookmark(UserID,ProductID) VALUES (1,20);
?>