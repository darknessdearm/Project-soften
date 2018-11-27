<?php
    function connect_database( $sql){
        $conn = new mysqli("localhost", "root", "","test");
        mysqli_set_charset($conn, "utf8");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
?>