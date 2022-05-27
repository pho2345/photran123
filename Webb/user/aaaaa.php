<?php 
session_start();
if($_POST['action']==0){
    echo json_encode($_SESSION['cart']);
}
else if($_POST['action']==1){
    $temp=$_POST['temp'];
    for($i=0;$i<count($temp);$i++){
        unset($_SESSION['cart'][$temp[$i]]);
        unset($_SESSION['cart2'][$temp[$i]]);
    }
    
   //echo "oke";
}
else if($_POST['action']==2){
    $value=$_POST['value'];
    unset($_SESSION['cart'][$value]);
    unset($_SESSION['cart2'][$value]);
}     
// echo "<pre>";
 //var_dump($_SESSION['cart']);
//session_destroy();
?>