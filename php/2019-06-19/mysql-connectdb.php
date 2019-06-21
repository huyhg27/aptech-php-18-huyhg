<?php
    function connect_db($serverName = "localhost",$userName = "root",$password = "", $dbName = "ap_18_4")
    {
        $conn = mysqli_connect($serverName, $userName, $password, $dbName);
        if(!$conn){
            die("Connection failed: " . mysqli_connect_error());
        }
    }

?>