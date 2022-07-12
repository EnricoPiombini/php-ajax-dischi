<?php 
    require "../../api/db.php";

    header("Content-Type: application/json");
    
    echo json_encode($dbDiscs);

?>