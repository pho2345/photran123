<?php 
    require('../db/connection.php');
    
        $sql="SELECT * FROM category";
        $result=executeResult($sql);
        echo json_encode($result);
    
    
?>