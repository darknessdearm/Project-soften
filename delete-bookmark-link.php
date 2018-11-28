<?php
require_once "dblink.php";
$bookmark = $_GET["bookmark"];
$sql = "DELETE FROM bookmark WHERE UserID = 1 AND ProductID = '$bookmark'";
$result = connect_database($sql);
?>