<?php

    $hostname = "localhost";
    $username = "";
    $password = "";
    $dbname =   "";

    function s_getDB()
    {        
        $con = mysqli_connect($hostname, $username, $password);
        mysqli_select_db($dbname);

        return $con;
    }
    
?>
