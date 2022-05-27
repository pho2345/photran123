
function load(colorId,productId,brandId,numpage,cate){
    $.ajax({
        type:"post",
        url:"ajax_loadImage.php",
        data:{
            numpage:numpage,
            colorId:colorId,
            productId:productId,
            brandId:brandId,
            cate:cate,
            action:0

        },
        success:function(data){
            var oke =JSON.parse(data);
            /*document.getElementById('sanpham').innerHTML=data['arr1'];
            document.getElementById('phantrang').innerHTML=data['arr2'];*/
            document.getElementById('picture'+oke['arr2']).src=oke['arr1'];
            //console.log(data);
            
        }
    })
}
function out(colorId,productId,brandId,numpage,cate){
    $.ajax({
        type:"post",
        url:"ajax_loadImage.php",
        data:{
            numpage:numpage,
            cate:cate,
            colorId:colorId,
            productId:productId,
            brandId:brandId,
            action:1
        },
        success:function(data){
            var data =JSON.parse(data);
           /* document.getElementById('sanpham').innerHTML=data['arr1'];
            document.getElementById('phantrang').innerHTML=data['arr2'];*/
            document.getElementById('picture'+data['arr2']).src=data['arr1'];
           
        }
    })
}
function showcolor(id){
    document.getElementById('colorokeaaaa'+id).style.display='block';
}
function savebrand(id){
    document.getElementById('hiddenbrand').value=id;
    console.log(document.getElementById('hiddenbrand').value);
}
function notshowcolor(id){
    document.getElementById('colorokeaaaa'+id).style.display='none';
}
function category(brand, cate,numpage){
    let xhrt=new XMLHttpRequest();
        xhrt.open("POST","../ajax/checkbox.php");
        xhrt.onload= function(){
        var js=this.response;
        js=JSON.parse(js);
        
        for(var i=0;i<js.length;i++){
            if(cate==js[i].Id){
                document.getElementById('checkbox'+cate).checked=true;
                document.getElementById('checkbox0').checked=false;
            }
            else{
                document.getElementById('checkbox'+js[i].Id).checked=false;
                document.getElementById('checkbox0').checked=false;
            }
            if(cate==0){
                document.getElementById('checkbox'+js[i].Id).checked=false;
                document.getElementById('checkbox0').checked=true;
            }
        }
        }
        xhrt.send();
        $.ajax({
        type:"post",
        url:"pagination.php",
        data:{
            numpage:numpage,
            cate:cate,
            brand:brand
        },
        success:function(data){
            var data =JSON.parse(data);
            document.getElementById('sanpham').innerHTML=data['arr1'];
            document.getElementById('phantrang').innerHTML=data['arr2'];
            document.getElementById('tieude').innerHTML=data['arr4'];   
            console.log(data['arr2']);
            
            
        }
    })
    
}
function testbu(){
    console.log("data");
}

function Imgload(){
    $.ajax({
        type:"post",
        url:"ajax_loadImage.php",
        data:{
            numpage:numpage,
            colorId:colorId,
            productId:productId,
            brandId:brandId,
            cate:cate,
            action:0

        },
        success:function(data){
            var data =JSON.parse(data);
            document.getElementById('sanpham').innerHTML=data['arr1'];
            document.getElementById('phantrang').innerHTML=data['arr2'];
            
            //console.log(data['arr4']);
            
        }
    })
}
function changeColor(idColor,Idproduct,brand){
   
    $.ajax({
        type:"post",
        url:"../ajax/changColor.php",
        data:{
            IdColor:idColor,
            Idproduct:Idproduct,
            brand:brand
            
        },
        success:function(data){
            var  data=JSON.parse(data)
            document.getElementById('picturedetail').innerHTML=data['arr1'];
            document.getElementById('colordetail').innerHTML=data['arr2'];
            document.getElementById('sizedetail').innerHTML=data['arr3'];
           //
           //console.log(data);
        }
    })
}
function search(value){
   $.ajax({
       type:"post",
       url:"../ajax/search.php",
       data:{
           value:value
       },
       success:function(data){
        document.getElementById('sanpham').innerHTML=data;
       }
   })
}

function addcart(Idproduct){
    var color=$('input[name="color"]:checked').val();
    var size=$('input[name="my-input"]:checked').val();
    console.log(color);console.log(size);
    $.ajax({
        type:'post',
        url:'../ajax/addcart.php',
        data:{
            idproduct:Idproduct,
            color:color,
            size:size
        },
        success:function(data){
            //console.log(data);
            //var data=JSON.parse(data);
           console.log(data);
            /*$('#hideMe').show();
            $('#lblCartCount').html(data['arr2']);
            $('#hideMe').html(data['arr3']);*/
            setTimeout(() => {
                const box = document.getElementById('hideMe');
              
                // 👇️ removes element from DOM
                box.style.display = 'none';
              
                // 👇️ hides element (still takes up space on page)
                // box.style.visibility = 'hidden';
              }, 5000);
            
        }
    })
}
function testde(){
   /* $.ajax({
        type:"post",
        url:'aaaaa.php',
        data:{
            action:0
        },
        success:function(data){
            
            var data=JSON.parse(data);
            console.log(data);
           
           for(var i=0;i<data.length;i++){
                if($("#checkbox"+data[i]).is(":checked")){
                    
                    
                }
           }
           console.log(temp);
           if(temp.length!=0){
            let text = "Are you OK?";
            if (confirm(text) == true) {
                 $.ajax({
                     type:"post",
                     url:'aaaaa.php',
                     data:{
                        action:1,
                        temp:temp
                    },
                    success:function(data){
                        //var data=JSON.parse(data);
                        console.log(data);
                    }
                 });
                
            } else {
                 
            }
           }
           
        }
    })*/
    
    let array=document.getElementsByClassName('checkboxcart');
    var temp=[];
    for(var i=0;i<array.length;i++){
        if($(array[i]).is(":checked")){
            temp.push(array[i].value);
        }
    }
    if(temp.length!=0){
        let text = "Are you OK?";
        if (confirm(text) == true) {
             $.ajax({
                 type:"post",
                 url:'aaaaa.php',
                 data:{
                    action:1,
                    temp:temp
                },
                success:function(data){
                    //var data=JSON.parse(data);
                    console.log(data);
                    for(var i=0;i<temp.length;i++){
                        const element = document.getElementById("cart"+temp[i]);
                        element.remove();
                    }
                    
                }
             });
            
        } else {
             
        }
       }
    
}
function deletecart(value){
    let text = "Do you want to delete product?";
    if (confirm(text) == true) {
        $.ajax({
            type:"post",
            url:'aaaaa.php',
            data:{
               action:2,
               value:value
           },
           success:function(data){
               //var data=JSON.parse(data);
                   const element = document.getElementById("cart"+value);
                   element.remove();
               }
            });
        }
}
