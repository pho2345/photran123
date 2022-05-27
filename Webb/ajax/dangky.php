<?php 
 require('../db/connection.php');
function login($user,$pass){
    $sql="select count(*) as one from custormer where username like '".$user."' and password like '".$pass."'";
    $rs=executeSingleResult($sql);
    if($rs['one'] ==1){
        header("../../php/sanpham.php?");
    }

}

    $user=$_POST['user'];
    $hoten=$_POST['hoten'];
    $email=$_POST['email'];
    $mk=$_POST['mk'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];

    $sql="INSERT INTO custormer (Id, Name, Address, Phone, Mail, username, password,status) VALUES 
    (NULL, '".$hoten."', '".$address."', '".$phone."', '".$email."', '".$user."', '".$mk."', '1');";
    if(execute($sql)){
        echo 0;
    }
    else{
        echo 1;
    }
    
?>