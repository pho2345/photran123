<?php

    require('../db/connection.php');
    function getAllcategory(){
        $sql="SELECT * FROM category";
        $result=executeResult($sql);
        return $result;
    }
    function getAllbrand(){
        $sql="select * from brand";
        $result=executeResult($sql);
        return $result;
    }
?>