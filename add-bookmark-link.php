<?php
require_once "dblink.php";
$bookmark = $_GET["bookmark"];
$sql = "INSERT INTO bookmark(UserID,ProductID) VALUES (1,'$bookmark')";
$result = connect_database($sql);
?>