<?php 
    require('../db/connection.php');
        if(!empty($_POST['value'])){
            $value=$_POST['value'];
            $sql="SELECT *  FROM product,brand WHERE brand.Id=product.Brand_id and product.Name_product LIKE '%".$value."%'";
            $result=executeResult($sql);
            //die($result);
            $s='';
            foreach ($result as $result) {
                $sql="select * from detailcolor inner join color on color.Id=detailcolor.Id_color where detailcolor.Id_product=".$result['Id_product'];
                $color=executeResult($sql);
                $cl="";
                $idColor="";
                $brand=$result['Id'];
                $numpage=1;
                $cate=0;

                foreach($color as $color){
                    
                    $idColor=$color['Id'];
                    $cl.="<button style='margin-left:10%;background:".$color['Color']."'
                    onmouseover='load(".$color['Id'].",".$result['Id_product'].",".$result['Brand_id'].",".$numpage.",".$cate.")'
                    onmouseout='out(".$color['Id'].",".$result['Id_product'].",".$result['Brand_id'].",".$numpage.",".$cate.")'>".$color['Color']."</button>";
                }
                $s = $s . "<div class='sach' onmouseover='showcolor(". $result['Id_product'].")' onmouseout='notshowcolor(". $result['Id_product'].")'>"
                    . "<a href='chitietsach.php?Id_brand=".$brand."&&Id_product=" . $result['Id_product'] . "&&Id_color=".$idColor."'>"
                    . "<img id='picture".$result['Id_product']."' src='../images/brand/".$result['Name']."/image/".$result['Name_product']."/Color_".$idColor."/1.png'x>"
                    . "</a>"
                    . "<div class='tensach'>" . $result['Name_product'] . "</div>"
                    . "<div class='colorokeaaaa 'id='colorokeaaaa". $result['Id_product']."' >" . $cl . "</div>"
                    . "<div class='gia'>" .  $result['Price'] . "<sup>đ</sup></div>"
                    . "</div>";
                    $arr['arr4']=$result['Name'];
            }
        }
        echo($s);
       
    
    
?>