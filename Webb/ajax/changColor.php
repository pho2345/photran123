<?php 
    require("../db/connection.php");
    //---------------------------------------load anh----------------------------------------------
    $IdColor=$_POST['IdColor'];
    $Idproduct=$_POST['Idproduct'];
    $sql= "select * from product where Id_product=".$Idproduct;
    $product=executeSingleResult($sql);
    $p="";
    $Idbrand=$_POST['brand'];
    $sql ="select * from brand where Id=".$Idbrand;
    $brand=executeSingleResult($sql);
    $arr=array('arr1'=>'', 'arr2'=>'','arr3'=>'');
    $sql="select * from color_anh where Id_product=".$Idproduct." and IdColor=".$IdColor;
    $result=executeResult($sql);
    foreach($result as $result){
        $p.="<div style='float:left;width:50%'> 
        <img  src='../images/brand/".$brand['Name']."/image/".$product['Name_product']."/Color_".$IdColor."/".$result['Image']."' class='img-responsive' alt='Image'>
        </div>";
    }
    $arr['arr1']=$p;
    //------------------------------------------------button color--------------------------------
    $sql="select * from detailcolor,color where detailcolor.Id_color=color.Id and Id_product=".$Idproduct;
    $color=executeResult($sql);
    $c="";
    foreach($color as $color){
        if($IdColor==$color['Id']){
            $c.="<input type='radio' disabled checked name='color' id='".$color['Id']."' value='".$color['Id']."' >
            <label class='hethang' style='background-color:".$color['Color'].";height:30px;width:50px' for=".$color['Id']."></label>";
        }
        else{
            $c.="<input type='radio' name='color' id='".$color['Id']."'  value='".$color['Id']."'>
            <label class='conhang'  onclick='changeColor(".$color['Id'].", ".$Idproduct.",".$Idbrand.")' style='background-color:".$color['Color'].";height:30px;width:50px' for=".$color['Id']."></label>";
        }
    }
    $arr['arr2']=$c;
    //die($c);

    //-------------------------------size-------------------------------
    $sql="select * from detailsizeco where Id_product=".$Idproduct." and IdColor=".$IdColor;
    $size=executeResult($sql);
    $size_new=array_values($size);
    
    $a[]=null;
    foreach($size_new as $size_new){
        array_push($a,$size_new['IdSize']);
    }
    array_shift($a);
    
    $sql ="select * from size";
    
    $arrsize=executeResult($sql);  
    $btsize="";
    foreach($arrsize as $arrsize){
        if(in_array($arrsize['Id_size'], $a)){	
            $index=array_search($arrsize['Id_size'],$a);

            if($size[$index]['Quantity']>0){
                $btsize.="<input type='radio' name='my-input' id=".$arrsize['Id_size']." value=".$arrsize['Id_size'].">
                <label   class='conhang' for=".$arrsize['Id_size'].">".$arrsize['Id_size']."</label>";
            }
            else{
                $btsize.="<input type='radio' name='my-input' id=".$arrsize['Id_size']." disabled>
                <label class='hethang'  for=".$arrsize['Id_size'].">".$arrsize['Id_size']."</label>";
            }
            
        }
        else{
            $btsize.="<input type='radio' name='my-input' id=".$arrsize['Id_size']." disabled>
            <label class='hethang'  for=".$arrsize['Id_size'].">".$arrsize['Id_size']."</label>";   
        }
    }
    $arr['arr3']=$btsize;
    
//--------------------------------------------

    echo json_encode($arr);
