<?php

    $hostname = "localhost";
    $username = "sparrko";
    $password = "whatIsIt1234-";
    $dbname =   "localhost";

    function s_getDB()
    {        
        $con = mysqli_connect($hostname, $username, $password);
        mysqli_select_db($dbname);

        return $con;
    }
    
?>