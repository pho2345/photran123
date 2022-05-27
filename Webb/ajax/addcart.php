<?php 
    require('../db/connection.php');
    session_start();      
       if(!isset($_SESSION['user']) && !empty($_POST['idproduct'])){
            $idproduct=$_POST['idproduct'];
            $idcolor=$_POST['color'];
            $size=$_POST['size'];
            

            
        $sql ='select * from product,brand where product.Brand_id=brand.Id and product.Id_product='.$idproduct;
        $product=executeSingleResult($sql);
        
        //echo json_encode($product);
        $sql="select * from color where Id=".$idcolor;
        $color=executeSingleResult($sql);

        $cart=(isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];
        $cart2=  (isset($_SESSION['cart2'])) ? $_SESSION['cart2'] : [];

        $item=[
            'id'=>$product['Id_product'],
            'name'=>$product['Name_product'],
            'image'=>'1.png',
            'brand'=>$product['Name'],
            'price' =>$product['Price'],
            'size'=> $size,
            'color' => $color['Color'],
            'idcolor'=>$idcolor,
            'quantity'=>1
        ];
       }
       $item2=[
        'id'=>$product['Id_product'],
            'name'=>$product['Name_product'],
            'image'=>'1.png',
            'brand'=>$product['Name'],
            'price' =>$product['Price'],
            'size'=> $size,
            'color' => $color['Color'],
            'idcolor'=>$idcolor,
            'quantity'=>1
    ];
    /*if(empty($_SESSION['cart'])){
      $_SESSION['cart'][count($cart)]=$item;
      $_SESSION['cart2'][count($cart2)]=$item2;
    }
    else{*/
    if (in_array($item2, $cart2)){
        $d=array_search($item2,$cart2);
        $_SESSION['cart'][$d]['quantity']+=1;
      }
    else
      {
      $_SESSION['cart'][count($cart)]=$item;
      $_SESSION['cart2'][count($cart2)]=$item2;
   
      }
      $sl=0;
      foreach($_SESSION['cart'] as $cart){
        $sl+=$cart['quantity'];
      }
      $arr=array('arr1'=>'', 'arr2'=>'','arr3'=>'');
      $arr['arr1']=$_SESSION['cart'];
      $arr['arr2']=$sl;
      $arr['arr3']='Success';
      echo "<pre>";
      var_dump($_SESSION['cart2']);
      echo json_encode($arr);
      
      //echo json_encode($arr);*/
    //}
?>