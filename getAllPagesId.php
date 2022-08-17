<?php

    include 'system/s_db.php';

    $query = "SELECT * FROM pages";
        
    $result = mysqli_query($query);
    
    $data = array();

    if($result){
        while($row = mysqli_fetch_array($result)){
            push_array($data, $row["idPage"]);
        }
    }

    echo json_encode($data);

?>