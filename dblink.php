<?php
    function connect_database( $sql){
        $conn = new mysqli("localhost", "root", "","gourmet_home_cooking");
        mysqli_set_charset($conn, "utf8");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
?>